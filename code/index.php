<!DOCTYPE html>
<html lang="en">
  <?php
    require "inc/head.php";
  ?>

  <body>

    <?php
      require "inc/conn.php";
      include "inc/headerNav.php";

      // show the hero's name as it appears in the hero table
      $query = "SELECT * FROM hero";
      foreach ($conn->query($query) as $val) {
        echo "<h1>" . $val["name"] . "</h1>";
      } // ends foreach

      // create the forms that will affect the information
      $queryID = "SELECT * FROM hero ORDER BY id DESC";
      foreach ($conn->query($queryID) as $val) {

        // update form
        echo
          "<form action='update.php' method='post'>
            <input type='hidden' name='heroID' value='" . $val['id'] . "'>
            <input type='submit' value='Update'>
          </form>";

        // delete form
        echo
          "<form action='delete.php' method='post'>
            <input type='hidden' name='heroID' value='" . $val['id'] . "'>
            <input type='submit' value='Delete'>
          </form>";
      } // ends foreach by ID
    ?>

    <form action="insert.php" method="post">
      <input type="submit" value="Insert">
    </form>

    <footer>
      <p>&copy;2018 Emily Wing</p>
    </footer>

  </body>
</html>
