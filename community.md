---
layout: page
title: Community
navigation_weight: 6
---
{::options parse_block_html="true" /}

### Forum
<div class="section">
[![MilkyTracker Forum]({% link img/forumpeek.png %})][forum]
Feel lost and need help?  
Found a bug and want to report it?  
Is there a feature you would like to see in MilkyTracker?  
Want to show off your modules or just say "hi" to the people making the tracker?

You can do all that and more if you just head on down to <a href="http://modarchive.org/forums/index.php?board=30.0">our forum</a> and express yourself.

{: style="font-size: 8pt;"}
Hosted at [The Mod Archive][mod-archive].
</div>

### Chatroom
<div class="section">
{: style="float: right;"}
![#MilkyTracker Chatroom]({% link img/ircy.png %})

Join us live on the community IRC channel. If you already have an [IRC client program][irc-clients], just join #MilkyTracker on EsperNet (see [servers][espernet-servers]). If you have Java and just want to peek inside without installing anything, you can do so by choosing a screen name and clicking Connect.
<form id="login" action="{% link irc.html %}" onsubmit="javascript:return validateLogin();">
Screen name:
<input type="text" id="nick" name="nick" maxlength="30" style="width: 20ex;" />
<input id="connect" type="submit" value="Connect" />
</form>
</div>

<!-- 
We don't need this, do we?
### E-mail
<div class="section">
You can also contact the MilkyTracker team by email at <span class="email">ten.rekcartyklim@troppus</span>. If the address looks weird, maybe you should look at it from <cite>reverse</cite> angle.
</div>
-->

<script type="text/javascript">
    //<![CDATA[
        setTimeout("document.getElementById('nick').focus();", 0);
    //]]>
</script>

*[IRC]: Internet Relay Chat

[forum]: http://modarchive.org/forums/index.php?board=30.0
[mod-archive]: http://modarchive.org
[irc-clients]: http://en.wikipedia.org/wiki/Comparison_of_Internet_Relay_Chat_clients
[espernet-servers]: http://www.esper.net/servers.php