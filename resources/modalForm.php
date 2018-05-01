
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
        <div id="modalSelect" class="row">
          <div class="col-xs-6 col-md-6 text-center">
            <button type="button" name="button" id="login" class="btn btn-primary findOut">
              <img src="assets/img/icons/59.png" alt="" class="img-responsive center-block" width="35%"/>
              <h3>
                Login
              </h3>
            </button>
          </div>
          <div class="col-xs-6 col-md-6 text-center">
            <button type="button" name="button" id="register" class="btn btn-primary findOut">
              <img src="assets/img/icons/79.png" alt="" class="img-responsive center-block" width="35%"/>
              <h3>
                Register
              </h3>
            </button>
          </div>
        </div>
        <form id="artisanReg" class="regForm" action="resources/script.php" method="POST" autocomplete="off">
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
                <button type="button" class="btn findOut" id="back2">Back</button>
              </div>
            </div>
          </div>
        </form>
        <form id="artisanLogin" class="regForm" action="resources/script.php" method="POST" autocomplete="off">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label class="control-label">Email or Phone</label>
                <input type="text" class="form-control" placeholder="Email or Phone" name="email">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label class="control-label">Password</label>
                <input type="password" id="loginPassword" class="form-control" placeholder="Password" name="password">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <p id="message" style="color: red"></p>
            </div>
            <div class="col-md-6">
              <div class="pull-right">
                <button type="submit" name="submitLogin" class="btn findOut">Login</button>
                <button type="button" class="btn findOut" id="back1">Back</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
