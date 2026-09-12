# -*- coding: utf-8 -*-
"""Final CSS scoping: testimonials + recent-installations (full rescope),
and brands + final-cta (scoped .container/.cx-demo + nested header)."""
import io


def apply(path, pairs):
    with io.open(path, "r", encoding="utf-8", newline="") as f:
        s = f.read()
    eol = "\r\n" if "\r\n" in s else "\n"

    def fmt(block):
        return block.replace("\n", eol)

    for old, new in pairs:
        o, n = fmt(old), fmt(new)
        if o not in s:
            print("MISS:", path, repr(o[:70]))
            continue
        s = s.replace(o, n, 1)
    with io.open(path, "w", encoding="utf-8", newline="") as f:
        f.write(s)
    print("OK:", path)


# ---------------------------------------------------------------
# 1) customer-testimonials.css  (replace global block -> scoped)
# ---------------------------------------------------------------
TEST_OLD = """\
:root {
    --cx-test-bg: #FFFFFF;
    --cx-test-surface: #F8FAFC;
    --cx-test-card: #FFFFFF;

    --cx-test-text-main: #111827;
    --cx-test-text-muted: #6B7280;
    --cx-test-text-light: #9CA3AF;
    --cx-test-border: #E5E7EB;

    --cx-test-primary: #F15A24;
    --cx-test-primary-hover: #D94D1C;
    --cx-test-primary-light: #FFF5F2;
    --cx-test-star: #F59E0B;

    --cx-test-radius-card: 20px;
    --cx-test-radius-pill: 999px;

    --cx-test-shadow-default: 0 4px 20px rgba(15, 23, 42, 0.04);
    --cx-test-shadow-hover: 0 20px 40px rgba(241, 90, 36, 0.08);

    --cx-test-transition: 0.25s cubic-bezier(0.4, 0, 0.2, 1);
}

* {
    box-sizing: border-box;
}

body {
    margin: 0;
    background: var(--cx-test-bg);
    font-family: Inter, Arial, sans-serif;
    color: var(--cx-test-text-main);
    -webkit-font-smoothing: antialiased;
}

.container {
    width: min(1400px, 92%);
    margin: auto;
}

/* ========================================================
   SECTION CONTAINER & HEADER
   ======================================================== */
.cx-testimonials-section {
    background: var(--cx-test-surface);
    padding: 90px 0;
    border-top: 1px solid var(--cx-test-border);
    border-bottom: 1px solid var(--cx-test-border);
}

.cx-demo {
    padding: 0;
}

.cx-section-header {
    text-align: center;
    max-width: 700px;
    margin: 0 auto 56px auto;
}

.cx-section-badge-label {
    display: inline-block;
    background: var(--cx-test-primary);
    color: #FFFFFF;
    padding: 6px 14px;
    border-radius: var(--cx-test-radius-pill);
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 0.08em;
    text-transform: uppercase;
    margin-bottom: 12px;
    box-shadow: 0 4px 12px rgba(241, 90, 36, 0.2);
}

.cx-section-title {
    margin: 0 0 10px 0;
    font-size: 36px;
    font-weight: 800;
    line-height: 1.2;
    color: var(--cx-test-text-main);
}

.cx-section-subtitle {
    margin: 0;
    font-size: 16px;
    font-weight: 500;
    color: var(--cx-test-text-muted);
    line-height: 1.6;
}
"""

