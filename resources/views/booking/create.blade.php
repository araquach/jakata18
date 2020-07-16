@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
		'description' => 'We\'re back up and running and we\'re close to getting on top of our backlog of clients.',
		'ogtitle' => 'Register for your appointment',
		'ogdescription' => 'We\'re back up and running and we\'re close to getting on top of our backlog of clients.',
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

			<p><strong>We're back up and running and we're close to getting on top of our backlog of clients.</strong></p>
			<p>Our normal booking systems are still closed until next week. If you are wanting an appointment please register here and we'll be in touch within a day or two</p>
			<p>Thanks for your patience</p>
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
