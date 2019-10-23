@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'description' => 'We\'re running these special offers with selected team members!',
	'keywords' => 'Jakata Offers, Jakata offers, hairdressing Offers, salon Offers, New Year offers',
	'ogtitle' => 'We\'re running these special offers with selected team members!',
	'ogdescription' => 'We\'ve launched some great offers with some of our stylists who are eager to build their client bases. Both Layla and Abbi have been working their way up the ranks with recent promotions and Lauren only joined us at the start of the year and is creating some amazing styles!',
	'ogimage' => url('/') . '/images/offers/individual/offers_montage_fb.jpg',
	'ogimagewidth' => '1200',
	'ogimageheight' => '628',
	'title' => 'Jakata Salon - Special Offers - Hairdressers in Warrington'
	])

@stop

@section('content')

@include('layouts.partials.fb_like')

<section id="offers">

	<div id="offer-copy">
		<h1>Special offers</h1>
		<h2>with selected team members</h2>

		<p>Takse advantage of these great offers for a limited time only!</p>
		<p><strong>Click on each offer to find out more!</strong></p>
	</div>

	<a href="{{ URL::to('offer/lauren')}}">
		<section id="offer1">
		  	<h2>Lauren's Offer</h2>
		  	<p>Lauren is firmly established in the team</p>
		  	<p><strong>For a limited time get 20% Off your first visit with her</strong></p>
		  	<p>A typical Colour and Cut from &pound55 (inc discount)<br></p>
			<small>For New Clients - not with any other offer - Price is guide only and includes discount<br>Skin test required 48hrs before any colour service</small>
		</section>
	</a>
	<a href="{{ URL::to('offer/abbi')}}">
		<section id="offer2">
		  	<h2>Abbi's Offer</h2>
		  	<p>Abbi is a seriously sought after stylist! </p>
		  	<p><strong>20% off all services with Abbi for a limited time!</strong></p>
		  	<p>A typical colour and Cut from around &pound75 (inc discount)</p>
		    <small>For New Clients - not with any other offer- Price is guide only and includes discount<br>Skin test required 48hrs before any colour service</small>
		</section>
	</a>
	<a href="{{ URL::to('offer/layla')}}">
		<section id="offer3">
		  <h2>Layla's Offer</h2>
		  <p>Layla is a master of amazing colours! Take advantage of this special price!</p>
		  <p><strong>20% off all services with Layla</strong>	</p>
		  <p>A typical colour and Cut from around &pound85 (inc discount)</p>
		  <small>For New Clients - not with any other offer - Price is guide only and includes discount</small>
		</section>
	</a>

	{!! link_to('booking', "Book now", array('class'=>'book_button')) !!}

</section> <!--end #offers-->

@stop
