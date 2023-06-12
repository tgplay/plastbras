<?php
/**
 * Astra Child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra Child
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define('CHILD_THEME_ASTRA_CHILD_VERSION', '1.0.0');

/**
 * Enqueue styles
 */
function child_enqueue_styles()
{

    wp_enqueue_style('astra-child-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_ASTRA_CHILD_VERSION, 'all');

}

function custom_product_pagination()
{
    $paged = get_query_var('paged') ? get_query_var('paged') : 1;
    $args = array(
        'post_type' => 'product',
        'posts_per_page' => 12,
        'paged' => $paged
    );

    $products_query = new WP_Query($args);

    while ($products_query->have_posts()) : $products_query->the_post();
        // Exibir o conteúdo do produto
    endwhile;

    wp_reset_postdata();

    echo paginate_links(array(
        'total' => $products_query->max_num_pages
    ));
}

add_action('wp_enqueue_scripts', 'child_enqueue_styles', 15);


function header_custom(){
    if (class_exists('\Elementor\Plugin')) {
        echo \Elementor\Plugin::instance()->frontend->get_builder_content(1303);
    }
}
add_action('woocommerce_before_main_content', 'header_custom', 5);

function footer_custom(){
    if (class_exists('\Elementor\Plugin')) {
        echo \Elementor\Plugin::instance()->frontend->get_builder_content(661);
    }
}
add_action('woocommerce_after_main_content', 'footer_custom', 30);




