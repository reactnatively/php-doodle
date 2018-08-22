<?php

  //
  ob_start();

  //
  try {

    $con = new PDO("mysql:dbname=doodle;host=127.0.0.1", "doodle", "B1@thering!");
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

  }

  catch(PDOException $e) {

    echo "Connection failed: " . $e->getMessage();

  }

?>
