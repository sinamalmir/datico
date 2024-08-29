<?php

add_action( 'cmb2_admin_init', 'danati_register_theme_options_metabox' );

function danati_register_theme_options_metabox() {

    
    $alloptions = new_cmb2_box( array(
        'id'           => 'danati_option_metabox',
        'title'        => esc_html__( 'تنظیمات قالب', 'danati' ),
        'object_types' => array( 'options-page' ),

    

        'option_key'      => 'danati_options', // The option key and admin menu page slug.
        // 'icon_url'        => 'dashicons-palmtree', // Menu icon. Only applicable if 'parent_slug' is left empty.
        // 'menu_title'      => esc_html__( 'Options', 'danati' ), // Falls back to 'title' (above).

    ) );


    // شروع تنظیمات بخش عمومی
    $general = $alloptions->add_field( array(
        'id'          => 'sina_theme_general_options',
        'type'        => 'group',
        'description' => __( 'Generates reusable form entries', 'cmb2' ),
         'repeatable'  => false, // use false if you want non-repeatable group
        'options'     => array(
            'group_title'       => __( 'عمومی', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
            'sortable'          => true,
             'closed'         => true, // true to have the groups closed by default

        ),
    ) );

    $alloptions -> add_group_field($general, array(
        'name' => ' تصویر لوگو ',
        'id' => 'sina_theme_logo_option',
        'type'=>'file'
    ));

    $alloptions -> add_group_field($general, array(
        'name' => ' تصویر fave_icon ',
        'id' => 'sina_theme_faveIcon_option',
        'type'=>'file'
    ));
    $alloptions -> add_group_field($general, array(
        'name' => 'محدوده عرض محتوای',
        'id' => 'sina_theme_width_container_option',
        'type'=>'text',
        'attributes' => array(
            'placeholder'=> 'مقدار پیش فرض ۱۳۰۰ px است'
        )
    ));
    $alloptions -> add_group_field($general, array(
        'name' => 'رنگ اصلی قالب',
        'id' => 'sina_theme_color_main_option',
        'type'=>'colorpicker',
        'default' => '#135EB9',
        'attributes' => array(
            'data-colorpicker' => json_encode( array(
                // Iris Options set here as values in the 'data-colorpicker' array
                'palettes' => array( '#135EB9', '#0175E6', '#FAFAFA', '#6A7196', ),
            )  ) ),

    ));
    // پایان تنظیمات بخش عمومی


    // تنظیمات بلاگ
    $blog = $alloptions->add_field( array(
        'id'          => 'pishro_blog_options',
        'type'        => 'group',
        'repeatable'  => false, // use false if you want non-repeatable group
        'options'     => array(
            'group_title'       => __( 'تنظیمات وبلاگ ', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
            'sortable'          => false,
            'closed'         => true, // true to have the groups closed by default
            // 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
        ),
    ) );
    $alloptions->add_group_field( $blog, array(
        'name' => 'موقعیت سایدبار',
        'id'   => 'pishro_blog_sidebar_option',
        'type' => 'image_select',
        'default' => 'side-left',
        'options' => array(
            'side-left' => array('title' => 'سایدبار چپ', 'img' =>  get_template_directory_uri().'/assets/img/left-side.png'),
            'side-right' => array('title' => 'سایدبار راست', 'img' =>  get_template_directory_uri().'/assets/img/right-side.png'),
            'full-width' => array('title' => 'بدون سایدبار', 'img' =>  get_template_directory_uri().'/assets/img/full-width.png'),
        ),

    ) );

    $alloptions->add_group_field( $blog, array(
        'name' => 'نمایش یا عدم نمایش مطالب مرتبط',
        'id'   => 'sina_theme_related_post_option',
        'type' => 'toggle',
        'active_value' => true,
        'inactive_value'=> false,
    ) );





//شروع تنظیمات بخش فوتر
    $footer = $alloptions->add_field( array(
        'id'          => 'sina_theme_footer_options',
        'type'        => 'group',
        'repeatable'  => false, // use false if you want non-repeatable group
        'options'     => array(
            'group_title'       => __( 'تنظیمات فوتر ', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row
            // number
            'sortable'          => false,
            'closed'         => true, // true to have the groups closed by default
            // 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
        ),
    ) );
    $alloptions -> add_group_field($footer, array(
        'name' => 'رنگ بخش داخلی فوتر',
        'id' => 'sina_theme_background_footer_option',
        'type'=>'colorpicker',
        'default' => '#F7F9FD',
        'attributes' => array(
            'data-colorpicker' => json_encode( array(
                // Iris Options set here as values in the 'data-colorpicker' array
                'palettes' => array( '#16205B', '#A0A4BC' ),
            )  ) ),

    ));
    $alloptions -> add_group_field($footer, array(
        'name' => 'رنگ متن سرتیترهای فوتر',
        'id' => 'sina_theme_textColor_title_footer_option',
        'type'=>'colorpicker',
        'default' => '#16205B',
        'attributes' => array(
            'data-colorpicker' => json_encode( array(
                // Iris Options set here as values in the 'data-colorpicker' array
                'palettes' => array( '#F7F9FD','#16205B', '#A0A4BC' ),
            )  ) ),

    ));
    $alloptions -> add_group_field($footer, array(
        'name' => 'رنگ متن لینک های فوتر',
        'id' => 'sina_theme_textColor_link_footer_option',
        'type'=>'colorpicker',
        'default' => '#A0A4BC',
        'attributes' => array(
            'data-colorpicker' => json_encode( array(
                // Iris Options set here as values in the 'data-colorpicker' array
                'palettes' => array( '#F7F9FD','#16205B', '#A0A4BC' ),
            )  ) ),

    ));

    $alloptions -> add_group_field($footer, array(
        'name' => 'رنگ متن کپی رایت فوتر',
        'id' => 'sina_theme_copyright_text_footer_option',
        'type'=>'colorpicker',
        'default' => '#B8BCCF',
        'attributes' => array(
            'data-colorpicker' => json_encode( array(
                // Iris Options set here as values in the 'data-colorpicker' array
                'palettes' => array( '#B8BCCF','#16205B', '#A0A4BC' ),
            )  ) ),

    ));
    $alloptions -> add_group_field($footer, array(
        'name' => 'رنگ پس زمینه کپی رایت فوتر',
        'id' => 'sina_theme_copyright_background_footer_option',
        'type'=>'colorpicker',
        'default' => '#F0F4FC',
        'attributes' => array(
            'data-colorpicker' => json_encode( array(
                // Iris Options set here as values in the 'data-colorpicker' array
                'palettes' => array( '#F0F4FC','#16205B', '#A0A4BC' ),
            )  ) ),

    ));
    $alloptions -> add_group_field($footer, array(
        'name' => 'متن کپی رایت',
        'id' => 'sina_theme_copyright_footer_option',
        'type'=>'text',
        'attributes' => array(
            'placeholder'=> 'متن کپی رایت را وارد کنید!'
        )
    ));


}


function danati_get_option( $key = '', $default = false ) {
    if ( function_exists( 'cmb2_get_option' ) ) {
        // Use cmb2_get_option as it passes through some key filters.
        return cmb2_get_option( 'danati_options', $key, $default );
    }

    // Fallback to get_option if CMB2 is not loaded yet.
    $opts = get_option( 'danati_options', $default );

    $val = $default;

    if ( 'all' == $key ) {
        $val = $opts;
    } elseif ( is_array( $opts ) && array_key_exists( $key, $opts ) && false !== $opts[ $key ] ) {
        $val = $opts[ $key ];
    }

    return $val;
}