<?php 
/************
*	Template Name: Left Contact
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

					<div class="the_content">

						<div class="map" style="height: 500px">

							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3122.1369850134456!2d-122.76090548403606!3d38.507551477432585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80843f28db6d880d%3A0x646edd24858ac67b!2s100+Wikiup+Dr%2C+Santa+Rosa%2C+CA+95403!5e0!3m2!1sen!2sus!4v1491172236123" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>

						</div>

						<div class="contact-info row">

							<div class="form-box col-md-6">

								<h2>Inquiries</h2>

								<p>For any inquiries, questions or commendations, please call: <a href="tel:7075910225">707-591-0225</a> or fill out the following form.</p>

								<?php echo do_shortcode('[contact-form-7 id="411" title="Contact form 1"]'); ?>

							</div>

							<div class="col-md-6">

								<h2>Office</h2>

								<h3>Address</h3>
								<p>100 Wikiup Drive<br> Santa Rosa, CA 95403</p>

								<h3>Phone</h3>
								<p><a href="tel:7075910225">707-591-0225</a></p>

								<h3>Email</h3>
								<p><a href="mailto:john@farrowcommercial.com">John@FarrowCommercial.com</a></p>

							</div>

						</div>

					</div>

				</div>

			</div>

		</div>

	<?php endwhile; ?>

</div>

<?php get_footer(); ?>