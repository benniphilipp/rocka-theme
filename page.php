<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package Wordpress
 * @subpackage Rocka
 * @since rocka 1.0
 */
get_header(); ?>

<div class="container">
	<div class="row">
		<div class="pagewrapper pagewrapper--sbright<?php // echo esc_attr( $at_blogsidebar ); ?>">
			<div class="site-content" role="main">
				<?php
					// Start the Loop.
				while ( have_posts() ) : the_post();

					?><article id="post-<?php the_ID(); ?>" <?php post_class(''); ?>><?php

					if ( has_post_thumbnail() ) :

					?><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
							<img class="img-responsive" src="<?php the_post_thumbnail_url(); ?>" />
						</a><?php

					endif;

					/*
					 * Include the post format-specific template for the content. If you want to
					 * use this in a child theme, then include a file called content-___.php
					 * (where ___ is the post format) and that will be used instead.
					 */

					the_title();
					the_content();

					?></article>
				<?php	endwhile; ?>
			</div><!--/.content -->
			<?php// get_sidebar();?>
		</div><!--/.pagewrapper-->
	</div><!--/.row-->
</div><!--/.container-fluid-->
<?php
get_footer();
