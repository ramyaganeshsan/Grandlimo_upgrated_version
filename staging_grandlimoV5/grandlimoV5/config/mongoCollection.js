/**
 * MongoDB Node driver 6 collection adapter.
 * Maps legacy driver 2/3 call shapes (find(filter, projection), insert/update/remove,
 * cursor.count, $upsert) to driver 6 and dual-shape write results
 * (result.n / result.nModified / insertedCount).
 */

const FIND_OPTION_KEYS = new Set([
  "projection",
  "sort",
  "skip",
  "limit",
  "hint",
  "collation",
  "maxTimeMS",
  "batchSize",
  "session",
  "readPreference",
  "showRecordId",
  "timeout",
  "comment",
  "allowDiskUse",
  "min",
  "max",
  "returnKey",
  "explain",
]);

function maybeCallback(promise, callback) {
  if (typeof callback !== "function") {
    return promise;
  }
  return promise.then(
    (value) => {
      callback(null, value);
      return value;
    },
    (err) => {
      callback(err);
      throw err;
    }
  );
}

function isProjectionSpec(value) {
  if (value == null || typeof value !== "object" || Array.isArray(value)) {
    return false;
  }
  const keys = Object.keys(value);
  if (keys.length === 0) {
    return false;
  }
  if (keys.some((key) => FIND_OPTION_KEYS.has(key))) {
    return false;
  }
  return keys.every((key) => {
    const field = value[key];
    return (
      field === 1 ||
      field === 0 ||
      field === true ||
      field === false ||
      field === -1 ||
      (field && typeof field === "object")
    );
  });
}

function coerceProjection(spec) {
  const projection = {};
  for (const key of Object.keys(spec)) {
    projection[key] = spec[key] === -1 ? 1 : spec[key];
  }
  return projection;
}

function normalizeFindArgs(filter, spec) {
  const query = filter == null ? {} : filter;
  if (spec == null || typeof spec !== "object" || Array.isArray(spec)) {
    return { filter: query, options: {} };
  }
  if (isProjectionSpec(spec)) {
    return { filter: query, options: { projection: coerceProjection(spec) } };
  }
  const options = { ...spec };
  if (options.fields && !options.projection) {
    options.projection = coerceProjection(options.fields);
    delete options.fields;
  }
  return { filter: query, options };
}

function normalizeWriteOptions(options) {
  if (options == null || typeof options !== "object" || Array.isArray(options)) {
    return {};
  }
  const out = { ...options };
  if (Object.prototype.hasOwnProperty.call(out, "$upsert")) {
    out.upsert = Boolean(out.$upsert);
    delete out.$upsert;
  }
  if (Object.prototype.hasOwnProperty.call(out, "$multi")) {
    out.multi = Boolean(out.$multi);
    delete out.$multi;
  }
  delete out.w;
  delete out.safe;
  delete out.fsync;
  delete out.j;
  return out;
}

function wrapInsertResult(result, docs) {
  const documents = Array.isArray(docs) ? docs : [docs];
  const insertedCount =
    result.insertedCount != null
      ? result.insertedCount
      : result.insertedId != null
        ? 1
        : 0;
  return {
    acknowledged: result.acknowledged !== false,
    insertedId: result.insertedId,
    insertedIds: result.insertedIds,
    insertedCount,
    ops: documents,
    result: { ok: 1, n: insertedCount },
  };
}

function wrapUpdateResult(result) {
  const matchedCount = result.matchedCount || 0;
  const modifiedCount = result.modifiedCount || 0;
  return {
    acknowledged: result.acknowledged !== false,
    matchedCount,
    modifiedCount,
    upsertedCount: result.upsertedCount || 0,
    upsertedId: result.upsertedId,
    result: { ok: 1, n: matchedCount, nModified: modifiedCount },
  };
}

function wrapDeleteResult(result) {
  const deletedCount = result.deletedCount || 0;
  return {
    acknowledged: result.acknowledged !== false,
    deletedCount,
    result: { ok: 1, n: deletedCount },
  };
}

