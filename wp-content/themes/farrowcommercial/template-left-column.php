<?php 
/************
*	Template Name: Left Column
*
************/
?>

<?php get_header(); ?>
</header>

<?php while ( have_posts() ) : the_post(); ?>

	<div class="content wrap">

		<div class="sidebar_left">
			<div class="sidebar_image" <?php if ( get_field('sidebar_image') ): ?> style="background-image: url('<?php echo get_field('sidebar_image');?>'" <?php endif; ?>></div>
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
			</div>
		</div>

	</div>

<?php endwhile; ?>

<?php get_footer(); ?>