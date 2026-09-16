# y3nk0.github.io

Personal academic website of Konstantinos Skianis, built with [Jekyll](https://jekyllrb.com) on the
[Academic Pages](https://github.com/academicpages/academicpages.github.io) template (a fork of
[Minimal Mistakes](https://mmistakes.github.io/minimal-mistakes/)). Hosted on GitHub Pages at
<https://y3nk0.github.io>.

## Where the content lives

| What | Where |
| --- | --- |
| Site-wide settings, sidebar profile and links | `_config.yml` |
| Header navigation | `_data/navigation.yml` |
| Home page (bio, latest news, education, contact) | `_pages/about.md` |
| News items (newest first; the home page shows the latest 5) | `_data/news.yml`, rendered on `/` and `/news/` |
| Research topics, service, code | `_pages/research.md` |
| Publications, one Markdown file each | `_publications/` |
| Talks and presentations, one file each | `_talks/` |
| Teaching, one file per course | `_teaching/` |
| Competitions | `_pages/competitions.md` |
| Online CV (also lists publications/talks/teaching automatically) | `_pages/cv.md` |
| Profile photo and logos | `images/` |
| PDFs (CV, thesis) | `files/` |
| Paper PDFs, posters, slides, course material | `papers/`, `posters/`, `presentations/`, `teaching/` (same URLs as the old site) |

### Adding a publication

Create `_publications/YYYY-MM-DD-short-title.md`:

```yaml
---
title: "Paper title"
collection: publications
category: conferences        # conferences | journals | workshops | demos | preprints (see _config.yml)
permalink: /publication/YYYY-MM-DD-short-title
date: YYYY-MM-DD             # only the year is displayed; the date orders the list
venue: "Conference or journal name (ABBR)"
pubtype: "Conference"        # badge text: Conference | Journal | Workshop | Demo | Preprint | Resources
authors: "First Author, <b>Konstantinos Skianis</b>, Last Author"
award: "Best Paper Award"    # optional
paperurl: "https://arxiv.org/abs/..."   # optional; also codeurl, posterurl, slidesurl, demourl, linkurl, bibtexurl
citation: "First Author, <b>Konstantinos Skianis</b>, Last Author. <i>ABBR 2026</i>."
---
The abstract goes here (Markdown). It is shown on the paper page and inside the
collapsible "Abstract" on the publications list.
```

### Adding a talk or a course

Copy any file in `_talks/` or `_teaching/` and edit the front matter (`title`, `type`, `venue`,
`date`, `location`, optional `slidesurl`). The body is free Markdown.

### Adding a news item

Add an entry at the top of `_data/news.yml` (`date`, `title`, `text`; HTML is allowed in `text`).
Set `hidden: true` to keep an item without showing it.

## Running locally

With Ruby (3.x recommended) and Bundler installed:

```bash
bundle install
bundle exec jekyll serve -l -H localhost
```

then open <http://localhost:4000>. Alternatively, with Docker: `docker compose up`.

Site-wide changes in `_config.yml` require restarting the server.

## Deploying

GitHub Pages builds the site from the `master` branch of the `y3nk0/y3nk0.github.io` repository
(Settings > Pages > "Deploy from a branch"). Pushing to `master` is enough; the workflow in
`.github/workflows/jekyll-build.yml` additionally checks that the site builds.

## License

The template code is released under the MIT License (see `LICENSE`). Site content is
© Konstantinos Skianis.
