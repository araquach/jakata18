@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
		'description' => 'Our phone lines and online bookings are closed throughout the lockdown. Our usual systems will be switched back on when we re-open. If you want to book an appointment for December, please register here and your stylist will contact you shortly before we re-open to get you booked in.',
		'ogtitle' => 'Register for your December appointment',
		'ogdescription' => 'Our phone lines and online bookings are closed throughout the lockdown. Our usual systems will be switched back on when we re-open. If you want to book an appointment for December, please register here and your stylist will contact you shortly before we re-open to get you booked in.',
		'ogimage' => url('/') . '/images/corona/corona_meta_6.jpg',
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
			<h1>Register for your December appointment</h1>	

			<p><strong>Our phone lines and online bookings are closed throughout the lockdown. Our usual systems will be switched back on when we re-open.</strong></p>
			<p>If you want to book an appointment for December, please register here and your stylist will contact you shortly before we re-open to get you booked in.</p>
			<p><strong>See you in December!</strong></p>
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

				<div class="row">
					{!! Form::label('time_slot', 'Preferred time slot') !!}
					{!! Form::select('time_slot', array(
						'Any Time' => 'Any Time',
						'Only Weekends' => 'Only Weekends',
						'Only Evenings' => 'Only Evenings',
						'Weekends or Evenings'=> 'Weekends or Evenings',
						), old('time_slot'), ['placeholder' => 'Select']) !!}
					{!! $errors->first('time_slot', '<div class="errorMessage">:message</div>') !!}
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
