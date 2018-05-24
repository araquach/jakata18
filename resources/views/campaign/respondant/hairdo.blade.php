@extends('layouts.hairdo') 

@section('head')

@include('layouts.partials.pros_head', [
	'title' => 'Big Hair do'
	])
	
@stop

@section('content')

<script type="text/javascript" src="{{ URL::asset('scripts/jquery.js') }}"></script>

<section id="hairdo">

	<section id="hairdo-entry">
	
		<h2>Text Here</h2>
		
		<section id="hairdo-other-image"></section>
	
		
		<p>Some text here</p>
		
		<a href="{{ URL::to('respondant/create') }}#prospect-form" class="link">Click here if you're interested</a>
	
	</section>  <!--prospect-entry-->

</section> <!--prospect-->

@stop