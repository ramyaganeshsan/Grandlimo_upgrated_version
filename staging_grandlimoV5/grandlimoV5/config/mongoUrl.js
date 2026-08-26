/**
 * Build a MongoDB 7-compatible connection URL.
 * Does not force SCRAM-SHA-1 (MongoDB 7 prefers SCRAM-SHA-256 and still
 * accepts SHA-1 users if the mechanism is omitted).
 */
function buildMongoUrl(cfg) {
  if (!cfg || !cfg.host) {
    throw new Error("MongoDB host is required");
  }
  const port = cfg.port || "27017";
  const host = `${cfg.host}:${port}`;
  if (cfg.db_uname && cfg.db_pwd) {
    const user = encodeURIComponent(cfg.db_uname);
    const password = encodeURIComponent(cfg.db_pwd);
    const authSource = encodeURIComponent(cfg.authsource || cfg.db || "admin");
    return `mongodb://${user}:${password}@${host}/?authSource=${authSource}`;
  }
  return `mongodb://${host}`;
}

const MONGO_CLIENT_OPTIONS = {
  maxPoolSize: 20,
  serverSelectionTimeoutMS: 15000,
  connectTimeoutMS: 15000,
};

module.exports = {
  buildMongoUrl,
  MONGO_CLIENT_OPTIONS,
};
