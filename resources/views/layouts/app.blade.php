<!DOCTYPE html>
<html lang="en">

<head>
	<title>ArchiArt|Acceuil</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="title" content="" />
    @yield("style")
	<link type="image/x-icon" href="{{ asset('assets/client/images/fav-icon.png') }}" rel="icon">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/client/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/client/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/client/css/app.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/client/css/ukainpro.css') }}">

   
</head>

<body>


	<!-- START PRELOADER
    <div id="preloader">
        <div id="spinner">
            <div class="loadersvganim play"></div>
            <h5 class="loading mt-3">Chargement...</h5>
        </div>
    </div> -->
    <!-- END PRELOADER -->
	<!-- HEADER START -->
	@include("layouts.header")
   

		
		
	
	<!-- HEADER END -->
	<!-- MAIN START -->
	<main class="main">
		
		
		
		
		
        @yield("wrapper")
		
	
	</main>
	<!-- MAIN END -->
    @include("layouts.footer")
	<script src="{{ asset('assets/client/js/jquery.min.js') }}"></script>
	<script src="{{ asset('assets/client/js/popper.min.js') }}"></script>
	<script src="{{ asset('assets/client/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/client/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('assets/client/js/custom.js') }}"></script>
	<script src="{{ asset('assets/client/js/app.js') }}"></script>
	<script>
		
	</script>
	@yield("script")
</body>
</html>





