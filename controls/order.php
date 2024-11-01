<?php 

// Order section
$wp_customize->add_section( 'wootext_section_order',
   array(
      'title' => __( 'Checkout' ),
      'description' => esc_html__( 'Customize woocommerce default texts.' ),
      'panel' => 'wootext_menu', 
      'priority' => 160, 
      'capability' => 'edit_theme_options', 
      'theme_supports' => '', 
      'active_callback' => '', 
      'description_hidden' => 'false', 
   )
);

$wp_customize->add_setting( 'order_text_edit',
   array(
      'default' => 'Place Order',
      'transport' => 'refresh',
      'sanitize_callback' => 'sanitize_text_field'
   )
);
 
$wp_customize->add_control( 'order_text_edit',
   array(
      'label' => __( 'Place Order Text' ),
      'description' => esc_html__( 'Enter a text to replace Place Order button text.' ),
      'section' => 'wootext_section_order',
      'priority' => 10, 
      'type' => 'text', 
      'capability' => 'edit_theme_options', 
      'input_attrs' => array(
         'class' => 'wootext-input',
         'style' => 'border: 1px solid #96588a; color: #96588a; ',
         'placeholder' => __( 'Order Now' ),
      ),
   )
);


