<div class="sidebar">
	<nav class="site-nav sideMenu">
		<h1>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'primary-nav'
			) );
			?>
		</h1>
	</nav>
	<div class="widgets">
		<?php
			dynamic_sidebar('sidebar1'); 
		?>
	</div>
</div>