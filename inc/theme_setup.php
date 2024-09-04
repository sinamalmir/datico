<?php

function theme_setup() {

	add_theme_support('title-tag');
	add_theme_support('automatic-feed-links');
	add_theme_support('post-thumbnails');
	add_image_size('main-content-img' , 170 ,116 ,true);
	add_image_size('video_left_img' , 743 ,743 ,true);

	register_nav_menus(
		array(
			'main-menu' => __( 'جایگاه فهرست اصلی ' ),
			'extra-menu' => __( ' جایگاه فهرست بالای سایت ' )
		)
	);
}

add_action('after_setup_theme', 'theme_setup');

