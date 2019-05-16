@extends('layouts.main') 

@section('head')

@include('layouts.partials.head', [
	'description' => 'Special introductory offer with our new Graduate Stylist Lauren',
	'keywords' => 'Jakata Offers, Jakata offers, hairdressing Offers, salon Offers, New Year offers',
	'ogtitle' => 'Special introductory offer with our new Graduate Stylist Lauren',
	'ogdescription' => 'Lauren is our latest addition to the team and is already producing some outstanding, fashion forward styles!',
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
		<h1>Special introductory offer with our latest Graduate Stylist Lauren</h1>
		<p>Lauren is our latest addition to the team and is already producing some outstanding, fashion forward styles!</p>
		<p><strong>She's eager to build her client base so has this amazing offer for a limited time&hellip;</strong></p>
	</div>

	<div id="ind-offer-img-lauren"></div>

	<div class="ind-offer-copy">
		<p><strong>Come in for a FREE consultation and if you like the ideas Lauren comes up with then book in to get 20% off your first visit with her!</strong></p>
		<p><strong>Call 01925 242960 to book</strong><br>or use our online booking (link at top of page)</p>

		<p>Just mention the offer at the time of your visit</p>
		<p class="small">(Offer ends 30/06/19 - Skin Test required 48 hrs before any colour service for new clients)</p>

		<p class="link"><a href="{{ URL::to('team/lauren') }}" target="_blank">Click here to find out more about her &gt;</a></p>
	</div>

	<div id="fb-like">
		<div class="fb-like" data-href="{{ URL::to('offer/lauren') }}" data-width="250" data-layout="standard" data-action="like" data-size="large" data-show-faces="false" data-share="true"></div>
	</div>

</section> <!--end #offers-->

@stop