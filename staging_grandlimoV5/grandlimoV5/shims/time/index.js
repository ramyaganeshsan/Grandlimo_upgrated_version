/**
 * Drop-in replacement for npm `time@0.12` (native addon, broken on Node 22).
 * `time.Date` is a Date subclass with timezone-aware locale/get/set methods
 * matching how this app uses `setTimezone()`, `toLocaleString()`,
 * `toLocaleDateString()`, `getDate()`, `setDate()`, and `getTimezoneOffset()`.
 */
const moment = require("moment-timezone");

function resolveTimezone(timezone) {
  return (
    timezone ||
    Intl.DateTimeFormat().resolvedOptions().timeZone ||
    "UTC"
  );
}

function parseMillis(input, timezone) {
  if (input == null || input === "") {
    return Date.now();
  }
  if (input instanceof Date) {
    return input.getTime();
  }
  if (typeof input === "number" && Number.isFinite(input)) {
    return input;
  }
  const tz = resolveTimezone(timezone);
  const asString = String(input);
  const zoned = moment.tz(asString, tz);
  if (zoned.isValid()) {
    return zoned.valueOf();
  }
  const fallback = moment(new Date(asString));
  return fallback.isValid() ? fallback.valueOf() : Date.now();
}

class TimeDate extends Date {
  constructor(input, timezone) {
    const tz = resolveTimezone(timezone);
    const ms =
      arguments.length === 0 ? Date.now() : parseMillis(input, timezone);
    super(ms);
    this._tz = tz;
  }

  setTimezone(timezone) {
    this._tz = resolveTimezone(timezone || this._tz);
    return this;
  }

  getTimezone() {
    return this._tz;
  }

  getTimezoneOffset() {
    return -moment(this).tz(this._tz).utcOffset();
  }

  getDate() {
    return moment(this).tz(this._tz).date();
  }

  setDate(day) {
    const next = moment(this).tz(this._tz).date(day);
    super.setTime(next.valueOf());
    return super.getTime();
  }

  getHours() {
    return moment(this).tz(this._tz).hours();
  }

  getMinutes() {
    return moment(this).tz(this._tz).minutes();
  }

  getSeconds() {
    return moment(this).tz(this._tz).seconds();
  }

  toLocaleString() {
    return moment(this).tz(this._tz).format("M/D/YYYY, h:mm:ss A");
  }

  toLocaleDateString() {
    return moment(this).tz(this._tz).format("M/D/YYYY");
  }

  toString() {
    return this.toLocaleString();
  }
}

module.exports = {
  Date: TimeDate,
  tzset() {},
};
