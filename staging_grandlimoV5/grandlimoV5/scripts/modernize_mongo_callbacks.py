#!/usr/bin/env python3
"""Convert legacy MongoDB Node driver callbacks to async/await + modern method names."""

from __future__ import annotations

import re
import sys
from pathlib import Path


def matching_close(text: str, open_idx: int, opener: str, closer: str) -> int:
    depth = 0
    i = open_idx
    in_str = None
    escape = False
    while i < len(text):
        ch = text[i]
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
        if text.startswith("//", i) and in_str is None:
            nl = text.find("\n", i)
            i = len(text) if nl < 0 else nl
            continue
        if ch == opener:
            depth += 1
        elif ch == closer:
            depth -= 1
            if depth == 0:
                return i
        i += 1
    return -1


def matching_open(text: str, close_idx: int, opener: str, closer: str) -> int:
    depth = 0
    i = close_idx
    in_str = None
    escape = False
    while i >= 0:
        ch = text[i]
        if in_str:
            if escape:
                escape = False
            elif ch == "\\":
                escape = True
            elif ch == in_str:
                in_str = None
            i -= 1
            continue
        if ch in ("'", '"', "`"):
            in_str = ch
            i -= 1
            continue
        if ch == closer:
            depth += 1
        elif ch == opener:
            depth -= 1
            if depth == 0:
                return i
        i -= 1
    return -1


def skip_ws_left(text: str, i: int) -> int:
    while i > 0 and text[i - 1] in " \t\r\n":
        i -= 1
    return i


def find_expr_start(text: str, idx: int) -> int:
    i = idx
    while True:
        i = skip_ws_left(text, i)
        if i > 0 and text[i - 1] == ")":
            opened = matching_open(text, i - 1, "(", ")")
            if opened < 0:
                return i
            i = opened
            continue
        if i > 0 and text[i - 1] == "]":
            opened = matching_open(text, i - 1, "[", "]")
            if opened < 0:
                return i
            i = opened
            continue
        j = i
        while j > 0 and (text[j - 1].isalnum() or text[j - 1] in "_$"):
            j -= 1
        if j == i:
            return i
        i = j
        i = skip_ws_left(text, i)
        if i > 0 and text[i - 1] == ".":
            i -= 1
            continue
        return i


def indent_of(text: str, idx: int) -> str:
    line_start = text.rfind("\n", 0, idx) + 1
    i = line_start
    while i < len(text) and text[i] in " \t":
        i += 1
    return text[line_start:i]


def matching_brace(text: str, open_idx: int) -> int:
    return matching_close(text, open_idx, "{", "}")


def unwrap_callback_err(body: str) -> str:
    changed = True
    while changed:
        changed = False
        for m in list(re.finditer(r"\n[ \t]*if\s*\(\s*err\s*\)\s*\{", body)):
            if_open = m.end() - 1
            if_close = matching_brace(body, if_open)
            if if_close < 0:
                continue
            rest = body[if_close + 1 :]
            else_m = re.match(r"\s*else\s*\{", rest)
            if else_m:
                else_open = if_close + 1 + else_m.end() - 1
                else_close = matching_brace(body, else_open)
                if else_close < 0:
                    continue
                else_body = body[else_open + 1 : else_close]
                body = body[: m.start() + 1] + else_body.strip("\n") + body[else_close + 1 :]
                changed = True
                break
            if_body = body[if_open + 1 : if_close]
            stripped = re.sub(r"\s+", "", if_body)
            if (
                stripped == ""
                or "reject(err)" in if_body
                or re.search(r"console\.(?:log|error)\(", if_body)
            ):
                body = body[: m.start()] + body[if_close + 1 :]
                changed = True
                break
    return body


def strip_callback_err_logs(body: str) -> str:
    lines = []
    for line in body.split("\n"):
        stripped = line.lstrip()
        if stripped.startswith("//"):
            lines.append(line)
            continue
        if re.search(r"console\.(?:log|error)\([^)]*\berr\b", line):
            continue
        lines.append(line)
    return "\n".join(lines)


def strip_cleanup(body: str) -> str:
    body = unwrap_callback_err(body)
    body = strip_callback_err_logs(body)
    body = re.sub(r"\n[ \t]*deferred\.makeNodeResolver\(\);?", "", body)
    body = re.sub(
        r"\n[ \t]*(?:result|results|data|promo_results|promo_results2)\s*=\s*null;?",
        "",
        body,
    )
    return body.strip("\n")


def callback_result_name(fn_header: str) -> str:
    params = [p.strip() for p in fn_header.split(",") if p.strip()]
    if len(params) >= 2:
        return re.sub(r"\s+", "", params[1])
    if len(params) == 1 and params[0] not in ("err", "error"):
        return re.sub(r"\s+", "", params[0])
    return "results"


