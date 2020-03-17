@extends('layouts.main') 

@section('head')

@include('layouts.partials.head', [
	'description' => 'Do you need some headspace from Covid overload?',
	'keywords' => 'hairdressing team, hairdressers, stylists, Jakata team, Jakata stylists, Jakata hairdressers',
	'ogtitle' => 'Do you need some headspace from Covid overload?',
	'ogdescription' => 'We thought we\’d send you a quick message to let you know we are open for business and willing to help!',
	'title' => 'Jakata Salon - Meet the team - Hairdressers in Warrington'
	])
	
@stop

@section('content')

<div id="corona">
    <div id="corona-copy">
    <h1>OIpen as usual for your hair needs</h1>
    <p>We thought we’d send you a quick message to let you know we're open for business as usual! 
    We have appointments available with your preferred stylist.</p>
    <p>We are monitoring the situation closely day by day. We’re operating the salon as normal - other than implementing some extra measures...</p>
    <ul>
        <li>We sterilise our hairbrushes and scissors after each client</li>
        <li>We disinfect our stations after every treatment using an antibacterial solution</li>
        <li>Our staff are washing their hands after every single client, using handwashing technique as set out by the WHO</li>
        <li>We now disinfect our reception desk after every transaction and all door handles at regular intervals throughout the day</li>
    </ul>
    <p><strong>We request Apple/GooglePay/contactless transactions where possible and limit cash p[ayments</strong></p>
    <p>We're checking in with staff daily to ensure they are health and well, and have not been in contact with anyone who has travelled from the worst affected Covid-19 areas.</p>
    <p>If you have a cold, a sniffle, a cough, fever or are feeling unwell, firstly, we are sorry to hear it! And secondly, 
    we would ask that you kindly reschedule your appointment here so that we can see you when you’re back feeling fighting fit.</p>
    <p>If and when the time comes that we need to take extra measures, 
    we will do so in the most responsible way as advised by the right authorities. We will ensure we keep you updated.</p>
    <p>In the meantime, we’re here for you and your hair needs and we look forward to seeing you for your next appointment 😀</p>

    <p>Call 01925 242960 for more info or to reschedule</p>
    {!! link_to('booking', "Book & Reschedule Here", array('class'=>'toForm')) !!}
    </div>
</div>

@stop