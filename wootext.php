<?php
/**
 * Plugin Name: WooText
 * Plugin URI: https://wordpress.org/plugins/wootext
 * Description: The WooText is a small lightweight plugin to edit or customize the WooCommerce default buttons, badges, and texts easily using the customizer. By installing it you will be able to change the "Add to Cart" button text to anything you want.
 * Version: 1.1.2
 * Author: BroadBrander
 * Author URI: https://broadbrander.com/
 * License: GPLv2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: wootext
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit();
}



// Check if WooCommerce is active
 
if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
	
//require customizer
require_once('customizer.php');




// shipping text edit

add_filter( 'woocommerce_shipping_package_name', 'wootext_shipping_package_name' );
function wootext_shipping_package_name( $name ) {
  return get_theme_mod( 'shipping_text_edit' );
}


// change place order text

add_filter( 'woocommerce_order_button_text', 'wootext_place_order_button_text' );
 
function wootext_place_order_button_text( $button_text ) {
   return get_theme_mod( 'order_text_edit' );
}


// sale badge text change

add_filter('woocommerce_sale_flash', 'wootext_change_sale_badge', 10, 3);
function wootext_change_sale_badge(){
   $content = '<span class="onsale">'. get_theme_mod( 'sale_text_edit' ) .'</span>';
   return $content;
}

//product button text


    add_filter( 'woocommerce_product_add_to_cart_text' , 'wootext_woocommerce_product_add_to_cart_text' );
function wootext_woocommerce_product_add_to_cart_text() {
	global $product;
	
	$product_type = $product->product_type;
	
	switch ( $product_type ) {
		case 'external':
			return get_theme_mod( 'external_cart_btn_edit' );
		break;
		case 'grouped':
			return get_theme_mod( 'grouped_cart_btn_edit' );
		break;
		case 'simple':
			return get_theme_mod( 'simple_cart_btn_edit' );
		break;
		case 'variable':
			return get_theme_mod( 'variable_cart_btn_edit' );
		break;
		default:
			return get_theme_mod( 'default_cart_btn_edit' );
	}
	
}

// single product page

add_filter( 'add_to_cart_text', 'wootext_single_add_to_cart_text' );                // < 2.1
add_filter( 'woocommerce_product_single_add_to_cart_text', 'wootext_single_add_to_cart_text' );  // 2.1 +
  
function wootext_single_add_to_cart_text() {
  
    return get_theme_mod( 'simple_cart_btn_edit' );
  
}


// in stock out of stock

add_filter( 'woocommerce_get_availability', 'wootext_product_get_availability', 1, 2);
function wootext_product_get_availability( $availability, $_product ) {
    

    if ( $_product->is_in_stock() ) {
        $availability['availability'] = get_theme_mod( 'instock_text_edit' );
    }

    if ( ! $_product->is_in_stock() ) {
        $availability['availability'] = get_theme_mod( 'outstock_text_edit' );
    }
    return $availability;
}

}