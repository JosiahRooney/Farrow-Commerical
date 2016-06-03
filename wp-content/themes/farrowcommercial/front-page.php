<?php get_header(); ?>
<div class="hero_slider wrap">
	<ul class="bxslider">
		<li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/bxslider/1.jpg" /></li>
		<li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/bxslider/2.jpg" /></li>
		<li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/bxslider/3.jpg" /></li>
		<li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/bxslider/4.jpg" /></li>
	</ul>
</div>
</header>

<div class="content wrap">
	<div class="callout">
		<h1>Making Construction Easy</h1>
	</div>


	<?php if( have_rows('homepage_grid') ): ?>

		<div class="grid">

			<?php while ( have_rows('homepage_grid') ) : the_row();

			$image = get_sub_field('grid_item_image');
			$header = get_sub_field('grid_item_header');
			$link = get_sub_field('grid_item_link');
			$text = get_sub_field('grid_item_text');

			?><div class="grid_item">

				<div class="grid_image">
					<img src="<?php echo $image; ?>">
				</div>
				
				<div class="grid_text">
					<h3><a href="<?php echo $link; ?>"><?php echo $header; ?></a></h3>
					<p><?php echo $text; ?></p>
				</div>
				
			</div><?php endwhile; ?>

	</div>

<?php endif; ?>

</div>


<?php if( have_rows('footer_partners') ): ?>

	<div class="partners wrap">

		<?php while ( have_rows('footer_partners') ) : the_row(); ?>

			<img src="<?php echo get_sub_field('partner_image'); ?>">

		<?php endwhile; ?>

	</div>

<?php endif; ?>

<?php get_footer(); ?>