import io, os

DUPS = {
    "frontend/features/customer-testimonials/customer-testimonials.css": "cx-test-surface",
    "frontend/features/recent-installations/recent-installations.css": "cx-proj-surface",
}

for path, var in DUPS.items():
    with io.open(path, "r", encoding="utf-8", newline="") as f:
        raw = f.read()
    eol = "\r\n" if "\r\n" in raw else "\n"
    dup = "    background: var(--%s);%sbackground: var(--%s);" % (var, eol, var)
    if dup in raw:
        raw = raw.replace(dup, "    background: var(--%s);" % var, 1)
    with io.open(path, "w", encoding="utf-8", newline="") as f:
        f.write(raw)
    print("OK:", path)