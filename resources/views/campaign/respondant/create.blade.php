@extends('layouts.hairdo')

@section('head')

@include('layouts.partials.pros_head', [
	'title' => 'Jakata Salon'
	])
	
@stop

@section('content')

<script type="text/javascript" src="{{ URL::asset('scripts/jquery.js') }}"></script>

<section id="hairdo">

<section id="hairdo-entry">
	
<h2>Some stuff here</h2>
	
@if(Session::has('message'))
	<div id="success" class="ProspectSuccess">
	<p>{{{ Session::get('message') }}}</p>
	{!! link_to('/', 'Visit our website to keep up to date with Jakata!') !!}
	</div>
@else

	@include('campaign.respondant._form')
	
@endif

</section>  <!--prospect-entry-->

</section> <!--prospect-->

@stop