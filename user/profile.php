<?php
  include 'header.php';
  include 'sideMenu.php';
?>

<div class="main-area">

  <div class="firstSection">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
          <div class="panel panel-default">
            <div class="panel-heading">
              <div class="panel-title">
                <h4>Personal Profile</h4>
              </div>
            </div>
            <div class="panel-body">
              <form class="regForm">
                <div class="form-group">
                  <input type="password" class="form-control" placeholder="Current Password">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" placeholder="New Password">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" placeholder="Confirm New Password">
                </div>
                <button type="submit" class="btn btn-primary findOut" id="edit">Edit</button>
              </form>
            </div><!--panel Body -->
          </div><!--panel -->
        </div>
      </div>
    </div>
  </div>

</div>
