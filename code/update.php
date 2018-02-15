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

        // $query = "INSERT INTO hero (name) VALUES('" . $REQUEST['heroName'] . "')";
        // $conn->exec($query);

      } catch (PDOException $e) {

        echo "Update Failed: " . $e->getMessage();
        $conn = null;
        exit();

      }

    ?>

    <footer>
      <p>&copy;2018 Emily Wing</p>
    </footer>

  </body>
</html>
