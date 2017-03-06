<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

get_header(); ?>
	
	<?php $portfolio = new WP_Query(array(
		'post_type' => 'portfolio', 
		'posts_per_page' => -1
	)); ?><?php //ensure that there is no limit on the number of portfolio posts ?>
	
	<header class="page-header">
		<?php
			the_archive_title( '<h1 class="page-title">', '</h1>' );
			the_archive_description( '<div class="archive-description">', '</div>' );
		?>
	</header><!-- .page-header -->
	
	<div id="primary" class="content-area">
		<main id="main" class="site-full" role="main">

			<?php if($portfolio->have_posts()) while($portfolio->have_posts()) :$portfolio->the_post(); ?>
				
				<div class = "portfolio-post">
					
					<a href=" <?php the_permalink(); ?> "><?php the_post_thumbnail( $post->ID,'thumbnail'); ?></a>

					<h3 class="h3 portfolio"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
					
					<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><button class="btn"><?php the_title(); ?> </button></a>

				</div> <?php //end of portfolio div ?>
			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