function wrapCursor(cursor, nativeCollection, filter) {
  const wrapped = {
    sort(spec) {
      cursor.sort(spec);
      return wrapped;
    },
    limit(n) {
      cursor.limit(n);
      return wrapped;
    },
    skip(n) {
      cursor.skip(n);
      return wrapped;
    },
    project(spec) {
      cursor.project(spec);
      return wrapped;
    },
    hint(spec) {
      cursor.hint(spec);
      return wrapped;
    },
    collation(spec) {
      cursor.collation(spec);
      return wrapped;
    },
    map(fn) {
      cursor.map(fn);
      return wrapped;
    },
    toArray(callback) {
      return maybeCallback(Promise.resolve(cursor.toArray()), callback);
    },
    next(callback) {
      return maybeCallback(Promise.resolve(cursor.next()), callback);
    },
    close(callback) {
      return maybeCallback(Promise.resolve(cursor.close()), callback);
    },
    count(applySkipLimit, callback) {
      if (typeof applySkipLimit === "function") {
        callback = applySkipLimit;
      }
      return maybeCallback(
        nativeCollection.countDocuments(filter || {}),
        callback
      );
    },
    [Symbol.asyncIterator]() {
      return cursor[Symbol.asyncIterator]();
    },
  };
  return wrapped;
}

