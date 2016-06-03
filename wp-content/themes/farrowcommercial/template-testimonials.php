<?php 
/************
*	Template Name: Testimonials
*
************/
?>

<?php get_header(); ?>
</header>

<?php while ( have_posts() ) : the_post(); ?>

	<div class="content wrap">

		<div class="sidebar_left">
			<div class="sidebar_image">
				<?php if ( get_field('sidebar_image') ): ?>
					<img src="<?php echo get_field('sidebar_image'); ?>">
				<?php endif; ?>
			</div>
			<div class="sidebar_content">
				<p><?php echo get_field('sidebar_content'); ?></p>
			</div>
		</div>

		<div class="content_right">
			<div class="banner_image">
				<?php if ( get_field('banner_image') ): ?>
					<img src="<?php echo get_field('banner_image'); ?>">
				<?php endif; ?>
			</div>
			<div class="the_content">
				<?php the_content(); ?>
				<?php if( have_rows('testimonials') ): ?>
					<div class="testimonials">
						<?php while ( have_rows('testimonials') ) : the_row(); ?>
							<div class="testimonial">
								<?php echo get_sub_field('testimonial_text'); ?>
								<p><strong><?php echo get_sub_field('testimonial_author'); ?></strong></p>
							</div>
							<hr>
						<?php endwhile; ?>
					</div>
				<?php endif; ?>
			</div>
		</div>

	</div>

	<?php if (have_rows('testimonials_icons')): ?>
		<div class="testimonial_icons wrap">
			<?php while (have_rows('testimonials_icons')): the_row(); ?>
				<div class="testimonials_icon">
					<img src="<?php echo get_sub_field('testimonials_icon'); ?>" alt="<?php echo get_sub_field('testimonials_icon'); ?>">
				</div>
			<?php endwhile; ?>
		</div>
	<?php endif; ?>

<?php endwhile; ?>

<?php get_footer(); ?>