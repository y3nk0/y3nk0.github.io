---
permalink: /news/
title: "News"
author_profile: true
---

<ul class="news-list">
{% for item in site.data.news %}{% unless item.hidden %}
  <li><span class="news-date">{{ item.date | date: "%b %-d, %Y" }}</span> <strong>{{ item.title }}</strong><br />{{ item.text }}</li>
{% endunless %}{% endfor %}
</ul>
