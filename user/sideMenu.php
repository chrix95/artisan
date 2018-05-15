<div class="side-menu">
  <nav id="cbp-spmenu-s1" class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left">
    <div class="user-profile-block">
      <div>
        <div class="user-thumb">

          <?php if ($_SESSION['details']->image == '') { ?>
            <img id="image" src="../assets/img/demo-user.png" alt="img" class="img-responsive img-thumbnail center-block" width="150px">
          <?php } else { ?>
            <img id="image" src="<?php echo $_SESSION['details']->image; ?>" alt="img" class="img-responsive img-thumbnail center-block" width="150px">
          <?php } ?>
        </div>
        <div class="user-info">
          <h5>
            <?php echo $_SESSION['details']->surname. ", " .$_SESSION['details']->othername; ?>
          </h5>
          <span><?php
            if ($_SESSION['details']->category == '') {

            } else {
              echo $_SESSION['details']->category;
            }
          ?></span>
        </div>
      </div>
    </div>
    <div class="accordion-menu responsive-menu" data-accordion-group>
      <ul class="nav sideNav">
        <li>
          <a href="profile.php">My Profile</a>
        </li>
        <li>
          <a href="message.php">Message</a>
        </li>
      </ul>
    </div>
  </nav>
</div>
