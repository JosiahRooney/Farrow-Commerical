<?php get_header(); ?>
	</header>
	
	<div class="main-content">
		
		<div class="callout">
			
			<h2>Making Construction Easy.</h2>

		</div>

		<div class="services container">
			
			<h2>Services</h2>

			<div class="home-boxes row">

				<?php if ( have_rows('home_boxes') ): ?>

					<?php while ( have_rows('home_boxes') ) : the_row();

						$hb_title = get_sub_field('title');
						$hb_link = get_sub_field('page');
						$hb_image = get_sub_field('image');
						$hb_desc = get_sub_field('description', false, false);

					?>
				
						<div class="home-box col-md-4">

							<div class="home-box-content">
								<div class="home-box-image">
									<img src="<?php echo $hb_image; ?>" alt="<?php echo $hb_title; ?>">
								</div>
								<h3><a href="<?php echo $hb_link; ?>"><?php echo $hb_title; ?></a></h3>
								<p><?php echo $hb_desc; ?></p>
							</div>

						</div>

					<?php endwhile; ?>

				<?php endif; ?>

			</div>

		</div> <!-- .services -->


		<div class="about">
			
			<div class="row">

				<div class="left-about col-md-6">
					
					<?php

						$featured_title = get_field('featured_title');
						$featured_text = get_field('featured_text');
						$featured_image = get_field('featured_image');

					?>

					<h2><?php echo $featured_title; ?></h2>

					<div><?php echo $featured_text;?></div>

				</div>

				<div class="right-about col-md-6" data-parallax="scroll" data-image-src="<?php echo $featured_image; ?>"></div>

			</div>

			<div class="info-bar">

				<div class="info-bar-box">

						<h2 class="text-center">1986</h2>
						<p class="text-center">Year Est.</p>

				</div>

			</div> <!-- .info-bar -->

		</div> <!-- .about -->


		<div class="clients">
			
			<div class="container">
				
				<h2>Partners</h2>

				<div class="clients-row row">
					
					<?php if ( have_rows( 'clients' ) ): ?>

						<?php while ( have_rows( 'clients' ) ) : the_row(); ?>
	
							<img class="client-img" src="<?php echo get_sub_field('partner_image'); ?>" alt="Client Image">

						<?php endwhile; ?>

					<?php endif; ?>

				</div>

			</div>

		</div> <!-- .clients -->


		<div class="contact">

			<div class="container">

				<h2>Contact</h2>

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
						<p>100 Wikiup Drive<br>
						Santa Rosa, CA 95403</p>

						<h3>Phone</h3>
						<p><a href="tel:7075910225">707-591-0225</a></p>

						<h3>Email</h3>
						<p><a href="mailto:john@farrowcommercial.com">John@FarrowCommercial.com</a></p>

					</div>

				</div>
			
			</div>

		</div> <!-- .contact -->

	</div>

<?php get_footer(); ?>