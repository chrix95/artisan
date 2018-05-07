<?php include 'header.php'; ?>

<div id="main-header-section" class="main-header-section">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-5">
        <div class="header-content-block">
          <div class="header-title-block">
              <h2>Search for Artisans</h2>
              <p>Looking for an artisian for that job, search no further. Artisian are ready to meet up with you as soon as possible, anywhere, 24/7.</p>
              <a href="#work">
                <button type="button" name="button" class="btn btn-how btn-lg">How it works</button>
              </a>
              <button type="button" name="request" id="requestBtn" class="btn btn-how btn-lg hidden-md hidden-lg">Request</button>
              <button type="button" name="request" id="closeBtn" class="btn btn-how btn-lg hidden-md hidden-lg">Hide</button>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-7 requestForm">
        <?php include 'resources/findForm.html'; ?>
      </div>
    </div>
  </div>
  <div class="overlay"></div>
</div>

<section id="work">
  <div class="container">
    <div class="row">
      <h2 class="header-how-work">How it Works</h2>
      <div class="col-sm-4 col-md-4">
        <img src="assets/img/icons/describe.png" alt="" class="img img-responsive center-block" width="75px" />
        <h4 class="sub-title">At your Convenience</h4>
        <p class="title-text text-center">
          Select a time that favours your schedule for the week and let us know.
        </p>
      </div>
      <div class="col-sm-4 col-md-4">
        <img src="assets/img/icons/negotiate.svg" alt="" class="img img-responsive center-block" width="75px" />
        <h4 class="sub-title">Process request</h4>
        <p class="title-text text-center">
          We begin processing of your request to get the best of the best for the job based on your convenience.
        </p>
      </div>
      <div class="col-sm-4 col-md-4">
        <img src="assets/img/icons/complete.svg" alt="" class="img img-responsive center-block" style="background-color: #61A8D2;border-radius: 17px;" width="75px" />
        <h4 class="sub-title">We receive feedback</h4>
        <p class="title-text text-center">
          Once job is completed, we expect feeback from you for total satisfaction.
        </p>
      </div>
    </div>
  </div>
</section>

<section id="hiring">
  <div class="container">
    <div class="row">
      <h2 class="header-how-work">Hiring Artisans just got easier!</h2>
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
                Artisan will not take responsibilty for any damage caused by the personnel we send to you. That's why we provide the best of the best for you.
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
                Payment of the personnel could by make by cash to the artisan we provide or via our online web portal
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'resources/footer.php'; ?>
