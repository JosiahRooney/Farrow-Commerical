<?php 
/************
*	Template Name: News Media
************/
?>

<?php get_header(); ?>

	</header>

	<?php while ( have_posts() ) : the_post(); ?>
		
		<div class="content container">

			<h1><?php the_title(); ?></h1>
		
			<?php the_content(); ?>

			<div class="media_posts">
				
				<?php

				if ( have_rows('news_media_posting') ):

				    while ( have_rows('news_media_posting') ) : the_row(); 

					$md_title = get_sub_field('title');
					$md_link = get_sub_field('link');
					$md_caption = get_sub_field('caption');
					$md_image = get_sub_field('image');
					$md_source = get_sub_field('source');

				?>

						<div class="media_post well row">

							<?php if ( $md_image ): ?>
							
							<div class="media_post_img col-md-3">

								<a href="<?php echo $md_link; ?>"><img class="img-fluid img-thumbnail" src="<?php echo $md_image; ?>" alt="<?php echo $md_title; ?>"></a>

							</div>

							<div class="media_post_body col-md-9">

							<?php else:?>

							<div class="media_post_body col-md-12">	

							<?php endif; ?>

							
								
								<div class="media_post_title">
									
									<h3><a href="<?php echo $md_link; ?>"><?php echo $md_title; ?></a></h3>

									<small>Source: <a href="<?php echo $md_link; ?>"><?php echo $md_source; ?></a></small>

								</div>

								<div class="media_post_caption">
									
									<p><?php echo $md_caption; ?></p>

								</div>

							</div>

						</div>

					<?php endwhile;

				endif;

				?>

			</div>
		
		</div>

	<?php endwhile; ?>

<?php get_footer(); ?>