<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Artisan</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="assets/css/font-awesome.min.css" />

	<!-- CSS Files -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/css/jquery.datetimepicker.css" rel="stylesheet" />
	<link href="assets/css/main.css" rel="stylesheet"/>

</head>

<body>
  <nav class="navbar navbar-default navbar-fixed-top">
  	<div class="container">
      	<div class="navbar-header">
      		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigationHeader">
          		<span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
      		</button>
      		<a class="navbar-brand" href="index.html">aRTISANs</a>
      	</div>

      	<div class="collapse navbar-collapse" id="navigationHeader">
      		<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="index.php">Home</a>
						</li>
						<li>
							<a href="#"  data-toggle="modal" data-target="#myModal">Register</a>
						</li>
						<li>
							<a href="contact.php">Contact Us</a>
						</li>
      		</ul>
      	</div>
  	</div>
  </nav>
	<?php include 'resources/modalForm.php'; ?>
