/**
 * Build a redirect URL with query params without Node's deprecated url.format().
 */
function withQuery(pathname, query) {
  const params = new URLSearchParams();
  if (query && typeof query === "object") {
    Object.keys(query).forEach((key) => {
      const value = query[key];
      if (value == null) {
        return;
      }
      if (Array.isArray(value)) {
        value.forEach((item) => params.append(key, String(item)));
      } else {
        params.set(key, String(value));
      }
    });
  }
  const encoded = params.toString();
  if (!encoded) {
    return pathname;
  }
  return pathname + (pathname.indexOf("?") >= 0 ? "&" : "?") + encoded;
}

module.exports = { withQuery };
