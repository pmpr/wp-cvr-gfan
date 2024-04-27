<?php

if (!defined('ABSPATH')) {
    exit;
}

global $post, $product;

if ($product->is_on_sale()) {

    $attrs  = apply_filters('woocommerce_sale_flash_attributes', ['class' => 'ribbon']);
    $ribbon = pmpr_generate_element('span', ['class' => 'onsale sale font-16'], __('Sale', PR__CVR__GFAN));
    $flash  = pmpr_generate_element('div', $attrs, $ribbon);

    echo apply_filters('woocommerce_sale_flash', $flash, $post, $product);
}

