var db = require("../../config/dbconnection");

exports.driverLocation = async (driverId) => {
  try {
    const collection = db.get().collection("driver_driverinfo");

    const result = await collection.findOne(
      { _id: +driverId },
      { projection: { _id: 0, loc: 1 } }
    );

    return result ? result.loc : null;
  } catch (error) {
    console.error("Error in driverLocation model:", error);
    throw error;
  }
};
