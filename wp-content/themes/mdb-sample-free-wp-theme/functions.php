<?php

require_once 'inc/assets.php';


function woocomerce_add_support () {
 add_theme_support('woocommerce');
}

add_action('after_setup_theme', 'woocomerce_add_support');


remove_action('woocommerce_before_single_product_summary','woocommerce_show_product_sale_flash', 10);


remove_action('woocommerce_single_product_summary','woocommerce_template_single_rating', 10);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);
add_action('woocommerce_single_product_summary','woocommerce_template_single_meta', 5);

remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20);
function woocommerce_add_desc () {
    woocommerce_get_template('single-product/tabs/description.php');
}
remove_action('woocommerce_after_single_product_summary','woocommerce_output_product_data_tabs',10);
add_action('woocommerce_single_product_summary','woocommerce_add_desc', 20);

