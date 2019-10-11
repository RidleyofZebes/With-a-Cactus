<?php

	$post_image_id = get_post_thumbnail_id($post_to_use->ID);
		if ($post_image_id) {
			$thumbnail = wp_get_attachment_image_src( $post_image_id, 'large-thumbnail', false);
			if ($thumbnail) (string)$thumbnail = $thumbnail[0];
		} else {
			$thumbnail = get_template_directory_uri() . '/resource/noHeader.jpg';
		}

?>

<article class="post post-blog">
		<img class="post-image" src="<?php echo $thumbnail; ?>">
		<h1 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

		<p>
		<?php the_excerpt()?>
		<a href="<?php the_permalink(); ?>">Read More...</a>
		
		</p>
		
		<p class="post-meta">Posted on <?php the_time('F jS, Y') ?> 
			@ <?php the_time('g:i a') ?> |
			by <a href="<?php get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> |
			Posted in <?php the_category(', '); ?>
			<?php edit_post_link('| Edit');?>
		</p>
	
</article>