@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'description' => 'The quality of Abbi\'s work is second to none! Check out some of her recent looks in the pics below!',
	'keywords' => 'Jakata Offers, Jakata offers, hairdressing Offers, salon Offers, New Year offers',
	'ogtitle' => 'Special introductory offer with Abbi',
	'ogdescription' => 'The quality of Abbi\'s work is second to none! Check out some of her recent looks in the pics below!',
	'ogimage' => url('/') . '/images/offers/individual/abbi_montage_fb.jpg',
	'ogimagewidth' => '1200',
	'ogimageheight' => '628',
	'title' => 'Jakata Salon - Abbi Offer - Hairdressers in Warrington'
	])

@stop

@section('content')

@include('layouts.partials.fb_like')

<section id="ind-offer">

	<div class="ind-offer-copy">
		<h1>Special offer with Abbi</h1>
		<p>The quality of Abbi's work is second to none! Check out some of her recent looks in the pics below!</p>
		<p><strong>If you're considering a new stylist then take advantage of this great offer with her&hellip;</strong></p>
	</div>

	<div id="ind-offer-img-abbi"></div>

	<div class="ind-offer-copy">
		<p><strong>Come in for a FREE consultation and if you like the ideas Abbi comes up with then book in to get 25% off your visit with her!</strong></p>
		<p><strong>Call 01925 242960 to book</strong><br>or use our online booking (link at top of page)</p>

		<p>Just mention the offer at the time of your visit</p>
		<p class="small">(Offer ends 31/03/20 - Skin Test required 48 hrs before any colour service for new clients)</p>

		<p class="link"><a href="{{ URL::to('team/abbi') }}" target="_blank">Click here to find out more about her &gt;</a></p>
	</div>

	<div id="fb-like">
		<div class="fb-like" data-href="{{ URL::to('offer/abbi') }}" data-width="250" data-layout="standard" data-action="like" data-size="large" data-show-faces="false" data-share="true"></div>
	</div>

</section> <!--end #offers-->

@stop
