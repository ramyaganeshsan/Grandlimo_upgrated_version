#!/usr/bin/env python3
"""Replace deprecated Node APIs in grandlimoV5 source files."""
from __future__ import annotations

import os
import re
from pathlib import Path

ROOT = Path(__file__).resolve().parents[1]
SKIP_DIRS = {"node_modules", "shims", "scripts", "__pycache__"}

GET_CURRENT = re.compile(
    r"function getCurrentDate\s*\(\s*timezone\s*,\s*date_format\s*\)\s*\{"
    r".*?return dateFormat\(\s*new Date\(\s*now\.toLocaleDateString\(\)\s*\)\s*,\s*[\"']yyyy-mm-dd[\"']\s*\)\s*;"
    r"\s*\}",
    re.S,
)
GET_CURRENT_EXPORT = re.compile(
    r"exports\.getCurrentDate\s*=\s*function\s*\(\s*timezone\s*,\s*date_format\s*\)\s*\{"
    r".*?return dateFormat\(\s*new Date\(\s*now\.toLocaleDateString\(\)\s*\)\s*,\s*[\"']yyyy-mm-dd[\"']\s*\)\s*;"
    r"\s*\}\s*;",
    re.S,
)

GET_RANGE = re.compile(
    r"function getStartingDateAndEndingDate\s*\(\s*timezone\s*\)\s*\{"
    r".*?return\s*\[\s*new Date\(\s*start_date\.toLocaleString\(\)\s*\)\s*,\s*new Date\(\s*ending_date\.toLocaleString\(\)\s*\)\s*\]\s*;?"
    r"(?:\s*\}catch\(err\)\{[^}]*\})?\s*\}",
    re.S,
)
GET_RANGE_EXPORT = re.compile(
    r"exports\.getStartingDateAndEndingDate\s*=\s*function\s*\(\s*timezone\s*\)\s*\{"
    r".*?return\s*\["
    r"\s*new Date\(\s*start_date\.toLocaleString\(\)\s*\)\s*,\s*"
    r"\s*new Date\(\s*ending_date\.toLocaleString\(\)\s*\)\s*\]\s*;"
    r"\s*\}\s*;",
    re.S,
)

GET_BEFORE = re.compile(
    r"function getBeforeTwoDays\s*\(\s*timezone\s*(?:,\s*date_format)?\s*\)\s*\{"
    r".*?return new Date\(\s*before_days\s*\)\s*;"
    r"\s*\}",
    re.S,
)

TIME_REQUIRE = re.compile(
    r"^[ \t]*(?:var|const|let)\s+time\s*=\s*require\(\s*[\"']time[\"']\s*\)\s*;[ \t]*\n",
    re.M,
)
MOMENT_REQUIRE = re.compile(r"require\(\s*[\"']moment-timezone[\"']\s*\)")

GET_CURRENT_FN = """function getCurrentDate(timezone, date_format) {
  return moment.tz(timezone || "UTC").format("YYYY-MM-DD");
}"""

GET_CURRENT_EXP = """exports.getCurrentDate = function (timezone, date_format) {
  return moment.tz(timezone || "UTC").format("YYYY-MM-DD");
};"""

GET_RANGE_FN = """function getStartingDateAndEndingDate(timezone) {
  var zone = timezone || "UTC";
  var start = moment.tz(zone).startOf("day").toDate();
  var end = moment.tz(zone).hour(23).minute(59).second(59).millisecond(0).toDate();
  return [start, end];
}"""

GET_RANGE_EXP = """exports.getStartingDateAndEndingDate = function (timezone) {
  var zone = timezone || "UTC";
  var start = moment.tz(zone).startOf("day").toDate();
  var end = moment.tz(zone).hour(23).minute(59).second(59).millisecond(0).toDate();
  return [start, end];
};"""

GET_BEFORE_FN = """function getBeforeTwoDays(timezone, date_format) {
  return moment.tz(timezone || "UTC").subtract(2, "days").toDate();
}"""


def ensure_moment(src: str) -> str:
    if MOMENT_REQUIRE.search(src):
        return src
    require_lines = list(
        re.finditer(r"^[ \t]*(?:var|const|let)\s+\w+\s*=\s*require\([^)]+\)[^\n]*\n", src, re.M)
    )
    line = 'var moment = require("moment-timezone");\n'
    if require_lines:
        last = require_lines[0]
        insert_at = last.end()
        return src[:insert_at] + line + src[insert_at:]
    return line + src


