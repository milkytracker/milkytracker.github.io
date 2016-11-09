---
layout: page
title: Downloads
navigation_weight: 4
---
{::options parse_block_html="true" /}

### MilkyTracker
<div class="section">
<img src="{% link img/128xreflection.png %}" style="float: right;" alt="Don't look at me, look at the cool downloads!" />
[Changes in v0.90.86][changelog]

#### Binaries:
  * [Mac OS X Universal][current-mac]
  * [Microsoft Windows][current-win] (NT, 200x, XP, Vista &amp; 7)

#### Also available in these distributions:
  * [ArchLinux Community Repository][dist-aur]
    * [i686][dist-aur-i686]
    * [x86_64][dist-aur-x86_64]
  * [Debian][dist-debian]
  * [Enlisy][dist-enlisy]
  * [FreeBSD][dist-freebsd]
  * [Gentoo][dist-gentoo]
  * [OpenBSD][dist-openbsd]
  * [pkgsrc][dist-pkgsrc] (multiplatform, native to NetBSD and DragonflyBSD)
  * [ROSA][dist-rosa]
  * [SUSE][dist-suse]
  * [Ubuntu][dist-ubuntu] (v0.90.85 @ [Launchpad][dist-launchpad])

#### Source:
  * Tarballs
      * [milkytracker-0.90.86.tar.bz2][current-src-tar-bz2]
      * [milkytracker-0.90.86.tar.gz][current-src-tar-gz]
  * Repository
      * [GitHub][current-src-github]

#### Old Binaries (0.90.85):
  * [Mac OS X Universal][0.90.85-mac]
      * [10.4 Tiger compatible version (thanks maep)][0.90.85-mac-tiger]
  * [Ubuntu][0.90.85-ubuntu-karmic] (Built on Ubuntu 9.10 Karmic Koala, may not run on other versions)
  * [Microsoft Windows][0.90.85-win] (NT, 200x, XP, Vista &amp; 7)
  * [Haiku][0.90.85-haiku]

#### Older Binaries (0.90.80):
  * [AmigaOS 4][0.90.80-amigaos4]
  * [Mac OS X Universal][0.90.80-mac]
      * [G3 compatible version][0.90.80-mac-g3]
  * [Microsoft Windows ANSI (9x &amp; Me)][0.90.80-win-ansi]
  * [Microsoft Windows CE/Mobile (ARM, MIPS, x86)][0.90.80-wince]
  * [Microsoft Windows Unicode (NT, 200x, XP &amp; Vista)][0.90.80-win-unicode]
</div>

