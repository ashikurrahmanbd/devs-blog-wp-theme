<?php

// Include the SingletonTrait to use it
require_once  get_template_directory() . '/inc/trait-singleton.php';

// Include CMB2 Library
require_once get_template_directory() . '/inc/lib/cmb2/init.php';

class CMB2_Integration {

    use SingletonTrait;

    public function __construct() {

        add_action('cmb2_admin_init', [$this, 'register_metaboxes']);

    }

    public function register_metaboxes() {

        

        $cmb2_post_promo_metabox = new_cmb2_box(
            array(
                'id'    => 'post_promo_metabox',
                'title' => 'Post Promotion',
                'object_types' => ['post'],
                'context'       => 'normal',
                'priority'      => 'high',
                'show_names'    => true
            )
        );

        //adding field
        $cmb2_post_promo_metabox->add_field(
            array(
                'name' => __('Promotion Heading', 'devs-blog'),
                'desc' => __('Place your Promotion Heading', 'devs-blog'),
                'id'   => 'post_promotion_heading_id',
                'type' => 'text',
            )
        );
        //promotion descripiton
        $cmb2_post_promo_metabox->add_field(
            array(
                'name' => __('Promotion Description', 'devs-blog'),
                'desc' => __('Place your Promotion Description', 'devs-blog'),
                'id'   => 'post_promotion_description_id',
                'type' => 'textarea',
            )
        );

        //promotion image
        $cmb2_post_promo_metabox->add_field(array(
            'name' => __('Promotion Image', 'devs-blog'),
            'id'   => 'post_protion_image',
            'type' => 'file',
            'options' => array(
                'url' => false, // Hide the URL input
            ),
        ));

        //promotion image action link
        $cmb2_post_promo_metabox->add_field(array(
            'name' => __('Promotion Image Action', 'devs-blog'),
            'id'   => 'promotion_image_url',
            'type' => 'text_url',
        ));
    }
}