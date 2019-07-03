<?php
    function meu_posts_types(){
        register_post_type('posteres',
            array(
                'labels' => array(
                    'name' => __('Posteres'),
                    'singular_name' => __('posteres')
                ),
                'public' => true,
                'has_archive' => true,
                'menu_icon' => 'dashicons-welcome-learn-more',
                'suport' => array('title', 'editor', 'thumbnail', 'page-attributes'),
            )
        );
    }

?>