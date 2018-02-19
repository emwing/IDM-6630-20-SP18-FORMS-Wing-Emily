<?php

  $file = basename(__FILE__); // sets $file var used in body.php to determine which form to show

  require "dbActions/conn.php"; // create database connection

  $query = "SELECT * FROM assignment5 WHERE id = :siteID"; // query to select information about the site entry to update

  // prepares and executes query based on $_REQUEST data sent by the form
  $statement = $conn->prepare($query);
  $statement->bindParam(":siteID", $_REQUEST['siteID']);
  $statement->execute();

  $siteToUpdate = $statement->fetchAll()[0]; //create variable that contains data about the entry to update

  require "elements/html.php"; // create html elements

?>
