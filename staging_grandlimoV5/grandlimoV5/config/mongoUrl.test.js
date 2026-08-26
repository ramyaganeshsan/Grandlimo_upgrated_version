const test = require("node:test");
const assert = require("node:assert/strict");
const moment = require("moment-timezone");
const { buildMongoUrl } = require("./mongoUrl");
const { withQuery } = require("../utils/withQuery");

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

test("moment.tz formats a Kuwait calendar date", () => {
  const d = moment.tz("2026-08-26 00:00:00", "Asia/Kuwait");
  assert.equal(d.format("YYYY-MM-DD"), "2026-08-26");
  assert.equal(moment.tz("Asia/Kuwait").subtract(2, "days").isValid(), true);
});

test("withQuery appends search params without url.format", () => {
  assert.equal(
    withQuery("http://example.com/ok", { message: "done" }),
    "http://example.com/ok?message=done"
  );
  assert.equal(withQuery("/path", {}), "/path");
});
