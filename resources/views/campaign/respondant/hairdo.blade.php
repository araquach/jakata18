@extends('layouts.hairdo') 

@section('head')

@include('layouts.partials.hairdo_head', [
	'description' => 'Want to be a part of this years Big Hair Do? ',
	'ogtitle' => 'Want to be a part of this years Big Hair Do?',
	'ogdescription' => ' Jakata has partnered with Schwarzkopf and Creative Head to be one of 100 salons taking part in the UK\'s biggest hair party - and we\'d love you to be a part of it!</p>',
	'ogimage' => url('/') . '/images/hairdo/hairdo_meta.jpg',
	'title' => 'Big Hair do'
	])
	])
	
@stop

@section('content')

<script type="text/javascript" src="{{ URL::asset('scripts/jquery.js') }}"></script>

<section id="hairdo">

	<section id="hairdo-entry">
	
		<h2 class="pink">We want to make sure no one has a bad hair day again!</h2>

		<p><strong>Here's what you can expect on the night&hellip;</strong></p>
		<ul>
			<li>New hair tricks</li>
			<li>Quick Style fixes</li>
			<li>How-to tutorials</li>
			<li>Expert advice</li>
			<li>Goody bags with free products</li>
		</ul>
		
		<section id="hairdo-other-image"></section>
	
		<p><strong>Want to be a part of this fantasic event? </strong></p>
		<p>Just click the link below, fill in some details and we'll be in touch if there is still availability</p>
		
		<a href="{{ URL::to('respondant/create') }}#prospect-form" class="link">Click here to register</a>
	
	</section>  <!--prospect-entry-->

</section> <!--prospect-->

@stop