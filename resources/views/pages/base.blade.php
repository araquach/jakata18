@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'description' => 'Training and developing our team to the highest possible standard has always been a major priority for us here at Jakata. Along with our sister salon Paul Kemp Hairdressing we\'ve produced some incredible talent from scratch and helped existing stylists polish their skills to the next level.',
	'keywords' => 'Hair Academy, trainee hairdressers, apprentices, hair school',
	'ogtitle' => 'Introducing Base - Our New Training Academy',
	'ogdescription' => 'Training and developing our team to the highest possible standard has always been a major priority for us here at Jakata. Along with our sister salon Paul Kemp Hairdressing we\'ve produced some incredible talent from scratch and helped existing stylists polish their skills to the next level.',
	'ogimage' => url('/') . '/images/salon/base_meta.jpg',
	'title' => 'Jakata Salon - Base Hairdressing - Hairdressers in Warrington'
	])

@stop

@section('content')

@include('layouts.partials.fb_like')

<div id="base">
	<div id="base-copy">
		<h1>Introducing</h1>
		<img src="/images/base/logo.png" alt="Base Hairdressing">
		<h1>Our Amazing New Training Academy</h1>

		<p><strong>Training and developing our team to the highest possible standard has always been a major priority for us here at Jakata. Along with our sister salon Paul Kemp Hairdressing we've produced some incredible talent from scratch and helped existing stylists polish their skills to the next level.</strong></p>
		<p>We decided to centralise our training and put all of our apprentices and graduate stylists under one roof in our brand new <strong>Base Hair Academy!</strong></p>
		<p>We gave our old Jakata premises a major facelift and created an amazing training environment and working space that both our staff and clients can appreciate</p>
		<div class="base-pics">
				<img src="/images/base/base-1.jpg" alt="Base Hairdressing">
				<img src="/images/base/base-2.jpg" alt="Base Hairdressing">
				<img src="/images/base/base-3.jpg" alt="Base Hairdressing">
				<img src="/images/base/base-4.jpg" alt="Base Hairdressing">
		</div>
		<p>All of our <strong>apprentices</strong> and <strong>graduate stylists</strong> are now located at Base where we can offer our full selection of hair services at a fraction of the cost. All services are fully supervised by Senior Stylists and all our usual high quality products are used.</p>

		<h1>The Base Team</h1>

		<div class="base-team-ind">
			<div class="base-team-ind-pic">
				<img src="/images/base/abi.jpg" alt="Abi">
			</div>
			<div class="base-team-ind-copy">
				<h2>Abi</h2>
				<h3>Advanced Graduate</h3>
				<p><strong>Abi is an extremely progressive hairdresser. She recently won a place on the GHD Style Squad - a team of just 8 stylists from all over the UK, hand picked by GHD.</strong></p>
				<p>She produces some beautiful cuts, colours and styles. Her friendly, approachable personality ensures she always gets 5 star feedback from her clients.</p>
				<p>Abi temporarily joins us from PK to help get Base up and running.</p>
				<small>Average Colour &amp; Cut: &pound;80</small>
			</div>
		</div>
		<div class="base-team-ind">
			<div class="base-team-ind-pic">
				<img src="/images/base/lauren_t.jpg" alt="Lauren T">
			</div>
			<div class="base-team-ind-copy">
				<h2>Lauren T</h2>
				<h3>Graduate</h3>
				<p><strong>Lauren is a Graduate Stylist with loads of flair and a huge passion for the industry. She loves creating bold, statement looks, particularly short cuts and funky styles.</strong></p>
				<p>She loves clients that are looking for something a bit different and open to ideas - if you're wanting a new look then book in for a consultation with her!</p>
				<small>Average Colour &amp; Cut: &pound;60</small>
			</div>
		</div>
		<div class="base-team-ind">
			<div class="base-team-ind-pic">
				<img src="/images/base/david.jpg" alt="David">
			</div>
			<div class="base-team-ind-copy">
				<h2>David</h2>
				<h3>Graduate</h3>
				<p><strong>David is our latest recruit. He completed his training at Andrew Collinge Graduates in Liverpool and is now looking to work his way to stylist level.</strong></p>
				<p>He produces beautiful colour and cutting work and his blow-dry's are stunning!</p>
				<small>Average Colour &amp; Cut: &pound;60</small>
			</div>
		</div>
		<div class="base-team-ind">
			<div class="base-team-ind-pic">
				<img src="http://via.placeholder.com/200x220" alt="Lauren W">
			</div>
			<div class="base-team-ind-copy">
				<h2>Lauren W</h2>
				<h3>Junior Stylist</h3>
				<p><strong>Lauren is working her way to become a graduate stylist after completing 1 year of her apprenticeship with us. Her skills are building fast and she's not afraid to try out something new.</strong></p>
				<p>She loves all aspects of hairdressing and is eager to take on clients.</p>
				<small>Average Colur &amp; Cut: &pound;35</small>
			</div>
		</div>
		<div class="base-team-ind">
			<div class="base-team-ind-pic">
				<img src="http://via.placeholder.com/200x220" alt="Lucy">
			</div>
			<div class="base-team-ind-copy">
				<h2>Lucy</h2>
				<h3>Junior Stylist</h3>
				<p><strong>Lucy is in the second year of her apprenticeship and is already producing some amazing work.</strong></p>
				<p>She has recently opened her column up and is looking to gain experience in all aspects of hairdressing.</p>
				<p>Get booked in with Lucy to see what she can do for you!</p>
				<small>Average Colur &amp; Cut: &pound;35</small>
			</div>
		</div>

		<h2>Prices</h2>

		<table>
			<tr>
				<th></th>
				<th>Advanced<br>Graduate</th>
				<th>Graduate</th>
				<th>Junior Stylist</th>
				<th>Junior</th>
			</tr>
			<tr>
				<th>Cut, Dry & Style</th>
				<td>&pound;30</td>
				<td>&pound;25</td>
				<td>&pound;15</td>
				<td>&pound;10</td>
			</tr>
			<tr>
				<th>Colour</th>
				<td>&pound;40</td>
				<td>&pound;35</td>
				<td>&pound;20</td>
				<td>&pound;10</td>
			</tr>
			<tr>
				<th>Blow Dry</th>
				<td>&pound;15</td>
				<td>&pound;15</td>
				<td>&pound;10</td>
				<td>&pound;5</td>
			</tr>
		</table>
		<p>All prices are a guide. A specific price will be quoted on consultation. A skin test is required 48 hours before any colour service for new clients</p>

		<h2>Models required!</h2>

		<p>We have model training days where we require volunteers to have hair done for training purposes, usually on Tuesday/Wednesday day time. These session are practically free (a nominal charge to cover colour product costs sometimes applies). Please add your name to our model database here if you are usually available on these days << link >> and we'll contact you when we have a session that fits your needs.</p>

		<p class="base-book">To book an appointment with on of our talented stylists at Base Hairdressing call <strong>01925 444449</strong></p>

		<div id="follow-us">
			<h2>Follow Base</h2>
			<a href="https://www.instagram.com/basehairdressing/" target="_blank"><img src="/images/footer/social/instagram.png" alt="Instagram"></a><img src="" alt="">
			<a href="https://www.facebook.com/basehairdressing/" target="_blank"><img src="/images/footer/social/facebook.png" alt="Facebook"></a>
		</div>

		<div id="fb-like">
			<div class="fb-like" data-href="http://www.jakatasalon.co.uk/salon" data-width="250" data-layout="button" data-action="like" data-show-faces="true" data-share="true">
			</div>
		</div>
	</div>
</div>

@stop