"use strict";
const nodemailer = require("nodemailer");
var q = require("q");
// Generate test SMTP service account from ethereal.email
// Only needed if you don't have a real mail account for testing
exports.sendEmail = function (to, subject, message) {
  var deferred = q.defer();
  console.error("send mail................");
  console.error("to : ", to);
  nodemailer.createTestAccount((err, account) => {
    // create reusable transporter object using the default SMTP transport
    let transporter = nodemailer.createTransport({
      service: "gmail",
      auth: {
        user: "ramya@indiprotechnologies.com",
        pass: "seib loxr tyto izms", // your App Password (no spaces)
      },
    });

    //var htmlstream = fs.createReadStream('content.html');

    // setup email data with unicode symbols
    let mailOptions = {
      from: '"Grandlimo" <info@q8grandlimo.com>', // sender address
      to: to, // list of receivers
      subject: subject, // Subject line
      text: "Hello world?", // plain text body
      html: message, // html body
    };

    // send mail with defined transport object
    transporter.sendMail(mailOptions, (error, info) => {
      if (error) {
        return console.error(error);
      }
      return deferred.promise;
      console.log("Message sent: %s", info.messageId);
      // Preview only available when sending through an Ethereal account
      console.log("Preview URL: %s", nodemailer.getTestMessageUrl(info));

      // Message sent: <b658f8ca-6296-ccf4-8306-87d57a0b4321@example.com>
      // Preview URL: https://ethereal.email/message/WaQKMgKddxQDoou...
    });
    return deferred.promise;
  });
};
