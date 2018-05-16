<?php
session_start();
require 'resources/connection.php';

// triggers the script once the find button is clicked
if (isset($_POST['find'])) {
  // get form details
  $category = htmlentities(strip_tags(trim($_POST['category'])));
  $state = htmlentities(strip_tags(trim($_POST['state'])));
  $city = htmlentities(strip_tags(trim($_POST['city'])));

  // prepare sql query for processing
  $query_db = $conn->prepare("SELECT * FROM users WHERE category=:category AND state=:state AND city=:city AND live=:live");
  $query_db->bindParam(":category", $category);
  $query_db->bindParam(":state", $state);
  $query_db->bindParam(":city", $city);
  $query_db->bindValue(":live", 1);
  $query_db->execute();
  // get the number of rows availbele for selected category and location
  $count = $query_db->rowCount();

  if ($count > 0) {

    // retrieve all required information from database when there is at least a match
    $get_artisans = $query_db->fetchALL(PDO::FETCH_OBJ);
    $_SESSION['found'] = $get_artisans; // stores the information into a session
    header("location: feedback.php?found=true"); // redirects user to the found results

  }

}
// redirects user to homepage if search wasn;t used

 ?>
 <!-- include header -->
<?php require 'header.php'; ?>

<!-- feedback image background -->
<div id="" class="feedback-header">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-5">
        <div class="header-content-block">
          <div class="header-title-block">
            <h2>Best of the Best</h2>
            <p>We bring the best of the job directly to you as providing best quality services to our clients matters alot.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="overlay"></div>
</div>
<!-- end feedback image background -->

<!-- search fields -->
<section id="search">
  <div class="container">
    <div class="row">
      <form id="findForm" action="feedback.php" method="POST" enctype="multipart/form-data">
        <div class="col-xs-6 col-md-3">
          <div class="form-group">
            <label>Category</label>
            <select name="category" id="category" class="form-control">
              <?php require 'resources/category.html'; ?>
            </select>
          </div>
        </div>
        <div class="col-xs-6 col-md-3">
          <div class="form-group">
            <label>State</label>
            <select class="form-control state" name="state">
              <option selected disabled>Please select</option>
            </select>
          </div>
        </div>
        <div class="col-xs-6 col-md-3">
          <div class="form-group">
            <label>City</label>
            <select name="city" class="form-control city">
              <option value="" selected disabled>Please select</option>
            </select>
          </div>
        </div>
        <div class="col-xs-6 col-md-3">
          <label></label>
          <div class="form-group">
            <button type="submit" name="find" class="btn btn-primary btn-search btn-md">Find</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</section>
<!-- end search fields -->

<!-- results of search is displayed -->
<section id="result">

  <div class="container">

    <div class="row">

      <div class="col-md-8">

        <!-- display results from database -->
        <?php if (isset($_GET['found'])) { ?>
          <?php
            $get_artisans = $_SESSION['found']; // stores the session in a varaible
            $size = count($_SESSION['found']); // gets the size of the result array for proper iteration
            for($x = 0; $x < $size ; $x++) {
              // store each result into variables
              $surname = $get_artisans[$x]->surname;
              $othername = $get_artisans[$x]->othername;;
              $email = $get_artisans[$x]->email;
              $phone = $get_artisans[$x]->phone;
              $username = $get_artisans[$x]->username;
              $category = $get_artisans[$x]->category;
              $image = $get_artisans[$x]->image;
              $state = $get_artisans[$x]->state;
              $city = $get_artisans[$x]->city;
              $address = $get_artisans[$x]->address;
           ?>

           <!-- the search result is displayed in a sweet design template -->
           <div class="row clients">

             <div class="col-md-8">
               <div class="header">
                 <h2><?php echo $surname. ', ' .$othername; ?></h2>
               </div>
               <div class="sub-header">
                 <p>
                   <i class="fa fa-map-marker" aria-hidden="true"></i>
                   <span><?php echo $address; ?></span>
                 </p>
                 <p>
                   <i class="fa fa-map-marker" aria-hidden="true"></i>
                   <span><?php echo $city. ', ' .$state; ?></span>
                 </p>
                 <p>
                   <i class="fa fa-phone" aria-hidden="true"></i>
                   <span>
                     <?php echo $phone; ?>
                   </span>
                 </p>
                 <a href="#request<?php echo $username; ?>" data-toggle="modal" data-target="#request<?php echo $username; ?>">
                   <button type="button" name="requestBtn" class="btn btn-primary findOut">Request</button>
                 </a>
               </div>
               <!-- geneartes an individual modal for each search result for request purposes -->
               <?php include 'resources/clientModal.php'; ?>
             </div>
             <!-- displays the artisan image for identification -->
             <div class="col-md-4">
               <img src="<?php echo 'user/'.$image; ?>" alt="" class="img img-responsive center-block img-thumbnail">
             </div>

           </div>

          <?php
            }
            // session_destroy();
          ?>
        <?php } else {; ?>
          <!-- when no result is returned form database -->
          <!-- this also helps to provide php errors from diisplaying -->
          <div class="clients">
            <div class="header">
              <h2>No result match</h2>
            </div>
          </div>
        <?php } ?>
      </div>

      <div class="col-md-4">
        <!-- ads from client and information goes here, as well as frequent search and ratings -->
      </div>

    </div>

  </div>

</section>

<!-- attach footer -->
<?php include 'resources/footer.php'; ?>
