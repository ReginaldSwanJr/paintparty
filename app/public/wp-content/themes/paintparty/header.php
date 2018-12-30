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
		)); ?>
	</header>
	<body>	

