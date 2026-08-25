const { calculateFare } = require("./fare.controller");

const fareRoutes = require("express").Router();

fareRoutes.get("/calculate", calculateFare);

module.exports = fareRoutes;
