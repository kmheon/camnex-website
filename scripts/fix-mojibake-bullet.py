# -*- coding: utf-8 -*-
"""Replace mojibake bullet (â€¢) with proper UTF-8 bullet (• U+2022)."""
import io

FILES = [
    "frontend/pages/home/index.html",
    "frontend/features/customer-testimonials/customer-testimonials.html",
]

for path in FILES:
    with io.open(path, "r", encoding="utf-8", newline="") as f:
        s = f.read()
    n = s.count("\u00e2\u20ac\u00a2")
    s = s.replace("\u00e2\u20ac\u00a2", "\u2022")
    with io.open(path, "w", encoding="utf-8", newline="") as f:
        f.write(s)
    print(path, "occurrences:", n)