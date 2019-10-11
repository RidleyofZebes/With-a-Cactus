	<footer class="site-footer">
	

		<nav class="site-nav footer">
				<?php
				wp_nav_menu( array(
					'theme_location' => 'footer-nav'
				) );
				?>
		</nav>
		
		<div class="widgets clearfix">
			<?php if (is_active_sidebar('footer1')) : ?>
				<div class="footerWidgetArea">
					<?php dynamic_sidebar('footer1'); ?>
				</div>
			<?php endif; ?>
			
			<?php if (is_active_sidebar('footer2')) : ?>
				<div class="footerWidgetArea">
					<?php dynamic_sidebar('footer2'); ?>
				</div>
			<?php endif; ?>
			
			<?php if (is_active_sidebar('footer3')) : ?>
				<div class="footerWidgetArea">
					<?php dynamic_sidebar('footer3'); ?>
				</div>
			<?php endif; ?>	
		</div>

		<p class="footertext"><?php bloginfo('name'); ?> - &copy; <?php echo date('Y') ?> Joey Honeycutt | <a href="<?php echo wp_login_url(); ?>">Login</a></p>
		
	</footer>

</div><!-- container -->

<?php wp_footer(); ?>
</body>

</html>