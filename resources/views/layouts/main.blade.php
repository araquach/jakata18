<!DOCTYPE HTML>
<html>
	
@section('head')

@show

<body>
	<div id="main">
		<div class="main container">
			<header class="columns">
				<div class="column is-two-thirds-desktop">
					<div class="desktop-logo is-hidden-mobile">
						<figure class="image">
							<img src="/images/main/jakata_logo.png" alt="">
						</figure>
					</div>
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

			<div id="content">
				@yield('content')
			</div>
			
			<footer class="footer">
				
				<div class="columns is-mobile">
					<div class="column">
						<a href="http://www.schwarzkopf-professional.com/" target="_blank">
							<figure class="image is-110x80">
								{{ Html::image('images/footer/schwarzkopf.png', 'Schwarzkopf - The Hairdressers choice') }}
							</figure>
						</a>
					</div>
					<div class="column">
						<a href="http://www.tigihaircare.com/consumer/en-UK/bedhead/" target="_blank">
							<figure class="image is-110x80">
								{{ Html::image('images/footer/bedhead.png', 'Bedhead - Proffessional Hairdressing') }}
							</figure>
						</a>
					</div>
					<div class="column">
						<a href="http://www.catwalkbytigi.com" target="_blank">
							<figure class="image is-110x80">
								{{ Html::image('images/footer/catwalk.png', 'Tigi Catwalk') }}
							</figure>
						</a>
					</div>
					<div class="column">
						<a href="http://www.tigihaircare.com/consumer/en-UK/b4men/default.asp" target="_blank">
							<figure class="image is-110x80">
								{{ Html::image('images/footer/bformen.png', 'B for Men - mens products for hairdressers') }}
							</figure>
						</a>
					</div>
					<div class="column">
						<a href="http://www.ghdhair.com/" target="_blank">
							<figure class="image is-110x80">
								{{ Html::image('images/footer/ghd.png', 'ghd - for hairdressers') }}
							</figure>
						</a>
					</div>
					<div class="column">
						<a href="http://www.tigihaircare.com/consumer/en-UK/sfactor/default.asp" target="_blank">
							<figure class="image is-110x80">
								{{ Html::image('images/footer/sfactor.png', 'S Factor - quality brand for hairdressers') }}
							</figure>
						</a>
					</div>
				</div>
			
				<div class="social columns is-mobile">
					<div class="column">
						<a href="" target="_blank">
							<img src="{{ asset('images/footer/social/facebook.png') }}">
						</a>
					</div>
					<div class="column">
						<a href="" target="_blank">
							<img src="{{ asset('images/footer/social/instagram.png') }}">
						</a>
					</div>
					<div class="column">
						<a href="">
							<img src="{{ asset('images/footer/social/twitter.png') }}">
						</a>
					</div>
					<div class="column">
						<a href="" target="_blank">
							<img src="{{ asset('images/footer/social/pinterest.png') }}">
						</a>
					</div>
				</div>
			</footer>
		</div>
	</div>
</body>

</html>