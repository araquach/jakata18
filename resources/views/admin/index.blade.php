@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'title' => 'Jakata Salon - Admin'
	])
	
@stop

@section('content')

<div id="admin">

	<h1>Admin Menu</h1>
	
	<h2>Welcome {{ Auth::user()->name }}</h2>
	
	<ul>
		@if(Auth::user()->role == 1)
			<li>{!! link_to('stylist', 'Stylist Applicants', ['class' => 'link-button']) !!}</li>
			<li>{!! link_to('apprentice', 'Apprentice Applicants', ['class' => 'link-button']) !!}</li>
			<li>{!! link_to('superstylist/admin', 'Super Stylist Admin', ['class' => 'link-button']) !!}</li>
			<li>{!! link_to('potential', 'Potential Employees', ['class' => 'link-button']) !!}</li>
			<li>{!! link_to('campaigns', 'Campaigns', ['class' => 'link-button']) !!}</li>
			<li>
				<a href="{{ route('logout') }}"
					onclick="event.preventDeault();
				    document.getElementById('logout-form').submit();">
				    {{ __('Logout') }}
				</a>
				        
				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
					csrf
				</form>
			 </li>
		@endif
		<li>{!! link_to('superstylist', 'Super Stylist Vote', ['class' => 'link-button']) !!}</li>
	</ul>

</div>

@stop