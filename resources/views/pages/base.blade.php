@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'description' => '',
	'keywords' => 'Hair Academy, trainee hairdressers, apprentices, hair school',
	'ogtitle' => 'Base Hairdressing',
	'ogdescription' => '',
	'ogimage' => url('/') . '/images/salon/base_meta.jpg',
	'title' => 'Jakata Salon - Base Hairdressing - Hairdressers in Warrington'
	])

@stop

@section('content')

@include('layouts.partials.fb_like')

<div id="base">

	<div id="base-copy">
		<h1>Introducing Base - Our New Training Academy</h1>

		<p><strong>Training and developing our team to the highest possible standard has always been a major priority for us here at Jakata. Along with our sister salon Paul Kemp Hairdressing we've produced some incredible talent from scratch and helped existing stylists polish their skills to the next level.</strong></p>
		<p>We decided to centralise our training and put all of our apprentices and graduate stylists under one roof in our brand new Base Hair Academy!</p>
		<p>We gave our old Jakata premises a major facelift and created an amazing training environment and working space that both our staff and clients can appreciate</p>
		<div class="base-pics">
				<img src="" alt="Base Hairdressing">
		</div>
		<p>All of our apprentices and graduate stylists are now located at Base where we can offer our full selection of hair services at a fraction of the cost. All services are fully supervised by Senior Stylists and all the usual high quality products are used.</p>

		<h2>The Team</h2>

		<div class="team-pic">

		</div>
		<div class="base-team-ind abi">
			<h3>Abi</h3>
			<p>Abi is an extremely progressive hairdresser and has recently been promoted to a Stylist. She produces some beautiful cuts, colours and styles</p>
		</div>
		<div class="base-team-ind lauren">
		<h3>Lauren T</h3>
		</div>

		<h3>David</h3>

		<h3>Lauren W</h3>
		<p>Lauren is working her way to become a graduate stylist after completing 1 year of her apprenticeship with us. Her skills are building fast and she's not afraid to try out something new.</p>

		<h3>Lucy</h3>

		<h2>Prices</h2>

		<table>
			<tr>
				<th>Service</th>
				<th>Advanced<br>Graduate</th>
				<th>Graduate</th>
				<th>Junior Stylist</th>
				<th>Junior</th>
			</tr>
			<tr>
				<td>Cut, Dry & Style</td>
				<td>&pound;</td>
				<td>&pound;</td>
				<td>&pound;</td>
				<td>&pound;</td>
			</tr>
			<tr>
				<td>Colour</td>
				<td>&pound;</td>
				<td>&pound;</td>
				<td>&pound;</td>
				<td>&pound;</td>
			</tr>
			<tr>
				<td>Blow Dry</td>
				<td>&pound;</td>
				<td>&pound;</td>
				<td>&pound;</td>
				<td>&pound;</td>
			</tr>
		</table>
		<p>All prices are a guide. A specific price will be quoted on consultation. Please note a skin test is required 24 hours before any colour service for new clients</p>

		<h2>Models required!</h2>

		<p>We have model training days where we require volunteers to have hair done for training purposes, usually on Tuesday/Wednesday day time. These session are practically free (a nominal charge to cover colour product costs sometimes applies). Please add your name to our model database here if you are usually available on these days << link >> and we'll contact you when we have a session that fits your needs.</p>

		<p>To book an appointment with on of our talented stylists at Base Hairdressing call 01925 444449</p>

		<div id="fb-like">
			<div class="fb-like" data-href="http://www.jakatasalon.co.uk/salon" data-width="250" data-layout="button" data-action="like" data-show-faces="true" data-share="true">
			</div>
		</div>
	</div>
</section>

@stop
