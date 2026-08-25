const { driverLocation } = require("./location_model.js");

exports.GetDriverLocation = async (req, res) => {
  try {
    const driverId = req.query.driverId;

    if (!driverId) {
      return res.status(400).json({
        status: 0,
        error: "Driver ID is required",
      });
    }

    const location = await driverLocation(driverId);

    if (!location) {
      return res.status(404).json({
        status: 0,
        error: "Location not found for the given driver ID.",
      });
    }

    return res.status(200).json({
      status: 1,
      coordinates: location.coordinates,
    });
  } catch (error) {
    console.error("Error fetching driver location:", error);
    return res.status(500).json({
      status: 0,
      error: "Internal Server Error",
    });
  }
};
