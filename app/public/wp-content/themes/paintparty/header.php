<!DOCTYPE html>
<html>
	<head>
		<?php wp_head(); ?>
		
	</head>
	<header>
		
		<?php 
			wp_nav_menu( array(
			'theme_location' => 'primary',
			'menu_class' => 'top_menu',
			'depth' => 2
		)); ?>
	</header>
	<body>
		<h1 ><?php bloginfo('Name'); ?></h1>
		<hr>

