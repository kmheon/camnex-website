# -*- coding: utf-8 -*-
"""
One-time consolidated rename for scoped card classes.

- customer-testimonials: .cx-card-top -> .cx-testimonial-header
- recent-installations : .cx-card-content|location|title|desc|footer -> .cx-project-*
- home/index.html      : same renames, but section-SCOPED (shop/property sections untouched)
- featured-products/script.js: guard modalClose() call
- heading normalization: 46px -> 42px in shop/property/packages section headings
"""
import io
import os
import re


def rw(path, fn):
    full = os.path.join(os.getcwd(), path)
    if not os.path.exists(full):
        print("SKIP   ", path)
        return
    with io.open(full, encoding="utf-8", newline="") as f:
        s = f.read()
    orig = s
    s = fn(s)
    if s != orig:
        with io.open(full, "w", encoding="utf-8", newline="") as f:
            f.write(s)
        print("WROTE  ", path)
    else:
        print("NOCHANGE", path)


# ---------- Testimonials: blanket rename (single-feature files) ----------
def tsm(s):
    return re.sub(r"\.cx-card-top", ".cx-testimonial-header", s)

for p in [
    "frontend/features/customer-testimonials/customer-testimonials.css",
    "frontend/features/customer-testimonials/index.html",
    "frontend/features/customer-testimonials/customer-testimonials.html",
]:
    rw(p, tsm)

# ---------- Recent installations: blanket rename (single-feature files) ----------
def rec(s):
    s = s.replace("cx-card-content", "cx-project-content")
    s = s.replace("cx-card-location", "cx-project-location")
    s = s.replace("cx-card-title", "cx-project-name")
    s = s.replace("cx-card-desc", "cx-project-desc")
    s = s.replace("cx-card-footer", "cx-project-footer")
    return s

for p in [
    "frontend/features/recent-installations/recent-installations.css",
    "frontend/features/recent-installations/index.html",
    "frontend/features/recent-installations/recent-installations.html",
]:
    rw(p, rec)

# ---------- Homepage: section-SCOPED renames ----------
p = "frontend/pages/home/index.html"
with io.open(p, encoding="utf-8", newline="") as f:
    s = f.read()
orig = s

# Testimonials only: rename .cx-card-top inside <article class="cx-testimonial-card"> blocks
s = re.sub(
    r'<article class="cx-testimonial-card"[^>]*>.*?</article>',
    lambda m: m.group(0).replace("cx-card-top", "cx-testimonial-header"),
    s,
    flags=re.S,
)

# Recent projects only: anchor on the unique .cx-card-location marker,
# then rewrite that card's whole content+footer block.
edits = []
idx = 0
marker = '<div class="cx-card-location">'
while True:
    loc = s.find(marker, idx)
    if loc == -1:
        break
    start = s.rfind('<div class="cx-card-content">', idx, loc)
    fpos = s.find('<div class="cx-card-footer">', loc)
    if start == -1 or fpos == -1:
        idx = loc + len(marker)
        continue
    end = s.find("</div>", fpos) + len("</div>")
    block = s[start:end]
    nb = (
        block.replace("cx-card-content", "cx-project-content")
        .replace("cx-card-location", "cx-project-location")
        .replace("cx-card-title", "cx-project-name")
        .replace("cx-card-desc", "cx-project-desc")
        .replace("cx-card-footer", "cx-project-footer")
    )
    edits.append((start, end, nb))
    idx = end

for start, end, nb in sorted(edits, reverse=True):
    s = s[:start] + nb + s[end:]

if s != orig:
    with io.open(p, "w", encoding="utf-8", newline="") as f:
        f.write(s)
    print("WROTE  ", p, "| project card blocks renamed:", len(edits))
else:
    print("NOCHANGE", p)

# ---------- Guard modalClose() call in featured-products script ----------
p = "frontend/features/featured-products/script.js"
with io.open(p, encoding="utf-8", newline="") as f:
    s = f.read()
orig = s
s = re.sub(
    r"\bmodalClose\(\s*\)\s*;",
    'if (typeof modalClose === "function") modalClose();',
    s,
)
if s != orig:
    with io.open(p, "w", encoding="utf-8", newline="") as f:
        f.write(s)
    print("WROTE  ", p)
else:
    print("NOCHANGE", p)

# ---------- Normalize duplicate section headings 46px -> 42px ----------
def heading(s):
    return s.replace("font-size: 46px;", "font-size: 42px;")

for p in [
    "frontend/features/shop-by-category/shop-by-category.css",
    "frontend/features/property-solutions/property-solutions.css",
    "frontend/features/featured-packages/featured-packages.css",
]:
    rw(p, heading)