function wrapCollection(native) {
  const collection = {
    get collectionName() {
      return native.collectionName;
    },

    find(filter, spec, callback) {
      if (typeof spec === "function") {
        callback = spec;
        spec = undefined;
      }
      const { filter: query, options } = normalizeFindArgs(filter, spec);
      const cursor = wrapCursor(native.find(query, options), native, query);
      if (typeof callback === "function") {
        callback(null, cursor);
      }
      return cursor;
    },

    findOne(filter, spec, callback) {
      if (typeof spec === "function") {
        callback = spec;
        spec = undefined;
      }
      const { filter: query, options } = normalizeFindArgs(filter, spec);
      return maybeCallback(native.findOne(query, options), callback);
    },

    insert(docs, options, callback) {
      if (typeof options === "function") {
        callback = options;
        options = {};
      }
      const writeOptions = normalizeWriteOptions(options);
      const promise = Array.isArray(docs)
        ? native
            .insertMany(docs, writeOptions)
            .then((result) => wrapInsertResult(result, docs))
        : native
            .insertOne(docs, writeOptions)
            .then((result) => wrapInsertResult(result, docs));
      return maybeCallback(promise, callback);
    },

    insertOne(doc, options, callback) {
      if (typeof options === "function") {
        callback = options;
        options = {};
      }
      return maybeCallback(
        native
          .insertOne(doc, normalizeWriteOptions(options))
          .then((result) => wrapInsertResult(result, doc)),
        callback
      );
    },

    insertMany(docs, options, callback) {
      if (typeof options === "function") {
        callback = options;
        options = {};
      }
      return maybeCallback(
        native
          .insertMany(docs, normalizeWriteOptions(options))
          .then((result) => wrapInsertResult(result, docs)),
        callback
      );
    },

    update(filter, update, options, callback) {
      if (typeof options === "function") {
        callback = options;
        options = {};
      }
      const writeOptions = normalizeWriteOptions(options);
      const method = writeOptions.multi ? "updateMany" : "updateOne";
      delete writeOptions.multi;
      return maybeCallback(
        native[method](filter, update, writeOptions).then(wrapUpdateResult),
        callback
      );
    },

    updateOne(filter, update, options, callback) {
      if (typeof options === "function") {
        callback = options;
        options = {};
      }
      const writeOptions = normalizeWriteOptions(options);
      delete writeOptions.multi;
      return maybeCallback(
        native.updateOne(filter, update, writeOptions).then(wrapUpdateResult),
        callback
      );
    },

    updateMany(filter, update, options, callback) {
      if (typeof options === "function") {
        callback = options;
        options = {};
      }
      const writeOptions = normalizeWriteOptions(options);
      delete writeOptions.multi;
      return maybeCallback(
        native.updateMany(filter, update, writeOptions).then(wrapUpdateResult),
        callback
      );
    },

    replaceOne(filter, replacement, options, callback) {
      if (typeof options === "function") {
        callback = options;
        options = {};
      }
      return maybeCallback(
        native
          .replaceOne(filter, replacement, normalizeWriteOptions(options))
          .then(wrapUpdateResult),
        callback
      );
    },

    remove(filter, options, callback) {
      if (typeof options === "function") {
        callback = options;
        options = {};
      }
      const writeOptions = normalizeWriteOptions(options);
      const method =
        writeOptions.multi === false || writeOptions.justOne
          ? "deleteOne"
          : "deleteMany";
      delete writeOptions.multi;
      delete writeOptions.justOne;
      delete writeOptions.single;
      return maybeCallback(
        native[method](filter || {}, writeOptions).then(wrapDeleteResult),
        callback
      );
    },

    deleteOne(filter, options, callback) {
      if (typeof options === "function") {
        callback = options;
        options = {};
      }
      return maybeCallback(
        native
          .deleteOne(filter, normalizeWriteOptions(options))
          .then(wrapDeleteResult),
        callback
      );
    },

    deleteMany(filter, options, callback) {
      if (typeof options === "function") {
        callback = options;
        options = {};
      }
      return maybeCallback(
        native
          .deleteMany(filter, normalizeWriteOptions(options))
          .then(wrapDeleteResult),
        callback
      );
    },

    count(filter, options, callback) {
      if (typeof filter === "function") {
        callback = filter;
        filter = {};
        options = {};
      } else if (typeof options === "function") {
        callback = options;
        options = {};
      }
      return maybeCallback(
        native.countDocuments(filter || {}, options || {}),
        callback
      );
    },

    countDocuments(filter, options, callback) {
      if (typeof filter === "function") {
        callback = filter;
        filter = {};
        options = {};
      } else if (typeof options === "function") {
        callback = options;
        options = {};
      }
      return maybeCallback(
        native.countDocuments(filter || {}, options || {}),
        callback
      );
    },

    estimatedDocumentCount(options, callback) {
      if (typeof options === "function") {
        callback = options;
        options = {};
      }
      return maybeCallback(
        native.estimatedDocumentCount(options || {}),
        callback
      );
    },

    aggregate(pipeline, options, callback) {
      if (typeof options === "function") {
        callback = options;
        options = {};
      }
      const cursor = wrapCursor(
        native.aggregate(pipeline, options || {}),
        native,
        {}
      );
      if (typeof callback === "function") {
        callback(null, cursor);
      }
      return cursor;
    },

    distinct(key, filter, options, callback) {
      if (typeof filter === "function") {
        callback = filter;
        filter = {};
        options = {};
      } else if (typeof options === "function") {
        callback = options;
        options = {};
      }
      return maybeCallback(
        native.distinct(key, filter || {}, options || {}),
        callback
      );
    },

    findOneAndUpdate(filter, update, options, callback) {
      if (typeof options === "function") {
        callback = options;
        options = {};
      }
      const writeOptions = normalizeWriteOptions(options);
      if (
        writeOptions.returnOriginal === false &&
        !writeOptions.returnDocument
      ) {
        writeOptions.returnDocument = "after";
        delete writeOptions.returnOriginal;
      }
      const includeMeta = writeOptions.includeResultMetadata;
      const promise = native
        .findOneAndUpdate(filter, update, writeOptions)
        .then((doc) => (includeMeta ? doc : { value: doc, ok: 1 }));
      return maybeCallback(promise, callback);
    },

    findOneAndDelete(filter, options, callback) {
      if (typeof options === "function") {
        callback = options;
        options = {};
      }
      const promise = native
        .findOneAndDelete(filter, normalizeWriteOptions(options))
        .then((doc) => ({ value: doc, ok: 1 }));
      return maybeCallback(promise, callback);
    },

    findOneAndReplace(filter, replacement, options, callback) {
      if (typeof options === "function") {
        callback = options;
        options = {};
      }
      const promise = native
        .findOneAndReplace(
          filter,
          replacement,
          normalizeWriteOptions(options)
        )
        .then((doc) => ({ value: doc, ok: 1 }));
      return maybeCallback(promise, callback);
    },

    createIndex(indexSpec, options, callback) {
      if (typeof options === "function") {
        callback = options;
        options = {};
      }
      return maybeCallback(
        native.createIndex(indexSpec, options || {}),
        callback
      );
    },

    bulkWrite(operations, options, callback) {
      if (typeof options === "function") {
        callback = options;
        options = {};
      }
      return maybeCallback(
        native.bulkWrite(operations, options || {}),
        callback
      );
    },
  };

  return new Proxy(collection, {
    get(target, prop, receiver) {
      if (prop in target) {
        return Reflect.get(target, prop, receiver);
      }
      const value = native[prop];
      if (typeof value === "function") {
        return value.bind(native);
      }
      return value;
    },
  });
}

function wrapDb(nativeDb, client) {
  return new Proxy(nativeDb, {
    get(target, prop) {
      if (prop === "collection") {
        return (name, options) =>
          wrapCollection(target.collection(name, options));
      }
      if (prop === "close") {
        return (callback) => maybeCallback(client.close(), callback);
      }
      const value = target[prop];
      if (typeof value === "function") {
        return value.bind(target);
      }
      return value;
    },
  });
}

module.exports = {
  maybeCallback,
  isProjectionSpec,
  coerceProjection,
  normalizeFindArgs,
  normalizeWriteOptions,
  wrapInsertResult,
  wrapUpdateResult,
  wrapDeleteResult,
  wrapCursor,
  wrapCollection,
  wrapDb,
};
