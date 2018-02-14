<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php confirm_logged_in(); ?>

<?php
  $admin_set = find_all_admins();
?>

<?php $layout_context = "admin"; ?>
<?php include("../includes/layouts/header.php"); ?>
<div id="main">
 <!--  <div id="navigation">
		<br />
		<a href="admin.php"><p class="text-center">&laquo; Main menu</p></a><br />
  </div> -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
    <?php echo message(); ?>
    <h2>Manage Admins</h2>
    <table class="table">
      <tr>
        <th style="text-align: left; width: 200px;">Username</th>
        <th colspan="2" style="text-align: left;">Actions</th>
      </tr>
    <?php while($admin = mysqli_fetch_assoc($admin_set)) { ?>
      <tr>
        <td class="lead" ><?php echo htmlentities(ucwords($admin["username"])); ?></td>
        <td><a class="btn btn-info" href="edit_admin.php?id=<?php echo urlencode($admin["id"]); ?>">Edit</a></td>
        <td><a class="btn btn-danger" href="delete_admin.php?id=<?php echo urlencode($admin["id"]); ?>" onclick="return confirm('Are you sure?');">Delete</a></td>
      </tr>
    <?php } ?>
    </table>
    <br />
   

    <a href="new_admin.php"  class="btn btn-success btn-lg " ><p class="text-center">Add new admin</p></a>
    <a href="admin.php" class="btn btn-warning btn-lg "><p class="text-center">&laquo; Main menu</p></a>
   </div> 
  
</div>
</div>
</div>

<?php include("../includes/layouts/footer.php"); ?>
