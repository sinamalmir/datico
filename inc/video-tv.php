<?php
add_action( 'cmb2_admin_init', 'cmb2_sample_metaboxes' );
/**
 * Define the metabox and field configurations.
 */
function cmb2_sample_metaboxes() {

    /**
     * Initiate the metabox
     */
    $video = new_cmb2_box( array(
        'id'            => 'video_metabox',
        'title'         => __( 'آپلود ویدیو ', 'cmb2' ),
        'object_types'  => array( 'tv', ), // Post type
        'context'       => 'normal', //or side
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
    ) );


    $video->add_field( array(
        'name'    => 'آپلود ویدیو',
        'desc'    => 'آپلود فایل ویدیویی شما',
        'id'      => 'danati_video_tv',
        'type'    => 'file',
        // Optional:
        'options' => array(
            'url' => true , // Hide the text input for the url
        ),
        'text'    => array(
            'add_upload_file_text' => 'آپلود ویدیو' // Change upload button text. Default: "Add or Upload File"
        ),

        'preview_size' => 'large', // Image size to use when previewing in the admin.
    ) );

    $time = new_cmb2_box( array(
        'id'            => 'video_metabox_time',
        'title'         => __( 'تایم ویدیو ', 'cmb2' ),
        'object_types'  => array( 'tv', ), // Post type
        'context'       => 'side', //or side
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
    ) );

    $time->add_field( array(
        'name'    => 'تایم ویدیو',
        'desc'    => 'لطفا تایم فایل ویدیویی خود را وارد کنید. مثلا 12:49',
        'id'      => 'danati_video_tv_time',
        'type'    => 'text',

    ) );


}
