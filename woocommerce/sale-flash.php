<?php

if (!defined('ABSPATH')) {
	exit;
}

global $post, $product;

if ($product->is_on_sale()) {

	$attrs  = apply_filters('woocommerce_sale_flash_attributes', ['class' => 'ribbon']);
	$ribbon = pmpr_generate_element('span', __('Sale', PR__THM__GFAN), ['class' => 'onsale sale font-16'],);
	$flash  = pmpr_generate_element('div', $attrs, $ribbon);

	echo apply_filters('woocommerce_sale_flash', $flash, $post, $product);
}

