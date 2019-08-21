@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'description' => 'Lucy is producing some incredible work! Take advantage of this special price with her for a limited time',
	'keywords' => 'Jakata Offers, Jakata offers, hairdressing Offers, salon Offers, New Year offers',
	'ogtitle' => 'Lucy is Taking on More clients',
	'ogdescription' => 'Lucy is producing some incredible work! Take advantage of this special price with her for a limited time',
	'ogimage' => url('/') . '/images/offers/individual/lucy_montage_fb.jpg',
	'ogimagewidth' => '1200',
	'ogimageheight' => '628',
	'title' => 'Jakata Salon - Lucy Offer - Hairdressers in Warrington'
	])

@stop

@section('content')

@include('layouts.partials.fb_like')

<section id="ind-offer">

	<div class="ind-offer-copy">
		<h1>Special Offer with Lucy</h1>
		<h2>A Colour &amp; Cut for just &pound;40!</h2>
		<p>Lucy is producing some incredible work! Take advantage of this special price with her for a limited time</p>
		<p><strong>She's progressing at an amazing rate so it won't be long until she's promoted and her prices go up!</strong></p>
	</div>

	<div id="ind-offer-img-lucy"></div>

	<div class="ind-offer-copy">

		<p><strong>Come in for a FREE consultation and if you like the ideas Lucy comes up with get booked in with her!</strong></p>
		<p><strong>Call 01925 242960 to book</strong><br>or use our online booking (link at top of page)</p>
		<p class="small">(Skin Test required 48 hrs before any colour service for new clients)</p>
		<p class="small">(Offer ends 27/09/19 - Skin Test required 48 hrs before any colour service for new clients)</p>
		<p class="link"><a href="{{ URL::to('team/lucy') }}" target="_blank">Click here to find out more about her &gt;</a></p>
	</div>

	<div id="fb-like">
		<div class="fb-like" data-href="{{ URL::to('offer/lucy') }}" data-width="250" data-layout="standard" data-action="like" data-size="large" data-show-faces="false" data-share="true"></div>
	</div>

</section> <!--end #offers-->

@stop
