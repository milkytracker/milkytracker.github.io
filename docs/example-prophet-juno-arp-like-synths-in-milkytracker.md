---
layout: page
title: Prophet Juno Arp-like Synths in milkytracker 
navigation_weight: 5
---

How to reproduce fat sounding synths in Milkytracker?<br>
Simple..let's take Raina's amazing [Cyberculosis.xm](/songs/raina-Cyberculosis.zip) as example.<br>
All you need is this:<br> 

<div style="text-align:center">
    <b style="font-size:11px">A mono 8 or 16bit sample:</b><br>
    <audio controls src="/files/tutorial/raina-Cyberculosis-synthnote.mp3" type="audio/mpeg">
    </audio>
</div>
<br>

Then type some notes into milkytracker, and end up with this:

<div style="text-align:center">
    <b style="font-size:11px">A stereo synth-ARP with portamento, accents & basslayer:</b><br>
    <audio controls src="/files/tutorial/raina-Cyberculosis-synth.mp3" type="audio/mpeg">
    </audio>
</div>
<br>

If we open the [XM-file](/songs/raina-Cyberculosis.zip) in milkytracker, we can actually see **exactly** what is going on:<br>
<br>
<img width="100%" style="max-width:1024px" src="/img/example-prophet-juno-arp-like-synths-in-milkytracker.jpg"/>

> NOTE: various effects 'remember' the last setting, see docs. This means that  `A00` actually triggers the last value (`A01`).

Techniques used:

* volumes (2digit volume column: values, or `00` to repeat last value)
* volume  fadeouts (`-6` `-4` or `A06` e.g.)
* portamento (`300` repeats the initial portamento setting)
* 2 pingpong stereo-delay-channels (copy-paste of main-channel by adding empty rows in the top)

> Bottomline: space and depth can be achieved by this 2 pingpong-delay technique, without needing a reverb. 

## Alternative approach (to save channels):

* resample (ctrl+shift+v) the pattern
* sample-editor: apply 100% wet reverb
* sample-editor: enable 'Forward loop'
* play the note in the pattern on 2 hard-panned channels (effect `800` and `8FF`
* sample-editor: apply 'Loop Fold'-effect to shrink the reverb loop to reasonable size

## Listen to the whole song

<div style="text-align:center">
    <b style="font-size:11px">Raina - Cyberculosis</b><br> 
    <audio controls src="/songs/raina-Cyberculosis.mp3" type="audio/mpeg">
    </audio>
</div>
