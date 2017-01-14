<!-- Collect the nav links, forms, and other content for toggling -->
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

	<ul class="nav navbar-nav xs-text-center xs-space-inside-down-sm">

		<li class="{{ Request::path() == '/' ? 'active' : '' }}">
			<a href="/">HOME <span class="sr-only">(current)</span></a>
		</li>

		<li class="{{ Request::path() == '/mentor4you' ? 'active' : '' }}">
			<a href="/mentor4you">MENTOR4YOU</a>
		</li>

		<li class="{{ Request::path() == '/actueel' ? 'active' : '' }}">
			<a href="{{ URL::to('actueel') }}">ACTUEEL</a>
		</li>

		<li class="{{ Request::path() == '/ervaringen' ? 'active' : '' }}">
			<a href="/ervaringen">ERVARINGEN</a>
		</li>

		<li class="{{ Request::path() == '/steun-ons' ? 'active' : '' }}">
			<a href="{{ URL::to('steun-ons') }}">STEUN ONS</a>
		</li>

		<li class="{{ Request::path() == '/contact' ? 'active' : '' }}">
			<a href="{{ URL::to('contact') }}">CONTACT</a>
		</li>

	</ul>

</div>