def wrap_await(indent: str, result_name: str, await_expr: str, body: str) -> str:
    inner = indent + "  "
    body_lines = strip_cleanup(body)
    if not body_lines.strip():
        body_block = f"{inner}return {result_name};"
    else:
        body_block = "\n".join(
            inner + line if line.strip() else line
            for line in body_lines.split("\n")
        )
    return (
        f"{indent}try {{\n"
        f"{inner}let {result_name} = await {await_expr};\n"
        f"{body_block}\n"
        f"{indent}}} catch (err) {{\n"
        f"{inner}console.log(err);\n"
        f"{inner}throw err;\n"
        f"{indent}}}"
    )


def skip_ws_right(text: str, i: int) -> int:
    while i < len(text) and text[i] in " \t\r\n":
        i += 1
    return i


def parse_function_callback(text: str, call_paren: int):
    """Parse `function (err, results) { ... }` that is the last arg of a call."""
    i = skip_ws_right(text, call_paren + 1)
    if text.startswith("async", i):
        i = skip_ws_right(text, i + 5)
    if not text.startswith("function", i):
        return None
    fn_paren = text.find("(", i)
    if fn_paren < 0:
        return None
    fn_close = matching_close(text, fn_paren, "(", ")")
    if fn_close < 0:
        return None
    brace = skip_ws_right(text, fn_close + 1)
    if brace >= len(text) or text[brace] != "{":
        return None
    brace_end = matching_close(text, brace, "{", "}")
    if brace_end < 0:
        return None
    call_close = matching_close(text, call_paren, "(", ")")
    if call_close < 0:
        return None
    result_name = callback_result_name(text[fn_paren + 1 : fn_close])
    body = text[brace + 1 : brace_end]
    end = call_close + 1
    if end < len(text) and text[end] == ";":
        end += 1
    return result_name, body, end


def replace_toarray_callbacks(text: str) -> str:
    search_from = 0
    guard = 0
    while guard < 800:
        guard += 1
        idx = text.find(".toArray(", search_from)
        if idx < 0:
            break
        call_paren = skip_ws_right(text, idx + len(".toArray"))
        if call_paren >= len(text) or text[call_paren] != "(":
            search_from = idx + 8
            continue
        parsed = parse_function_callback(text, call_paren)
        if parsed is None:
            search_from = idx + 8
            continue
        result_name, body, end = parsed
        expr_start = find_expr_start(text, idx)
        indent = indent_of(text, expr_start)
        chain = text[expr_start:idx].strip()
        prefix = (
            "\n" + indent
            if expr_start > 0 and text[expr_start - 1] not in "\n"
            else ""
        )
        replacement = prefix + wrap_await(
            indent, result_name, f"{chain}.toArray()", body
        )
        text = text[:expr_start] + replacement + text[end:]
        search_from = expr_start + 1
    return text


def find_top_level_function(inside: str) -> int | None:
    depth = 0
    i = 0
    in_str = None
    escape = False
    last = None
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
        if ch in "({[":
            depth += 1
        elif ch in ")}]":
            depth -= 1
        if (
            depth == 0
            and inside.startswith("function", i)
            and (i == 0 or not inside[i - 1].isalnum())
        ):
            last = i
        i += 1
    return last


def rewrite_legacy_options(args: str) -> str:
    args = re.sub(r"\{\s*\$upsert\s*:\s*false\s*\}", "{ upsert: false }", args)
    args = re.sub(r"\{\s*'\$upsert'\s*:\s*false\s*\}", "{ upsert: false }", args)
    args = re.sub(r'\{\s*"\$upsert"\s*:\s*false\s*\}', "{ upsert: false }", args)
    args = re.sub(r"\{\s*\$upsert\s*:\s*true\s*\}", "{ upsert: true }", args)
    args = re.sub(r"\{\s*'\$upsert'\s*:\s*true\s*\}", "{ upsert: true }", args)
    return args.rstrip().rstrip(",")


