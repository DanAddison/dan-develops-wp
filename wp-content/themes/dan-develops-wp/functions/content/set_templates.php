<?php

/**
* Specify template file per post type
*/
// add_filter( 'single_template', function() {

// 	global $post;

// 	if ( $post->post_type == 'cpt1' ) {
// 		return get_template_directory() . '/single-cpt1.php';
// 	} elseif ( $post->post_type == 'cpt2') {
// 		return get_template_directory() . '/single-cpt2.php';
// 	} elseif (
// 		$post->post_type == 'post'
// 		|| $post->post_type == 'example'
// 	) {
// 		return get_template_directory() . '/single.php';
// 	} else {
// 		return get_template_directory() . '/index.php';
// 	}
// });