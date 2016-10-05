<?php 
/************
*	Template Name: Left Contact
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
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3121.9131627978245!2d-122.78831518466092!3d38.512713579631736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80843e94d5943347%3A0x4b1660c1d27d24a0!2s416+Aviation+Blvd%2C+Santa+Rosa%2C+CA+95403!5e0!3m2!1sen!2sus!4v1464998148361" width="800" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
			<div class="the_content">
				<?php the_content(); ?>
			</div>
		</div>

	</div>

<?php endwhile; ?>

<?php get_footer(); ?>