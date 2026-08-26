var connection = {};

var express = require("express"),
  app = express(),
  path = require("path"),
  favicon = require("serve-favicon"),
  logger = require("morgan"),
  cookieParser = require("cookie-parser");

var db = require("./config/dbconnection");
var dbconfig = require("./config/database.json");
var { buildMongoUrl } = require("./config/mongoUrl");
var md5 = require("md5");
var base64 = require("base-64");
var q = require("q");
var i18n = require("i18n");
var socket = require("socket.io");
var fs = require("fs");
var appRoot = require("app-root-path");
var moment = require("moment-timezone");
var dateformatter = require("date-format-php");
var urlencode = require("urlencode");

console.log = function () {};

i18n.configure({
  locales: ["en", "ar"],
  directory: __dirname + "/locales",
  defaultLocale: "en",
  queryParameter: "lang",
  updateFiles: false,
  autoReload: true,
});

app.use(i18n.init);
app.use(express.json());

app.locals = {};
app.locals.passenger_i18n = require("i18n");
app.locals.passenger_i18n.configure({
  locales: ["en", "ar"],
  directory: __dirname + "/locales",
  defaultLocale: "ar",
  updateFiles: false,
  autoReload: true,
});

var apimodel = require("./models/apimodel");
var http = require("http");

var server = http.createServer(app);
var io = require("socket.io")(server, {
  allowEIO3: true,
  cors: { origin: true, credentials: true },
});

let socketobj = {};
app.set("views", path.join(__dirname, "views"));
app.set("view engine", "pug");

app.use("/public", express.static("public"));

app.use(
  express.urlencoded({
    parameterLimit: 100000,
    limit: "50mb",
    extended: true,
  })
);

app.use(express.json({ limit: "50mb", type: "application/json" }));

var options = {
  inflate: true,
  limit: "1mb",
  type: "application/json",
};
app.use(express.raw(options));
app.use(cookieParser());
app.use(express.static(path.join(__dirname, "public")));

/* For development purpose */
app.use((req, res, next) => {
  console.error("------------------------------------------------------");
  let fullUrl = req.protocol + "://" + req.get("host") + req.originalUrl;
  console.error(fullUrl);
  console.error(req.body);
  console.error(req.query);
  console.error(req.headers.authorization);
  console.error("------------------------------------------------------");
  next();
});

var url = buildMongoUrl(dbconfig);

(async function connectMongo() {
  try {
    await db.connect(url, dbconfig.db);
    console.info(
      "Mongo connected successfully to " +
        dbconfig.host +
        ":" +
        dbconfig.port +
        " (db: " +
        dbconfig.db +
        ")"
    );
    const siteinforesults = await apimodel.SiteSettings(q);
    if (siteinforesults && siteinforesults.length > 0) {
      global.settings = siteinforesults[0];
    } else {
      global.settings = {};
    }
  } catch (err) {
    console.error("Unable to connect to Mongo.", err);
    process.exit(1);
  }
})();

app.get("/access", function (req, res) {
  try {
    if (req.query.date != undefined) {
      var current_date = req.query.date;
    } else {
      var current_date = moment().format("YYYY-MM-DD-HH");
    }

    var filename = "access_" + current_date + ".json";

    console.log("filename", filename);

    filePath = path.join(__dirname, "/logs/" + filename);

    if (fs.existsSync(filePath)) {
      try {
        fs.readFile(filePath, function (err, data) {
          if (!err) {
            res.writeHead(200, { "Content-Type": "text/json" });
            res.write(data);
            res.end();
          } else {
            var data = { message: "file not found" };
            res.writeHead(200, { "Content-Type": "text/json" });
            res.write(JSON.stringify(data));
            res.end();
          }
        });
      } catch (err) {
        var data = { message: "file not found" };
        res.writeHead(200, { "Content-Type": "text/json" });
        res.write(JSON.stringify(data));
        res.end();
      }
    } else {
      var data = { message: "file not found" };
      res.writeHead(200, { "Content-Type": "text/json" });
      res.write(JSON.stringify(data));
      res.end();
    }
  } catch (err) {
    console.log(err);
  }
});

app.get("/logs", function (req, res) {
  try {
    filePath = path.join(__dirname, "/log.log");

    fs.readFile(filePath, { encoding: "utf-8" }, function (err, data) {
      if (!err) {
        // console.log('received data: ' + data);
        res.writeHead(200, { "Content-Type": "text/html" });
        res.write(data);
        res.end();
      } else {
        console.log(err);
      }
    });
  } catch (err) {
    console.log(err);
  }
});

