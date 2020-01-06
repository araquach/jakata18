@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'description' => 'New Year Offer',
	'keywords' => 'Jakata Offers, Jakata offers, hairdressing Offers, salon Offers, New Year offers',
	'ogtitle' => 'New Year Offers',
	'ogdescription' => 'New to Jakata? Treat yourself to a new look for 2020. Take advantage of this amazing offer',
	'ogimage' => url('/') . '/images/offers/ny_offer_fb.jpg',
	'ogimagewidth' => '1200',
	'ogimageheight' => '628',
	'title' => 'Jakata Salon - Special Offers - Hairdressers in Warrington'
	])

@stop

@section('content')

@include('layouts.partials.fb_like')

<section id="offers">

	<div id="offer-copy">
		<h1>New Year Offer</h1>
		<p>New to Jakata? Treat yourself to a new look for 2020</p>
	</div>

	<section id="offer-ny"></section>

	{!! link_to('booking', "Book now", array('class'=>'book_button')) !!}

</section> <!--end #offers-->

@stop
