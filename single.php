<?php
/**
 * The Template for displaying all single posts
 *
 * @package Wordpress
 * @subpackage Rocka
 * @since rocka 1.0
 */
get_header(); ?>

<div class="container">
	<div class="row">
		<div class="pagewrapper pagewrapper--sbleft<?php // echo esc_attr( $at_blogsidebar ); ?>">
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
					bootstrapwp_posted_on();
					the_content();

					// Previous/next post navigation.
					//If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
					comments_template();
					} ?></article>
				<?php	endwhile; ?>
			</div><!--/.content -->
			<?php get_sidebar();?>
		</div><!--/.pagewrapper-->
	</div><!--/.row-->
</div><!--/.container-fluid-->
<?php
get_footer();
