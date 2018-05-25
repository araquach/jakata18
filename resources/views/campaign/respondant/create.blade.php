@extends('layouts.hairdo')

@section('head')

@include('layouts.partials.hairdo_head', [
	'title' => 'Jakata Salon'
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
	
@endif

</section>  <!--prospect-entry-->

</section> <!--prospect-->

@stop