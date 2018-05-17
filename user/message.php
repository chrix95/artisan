<?php
  require '../resources/connection.php';
  require 'header.php';
  require 'sideMenu.php';
?>

<div class="main-area">
  <?php
    // get username from session
    $username = $_SESSION['details']->username;
    // check if username has a value
    if ($username != '') {
      // if account is currently live
      $get_job_listing = $conn->prepare("SELECT * FROM request WHERE username=:username");
      $get_job_listing->bindParam(":username", $username);
      $get_job_listing->execute();
      $count = $get_job_listing->rowCount();

      if ($count > 0) {
        // if there's at least one job listing
        $get_jobs = $get_job_listing->fetchALL(PDO::FETCH_OBJ); // fetches all available job listing for artisan
        var_dump($get_jobs);
        ?>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="alert alert-success" role="alert">
                <strong><?=$username. ": "?>You have been listed for <?=$count?> job(s), kindly confirm. Thank you.</strong>
              </div>
            </div>
          </div>
        </div>
        <?php
      } else {
        ?>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="alert alert-info" role="alert">
                <strong><?=$username. ": "?>You have not been listed for a job yet, be patient. Thank you.</strong>
              </div>
            </div>
          </div>
        </div>
        <?php
      }

    } else {
      // if username/account hasn't been updated to set live
    ?>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="alert alert-info" role="alert">
            <strong>kindly update profile to be listed on the search for jobs. Thank you.</strong>
          </div>
        </div>
      </div>
    </div>
    <?php
    }
   ?>
  <div class="col-md-12">
    <?php include 'footer.php'; ?>
  </div>
</div>
