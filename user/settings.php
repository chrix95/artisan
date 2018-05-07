<?php
  include 'header.php';
  include 'sideMenu.php';
?>

<div class="main-area">

  <div class="firstSection">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6"><!--Panel for password change -->
          <div class="panel panel-default">
            <div class="panel-heading">
              <div class="panel-title">
                <h4>Change Password</h4>
              </div>
            </div>
            <div class="panel-body">
              <form id="passUpdate" class="passForm" action="resources/script.php" method="POST" autocomplete="off">
                <div class="form-group">
                  <input type="password" class="form-control" placeholder="Current Password" name="curpass">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" placeholder="New Password" name="newpass" id="newpass">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" placeholder="Confirm New Password" name="conpass">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control hidden" placeholder="Email" name="email" value="<?php echo $_SESSION['email'];?>">
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <p id="message" style="color: red"></p>
                  </div>
                  <div class="col-md-6">
                    <div class="pull-right">
                      <button type="submit" class="btn btn-primary findOut" name="passupdate">Update Password</button>
                    </div>
                  </div>
                </div>
              </form>
            </div><!--panel Body -->
          </div><!--panel -->
        </div><!--close panel for password change -->
        <div class="col-md-6">
          <div class="panel panel-default">
            <div class="panel-heading">
              <div class="panel-title">
                <h4>Delete Account</h4>
              </div>
            </div>
            <div class="panel-body">
              <div class="text-center" id="apply">
                <button type="submit" class="btn btn-primary delBtn">Delete Account</button>
              </div>
              <form id="delAcct" class="regForm" action="../resources/script.php" autocomplete="off" method="POST">
                <div class="form-group">
                  <p id="delmessage" style="color: red"></p>
                </div>
                <div class="form-group">
                  <label for="email">Enter email to confirm</label>
                  <input type="email" class="form-control email" placeholder  ="Enter email to confirm" name="email">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control hidden" placeholder="Email" name="cmail" value="<?php echo $_SESSION['email'];?>">
                </div>
                <button type="submit" class="btn btn-primary delBtn" name="delAcct">Proceed</button>
                <button type="button" class="btn btn-primary findOut cancel" style="margin-bottom: 0px;">Cancel</button>
              </form>
            </div><!--panel Body -->
          </div><!--panel -->
        </div><!--close panel for closure of account -->
      </div>
    </div>
  </div>
  <div class="col-md-12">
    <?php include 'footer.php'; ?>
  </div>
</div>
