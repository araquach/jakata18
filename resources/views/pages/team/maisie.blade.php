@extends('layouts.main') 

@section('head')

@include('layouts.partials.head', [
	'description' => 'Meet the Team - Maisie Thompson',
	'keywords' => 'Maisie Thompson, hairdressing team, hairdressers, stylists, Jakata team, Jakata stylists, Jakata hairdressers',
	'ogtitle' => 'Maisie Thompson',
	'ogdescription' => 'Maisie is a well established Jakata team member. She\'s a senior stylist and has over 9 years experience. 
	She loves big, messy, tousled styles with loads of bounce and attitude. Precision, creativity and a strong understanding of an individuals hair are Maisie\'s focus.',
	'ogimage' => url('/') . '/images/team/maisie.jpg',
	'title' => 'Jakata Salon - Maisie Thompson - Hairdressers in Warrington'
	])
	
@stop

@section('content')

@include('layouts.partials.fb_like')

<script type="text/javascript" src="{{ URL::asset('scripts/jquery.js') }}"></script>

<div id="team">
	
		<div class="proportional">
		<div id="team_image" class="maisie"></div>
	</div>
	
	<div id="feedback-container">
		<div id="feedback_feed_ind">
		  	<ul>
		  		@foreach($reviews as $review)
		  	    	<li>&quot;{{ limit_words($review->review) }}&quot;<br><span class="client">{{ remove_client($review->client) }} - hair by {{ remove_staff($review->staff) }} </span></li>
		  		@endforeach
		  	</ul>
		  	<a href="{{ URL::to('reviews/maisie') }}">More of Maisie's reviews here</a>
		</div> <!--#feedback_feed-->
	</div> <!--#feedback_container-->
	<section class="team_member_copy">
		<h2>Maisie Thompson<br><span class="small">(Maisie is currently on maternity leave)</span></h2>
		
		<p><strong>Maisie is a well established Jakata team member. She's a senior stylist and has over 9 years experience.</strong></p>
		<p>She loves big, messy, tousled styles with loads of bounce and attitude.</p> 
		<p>Precision, creativity and a strong understanding of an individuals hair are Maisie's focus.</p>
		<p>She has advanced Colour diplomas with Schwarzkopf &amp; La Biostetique. She also loves doing the Kebelo smoothing service</p>
		<p><strong>Favourite Style: </strong>Big, tousled hair</p>
		<p><strong>Favourite Product: </strong>Tigi 'Totally Baked'</p> 
		<p class="price">Average Cut &amp; Colour <br>with Maisie: &pound;100</p>
		
		<a href="{{ URL::to('team') }}#maisie" >Back to the full team</a>
		
		<div id="fb-like">
			<div class="fb-like" data-href="http://www.jakatasalon.co.uk/maisie" data-width="250" data-layout="button" data-action="like" data-show-faces="true" data-share="true"></div>
		</div>
		
	</section> <!--team_member_copy -->
</div>

@stop