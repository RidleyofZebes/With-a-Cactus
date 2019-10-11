<?php 
get_header();

if (have_posts()) : 
	while (have_posts()) : the_post(); ?>
	

<?php

	$post_image_id = get_post_thumbnail_id($post_to_use->ID);
		if ($post_image_id) {
			$thumbnail = wp_get_attachment_image_src( $post_image_id, 'post-thumbnail', false);
			if ($thumbnail) (string)$thumbnail = $thumbnail[0];
		} else {
			$thumbnail = get_template_directory_uri() . '/resource/noHeader.jpg';
		}

?>
	
	<article class="post single">
		<div class="banner-image" style="background: url(' <?php echo $thumbnail; ?> '); background-size: cover;">
			<div class="banner-title">
				<?php echo the_title(); ?>
			</div>
					
			<div class="banner-meta">
				Posted on <?php echo the_time('F jS, Y') ?>
			</div>	
		</div>
		
		<p><?php the_content(); ?></p>
		
		<p class="post-info">Posted on <?php the_time('F jS, Y') ?> 
			@ <?php the_time('g:i a') ?> |
			by <a href="<?php get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> |
			Posted in <?php the_category(', '); ?>
			<?php edit_post_link('| Edit');?>
		</p>
		
	</article>
	
	<?php comments_template(); ?>
	
	<?php endwhile; 
	
	else: 
		echo '<p>Sorry, no posts matched your criteria.</p>';
	
	endif;

get_footer();

?>