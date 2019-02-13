@extends('layouts.main') 

@section('head')

@include('layouts.partials.head', [
	'description' => '',
	'keywords' => 'Jakata Offers, Jakata offers, hairdressing Offers, salon Offers, New Year offers',
	'ogtitle' => '',
	'ogdescription' => '',
	'ogimage' => url('/') . '/images/offer/individual/lucy_montage_meta.jpg',
	'title' => 'Jakata Salon - Lucy Offer - Hairdressers in Warrington'
	])
	
@stop

@section('content')

<section id="ind-offer">

	<div class="ind-offer-copy">
		<h1>Special introductory offer with our recently promoted stylist Lucy</h1>
		<p>Lucy is flying up the ranks and the quality of her work is second to none! Check out some of her recent looks in the pics!</p>
		<p><strong>If you're considering a new stylist then take advantage of this great intro offer with her&hellip;</strong></p>
	</div>

	<div id="ind-offer-img-lucy"></div>

	<div class="ind-offer-copy">
		<p><strong>Come in for a FREE consultation and if you like the ideas Lucy comes up with then book in to get 20% off your visit!</strong></p>
		<p><strong>Call 01925 242960 to book</strong><br>or use our online booking (link at top of page)</p>

		<p>Just mention the offer at the time of your visit</p>
		<p class="small">(Skin Test required 48 hrs before any colour service for new clients)</p>

		<p class="link"><a href="{{ URL::to('team/lucy') }}" target="_blank">Click here to find out more about her &gt;</a></p>
	</div>

	<div id="fb-like">
		<div class="fb-like" data-href="{{ URL::to('offer/lucy') }}" data-width="250" data-layout="standard" data-action="like" data-size="large" data-show-faces="false" data-share="true"></div>
	</div>

</section> <!--end #offers-->

@stop