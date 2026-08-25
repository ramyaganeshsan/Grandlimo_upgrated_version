#!/usr/bin/env python3
"""Safe leftover-callback cleanup: unwrap if (err) and drop labeled err logs."""
import re
from pathlib import Path
import importlib.util

ROOT = Path(__file__).resolve().parents[1]
FILES = [
    ROOT / "models/apimodel.js",
    ROOT / "models/apimodel_v1.js",
    ROOT / "models/passapimodel.js",
    ROOT / "models/passapimodel_v1.js",
    ROOT / "models/dispatchermodel.js",
    ROOT / "models/dispatchermodel_v1.js",
]

spec = importlib.util.spec_from_file_location(
    "modernize_mongo_callbacks", ROOT / "scripts/modernize_mongo_callbacks.py"
)
mod = importlib.util.module_from_spec(spec)
spec.loader.exec_module(mod)

LABELED_ERR_LOG = re.compile(
    r"^[ \t]*console\.(?:log|error)\(\s*(['\"])(?:err|err\d+|err : )[^'\"]*\1\s*,\s*err\s*\);?[ \t]*\n",
    re.MULTILINE,
)


def postprocess(text: str) -> str:
    text = mod.unwrap_callback_err(text)
    text = LABELED_ERR_LOG.sub("", text)
    return text


def main() -> None:
    for path in FILES:
        orig = path.read_text(encoding="utf-8")
        text = orig
        for _ in range(5):
            nxt = postprocess(text)
            if nxt == text:
                break
            text = nxt
        if text != orig:
            path.write_text(text, encoding="utf-8")
            print("cleaned", path.name, "delta", len(orig) - len(text))
        else:
            print("no change", path.name)


if __name__ == "__main__":
    main()
