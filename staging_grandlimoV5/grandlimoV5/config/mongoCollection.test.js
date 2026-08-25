const test = require("node:test");
const assert = require("node:assert/strict");
const {
  isProjectionSpec,
  normalizeFindArgs,
  normalizeWriteOptions,
  wrapInsertResult,
  wrapUpdateResult,
  wrapDeleteResult,
  wrapCollection,
} = require("./mongoCollection");

test("treats { field: 1 } as a legacy projection", () => {
  assert.equal(isProjectionSpec({ _id: 1, name: 1 }), true);
  assert.equal(isProjectionSpec({ projection: { name: 1 } }), false);
  assert.equal(isProjectionSpec({}), false);
});

test("normalizeFindArgs wraps legacy projections", () => {
  const { filter, options } = normalizeFindArgs(
    { phone: "123" },
    { name: 1, _id: 0 }
  );
  assert.deepEqual(filter, { phone: "123" });
  assert.deepEqual(options, { projection: { name: 1, _id: 0 } });
});

test("normalizeFindArgs leaves modern options alone", () => {
  const { options } = normalizeFindArgs(
    { _id: 1 },
    { projection: { name: 1 }, sort: { _id: -1 } }
  );
  assert.deepEqual(options.projection, { name: 1 });
  assert.deepEqual(options.sort, { _id: -1 });
});

test("normalizeWriteOptions maps $upsert and strips w/safe", () => {
  const options = normalizeWriteOptions({ $upsert: false, w: 1, safe: true });
  assert.equal(options.upsert, false);
  assert.equal("w" in options, false);
  assert.equal("safe" in options, false);
});

test("wrapUpdateResult exposes result.nModified for old callers", () => {
  const wrapped = wrapUpdateResult({
    acknowledged: true,
    matchedCount: 1,
    modifiedCount: 1,
  });
  assert.equal(wrapped.modifiedCount, 1);
  assert.equal(wrapped.result.nModified, 1);
  assert.equal(wrapped.result.n, 1);
});

test("wrapInsertResult exposes insertedCount and ops", () => {
  const doc = { _id: 1, name: "a" };
  const wrapped = wrapInsertResult({ acknowledged: true, insertedId: 1 }, doc);
  assert.equal(wrapped.insertedCount, 1);
  assert.equal(wrapped.insertedId, 1);
  assert.deepEqual(wrapped.ops, [doc]);
});

test("wrapDeleteResult exposes result.n", () => {
  const wrapped = wrapDeleteResult({ acknowledged: true, deletedCount: 1 });
  assert.equal(wrapped.deletedCount, 1);
  assert.equal(wrapped.result.n, 1);
});

function fakeNative(overrides) {
  return {
    collectionName: "people",
    find(filter, options) {
      return {
        toArray: async () => [{ filter, options }],
        next: async () => null,
        close: async () => {},
        sort() {
          return this;
        },
        limit() {
          return this;
        },
        skip() {
          return this;
        },
        project() {
          return this;
        },
        [Symbol.asyncIterator]: async function* () {},
      };
    },
    findOne: async (filter, options) => ({ filter, options }),
    insertOne: async (doc) => ({ acknowledged: true, insertedId: doc._id || 7 }),
    insertMany: async (docs) => ({
      acknowledged: true,
      insertedCount: docs.length,
      insertedIds: Object.fromEntries(docs.map((d, i) => [i, d._id])),
    }),
    updateOne: async (_filter, _update, options) => ({
      acknowledged: true,
      matchedCount: 1,
      modifiedCount: 1,
      options,
    }),
    updateMany: async () => ({
      acknowledged: true,
      matchedCount: 2,
      modifiedCount: 2,
    }),
    deleteOne: async () => ({ acknowledged: true, deletedCount: 1 }),
    deleteMany: async () => ({ acknowledged: true, deletedCount: 3 }),
    countDocuments: async (filter) => (filter && filter.phone ? 1 : 0),
    aggregate() {
      return {
        toArray: async () => [{ ok: 1 }],
        [Symbol.asyncIterator]: async function* () {},
      };
    },
    findOneAndUpdate: async (filter, update) => ({
      ...filter,
      phone: update.$set.phone,
    }),
    ...overrides,
  };
}

test("wrapCollection.find maps legacy projection and toArray is awaitable", async () => {
  const collection = wrapCollection(fakeNative());
  const rows = await collection.find({ phone: "1" }, { name: 1 }).toArray();
  assert.equal(rows[0].options.projection.name, 1);
});

test("wrapCollection.insertOne and updateOne return dual-shape results", async () => {
  const collection = wrapCollection(fakeNative());
  const inserted = await collection.insertOne({ _id: 9, name: "x" });
  assert.equal(inserted.insertedCount, 1);
  const updated = await collection.updateOne(
    { _id: 9 },
    { $set: { name: "y" } }
  );
  assert.equal(updated.result.nModified, 1);
});

test("wrapCollection.update with $upsert uses updateOne", async () => {
  let seenOptions;
  const collection = wrapCollection(
    fakeNative({
      updateOne: async (_filter, _update, options) => {
        seenOptions = options;
        return { acknowledged: true, matchedCount: 1, modifiedCount: 0 };
      },
    })
  );
  await collection.update({ _id: 1 }, { $set: { a: 1 } }, { $upsert: false });
  assert.equal(seenOptions.upsert, false);
});

test("wrapCollection.remove maps to deleteMany and cursor.count uses countDocuments", async () => {
  const collection = wrapCollection(fakeNative());
  const removed = await collection.remove({ _id: 1 });
  assert.equal(removed.result.n, 3);
  const count = await collection.find({ phone: "1" }).count();
  assert.equal(count, 1);
});

test("wrapCollection.findOneAndUpdate keeps result.value for driver 3 callers", async () => {
  const collection = wrapCollection(fakeNative());
  const result = await collection.findOneAndUpdate(
    { email: "a@b.c" },
    { $set: { phone: "555" } },
    { returnDocument: "after" }
  );
  assert.equal(result.value.phone, "555");
});
