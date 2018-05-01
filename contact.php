<?php include 'header.php';?>
<div id="contact-header-section" class="contact-header-section">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="header-content-block">
          <div class="header-title-block">
              <h2>Contact Us</h2>
              <p>Are you an artisan willing to work with us. Clients are ready to meet up with you as soon as possible, anywhere, 24/7.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="overlay"></div>
</div>
<section id="contact">
  <div class="container">
    <div class="row">
      <h2 class="header-how-work">Work with Us</h2>
      <div class="col-md-4">
        <div class="contactinfo-block">
          <div class="contact-widget">
            <p class="address">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  c/o 4 Mbon Nde Itam <br>
                  Off School Road<br>Itu Road<br>
                  Uyo L.G.A, <br>
                  Akwa Ibom State
                </span>
            </p>
            <p>
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  +234(0)818-3780409 <br>
                  +234(0)908-6316239
                </span>
            </p>
            <p class="last-type">
                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                <span>
                  engchris95@gmail.com</br>
                  okokon.chris2015@gmail.com
                </span>
            </p>
            <div class="social-with-label">
              <span>Social Media: </span>
              <ul class="social">
                <li>
                  <a href="http://www.facebook.com/chrix95">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                  </a>
                </li>
                <li>
                  <a href="http://www.twitter.com/prof_krish">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                  </a>
                </li>
                <li>
                  <a href="http://www.youtube.com/chrix95">
                    <i class="fa fa-youtube-play" aria-hidden="true"></i>
                  </a>
                </li>
                <li>
                  <a href="http://www.plus.google.com/chrix95">
                    <i class="fa fa-google-plus" aria-hidden="true"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <p id="message"></p>
        <form id="contactForm" method="post" action="resources/script.php" autocomplete="off">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group label-floating">
                <label class="control-label">Your Name</label>
                <input type="text" name="name" class="form-control">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group label-floating">
                <label class="control-label">Your Email</label>
                <input type="email" name="email" class="form-control">
              </div>
            </div>
          </div>
          <div class="form-group label-floating">
            <label class="control-label">Your Messge</label>
            <textarea class="form-control" name="message" rows="4"></textarea>
          </div>
          <div class="row">
            <div class="col-md-4 col-md-offset-4 text-center">
              <button class="btn btn-primary btn-send-message" name="sendMessage">
                Send Message
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<?php include 'resources/footer.php';?>
