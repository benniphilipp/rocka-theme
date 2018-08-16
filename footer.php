
<div class="container"><?php
	wp_nav_menu( array(
		'menu' => 'footer-bar',
		'menu_class' => '',
		'depth'=> 3,
		'container'=> false,
		'walker'=> new WP_Bootstrap_Navwalker));
	?></div>


<?php wp_footer(); ?>
</body>
</html>
