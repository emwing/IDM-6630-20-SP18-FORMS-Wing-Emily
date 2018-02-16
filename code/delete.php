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
        $query = "DELETE FROM hero WHERE id = " . $_REQUEST['heroID']; // "DELETE FROM table WHERE tablecolumn = " . $_REQUEST["forminputname"];
        $conn->exec($query);
        echo "<h1>Deleted</h1>";
        // header("Location: index.php"); // use this to auto-redirect back to index page after query succeeds (this only works if nothing is echoed before it (no echos in conn or this file ahead of this command))

      } catch (PDOException $e) {
        echo "Deletion Failed: " . $e->getMessage();
        $conn = null;
        exit();
      }
    ?>

    <footer>
      <p>&copy;2018 Emily Wing</p>
    </footer>

  </body>
</html>
