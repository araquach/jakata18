{!! Form::open(array(
	'action' => 'CampaignRespondantController@store', 'id' => 'prospect-form'
)) !!}

<div class="form">
	
    @if (count($errors) > 0)
    
    <div id="prospect-form_es_" class="errorSummary">
    		<p>Please fix the following input errors:</p>
    		<ul>
    	   		 @foreach($errors->all() as $error)
    	        <li>{{{ $error }}}</li>
    	    	@endforeach
    		</ul>
    </div>
       
    @endif
    
    {!! Form::hidden('camp_id', 1) !!}
    
    <div class="row">
    	<div class="row">
    	{!! Form::label('first_name', 'First Name') !!}
    	{!! Form::text('first_name', old('first_name')) !!}
    	{!! $errors->first('first_name', '<div class="errorMessage">:message</div>') !!}
    	</div>
    </div>
    
    <div class="row">
    	<div class="row">
    	{!! Form::label('last_name', 'Last Name') !!}
    	{!! Form::text('last_name', old('last_name')) !!}
    	{!! $errors->first('last_name', '<div class="errorMessage">:message</div>') !!}
    	</div>
    </div>
    
    <div class="row">
    	<div class="row">
    	{!! Form::label('email', 'Email Address') !!}
    	{!! Form::text('email', old('email')) !!}
    	{!! $errors->first('email', '<div class="errorMessage">:message</div>') !!}
    	</div>
    </div>
    
    <div class="row">
    	<div class="row">
    	{!! Form::label('mobile', 'Mobile Number') !!}
    	{!! Form::text('mobile', old('mobile')) !!}
    	{!! $errors->first('mobile', '<div class="errorMessage">:message</div>') !!}
    	</div>
    </div>
    
    <div class="row regular">
        {!! Form::label('regular', 'Click here if you have been to Jakata before') !!}
        {!! Form::checkbox('regular') !!}
        {!! $errors->first('regular', '<div class="errorMessage">:message</div>') !!}
    </div>
    
    <div class="row buttons">
    	{!! Form::submit('Send') !!}
    </div>

</div>

{!! Form::close() !!}