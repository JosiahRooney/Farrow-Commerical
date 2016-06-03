<div class="footer wrap">
	<div class="fineprint">
		<div class="fineprint_links">
		</div>
		<div class="fineprint_text">
			&copy; 2016 Farrow Commercial, inc. All Rights Reserved.
		</div>
	</div>
	<?php if( have_rows('social_media','option') ): ?>

		<div class="social_links">

			<?php while ( have_rows('social_media','option') ) : the_row(); ?>

				<a href="<?php echo get_sub_field('social_channel_link'); ?>" target="_blank"><img src="<?php echo get_sub_field('social_channel_icon'); ?>"></a>

			<?php endwhile; ?>

		</div>

	<?php endif; ?>
</div>

<?php wp_footer(); ?>

</body>
</html>