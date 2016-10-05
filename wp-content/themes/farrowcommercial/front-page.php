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
					
					<h2>About</h2>


					<p>At assum altera blandit ius, movet impedit noluisse, qui veritus eloquentiam instructior te. Id vocibus menandri pri. Justo causae repudiare sea ex, mel no movet sonet, at mel graecis menandri. Et mei tempor possim.</p>

					<p>luptatum, vim an facete accumsan dissentiunt. Solet legimus mei ex, ut his forensibus reprehendunt. Dolore fastidii molestiae ius an, ne habeo tation efficiendi est, ei eum essent necessitatibus.</p>

				</div>

				<div class="right-about col-md-6" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri() . '/assets/images/callout_services.jpg'; ?>"></div>

			</div>

			<div class="info-bar">
					
				<div class="row">
					
					<div class="info-bar-box col-md-3">

						<div class="info-bar-box-content">
							<h2>2003</h2>
							<p>Year<br> Established</p>
						</div>

					</div>

					<div class="info-bar-box col-md-3">

						<div class="info-bar-box-content">
							<h2>183</h2>
							<p>Projects<br> Completed</p>
						</div>

					</div>

					<div class="info-bar-box col-md-3">

						<div class="info-bar-box-content">
							<h2>72</h2>
							<p>Happy<br> Clients</p>
						</div>

					</div>

					<div class="info-bar-box col-md-3">

						<div class="info-bar-box-content">
							<h2>23</h2>
							<p>Awards<br> Won</p>
						</div>

					</div>

				</div>
				
			</div>

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
					
					<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3121.9123997492056!2d-122.78830868441138!3d38.51273117713073!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80843e94d5967be9%3A0x2697adf9ed48488d!2s416+Aviation+Blvd%2C+Santa+Rosa%2C+CA+95403!5e0!3m2!1sen!2sus!4v1475358935292" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe> -->

				</div>

				<div class="contact-info row">
					
					<div class="form-box col-md-6">
						
						<h2>Inquiries</h2>

						<p>For any inquiries, questions or commendations, please call: <a href="tel:7075910225">707-591-0225</a> or fill out the following form.</p>

						<form action="">
							
							<p><input class="form-control" type="text" placeholder="Name"></p>
							<p><input class="form-control" type="text" placeholder="Email"></p>
							<p><input class="form-control" type="text" placeholder="Phone"></p>
							<p><textarea class="form-control" name="message" rows="7" placeholder="Message"></textarea></p>
							<p><button class="btn btn-success pull-right">Send Message</button></p>

						</form>

					</div>

					<div class="col-md-6">
						
						<h2>Office</h2>

						<h3>Address</h3>
						<p>416 Aviation Blvd, Ste. A<br>
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