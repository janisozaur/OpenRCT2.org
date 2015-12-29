@extends('layouts.sidebarPageWithHeader')
@section('title','Welcome')

@section('specialHeader')
<div class="homepage_slider">
</div>
@stop

@section('page')

<h2 class="blue">OpenRCT2</h2>
<p>
    OpenRCT2 recreates RollerCoaster Tycoon 2 into opensource code. This allows
    us to add <a href="/features">new features</a>, fix original bugs and raise
    game limits. There's even multiplayer co-op!
</p>
<p>
    Development started on April 2nd 2014 by <a
    href="http://dev.intelorca.co.uk/" target="_blank">Ted 'IntelOrca' John</a>.
    Thanks to numerous contributions from others the OpenRCT2 project is making
    great progress and already has new features.
</p>
<p>
    An installation of RollerCoaster Tycoon 2 is required in order to play.
    Alternatively, there are also ways to play <a href="/download-demo">OpenRCT2
    free of charge</a>.
</p>
<h2 class="blue">Download</h2>
<p>
    OpenRCT2.com provides automated builds that makes it easy to get started.
    <a href="/download/latest">Get the latest download</a>.
</p>


@stop

@section('sidebar')
<h2 class="blue">Related Links</h2>
<ul class="normaltext">
	<li><a href="//github.com/OpenRCT2/OpenRCT2" target="_blank">Project on GitHub</a></li>
	<li><a href="//github.com/OpenRCT2/OpenRCT2/issues" target="_blank">Official issue tracker</a></li>
	<li><a href="/forums/" target="_blank" style="font-weight: 600;">Sign up on the Forums</a></li>
	<li><a href="//www.reddit.com/r/OpenRCT2" target="_blank">Subreddit</a></li>
	<li><a href="//gitter.im/OpenRCT2/OpenRCT2" target="_blank">Gitter Chat</a></li>
	<li><a href="//gitter.im/OpenRCT2/OpenRCT2/non-dev" target="_blank">Gitter Non-Dev Chat</a></li>
</ul>
@stop
