@extends('layouts.main') 

@section('head')

@include('layouts.partials.head', [
	'description' => 'Meet the Team - ' . $team_member->name,
	'keywords' => $team_member->name . ', hairdressing team, hairdressers, stylists, Jakata team, Jakata stylists, Jakata hairdressers',
	'ogtitle' => $team_member->name,
	'ogdescription' => $team_member->para1 . $team_member->para2,
	'ogimage' => url('/') . '/images/team/' . $team_member->class . '.jpg',
	'title' => 'Jakata Salon - ' . $team_member->name . ' - Hairdressers in Warrington',
	])
	
@stop

@section('content')

@include('layouts.partials.fb_like')

<script type="text/javascript" src="{{ URL::asset('scripts/jquery.js') }}"></script>

<div id="team">
	
	<div class="proportional">
		<div id="team_image" class="{{ $team_member->class }}"></div>
	</div>
	
	<div id="feedback-container">
		<div id="feedback_feed_ind">
		  	<ul>
		  		@foreach($reviews as $review)
		  	    	<li>&quot;{{ limit_words($review->review) }}&quot;<br><span class="client">{{ remove_client($review->client) }} - hair by {{ remove_staff($review->staff) }} </span></li>
		  		@endforeach
		  	</ul>
		  	<a href="{{ URL::to('reviews/' . $team_member->class ) }}">More of {{ $team_member->review_link }}'s reviews here</a>
		</div> <!--#feedback_feed-->
	</div> <!--#feedback_container-->
	
	<section class="team_member_copy">
		<h2>{{ $team_member->name }}</h2>
		
		<p><strong>{{ $team_member->para1 }}</strong></p>
		<p>{{ $team_member->para2 }}</p>
		<p>{{ $team_member->para3 }}</p>
		<p><strong>Favourite Style: </strong>{{ $team_member->fav_style }}</p>
		<p><strong>Favourite Product: </strong>{{ $team_member->fav_prod }}</p>
		<p class="price">Average Cut &amp; Colour with {{ $team_member->review_link }}: &pound;{{ $team_member->price }}</p>
		
		<a href="{{ URL::to('team') }}#{{ $team_member->class }}" >Back to the full team</a>
		
		<div id="fb-like">
			<div class="fb-like" data-href="http://www.jakatasalon.co.uk/{{ $team_member->class }}" data-width="250" data-layout="button" data-action="like" data-show-faces="true" data-share="true"></div>
		</div>
		
	</section><!--team_member_copy -->
	
</div>		

@stop