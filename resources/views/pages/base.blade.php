@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'description' => '',
	'keywords' => 'Hair Academy, trainee hairdressers, apprentices, hair school',
	'ogtitle' => 'Base Hairdressing',
	'ogdescription' => '',
	'ogimage' => url('/') . '/images/salon/base_meta.jpg',
	'title' => 'Jakata Salon - Base Hairdressing - Hairdressers in Warrington'
	])

@stop

@section('content')

@include('layouts.partials.fb_like')

<section id="base">

	<h1></h1>

	<div id="base-copy">

	</div>
	
	<div id="fb-like">
		<div class="fb-like" data-href="http://www.jakatasalon.co.uk/salon" data-width="250" data-layout="button" data-action="like" data-show-faces="true" data-share="true">
		</div>
	</div>
</section>

@stop
