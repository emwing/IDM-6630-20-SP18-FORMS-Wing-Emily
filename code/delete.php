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

        header("Location: index.php");

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
