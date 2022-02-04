<!DOCTYPE html>
<html translate="no">
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

	<link rel="stylesheet" type="text/css" href="files/styles.css">
	<script type="text/javascript" src="files/script.js"></script>
</head>
<body>

	<?php include 'nav.php'; ?>
	<!-- <div id="topNav" class="container fixed">
		<div class="nav">
			<div id="menu">
				<i class="fas fa-bars"></i>
			</div>
			<div id="home">
				<img src="assets/logo.png">
			</div>
			<div id="purchase">
				<p>SIGN UP</p>
			</div>
		</div>
	</div> -->

	<div id="background" class="container fixed">
		<video id="bg" autoplay loop muted playsinline frameWidth="3840" frameHeight="2160">
			<source src="assets/background-centered.mp4" type="video/mp4">
		</video>
		<script type="text/javascript">setDims('bg')</script>
		<div class="screen"></div>
	</div>

	<div id="top" class="container">
		<div class="module">
			<div class="abs-center">
				<h1>START YOUR JOURNEY TODAY</h1>
				<button type="button" class="btn">GET STARTED NOW</button>
			</div>
		</div>
	</div>

	<div id="about" class="container">
		<div class="module">
			<div id="about-content">
				<div class="heading">
					<h3 class="topLine">About me</h3>
				</div>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<button type="button" class="btn">GET IN SHAPE TODAY</button>
			</div>
			<div id="about-image">
				<img id="about-image" src="assets/kane.jpg">
			</div>
		</div>
	</div>
</body>
</html>