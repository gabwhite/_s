<?php
/**
 * Template Name: Member Bios Page
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
			<div class="board-members">
				
				<?php while(has_sub_field('board_members_repeater')): ?>
					<div class="each-member clear">
						<div class="col-1-4">
							<a href="<?php the_sub_field('member_photo'); ?> "><img class="member-photo" src="<?php the_sub_field('member_photo'); ?> " alt="<?php the_field('member_name'); ?> "></a>
						</div>

						<div class="col-3-4">
							<h3><?php the_sub_field('member_name'); ?></h3>
							<p><?php the_sub_field('member_bio', 30); ?></p>
							<p><?php echo custom_field_excerpt_longer(); ?></p>
						</div>
					</div>
				<?php endwhile; ?>	

			</div>

		</main><!-- #main -->
		
		<?php endwhile; endif; ?>
			 			
	</div><!-- #primary -->

<?php

get_footer();
