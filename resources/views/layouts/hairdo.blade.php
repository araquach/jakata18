<!DOCTYPE HTML>
<html class="no-js">
	
@section('head')

@show


<body>


<div class="container" id="page">

<header class="group">

	<a href="{{ URL::to('/') }}"><div id="logo"></div></a>

	<h1>Jakata Salon</h1>
	<h2>Fashion Forward Hairdressing</h2>

</header>
	
	<section id="hairdo-info">
	
    <section id="hairdo-image"></section>

	<p><strong>Text</strong></p>
	<p>More Text</p>
	<p>More Text</p>
	<p><strong>Bold Text</strong></p>
	
	<section id="address_info">
	<p>27 Rylands Street, Warrington</p>
	<p class="big">01925 242960</p>
	</section> <!--address_info-->
	</section> <!--prospect-info-->

	@yield('content')

	<div class="clear group"></div>
	
</div><!-- page -->

</body>