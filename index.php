<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<!-- <link rel="icon" type="image/png" href="assets/img/favicon.png"> -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Artisan</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="assets/css/font-awesome.min.css" />

	<!-- CSS Files -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/material-kit.css" rel="stylesheet"/>
	<link href="assets/css/main.css" rel="stylesheet"/>

</head>

<body class="landing-page">
    <nav class="navbar navbar-absolute navbar-fixed-top">
    	<div class="container">
        	<!-- Brand and toggle get grouped for better mobile display -->
        	<div class="navbar-header">
        		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example">
            		<span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
        		</button>
        		<a class="navbar-brand" href="index.html">aRTISIAN</a>
        	</div>

        	<div class="collapse navbar-collapse" id="navigation-example">
        		<ul class="nav navbar-nav navbar-right">
							<li>
								<a href="#">Home</a>
							</li>
							<li>
								<a href="#">Register</a>
							</li>
							<li>
								<a href="#">Contact Us</a>
							</li>
        		</ul>
        	</div>
    	</div>
    </nav>
    <div class="wrapper">
      <div class="header header-filter" style="background-image: url('assets/img/background/advert.jpeg');">
        <div class="container">
          <div class="row">
						<div class="col-md-6">
							<h1 class="title">Search for Artisans</h1>
	            <h4>Looking for an artisian for that job, search no further. Artisian are ready to meet up with you as soon as possible, anywhere, 24/7.</h4>
							<a href="#main-raised">
								<button type="button" id="findBut" name="button" class="btn btn-primary">Search Artisan</button>
							</a>
						</div>
          </div>
        </div>
      </div>
			<div id="main-raised" class="main main-raised">
				<div class="container-fluid">
	      	<div class="section landing-section">
						<!-- <h3 class="text-center">Locate an artisan in your environment.</h3> -->
	          <?php include 'resources/find_form.html'; ?>
	        </div>
	      </div>
			</div>
			<section id="hiring">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<h3 class="title">What's Different?</h3>
							<p>
								We go the extra mile to ensure your satisfaction. When you hire a handyman, we single out the best candidate for the job who has gone through our background check and rigorous levels of scrutiny.
							</p>
							<button type="button" name="button" class="btn btn-primary findOut">Find out</button>
						</div>
						<div class="col-md-6">
							<h3 class="title">Hiring Artisans just gort easier</h3>
							<p>
								We go the extra mile to ensure your satisfaction. When you hire a handyman, we single out the best candidate for the job who has gone through our background check and rigorous levels of scrutiny.
							</p>
							<button type="button" name="button" class="btn btn-primary findOut">Find out</button>
						</div>
					</div>
				</div>
			</section>
			<section id="easierArtisans">
				<div class="container">
					<h3 class="title text-center">Hiring Artisans just gort easier</h3>
					<div class="row">
						<div class="">

						</div>
					</div>
				</div>
			</section>
		</div>
	<?php include 'resources/footer.php'; ?>
