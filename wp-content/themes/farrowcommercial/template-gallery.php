<?php 
/************
*	Template Name: Gallery
*
************/
?>

<?php get_header(); ?>
</header>

<?php while ( have_posts() ) : the_post(); ?>

	<div class="content">
		<div class="the_content container">
			<?php the_content(); ?>

			<?php if (have_rows('gallery')): ?>
				<div class="gallery_container row">
					<?php while (have_rows('gallery')): the_row(); ?>

						<h3><?php echo get_sub_field('region_name'); ?></h3>

						<?php if (have_rows('region_gallery')): ?>
							<?php while (have_rows('region_gallery')): the_row(); ?>

								<?php
								$location = get_sub_field('gallery_location');
								$loc_string = strtolower($location);
								$loc_string = str_replace(' ', '_', $loc_string);
								?>

								<h4 class="cf"><?php echo $location; ?></h4>

								<div class="cf">

									<?php if (have_rows('gallery_images')): ?>
										<?php while (have_rows('gallery_images')): the_row(); ?>
											<div class="gallery_image col-md-3">
												<a class="fancybox" rel="<?php echo $loc_string; ?>" href="<?php echo get_sub_field('gallery_image'); ?>"><img src="<?php echo get_sub_field('gallery_image'); ?>"></a>
											</div>
										<?php endwhile; ?>
									<?php endif; ?>
								
								</div>

							<?php endwhile; ?>
						<?php endif; ?>
					<?php endwhile; ?>
				</div>
			<?php endif; ?>
		</div>
	</div>

</div>

<?php endwhile; ?>

<?php get_footer(); ?>