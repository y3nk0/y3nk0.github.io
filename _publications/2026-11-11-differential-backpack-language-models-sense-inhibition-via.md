---
title: "Differential Backpack Language Models: Sense Inhibition via Signed Contextualization Weights"
collection: publications
category: preprints
permalink: /publication/2026-11-11-differential-backpack-language-models-sense-inhibition-via
date: 2026-11-11
venue: "arXiv"
pubtype: "Preprint"
authors: "<b>Konstantinos Skianis</b>, Giannis Nikolentzos, Polykarpos Meladianos, Michalis Vazirgiannis"
paperurl: "https://arxiv.org/abs/2611.15642"
citation: "<b>Konstantinos Skianis</b>, Giannis Nikolentzos, Polykarpos Meladianos, Michalis Vazirgiannis. <i>arXiv preprint 2026</i>."
---
Backpack language models predict with a strictly linear combination of non-contextual per-word sense vectors, weighted by non-negative contextualization scores. We show that non-negativity conflates two properties: the linear readout, which carries the interpretability, and the conic combination, which merely restricts it. We relax the latter by computing the sense weights with differential attention, a difference of two softmax maps with a learned per-sense gain, so context can actively inhibit a sense; we call the result a differential Backpack. At equal parameters on WikiText-103 this cuts the Backpack's perplexity gap to a Transformer by 31%, improves over the softmax Backpack at every sense count, persists with a shrinking margin up to 350M parameters on OpenWebText, and is localized at the sense layer by ablations and controls. The learned inhibition is directly interpretable (a financial context drives the river sense of bank to -0.50), and the preserved per-sense attribution predicts counterfactual removals exactly. We tested a number of combination rules, showing the linear interface is nearly free. Making the readout nonlinear gains only 0.43 perplexity points while invalidating two thirds of the decomposition. The differential Backpack's senses are also better representations, improving zero-shot sentence similarity by up to 33%.
