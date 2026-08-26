const { MongoClient } = require("mongodb");
const { wrapDb } = require("./mongoCollection");
const { MONGO_CLIENT_OPTIONS } = require("./mongoUrl");

const state = {
  client: null,
  db: null,
};

async function connectAsync(url, dbName) {
  if (state.db) {
    return state.db;
  }
  if (!url) {
    throw new Error("MongoDB connection URL is required");
  }
  if (!dbName) {
    throw new Error("MongoDB database name is required");
  }

  const client = new MongoClient(url, MONGO_CLIENT_OPTIONS);
  await client.connect();
  state.client = client;
  state.db = wrapDb(client.db(dbName), client);
  return state.db;
}

function connect(url, dbName, done) {
  if (typeof dbName === "function") {
    done = dbName;
    dbName = undefined;
  }

  const promise = connectAsync(url, dbName);
  if (typeof done === "function") {
    promise.then(() => done()).catch(done);
    return promise;
  }
  return promise;
}

function get() {
  if (!state.db) {
    throw new Error("MongoDB is not connected. Call db.connect() first.");
  }
  return state.db;
}

async function closeAsync() {
  if (state.client) {
    await state.client.close();
  }
  state.client = null;
  state.db = null;
}

function close(done) {
  const promise = closeAsync();
  if (typeof done === "function") {
    promise.then(() => done()).catch(done);
    return promise;
  }
  return promise;
}

module.exports = {
  connect,
  connectAsync,
  get,
  close,
};
