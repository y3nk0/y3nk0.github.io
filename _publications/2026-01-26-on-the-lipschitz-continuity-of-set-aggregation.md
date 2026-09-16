---
title: "On the Lipschitz Continuity of Set Aggregation Functions and Neural Networks for Sets"
collection: publications
category: conferences
permalink: /publication/2026-01-26-on-the-lipschitz-continuity-of-set-aggregation
date: 2026-01-26
venue: "International Conference on Learning Representations (ICLR)"
pubtype: "Conference"
authors: "Giannis Nikolentzos, <b>Konstantinos Skianis</b>"
paperurl: "https://arxiv.org/pdf/2505.24403"
citation: "Giannis Nikolentzos, <b>Konstantinos Skianis</b>. <i>ICLR 2026</i>."
---
The Lipschitz constant of a neural network is connected to several important properties of the network such as its robustness and generalization. It is thus useful in many settings to estimate the Lipschitz constant of a model. Prior work has focused mainly on estimating the Lipschitz constant of multi-layer perceptrons and convolutional neural networks. Here we focus on data modeled as sets or multisets of vectors and on neural networks that can handle such data. These models typically apply some permutation invariant aggregation function, such as the sum, mean or max operator, to the input multisets to produce a single vector for each input sample. In this paper, we investigate whether these aggregation functions are Lipschitz continuous with respect to three distance functions for unordered multisets, and we compute their Lipschitz constants. In the general case, we find that each aggregation function is Lipschitz continuous with respect to only one of the three distance functions. Then, we build on these results to derive upper bounds on the Lipschitz constant of neural networks that can process multisets of vectors, while we also study their stability to perturbations and generalization under distribution shifts. To empirically verify our theoretical analysis, we conduct a series of experiments on datasets from different domains.
