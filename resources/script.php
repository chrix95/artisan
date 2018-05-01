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

    }

    // contact us form information processor
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
