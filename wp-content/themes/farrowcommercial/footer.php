
		<div class="footer">
			
			<footer class="container">

				<div class="row">
				
					<div class="copyright col-md-6">
					
						<p><small>&copy; 2016 Farrow Commercial, Inc. - All Rights Reserved</small></p>

					</div>

					<div class="disclaimer col-md-6">
						
						<p><small><a href="/contact">Contact</a> <a href="/disclaimer">Disclaimer</a> <a href="/privacy">Privacy Policy</a></small></p>

					</div>

				</div>

			</footer>

		</div>

	</div><!-- .site-wrap -->

	<?php wp_footer(); ?>

	<?php if ( $slug == "home" ) { ?>

		<script>

			jQuery(function($) {
				$(document).ready(function(){
					sameHeight($('.left-about'), $('.right-about'));
					$(window).on('resize', function() {
						sameHeight($('.left-about'), $('.right-about'));
					});
				});
			});

		</script>

	<?php }; ?>
	
	<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
</body>
</html>