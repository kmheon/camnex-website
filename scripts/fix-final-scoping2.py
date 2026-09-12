# -*- coding: utf-8 -*-
"""Regex-based final scoping for customer-testimonials + recent-installations."""
import io
import re

JOBS = [
    ("frontend/features/customer-testimonials/customer-testimonials.css", "cx-testimonials-section"),
    ("frontend/features/recent-installations/recent-installations.css", "cx-recent-projects-section"),
]

for path, section in JOBS:
    with io.open(path, "r", encoding="utf-8", newline="") as f:
        raw = f.read()
    eol = "\r\n" if "\r\n" in raw else "\n"
    s = raw.replace("\r\n", "\n")

    # 1) Extract :root var block, then remove the :root rule
    m = re.search(r":root \{(.*?)\n\}", s, re.S)
    assert m, path + " :root not found"
    vars_block = m.group(1)
    s = s[: m.start()] + s[m.end():]

    # 2) Remove global * / body / .container rules
    s = re.sub(r"\n\* \{[^\n]*\n[^\n]*box-sizing[^\n]*\n\}[^\n]*", "", s)
    s = re.sub(r"\nbody \{(?:[^\n]*\n)+?\}[^\n]*", "", s)
    s = re.sub(r"\n\.container \{(?:[^\n]*\n)+?\}[^\n]*", "", s)

    # 3) Inject vars+layout into the section root rule
    pattern = (
        r"(\." + section + r" \{\n    )"
        r"(background: var\(--cx-[a-z-]+\);\n"
        r"    padding: 90px 0;\n"
        r"    border-top: 1px solid var\(--cx-[a-z-]+\);\n"
        r"    border-bottom: 1px solid var\(--cx-[a-z-]+\);\n\})"
    )

    def inject(match):
        bg = "cx-test-surface" if "testimonials" in path else "cx-proj-surface"
        return match.group(1) + vars_block.strip() + "\n\n    background: var(--" + bg + ");\n" + match.group(2)

    s2, n = re.subn(pattern, inject, s, count=1, flags=re.S)
    assert n == 1, path + " section root pattern not matched"
    s = s2

    # 4) Scoped container for the homepage inner wrapper
    old_demo = re.search(r"\.cx-demo \{(?:[^\n]*\n)+?\}", s)
    assert old_demo, path + " .cx-demo block not found"
    s = s[: old_demo.start()] + (
        "." + section + " .container,\n."
        + section + " .cx-demo {\n    width: min(1400px, 92%);\n    margin: auto;\n    padding: 0;\n}"
    ) + s[old_demo.end():]

    # 5) Nest the generic header classes under the section
    for cls in ["cx-section-header", "cx-section-badge-label", "cx-section-title", "cx-section-subtitle"]:
        s = s.replace("\n." + cls + " {", "\n." + section + " ." + cls + " {")
    # media-query variant
    s = s.replace("\n    .cx-section-title {", "\n    ." + section + " .cx-section-title {")

    with io.open(path, "w", encoding="utf-8", newline="") as f:
        f.write(s.replace("\n", eol))
    print("OK:", path)