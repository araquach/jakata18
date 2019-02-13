@extends('layouts.main') 

@section('head')

@include('layouts.partials.head', [
	'description' => 'Georgia is an incredibly talented stylist who joined the team last year. Her Cutting, colouring & Styling skills are second to none!',
	'keywords' => 'Jakata Offers, Jakata offers, hairdressing Offers, salon Offers, New Year offers',
	'ogtitle' => 'Take advantage of this amazing offer with Georgia',
	'ogdescription' => 'Georgia is an incredibly talented stylist who joined the team last year. Her cutting, colouring & styling skills are second to none! Take advantage of 20% off with her this month',
	'ogimage' => url('/') . '/images/offer/individual/georgia_montage_meta.jpg',
	'ogimagewidth' => '1400px',
	'ogimageheight' => '1200px',
	'title' => 'Jakata Salon - Georgia Offer - Hairdressers in Warrington'
	])
	
@stop

@section('content')

<section id="ind-offer">

	<div class="ind-offer-copy">
		<h1>Take advantage of this amazing offer with Georgia</h1>
		<p>Georgia is an incredibly talented stylist who joined the team last year. Her Cutting, colouring &amp; Styling skills are second to none!</p>
		<p><strong>If you're considering a new stylist then take advantage of this great offer with her&hellip;</strong></p>
	</div>

	<div id="ind-offer-img-georgia"></div>

	<div class="ind-offer-copy">
		<p><strong>Come in for a FREE consultation and if you like the ideas Georgia comes up with then book in to get 20% off your first visit with her!</strong></p>
		<p><strong>Call 01925 242960 to book</strong><br>or use our online booking (link at top of page)</p>

		<p>Just mention the offer at the time of your visit</p>
		<p class="small">(Skin Test required 48 hrs before any colour service for new clients)</p>

		<p class="link"><a href="{{ URL::to('team/georgia') }}" target="_blank">Click here to find out more about her &gt;</a></p>
	</div>

	<div id="fb-like">
		<div class="fb-like" data-href="{{ URL::to('offer/georgia') }}" data-width="250" data-layout="standard" data-action="like" data-size="large" data-show-faces="false" data-share="true"></div>
	</div>

</section> <!--end #offers-->

@stop