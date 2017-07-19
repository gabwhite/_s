<?php
/**
 * Template Name: Home Page Template
 * Template Description: This is the homepage template
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

get_header(); ?>

	<!-- this is a header -->
	<header class="entry-header" style="background: url(<?php the_post_thumbnail_url(); ?> ); background-size: cover; background-position: center;">
		<div class="wrapper">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			<h1><?php the_field('header_intro_sentence'); ?></h1>

			<a href="<?php the_field('header_link');?>"> <?php the_field('header_cta_text'); ?></a>
		</div>
	</header><!-- .entry-header -->
	

	<!-- Section 1: Services Intro -->
	<section id="primary" class="content-area">
		<main id="main" class="site-full" role="main">
			<div class="wrapper">
				<?php while(has_sub_field('services_repeater')): ?>	
					<div class="col-1 col-md-1-3">
						
						<!-- Naming the icon -->
						<?php $service_thumb = get_sub_field('service_icon'); ?>
					
						<div class="icon-thumbnail">
							<img src="<?php echo $service_thumb;?> " alt="">
						</div>

						<h3> <?php the_sub_field('service_name'); ?></h3>

						<p> <?php the_sub_field('service_description'); ?></p>
						
						<a href="<?php the_sub_field('call_to_action_link'); ?>"><button class="btn"><?php the_sub_field('call_to_action_text'); ?></button></a>
					</div>
				<?php endwhile ?>

				<?// php -->
				// while ( have_posts() ) : the_post();

				// 	get_template_part( 'template-parts/content', 'page' );


					// If comments are open or we have at least one comment, load up the comment template.
					// if ( comments_open() || get_comments_number() ) :
					
					// 	comments_template();
					// endif;

				// endwhile; // End of the loop.
				?>
			</div>
		</main><!-- #main -->
	</section><!-- #primary -->

	<!-- Section 2: About -->
	<section class="content-area">
		<main class="site-full" role="main">
			<div class="col-1 col-md-1-2">
				<img src="<?php the_field('about_image'); ?> " alt="">
			</div>
			<div class="col-1 col-md-1-2">
				<?php the_field('about_text'); ?>
			</div>
		</main>
	</section>

	<!-- Section 3 - Testimonials -->
	<section class="content-area">
		<main class="site-full" role="main">
			<?php while(has_sub_field('testimonials_repeater')): ?>	
				<div class="col-1 clear">
					<!-- Naming the photo -->
					<?php $client_thumb = get_sub_field('testimonial_image'); ?>
					
					<div class="col-1 col-md-1-4">
						<div class="icon-thumbnail">
							<img src="<?php echo $client_thumb;?> " alt="">
						</div>
					</div>
					<div class="col-1 col-md-3-4">
						<p> <?php the_sub_field('testimonial_text'); ?></p>
						
						<h4><?php the_sub_field('testimonial_author'); ?></h4>
					</div>
				</div>
			<?php endwhile ?>
		</main>
	</section>
	
	<!-- Section 4 - Contact form -->
	<section class="content-area">
		<main class="site-full">
			<div class="wrapper">
				<h2 class="section-title"><?php the_field('contact_form_header'); ?></h2>

				<h4 class="section-description"><?php the_field('contact_form_description') ?></h4>

				<?php the_field('contact_form_shortcode'); ?>
			</div>
		</main>
	</section>
<?php
get_footer();
