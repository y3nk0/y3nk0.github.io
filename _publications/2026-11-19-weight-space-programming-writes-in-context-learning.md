---
title: "Weight-Space Programming Writes In-Context Learning and Matches Fine-Tuning in Language Models"
collection: publications
category: preprints
permalink: /publication/2026-11-19-weight-space-programming-writes-in-context-learning
date: 2026-11-19
venue: "arXiv"
pubtype: "Preprint"
authors: "<b>Konstantinos Skianis</b>, Aristidis Likas"
paperurl: "/papers/weight_space_program_arxiv2026.pdf"
codeurl: "https://github.com/y3nk0/weight-space-programming-study"
citation: "<b>Konstantinos Skianis</b>, Aristidis Likas. <i>arXiv preprint 2026</i>."
---
Weight-space programming is a frontier language model's recently reported ability to read and rewrite another network's weights without gradient descent. We investigate how examples can provide a weight update so that a weaker language model performs the task with nothing in the prompt, and study what it edits. Our experiments cover six tasks, four frontier editors and three families of weaker language models, without the editors being told anything about in-context learning (ICL). In most runs, the few-shot minus zero-shot residual is measured at the final prompt token, the ICL task vector, and write it into the weights, at its sparsest into near-silent MLP units keyed to the prompt format. Results reach the accuracy of ICL and of fine-tuning on the same examples, LoRA included, usually leaving perplexity untouched, with worse performance under changes of wording. We also qualify the comparison by counting unfinished runs, observing that one editor falls below fine-tuning; held only to the seen examples, without task pairs of their own, only the strongest editor has similar performance. Given a task and unlabelled inputs, that editor writes its own examples and does nearly as well on unseen items as with labels.
