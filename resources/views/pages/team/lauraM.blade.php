@extends('layouts.main') 

@section('head')

@include('layouts.partials.head', [
	'description' => 'Meet the Team - Laura Minett',
	'keywords' => 'Laura Minett, hairdressing team, hairdressers, stylists, Jakata team, Jakata stylists, Jakata hairdressers',
	'ogtitle' => 'Laura Minett',
	'ogdescription' => 'Laura has recently been promoted to stylist position. She has quickly settled into the team and exhibits loads of natural flair for hairdressing. 
	Her warm, friendly personality makes every visit to the salon a relaxing experience. She particularly enjoys creative colouring & styling whilst adding her own personal touch.',
	'ogimage' => url('/') . '/images/team/laura_m.jpg',
	'title' => 'Jakata Salon - Laura Minett - Hairdressers in Warrington'
	])
	
@stop

@section('content')

@include('layouts.partials.fb_like')

<script type="text/javascript" src="{{ URL::asset('scripts/jquery.js') }}"></script>

<div id="team">
	
	<div class="proportional">
		<div id="team_image" class="laura_m"></div>
	</div>
	
	<div id="feedback-container">
		<div id="feedback_feed_ind">
		  	<ul>
		  		@foreach($reviews as $review)
		  	    	<li>&quot;{{ limit_words($review->review) }}&quot;<br><span class="client">{{ remove_client($review->client) }} - hair by {{ remove_staff($review->staff) }} </span></li>
		  		@endforeach
		  	</ul>
		  	<a href="{{ URL::to('reviews/minett') }}">More of Laura's reviews here</a>
		</div> <!--#feedback_feed-->
	</div> <!--#feedback_container-->
	
	<section class="team_member_copy">
		<h2>Laura Minett</h2>

		<p><strong>Laura has recently been promoted to stylist position. She has quickly settled into the team and exhibits loads of natural flair for hairdressing.</strong></p>
		<p>Her warm, friendly personality makes every visit to the salon a relaxing experience.</p>
		<p>She particularly enjoys creative colouring &amp; styling whilst adding her own personal touch.</p>
		<p><strong>Favourite Style: </strong>Soft &amp; Natural styles</p>
		<p><strong>Favourite Product: </strong>Tigi Totally Baked &amp; Osis Dust It</p>
		<p class="price">Average Cut &amp; Colour <br>with Laura M: &pound;90</p>
		
		<a href="{{ URL::to('team') }}#laura_m" >Back to the full team</a>
		
		<div id="fb-like">
			<div class="fb-like" data-href="http://www.jakatasalon.co.uk/lauraM" data-width="250" data-layout="button" data-action="like" data-show-faces="true" data-share="true"></div>
		</div>
		
	</section> <!--team_member_copy -->
</div>

@stop