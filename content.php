


<?php
$image = get_the_post_thumbnail( $post->ID, '' );

?><img src="<?php echo $image; ?>" class="img-responsive"/>

<?php
 the_title();
 the_content();
