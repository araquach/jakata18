@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'description' => 'We\'re running these special offers with selected team members!',
	'keywords' => 'Jakata Offers, Jakata offers, hairdressing Offers, salon Offers, New Year offers',
	'ogtitle' => 'Special offers with selected team members for a limited time!',
	'ogdescription' => 'We\'ve launched some great offers with some of our stylists for a limited time only',
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

		<p>Take advantage of these great offers for a limited time only!</p>
		<p><strong>Click on each offer to find out more!</strong></p>
	</div>

	<a href="{{ URL::to('offer/lauren')}}">
		<section id="offer1">
		  	<h2>25% off first visit to Lauren</h2>
		  	<p>Lauren is a big hit with her clients - she produces some amazing fashion forward looks</p>
		  	<p>A typical Colour and Cut from &pound50<br>(inc discount)<br></p>
			<p>Click for more info</p>
			<small>For New Clients - not with any other offer - Price is guide only and includes discount<br>Skin test required 48hrs before any colour service</small>
		</section>
	</a>
	<a href="{{ URL::to('offer/abbi')}}">
		<section id="offer2">
		  	<h2>25% off first visit to Abbi</h2>
		  	<p>Abbi is a seriously sought after stylist! </p>
		  	<p>A typical Colour and Cut from &pound70 <br>(inc discount)</p>
			<p>Click for more info</p>
		    <small>For New Clients - not with any other offer- Price is guide only and includes discount<br>Skin test required 48hrs before any colour service</small>
		</section>
	</a>

	{!! link_to('booking', "Book now", array('class'=>'book_button')) !!}

</section> <!--end #offers-->

@stop
