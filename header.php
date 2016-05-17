
<head> 
	 <meta charset="utf-8">
	<title>Biergilde Groningen</title>
	<meta name="description" content="Bierbrouwen en meer">
	<meta name="author" content="Pablo">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/bootstrap.css">
	<link rel="stylesheet" href="<?php echo bloginfo('template_url')?>/css/styles.css";>
	
</head>
<header>
	<div class="container">
		
			<img class="img-responsive" src="<?php echo bloginfo('template_url')?>/img/pexels-photo-27431.jpg">
		
		
		<div id="mainnavigation"> 
			<?php 
				wp_nav_menu(
					array(
						'menu'            => 'Main Navigation',
						'container'       => 'div',
						'container_class' => 'menu-{menu slug}-container',
						'container_id'    => 'cssmenu',
						'menu_class'      => 'menu',
						'menu_id'         => '',
						'echo'            => true,
						'before'          => '',
						'after'           => '',
						'link_before'     => '',
						'link_after'      => '',
						'items_wrap'      => '<ul>%3$s</ul>',
						'walker'          => new CSS_Menu_Maker_Walker()
						)
					);
			?>
		<div>

	</div>
</header> <!-- Header End -->
