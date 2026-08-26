const test = require("node:test");
const assert = require("node:assert/strict");
const time = require("../shims/time");
const { buildMongoUrl } = require("./mongoUrl");

test("time.Date setTimezone returns a locale string", () => {
  const now = new time.Date();
  now.setTimezone("Asia/Kuwait");
  assert.equal(typeof now.toLocaleString(), "string");
  assert.ok(now.getTime() > 0);
});

test("time.Date constructs from a date string and timezone", () => {
  const d = new time.Date("2026-08-26 00:00:00", "Asia/Kuwait");
  assert.equal(typeof d.toLocaleDateString(), "string");
  assert.match(d.toLocaleDateString(), /2026/);
});

test("buildMongoUrl omits forced SCRAM-SHA-1 for MongoDB 7", () => {
  const url = buildMongoUrl({
    host: "127.0.0.1",
    port: "27017",
    db_uname: "user",
    db_pwd: "p@ss",
    authsource: "appdb",
    db: "appdb",
  });
  assert.equal(url.includes("SCRAM-SHA-1"), false);
  assert.ok(url.includes("authSource=appdb"));
  assert.ok(url.includes(encodeURIComponent("p@ss")));
});

test("buildMongoUrl without credentials is host:port", () => {
  const url = buildMongoUrl({ host: "10.0.0.1", port: "27020" });
  assert.equal(url, "mongodb://10.0.0.1:27020");
});

test("time.Date is a Date subclass with setDate and timezone offset", () => {
  const d = new time.Date("2026-08-26 12:00:00", "Asia/Kuwait");
  assert.equal(d instanceof Date, true);
  assert.equal(d.getDate(), 26);
  const before = d.setDate(d.getDate() - 2);
  assert.equal(typeof before, "number");
  assert.equal(d.getDate(), 24);
  assert.equal(typeof d.getTimezoneOffset(), "number");
});