TEST_NEW = """\
/* ========================================================
   SECTION ROOT (scoped design tokens for the testimonials feature only)
   ======================================================== */
.cx-testimonials-section {
    --cx-test-bg: #FFFFFF;
    --cx-test-surface: #F8FAFC;
    --cx-test-card: #FFFFFF;

    --cx-test-text-main: #111827;
    --cx-test-text-muted: #6B7280;
    --cx-test-text-light: #9CA3AF;
    --cx-test-border: #E5E7EB;

    --cx-test-primary: #F15A24;
    --cx-test-primary-hover: #D94D1C;
    --cx-test-primary-light: #FFF5F2;
    --cx-test-star: #F59E0B;

    --cx-test-radius-card: 20px;
    --cx-test-radius-pill: 999px;

    --cx-test-shadow-default: 0 4px 20px rgba(15, 23, 42, 0.04);
    --cx-test-shadow-hover: 0 20px 40px rgba(241, 90, 36, 0.08);

    --cx-test-transition: 0.25s cubic-bezier(0.4, 0, 0.2, 1);

    background: var(--cx-test-surface);
    padding: 90px 0;
    border-top: 1px solid var(--cx-test-border);
    border-bottom: 1px solid var(--cx-test-border);
}

.cx-testimonials-section .container,
.cx-testimonials-section .cx-demo {
    width: min(1400px, 92%);
    margin: auto;
    padding: 0;
}

.cx-testimonials-section .cx-section-header {
    text-align: center;
    max-width: 700px;
    margin: 0 auto 56px auto;
}

.cx-testimonials-section .cx-section-badge-label {
    display: inline-block;
    background: var(--cx-test-primary);
    color: #FFFFFF;
    padding: 6px 14px;
    border-radius: var(--cx-test-radius-pill);
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 0.08em;
    text-transform: uppercase;
    margin-bottom: 12px;
    box-shadow: 0 4px 12px rgba(241, 90, 36, 0.2);
}

.cx-testimonials-section .cx-section-title {
    margin: 0 0 10px 0;
    font-size: 36px;
    font-weight: 800;
    line-height: 1.2;
    color: var(--cx-test-text-main);
}

.cx-testimonials-section .cx-section-subtitle {
    margin: 0;
    font-size: 16px;
    font-weight: 500;
    color: var(--cx-test-text-muted);
    line-height: 1.6;
}
"""

# ---------------------------------------------------------------
# 2) recent-installations.css  (same pattern, proj tokens)
# ---------------------------------------------------------------
PROJ_OLD = """\
:root {
    --cx-proj-bg: #FFFFFF;
    --cx-proj-surface: #F8FAFC;
    --cx-proj-card: #FFFFFF;

    --cx-proj-text-main: #111827;
    --cx-proj-text-muted: #6B7280;
    --cx-proj-text-light: #9CA3AF;
    --cx-proj-border: #E5E7EB;

    --cx-proj-primary: #F15A24;
    --cx-proj-primary-hover: #D94D1C;
    --cx-proj-primary-bg: #FCFCFD;

    /* Category Badge Palette */
    --cx-badge-home: #3B82F6;
    --cx-badge-office: #8B5CF6;
    --cx-badge-shop: #10B981;
    --cx-badge-factory: #F59E0B;
    --cx-badge-warehouse: #6366F1;
    --cx-badge-school: #EC4899;
    --cx-badge-hospital: #EF4444;
    --cx-badge-apartment: #14B8A6;

    --cx-proj-radius-card: 20px;
    --cx-proj-radius-pill: 999px;

    --cx-proj-shadow-default: 0 4px 20px rgba(15, 23, 42, 0.04);
    --cx-proj-shadow-hover: 0 20px 40px rgba(15, 23, 42, 0.12);

    --cx-proj-transition-fast: 0.25s cubic-bezier(0.4, 0, 0.2, 1);
    --cx-proj-transition-slow: 0.4s cubic-bezier(0.4, 0, 0.2, 1);
}

* {
    box-sizing: border-box;
}

body {
    margin: 0;
    background: var(--cx-proj-bg);
    font-family: Inter, Arial, sans-serif;
    color: var(--cx-proj-text-main);
    -webkit-font-smoothing: antialiased;
}

.container {
    width: min(1400px, 92%);
    margin: auto;
}

/* ========================================================
   SECTION CONTAINER & HEADER
   ======================================================== */
.cx-recent-projects-section {
    background: var(--cx-proj-surface);
    padding: 90px 0;
    border-top: 1px solid var(--cx-proj-border);
    border-bottom: 1px solid var(--cx-proj-border);
}

.cx-demo {
    padding: 0;
}

.cx-section-header {
    text-align: center;
    max-width: 700px;
    margin: 0 auto 56px auto;
}

.cx-section-badge-label {
    display: inline-block;
    background: var(--cx-proj-primary);
    color: #FFFFFF;
    padding: 6px 14px;
    border-radius: var(--cx-proj-radius-pill);
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 0.08em;
    text-transform: uppercase;
    margin-bottom: 12px;
    box-shadow: 0 4px 12px rgba(241, 90, 36, 0.2);
}

.cx-section-title {
    margin: 0 0 10px 0;
    font-size: 36px;
    font-weight: 800;
    line-height: 1.2;
    color: var(--cx-proj-text-main);
}

.cx-section-subtitle {
    margin: 0;
    font-size: 16px;
    font-weight: 500;
    color: var(--cx-proj-text-muted);
    line-height: 1.6;
}
"""

