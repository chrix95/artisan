<?php
	try{
		session_start();
		//Check whether the session variable email or details is present or not
		if(!isset($_SESSION['email']) || !isset($_SESSION['details'])) {
			header("location: logout.php");
			exit();
		}
	} catch (Exception $e) {
		echo "Problem Somewhere: ". $e->getMessage();
	}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Artisan</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="../assets/css/font-awesome.min.css" />

	<!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="../assets/css/jquery.datetimepicker.css" rel="stylesheet" />
	<link href="../assets/css/main.css" rel="stylesheet"/>
	<link href="../assets/css/index.css" rel="stylesheet"/>

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
							<a href="dashboard.php">Dashoard</a>
						</li>
						<li>
							<a href="settings.php">Settings</a>
						</li>
						<li>
							<a href="logout.php">Sign Out</a>
						</li>
      		</ul>
      	</div>
  	</div>
  </nav>
