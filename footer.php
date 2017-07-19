<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="wrapper">
			<div class="pull-left">
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
				</nav><!-- #site-navigation -->
				
				<nav class="utility-nav"><?php wp_nav_menu(array('theme_location'=>'menu-2', 'menu_id'=>'utility-menu')); ?></nav>
			</div>
			<div class="pull-right">
				<p class="copyright">Copyright <?php echo get_bloginfo(); ?> &copy; <?php echo date('Y'); ?></p>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
