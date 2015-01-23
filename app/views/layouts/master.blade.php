<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>{{isset($title) ? $title : 'St. Luke'}}</title>

<!--<link href="/img/favicon.ico" type="image/x-icon" rel="shortcut icon">  -->

<link rel="stylesheet" type="text/css"
	href="/bower_components/bootstrap/dist/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="/css/main.css">
<link rel="stylesheet" type="text/css" href="/css/media.css">
<link rel="stylesheet" type="text/css"
	href="/css/mediaelementplayer.min.css">
<link rel="stylesheet" type="text/css" href="/css/style.css">
</head>
<body>
	<div class="container">@include('layouts.topbar') @yield('content')</div>

	<div class="footer">@include('layouts.footer');</div>



	<script src="/bower_components/jquery/dist/jquery.js"></script>
	<script src="/bower_components/bootstrap/dist/js/bootstrap.js"></script>


</body>
</html>