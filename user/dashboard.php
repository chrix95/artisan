<?php
  include 'header.php';
  include 'sideMenu.php';
?>

<div class="main-area">
  <div class="container-fluid">
    <div class="row hidden-lg hidden-md">
      <div class="col-md-12">
        <h3>
          <?php
            $surname = $_SESSION['details']->surname;
            $othername = $_SESSION['details']->othername;
            echo "Hi, " .$surname. " " .$othername; ?>
        </h3>
      </div>
    </div>
  </div>
  <div class="col-md-12">
    <?php include 'footer.php'; ?>
  </div>
</div>
