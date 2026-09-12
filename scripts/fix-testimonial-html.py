import io

files = [
    "frontend/features/customer-testimonials/index.html",
    "frontend/features/customer-testimonials/customer-testimonials.html",
]

for p in files:
    with io.open(p, encoding="utf-8", newline="") as f:
        s = f.read()
    n = s.count("cx-card-top")
    s = s.replace("cx-card-top", "cx-testimonial-header")
    with io.open(p, "w", encoding="utf-8", newline="") as f:
        f.write(s)
    print(p, "occurrences:", n)