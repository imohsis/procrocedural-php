<?php 
	if (!isset($layout_context)) {
		$layout_context = "public";
	}
?>


<!DOCTYPE html>
<html>

	<head>
	       <meta charset="utf-8">
           <meta http-equiv="X-UA-Compatible" content="IE=edge">
           <meta name="viewport" content="width=device-width, initial-scale=1">
	       
		   <link href="stylesheets/public.css" media="all" rel="stylesheet" type="text/css" />
		   <link rel="stylesheet" type="text/css" href="stylesheets/bootstrap.min.css">


		   <link rel="stylesheet" type="text/css" href="fonts">
		  
		   <title>Gifted Hands <?php if ($layout_context == "admin") { echo "Admin"; } ?></title>
	</head>
	<body>
    <div id="header">
      <h1 class="navbar-brand" >Gifted Hands <?php if ($layout_context == "admin") { echo "Admin"; } ?></h1>
    </div>
<!--  <a class="navbar-brand" href="{{url('/')}}">Manix</a> -->