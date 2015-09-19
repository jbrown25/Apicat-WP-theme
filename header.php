<!--header include for APICAT fa13 theme-->

<!DOCTYPE html>
<html>
	<head>
		<title><?php bloginfo('name');?></title>
		<meta name="description" content="<?php bloginfo('description');?>" />
		<meta charset="<?php bloginfo('charset');?>" />
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<!-- Remy Sharp Shim --> 
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> 
		[endif]-->
		<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

		<?php wp_enqueue_script("jquery");?>
		<?php wp_head();?>		
		
		
	</head>
	<body>
		<div id = "wrapper">
			<header id = "main_header">
				<a href = "<?php bloginfo('url'); ?>/index.php" id = "logo"><img src = "<?php bloginfo('stylesheet_directory'); ?>/images/logo.png" alt = "logo" /></a>
				<div id = "menu_button"><img src = "<?php bloginfo('stylesheet_directory'); ?>/images/menu-icon.png" alt = "menu" /></div>
				<?php
				if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Search Bar Widget')) : 
							endif;
							?>
			</header>
				<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?> 
			<div id="body">
<!--end header include-->