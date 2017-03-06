<?php
/**
 * Template Name: About Page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

get_header(); ?>
	<header class="entry-header" style="background: url(<?php the_post_thumbnail_url(); ?> ); background-size: cover; background-position: center;">
		<div class="wrapper">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</div>
	</header><!-- .entry-header -->
	
	<div id="primary" class="content-area">
		<main id="main" class="site-full" role="main">
			<div class="wrapper">
				<div class="col-1 col-md-1-4">
					<img src="<?php the_field('profile_image'); ?>" alt="">
				</div>
				<div class="col-1 col-md-3-4">
					<?php the_field('about_page_text'); ?>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
