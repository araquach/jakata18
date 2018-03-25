@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'description' => 'Our apprentice Layla needs models!',
	'keywords' => 'Jakata Offers, trainee prices, hairdressing Offers, salon Offers, junior offers, junior prices, trainee prices',
	'ogtitle' => 'Models Required for Apprentice',
	'ogdescription' => 'Our apprentice Layla is looking for models for colour, cuts and blowdrys',
	'ogimage' => url('/') . '/images/spec_offer/layla_meta.jpg',
	'title' => 'Jakata Salon - New Trainee - Hairdressers in Warrington'
	])
	
@stop

@section('content')

<section id="specOffer_bground">
	
	<section id="specOffer">
	
	<h1>Models Required for our latest apprentice Layla</h1>
	<p>Here at Jakata we pride ourselves in the highest level training of our stylists. We are extremely selective of who we choose as our apprentices as we know what a gruelling process it is, with only the most dedicated people able to complete the training.</p>
	<p>We recruited Layla Relf back in June to start an apprentiship. She has completed all the preliminary training and is now at a stage where she's ready to start building a client base.</p>
	<p>Our goal now is to have Layla complete as much training as possible and gain as much experience doing a variety of peoples hair.</p>
	<p>Layla is fully adept at most colouring techniques and basic level cutting. Her blow drying skills are above standard.</p>
	<p><strong>If you would like the opportunity to experience Jakata at a much reduced rate, give us a call to book in with Layla. Her hours are currently restricted to Tuesdays and Wednesdays and appointments are subject to availability</strong></p>
	<p class="so_med"><strong>Layla's prices:</strong></p>
	
	<p class="so_big"><strong>Cut, Dry &amp; Style: &pound;10.00</strong></p>
	<p class="so_big"><strong>Colour and Cut: &pound;30.00</strong></p>
	<p class="so_small">(Average colour price - please call for specific prices)<br></p>
	<p class="so_big"><strong>Men's Cut & Style: &pound;7.00</strong></p>
	
	
	<p class="specOffer_contact"><strong>Call: 01925 242960</strong> to book</p>
	<p class="so_small">Please note: a skin test required 48 hours prior to any colour service</p>
	<p>We look forward to seeing you in the salon soon</p>
	

	</section> <!--#specOffer-->

</section> <!--end #specOffer_bground-->

@stop