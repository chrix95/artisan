<?php
  include 'header.php';
  include 'sideMenu.php';

  // updates the user's session information
  require '../resources/connection.php';
  $email = $_SESSION['email'];
  $query_email = $conn->prepare("SELECT * FROM users WHERE email =:email");
  $query_email->bindParam(":email", $email);
  $query_email->execute();
  $get_details = $query_email->fetch(PDO::FETCH_OBJ);
  $_SESSION['details'] = $get_details;
?>

<!-- script for the image form -->
<script type="text/javascript">
	function updatepicture(image){
		parent.document.getElementById("image").src = image;
	}

</script>

<div class="main-area">

  <div class="firstSection">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-offset-3 col-md-6">
          <div class="panel panel-default">
            <div class="panel-heading">
              <div class="panel-title">
                <h4>Personal Profile</h4>
              </div>
            </div>
            <div class="panel-body">

              <!-- other content -->
          		<?php
          			require '../resources/connection.php';

          			$email = $_SESSION['email'];

          			$get_image = $conn->prepare("SELECT * FROM users WHERE email=:email");
          				$get_image->bindParam(":email", $email);
          			$get_image->execute();

          			$get_image = $get_image->fetch(PDO::FETCH_OBJ);
          				$image = $get_image->image;

          				// checks if image field is empty
          			if ($image == '') {

          		 ?>

          		<br>
              <div class="alert alert-danger" role="alert" id="message">
                No Image Uploaded yet. Please Choose one below.
             </div>

          		<img src="" style="max-height: 240px; max-width: 260px; max-height: 300px" id="" />

          		<form id="formUpload" action="upload.php" method="post" enctype="multipart/form-data" target="iframe">

          			<div class="row">

          				<div class="col-xs-12 col-sm-6 col-md-6">
          					<input type="file" id="file" name="file"><br>
          				</div>

          				<div class="col-xs-12 col-sm-6 col-md-6">
          					<input type="submit" id="submit" name="submit" value="Upload">
          				</div>

          			</div>

          		</form>

          		<iframe style="display: none;" name="iframe"></iframe>

          		<?php
          	} else {

          		 ?>
          		 <img src="" class="img img-responsive center-block" style="max-height: 220px; max-width: 240px; max-height: 300px" id="" /><br>

               <div class="alert alert-success" role="alert" id="success">
                 Image Uploaded successfully.
              </div>

           		<iframe style="display: none;" name="iframe"></iframe>

           		<form id="formUpload" action="upload.php" method="post" enctype="multipart/form-data" target="iframe">

           			<div class="row">

           				<div class="col-xs-12 col-sm-6 col-md-6">
           					<input type="file" id="file" name="file"><br>
           				</div>

           				<div class="col-xs-12 col-sm-6 col-md-6">
           					<input type="submit" id="submit" name="submit" value="Upload">
           				</div>

           			</div>

           		</form>

          		<?php } ?>

              <?php
                if ($_SESSION['details']->username != '') {
              ?>
              <form class="profileForm" action="resources/script.php" method="POST" autocomplete="off">
                <div class="form-group">
                  <input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo $_SESSION['details']->username?>" disabled>
                </div>
                <div class="form-group">
                  <select class="form-control" name="category">
                    <option selected disabled id="category2"><?php echo $_SESSION['details']->category?></option>
                  </select>
                </div>
              </form>
              <?php
            } else {
              ?>
              <form id="profileForm" class="profileForm" action="resources/script.php" method="POST" autocomplete="off">
                <div class="form-group">
                  <input type="text" class="form-control" name="username" placeholder="Username" id="username1">
                </div>
                <div class="form-group">
                  <select class="form-control" name="category" id="category1">
                    <option selected disabled>Select</option>
                    <?php include 'category.html'; ?>
                  </select>
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
                      <button type="submit" class="btn btn-primary findOut" name="updateprof">Updated</button>
                    </div>
                  </div>
                </div>
              </form>

              <form id="profileconfirmed" class="profileForm" action="resources/script.php" method="POST" autocomplete="off">
                <div class="form-group">
                  <input type="text" class="form-control" name="username" placeholder="Username" id="username2" disabled>
                </div>
                <div class="form-group">
                  <select class="form-control" name="category">
                    <option selected disabled id="category2"></option>
                  </select>
                </div>
              </form>
              <?php
                }
               ?>

            </div><!--panel Body -->
          </div><!--panel -->
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-12">
    <?php include 'footer.php'; ?>
  </div>
  <script type="text/javascript">
    $('#category1').change(function(e){
      var category = this.value;
      $('#category2').text(category);
    });

    $('#username1').change(function(e){
      var username = this.value;
      $('#username2').val(username);
    });
  </script>
</div>
