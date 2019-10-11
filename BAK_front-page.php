<?php 
get_header();

if (have_posts()) : 
	while (have_posts()) : the_post(); ?>
					
		<p><?php the_content(); ?></p>

	<?php endwhile; 
	
	else: 
		echo '<p>Sorry, no posts matched your criteria.</p>';
	
	endif;
	
	// Latest Video Post
	$latestVideoPost = new WP_Query('cat=7&posts_per_page=1');
	
	if ($latestVideoPost->have_posts()) : 
	while ($latestVideoPost->have_posts()) : $latestVideoPost->the_post(); ?>
					
		<p><?php the_content(); ?></p>

	<?php endwhile; 
	
	else: 
		echo '<p>Sorry, no posts matched your criteria.</p>';
	
	endif;
	wp_reset_postdata();
	
get_footer();

?>