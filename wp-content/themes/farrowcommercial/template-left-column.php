<?php 
/************
*	Template Name: Left Column
*
************/
?>

<?php get_header(); ?>

</header>

<div class="interior">

<?php while ( have_posts() ) : the_post(); ?>

	<div class="content container">

		<div class="row">

			<div class="sidebar_left sidebar col-md-3">

				<h3><?php the_title(); ?></h3>

				<div class="sidebar_image" <?php if ( get_field('sidebar_image') ): ?> style="background-image: url('<?php echo get_field('sidebar_image');?>'" <?php endif; ?>></div>
			
				<div class="sidebar_content sidebar_section">
					<p><?php echo get_field('sidebar_content'); ?></p>
				</div>

				<?php if ( is_active_sidebar( 'main_sidebar' ) ) : ?>
					
					<div id="primary-sidebar" class="primary-sidebar widget-area sidebar_section" role="complementary">
					
						<?php dynamic_sidebar( 'main_sidebar' ); ?>
					
					</div>

				<?php endif; ?>
					
					<?php
					if($post->post_parent)
						$children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0");
					else
						$children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");
					if ($children) { ?>

					<div class="sidebar_menu sidebar_section">
						<h3><?php echo get_the_title($post->post_parent); ?></h3>
						<ul>
							<?php echo $children; ?>
						</ul>
					</div>
					<?php } ?>
			
			</div>

			<div class="content_right col-md-9">
				<div class="banner_image">
					<?php if ( get_field('banner_image') ): ?>
						<img src="<?php echo get_field('banner_image'); ?>">
					<?php endif; ?>
				</div>
				<div class="the_content">
					<h1><?php echo get_the_title(); ?></h1>
					<?php the_content(); ?>
				</div>
			</div>

		</div>

	</div>

<?php endwhile; ?>

</div>

<?php get_footer(); ?>