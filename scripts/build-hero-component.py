import io
SRC = "frontend/features/hero/index.html"
DST = "frontend/features/hero/hero.html"
with io.open(SRC, "r", encoding="utf-8") as f:
    html = f.read()
start = html.find('<section class="cx-hero"')
end = html.find("</section>", start)
block = html[start:end + len("</section>")]
block = block.replace('class="cx-eyebrow"', 'class="cx-hero-eyebrow"')
block = block.replace('class="cx-btn cx-btn-primary"', 'class="cx-btn cx-hero-btn cx-hero-btn-primary"')
block = block.replace('class="cx-btn cx-btn-secondary"', 'class="cx-btn cx-hero-btn cx-hero-btn-secondary"')
out = ("<!-- CamneX Hero - injected into #hero-root by the component loader. "
       "Contains ONLY component markup. -->\n\n" + block + "\n")
with io.open(DST, "w", encoding="utf-8") as f:
    f.write(out)
print("OK", len(block))