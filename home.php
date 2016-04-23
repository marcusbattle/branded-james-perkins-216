<?php get_header(); ?>
	<div id="stage">
		<header>
			<?php get_template_part( 'views/header' ); ?>
		</header>
		<section id="home-hero">
			<div class="inner MT1" class="block">
				<a href="<?php echo home_url('/forget-tomorrow'); ?>" class="button blue sticker stick-right-25 stick-bottom-25" style="z-index: 3;" >Live Again</a>
				<div class="sticker stick-top-25 stick-left-50"  style="z-index: 2;" >
					<h3>Hi. I’m James,<br />
						a <strong>professional counselor</strong>.<br />
						I help people find their identity.
					</h3>
				</div>
				<img class="sticker stick-left-10 stick-bottom shrink" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/james-speaking-green-sweater.png'; ?>"  style="z-index: 1;"  />
				<img class="sticker stick-right-10 stick-bottom shrink" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/jumbo-logo-bg.png'; ?>" style="z-index: 0;" />
			</div>
		</section>
		<section id="home-forget-tomorrow" class="cushion-top-5">
			<div class="inner align-center cushion-left-5 cushion-right-5">
				<h2>Forget Tomorrow&trade;</h2>
				<p>Lost identity creates unwanted cycles. When you notice that you’re repeating the same mistakes, it’s time to forget about tomorrow and face what happened in your past.</p>
				<a href="<?php echo home_url('/forget-tomorrow'); ?>" class="button see-through white">Face Fear</a>
			</div>
		</section>
		<section id="home-conference">
			<div class="W50 L cushion-left-5 cushion-right-10 cushion-top-5">
				<h1>Listen<br />To<br />Your<br />Life</h1>
				<h4>Conference</h4>
				<span class="divider"></span>
				<h2 class="compact">May 7th 2016</h2>
				<h4>Saturday 9AM-4PM</h4>
				<span class="divider"></span>
				<p>Overflow Cafe (Auditorium)<br />1550 S State St • Chicago, IL </p>
				<a href="<?php echo home_url('/events'); ?>" class="button white">Learn More</a>
			</div>
			<div class="W50 L cushion-left-5 cushion-right-10 cushion-top-10 align-right">
				<h3>"Life is lived forward, but best understood looking backward. Forget tomorrow and live today!"</h3>
			</div>
		</section>
		<footer>
			<div class="W50 L cushion-left-5">
				<p>&copy; 2016 James Perkins. All Rights Reserved.</p>
				<a href='https://go.jamesperkins.help/optin_box/x7ssb8ykq5hlhxzx' data-delay='8000' data-exit='false'><img src=""></a><script src='https://app.clickfunnels.com/assets/cfpop.js' type='text/javascript'></script>
			</div>
			<div class="W50 L align-right cushion-right-10">
				<p>Branded by Battle Branding</p>
			</div>
		</footer>
	</div>
<?php get_footer(); ?>
