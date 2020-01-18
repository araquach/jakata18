@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'description' => 'Special offer',
	'keywords' => 'Jakata, offer, special offer, hairdressing offer',
	'title' => 'Jakata Salon - Special offer for you - Hairdressers in Warrington'
	])

@stop

@section('content')

<section id="offers">

	@if(Session::has('message'))
	<div class="applicationSuccess">
	{{{ Session::get('message') }}}
	</div>
	@endif

	<div id="offer-copy">
		<h1>New Year Offer for {{ $offer->first_name }} {{ $offer->last_name}}</h1>
		<p>Hi {{ $offer->first_name }}, we've not seen you in Jakata for a while and we'd love to have you back!</p>
		<p>We have a great team of talented stylists at different levels so there's definitely a price to suit you.</p>
		<p>Alternatively, if you're on a tight budget after Christmas then why not give our new <strong>Base Hair Academy</strong> a go<br>
			An amazing team of Junior Stylists & Graduates</p>
		<p>Take advantage of the offers there by clicking the link: <a href="https://basehairdressing.com/offers" target="_blank">Base Hairdressing Offers</a></p>
		<p>Or Call 01925 242960 to take advantage of the offer below - Just quote offer NY20</p>
	</div>

	<section id="offer-ny-lapsed"></section>

	{!! link_to('booking', "Book now", array('class'=>'book_button')) !!}

	@include('offer._form')

</section> <!--end #offers-->

@stop
