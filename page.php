<?php 
get_header();

if (have_posts()) : 
	while (have_posts()) : the_post(); ?>
	
	<article class="post page">
		<h1><?php the_title(); ?></h1>								
		<p><?php the_content(); ?></p>
		<h4>Posted on <?php the_time('F jS, Y') ?></h4>
	</article>
	
	<?php endwhile; 
	
	else: 
		echo '<p>Sorry, no posts matched your criteria.</p>';
	
	endif;

get_footer();

?>