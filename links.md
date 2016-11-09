---
layout: page
title: Links
navigation_weight: 9
---
{::options parse_block_html="true" /}

{% for c in site.data.links %}
### {{ c.name }}
<div class="section">
{{ c.description }}
<table class="links">
{% for l in c.links %}
<tr class="hover" onclick="javascript:document.location='{{ l.url }}'">
    <td class="banner">
        {% if l.banner %}
            {% assign banner = "/links/" | append: l.banner | url_relative %}
            <img src="{{ banner }}" alt="link banner" />
        {% endif %}
    </td>
    <td>
        <h5><a href="{{ l.url }}">{{ l.name }}</a><span class="url"><a href="{{ l.url }}">{{ l.url }}</a></span></h5>
        {{ l.description }}
    </td>
</tr>
{% endfor %}
</table>
</div>
{% endfor %}

### MilkyTracker banners
<div class="section">
For your website, or your friend's. Link us and tell us about it, maybe we'll link you back. :)
<table class="links">
    <tr>
        <td class="banner">
            <img src="{% link img/milkybanner.gif %}" alt="link banner" />
        </td>
        <td>
            <h5>Animated <span class="url">Link to: <a href="{{ site.url }}">{{ site.url }}</a></span></h5>
            Download: <a href="{% link img/milkybanner.gif %}">{{ site.url }}{% link /img/milkybanner.gif %}</a>
        </td>
    </tr>
    <tr>
        <td class="banner">
            <img src="{% link img/milkybanner.png %}" alt="link banner" />
        </td>
        <td>
            <h5>Still <span class="url">Link to: <a href="{{ site.url }}">{{ site.url }}</a></span></h5>
            Download: <a href="{% link img/milkybanner.png %}">{{ site.url }}{% link /img/milkybanner.png %}</a>
        </td>
    </tr>
</table>
</div>
