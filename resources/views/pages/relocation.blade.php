@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'description' => 'Adam, Jimmy and Lauren are moving to Base Hairdressing - a brand new salon in the old Jakata premises',
	'keywords' => 'hairdressing, hairdressers, stylists, Jakata, salon',
	'ogtitle' => 'Adam, Jimmy and Lauren are moving to Base Hairdressing',
	'ogdescription' => '',
	'title' => 'Jakata Salon - Adam Jim and Lauren at Base - Hairdressers in Warrington'
	])

@stop

@section('content')

<section id="relocation">

	<div id="relocation_copy">

		<h1>Adam, Jimmy and Lauren are moving to Base Hairdressing</h1>

		<p>Since we relocated to our new site 18 months ago we have been renovating and refurbishing the old premises with the intention of launching it as a brand new salon.</p>
		<p>The work is finally complete and our new salon <strong>Base Hairdressing</strong> is ready to go - with an opening date of Tuesday 23rd July!</p>
		<p>The long term goal is for the salon to be a training academy to nurture new hairdressing talent and develop stylists to the highest possible level. In the meantime we're getting things rolling by taking a selection of existing stylists over to help launch the brand.</p>
		<p><strong>Adam, Jimmy, and Lauren</strong> are moving over from Jakata and will be joined by <strong>Abi from Paul Kemp Hairdressing</strong>. We will be recruiting apprentices and also renting out a number of chairs too.</p>
		<p>If you are a client of any of these stylists, your future appointments will be at <strong>Base Hairdressing</strong>. All appointments have been transferred and remain the same - you'll just be at our brand new salon!</p>
		<p>I hope you're as excited as us about the move, we're confident the transition will be smooth and you'll love the new salon! (Though there might be a couple of teething problems along the way! Hopefully not too many!)</p>
		<p><em>If you have any questions regarding the changes, don't hesitate to get in touch by calling Jakata on 01925 242960</em></p>
		<p>Our new phone number for Base Hairdressing is 01925 444449 and will be in use from the date we open</p>

		<a href="{{ URL::to('blog/major-revamp') }}">Read our Blog post about the revamp of the old Jakata premises</a>

		<p><strong>We look forward to seeing you in Base!</strong></p>



	</div>

	<div id="relocation_image"></div>

</section>
<!--team-->

@stop
