<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php require_once("../includes/validation_functions.php"); ?>
<?php confirm_logged_in(); ?>

<?php
if (isset($_POST['submit'])) {
  // Process the form
  
  // validations
  $required_fields = array("username", "password");
  validate_presences($required_fields);
  
  $fields_with_max_lengths = array("username" => 30);
  validate_max_lengths($fields_with_max_lengths);
  
  if (empty($errors)) {
    // Perform Create

    $username = mysql_prep($_POST["username"]);
    $hashed_password = password_encrypt($_POST["password"]);
    
    $query  = "INSERT INTO admins (";
    $query .= "  username, hashed_password";
    $query .= ") VALUES (";
    $query .= "  '{$username}', '{$hashed_password}'";
    $query .= ")";
    $result = mysqli_query($connection, $query);

    if ($result) {
      // Success
      $_SESSION["message"] = "Admin created.";
      redirect_to("manage_admins.php");
    } else {
      // Failure
      $_SESSION["message"] = "Admin creation failed.";
    }
  }
} else {
  // This is probably a GET request
  
} // end: if (isset($_POST['submit']))

?>

<?php $layout_context = "admin"; ?>
<?php include("../includes/layouts/header.php"); ?>

<div id="main">
<div class="container-fluid">
<div class="row">
  <div class="col-md-6 col-md-offset-3"> 
<!-- <div id="main"> -->
     

               <?php echo message(); ?>
               <?php echo form_errors($errors); ?>
      
      <form action="new_admin.php" method="post" class="form-group" >
        <h2 class="lead">Create New Admin</h2>

       <label for="username" >Username</label>
        <input type="text" name="username" class="form-control " placeholder="username" value="" required autofocus >
        <br>
         <label for="password" >Password</label>
        <input type="password"   name="password" class="form-control" placeholder="Password" required>
        <br>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit" value="Submit">Sign in</button>
      </form>
     <a href="manage_admins.php" class="btn btn-warning btn-lg btn-block">Cancel</a>
 </div>
</div>
</div>
    <br >
    
    

</div>
<?php include("../includes/layouts/footer.php"); ?>
