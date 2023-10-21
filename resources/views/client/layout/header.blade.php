<!DOCTYPE html>
<html lang="en">

<head>

	<!-- Basic -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Business Consultancy</title>

	{{-- <meta name="keywords" content="WebSite Template" />
	<meta name="description" content="Multipurpose Website Template">
	<meta name="author" content="okler.net"> --}}



	<!-- Favicon -->
	<link rel="shortcut icon" href="@if ($company->favicon)
    {{ asset('images/logo/'.$company->favicon) }}
    @else
    {{ asset('business/img/favicon.ico') }}
    @endif" type="image/x-icon" />
	<link rel="apple-touch-icon" href="@if ($company->favicon)
    {{ asset('images/logo/'.$company->favicon) }}
    @else
    {{ asset('business/img/apple-touch-icon.png') }}
    @endif">

	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

	<!-- Web Fonts  -->
	<link id="googleFonts"
		href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light&display=swap"
		rel="stylesheet" type="text/css">

	<!-- Vendor CSS -->
	<link rel="stylesheet" href="{{ asset('business/vendor/bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('business/vendor/fontawesome-free/css/all.min.css') }}">
	<link rel="stylesheet" href="{{ asset('business/vendor/animate/animate.compat.css') }}">
	<link rel="stylesheet" href="{{ asset('business/vendor/simple-line-icons/css/simple-line-icons.min.css') }}">
	<link rel="stylesheet" href="{{ asset('business/vendor/owl.carousel/assets/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('business/vendor/owl.carousel/assets/owl.theme.default.min.css') }}">
	<link rel="stylesheet" href="{{ asset('business/vendor/magnific-popup/magnific-popup.min.css') }}">

	<!-- Theme CSS -->
	<link rel="stylesheet" href="{{ asset('business/css/theme.css') }}">
	<link rel="stylesheet" href="{{ asset('business/css/theme-elements.css') }}">
	<link rel="stylesheet" href="{{ asset('business/css/theme-blog.css') }}">
	<link rel="stylesheet" href="{{ asset('business/css/theme-shop.css') }}">

	<!-- Demo CSS -->
	<link rel="stylesheet" href="{{ asset('business/css/demos/demo-business-consulting-3.css') }}">

	<!-- Skin CSS -->
	<link id="skinCSS" rel="stylesheet" href="{{ asset('business/css/skins/skin-business-consulting-3.css') }}">

	<!-- Theme Custom CSS -->
	<link rel="stylesheet" href="{{ asset('business/css/custom.css') }}">

	<!-- Head Libs -->
	<script src="{{ asset('business/vendor/modernizr/modernizr.min.js') }}"></script>

</head>