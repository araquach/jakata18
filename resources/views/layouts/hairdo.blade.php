<!DOCTYPE HTML>
<html class="no-js">
	
@section('head')

@show


<body>

	<div class="container" id="page">

		<header class="small group">
			<a href="{{ URL::to('/') }}"><div id="logo"></div></a>
			<h1>Jakata Salon</h1>
			<h2>Fashion Forward Hairdressing</h2>
		</header>
			
		<section id="hairdo-info">
			<h1><strong><span class="pink">100 Salons</span><br>One Big Night</strong></h1>
			<p class="tk-co-headline pink"><strong>Wednesday 20 June 2018</strong></p>
			<section id="hairdo-image"></section>
			<p><strong>Jakata</strong> has partnered with <em>Schwarzkopf</em> and <em>Creative Haad</em> to be one of 100 salons taking part in the UK's biggest hair party - and we'd love you to be a part of it!</p>
			<p><span class="pink">The Big Hair Do</span> is an annual nationwide in-salon “experience” event where salons across the country get to showcase their offerings and we thought it would be great to get involved - especially as we've recently moved to our brand new salon!</p>

			<p><strong>We only have a limited number of places so read on to find out how to get your VIP invite!</strong></p>
			
			<section id="address_info">
				<p>27 Rylands Street, Warrington</p>
				<p class="big">01925 242960</p>
			</section> <!--address_info-->
		</section> <!--prospect-info-->

		@yield('content')

		<div class="clear group"></div>
		
	</div><!-- page -->

</body>