<!DOCTYPE html>
<html <?php language_attributes(); ?>>

	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width">
		<meta http-equiv="X-Clacks-Overhead" content="GNU Terry Pratchett" />
		<title><?php bloginfo('name'); ?></title>
		<?php wp_head(); ?>
		
		<!-- Parallax Background Script -->
		
			<script>        
				function onLoad() {
					window.onscroll = function() {
						var speed = -2.5;
						document.body.style.backgroundPosition = (-window.pageXOffset / speed) + "px " + (-window.pageYOffset / speed) + "px";
					}     
				}
			</script>
			
		<!-- Slide-Out Menu Script-->
			<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
			<script> 
			$(document).ready(function(){
				$("#showMenu").toggle(function(){
					$("#theMenu").animate({right: 0});
				}, function() {
					$("#theMenu").animate({right: -260});
				});
				
				$("#showMenu").toggle(function(){
					$("#theBody").animate({right: 250});					
				}, function() {
					$("#theBody").animate({right: 0});
				});	
				
				$('#showMenu').toggle(function() {
					$(this).css("animation", "menuOpen 0.8s forwards");
				}, function() {
					$(this).css("animation", "menuClose 0.8s forwards");
				  });
			});
			</script>
		
	</head>
	
<body id="theBody" <?php body_class(); ?>  onload="onLoad()">

	<!-- Sliding Menu -->
		<div id="showMenu" class="hamburgerMenu"><img src=" <?php echo get_template_directory_uri() . '/resource/menu.png'; ?> "></div>
		<div id="theMenu" class="slidingMenu">
			<img class="sideMenu-logo" src="<?php echo get_template_directory_uri() . '/resource/sitelogo.png'; ?>">
			<h1 class="menuHead">Menu</h1>
			
			<?php get_sidebar(); ?>		
			
			<div class="sidebarLogin"><a href="<?php echo wp_login_url(); ?>">Login</a></div>
		</div>

	<div class="container">

		<!-- site-header -->
		<header class="site-header">
			<div class="site-logo">
				<a href="<?php echo home_url(); ?>"><img class="site-logo" src="<?php echo get_template_directory_uri() . '/resource/sitelogo.png'; ?>"></a>
			</div>
			<div class="site-title">
				<a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
			</div>
			<div class="site-social">
				<img  class="site-social" src="<?php echo get_template_directory_uri() . '/resource/socialButton.png'; ?>">
				<img  class="site-social" src="<?php echo get_template_directory_uri() . '/resource/socialButton.png'; ?>">
				<img  class="site-social" src="<?php echo get_template_directory_uri() . '/resource/socialButton.png'; ?>">
				<img  class="site-social" src="<?php echo get_template_directory_uri() . '/resource/socialButton.png'; ?>">
			</div>
			<div class="tagline">
					<?php 
						/* RANDOM TEXT GOES HERE */
						$randomfile = file(get_template_directory_uri() . "/resource/random.txt");
						$random = $randomfile[array_rand($randomfile)];
						echo $random;
					?>
			</div>

		</header>
		<!-- /site-header -->