<article class="post post-video">
		<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
		<?php the_post_thumbnail('small-thumbnail'); ?>
		<p><?php the_content('Read More...'); ?></p>
		<p class="post-info">Posted on <?php the_time('F jS, Y') ?> 
			@ <?php the_time('g:i a') ?> |
			by <a href="<?php get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> |
			Posted in <?php the_category(', '); ?>
			<?php edit_post_link('| Edit');?>
		</p>
		
</article>