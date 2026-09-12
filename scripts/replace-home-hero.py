import io

PATH = "frontend/pages/home/index.html"
START = 744
END = 790

with io.open(PATH, "r", encoding="utf-8") as f:
    lines = f.readlines()

assert "hero" in lines[START - 1].lower(), lines[START - 1]
assert lines[END - 1].strip() == "</section>", lines[END - 1]

new_block = [
    "        <!-- Hero (component-mounted via ComponentLoader) -->\n",
    "        <div id=\"hero-root\"></div>\n",
]

out = lines[:START - 1] + new_block + lines[END:]

with io.open(PATH, "w", encoding="utf-8") as f:
    f.writelines(out)

print("OK replaced lines", START, "-", END)