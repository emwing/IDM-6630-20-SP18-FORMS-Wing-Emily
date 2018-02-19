<body>
  <div class="pageWrap">
    <header>
      <h1><a href="/IDM-6630-SP-18-FORMS-Wing-Emily/code">Favorite Sites</a></h1>
    </header>

    <div id="formSection">
      <?php

        // detect if the file calling the body is the staging file, then loads in the update form
        // if not, then load the insert form
        if ($file == "stage.php") {
          require "forms/updateForm.php";
        } else {
          require "forms/insertForm.php";
        }

      ?>
    </div>

    <div id="siteList">
      <?php require "siteLists.php"; ?>
    </div>

    <footer>
      <p>&copy;2018 Emily Wing</p>
    </footer>
  </div> <!-- ends .pageWrap -->
</body>
