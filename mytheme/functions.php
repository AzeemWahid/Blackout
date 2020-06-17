<?php

function load_css_js(){
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('Font_Awesome', 'https://pro.fontawesome.com/releases/v5.10.0/css/all.css' );
    wp_enqueue_style('Google_Fonts', 'https://fonts.googleapis.com/css?family=Roboto');
    wp_enqueue_script('script', get_template_directory_uri().'/js/front-slideshow.js',
                        array(), false, true);
    wp_enqueue_script('script', get_template_directory_uri().'/js/single-slideshow.js',
                        array(), false, true);
    wp_enqueue_script('script', get_template_directory_uri().'/js/navbar.js',
                        array(), false, true);
}

function custom_posts(){
    
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    register_post_type('products',
        array(
            'supports'=>array('title', 'editor', 'thumbnail', 'excerpt'),
            'rewrite'=> array(
                'slug'=>'products'
            ),
            'has_archive'=>true,
            'public'=>true,
            'labels'=>array(
                'name'=>"Products",
                'add_new_item'=>'Add New Product',
                'edit_item'=>'Edit Product',
                'all_items'=>'All Products',
                'singular_name'=> "Product"
            ),
            'menu_icon'=>'dashicons-calendar'
    ));

    register_post_type('news',
        array(
            'supports'=>array('title', 'editor', 'thumbnail', 'excerpt'),
            'rewrite'=> array(
                'slug'=>'news'
            ),
            'has_archive'=>true,
            'public'=>true,
            'labels'=>array(
                'name'=>"News",
                'add_new_item'=>'Add New News',
                'edit_item'=>'Edit News',
                'all_items'=>'All News',
                'singular_name'=> "News"
            ),
            'menu_icon'=>'dashicons-calendar'            
    ));

    register_post_type('series',
    array(
        'supports'=>array('title', 'editor', 'thumbnail', 'excerpt'),
        'rewrite'=> array(
            'slug'=>'series'
        ),
        'has_archive'=>true,
        'public'=>true,
        'labels'=>array(
            'name'=>"Series",
            'add_new_item'=>'Add New Series',
            'edit_item'=>'Edit Series',
            'all_items'=>'All Series',
            'singular_name'=> "Series"
        ),
        'menu_icon'=>'dashicons-calendar'            
));
}

function trim_custom_excerpt($excerpt) {
    if (has_excerpt()) {
        $excerpt = wp_trim_words(get_the_excerpt(), apply_filters("excerpt_length", 65));
    }

    return $excerpt;
}

add_filter("the_excerpt", "trim_custom_excerpt", 999);


add_action('wp_enqueue_scripts', 'load_css_js');
add_action('init', 'custom_posts');
?>

