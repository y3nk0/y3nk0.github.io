---
title: "Kernel Graph Convolutional Neural Networks"
collection: publications
category: conferences
permalink: /publication/2018-07-09-kernel-graph-convolutional-neural-networks
date: 2018-07-09
venue: "International Conference on Artificial Neural Networks (ICANN)"
pubtype: "Conference"
authors: "Giannis Nikolentzos, Polykarpos Meladianos, Antoine J.-P. Tixier, <b>Konstantinos Skianis</b>, Michalis Vazirgiannis"
codeurl: "https://github.com/giannisnik/cnn-graph-classification"
posterurl: "/posters/kernel_graph_cnn_icann2018.pdf"
paperurl: "https://arxiv.org/abs/1710.10689"
citation: "Giannis Nikolentzos, Polykarpos Meladianos, Antoine J.-P. Tixier, <b>Konstantinos Skianis</b>, Michalis Vazirgiannis. <i>ICANN 2018</i>."
---
Graph kernels have been successfully applied to many graph classification problems. Typically, a kernel is first designed, and then an SVM classifier is trained based on the features defined implicitly by this kernel. This two-stage approach decouples data representation from learning, which is suboptimal. On the other hand, Convolutional Neural Networks (CNNs) have the capability to learn their own features directly from the raw data during training. Unfortunately, they cannot handle irregular data such as graphs. We address this challenge by using graph kernels to embed meaningful local neighborhoods of the graphs in a continuous vector space. A set of filters is then convolved with these patches, pooled, and the output is then passed to a feedforward network. With limited parameter tuning, our approach outperforms strong baselines on 7 out of 10 benchmark datasets.
