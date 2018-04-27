<?php

  try {

    // declare connection variables
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "artisan";

    // connect to database
    $conn = new PDO("mysql:dbname=$database; host=$host", $user, $password);

    // if ($conn) {
    //   echo "Connected";
    //  } else {
    //    echo "Not Connected";
    //  }

  } catch (Exception $e) {

    echo "Problem Somewhere ". $e->getMessage();

  }


 ?>
