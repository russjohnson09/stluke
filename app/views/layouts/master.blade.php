<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>{{isset($title) ? $title : 'St. Luke'}}</title>

<!--<link href="/img/favicon.ico" type="image/x-icon" rel="shortcut icon">  -->

<!--
<link rel="stylesheet" type="text/css"
	href="/bower_components/bootstrap/dist/css/bootstrap.css">
	  -->
<link rel="stylesheet" type="text/css" href="/css/main.css">
<link rel="stylesheet" type="text/css"
	href="//fonts.googleapis.com/css?family=Paytone+One" />
<link rel="stylesheet" type="text/css"
	href="/bower_components/Metro-UI-CSS/min/metro-bootstrap.min.css" />
<link rel="stylesheet" type="text/css"
	href="/bower_components/Metro-UI-CSS/min/metro-responsive.min.css" />
</head>
<body id="tile" class="metro">
	<div id="header">@include('layouts.header')</div>
	<div id="nav">@include('layouts.main-nav')</div>
	<div id="content">@yield('content')</div>
	<div class="footer">@include('layouts.footer');</div>
	<script src="/bower_components/jquery/dist/jquery.min.js"></script>
	<script src="/bower_components/jquery-ui/jquery-ui.min.js"></script>
	<script src="/bower_components/Metro-UI-CSS/min/metro.min.js"></script>
</body>
</html>