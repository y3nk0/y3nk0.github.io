---
title: "CSE-UOI at SemEval-2026 Task 6: A Two-Stage Heterogeneous Ensemble with Deliberative Complexity Gating for Political Evasion Detection"
collection: publications
category: workshops
permalink: /publication/2026-07-06-cse-uoi-at-semeval-2026-task-6
date: 2026-07-06
venue: "SemEval-2026 Task 6, ACL"
pubtype: "Workshop"
authors: "Christos Tzouvaras, <b>Konstantinos Skianis</b>, Athanasios Voulodimos"
award: "Best Paper Award"
paperurl: "https://aclanthology.org/2026.semeval-1.435.pdf"
citation: "Christos Tzouvaras, <b>Konstantinos Skianis</b>, Athanasios Voulodimos. <i>SemEval-2026 Task 6 @ ACL 2026</i>. Best Paper Award."
---
This paper describes our system for SemEval-2026 Task 6, which classifies clarity of responses in political interviews into three categories: Clear Reply, Ambivalent, and Clear Non-Reply. We propose a heterogeneous dual large language model (LLM) ensemble via self-consistency (SC) and weighted voting, and a novel post-hoc correction mechanism, Deliberative Complexity Gating (DCG). This mechanism uses cross-model behavioral signals and exploits the finding that an LLM response-length proxy correlates strongly with sample ambiguity. To further examine mechanisms for improving ambiguity detection, we evaluated multi-agent debate as an alternative strategy for increasing deliberative capacity. Unlike DCG, which adaptively gates reasoning using cross-model behavioral signals, debate increases agent count without increasing model diversity. Our solution achieved a Macro-F1 score of 0.85 on the evaluation set, securing 3rd place.
