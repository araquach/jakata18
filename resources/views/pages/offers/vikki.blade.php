@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'description' => 'Special offer with our ultra talented stylist Vikki',
	'keywords' => 'Jakata Offers, Jakata offers, hairdressing Offers, salon Offers, New Year offers',
	'ogtitle' => 'Special offer with our ultra talented stylist Vikki',
	'ogdescription' => 'Vikki has been a member of the Jakata team for 8 years and produces some incedible styles',
	'ogimage' => url('/') . '/images/offers/individual/vikki_montage_fb.jpg',
	'ogimagewidth' => '1200',
	'ogimageheight' => '628',
	'title' => 'Jakata Salon - Vikki Offer - Hairdressers in Warrington'
	])

@stop

@section('content')

@include('layouts.partials.fb_like')

<section id="ind-offer">

	<div class="ind-offer-copy">
		<h1>Special offer with our ultra talented stylist Vikki</h1>
		<p>Vikki has been a member of the Jakata team for 8 years and produces some incedible styles</p>
		<p><strong>Take advantage of this great offer with her. She works part time so ensure you book ahead to get an appointment&hellip;</strong></p>
	</div>

	<div id="ind-offer-img-vikki"></div>

	<div class="ind-offer-copy">
		<p><strong>Come in for a FREE consultation and if you like the ideas Vikki comes up with then book in to get 25% off your first visit with her!</strong></p>
		<p><strong>Call 01925 242960 to book</strong><br>or use our online booking (link at top of page)</p>

		<p>Just mention the offer at the time of your visit</p>
		<p class="small">(Offer ends 31/03/20 - Skin Test required 48 hrs before any colour service for new clients)</p>

		<p class="link"><a href="{{ URL::to('team/vikki') }}" target="_blank">Click here to find out more about her &gt;</a></p>
	</div>

	<div id="fb-like">
		<div class="fb-like" data-href="{{ URL::to('offer/vikki') }}" data-width="250" data-layout="standard" data-action="like" data-size="large" data-show-faces="false" data-share="true"></div>
	</div>

</section> <!--end #offers-->

@stop
