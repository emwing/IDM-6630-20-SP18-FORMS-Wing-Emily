<?php
  require "conn.php";

  try {
    $query = "DELETE FROM assignment5 WHERE id =:siteID"; // "DELETE FROM table WHERE tablecolumn = " . $_REQUEST["forminputname"];

    // code to secure form
    $statement = $conn->prepare($query); // input is converted to a string; prevents malicious coode from being immediately run
    $statement->bindParam(":siteID", $_REQUEST['siteID']);
    $statement->execute(); // run the cleaned $query

    header("Location: ../index.php"); // use this to auto-redirect back to index page after query succeeds (this only works if nothing is echoed before it (no echos in conn or this file ahead of this command))

  } catch (PDOException $e) {
    echo "Deletion Failed: " . $e->getMessage();
    $conn = null;
    exit();
  }
?>
