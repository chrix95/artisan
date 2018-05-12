<?php


try{

session_start();

$email = $_SESSION['email'];

if ($_FILES['file']['size'] > 0) {
  // if file submitted is greater than 0 it will run
  if ($_FILES['file']['size'] <= 253000000 ) {
    // if file submitted is less than 2.5mb it will run
    if (move_uploaded_file($_FILES['file']['tmp_name'], "userprof/".$_FILES['file']['name'])) {
      // file uploaded
      // checks to upload to file to our image folder
      // using javascript to return result to page
      $file_name = "userprof/".$_FILES['file']['name'];

      include '../resources/connection.php';

      $update_image = $conn->prepare("UPDATE users SET image=:image WHERE email=:email");
        $update_image->bindParam(":image", $file_name);
        $update_image->bindParam(":email", $email);
        $update_image->execute();
      $_SESSION['details']->image = $file_name;
      ?>
      <script type="text/javascript">
        // parent.document.getElementById("message").innerHTML = "Successful";
        parent.document.getElementById("file").value = "";
        window.parent.updatepicture("<?php echo 'userprof/'.$_FILES['file']["name"]; ?>");
      </script>
      <?php
    } else {
      // the upload failed
      ?>
      <script type="text/javascript">
        parent.document.getElementById("message").innerHTML = "There was an error uploading your image. Please try again later.";
      </script>
      <?php
    }

  } else {
    // the file is to large
    ?>
    <script type="text/javascript">
      $('#message').innerHTML = "Your file is large than 5mb";
    </script>
    <?php
  }

}

} catch(Exception $e){

  echo "Problem Somewhere ". $e->getMessage();
}

 ?>
