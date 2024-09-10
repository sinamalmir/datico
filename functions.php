<?php


//add_action('زمانی که یک پست منتشر شد' ,'یک فانکشن');

function add_theme_scripts()
{
    wp_enqueue_style('font',get_template_directory_uri().'/src/css/font.css',array(),false,'all');
    wp_enqueue_style('swiper',get_template_directory_uri().'/src/css/swiper-bundle.min.css',array(),false,'all');
    wp_enqueue_style('select-img' ,get_template_directory_uri().'/src/css/image_select_metafield.css',array(),false,'all');
    wp_enqueue_style('tailwind',get_template_directory_uri().'/public/build/tailwind.css' , array() ,false ,'all');
    wp_enqueue_style( 'style-main', get_template_directory_uri().'/src/css/style.css' ,array() ,false ,'all' );
    wp_enqueue_style( 'style', get_stylesheet_uri() ,array() ,false ,'all' );



    wp_enqueue_script('jq' , get_template_directory_uri(). '/src/js/jquery-3.7.1.min.js' , array(),false,true );
    wp_enqueue_script('swiper-js' , get_template_directory_uri() .'/src/js/swiper-bundle.min.js' , array('jquery') ,
        false , true );
    wp_enqueue_script('main-js' , get_template_directory_uri().'/src/js/main.js', array('jquery') ,  false ,true );
    wp_enqueue_script('img-select' , get_template_directory_uri() . '/src/js/img-select.js', array('jquery') , false,
        true);

}

add_action('wp_enqueue_scripts' , 'add_theme_scripts');

include_once 'inc/theme_setup.php';
include_once 'inc/Breadcrumb.php';
include_once 'inc/PostView.php';
include_once 'inc/ReadEstimateTime.php';
include_once 'partialas/single/table-of-content.php';
include_once 'inc/TimeModify.php';
include_once 'inc/HotPostWidget.php';
include_once 'elementor/danati-elementor.php';

function custom_excerpt_length()
{
    return 20;
}

add_filter('excerpt_length' , 'custom_excerpt_length',999);
//add_filter( 'get_image_tag_class', '__return_empty_string' );
function new_excerpt_more( $more ) {
	return '';
}
add_filter('excerpt_more', 'new_excerpt_more');




/**
 * Add a sidebar.
 */
include_once 'inc/widgets/all-widgets.php';
include_once 'theme-options/setting.php';




