<head>
	
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="{{ $description or 'Jakata is a fashion forward, award winning hair salon in Warrington, Cheshire. With a team of twelve talented hairdressers looking after you, you know you\'re in good hands. Based on Bridge street in Warrington Town Centre the salon is located perfectly to serve Lymm, Stockton Heath, Culcheth, Great Sankey, Widnes and Runcorn. If you\'re looking for the most fashion forward hairdressing then look no further. Our hairdressing services will far outweigh your expectations plus you\'ll be blown away by our friendly, approachable staff. Jakata, 90/92 Bridge Street, Warrington, WA1 2RF, 01925 242960' }}">
	<meta name="keywords" content="{{ $keywords or 'hair, hairdressers, hairdressing, hairdressers in Warrington, men\'s hairdresing, fashion colour, brazilian blowdry, wedding hair, Warrington, Lymm, Stockton Heath, Culcheth, Great Sankey, Widnes and Runcorn' }}">
    
  <meta name="author" content="Contra Design">
    
  <meta property="og:title" content="{{ $ogtitle or 'Jakata Salon' }}">
  <meta property="og:description" content="{{ $ogdescription or 'Jakata is a fashion forward, award winning salon in Warrington' }}">
	<meta property="og:image" content="{{ $ogimage or url('/') . '/images/fbmeta/main.jpg' }}">
  <meta property="og:image:width" content="{{ $ogimagewidth or '1200' }}">
  <meta property="og:image:height" content="{{ $ogimageheight or '628' }}">
	<meta property="og:url" content="{{ url()->current() }}">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Pintrest -->
  <meta name="p:domain_verify" content="251064bc74a96117720a74689c79c2e5"/>

  <!--Google analytics -->
	<script>
  		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
		
  		ga('create', 'UA-2487518-1', 'auto');
  		ga('send', 'pageview');
	</script>
  
  <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}" />
  <link rel="stylesheet" href="https://use.typekit.net/wun6xai.css">

  <script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>
	
	{{-- Phorest online booking styling --}}
	<style>
      .iframe-container {
        position: relative;
        height: 800px;
        overflow: hidden;
      }
      .iframe-container iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
      }
    </style>

    <!-- Facebook Pixel Code -->
    <script>
      !function(f,b,e,v,n,t,s)
      {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};
      if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
      n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t,s)}(window, document,'script',
      'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '359088954685646');
      fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
      src="https://www.facebook.com/tr?id=359088954685646&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Facebook Pixel Code -->



	<title>{{ $title or 'Jakata Salon - Hairdressers in Warrington' }}</title>

</head>