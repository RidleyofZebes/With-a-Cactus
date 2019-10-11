<article class="post post-link">
		<h1 class="post-link"><a href="<?php echo get_the_content(); ?>"><?php the_title(); ?></a></h1>
		<p class="link-meta"><?php the_time('F jS, Y') ?> |
			<a href="<?php get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> |
			Posted in <?php the_category(', '); ?>
			<?php edit_post_link('| Edit');?>
		</p>
		
</article>