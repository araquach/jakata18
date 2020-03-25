@extends('layouts.main') 

@section('head')

@include('layouts.partials.head', [
	'description' => 'We\'ve made the decision to temporarily close Jakata as of Tuesday 24th March for a minimum of 2 weeks to stay inline with the Governments Social distancing recommendations. 
        The team are sad to have to stop doing what we love but we know we\'ll be back up and running in the not too distant future.',
	'keywords' => 'hairdressing team, hairdressers, stylists, Jakata team, Jakata stylists, Jakata hairdressers',
	'ogtitle' => 'Temporary Closure for Jakata',
	'ogdescription' => 'We\'ve made the decision to temporarily close Jakata as of Tuesday 24th March for a minimum of 2 weeks to stay inline with the Governments Social distancing recommendations. 
        The team are sad to have to stop doing what we love but we know we\'ll be back up and running in the not too distant future.',
    'ogimage' => url('/') . '/images/corona/corona2_meta.jpg',
	'ogimagewidth' => '1200',
	'ogimageheight' => '628',
	'title' => 'Jakata Salon - Corona - Hairdressers in Warrington'
	])
	
@stop

@section('content')

<div id="corona">
    <div id="corona-copy">
        <h1>Temporary Closure for Jakata</h1>
        <p>We've made the decision to temporarily close Jakata as of Tuesday 24th March for a minimum of 2 weeks to stay inline with the Governments Social distancing recommendations. 
        The team are sad to have to stop doing what we love but we know we'll be back up and running in the not too distant future.</p>
        <p>We'll be following Government advice with regards to reopening when the time is right.</p>
        <p>Thanks for all the support over this crazy time - we're in a good position to get through this and we can't wait to sort out your grown out styles and get rid of those 3 inch roots for you!</p>
        <p><strong>Take care - The Jakata Team x</strong></p>
        <p>P.S Please don't be tempted to reach for those box dyes or attempt home hair colouring! Having to correct hundreds of colours when we return will send us over the edge 😂</p>
    </div>
</div>

@stop