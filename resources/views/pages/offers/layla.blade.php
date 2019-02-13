@extends('layouts.main') 

@section('head')

@include('layouts.partials.head', [
	'description' => 'Special offer with our ultra talented stylist Layla',
	'keywords' => 'Jakata Offers, Jakata offers, hairdressing Offers, salon Offers, New Year offers',
	'ogtitle' => 'Special offer with our ultra talented stylist Layla',
	'ogdescription' => 'If you\'re looking for a change of style then book in with Layla who will come up with some great new hair ideas for you!',
	'ogimage' => url('/') . '/images/offer/individual/layla_montage_meta.jpg',
	'title' => 'Jakata Salon - Layla Offer - Hairdressers in Warrington'
	])
	
@stop

@section('content')

<section id="ind-offer">

	<div class="ind-offer-copy">
		<h1>Special offer with our ultra talented stylist Layla</h1>
		<p>If you're looking for a change of style then book in with Layla who will come up with some great new hair ideas for you!</p>
		<p><strong>She's a long standing team member and recently had a promotion. Take advantage of this great offer with her&hellip;</strong></p>
	</div>

	<div id="ind-offer-img-layla"></div>

	<div class="ind-offer-copy">
		<p><strong>Come in for a FREE consultation and if you like the ideas Layla comes up with then book in to get 20% off your first visit with her!</strong></p>
		<p><strong>Call 01925 242960 to book</strong><br>or use our online booking (link at top of page)</p>

		<p>Just mention the offer at the time of your visit</p>
		<p class="small">(Skin Test required 48 hrs before any colour service for new clients)</p>

		<p class="link"><a href="{{ URL::to('team/layla') }}" target="_blank">Click here to find out more about her &gt;</a></p>
	</div>

	<div id="fb-like">
		<div class="fb-like" data-href="{{ URL::to('offer/layla') }}" data-width="250" data-layout="standard" data-action="like" data-size="large" data-show-faces="false" data-share="true"></div>
	</div>

</section> <!--end #offers-->

@stop