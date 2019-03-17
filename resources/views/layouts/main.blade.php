<!DOCTYPE HTML>
<html>
	
@section('head')

@show

<body>
	<div id="main">
		<div class="main container">
			<header class="columns">
				<div class="column is-two-thirds-desktop">
					<nav class="navbar is-primary" role="navigation" aria-label="main navigation">
						<div class="navbar-brand is-hidden-desktop">
							<a href="{{ URL::to('/') }}" class="navbar-item">
								<img src="{{ asset('images/main/jakata_logo_white.png') }}">
							</a>
							<a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
								<span aria-hidden="true"></span>
								<span aria-hidden="true"></span>
								<span aria-hidden="true"></span>
							</a>
						</div>

						<div id="navbarBasicExample" class="navbar-menu">
							<div class="navbar-start">
								{!! link_to('/', 'Home', ['class' => 'navbar-item']) !!}
								{!! link_to('recruitment', 'Recruitment', ['class' => 'navbar-item']) !!}
								{!! link_to('team', 'Team', ['class' => 'navbar-item']) !!}
								{!! link_to('prices', 'Prices', ['class' => 'navbar-item']) !!}
								{!! link_to('blog', 'Blog', ['class' => 'navbar-item']) !!}
								{!! link_to('details', 'Contact', ['class' => 'navbar-item']) !!}


								<div class="navbar-item has-dropdown is-hoverable">
									<a class="navbar-link">
										More
									</a>
									<div class="navbar-dropdown">
										{!! link_to('reviews', 'Reviews', ['class' => 'navbar-item']) !!}
										{!! link_to('prices', 'Prices', ['class' => 'navbar-item']) !!}
									</div>
								</div>
							</div>
						</div>
					</nav>
				</div>
			</header>
		</div>
	</div>
</body>

</html>