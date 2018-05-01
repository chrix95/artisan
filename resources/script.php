<?php

  try {

    // attach working connection to database
    include 'connection.php';

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

      // Confirm if email already exist
      $check_email = $conn->prepare("SELECT * from registration WHERE email=:email");
      $check_email->bindParam(":email", $email);
      $check_email->execute();
      $email_count = $check_email->rowCount();

      if ($email_count == 0 ) {

        // Confirm if phone number already exist
        $check_phone = $conn->prepare("SELECT * from registration WHERE phone=:phone");
        $check_phone->bindParam(":phone", $phone);
        $check_phone->execute();
        $phone_count = $check_phone->rowCount();

        if ($phone_count == 0) {

          // hash password using password_hash
          $hash_password = password_hash($password, PASSWORD_DEFAULT);

          // insert record into database
          $store = $conn->prepare("INSERT INTO registration (surname, othername, email, phone, password, state, city, address) VALUES (:surname, :othername, :email, :phone, :password, :state, :city, :address)");
          $store->bindParam(":surname", $surname);
          $store->bindParam(":othername", $othername);
          $store->bindParam(":email", $email);
          $store->bindParam(":phone", $phone);
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



  } catch (Exception $e) {

    echo "Problem somewhere". $e->getMessage();

  }

 ?>
