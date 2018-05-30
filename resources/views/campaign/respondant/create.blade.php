@extends('layouts.hairdo')

@section('head')

@include('layouts.partials.hairdo_head', [
	'description' => 'Want to be a part of this years Big Hair Do? ',
	'ogtitle' => 'The Big Hair Do',
	'ogdescription' => 'Want to be a part of this years Big Hair Do? Jakata has partnered with Schwarzkopf and Creative Head to be one of 100 salons taking part in the UK\'s biggest hair party - and we\'d love you to be a part of it!</p>',
	'ogimage' => url('/') . '/images/hairdo/hairdo_meta.jpg',
	'title' => 'Big Hair do - Application'
	])
	
@stop

@section('content')

<script type="text/javascript" src="{{ URL::asset('scripts/jquery.js') }}"></script>

<section id="hairdo">

<section id="hairdo-entry">
	
<h2 class="pink">Want to be a part of this years Big Hair Do?</h2>
<p>Just fill in your details below for your chance of getting a <span class="pink">VIP ticket</span>.</p>
<p><strong>We have only a limited number available so don't leave it too late!</strong></p>
	
@if(Session::has('message'))
	<div id="success">
	<p>{{{ Session::get('message') }}}</p>
	{!! link_to('/', 'Visit our website to keep up to date with Jakata!') !!}
	</div>
@else

	@include('campaign.respondant._form')

	<p><strong>Your information is collected and used purely for the purpose of this specific promotion</strong></p>
	
@endif

</section>  <!--prospect-entry-->

</section> <!--prospect-->

@stop