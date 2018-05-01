<?php

  try {

    // attach working connection to database
    include 'connection.php';
    
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