def replace_method_callbacks(text: str, method: str, modern: str) -> str:
    receivers = ("collection", "passengerCollection", "logCollection")
    search_from = 0
    guard = 0
    while guard < 800:
        guard += 1
        found = None
        for receiver in receivers:
            tok = f"{receiver}.{method}("
            idx = text.find(tok, search_from)
            if idx < 0:
                continue
            if found is None or idx < found[0]:
                found = (idx, receiver, tok)
        if not found:
            break
        idx, receiver, tok = found
        paren = idx + len(tok) - 1
        close = matching_close(text, paren, "(", ")")
        if close < 0:
            search_from = idx + len(tok)
            continue
        inside = text[paren + 1 : close]
        fn_idx = find_top_level_function(inside)
        if fn_idx is None:
            search_from = close + 1
            continue
        args = rewrite_legacy_options(inside[:fn_idx])
        args = re.sub(r"\basync\s*$", "", args).rstrip().rstrip(",")
        fn_src = inside[fn_idx:]
        fn_paren = fn_src.find("(")
        if fn_paren < 0:
            search_from = close + 1
            continue
        fn_close = matching_close(fn_src, fn_paren, "(", ")")
        brace = fn_src.find("{", fn_close)
        if fn_close < 0 or brace < 0:
            search_from = close + 1
            continue
        brace_end = matching_close(fn_src, brace, "{", "}")
        if brace_end < 0:
            search_from = close + 1
            continue
        result_name = callback_result_name(fn_src[fn_paren + 1 : fn_close])
        body = fn_src[brace + 1 : brace_end]
        indent = indent_of(text, idx)
        end = close + 1
        if end < len(text) and text[end] == ";":
            end += 1
        prefix = "\n" + indent if idx > 0 and text[idx - 1] not in "\n" else ""
        replacement = prefix + wrap_await(
            indent, result_name, f"{receiver}.{modern}({args})", body
        )
        text = text[:idx] + replacement + text[end:]
        search_from = idx + 1
    return text


def replace_cursor_count(text: str) -> str:
    search_from = 0
    guard = 0
    while guard < 80:
        guard += 1
        idx = text.find(".count(", search_from)
        if idx < 0:
            break
        call_paren = skip_ws_right(text, idx + len(".count"))
        if call_paren >= len(text) or text[call_paren] != "(":
            search_from = idx + 6
            continue
        parsed = parse_function_callback(text, call_paren)
        if parsed is None:
            search_from = idx + 6
            continue
        result_name, body, end = parsed
        expr_start = find_expr_start(text, idx)
        indent = indent_of(text, expr_start)
        chain = text[expr_start:idx].strip()
        find_m = re.search(
            r"(collection|passengerCollection|logCollection)\.find\((.*)\)\s*$",
            chain,
            re.S,
        )
        await_expr = (
            f"{find_m.group(1)}.countDocuments({find_m.group(2).strip()})"
            if find_m
            else f"{chain}.countDocuments()"
        )
        prefix = (
            "\n" + indent
            if expr_start > 0 and text[expr_start - 1] not in "\n"
            else ""
        )
        replacement = prefix + wrap_await(indent, result_name, await_expr, body)
        text = text[:expr_start] + replacement + text[end:]
        search_from = expr_start + 1
    return text


def rewrite_legacy_method_names(text: str) -> str:
    text = re.sub(
        r"\b(collection|passengerCollection|logCollection)\.insert\(",
        r"\1.insertOne(",
        text,
    )
    text = re.sub(
        r"\b(collection|passengerCollection|logCollection)\.update\(",
        r"\1.updateOne(",
        text,
    )
    text = re.sub(
        r"\b(collection|passengerCollection|logCollection)\.remove\(",
        r"\1.deleteOne(",
        text,
    )
    text = re.sub(
        r"\b(collection|passengerCollection|logCollection)\.count\(",
        r"\1.countDocuments(",
        text,
    )
    return rewrite_legacy_options(text)


def ensure_async_functions(text: str) -> str:
    pattern = re.compile(
        r"(exports\.\w+\s*=\s*|const\s+\w+\s*=\s*|module\.exports\s*=\s*)(async\s+)?function(\s*)\("
    )
    inserts: list[int] = []
    for match in pattern.finditer(text):
        if match.group(2):
            continue
        paren = match.end() - 1
        close_paren = matching_close(text, paren, "(", ")")
        if close_paren < 0:
            continue
        brace = text.find("{", close_paren)
        if brace < 0:
            continue
        end = matching_close(text, brace, "{", "}")
        if end < 0:
            continue
        if re.search(r"\bawait\b", text[brace : end + 1]):
            inserts.append(text.find("function", match.start()))
    for pos in reversed(inserts):
        text = text[:pos] + "async " + text[pos:]
    return text


def transform(text: str) -> str:
    text = replace_toarray_callbacks(text)
    text = replace_cursor_count(text)
    text = replace_method_callbacks(text, "insert", "insertOne")
    text = replace_method_callbacks(text, "update", "updateOne")
    text = replace_method_callbacks(text, "remove", "deleteOne")
    text = replace_method_callbacks(text, "findOneAndUpdate", "findOneAndUpdate")
    text = replace_method_callbacks(text, "count", "countDocuments")
    text = rewrite_legacy_method_names(text)
    text = ensure_async_functions(text)
    if not text.endswith("\n"):
        text += "\n"
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
