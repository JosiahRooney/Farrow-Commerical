<?php
global $post;
$slug = $post->post_name;
$page_body = $slug . '-body';

$favicon_url = get_template_directory_uri() . '/assets/images/favicon.ico/';

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title>Farrow Commercial, inc.</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo $favicon_url; ?>/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo $favicon_url; ?>/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo $favicon_url; ?>/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo $favicon_url; ?>/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo $favicon_url; ?>/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo $favicon_url; ?>/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo $favicon_url; ?>/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo $favicon_url; ?>/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $favicon_url; ?>/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo $favicon_url; ?>/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo $favicon_url; ?>/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo $favicon_url; ?>/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo $favicon_url; ?>/favicon-16x16.png">
	<link rel="manifest" href="<?php echo $favicon_url; ?>/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="<?php echo $favicon_url; ?>/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

	<?php wp_head(); ?>

	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-89515564-2', 'auto');
		ga('send', 'pageview');
	</script>

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
					<a href="/"><img src="<?php echo get_template_directory_uri() . '/assets/images/logo_letter.png'; ?>" alt=""></a>
				</div>

				<div class="navigation col-md-11" style="position:relative;">

					<h1><img class="mobile-logo" src="<?php echo get_template_directory_uri() . '/assets/images/logo_letter.png'; ?>" alt=""> <?php echo bloginfo('name'); ?> <span class="phone pull-right"><a href="tel:7075910225">707-591-0225</a></span></h1>

					<p class="license-number">CA License # 822805</p>

					<div class="mobile-button">
						<a href="#" onclick="homepageSlideMenu(); return false;"><i class="fa fa-bars" aria-hidden="true"></i></a>
					</div>

					<?php wp_nav_menu( array( 'theme_location' => 'main_menu' ) ); ?>
          <?php wp_nav_menu( array( 'theme_location' => 'mobile_menu' ) ); ?>

				</div>

			</div>
