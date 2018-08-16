<?php
/**
 * The Template for displaying all single posts
 *
 * @package Wordpress
 * @subpackage Rocka
 * @since rocka 1.0
 */
get_header(); ?>

		<div id="content" class="site-content" role="main"><?php
			// Start the Loop.


           the_title();
           the_excerpt();

  				// Previous/next post navigation.
  				//If comments are open or we have at least one comment, load up the comment template.

			  ?></div><!-- #content -->

<?php
//get_sidebar( 'content' );
//get_sidebar();
get_footer();
