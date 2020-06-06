@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
		'description' => 'We\'re getting closer and closer to our reopening date and we can\'t wait!! We are not taking booking until we have a confirmed date as it\'s still a bit up in the air at the moment.',
		'ogtitle' => 'Register for your appointment',
		'ogdescription' => 'We\'re getting closer and closer to our reopening date and we can\'t wait!! We are not taking booking until we have a confirmed date as it\'s still a bit up in the air at the moment.',
		'ogimage' => url('/') . '/images/corona/register.jpg',
		'title' => 'Jakata Salon - Register Your Details - Hairdressers in Warrington'
	])

@stop

@section('content')

<section id="corona">
	<div id="corona-copy">
		@if(Session::has('message'))
			<div class="success">
			{{{ Session::get('message') }}}
			</div>
		@endif

		<div id="form" class="form">
			<h1>Register for your appointment</h1>	

			<p><strong>We're getting closer and closer to our reopening date and we can't wait!!</strong></p>
			<p>We are not taking booking until we have a confirmed date as it's still a bit up in the air at the moment. <strong>Saturday July 4th</strong> is looking the most likely but there is the potential this could be brought forward or pushed back. We're still in the process of creating new schedules for the team to minimise the number of people in the salon as your safety is our priority.</p>
			<p>Each team member will be contacting their own clients to arrange bookings about a week or two before our opening date. Anybody who was already booked in will be contacted first. We will be working really hard to make sure everyone gets an appointment that suits them in the quickest possible time.</p>
			<p><strong>If you are wanting to book an appointment, please fill in the form below to ensure we've got your correct information</strong></p>
			<ul>
				@foreach($errors->all() as $error)
					<li class="errorMessage">{{{ $error }}}</li>
				@endforeach
			</ul>

			{!! Form::open(array('action' => 'BookingController@store', 'class' => 'form')) !!}

				{{ Form::hidden('salon', '1') }}
				
				<div class="row">
				{!! Form::label('first_name', 'First Name') !!}
				{!! Form::text('first_name', old('first_name')) !!}
				{!! $errors->first('first_name', '<div class="errorMessage">:message</div>') !!}
				</div>
				
				<div class="row">
				{!! Form::label('last_name', 'Last Name') !!}
				{!! Form::text('last_name', old('last_name')) !!}
				{!! $errors->first('last_name', '<div class="errorMessage">:message</div>') !!}
				</div>
				
				<div class="row">
				{!! Form::label('mobile', 'Mobile Number') !!}
				{!! Form::text('mobile', old('mobile')) !!}
				{!! $errors->first('mobile', '<div class="errorMessage">:message</div>') !!}
				</div>

				<div class="row">
					{!! Form::label('stylist', 'Your Stylist') !!}
					{!! Form::select('stylist', array(
						'Natalie' => 'Natalie',
						'Matt' => 'Matt',
						'Laura' => 'Laura',
						'Georgia' => 'Georgia',
						'Vikki'=> 'Vikki',
						'Layla'=> 'Layla',
						'Abbi'=> 'Abbi',
						'Lauren'=> 'Lauren',
						'Not Sure'=> 'Not Sure'
						), old('stylist'), ['placeholder' => 'Select']) !!}
					{!! $errors->first('stylist', '<div class="errorMessage">:message</div>') !!}
					</div>
				
				<div class="row buttons">
				{!! Form::submit('Submit') !!}
				</div>
				<br><br>
			
			{!! Form::close() !!}

		</div><!-- form -->
	</div><!-- formWrap -->
</section>

@stop
