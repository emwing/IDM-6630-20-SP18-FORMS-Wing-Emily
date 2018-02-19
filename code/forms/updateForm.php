<h2>Edit the Site Information</h2>
<form action="dbActions/update.php" method="post" id="updateForm">

  <input type="text" name="siteName" value=" <?php echo $siteToUpdate['siteName']; ?> ">
  <input type="text" name="siteURL" value=" <?php echo $siteToUpdate['siteURL']; ?> ">
  <input type="hidden" name="siteID" value=" <?php echo $siteToUpdate['id']; ?> ">
  <input type="submit" value="Update Site" id="updateButton">

</form>
