<?php
/**
 * Template Name: About Page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

get_header(); ?>
	<header class="entry-header" style="background: linear-gradient(rgba(0, 138, 175, 0.6), rgba(0, 138, 175, 0.6)),url(<?php the_post_thumbnail_url(); ?> ); background-size: cover; background-position: center;">
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

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<main id="main" class="col-3-4" role="main">
			<?php the_content(); ?>

			<a href="<?php the_field('button_link'); ?>"><button class="btn"><?php the_field('button_text'); ?></button></a>
		</main><!-- #main -->
		
		<?php endwhile; endif; ?>
			 			
	</div><!-- #primary -->

<?php

get_footer();
