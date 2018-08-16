
<?php
/**
 * The Sidebar containing the main widget area
 *
 * @package Wordpress
 * @subpackage Rocka
 * @since rocka 1.0
 */
?>
<div id="secondary">
	<?php
		$description = get_bloginfo( 'description', 'display' );
	if ( ! empty( $description ) ) :
	?>
	<h2 class="site-description"><?php echo esc_html( $description ); ?></h2>
	<?php endif; ?>

	<?php if ( has_nav_menu( 'secondary' ) ) : ?>
	<nav role="navigation" class="navigation site-navigation secondary-navigation">
		<?php wp_nav_menu( array( 'theme_location' => 'secondary' ) ); ?>
	</nav>
	<?php endif; ?>

	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
	<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div><!-- #primary-sidebar -->
	<?php endif; ?>
</div><!-- #secondary -->

<div class="sidebar-module sidebar-module-inset">
	<h4>Über</h4>
	<p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
</div>
<div class="sidebar-module">
	<h4>Archives</h4>
	<ol class="list-unstyled">
		<li><a href="#">März 2014</a></li>
		<li><a href="#">Februar 2014</a></li>
		<li><a href="#">Januar 2014</a></li>
		<li><a href="#">Dezember 2013</a></li>
		<li><a href="#">November 2013</a></li>
		<li><a href="#">Oktober 2013</a></li>
		<li><a href="#">September 2013</a></li>
		<li><a href="#">August 2013</a></li>
		<li><a href="#">Juli 2013</a></li>
		<li><a href="#">Juni 2013</a></li>
		<li><a href="#">Mai 2013</a></li>
		<li><a href="#">April 2013</a></li>
	</ol>
</div>
<div class="sidebar-module">
	<h4>Woanders</h4>
	<ol class="list-unstyled">
		<li><a href="#">GitHub</a></li>
		<li><a href="#">Twitter</a></li>
		<li><a href="#">Facebook</a></li>
	</ol>
</div>