### Samples
<div class="section">
Often requested, here are sounds, samples and instruments for use in MilkyTracker. Hosted by the illustrious [tracker.modarchive.org][modarchive-tracker].

  * [KIArchive][samples-kiarchive], the once sunken galleon of XI instruments, now resurfaced.
  * [Waveworld][samples-waveworld], the big and beautiful high-quality sound sample collection.
  * [Woolyss's chiptune samples][samples-woolyss], from [woolyss][Woolyss].
</div>

### Music
<div class="section">
  * [Example songs][music-example-songs] included in binary distributions. The .ZIP file contains the following .XM tunes:
      * Ampli, Kmuland &amp; raina &ndash; The Day They Landed
      * raina &ndash; Milk in Veins
      * raina &ndash; Slumberjack
      * svenzzon &ndash; The Titan Turrican
      * Strobe &amp; Kmuland &ndash; Universal Network 2

<table class="songs">
  <tr>
    <td><h4>More songs made with MilkyTracker:</h4></td>
    <td>source</td>
    <td>stream</td>
  </tr>
{% for s in site.data.songs %}
{% assign source = "/songs/" | append: s.filename | relative_url %}
{% assign stream = source | replace: ".zip", ".mp3" %}
  <tr>
    <td>{{ s.author }} &ndash; {{ s.title }}</td>
    <td><a href="{{ source }}">ZIP/XM</a></td>
    <td><a href="{{ stream }}">MP3</a></td>
  </tr>
{% endfor %}
  <tr>
    <td></td>
    <td></td>
    <td><a href="{% link songs/MilkyTracker-MoreSongs.pls%}">Stream all</a></td>
  </tr>
</table>

[![Some Rights Reserved]({% link img/somerights20.png %})][creative-commons]
All music is licensed under the  
[Creative Commons Attribution-Noncommercial-Share Alike 3.0 Unported License][creative-commons].
</div>

<!--
### MilkyPlay
<div class="section">
#### The mobile office module player experience:

  * [Windows CE (ARM/MIPS/x86)](#) for P/PC, H/PC &amp; Gizmondo
</div>

### MilkyPlayer PSP
<div class="section">
#### What it says on the carton, and then some.

Fill your PlayStation Portable with the milky goodness of a kickass module player with faptastic widescreen graphics.

  * [PlayStation Portable firmware v3.1x/1.5](#)
</div>
-->

*[P/PC]: Pocket PC
*[H/PC]: Handheld PC

[changelog]: {% link docs/ChangeLog.html %}

[current-mac]: {% link files/milkytracker-0.90.86-osx_universal.zip %}
[current-win]: {% link files/milkytracker-0.90.86-winnt.zip %}

[dist-aur]: http://www.archlinux.org/packages/?q=milkytracker
[dist-aur-i686]: http://www.archlinux.org/packages/community/i686/milkytracker/
[dist-aur-x86_64]: http://www.archlinux.org/packages/community/x86_64/milkytracker/
[dist-debian]: http://packages.debian.org/sid/milkytracker
[dist-enlisy]: http://enlisy.org/py-bin/packages.py?id=1100
[dist-freebsd]: http://www.freshports.org/audio/milkytracker/
[dist-gentoo]: http://packages.gentoo.org/package/media-sound/milkytracker
[dist-openbsd]: http://openports.se/audio/milkytracker
[dist-pkgsrc]: http://pkgsrc-wip.sf.net/
[dist-rosa]: http://modarchive.org/index.php?topic=3331.0
[dist-suse]: http://packman.links2linux.de/package/MilkyTracker
[dist-ubuntu]: http://packages.ubuntu.com/milkytracker
[dist-launchpad]: https://launchpad.net/~philip5/+archive/extra

[current-src-tar-bz2]: {% link files/milkytracker-0.90.86.tar.bz2 %}
[current-src-tar-gz]: {% link files/milkytracker-0.90.86.tar.gz %}
[current-src-github]: https://github.com/milkytracker/milkytracker

[0.90.85-mac]: {% link files/milkytracker-0.90.85-osx_universal.tbz %}
[0.90.85-mac-tiger]: {% link files/milkytracker-0.90.85-osx_tiger.zip %}
[0.90.85-ubuntu-karmic]: {% link files/milkytracker-0.90.85-ubuntu.tbz %}
[0.90.85-win]: {% link files/milkytracker-0.90.85-winnt.zip %}
[0.90.85-haiku]: {% link files/MilkyTracker-0.90.85-haiku-2.zip %}

[0.90.80-amigaos4]: {% link files/MilkyTracker_AmigaOS4_2008_04_13.lha %}
[0.90.80-mac]: {% link files/MilkyTracker_OSX_universal_2008_04_13.tgz %}
[0.90.80-mac-g3]: {% link files/MilkyTracker_OSX_universal_G3.zip %}
[0.90.80-win-ansi]: {% link files/MilkyTracker_Win9x_2008_04_13.zip %}
[0.90.80-wince]: {% link files/MilkyTracker_WinCE_2008_04_13.zip %}
[0.90.80-win-unicode]: {% link files/MilkyTracker_WinNT_2008_04_13.zip %}

[modarchive-tracker]: http://tracker.modarchive.org
[samples-kiarchive]: http://tracker.modarchive.org/torrents/kiarchive.zip.torrent
[samples-waveworld]: http://tracker.modarchive.org/torrents/TMA-waveworld.zip.torrent
[samples-woolyss]: http://tracker.modarchive.org/torrents/woolyss-chiptune-samples.zip.torrent
[woolyss]: http://woolyss.com

[music-example-songs]: {% link songs/MilkyTracker-ExampleSongs.zip %}
[creative-commons]: http://creativecommons.org/licenses/by-nc-sa/3.0 "Damn straight."
[music-stream-all]: {% link songs/MilkyTracker-MoreSongs.pls %}