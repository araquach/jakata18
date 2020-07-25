@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'description' => 'Special offer with talented Stylist Lauren',
	'keywords' => 'Jakata Offers, Jakata offers, hairdressing Offers, salon Offers, New Year offers',
	'ogtitle' => 'Special offer with our talented Stylist Lauren',
	'ogdescription' => 'Lauren  produces outstanding, fashion forward styles and is a big hit with her clients',
	'ogimage' => url('/') . '/images/offers/individual/lauren_montage_fb.jpg',
	'ogimagewidth' => '1200',
	'ogimageheight' => '628',
	'title' => 'Jakata Salon - Lauren Offer - Hairdressers in Warrington'
	])

@stop

@section('content')

@include('layouts.partials.fb_like')

<section id="ind-offer">

	<div class="ind-offer-copy">
		<h1>Special offer with Lauren</h1>
		<p>Lauren  produces outstanding, fashion forward colours &amp; styles and is a big hit with her clients</p>
		<p><strong>She's eager to further build her client base so has this amazing offer for a limited time&hellip;</strong></p>
	</div>

	<div id="ind-offer-img-lauren"></div>

	<div class="ind-offer-copy">
		<p><strong>Come in for a FREE consultation and if you like the ideas Lauren comes up with then book in to get 25% off your first visit with her!</strong></p>
		<p><strong>Call 01925 242960 to book</strong><br>or use our online booking (link at top of page)</p>

		<p>Just mention the offer at the time of your visit</p>
		<p class="small">(Offer ends 30/08/20 - Skin Test required 48 hrs before any colour service for new clients)</p>

		<p class="link"><a href="{{ URL::to('team/lauren') }}" target="_blank">Click here to find out more about her &gt;</a></p>
	</div>

	<div id="fb-like">
		<div class="fb-like" data-href="{{ URL::to('offer/lauren') }}" data-width="250" data-layout="standard" data-action="like" data-size="large" data-show-faces="false" data-share="true"></div>
	</div>

</section> <!--end #offers-->

@stop
