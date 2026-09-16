---
title: "Rep the Set: Neural Networks for Learning Set Representations"
collection: publications
category: conferences
permalink: /publication/2020-01-07-rep-the-set-neural-networks-for-learning
date: 2020-01-07
venue: "International Conference on Artificial Intelligence and Statistics (AISTATS)"
pubtype: "Conference"
authors: "<b>Konstantinos Skianis</b>, Giannis Nikolentzos, Stratis Limnios, Michalis Vazirgiannis"
codeurl: "https://github.com/y3nk0/repset"
paperurl: "https://arxiv.org/abs/1904.01962"
citation: "<b>Konstantinos Skianis</b>, Giannis Nikolentzos, Stratis Limnios, Michalis Vazirgiannis. <i>AISTATS 2020</i>."
---
In several domains, data objects can be decomposed into sets of simpler objects. It is then natural to represent each object as the set of its components or parts. Many conventional machine learning algorithms are unable to process this kind of representations, since sets may vary in cardinality and elements lack a meaningful ordering. In this paper, we present a new neural network architecture, called RepSet, that can handle examples that are represented as sets of vectors. The proposed model computes the correspondences between an input set and some hidden sets by solving a series of network flow problems. This representation is then fed to a standard neural network architecture to produce the output. The architecture allows end-to-end gradient-based learning. We demonstrate RepSet on classification tasks, including text categorization, and graph classification, and we show that the proposed neural network achieves performance better or comparable to state-of-the-art algorithms.
