<?php

  $host = "localhost"; /* IP address (for MAMP, use "localhost") */
  $db = "week05"; /* database name */
  $un = "root"; /* username (for MAMP, use "root") */
  $pw = "root"; /* password (for MAMP, use "root") */

  try {
    $conn = new PDO("mysql:host=;dbname=$db", $un, $pw);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  } catch(PDOException $e) {

    echo "Connection Failed: " . $e->getMessage();
    exit();

  }

?>
