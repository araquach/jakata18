@extends('layouts.main') 

@section('head')

@include('layouts.partials.head', [
	'description' => 'Following the government guidelines we are still currently closed and will remain so until further notice. Our booking systems are currently closed too as we can\’t guarantee any appointments at the minute',
	'keywords' => 'hairdressing team, hairdressers, stylists, Jakata team, Jakata stylists, Jakata hairdressers',
	'ogtitle' => 'COVID-19 Update',
	'ogdescription' => 'Following the government guidelines we are still currently closed and will remain so until further notice. Our booking systems are currently closed too as we can\’t guarantee any appointments at the minute',
    'ogimage' => url('/') . '/images/corona/corona3_meta.jpg',
	'ogimagewidth' => '1200',
	'ogimageheight' => '628',
	'title' => 'Jakata Salon - Covid-19 - Hairdressers in Warrington'
	])
	
@stop

@section('content')

<div id="corona">
    <div id="corona-copy">
        <h1>COVID-19 Update</h1>
        <h2>Updated 27th May 2020</h2>
        <p><strong>Can you believe it has been 9 whole weeks since we closed our doors?!</strong></p>
        <p>We hope everybody had a good bank holiday weekend and that you are all doing well and are as excited to get your hair done as we are to do it!</p>
        <p><strong>Here's our latest update...</strong></p>
        <p>As it stands we have a potential reopening date of the 4th July. This could change as it isn’t set in stone. We are not currently taking any bookings until we have our confirmed dates and our staff rota’s in place. We are unsure yet what our guidelines will be on working within the salon so we may have to re-jig things.</p>
        <p>In the mean time we will be shortly posting a page where you can register to be contacted for an appointment for when we do open the diary so we can get everyone booked in. We can see who has missed appointments and you will be contacted accordingly, but by all means please add your name to the list to confirm you want to get in as we understand some people may wish to wait still and see what the situation is like closer to the time.</p>
        <p><em>Please bare with us and know we will do our best to get everyone in in the shortest time possible, but we are expecting high demand upon reopening. With potential restricted hours per stylist we will do our upmost to accommodate you.</em></p>
        <p>Thanks so much to all of our clients for being so patient and understanding that this situation is out of all of our hands. We cannot wait to get back to doing what we love best! Please revisit this page for updates and to find out when our registration form is live.</p>
        <p><strong>We hope to see you all very soon, we miss you! xx</strong></p>
    </div>
</div>

@stop