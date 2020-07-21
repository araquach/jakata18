<!DOCTYPE HTML>
<html>
	
@section('head')

@show

<body>
	
	<script type="text/javascript" src="{{ URL::asset('scripts/jquery.js') }}"></script>

	<div class="container" id="page">

		<header class="group">
			<div id="logo" class="logo"></div>
			<h1>Jakata Salon</h1>
			<h2>Hairdressers in Warrington</h2>

			@if(Request::is('prospect/*'))
			<nav class="group">
				<ul>
					<li>{!! link_to('prospect/taster', 'Taster Package applicants') !!}</li>
					<li>{!! link_to('prospect/freeproducts', 'Free Product applicants') !!}</li>
					<li><a href="{{ route('logout') }}"
				               onclick="event.preventDeault();
				                             document.getElementById('logout-form').submit();">
				                {{ __('Logout') }}
				            </a>
				        
				            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
				                @csrf
				            </form>
			        	</li>
				</ul>
			</nav>
			
			@elseif(!Request::is('prospect/*'))
			
				@if(Auth::user())
				
				<nav class="group">
					<ul>
						<li>{!! link_to('/admin', 'Menu') !!}</li>
						@if(Auth::user()->role == 1)
						<li>{!! link_to('/stylist', 'Stylists') !!}</li>
						<li>{!! link_to('/apprentice', 'Apprentices') !!}</li>
						<li>{!! link_to('/superstylist/admin', 'SS Admin') !!}</li>
						<li><a href="{{ route('logout') }}"
				               onclick="event.preventDeault();
				                             document.getElementById('logout-form').submit();">
				                {{ __('Logout') }}
				            </a>
				        
				            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
				                @csrf
				            </form>
			        	</li>
            			@endif
					</ul>
				</nav>
				
				@else
				
				<nav class="group">
					<ul>
						<li>{!! link_to('/', 'Home') !!}</li>
						<li>{!! link_to('recruitment', 'Recruitment') !!}</li>
						<li>{!! link_to('team', 'Team') !!}</li>
						<!-- <li>{!! link_to('prices', 'Prices') !!}</li> -->
						<li>{!! link_to('blog', 'Blog') !!}</li>
						<!-- <li>{!! link_to('reviews', 'Reviews') !!}</li> -->
						<li>{!! link_to('offers', 'Offers') !!}</li>
						<li>{!! link_to('details', 'Contact') !!}</li>
					</ul>
				</nav>
				
				@endif
				
			@endif
			
			@if(!Request::is('bookings'))
				{!! link_to('bookings', 'Book Now', ['class' => 'book-now']) !!}
			@endif
			
			
		</header>

		<div id="content">
			@yield('content')
		</div>

		<div class="clear group"></div>

		<footer>

			<section id="prodlogos">
				<ul id="prodcomps">
					<li>
						<a href="http://www.schwarzkopf-professional.com"><img src={{ asset( 'images/footer/footer-01.png') }} alt="One"></a>
					</li>
					<li>
						<a href="http://www.schwarzkopf-professional.com"><img src={{ asset( 'images/footer/footer-02.png') }} alt="Schwarzkopf"></a>
					</li>
					<li>
						<a href="http://www.schwarzkopf-professional.com"><img src={{ asset( 'images/footer/footer-03.png') }} alt="Schwarzkopf Osis"></a>
					</li>
					<li>
						<a href="http://www.kebelo.com"><img src={{ asset( 'images/footer/footer-04.png') }} alt="Kebelo"></a>
					</li>
					<li>
						<a href="http://www.tigihaircare.com/consumer/en-UK/bedhead"><img src={{ asset( 'images/footer/footer-05.png') }} alt="Tigi Bedhead - The Hairdressers Choice"></a>
					</li>
					<li>
						<a href="http://www.catwalkbytigi.com"><img src={{ asset( 'images/footer/footer-06.png') }} alt="Tigi Catwalk - hair styling from the runways"></a>
					</li>
					<li>
						<a href="http://www.tigihaircare.com"><img src={{ asset( 'images/footer/footer-07.png') }} alt="Tigi B for Men"></a>
					</li>

					<li>
						<a href="http://www.ghdhair.com"><img src={{ asset( 'images/footer/footer-08.png') }} alt="One"></a>
					</li>

				</ul>
			</section>

			<section id="aboutus" class="group">
				<ul class="tinytext">
					<li><strong>Jakata Salon</strong></li>
					<li>Hairdressers in Warrington</li>
					<li>Hairdressers in Cheshire</li>
					<li>Cutting</li>
					<li>Colouring</li>
					<li>Opti-Smooth Straightening</li>
					<li>Hair Extensions</li>
					<li>Wedding Hair</li>
					<li>Hairdressing Gift Vouchers</li>
					<li>GHD</li>
					<li>Daniel Anderson Hairdressing</li>
					<li>Warrington Hairdressers</li>
					<li>Warrington Hairdressing</li>
					<li>Cheshire Hairdressers</li>
					<li>plus lots more!</li>
					<li>All in our Warrington Hairdressing Salon</li>
				</ul>
			</section>

			<div id="social">
				<a href="http://www.facebook.com/JakataSalon" target="_blank"><div class="social_logo facebook"></div></a>
				<a href="https://twitter.com/JakataSalon" target="_blank"><div class="social_logo twitter"></div></a>
				<a href="https://plus.google.com/+JakataWarrington" target="_blank"><div class="social_logo google"></div></a>
				<a href="https://www.instagram.com/jakatasalon1/" target="_blank"><div class="social_logo instagram"></div></a>
				<a href="https://www.pinterest.co.uk/jakatasalon/" target="_blank"><div class="social_logo pinterest"></div></a>
			</div>
			<div id="directory">
				<p>Find us in the directory of <a href='http://www.warrington.co.uk/hairdressers/' class="directory-link">Warrington Hairdressers</a></p>
			</div>
		</footer>
			
	</div>

</body>

</html>