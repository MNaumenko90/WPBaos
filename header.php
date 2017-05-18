<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet"><!-- 
	<title>Baos Holzhandel</title> -->
	<?php wp_head(); ?>
</head>
<body class="">
<header class="row">
	<div class="column medium-12 small-12 align-center top-bar">
				<address class="">
						<span class="phone">
						<i class="fa fa-mobile" aria-hidden="true"></i>
						+49 (0)1781866696</span>
						<span class="phone">
						<i class="fa fa-phone" aria-hidden="true"></i>
						+49 (0)1781866696</span>
						<span class="email">
						<i class="fa fa-envelope-o" aria-hidden="true"></i>
						info@baosholz.de</span>
				</address>
				<a href="#">Immpressum</a>
	</div>
	<div class="column medium-12 small-12">
	<div class="row">
		<div class="column medium-3 small-4 lg-bg">
			<!-- logo -->
			
			<span class="logo"><?php the_custom_logo(); ?></span>
			
		</div>
		<div class="column medium-6 small-4 align-self-middle">
		<?php 
			wp_nav_menu(array(
			'theme_location' => 'primary', 
			'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>', 
			'menu_class' => 'menu align-center',  
			'depth' => 1
			)
		); ?>
			  <!-- <ul class="menu align-center">
			    <li class="active"><a href="./index.html">STARTSEITE</a></li>
			    <li><a href="#products">PRODUKTE</a></li>
			    <li><a href="#">KONTAKT</a></li>
			  </ul> -->
		</div>
		<div class="column medium-3 small-4 align-self-middle modal">
			<a href="" class="button openModal">
				<i class="fa fa-handshake-o" aria-hidden="true"></i>
			Individuelles Angebot
			</a>
		</div>
		</div>
		</div>
		</header>