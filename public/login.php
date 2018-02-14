<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php require_once("../includes/validation_functions.php"); ?>

<?php
$username = "";

if (isset($_POST['submit'])) {
  // Process the form
  
  // validations
  $required_fields = array("username", "password");
  validate_presences($required_fields);
  
  if (empty($errors)) {
    // Attempt Login

		$username = $_POST["username"];
		$password = $_POST["password"];
		
		$found_admin = attempt_login($username, $password);

    if ($found_admin) {
      // Success
			// Mark user as logged in
			$_SESSION["admin_id"] = $found_admin["id"];
			$_SESSION["username"] = $found_admin["username"];
      redirect_to("admin.php");
    } else {
      // Failure
      $_SESSION["message"] = "Username/password not found.";
    }
  }
} else {
  // This is probably a GET request
  
} // end: if (isset($_POST['submit']))

?>

<?php $layout_context = "admin"; ?>
<?php include("../includes/layouts/header.php"); ?>
<div id="main">
<div class="row">
  <div class="col-md-6 col-md-offset-3"> 
<!-- <div id="main"> -->
     

               <?php echo message(); ?>
               <?php echo form_errors($errors); ?>
      
      <form action="login.php" method="post" class="form-group" >
        <h2 class="lead">Please sign in</h2>

       <label for="username" >Username</label>
        <input type="text" name="username" class="form-control" placeholder="username"value="<?php echo htmlentities($username); ?>" required autofocus >
        <hr>
         <label for="password" >Password</label>
        <input type="password"   name="password"class="form-control" placeholder="Password" required>
        <hr>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me">Remember me</label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit" value="Submit">Sign in</button>
      </form>
   
 </div>
</div>
</div>
   <?php include("../includes/layouts/footer.php"); ?>
