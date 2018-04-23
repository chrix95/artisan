<?php include 'header.html'; ?>
    <div class="wrapper">
      <div class="header header-filter" style="background-image: url('assets/img/background/advert.jpeg')">
        <div class="container">
          <div class="row">
						<div class="col-md-6">
							<h1 class="title">Search for Artisans</h1>
	            <h4>Looking for an artisian for that job, search no further. Artisian are ready to meet up with you as soon as possible, anywhere, 24/7.</h4>
							<a href="#main-raised">
								<button type="button" id="findBut" name="button" class="btn btn-primary">Find Artisan</button>
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
							<h3 class="title">Frequently Asked Question</h3>
							<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
							  <div class="panel panel-default">
							    <div class="panel-heading" role="tab" id="headingOne">
							      <h4 class="panel-title">
							        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
							          Who are we?
							        </a>
							      </h4>
							    </div>
							    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
							      <div class="panel-body">
											We act as middle men between artisans and clients who needs their services. We provide our clients with highly skilled, efficient and reliable artisans.
										</div>
							    </div>
							  </div>
							  <div class="panel panel-default">
							    <div class="panel-heading" role="tab" id="headingTwo">
							      <h4 class="panel-title">
							        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
												Who takes responsibility for any damages caused by artisans?
							        </a>
							      </h4>
							    </div>
							    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
							      <div class="panel-body">
							        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
							      </div>
							    </div>
							  </div>
							  <div class="panel panel-default">
							    <div class="panel-heading" role="tab" id="headingThree">
							      <h4 class="panel-title">
							        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
							          How do i make payment?
							        </a>
							      </h4>
							    </div>
							    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
							      <div class="panel-body">
							        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
							      </div>
							    </div>
							  </div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section id="easierArtisans">
				<div class="container">
					<h3 class="title text-center" style="margin-bottom: 40px;">Hiring Artisans just got easier!</h3>
					<div class="row">
						<div class="col-md-4">
							<img src="assets/img/icons/describe.png" alt="" class="img img-responsive center-block" width="75px" />
							<h4 class="sub-title">At your Convenience</h4>
							<p class="title-text">
								Select a time that favours your schedule for the week and let us know.
							</p>
						</div>
						<div class="col-md-4">
							<img src="assets/img/icons/describe.png" alt="" class="img img-responsive center-block" width="75px" />
							<h4 class="sub-title">Process request</h4>
							<p class="title-text">
								We begin processing of your request to get the best of the best for the job based on your convenience.
							</p>
						</div>
						<div class="col-md-4">
							<img src="assets/img/icons/describe.png" alt="" class="img img-responsive center-block" width="75px" />
							<h4 class="sub-title">We receive feedback</h4>
							<p class="title-text">
								Once job is completed, we expect feeback from you for total satisfaction.
							</p>
						</div>
					</div>
				</div>
			</section>
		</div>
	<?php include 'resources/footer.php'; ?>
