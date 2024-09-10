<?php

function danati_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'ناحیه کناری سایدبار'),
		'id'            => 'sidebar-1',
		'description'   => __( 'test description' ),
		'before_widget' => '<div class="py-7 mb-5  px-5 border border-lightBorder rounded-lg widget-style ">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="px-3 py-2 font-bold border-b-2 border-b-tag mb-3 ">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'sidebar 2 '),
		'id'            => 'sidebar-2',
		'description'   => __( 'test description' ),
		'before_widget' => '<div class="py-7 mb-5  px-5 border border-lightBorder rounded-lg widget-style ">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="px-3 py-2 font-bold border-b-2 border-b-tag mb-3 ">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'فوتر ۱  '),
		'id'            => 'danati-footer1',
		'description'   => __( 'test description' ),
		'before_widget' => '<div class="p-4   bg-[#EBF4F6] mb-5 rounded-lg   ">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="text-title  dark:text-darkTitle  font-semibold text-lg items-center px-3 border-r-8 border-r-[#F05827]">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => __( 'فوتر ۲  '),
		'id'            => 'danati-footer2',
		'description'   => __( 'test description' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => ' <h4 class="text-title dark:text-lightMain text-xs   md:text-sm border-b border-b-lightBorder dark:border-b-darkBorder py-3 mb-3  ">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => __( 'فوتر ۳  '),
		'id'            => 'danati-footer3',
		'description'   => __( 'test description' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => ' <h4 class="text-title dark:text-lightMain text-xs   md:text-sm border-b border-b-lightBorder dark:border-b-darkBorder py-3 mb-3  ">',
		'after_title'   => '</h4>',
	) );

}
add_action( 'widgets_init', 'danati_widgets_init' );