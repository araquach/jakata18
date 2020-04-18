@extends('layouts.main') 

@section('head')

@include('layouts.partials.head', [
	'description' => 'Following the government guidelines we are still currently closed and will remain so until further notice. Our booking systems are currently closed too as we can\’t guarantee any appointments at the minute',
	'keywords' => 'hairdressing team, hairdressers, stylists, Jakata team, Jakata stylists, Jakata hairdressers',
	'ogtitle' => > 'COVID19 Update',
	'ogdescription' => 'Following the government guidelines we are still currently closed and will remain so until further notice. Our booking systems are currently closed too as we can\’t guarantee any appointments at the minute',
    'ogimage' => url('/') . '/images/corona/corona2_meta.jpg',
	'ogimagewidth' => '1200',
	'ogimageheight' => '628',
	'title' => 'Jakata Salon - Covid-19 - Hairdressers in Warrington'
	])
	
@stop

@section('content')

<div id="corona">
    <div id="corona-copy">
        <h1>COVID-19 Closure Update</h1>
        <p>Following the government guidelines we are still currently closed and will remain so until further notice.</p>
        <p>Please check back to our page for updates on our potential opening date. Our booking systems are currently closed too as we can’t guarantee any appointments at the minute.</p>
        <p>If you have appointments already booked in they remain unaffected, if we open before your appointment you will keep this appointment. We will be contacting everyone who has missed an appointment due to the salon being closed to arrange this for your earliest convenience - again once we have a better idea of when we'll be reopening.</p>
        <p>We hope you are all staying safe and well. For all the key workers out there, keep up the amazing work you’re doing 🙌 We can’t wait to be back at it making you all look and feel fresh again 😊</p>
        <p><strong>Take care - The Jakata Team x</strong></p>
    </div>
</div>

@stop