<!DOCTYPE html>
<?php
	session_start();
?>
<html>
	<head>
		<title>AgroAuction</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
		<link href="layout/styles/login.css" rel="stylesheet">
		<script> var __adobewebfontsappname__="dreamweaver" </script>
		<script src="http://use.edgefonts.net/montserrat:n4:default;source-sans-pro:n2:default.js" type="text/javascript"></script>
		<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700" rel="stylesheet" type="text/css">
	</head>
	<body id="top">
	<!-- ################################################################################################ -->
	<!-- ################################################################################################ -->
	<!-- ################################################################################################ -->
	<!-- Top Background Image Wrapper -->
	<div class="row100 bgded" style="background-image:url('images/demo/01.png');">
	  <div class="wrapper row1 overlay"> 
		<!-- ################################################################################################ -->
		<!-- ################################################################################################ -->
		<!-- ################################################################################################ -->
		<header id="header" class="clear"> 
		  <!-- ################################################################################################ -->
		  <div id="logo" class="fl_left">
			<h1><a href="index.php">AgroAuction</a></h1>
		  </div>
			<?php 
				switch ($_SESSION['user_type'])
				{
				  case 1:
					
					break;

				  default:
			?>
					<nav id="mainav" class="fl_right">
					<ul class="clear">
					  <li class="active"><a href="index.html">Home</a></li>
					  <li><a class="drop" href="#">Pages</a>
						<ul>
						  <li><a href="pages/gallery.html">Gallery</a></li>
						  <li><a href="pages/full-width.html">Full Width</a></li>
						  <li><a href="pages/sidebar-left.html">Sidebar Left</a></li>
						  <li><a href="pages/sidebar-right.html">Sidebar Right</a></li>
						  <li><a href="pages/basic-grid.html">Basic Grid</a></li>
						</ul>
					  </li>
					  <li><a class="drop" href="#">Dropdown</a>
						<ul>
						  <li><a href="#">Level 2</a></li>
						  <li><a class="drop" href="#">Level 2 + Drop</a>
							<ul>
							  <li><a href="#">Level 3</a></li>
							  <li><a href="#">Level 3</a></li>
							  <li><a href="#">Level 3</a></li>
							</ul>
						  </li>
						  <li><a href="#">Level 2</a></li>
						</ul>
					  </li>
					  <li><a href="#">Link Text</a></li>
					  <li><a href="#">Link Text</a></li>
					</ul>
				  </nav>
			<?php
					break;
				}
			?>
		  
		  <!-- ################################################################################################ -->
		</header>