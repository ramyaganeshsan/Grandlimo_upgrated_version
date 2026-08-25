var express = require("express"),
  router = express.Router();

var app = require("../app");
//const logs = require('../utils/logger').logs;

var i18n = require("i18n");

var q = require("q");

module.exports = function (app) {
  var io = app.io;

  router.get("/", function (req, res) {
    req.io = app.io;
    console.log("test here");
    var io = req.io;
    io.to("test").emit("recent_trip", data);

    var data = { message: "file not found" };
    res.writeHead(200, { "Content-Type": "text/json" });
    res.write(JSON.stringify(data));
    res.end();
  });

  return router;
};
