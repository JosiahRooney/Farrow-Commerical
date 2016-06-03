<?php get_header(); ?>
</header>

<?php while ( have_posts() ) : the_post(); ?>
<div class="content wrap">
	<?php the_content(); ?>
</div>
<?php endwhile; ?>

<?php get_footer(); ?>