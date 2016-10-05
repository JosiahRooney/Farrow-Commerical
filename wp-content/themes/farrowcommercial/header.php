<?php global $post; $slug = $post->post_name; $page_body = $slug . '-body' ;?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title>Farrow Commercial, inc.</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>

</head>
<body <?php body_class($page_body); ?>>

	<div class="site-wrap">

		<header class="primary-header" data-parallax="scroll" data-image-src="<?php 
			if ($slug == 'home') { 
				echo get_field('splash_image');
			} else {
				echo get_template_directory_uri() . '/assets/images/banner_dark.jpg';
			}; ?>" >
			
			<div class="header container">

				<div class="branding col-md-1">
					<img src="<?php echo get_template_directory_uri() . '/assets/images/logo_letter.png'; ?>" alt="">
				</div>

				<div class="navigation col-md-11">

					<h1><img class="mobile-logo" src="<?php echo get_template_directory_uri() . '/assets/images/logo_letter.png'; ?>" alt=""> <?php echo bloginfo('name'); ?> <span class="phone pull-right"><a href="tel:7075910225">707-591-0225</a></span></h1>

					<?php wp_nav_menu( array( 'theme_location' => 'main_menu' ) ); ?>

				</div>
			
			</div>