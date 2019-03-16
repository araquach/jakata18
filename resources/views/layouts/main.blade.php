<!DOCTYPE HTML>
<html>
	
@section('head')

@show

<body>
	<div id="main">
		<div class="main container">
			<nav class="navbar is-primary" role="navigation" aria-label="main navigation">
				<div class="navbar-brand">
					<a href="{{ URL::to('/') }}" class="navbar-item">
						<img src="{{ asset('images/logos/jakata_logo.png') }}">
					</a>
					<a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
						<span aria-hidden="true"></span>
						<span aria-hidden="true"></span>
						<span aria-hidden="true"></span>
					</a>
				</div>

				<div class="navbar-menu">
					<div class="navbar-start">
						{!! link_to('/', 'Home', ['class' => 'navbar-item']) !!}
						{!! link_to('recruitment', 'Recruitment', ['class' => 'navbar-item']) !!}
						{!! link_to('team', 'Team', ['class' => 'navbar-item']) !!}
						{!! link_to('prices', 'Prices', ['class' => 'navbar-item']) !!}
						{!! link_to('blog', 'Blog', ['class' => 'navbar-item']) !!}
						{!! link_to('details', 'Contact', ['class' => 'navbar-item']) !!}
					</div>
				</div>
			</nav>
		</div>
	</div>
</body>

</html>