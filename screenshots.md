---
layout: page
title: Screenshots
navigation_weight: 3
---
{::options parse_block_html="true" /}

{% for a in site.data.screenshots %}
### {{ a.name }}
<div class="section">
{{ a.description }}
{% for i in a.images %}
    {% if i.author != "Kmuland" and i.author != "pailes" and i.author != "raina" and i.author != "Deltafire" %}
        {% assign caption = i.caption | append: " Image from " | append: i.author | append: "." | xml_escape %}
    {% else %}
        {% assign caption = i.caption | xml_escape %}
    {% endif %}
    {% assign path = "/screenshots/" | append: a.path | append: "/" | append: i.filename | relative_url %}
    {% assign thumb = path | replace: ".", ".thumb." %}
[![{{ i.filename }}]({{ thumb }})]({{ path }} "{{ caption }}"){:rel="lightbox"}
{% endfor %}
</div>
{% endfor %}

<p>If we used your images without giving you credit, it's because we lost the image source. Drop us a line so the situation can be rectified. New interesting shots are also always welcome. :)</p>
