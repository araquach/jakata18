@extends('layouts.main') 

@section('head')

@include('layouts.partials.head', [
	'description' => 'The Jakata Hairdressing Team',
	'keywords' => 'hairdressing team, hairdressers, stylists, Jakata team, Jakata stylists, Jakata hairdressers',
	'ogtitle' => 'Meet the Team',
	'ogdescription' => 'The Jakata team comprises of nine skilled stylists, all from different hairdressing backgrounds, all displaying a diverse range of skills.Over the years Jakata has trained and developed a number of people to exceptional standards, whilst taking on already established stylists. This mix of talent creates a dynamic team with stylists well suited to anyone with a desire for a fashion forward look.',
	'title' => 'Jakata Salon - Meet the team - Hairdressers in Warrington'
	])
	
@stop

@section('content')

<div id="team_shot"></div>
<section id="team">
	<section id="team_overview">
		<h1>The Team</h1>
		<p>The Jakata team comprises of nine skilled stylists, all from different hairdressing backgrounds, all displaying a diverse range of skills.</p>
		<p>Over the years Jakata has trained and developed a number of people to exceptional standards, whilst taking on already established stylists. This mix of talent creates a dynamic team with stylists well suited to anyone with a desire for a fashion forward
			look.</p>
		<p><em>It's difficult to find a stylist well suited to your needs, take the time to read each staff members profile to find the right fit for you. Prices for each stylist vary dependant on a number of factors (experience, specialised skills, high demand etc.)</em></p>
		<p><strong>Please call to arrange for a free consultation with any of our team members.</strong></p>
	</section>
	<!--team_overview-->

	<div id="team_members">
		@foreach($team_members as $team_member)
			<a href="{{ URL::to($team_member->class) }}" >
				<section class="team_member" id="{{ $team_member->class }}">
					<h2>{{ $team_member->name }} - {{ $team_member->level }}</h2>
				</section>
			</a>

		@endforeach

	</div>
	<!--team_members-->
</section>
<!--team-->

@stop