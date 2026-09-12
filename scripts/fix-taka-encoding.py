# -*- coding: utf-8 -*-
"""Replace mojibake Taka symbol (à§³) with proper UTF-8 ৳ in source data."""
import io

FILES = [
    "frontend/features/featured-packages/featured-packages.js",
    "frontend/features/featured-products/data.js",
]

for path in FILES:
    with io.open(path, "r", encoding="utf-8", newline="") as f:
        s = f.read()
    n = s.count("\u00e0\u00a7\u00b3")  # literal à § ³ mojibake chars
    s = s.replace("\u00e0\u00a7\u00b3", "\u09f3")  # ৳ (U+09F3)
    with io.open(path, "w", encoding="utf-8", newline="") as f:
        f.write(s)
    print(path, "occurrences:", n)