app.get("/errors", function (req, res) {
  try {
    filePath = path.join(__dirname, "/error.log");

    fs.readFile(filePath, { encoding: "utf-8" }, function (err, data) {
      if (!err) {
        res.writeHead(200, { "Content-Type": "text/html" });
        res.write(data);
        res.end();
      } else {
        console.log(err);
      }
    });
  } catch (err) {
    console.log(err);
  }
});

/* Sasidharan Sep 30 2024 Token validation */
const { tokenValidatoinMiddleware } = require("./utils/encryption");
app.use(
  [
    "/passengerapi_v1/index/Z3JhbmRsaW1vX2JPSGdESVczYUZUdTNEQ05LWGJVRzdMYjlPdzJITlhEWW0=",
    "/cards",
    /* Sasidharan Nov 20 2024 */
    "/hesabe",
  ],
  tokenValidatoinMiddleware
);

io.passenger_i18n = app.locals.passenger_i18n;

app.io = io;

var api = require("./routes/api")(app);
var passengerapi = require("./routes/passengerapi")(app);
var knetpayment = require("./routes/knetpayment")(app);
var api_v1 = require("./routes/api_v1")(app);
var passengerapi_v1 = require("./routes/passengerapi_v1")(app);
var knetpayment_v1 = require("./routes/knetpayment_v1")(app);

/* Sasidharan April 05 2024 */
var tapPaymentGateway = require("./routes/tapPaymentGateway")(app);

var notificationRoutes = require("./modules/notifications/notification.route");
app.use("/notifications", notificationRoutes);

var locationRoutes = require("./modules/location/location_routes.js");
app.use("/driverLocation", locationRoutes);

/* Sasidharan April 23 2024 */
var cards = require("./routes/cards")(app);

/* Sasidharan Nov 20 2024 */
var hesabeRoutes = require("./modules/hesabe/hesabe.route");
app.use("/hesabe", hesabeRoutes);

app.use("/", api);
app.use("/api/index", api);
app.use("/passengerapi/index", passengerapi);
app.use("/knet", knetpayment);
app.use("/api_v1/index", api_v1);
app.use("/passengerapi_v1/index", passengerapi_v1);
app.use("/knet_v1", knetpayment_v1);

/* Sasidharan April 05 2024 */
app.use("/processPayment", tapPaymentGateway);

/* Sasidharan April 23 2024 */
app.use("/cards", cards);

/* Sasidharan Jan 17 2025 */
var couponRoutes = require("./routes/coupon");
app.use("/coupon", couponRoutes);

/* Sasidharan June 6 2025 */
var fareRoutes = require("./modules/fare/fare.route");
app.use("/fare", fareRoutes);

app.use(function (req, res, next) {
  var err = new Error("Not Found");
  err.status = 404;
  next(err);
});

if (app.get("env") === "development") {
  app.use(function (err, req, res) {
    console.trace(err);
    res.status(err.status || 500);
    res.render("error", {
      message: err.message,
      error: err,
    });
  });
}

app.use(function (err, req, res) {
  res.status(err.status || 500);
  res.render("error", {
    message: err.message,
    error: {},
  });
});

app.encrypt_decrypt = function (action, a) {
  var key = "Taxi Application";
  var output = "";

  try {
    var encrypt_key = "ndotencript_";
    var iv = md5(md5(key));
    if (action == "encrypt") {
      output = base64.encode(encrypt_key + a);
    } else {
      op = base64.decode(a);
      op = op.split("_");
      if (op[1] != undefined && op[1] != "") {
        output = op[1];
      } else {
        output = "";
      }
    }
  } catch (err) {
    console.log("here");
    return output;
  }

  return output;
};

function normalizePort(val) {
  var port = parseInt(val, 10);

  if (isNaN(port)) {
    return val;
  }

  if (port >= 0) {
    return port;
  }

  return false;
}

require("./websocket")(io);
var port = normalizePort(process.env.PORT || "4000");
app.set("port", port);

server.on("error", function (err) {
  console.error("Unable to start server on port " + port + ".", err);
  process.exit(1);
});

server.listen(port, function () {
  console.info("Server connected to the port " + port);
});
module.exports = app;
