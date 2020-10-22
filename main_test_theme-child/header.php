<!doctype html>
<html>
	<head>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
		<?php wp_head(); 
		?>
		<title>Jobbrs Theme</title>
	</head>
	<body>
	<header class="header-holder">
						<div class="header-logo">
								<a href="<?php echo home_url() ?>">LOGO</a>
						</div>
						<div class="nav nav-holder">
							<nav class="menu-nav">
								<?php wp_nav_menu(array(
															'theme_location' => 'primary',
															'menu_id'         => 'main-menu'
									)); ?>
							</nav>
						</div>	
	</header>