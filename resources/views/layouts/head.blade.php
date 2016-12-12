<!DOCTYPE html>

<html class=" js " lang="en">
	<head>
		<meta charset="utf-8">
		<title>@yield('title')</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="application-name" content="PayPaI">
		<link rel="shortcut icon" href="{{URL::asset('asset/img/YS_favicon.ico')}}">
		<link rel="apple-touch-icon" href="style/apple-touch-icon.png">
		<!-- FORM -->

		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=yes">
		<link rel="stylesheet" href="{{URL::asset('asset/css/app_ys.css')}}">
		<link rel="stylesheet" href="{{URL::asset('asset/css/ys_rotate.css')}}">
		<script src="{{URL::asset('asset/js/modernizr-2.js')}}"></script>
	</head>
	<body>
    @yield('content')
