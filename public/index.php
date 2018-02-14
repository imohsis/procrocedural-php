<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>

<?php $layout_context = "public"; ?>
<?php include("../includes/layouts/header.php"); ?>
<?php find_selected_page(true); ?>

<div id="main">
  <div id="navigation">
     <div class="container-fluid">
		<?php echo public_navigation($current_subject, $current_page); ?>
		</div>
  </div>
  <div id="page"> 
		<?php if ($current_page) { ?>
			<div class="container-fluid">
			<h1><?php echo htmlentities($current_page["menu_name"]); ?></h1>
			<?php echo nl2br(htmlentities($current_page["content"])); ?>
			</div>
		<?php } else { ?>
			<!-- <div class="container-fluid">
			
					<h1>Welcome!</h1>
					</div> -->
			
		<?php }?>
  </div> 
</div>

<?php include("../includes/layouts/footer.php"); ?>


<!-- <div class="container">
	<div class="row">
	
</div>


<div class="row">
	
</div>
</div>
 -->