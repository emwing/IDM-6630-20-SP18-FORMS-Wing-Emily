<!DOCTYPE html>
<html lang="en">
  <?php
    require "inc/head.php";
  ?>

  <body>

    <?php

      require "inc/conn.php";
      include "inc/headerNav.php";

    ?>

    <form action="insert.php" method="post">

      <input type="text" name="heroName" placeholder="Name">
      <input type="submit" value="Update">

    </form>

    <?php

      $query = "SELECT * FROM hero ORDER BY id DESC";

      foreach ($conn->query($query) as $val) {
        echo "<h2>" . $val["name"] . "</h2>";

        echo
          "<form action='delete.php' method='post'>

              <input type='hidden' name='heroID' value='" . $val['id'] . "'>
              <input type='submit' value='Delete'>

            </form>";

        echo
          "<form action='delete.php' method='post'>

              <input type='hidden' name='heroID' value='" . $val['id'] . "'>
              <input type='submit' value='Delete'>

            </form>";
      }

    ?>

    <footer>
      <p>&copy;2018 Emily Wing</p>
    </footer>

  </body>
</html>