PROJ_NEW = """\
/* ========================================================
   SECTION ROOT (scoped design tokens for the recent-installations feature only)
   ======================================================== */
.cx-recent-projects-section {
    --cx-proj-bg: #FFFFFF;
    --cx-proj-surface: #F8FAFC;
    --cx-proj-card: #FFFFFF;

    --cx-proj-text-main: #111827;
    --cx-proj-text-muted: #6B7280;
    --cx-proj-text-light: #9CA3AF;
    --cx-proj-border: #E5E7EB;

    --cx-proj-primary: #F15A24;
    --cx-proj-primary-hover: #D94D1C;
    --cx-proj-primary-bg: #FCFCFD;

    /* Category Badge Palette */
    --cx-badge-home: #3B82F6;
    --cx-badge-office: #8B5CF6;
    --cx-badge-shop: #10B981;
    --cx-badge-factory: #F59E0B;
    --cx-badge-warehouse: #6366F1;
    --cx-badge-school: #EC4899;
    --cx-badge-hospital: #EF4444;
    --cx-badge-apartment: #14B8A6;

    --cx-proj-radius-card: 20px;
    --cx-proj-radius-pill: 999px;

    --cx-proj-shadow-default: 0 4px 20px rgba(15, 23, 42, 0.04);
    --cx-proj-shadow-hover: 0 20px 40px rgba(15, 23, 42, 0.12);

    --cx-proj-transition-fast: 0.25s cubic-bezier(0.4, 0, 0.2, 1);
    --cx-proj-transition-slow: 0.4s cubic-bezier(0.4, 0, 0.2, 1);

    background: var(--cx-proj-surface);
    padding: 90px 0;
    border-top: 1px solid var(--cx-proj-border);
    border-bottom: 1px solid var(--cx-proj-border);
}

.cx-recent-projects-section .container,
.cx-recent-projects-section .cx-demo {
    width: min(1400px, 92%);
    margin: auto;
    padding: 0;
}

.cx-recent-projects-section .cx-section-header {
    text-align: center;
    max-width: 700px;
    margin: 0 auto 56px auto;
}

.cx-recent-projects-section .cx-section-badge-label {
    display: inline-block;
    background: var(--cx-proj-primary);
    color: #FFFFFF;
    padding: 6px 14px;
    border-radius: var(--cx-proj-radius-pill);
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 0.08em;
    text-transform: uppercase;
    margin-bottom: 12px;
    box-shadow: 0 4px 12px rgba(241, 90, 36, 0.2);
}

.cx-recent-projects-section .cx-section-title {
    margin: 0 0 10px 0;
    font-size: 36px;
    font-weight: 800;
    line-height: 1.2;
    color: var(--cx-proj-text-main);
}

.cx-recent-projects-section .cx-section-subtitle {
    margin: 0;
    font-size: 16px;
    font-weight: 500;
    color: var(--cx-proj-text-muted);
    line-height: 1.6;
}
"""

# ---------------------------------------------------------------
# 3) brands.css        4) final-cta.css
# ---------------------------------------------------------------
DEMO_OLD = """\
.cx-demo {
    padding: 0;
}
"""

BRANDS_DEMO_NEW = """\
.cx-brands-section .container,
.cx-brands-section .cx-demo {
    width: min(1400px, 92%);
    margin: auto;
    padding: 0;
}
"""

FINAL_DEMO_NEW = """\
.cx-final-cta-section .container,
.cx-final-cta-section .cx-demo {
    width: min(1400px, 92%);
    margin: auto;
    padding: 0;
}
"""


apply("frontend/features/customer-testimonials/customer-testimonials.css", [(TEST_OLD, TEST_NEW)])
apply("frontend/features/recent-installations/recent-installations.css", [(PROJ_OLD, PROJ_NEW)])
apply("frontend/features/brands/brands.css", [
    (DEMO_OLD, BRANDS_DEMO_NEW),
    (".cx-section-header {\n", ".cx-brands-section .cx-section-header {\n"),
    (".cx-section-badge-label {\n", ".cx-brands-section .cx-section-badge-label {\n"),
    (".cx-section-title {\n", ".cx-brands-section .cx-section-title {\n"),
    (".cx-section-subtitle {\n", ".cx-brands-section .cx-section-subtitle {\n"),
    ("    .cx-section-title {\n", "    .cx-brands-section .cx-section-title {\n"),
])
apply("frontend/features/final-cta/final-cta.css", [
    (DEMO_OLD, FINAL_DEMO_NEW),
])