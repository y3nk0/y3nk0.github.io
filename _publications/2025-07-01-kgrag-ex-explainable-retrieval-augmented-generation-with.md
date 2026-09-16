---
title: "Kgrag-ex: Explainable retrieval-augmented generation with knowledge graph-based perturbations"
collection: publications
category: conferences
permalink: /publication/2025-07-01-kgrag-ex-explainable-retrieval-augmented-generation-with
date: 2025-07-01
venue: "International Joint Conference on Knowledge Graphs (IJCKG)"
pubtype: "Conference"
authors: "Georgios Balanos, Evangelos Chasanis, <b>Konstantinos Skianis</b>, Evaggelia Pitoura"
paperurl: "https://arxiv.org/pdf/2507.08443"
citation: "Georgios Balanos, Evangelos Chasanis, <b>Konstantinos Skianis</b>, Evaggelia Pitoura. <i>IJCKG 2025</i>."
---
Retrieval-Augmented Generation (RAG) enhances language models by grounding responses in external information, yet explainability remains a critical challenge, particularly when retrieval relies on unstructured text. Knowledge graphs (KGs) offer a solution by introducing structured, semantically rich representations of entities and their relationships, enabling transparent retrieval paths and interpretable reasoning. In this work, we present KGRAG-Ex, a RAG system that improves both factual grounding and explainability by leveraging a domain-specific KG constructed via prompt-based information extraction. Given a user query, KGRAG-Ex identifies relevant entities and semantic paths in the graph, which are then transformed into pseudo-paragraphs: natural language representations of graph substructures that guide corpus retrieval. To improve interpretability and support reasoning transparency, we incorporate perturbation-based explanation methods that assess the influence of specific KG-derived components on the generated answers. We conduct a series of experiments to analyze the sensitivity of the system to different perturbation methods, the relationship between graph component importance and their structural positions, the influence of semantic node types, and how graph metrics correspond to the influence of components within the explanations process.
