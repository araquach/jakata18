@extends('layouts.main') 

@section('head')

@include('layouts.partials.head', [
	'description' => 'At Jakata we train and develop stylists and expect the highest standards of work. Lucy has reached the point in her apprenticeship where she needs loads of clients!',
	'keywords' => 'Jakata Offers, Jakata offers, hairdressing Offers, salon Offers, New Year offers',
	'ogtitle' => 'Apprentice Lucy is Taking on More clients',
	'ogdescription' => 'At Jakata we train and develop stylists and expect the highest standards of work. Lucy has reached the point in her apprenticeship where she needs loads of clients!',
	'ogimage' => url('/') . '/images/offers/individual/lucy_montage_fb.jpg',
	'ogimagewidth' => '1200',
	'ogimageheight' => '628',
	'title' => 'Jakata Salon - Lucy Apprentice - Hairdressers in Warrington'
	])
	
@stop

@section('content')

@include('layouts.partials.fb_like')

<section id="ind-offer">

	<div class="ind-offer-copy">
		<h1>Apprentice Lucy is Taking on More clients</h1>
		<h2>A Colour &amp; Cut for just &pound;20!</h2>
		<p>At Jakata we train and develop our stylists to the highest standards. Lucy has reached the point in her apprenticeship where she needs loads of clients!</p>
		<p><strong>She's progressing at an amazing rate and is now looking to get as much experience as possible.</strong></p>
	</div>

	<div id="ind-offer-img-lucy"></div>

	<div class="ind-offer-copy">
		<p>A junior stylist like Lucy produces high quality work at a fraction of the price of a fully qualified stylist. All work is fully supervised and checked by a senior stylist.</p>

		<p><strong>Come in for a FREE consultation and if you like the ideas Lucy comes up with get booked in with her!</strong></p>
		<p><strong>Call 01925 242960 to book</strong><br>or use our online booking (link at top of page)</p>
		<p class="small">(Skin Test required 48 hrs before any colour service for new clients)</p>

		<p class="link"><a href="{{ URL::to('team/lucy') }}" target="_blank">Click here to find out more about her &gt;</a></p>
	</div>

	<div id="fb-like">
		<div class="fb-like" data-href="{{ URL::to('offer/lucy') }}" data-width="250" data-layout="standard" data-action="like" data-size="large" data-show-faces="false" data-share="true"></div>
	</div>

</section> <!--end #offers-->

@stop