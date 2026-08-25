const multer = require("multer");
const path = require("path");

// const appRoot = global.settings.docroot;
const upload_path = path.join("/var/www/html/public/uploads/passenger/");

const storage = multer.diskStorage({
  destination: function (req, file, cb) {
    cb(null, upload_path);
  },
  filename: function (req, file, cb) {
    const ext = path.extname(file.originalname);
    const uniqueName = Date.now() + "_" + Math.round(Math.random() * 1e9) + ext;
    cb(null, uniqueName);
  },
});

const upload = multer({
  storage: storage,
  limits: { fileSize: 5 * 1024 * 1024 },
  fileFilter: function (req, file, cb) {
    const allowedTypes = ["image/jpeg", "image/jpg", "image/png", "image/heic"];
    if (allowedTypes.includes(file.mimetype)) {
      cb(null, true);
    } else {
      cb(new Error("Invalid file type"));
    }
  },
});

module.exports = upload;
