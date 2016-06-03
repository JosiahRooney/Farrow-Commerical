<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title>Farrow Commercial, inc.</title>

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	<header class="hero">
		<div class="banner">
			<div class="wrap">
				<div class="logo">
					<a href="<?php echo site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png"></a>
				</div>
				<div class="header_right">
					<div class="headline">
						<h3>Making Construction Easy</h3>
					</div>
					<div class="contact">
						<h3><a href="tel:707-591-0225">707-591-0225</a></h3>
					</div>
				</div>
			</div>
		</div>
		<div class="nav wrap">
			<nav>
				<?php wp_nav_menu( array( 'theme_location' => 'main_menu' ) ); ?>
			</nav>
		</div>
