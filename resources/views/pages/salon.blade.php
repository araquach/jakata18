@extends('layouts.main') 

@section('head')

@include('layouts.partials.head', [
	'description' => 'The Salon',
	'keywords' => 'hairdressing premises, hairdressers, salon, Jakata salon, Jakata hairdressers',
	'ogtitle' => 'The Salon',
	'ogdescription' => 'After fourteen years in our Bridge street premises, we finally made the move to our brand new salon on Rylands street at the end of last year. An ultra modern, bright and spacious salon with fourteen styling stations situated over two floors. Both the team and our clients now feel completely at home in the premises plus we\'ve got loads of room to take on new stylists.',
	'ogimage' => url('/') . '/images/salon/salon-meta2.jpg',
	'title' => 'Jakata Salon - The Salon - Hairdressers in Warrington'
	])
	
@stop

@section('content')

<section id="salon">
	
	<h1>The Salon</h1>

	<div id="salon-big-image"></div>

	<div id="salon-copy">
		<p>After fourteen years in our Bridge street premises, we finally made the move to our brand new salon on Rylands street at the end of last year.</p>
		<p>An ultra modern, bright and spacious salon with fourteen styling stations situated over two floors. Both the team and our clients now feel completely at home in the premises plus we've got loads of room to take on new stylists!</p>
		<p><strong>Feel free to come and see us. Have a chat with one of our highly skilled stylists to discuss a new look whilst you check out our amazing salon.</strong></p>
	</div>
	<div id="outdoor-image"></div>
	<div id="salon-pics">
		<div id="salon-image1"></div>
		<div id="salon-image2"></div>
		<div id="salon-image3"></div>
		<div id="salon-image4"></div>
		<div id="fb-like">
			<div class="fb-like" data-href="http://www.jakatasalon.co.uk/salon" data-width="250" data-layout="button" data-action="like" data-show-faces="true" data-share="true">
			</div>
		</div>
	</div>
</section>

@stop