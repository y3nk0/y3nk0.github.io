---
permalink: /
title: "About me"
excerpt: "Konstantinos Skianis is an Assistant Professor of Natural Language Processing at the Department of Computer Science and Engineering, University of Ioannina."
author_profile: true
redirect_from:
  - /about/
  - /about.html
---

I am an Assistant Professor of Natural Language Processing (NLP) at the [Department of Computer Science and Engineering](https://www.cse.uoi.gr/) of the [University of Ioannina](https://www.uoi.gr/). My primary research interests lie at the intersection of NLP, Machine Learning, Deep Learning, and Data Science. More specifically, I am interested in how robustness, reasoning, interpretability, and explainability jointly contribute to building trustworthy and reliable models.

I founded [BLUAI](http://bluai.github.io/), a Greek AI company which assists in accelerating AI adoption and incorporating novel NLP technologies. I also co-founded [PrimeHost AI](https://primehost.ai/), a startup which aims to build an AI superhost for short-term rentals.

Previously, I was a Ph.D. student at [École Polytechnique](https://www.polytechnique.edu/en), where I completed my thesis entitled ["Novel Representations, Regularization & Distances for Text Classification"](/files/PhD_thesis_SKIANIS.pdf), as a member of [DaSciM](http://www.lix.polytechnique.fr/dascim/) (Data Science and Mining team), under the supervision of Professor [Michalis Vazirgiannis](http://www.lix.polytechnique.fr/~mvazirg/). You can also find my defense slides [here](/files/PhD_presentation_SKIANIS.pdf).

You can download my CV [here](/files/skianis_konstantinos_cv_eng.pdf) or browse the [online version](/cv/).

<div class="logo-strip">
  <a href="https://www.cse.uoi.gr/"><img src="/images/cse_uoi.png" alt="Department of Computer Science and Engineering, University of Ioannina"></a>
  <a href="https://www.polytechnique.edu/en"><img src="/images/polytechnique.png" alt="École Polytechnique"></a>
  <a href="https://ens-paris-saclay.fr/en"><img src="/images/ens_paris_saclay.png" alt="ENS Paris-Saclay"></a>
  <a href="https://www.aueb.gr"><img src="/images/aueb.png" alt="Athens University of Economics and Business"></a>
</div>

News
======
<ul class="news-list">
{% assign shown = 0 %}{% for item in site.data.news %}{% if item.hidden or shown >= 5 %}{% continue %}{% endif %}{% assign shown = shown | plus: 1 %}
  <li><span class="news-date">{{ item.date | date: "%b %-d, %Y" }}</span> <strong>{{ item.title }}</strong><br />{{ item.text }}</li>
{% endfor %}
</ul>
<p><a href="/news/">All news &raquo;</a></p>

Education
======
* **Ph.D.**, École Polytechnique, France (October 2015 - February 2019)  
  Thesis: ["Novel Representations, Regularization & Distances for Text Classification"](/files/PhD_thesis_SKIANIS.pdf)
* **M.Sc.**, Master M2 in Mathematics, Vision and Learning ([MVA](https://www.master-mva.com/)), École Normale Supérieure Paris-Saclay (Cachan), France (2014 - 2015)
* **B.Sc.** in Computer Science (4-year curriculum), Athens University of Economics and Business, Greece (May 2013)

Contact
======
Feel free to send me an email to discuss research or to arrange a meeting.

Department of Computer Science and Engineering  
University of Ioannina  
45110 Ioannina, Greece

* kskianis \_at\_ cse.uoi.gr
* skianis.konstantinos \_at\_ gmail.com
