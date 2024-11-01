<?php 
function wootext_customizer_register($wp_customize) {


//add panel
 $wp_customize->add_panel( 'wootext_menu',
   array(
      'title' => __( 'WooText' ),
      'description' => esc_html__( 'Customize woocommerce default texts.' ), 
      'priority' => 160, 
      'capability' => 'edit_theme_options', 
      'theme_supports' => '', 
      'active_callback' => '', 
   )
);


//require add-to-cart editor
require_once('controls/add-to-cart.php');

//require shipping editor
require_once('controls/shipping.php');

//require place order editor
require_once('controls/order.php');

//require place order editor
require_once('controls/sale.php');

//require place order editor
require_once('controls/stock.php');

}
add_action('customize_register', 'wootext_customizer_register');