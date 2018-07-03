<?php get_header(); ?>
<?php echo get_stylesheet_directory_uri(); ?>
	
	<div class="container">
        

	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							
		<?php get_template_part('template-parts/content', 'page'); ?>
	<?php endwhile; endif; ?>
	
<?php get_footer(); ?>