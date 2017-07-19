<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

get_header(); ?>
	<header class="entry-header">
		<div class="wrapper">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</div>
	</header><!-- .entry-header -->

	
	<div id="primary" class="wrapper">
		<aside class="col-1-4 side-menu">
			<nav id="site-navigation" class="main-navigation" role="navigation">

				<?php
				wp_nav_menu( array(
				  'menu'          => 'Main Menu',
				  'sub_menu'      => true,
				  'direct_parent' => true
				) ); ?>

			</nav><!-- #site-navigation -->
		</aside>
		<main id="main" class="col-3-4" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
