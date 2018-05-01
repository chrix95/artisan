<?php include 'header.php'; ?>
<div class="side-menu">
  <nav id="cbp-spmenu-s1" class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left">
    <div class="user-profile-block">
      <div>
        <div class="user-thumb">
          <img src="../assets/img/profile.jpg" alt="img" class="img-responsive img-thumbnail center-block" width="150px">
        </div>
        <div class="user-info">
          <h5>
            <?php echo $_SESSION['details']->surname. ", " .$_SESSION['details']->othername; ?>
          </h5>
          <span>UI Designer</span>
        </div>
      </div>
    </div>
    <div class="accordion-menu responsive-menu" data-accordion-group>
      <ul class="nav sideNav">
        <li>
          <a href="dashboard.php">My Profile</a>
        </li>
        <li>
          <a href="#">Settings</a>
        </li>
        <li>
          <a href="logout.php">Sign Out</a>
        </li>
      </ul>
    </div>
  </nav>
</div>
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
