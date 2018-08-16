<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Wordpress
 * @subpackage Rocka
 * @since rocka 1.0
 */
get_header(); ?>

<div class="container">

	<div class="ro-pagewrapper ro-pagewrapper--sb-<?php echo esc_attr( $at_blogsidebar ); ?>" role="main">

		<main class="ro-page" role="main">

		<?php


			 	get_template_part('index', 'excerpt');


		?>

		</main><!--/.main-->

 	</div><!--/.content-->

	<?php // get_sidebar( 'content' ); ?>

</div><!--/.container-->

<?php
get_footer();
