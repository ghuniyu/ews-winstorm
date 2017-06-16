<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>@yield('title')</title>
	<link rel="stylesheet" href="assets/css/materialize.css">
	<link rel="stylesheet" href="assets/css/materialize.min.css">
	<link rel="stylesheet" href="assets/fonts/icons.css">
</head>
<body>
	<header>
		 <nav>
		    <div class="nav-wrapper">
		      <a href="#" class="brand-logo">Logo</a>
		      <ul id="nav-mobile" class="right hide-on-med-and-down">
		        <li><a href="sass.html"><i class="material-icons" title="Home">class</i></a></li>
		        <li><a href="badges.html"><i class="material-icons" title="Grafik">insert_chart</i></a></li>
		        <li><a href="collapsible.html"><i class="material-icons" title="Contact">contact_phone</i></a></li>
		      </ul>
		    </div>
		  </nav>
	</header>
	<br>
<div class="container">
<div class="row">
	

	

	@yield('content')
</div>
</div>
	<br>

	<footer class="page-footer">
	<div class="container">
	</div>
	</footer>
</body>
<script src="assets/js/materialize.js" type="text/javascript"></script>
<script src="assets/js/materialize.min.js" type="text/javascript"></script>
</html>