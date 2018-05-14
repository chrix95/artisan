<?php

  try {

    // attach working connection to database
    require 'connection.php';

    if (isset($_POST['submitReg'])) {

      // collect posted data
      $surname = htmlentities(strip_tags(trim($_POST['surname'])));
      $othername = htmlentities(strip_tags(trim($_POST['othername'])));
      $email = htmlentities(strip_tags(trim($_POST['email'])));
      $phone = htmlentities(strip_tags(trim($_POST['phone'])));
      $password = htmlentities(strip_tags(trim($_POST['password'])));
      $state = htmlentities(strip_tags(trim($_POST['state'])));
      $city = htmlentities(strip_tags(trim($_POST['city'])));
      $address = htmlentities(strip_tags(trim($_POST['address'])));
      $username = '';
      $category = '';
      $image = '';

      // Confirm if email already exist
      $check_email = $conn->prepare("SELECT * from users WHERE email=:email");
      $check_email->bindParam(":email", $email);
      $check_email->execute();
      $email_count = $check_email->rowCount();

      if ($email_count == 0 ) {

        // Confirm if phone number already exist
        $check_phone = $conn->prepare("SELECT * from users WHERE phone=:phone");
        $check_phone->bindParam(":phone", $phone);
        $check_phone->execute();
        $phone_count = $check_phone->rowCount();

        if ($phone_count == 0) {

          // hash password using password_hash
          $hash_password = password_hash($password, PASSWORD_DEFAULT);

          // insert record into database
          $store = $conn->prepare("INSERT INTO users (surname, othername, email, phone, username, category, image, password, state, city, address, live) VALUES (:surname, :othername, :email, :phone, :username, :category, :image, :password, :state, :city, :address, :live)");
          $store->bindParam(":surname", $surname);
          $store->bindParam(":othername", $othername);
          $store->bindParam(":email", $email);
          $store->bindParam(":phone", $phone);
          $store->bindParam(":username", $username);
          $store->bindParam(":category", $category);
          $store->bindParam(":image", $image);
          $store->bindParam(":password", $hash_password);
          $store->bindParam(":state", $state);
          $store->bindParam(":city", $city);
          $store->bindParam(":address", $address);
          $success = $store->execute();

          if ($success) {

            echo "You are registered successfully";

          } else {

            echo "Server error, try again later";

          }

        } else {

          echo "Phone number already registered";

        }

      } else {

        echo "Email address already exist";

      }

    }

    // Login in form script
    if (isset($_POST['submitLogin'])) {

      $email	= htmlentities(strip_tags(trim($_POST['email'])));
      $password = htmlentities(strip_tags(trim($_POST['password'])));

      // confirm if the email exist
      $query_email = $conn->prepare("SELECT * FROM users WHERE email =:email");
      $query_email->bindParam(":email", $email);
      $query_email->execute();
      $check_email_exist = $query_email->rowCount();

      if ($check_email_exist == 1) {

        $get_details = $query_email->fetch(PDO::FETCH_OBJ);
        $retrieved_password = $get_details->password;

        $check_password = password_verify($password, $retrieved_password);

        if ($check_password) {

          session_start();
          $_SESSION['email'] = $email;
          $_SESSION['details'] = $get_details;

          echo "Login Successful. Please wait...";

        } else {

          echo "Password incorrect";

        }

      } else {

        echo "Sorry, email doesnt exist";
      }

    }

    // contact us form script processor
    if (isset($_POST['sendMessage'])) {
      // collect posted data
      $name = htmlentities(strip_tags(trim($_POST['name'])));
      $email = htmlentities(strip_tags(trim($_POST['email'])));
      $message = htmlentities(strip_tags(trim($_POST['message'])));

      $to = $email;
      $subject = 'New Client Alert!!!';
      $from = "noreply@artisans.com";
      $body = "Hi, \n\n
             Kindly attentd the this message as a new client alert has been received.
             The details are: \n\n
             Name: " . $name ." \n\n
             Email: " . $email ." \n\n
             Message: " . $message . " \n\n
             Please ensure that clients are treated with high quality measures.";

      $success = mail($to, $subject, $body , 'noreply@vote.com');

      if ($success) {
        echo "Message has been sent.";
      } else {
        echo "Server error, try again later";
      }

    }

    // password upadte script for logged users
    if (isset($_POST['passupdate'])) {
      // get details from form
      $email	= htmlentities(strip_tags(trim($_POST['email'])));
      $curpassword = htmlentities(strip_tags(trim($_POST['curpass'])));
      $newpassword = htmlentities(strip_tags(trim($_POST['newpass'])));

      // confirm if the email exist
      $query_email = $conn->prepare("SELECT * FROM users WHERE email=:email");
      $query_email->bindParam(":email", $email);
      $query_email->execute();
      // fetch password
      $get_details = $query_email->fetch(PDO::FETCH_OBJ);
      $retrieved_password = $get_details->password;

      $check_password = password_verify($curpassword, $retrieved_password);
      // once current password has been confirmed
      if ($check_password) {

        // hash new password and update record
        $hashPassord = password_hash($newpassword, PASSWORD_DEFAULT);
        $update_password = $conn->prepare("UPDATE users SET password=:password WHERE email=:email");
        $update_password->bindParam(":password", $hashPassord);
        $update_password->bindParam(":email", $email);
        $success = $update_password->execute();

        // on success of password hashing and upadting
        if ($success) {

          echo "Password changed successfully";

        } else {

          echo "Password change failed";

        }

      } else {

        echo "Current password incorrect";

      }

    }

    // Account closure script
    if (isset($_POST['delAcct'])) {
      // get details from form
      $email = htmlentities(strip_tags(trim($_POST['email'])));
      $cmail = htmlentities(strip_tags(trim($_POST['cmail'])));

      // confirms if email provided matches the accounts email
      if ($email == $cmail) { // if the email matches
        // send details for account closure
        $delAcct = $conn->prepare("DELETE FROM users WHERE email=:email");
        $delAcct->bindParam(":email", $email);
        $success = $delAcct->execute();

        // once the deletion process has been carried out
        if ($success) {
          echo "Account closure confirmed";
        } else {
          echo "Failed to close account";
        }

      } else { // if email doesn't matches
        echo "Incorrect email provided";
      }

    }

    // profile update script for logged in users
    if (isset($_POST['updateprof'])) {
      // get details from form
      $username	= htmlentities(strip_tags(trim($_POST['username'])));
      $category = htmlentities(strip_tags(trim($_POST['category'])));
      $email = htmlentities(strip_tags(trim($_POST['email'])));

      // confirm if the username has been used
      $query_username = $conn->prepare("SELECT * FROM users WHERE username=:username");
      $query_username->bindParam(":username", $username);
      $query_username->execute();
      $verify_username = $query_username->rowCount();

      if ($verify_username == 0) {

        // update new profile records
        $update_profile= $conn->prepare("UPDATE users SET username=:username, category=:category, live=:live WHERE email=:email");
        $update_profile->bindParam(":username", $username);
        $update_profile->bindParam(":category", $category);
        $update_profile->bindValue(":live", 1); // sets the a value for artisan visibility on search
        $update_profile->bindParam(":email", $email);
        $success = $update_profile->execute();
        // on success of password hashing and upadting
        if ($success) {

          echo "Profile updated successfully";

        } else {

          echo "Profile update failed";

        }

      } else {

        echo "Username already exist";

      }

    }

    // forgot password script
    if (isset($_POST['submitReset'])) {

		  $email = htmlentities(strip_tags(trim($_POST['email'])));
      $phone = htmlentities(strip_tags(trim($_POST['phone'])));

			$query_email = $conn->prepare("SELECT * FROM users WHERE email =:email");
			$query_email->bindParam(":email", $email);
			$query_email->execute();
			$check_email_exist = $query_email->rowCount();

	    if ($check_email_exist == 1) {

        $query_phone = $conn->prepare("SELECT * FROM users WHERE phone =:phone");
  			$query_phone->bindParam(":phone", $phone);
  			$query_phone->execute();
  			$check_phone_exist = $query_phone->rowCount();

        if ($check_phone_exist == 1) {

          $random_password = rand(10000000000,99999999999);

          $password = password_hash($random_password, PASSWORD_DEFAULT);

          $update_password = $conn->prepare("UPDATE users SET password=:password WHERE email =:email");
          $update_password->bindParam(":password", $password);
          $update_password->bindParam(":email", $email);
          $update_password->execute();

          // send mail to email address
          $to = $email;
           $subject = 'Artisan Forget Password';
           $body = "Hi " .$email. ",\n\n
                   We all forget our password most time, it's no big deal.\n\n
                   Your new login details are: \n\n
                   Email: " . $email ."\n\n
                   Password: " . $random_password . "\n\n
                   Please log in with the details provided. And do not reply this mail." ;

           mail($to, $subject, $body , 'noreply@artisan.com');

          echo "Recovery Password has been sent to email";

        } else {

          echo "Phone number matches no record";

        }

			} else {

				echo "Email matches no record";
			}

		}

    // check of the search button is clicked
    if (isset($_POST['find'])) {
      // get form details
      $category = htmlentities(strip_tags(trim($_POST['category'])));
      $state = htmlentities(strip_tags(trim($_POST['state'])));
      $city = htmlentities(strip_tags(trim($_POST['city'])));

      // prepare sql query for processing
      $query_db = $conn->prepare("SELECT * FROM users WHERE category=:category AND state=:state AND city=:city AND live=:live");
      $query_db->bindParam(":category", $category);
      $query_db->bindParam(":state", $state);
      $query_db->bindParam(":city", $city);
      $query_db->bindValue(":live", 1);
      $query_db->execute();
      // get the number of rows availbele for selected category and location
      $count = $query_db->rowCount();

      if ($count > 0) {

        $get_artisans = $query_db->fetch(PDO::FETCH_OBJ);
        json_encode($get_artisans);

      } else {

        // no result returned
        echo "No result found";

      }

    }

  } catch (Exception $e) {

    echo "Problem somewhere". $e->getMessage();

  }

 ?>
