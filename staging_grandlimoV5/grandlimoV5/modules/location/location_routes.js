const express = require("express");
const driverLocationRoutes = express.Router();

const { GetDriverLocation } = require("./location_controller.js");

driverLocationRoutes.get("/sendDriverLocationByID", GetDriverLocation);

module.exports = driverLocationRoutes;
