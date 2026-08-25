const { calculateFare } = require("./fare.model");
var q = require("q");

exports.calculateFare = async (req, res) => {
  try {
    let fare = [];
    let {
      pickup_lat,
      pickup_lng,
      drop_lat,
      drop_lng,
      distance,
      estimate_time, // Must be in seconds.
      model_id,
    } = req.query;

    let modelId = model_id ? model_id : "";
    let minutes = estimate_time ? +estimate_time : 0;
    let details = await calculateFare(
      q,
      modelId,
      pickup_lat,
      pickup_lng,
      drop_lat,
      drop_lng,
      minutes,
      0
    );

    res.send({ status: 1, message: "", fare: details });
  } catch (err) {
    console.error(err);
    res.send({ status: 0, message: "Failed to calculate fare details." });
  }
};
