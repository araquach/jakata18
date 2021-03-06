@extends('layouts.main') 

@section('head')

@include('layouts.partials.head', [
	'description' => 'As you can all imagine we have had to make some changes to our procedures during your next visit to the salon. 
        We are trying to make it as safe as possible for our clients and staff and come up with \‘covid friendly\’ measures, following the government guidelines',
	'keywords' => 'hairdressing team, hairdressers, stylists, Jakata team, Jakata stylists, Jakata hairdressers',
	'ogtitle' => 'COVID-19 - Guidelines for your Appointment',
	'ogdescription' => 'As you can all imagine we have had to make some changes to our procedures during your next visit to the salon. 
        We are trying to make it as safe as possible for our clients and staff and come up with \‘covid friendly\’ measures, following the government guidelines',
    'ogimage' => url('/') . '/images/corona/corona_meta_5.jpg',
	'ogimagewidth' => '1200',
	'ogimageheight' => '628',
	'title' => 'Jakata Salon - COVID-19 - Hairdressers in Warrington'
	])
	
@stop

@section('content')

<div id="corona">
    <div id="corona-copy">
        <h1>COVID-19</h1>
        <h2>Guidelines for your appointment</h2>
        <h5>Updated 5th August 2020</h2>
        <p>We have had to make some changes to our procedures during your next visit to the salon. 
        We are trying to make it as safe as possible for our clients and staff so we have implemented some ‘covid friendly’ measures, following the government guidelines</p>
        <p><strong>Update: As of Saturday 8th August a facemask is required to be worn throughout your visit unless there is a legitimate reason for you not to wear one - in line with the new legislation</strong></p>
        <p><strong><em>Please ensure you read the following guidelines before you come in for your appointment</em></strong></p>
        <h3>If you are unwell</h3>
        <p>If you have a high temperature, a persistent cough, any loss of smell or taste please let us know and cancel your appointment.</p>
        <h3>Arriving to your appointment</h3>
        <p>Please arrive to the salon at the time of your appointment. We will not be using the waiting area initially so if we are running late for you you will be notified in due course. 
        You may still be able to come and take a seat in your stylists area so don’t worry.</p>
        <p>Each stylist is going to be allocated an area of the salon. 
        They will use these chairs to minimise different people having contact with all areas of the salon. We are also minimising the amount of stylists we have in on any given day so that we can maintain a safe distance at all times.</p>
        <h3>Please come to your appointment alone</h3>
        <p>We can no longer allow people to bring anyone with them during their appointment so that we can limit the number of people in the salon at any given time. 
        We totally understand that for some people childcare is an issue and we are very sorry that we can not accommodate for this at the moment. 
        We are open evenings and weekends and hope that this will provide adequate spaces to get everyone in.</p>
        <p><em>Unfortunately as we are requiring people to come to their appointment alone we are unable to cater for children at this time who need to be accompanied by their parents.
        We hope that once the initial rush has died down and the salon has less footfall this will quickly change. We really hope you understand this isn’t an easy decision for us to make as we love being a welcoming salon for all the family. 
        But with trying to minimise the number of people coming through the salon we are having to make some short term changes. We hope that this will be no longer than 2 to 3 weeks after opening and please keep in touch with us regarding this issue as we hope this will be a short term fix!</em></p>
        <h3>No Cloakroom Use</h3>
        <p>Unfortunately we won't be able to hang your coats or take your shopping bags off you as this poses an increased risk of cross contamination. 
        Please avoid wearing bulky coats to your appointment and bring a bag to put your jacket in to protect it if you need to wear one. Please avoiding bringing any bulky items (shopping etc)</p>
        <h3>Please arrive at your appointment with clean hair</h3>
        <p>Due to the current situation with COVID-19 we will not be able to carry out any dry cuts. We must wash all clients hair prior to cutting to increase levels on cleanliness. </p>
        <p>We also ask anyone who has a colour to make sure your hair is freshly washed prior to your appointment. 
        If you arrive with unclean hair we will have to wash it and this will reduce our appointment time with you and will also incur a fee.</p>
        <h3>Surcharge</h3>
        <p>You may find that there will be a surcharge on your first appointment
        As everybody’s hair is way overdue we may have to charge slightly more due to using more colour and taking more time. 
        We do hope you understand we are not trying to over charge. Colour is one of our biggest costs and we're going to be using 2-3 times more product this visit.</p>
        <h3>Complimentary PPE</h3>
        <p>We are providing masks for everyone. Please feel free to bring your own but we have them readily available.</p>
        <h3>Refreshments & Magazines</h3>
        <p>We won’t be serving any drinks or offering magazines for a while. This is a way for us to minimise any extra contact. We again realise this is all part of the experience of being in the salon and are hoping that this will only be a very short term measure as we see how things progress over the coming weeks. 
        Please bring your own bottled refreshments though by all means. <strong>However government guidelines say you cannot bring food.</strong>
        <br>It's also perfectly fine for you to bring your own book/magazines.</p>
        <h3>Hand Sanitiser</h3>
        <p>We will provide hand sanitiser.
        We will have this on the front desk and will ask you to wash your hands upon your arrival.</p>
        <h3>Payment</h3>
        <p>Please where you can pay by card/Apple Pay. This is to again avoid any unnecessary contact. (Don’t worry we are still accepting cash)</p>
        <h3>Cancellation Policy</h3>
        <p>As we have extremely long lists of people to get through we are having to introduce a cancellation policy. This will mean we require <strong>48 hours notice</strong> prior to cancelling an appointment, <span class="has-text-danger">if less than 48 hours or not giving any notice we will have to charge 50% of the appointment time. </span>
        So please if you can let us know as soon as possible for any cancellations we will greatly appreciate it at this crazy time.</p>
    </div>
</div>

@stop