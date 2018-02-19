<?php

  $query = "SELECT * FROM assignment5 ORDER BY id DESC";

  foreach ($conn->query($query) as $val) {
    echo "<div class='siteBlocks'>";
      echo "<h3><a href='" . $val['siteURL'] . "' target='_blank'>" . $val['siteName'] . "</a></h3>";
      echo "<h4>" . $val['siteURL'] . "</h4>";

      echo
        "<form action='stage.php' method='post' class='siteForms'>

            <input type='hidden' name='siteID' value='" . $val['id'] . "'>
            <input type='submit' value='Edit' id='editButton' class='siteButtons'>

          </form>";
      echo
        "<form action='dbActions/delete.php' method='post' class='siteForms'>

            <input type='hidden' name='siteID' value='" . $val['id'] . "'>
            <input type='submit' value='Delete' id='deleteButton' class='siteButtons'>

          </form>";
    echo "</div>";
  }

  $conn = null;
?>
