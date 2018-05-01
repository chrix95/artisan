
<!-- main form area -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <a href="index.php">
          <button type="button" class="close"><span aria-hidden="true">&times;</span></button>
        </a>
        <h4 class="modal-title" id="myModalLabel">JOIN US TODAY</h4>
      </div>
      <div class="modal-body">
        <form id="artisanReg" class="regForm" action="resources/script.php" method="POST">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label class="control-label">Surname</label>
                <input type="text" class="form-control" placeholder="Surname" name="surname">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="control-label">Other name</label>
                <input type="text" class="form-control" placeholder="Other name" name="othername">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label class="control-label">Email</label>
                <input type="email" class="form-control" placeholder="Email" name="email">
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
            <div class="col-md-6">
              <div class="form-group">
                <label class="control-label">Password</label>
                <input type="password" id="password" class="form-control" placeholder="Password" name="password">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="control-label">Confirm Password</label>
                <input type="password" class="form-control" placeholder="Confirm Password" name="cpassword">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>State of residence</label>
                <select class="form-control" name="state" id="state">
                    <option selected disabled>Please select</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>City</label>
                <select class="form-control" name="city" id="city">
                  <option selected disabled>Please select</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label class="control-label">Address</label>
                <textarea name="address" rows="5" cols="40" class="form-control" placeholder="Address"></textarea>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <p id="message" style="color: red"></p>
            </div>
            <div class="col-md-6">
              <div class="pull-right">
                <button type="submit" name="submitReg" class="btn findOut">Register</button>
                <button type="button" class="btn findOut" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