def replace_remaining_time_date(src: str) -> str:
    src = re.sub(
        r"new\s+time\.Date\(([^,\n]+),\s*([^)]+)\)",
        r"moment.tz(\1, \2)",
        src,
    )
    src = re.sub(r"new\s+time\.Date\(\s*\)", "moment()", src)
    src = re.sub(r"(\w+)\.setTimezone\(", r"\1.tz(", src)
    # Only no-arg locale calls used by time.Date, never Date#toLocaleString("en-US")
    src = re.sub(
        r"\b(now|start_date|ending_date|d)\.toLocaleDateString\(\s*\)",
        r'\1.format("M/D/YYYY")',
        src,
    )
    src = re.sub(
        r"\b(now|start_date|ending_date|d)\.toLocaleString\(\s*\)",
        r'\1.format("M/D/YYYY, h:mm:ss A")',
        src,
    )
    return src


def replace_mongo_write_results(src: str, rel: str) -> str:
    if rel.startswith("config/mongoCollection"):
        return src
    src = src.replace(".result.nModified", ".modifiedCount")
    src = re.sub(
        r"\b(delete_\w+|removed|delete_card|delete_fav)\.result\.n\b",
        r"\1.deletedCount",
        src,
    )
    src = src.replace(".result.n", ".matchedCount")
    return src


def replace_querystring(src: str) -> str:
    if "querystring.stringify" not in src and 'require("querystring")' not in src and "require('querystring')" not in src:
        return src
    src = re.sub(
        r"^[ \t]*(?:var|const|let)\s+querystring\s*=\s*require\(\s*[\"']querystring[\"']\s*\)\s*;[ \t]*\n",
        "",
        src,
        flags=re.M,
    )
    src = re.sub(
        r"querystring\.stringify\(\s*\{",
        "new URLSearchParams({",
        src,
    )
    # closing of stringify({ ... }) used as + postData — leave `})` as `}).toString()`
    # Heuristic: const/var postData = new URLSearchParams({ ... });
    src = re.sub(
        r"(const|var|let)\s+postData\s*=\s*new URLSearchParams\(\{([\s\S]*?)\}\)\s*;",
        r"\1 postData = new URLSearchParams({\2}).toString();",
        src,
    )
    return src


def replace_url_format(src: str, path: Path) -> str:
    if "url.format" not in src:
        return src
    src = re.sub(
        r"url\.format\(\s*\{\s*pathname:\s*([^,]+?),\s*query:\s*(\{.*?\}|[A-Za-z_][\w.]*)\s*\}\s*\)",
        r"withQuery(\1, \2)",
        src,
        flags=re.S,
    )
    if "withQuery(" in src and "utils/withQuery" not in src:
        rel = os.path.relpath(str(ROOT / "utils/withQuery.js"), str(path.parent))
        if not rel.startswith("."):
            rel = "./" + rel
        rel = rel.replace("\\", "/")
        if rel.endswith(".js"):
            rel = rel[:-3]
        line = f'var {{ withQuery }} = require("{rel}");\n'
        src = line + src
    return src


def process_file(path: Path) -> bool:
    rel = str(path.relative_to(ROOT)).replace("\\", "/")
    original = path.read_text(encoding="utf-8", errors="surrogateescape")
    src = original

    src = GET_CURRENT.sub(GET_CURRENT_FN, src)
    src = GET_CURRENT_EXPORT.sub(GET_CURRENT_EXP, src)
    src = GET_RANGE.sub(GET_RANGE_FN, src)
    src = GET_RANGE_EXPORT.sub(GET_RANGE_EXP, src)
    src = GET_BEFORE.sub(GET_BEFORE_FN, src)

    if "time.Date" in src or re.search(r"require\(\s*[\"']time[\"']\s*\)", src):
        src = ensure_moment(src)
        src = replace_remaining_time_date(src)
        src = TIME_REQUIRE.sub("", src)
        # leftover inner requires
        src = re.sub(
            r"^[ \t]*(?:var|const|let)\s+time\s*=\s*require\(\s*[\"']time[\"']\s*\)\s*;[ \t]*\n",
            "",
            src,
            flags=re.M,
        )

    src = replace_mongo_write_results(src, rel)
    src = replace_querystring(src)
    src = replace_url_format(src, path)

    if src != original:
        path.write_text(src, encoding="utf-8")
        return True
    return False


def main() -> None:
    changed = []
    for dirpath, dirnames, filenames in os.walk(ROOT):
        dirnames[:] = [d for d in dirnames if d not in SKIP_DIRS]
        for name in filenames:
            if not name.endswith(".js"):
                continue
            path = Path(dirpath) / name
            if process_file(path):
                changed.append(str(path.relative_to(ROOT)))
    print(f"updated {len(changed)} files")
    for c in changed:
        print(c)


if __name__ == "__main__":
    main()
