<!doctype html>
<html>
<head>
<meta charset="UTF-8">

<link rel="icon" type="image/png" href="/img/logo.png" />

<title>{{isset($title) ? $title : 'St. Luke'}}</title>

<link rel="stylesheet" type="text/css"
	href="//fonts.googleapis.com/css?family=Paytone+One" />
<link rel="stylesheet" type="text/css"
	href="/bower_components/Metro-UI-CSS/min/metro-bootstrap.min.css" />
<link rel="stylesheet" type="text/css"
	href="/bower_components/Metro-UI-CSS/min/metro-responsive.min.css" />
</head>
<body class="metro">

	<header>
		<nav class="navigation-bar light">
			<div class="navigation-bar-content container">
				<a href="/" class="element"><img src="/img/logo.png"
					style="height: 20px;" /> St. Luke</a> <span class="element-divider"></span>
				<ul class="element-menu">
					<li><a class="dropdown-toggle" href="#">School</a>
						<ul class="dropdown-menu inverse" data-role="dropdown">
							<li><a href="/~stlukemi/why-st-luke.php">Why us?</a></li>
							<li><a href="/~stlukemi/enrollment.php">Enrollment</a></li>
							<li><a href="/~stlukemi/info-for-parents.php">Info</a></li>
							<li><a href="/~stlukemi/sports-page.php">Sports</a></li>
							<li><a href="/~stlukemi/music.php">Music</a></li>
							<li><a href="/~stlukemi/calendar.php">Calendar</a></li>
							<li><a href="#">Classes</a></li>
						</ul></li>
					<li><a href="#">Preschool</a></li>
					<li><a class="dropdown-toggle" href="#">About Us</a>
						<ul class="dropdown-menu" data-role="dropdown">
							<li><a href="/~stlukemi/aboutus.php">WHAT IS ST. LUKE?</a></li>
							<li><a href="/~stlukemi/from-the-pastors.php">FROM THE PASTORS</a></li>
							<li><a href="/~stlukemi/links.php">LINKS</a></li>
						</ul></li>
					<li><a href="#" class="dropdown-toggle">WORSHIP</a>
						<ul class="dropdown-menu" data-role="dropdown">
							<li><a href="/~stlukemi/worship-overview.php">OVERVIEW</a></li>
							<li><a href="/~stlukemi/bible-study.php">CHRISTIAN EDUCATION</a></li>
							<li><a href="/~stlukemi/sermons.php">SERMON ARCHIVE</a></li>
						</ul></li>
					<li><a href="#" class="dropdown-toggle">NEWS &amp; NOTES</a>
						<ul class="dropdown-menu" data-role="dropdown">
							<li><a href="news.php">NEWS</a></li>
							<li><a href="/~stlukemi/calendar.php">CALENDAR</a></li>
						</ul></li>
					<li><a href="/~stlukemi/staff.php" class="dd-submenu-title">STAFF</a></li>
					<li><a href="contact-us.php" class="dd-submenu-title">CONTACT US</a></li>
					<li><a href="http://www.google.com/a/stlukemi.org"
						class="dd-submenu-title">STAFF E-MAIL</a></li>
				</ul>
			</div>
		</nav>
	</header>
	<!--
	<div id="header">@include('layouts.header')</div>
	<div id="nav">@include('layouts.main-nav')</div>
	<div id="content">@yield('content')</div>
	<div class="footer">@include('layouts.footer');</div>
 -->

	<script src="/bower_components/jquery/dist/jquery.min.js"></script>
	<script src="/bower_components/jquery-ui/jquery-ui.min.js"></script>
	<script src="/bower_components/Metro-UI-CSS/min/metro.min.js"></script>
</body>
</html>