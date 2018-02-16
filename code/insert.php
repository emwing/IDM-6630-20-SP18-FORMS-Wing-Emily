<!DOCTYPE html>
<html lang="en">
  <?php
    require "inc/head.php";
  ?>

  <body>

    <?php
      require "inc/conn.php";
      include "inc/headerNav.php";

      try {
        // recreate "Storm" in hero table
        $query = "INSERT INTO hero (name) VALUES ('Storm')"; // "INSERT INTO table (column) VALUES(' $_REQUEST["forminputname"]')";

          // code to secure form
          // $statement = $conn->prepare($query); // input is converted to a string; prevents malicious coode from being immediately run
          // $statement->bindParam(":name", $_REQUEST['heroName']); // connect string back into $query
          // $statement->execute(); // run the cleaned $query

        $conn->exec($query);

        $queryInsert = "SELECT * FROM hero";
        foreach ($conn->query($queryInsert) as $val) {
          echo "<h1>" . $val["name"] . "</h1>"; }
          // header("Location: index.php"); // use this to auto-redirect back to index page after query succeeds (this only works if nothing is echoed before it (no echos in conn or this file ahead of this command))
      } catch (PDOException $e) {
        echo "Insert Failed: " . $e->getMessage();
        $conn = null;
        exit();
      }
    ?>

    <footer>
      <p>&copy;2018 Emily Wing</p>
    </footer>

  </body>
</html>
