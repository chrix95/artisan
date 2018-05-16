<!-- request moodal form -->
<!-- genarates an id for each artisan for request purposes -->
<div class="modal fade" id="request<?php echo $username; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-md" role="document">
    <!-- <div class="modal-content"> -->
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">REQUEST ARTISAN</h4>
      </div>
      <div class="modal-body" style="background-color: #fff;">
        <form id="requestForm" class="regForm" action="resources/script.php" method="POST" autocomplete="off">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label class="control-label">Full Name</label>
                <input type="text" class="form-control" placeholder="Full Name" name="name" autofocus="yes">
              </div>
            </div>
            <div class="col-md-6 hidden">
              <div class="form-group">
                <label class="control-label">Username</label>
                <input type="text" class="form-control" placeholder="Username" name="username" value="<?php echo $username; ?>">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="control-label">Phone</label>
                <input type="text" class="form-control" placeholder="Phone" name="phone">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label class="control-label">Address</label>
                <textarea class="form-control" placeholder="Address" name="address" rows="8" cols="80"></textarea>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <!-- this displays errors from the scripting procedures -->
              <p id="message" style="color: red"></p>
            </div>
            <div class="col-md-6">
              <div class="pull-right">
                <button type="submit" name="submitRequest" class="btn findOut">Send Request</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    <!-- </div> -->
  </div>
</div>
