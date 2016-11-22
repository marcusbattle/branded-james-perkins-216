<div class="block cushion-left-5 cushion-right-5">
	<div class="L W25">
		<h1 class="logo"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/james-perkins-web-logo.png'; ?>" /></a></h1>
	</div>
	<nav class="L W75">
		<?php wp_nav_menu( array( 'menu' => 'Main Menu', 'container' => false, 'menu_class' => 'R' ) ); ?>
		<ul class="R">
			<li><a href="<?php echo home_url(); ?>">Home</a></li>
			<li><a href="<?php echo home_url('/events'); ?>">Events</a></li>
			<li><a href="<?php echo home_url('/forget-tomorrow'); ?>">Forget Tomorrow</a></li>
			<li><a href="<?php echo home_url('/blog'); ?>">Blog</a></li>
			<li><a href="<?php echo home_url('/about'); ?>">About</a></li>
			<li><a href="<?php echo home_url('/contact'); ?>">Contact</a></li>
		</ul>
	</nav>
</div>
