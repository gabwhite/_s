<?php
/**
 * Template Name: Services Page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

get_header(); ?>
	<header class="entry-header" style="background: url(<?php the_post_thumbnail_url(); ?> ); background-size: cover; background-position: center;">
		<div class="wrapper">
			<h1><?php the_field('services_title'); ?></h1>
		</div>
	</header><!-- .entry-header -->
	
	<div id="primary" class="content-area">
		<main id="main" class="site-full" role="main">
			<div class="wrapper">
				<div class="col-1">
					<h2><?php the_field('services_subhead'); ?></h2>
				</div>
				
				<?php while(has_sub_field('services_repeater')): ?>	
					<?php $service_icon = get_sub_field('service_icon'); ?>
					<div class="col-1 clear">
						
						<img src="<?php echo $service_icon; ?> " alt="">
						
						<h3><?php the_sub_field('service_title'); ?> </h3>

						<p><?php the_sub_field('service_description'); ?></p>

						<p><?php the_sub_field('price'); ?></p>

						<a href="<?php the_sub_field('button_link'); ?> "><?php the_sub_field('call_to_action_text'); ?></a>

					</div>
				<?php endwhile ?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
