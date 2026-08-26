#!/usr/bin/env python3
"""Wrap legacy find/findOne field maps as { projection }."""
from __future__ import annotations

import re
import sys
from pathlib import Path

sys.path.insert(0, str(Path(__file__).resolve().parent))
from modernize_mongo_callbacks import matching_close

OPTION_KEYS = {
    "projection",
    "sort",
    "skip",
    "limit",
    "hint",
    "collation",
    "maxTimeMS",
    "batchSize",
    "session",
    "readPreference",
    "showRecordId",
    "comment",
    "allowDiskUse",
    "fields",
}


def split_args(inside: str) -> list[str]:
    args: list[str] = []
    start = 0
    depth_paren = depth_brace = depth_bracket = 0
    in_str = None
    escape = False
    i = 0
    while i < len(inside):
        ch = inside[i]
        if in_str:
            if escape:
                escape = False
            elif ch == "\\":
                escape = True
            elif ch == in_str:
                in_str = None
            i += 1
            continue
        if ch in ("'", '"', "`"):
            in_str = ch
            i += 1
            continue
        if ch == "(":
            depth_paren += 1
        elif ch == ")":
            depth_paren -= 1
        elif ch == "{":
            depth_brace += 1
        elif ch == "}":
            depth_brace -= 1
        elif ch == "[":
            depth_bracket += 1
        elif ch == "]":
            depth_bracket -= 1
        elif (
            ch == ","
            and depth_paren == 0
            and depth_brace == 0
            and depth_bracket == 0
        ):
            args.append(inside[start:i])
            start = i + 1
        i += 1
    tail = inside[start:]
    if tail.strip():
        args.append(tail)
    return args


def object_keys(obj_src: str) -> list[str]:
    body = obj_src.strip()
    if not body.startswith("{"):
        return []
    inner = body[1 : body.rfind("}")]
    keys = []
    for m in re.finditer(
        r"(?:^|,)\s*(?:'([^']+)'|\"([^\"]+)\"|([A-Za-z_$][\w$]*))\s*:",
        inner,
    ):
        keys.append(next(g for g in m.groups() if g))
    return keys


def project_var_is_modern(text: str, call_idx: int, name: str) -> bool:
    window = text[max(0, call_idx - 1200) : call_idx]
    matches = list(
        re.finditer(rf"\b(?:let|var|const)\s+{re.escape(name)}\s*=\s*{{", window)
    )
    if not matches:
        return False
    m = matches[-1]
    abs_open = max(0, call_idx - 1200) + m.end() - 1
    close = matching_close(text, abs_open, "{", "}")
    if close < 0:
        return False
    return "projection" in object_keys(text[abs_open : close + 1])


def rewrite_find_calls(text: str, method: str) -> str:
    token = f".{method}("
    search_from = 0
    guard = 0
    while guard < 800:
        guard += 1
        idx = text.find(token, search_from)
        if idx < 0:
            break
        # skip comments
        line_start = text.rfind("\n", 0, idx) + 1
        if text[line_start:idx].lstrip().startswith("//"):
            search_from = idx + len(token)
            continue
        paren = idx + len(token) - 1
        close = matching_close(text, paren, "(", ")")
        if close < 0:
            search_from = idx + len(token)
            continue
        inside = text[paren + 1 : close]
        args = split_args(inside)
        if len(args) != 2:
            search_from = close + 1
            continue
        first, second = args[0].strip(), args[1].strip()
        replacement_second = None
        if second == "{}":
            new_inside = first
        elif second == "{ _id: -1 }" or second == "{_id: -1}":
            new_inside = first
        elif re.fullmatch(r"[A-Za-z_$][\w$]*", second):
            if project_var_is_modern(text, idx, second):
                search_from = close + 1
                continue
            new_inside = f"{first}, {{ projection: {second} }}"
        elif second.startswith("{"):
            keys = object_keys(second)
            if not keys:
                new_inside = first
            elif any(k in OPTION_KEYS for k in keys):
                search_from = close + 1
                continue
            else:
                new_inside = f"{first}, {{ projection: {second} }}"
        else:
            search_from = close + 1
            continue
        text = text[: paren + 1] + new_inside + text[close:]
        search_from = paren + 1 + len(new_inside) + 1
    return text


def transform(text: str) -> str:
    text = rewrite_find_calls(text, "find")
    text = rewrite_find_calls(text, "findOne")
    return text


def main(paths: list[str]) -> None:
    for raw in paths:
        path = Path(raw)
        src = path.read_text(encoding="utf-8")
        out = transform(src)
        path.write_text(out, encoding="utf-8")
        print(("updated" if out != src else "unchanged") + f" {path}")


if __name__ == "__main__":
    main(sys.argv[1:])
