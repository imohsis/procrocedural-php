<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php confirm_logged_in(); ?>

<?php $layout_context = "admin"; ?>
<?php include("../includes/layouts/header.php"); ?>

<div id="main">



  <div class="row">
     <div class="col-md-12">
       <div class="jumbotron">
       <div class="container text-center">
       <h1>Welcome to Gifted Hands</h1>
       <p class="lead center">Thank you <?php echo htmlentities(ucfirst($_SESSION["username"])); ?> for Your Contribution to the growth of this Project</p>
       <p><a  class="btn btn-lg btn-primary"  href="#" ><?php echo htmlentities(ucfirst($_SESSION["username"])); ?>  &raquo;</a></p>
         </div>
      
     </div>
   </div>
   </div>
  <div class="row">
     <div class="col-md-6 col-md-offset-5">   
     <h1> <a  class="btn btn-lg btn-primary"  href="manage_content.php">Manage Website Content</a></h1>
     <h1> <a  class="btn btn-lg btn-success" href="manage_admins.php">Manage Admin Users</a></h1>
      <h1><a  class="btn btn-lg btn-warning" href="logout.php">Logout</a></h1>
  
    </div>
    </div>
  
 </div>

<?php include("../includes/layouts/footer.php"); ?>
