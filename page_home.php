<?php
/**
 * Template Name: Home Page Template
 * Template Description: This is the homepage template
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

get_header(); ?>
	<header class="entry-header home-header" style="background: url(<?php the_post_thumbnail_url(); ?> ); background-size: cover; background-position: center;">
		<div class="wrapper text-center">
			<div class="col-1">
				<div class="intro-text">
					<h1><?php the_field('intro_sentence'); ?></h1>
					<h2><?php the_field('intro_subheading'); ?></h2>
				</div>

				<a href="<?php the_field('call_to_action_button_link');?>"><button class="btn"><?php the_field('call_to_action_button_text'); ?></button>
					</a>
			</div>
		</div>
	</header><!-- .entry-header -->
	

	<!-- Section 1: Mission Statement -->
	<section id="primary" class="content-area mission-statement">
		<main id="main" class="site-full" role="main">
			<div class="wrapper">
				<div class="col-1 text-center">
					<h1><?php the_field("mission_statement_heading"); ?></h1>
					<h4 class="reverse"><?php the_field("mission_statement_subheading"); ?></h4>
				</div>
			</div>
		</main><!-- #main -->
	</section><!-- #primary -->

	<!-- Section 2: Who We Are -->
	<section class="full-bleed content-area">
		<div class="site-full" role="main">
			<div class="row">
				<div class="col-1 col-md-1-3">
					<img class="who-we-are-img" src="<?php the_field('what_we_do_image'); ?> " alt="">
				</div>
				<div class="col-1 col-md-2-3 who-we-are">
					<div class="wrapper">
						<div class="col-1">
							<h1><?php the_field('what_we_do_heading'); ?></h1>
							<h2><?php the_field('what_we_do_subheading'); ?></h2>
							<p><?php the_field('what_we_do_paragraph'); ?></p>

							<a href="<?php the_field('who_we_are_page_link');?>"><button class="btn"><?php the_field('who_we_are_button_text'); ?></button>
								</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Section 3 - Upcoming Events -->
	<section class="content-area events" style="background: linear-gradient(rgba(0, 138, 175, 0.6), rgba(0, 138, 175, 0.6)),url(<?php the_field('upcoming_events_background_image'); ?> ); background-size: cover; background-position: center;">
		<div class="site-full" >
			<div class="wrapper">
				<h1 class="reverse text-center"><?php the_field('upcoming_events_heading'); ?></h1>
				<?php while(has_sub_field('events_repeater')): ?>
					<div class="col-1 col-1-3">
						<div class="event-item">
							<h3><?php the_sub_field('item_title'); ?></h3>

							<p><?php the_sub_field('event_description'); ?></p>
							
							<a href="<?php the_sub_field('page_link'); ?>"><button class="btn"><?php the_sub_field('button_text'); ?></button></a>	
						</div>
					</div>
					
				<?php endwhile; ?>
			</div>
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
			
		</div>
	</section>
	
	<!-- Section 4 - Become a member area -->
	<section class="content-area">
		<main class="site-full">
			<div class="wrapper">
				<h1 class="text-center"><?php the_field('become_a_member_heading'); ?></h1>

				<h4 class="section-description"><?php the_field('become_a_member_description') ?></h4>

				<a href="<?php the_field('button_link'); ?> "><button class="btn">
					<?php the_field('button_text'); ?></a>
				</button>
			</div>
		</main>
	</section>
<?php
get_footer();
