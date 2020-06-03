@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
		'description' => '',
		'ogtitle' => '',
		'ogdescription' => '',
		'ogimage' => url('/') . '',
		'title' => 'Jakata Salon - Register Your Details - Hairdressers in Warrington'
	])

@stop

@section('content')

<section id="corona">
	<div id="formWrap">
		@if(Session::has('message'))
			<div class="success">
			{{{ Session::get('message') }}}
			</div>
		@endif

		<div id="form" class="form">
			<h1>Register for your appointment</h1>	

			<p>Please fill in as much information as possible in the form below, we will get back to you as soon as we can</p>

			<ul>
				@foreach($errors->all() as $error)
					<li>{{{ $error }}}</li>
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
						'Unknown'=> 'Unknown'
						), old('stylist'), ['placeholder' => 'Select']) !!}
					{!! $errors->first('stylist', '<div class="errorMessage">:message</div>') !!}
					</div>
				
				<div class="row buttons">
				{!! Form::submit('Submit') !!}
				</div>
			
			{!! Form::close() !!}

		</div><!-- form -->
	</div><!-- formWrap -->
</section>

@stop
