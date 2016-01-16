<?php get_header(); ?>
	<div id="stage">
		<header>
			<?php get_template_part( 'views/header' ); ?>
		</header>
		<section class="blue-banner cushion-top-5 cushion-bottom-5">
			<div class="inner align-center">
				<h1><?php echo the_title(); ?></h1>
			</div>
		</section>
		<section>
			<div class="inner cushion-left-25 cushion-right-25 cushion-top-5 cushion-bottom-5">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; else : ?>

				<?php endif; ?>
			</div>
		</section>
		<footer>
			<div class="W50 L cushion-left-5">
				<p>&copy; 2016 James Perkins. All Rights Reserved.</p>
			</div>
			<div class="W50 L align-right cushion-right-10">
				<p>Branded by Battle Branding</p>
			</div>
		</footer>
	</div>
<?php get_footer(); ?>
