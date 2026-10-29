---
permalink: /guides/
title: "Guides"
excerpt: "Practical guides for students starting research in machine learning and NLP."
author_profile: true
---

Practical guides I wrote for my students: venues, deadlines, tools, and the
habits that make research easier. They are free to download, use in your own
lab, and adapt — the LaTeX sources live in
[github.com/y3nk0/practical-guides](https://github.com/y3nk0/practical-guides).
The PDFs below are served from that repository, so what you open is always the
latest build. Corrections and additions are welcome; venues and tools move
fast.

Starting a PhD in Machine Learning or NLP
======

A starter kit for new PhD students, in three formats with the same content at
three levels of detail.

* **[The full guide](https://cdn.jsdelivr.net/gh/y3nk0/practical-guides@main/phd/phd-ml-nlp-starter-guide.pdf)** (20 pages) — read it through in your first week.
* **[One-page cheat sheet](https://cdn.jsdelivr.net/gh/y3nk0/practical-guides@main/phd/phd-ml-nlp-onepager.pdf)** (1 page) — print it and pin it above your desk.
* **[Slides](https://cdn.jsdelivr.net/gh/y3nk0/practical-guides@main/phd/phd-ml-nlp-slides.pdf)** (46 slides) — for a lab induction talk or a first-year seminar.

What they cover:

* **The publication landscape** — ML venues (NeurIPS, ICML, ICLR, AISTATS, AAAI, IJCAI, COLM) and NLP venues (ACL, EMNLP, NAACL/EACL/AACL, COLING/LREC, TACL, Findings), how the ACL Rolling Review submit-then-commit cycle works, and how to judge a venue.
* **Deadlines** — the countdown boards worth bookmarking, the AoE trap, and a calendar workflow that backward-plans from camera-ready.
* **Writing and sharing** — Overleaf (now with its own metered AI assistant), why Prism's shutdown on 1 January 2027 is a lesson in keeping your manuscript in plain `.tex` under git, a local `git` + `latexmk` workflow, `\citet` vs `\citep`, `latexdiff`, `arxiv-latex-cleaner`, anonymity periods, releasing code and checkpoints, and making the code citable with `CITATION.cff` and a Zenodo DOI.
* **Zotero** — the connector, Better BibTeX with pinned keys and auto-export into your paper repository, and the habits that keep a library trustworthy. Includes the quickest way to get an entry into your `.bib` (Google Scholar's BibTeX links), what to check in it, and cleaner sources — the ACL Anthology, DBLP, or any DOI straight from the terminal. Also the three BibTeX gotchas (protected capitals, author format, arXiv fields), `bibtex-tidy`, Zotero's retraction alerts, and a pre-submission audit that checks every DOI resolves.
* **A focused survey as the first project** — a ten-step protocol, with ASReview for screening large piles, that ends with three gaps stated as testable questions.
* **Searching the literature** — Google Scholar as an instrument, plus Semantic Scholar, OpenAlex, the ACL Anthology, OpenReview, DBLP, Connected Papers, Scite and Unpaywall, and Scholar Labs for question-level search.
* **Reading the signals** — citation velocity over volume, and what GitHub stars, commit history and issues really tell you about a baseline.
* **Setting up an AI assistant** — Google's Deep Review as a free first review of the final PDF, and five guardrails, starting with: never cite a paper you have not opened.
* **Your personal site** — GitHub Pages and the AcademicPages template, step by step.
* **Infrastructure and habits** — reproducible experiments, seeds and variance, experiment tracking, the weekly supervisor meeting, and checklists for week 1, month 1, months 2–3, year 1, and before every submission.

Doing a Master's Thesis in Machine Learning or NLP
======

For the project between the other two: a contribution is expected, but a
bounded one, finished in two semesters.

* **[The full guide](https://cdn.jsdelivr.net/gh/y3nk0/practical-guides@main/masters-thesis/masters-thesis-ml-nlp-guide.pdf)** (12 pages) — agree it at the first meeting.
* **[One-page cheat sheet](https://cdn.jsdelivr.net/gh/y3nk0/practical-guides@main/masters-thesis/masters-thesis-onepager.pdf)** (1 page) — print it and pin it above the desk.
* **[Slides](https://cdn.jsdelivr.net/gh/y3nk0/practical-guides@main/masters-thesis/masters-thesis-slides.pdf)** (22 slides) — a kickoff talk for a master's cohort.

What it covers:

* **The bar, measured against the other two degrees** — what changes from an undergraduate project (your own question, a *positioned* related-work chapter, ablations and significance where claimed) and what a PhD asks that a master's does not.
* **The one-claim test** — the sentence your thesis exists to defend, and what an unfilled slot in it tells you to work on next.
* **Five routes to a contribution** — extend one paper, reproduce and interrogate, a shared task with an analytical angle, an applied or industry thesis, or analysis and theory — plus the six places where open questions are already written down.
* **The two-page proposal** and the scope test that catches the way theses actually fail.
* **Industry and NDA theses** — the six questions to settle in writing before you start, and how to write around confidential data so an examiner can still check your reasoning.
* **Evidence that survives an examiner** — baselines first, seeds and spread, paired bootstrap and permutation tests, reporting compute, and the mistakes that cost a grade.
* **Supervision** — what to decide yourself, what to bring to the meeting, and what to escalate the same day.
* **Writing, the defence, and turning the thesis into a paper** — what to cut, where to send it, authorship, and timing against the thesis deadline.

Doing an Undergraduate Thesis in Machine Learning or NLP
======

* **[The full guide](https://cdn.jsdelivr.net/gh/y3nk0/practical-guides@main/undergrad-thesis/undergrad-thesis-ml-nlp-guide.pdf)** (15 pages) — hand it out at the first supervision meeting.
* **[One-page cheat sheet](https://cdn.jsdelivr.net/gh/y3nk0/practical-guides@main/undergrad-thesis/undergrad-thesis-onepager.pdf)** (1 page) — print it and pin it above the desk.
* **[Slides](https://cdn.jsdelivr.net/gh/y3nk0/practical-guides@main/undergrad-thesis/undergrad-thesis-slides.pdf)** (31 slides) — a thesis-kickoff talk for a whole cohort.

Nobody expects an undergraduate thesis to beat the state of the art. The
expectation is that you do something correctly, understand it completely, and
explain it clearly. The guide covers:

* **Finding a topic** — check the supervisor's advertised topics first and do a small piece of research before the first meeting; if you are free to choose, three routes: a **shared task or challenge** (SemEval, workshop tasks at *ACL venues, WMT, CoNLL, BabyLM, CLEF labs and TREC tracks, Kaggle and the competition platforms), an **application thesis** (a method taken carefully to a new language, domain or deployment constraint), or an **analysis/theoretical thesis** (reproduction, ablation, robustness, probing, efficiency, or a critique of the metric itself).
* **Six places where gaps are written down explicitly** — limitations sections, future work, survey taxonomies, workshop calls for papers, task overview papers, and plateaued leaderboards.
* **The one-page proposal** to agree with your supervisor before writing any code, and a scope test that catches the most common way a thesis goes wrong.
* **The toolkit** — Zotero, LaTeX and Overleaf, git, free GPUs, experiment tracking, and data licensing — plus the quickest way to get a reference into your `.bib`, how to check it, `bibtex-tidy`, Unpaywall, the right citation commands, and Scholar Labs for question-level search.
* **Using an AI assistant honestly** — including the rule that matters at the defence: you must be able to explain every line you submit, plus Google's Deep Review as a free first review of the draft.
* **Doing the work** — baselines first, the mistakes that cost marks (leakage, one seed, unfair comparisons), and why negative results are results.
* **Writing and defending** — a chapter-by-chapter structure with sizes, writing advice, likely defence questions, a six-month timetable, and checklists.
