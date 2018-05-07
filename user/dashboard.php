<?php
  include 'header.php';
  include 'sideMenu.php';
?>

<div class="main-area">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6">
        <h3>
          <?php
            $get = $_SESSION['details']->othername;

            $name = explode(" ", $get);

            echo "Hi, " .$name[0]; ?>
        </h3>
      </div>
      <div class="col-md-6">
        <h4>This is your dashboard</h4>
      </div>
    </div>
  </div>
  <div class="col-md-12">
    <?php include 'footer.php'; ?>
  </div>
</div>
