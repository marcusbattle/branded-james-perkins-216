<?php
/**
 * Template Name: Blog Page
 */
?>

<?php get_header(); ?>
	<div id="stage">
		<header>
			<?php get_template_part( 'views/header' ); ?>
		</header>
		<section class="blue-banner cushion-top-5 cushion-bottom-5">
			<div class="inner align-center">
				<h1>Blog</h1>
			</div>
		</section>
		<section>
			<div class="inner cushion-left-25 cushion-right-25 cushion-top-5 cushion-bottom-5 block">
				<?php
					global $wp_query;
					$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1; ?>
				<?php $wp_query = new WP_Query( array( 'post_type' => 'post', 'paged' => $paged ) ); ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<div class="post-summary">
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<p><?php the_date(); ?></p>
						<?php the_excerpt(); ?>
						<a class="button small blue" href="<?php the_permalink(); ?>">Read More</a>
					</div>
				<?php endwhile; ?>
					<div class="cushion-top-5 cushion-bottom-5">
						<div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
						<div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>
					</div>
				<?php else : ?>

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
