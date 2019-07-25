@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'description' => 'Are you looking to join a dynamic hairdressing team?',
	'keywords' => 'hair recruitment warrington, hairdressing jobs warrington, stylist jobs warrington',
	'ogtitle' => 'We\'re looking for talented, dynamic hairdressers to join our team',
	'ogdescription' => 'In the 15 years we\'ve been around we\'ve built up a strong reputation, winning numerous awards and creating some incredible, cutting edge styles.
	We also pride ourselves in giving the best customer experience. We\'ve built up our team gradually over the years, with ongoing training and development. Regular external and internal training and access to the best products on the market.',
	'ogimage' => url('/') . '/images/potential/potential_fb.jpg',
	'title' => 'Jakata Salon - Join Our Hairdressing Team - Hairdressers in Warrington'
	])

@stop

@section('content')

<div id="potential">

	<div id="potential-copy">

		@if(Session::has('message'))
	        <div class="alert alert-info">
	    		{{{ Session::get('message') }}}
	        </div>
    	@endif

		<h1>We're looking for talented, dynamic hairdressers and apprentices to join our team!</h1>
		<p><strong>Jakata is a fashion forward hair salon based in Warrington town centre.</strong></p>
		<p>In the 15 years we've been around we've built up a strong reputation, winning numerous awards and creating some incredible, cutting edge styles.
		<em>We also pride ourselves in giving the best customer experience. We have over 200 5 star Google reviews!<a href="{{ URL::to('reviews') }}"> (just check out our reviews here if you don't believe us!)</a></em></p>
		<p>We've built up our team gradually over the years, with ongoing training and development. Regular external and internal training and access to the best products on the market.</p>
		<p>We've entered numerous hairdressing competitions and we're massively into producing ultra edgy hairstyles and creative colours. <a href="https://www.instagram.com/jakatasalon1/"></a>Check out our Instagram to see our latest work</p>

		<div class="interior-copy-img-1"></div>
		<div class="interior-copy-img-2"></div>
		<div class="interior-copy-img-3"></div>

		<div id="testimonials">
			<h2>See what some of our current team members have to say&hellip;</h2>
			<div class="testimonial">
				<div class="testimonial-img-1"></div>
				<div class="testimonial-copy">
					<h3>Georgia Lutton (Stylist)</h3>
					<p>&quot;I joined the Jakata team nearly 2 years ago and haven't looked back! I love as a team how we bounce ideas off each other, giving the inspiration to produce the latest on trend colours and styles. The ongoing training and creative workshops keep us up to date with the latest styles.&quot;</p>
				</div>
				</div>
			<div class="testimonial">
				<div class="testimonial-img-2"></div>
				<div class="testimonial-copy">
					<h3>Lauren Thompson (Graduate Stylist)</h3>
					<p>&quot;I started at Jakata earlier this year and was made to feel instantly welcome. I feel like I'm progressing fast and close to being promoted to the next level. I love the warm, welcoming vibe of the salon which makes our clients feel really relaxed&quot;</p>
				</div>
			</div>
			<div class="testimonial">
				<div class="testimonial-img-3"></div>
				<div class="testimonial-copy">
					<h3>Lucy Watson (Junior Stylist)</h3>
					<p>&quot;I transferred my apprenticeship to Jakata and absolutely love it! I'm close to qualifying and already building up my client base. I love working in such a vibrant salon with great one on one training from such talented stylists&quot;</p>
				</div>
			</div>
		</div>
		<div class="excitement">
			<p>We're looking for new stylists and apprentices to join our team - if you're a stylist at any level or looking for an apprentiship then Jakata could be the salon for you!</p>
			<p><strong>If you're interested in joining us - leave your details here and we'll be in touch soon!</strong></p>
		</div>
	</div>

	<div id="form" class="potential form">

	<ul>
	    @foreach($errors->all() as $error)
	        <li>{{{ $error }}}</li>
	    @endforeach
	</ul>

	{!! Form::open(array('action' => 'PotentialEmployeeController@store', 'class' => 'form')) !!}

		<h2>Your details</h2>

		{{ Form::hidden('salon', '1') }}

		<div class="row">
		{!! Form::label('full_name', 'Full Name') !!}
		{!! Form::text('full_name', old('full_name')) !!}
		{!! $errors->first('full_name', '<div class="errorMessage">:message</div>') !!}
		</div>

		<div class="row">
		{!! Form::label('mobile', 'Mobile Number') !!}
		{!! Form::text('mobile', old('mobile')) !!}
		{!! $errors->first('mobile', '<div class="errorMessage">:message</div>') !!}
		</div>

		<div class="row">
		{!! Form::label('position', 'Current Position') !!}
		{!! Form::select('position', array(
			'senior stylist' => 'Senior Stylist',
			'stylist' => 'Stylist',
			'apprentice' => 'Apprentice/Junior',
			'chairrenter' => 'Self employed/Chair renter',
			'new to hairdressing'=> 'New To Hairdressing',
			'other'=> 'Other',
			), old('position'), ['placeholder' => '-- Please Select --']) !!}
		{!! $errors->first('position', '<div class="errorMessage">:message</div>') !!}
		</div>

		{{ Form::hidden('status', 'Not Contacted') }}

		<div class="row buttons">
		{!! Form::submit('Submit') !!}
		</div>

	{!! Form::close() !!}

	</div><!-- form -->
</div>

@stop
