# Apache OFBiz Website

Hugo-based code of the official Apache OFBiz website (<https://ofbiz.apache.org/>).

## Requirements

- **Hugo >= 0.164.0** (extended version). The site is a plain Hugo (https://gohugo.io) project
  with a local directory theme — no Go modules, no npm, no special
  tooling.

## Repository layout

```
config/_default/            Site config (baseURL, locale, permalinks, goldmark)
                            menus.en.toml — main/footer navigation
themes/apache-ofbiz-theme/  The Apache OFBiz website theme, ported to a Hugo directory theme
  layouts/                  baseof, single, list, page, post, FAQS, pagedwnld
  layouts/partials/         head, header, footer, navtrail, home blocks, ...
  layouts/shortcodes/       rawhtml, columns, divider, iconslist
  static/css/               layout.css (legacy), bootstrap-bridge.css (BS5 compat)
static/                     Images, fonts, JS (jQuery 4.0, Bootstrap 5.3.8, custom.js)
content/
  _index.md                 home page (data-driven: slides, quote, features, CTA)
  developers.md, ...        top-level pages (Markdown + deliberate raw-HTML blocks)
  posts/                    blog posts (Apache Roller export, 2015–2021)
  release-notes/            release notes with details
build.sh, server.sh,        helper scripts for build and testing
build-wipe.sh
```

## Maintaining content

### General rules

- **Content stays content.** Layout markup (navbars, sidebars, section
  wrappers, grid scaffolding) belongs in the theme, not in Markdown files.
  Raw-HTML blocks in content are allowed (Goldmark `unsafe = true`, the
  content is project-owned) but should be limited to what Markdown cannot
  express (tables, complex grids, special blocks).
- **Links:** always use absolute, clean URLs (`/developers/`,
  `/downloads/`) — Hugo rewrites internal links, but relative links in
  Markdown/raw HTML are left as-is and would break on directory URLs.
  External links in Markdown are handled by the `render-link` hook
  (`target="_blank" rel="noopener"`); in raw HTML use
  `target="external"` or `target="_blank" rel="noopener"`.
- **Navigation:** `config/_default/menus.en.toml`. Child items need an
  explicit `weight` (Hugo sorts alphabetically otherwise). Parent items
  without a target use `url = "#"` (stays on the current page).
- **Front matter:** `title`, `description` (used for the breadcrumb trail
  and RSS), `layout` (`page`, `post`, `pagedwnld`, `FAQS`), and
  section-specific data parameters (e.g. the downloads version block).

### Adding a release note

1. Create a new file
   `content/release-notes/release-notes-<version>.md` with front matter:
   `layout: page`, `title: Release Notes <version>`,
   `description: downloads`.
2. Insert release notes in markdown format
   to be defined: conversion of html formatted release notes,
   tool based conversion ist possible.
3. Run the conversion pipeline:
   ```bash
   python3 tools/rn_convert.py content/release-notes/release-notes-<version>.md
   python3 tools/content_clean.py content/release-notes/release-notes-<version>.md
   ```
   `rn_convert.py` converts HTML to Markdown (deterministic, idempotent);
   `content_clean.py` balances tags and strips layout wrappers.
4. Update the release list on the downloads page
   (`content/downloads.md` front matter) and, for a new current release,
   the version block there.
5. Build and verify (see below).

### Adding a blog post

Create `content/posts/<slug>.md` (front matter: `layout: post`, `title`,
`date`, `permalink`) and write the content as Markdown. Posts are listed
under `/posts/` and linked from the News menu item.

### Updating the downloads page

The current-release block (download links, signatures, KEYS) is rendered
from `content/downloads.md` front matter — update the parameters there
for each new release; no template changes needed.

## Building

```bash
./build.sh        # hugo --gc --minify  → public/
./server.sh       # hugo server --disableFastRender (live reload)
./build-wipe.sh   # rm -rf public/ && hugo --gc --minify (clean build)
```

**Verification checklist after content changes:**

```bash
hugo --gc --minify --printPathWarnings
# expect: 0 warnings
grep -rl "raw HTML omitted" public/    # expect: no matches
```

Additionally check the affected pages in `public/` (or in the dev
server) for expected content, links, and no layout regressions.

## Deployment

The repository carries `.asf.yaml` with `publish: whoami: master` — the
ASF site bot publishes the `master` branch of the Apache GitHub
repository to ofbiz.apache.org.

Because `public/` is git-ignored, the build output is not part of the
repository yet. The deployment pipeline for the Hugo build (e.g. a CI
job that builds `public/` and publishes it to `master`, or committing the
build output) is part of the open review (see
`hugo-website-review.txt`). Until that is decided, the site is deployed
manually: build with `./build.sh` and upload the `public/` contents to
the site server.
