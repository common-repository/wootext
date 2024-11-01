<?php 

// Shipping section
$wp_customize->add_section( 'wootext_section_shipping',
   array(
      'title' => __( 'Shipping' ),
      'description' => esc_html__( 'Customize woocommerce default texts.' ),
      'panel' => 'wootext_menu', 
      'priority' => 160, 
      'capability' => 'edit_theme_options', 
      'theme_supports' => '', 
      'active_callback' => '', 
      'description_hidden' => 'false', 
   )
);

$wp_customize->add_setting( 'shipping_text_edit',
   array(
      'default' => 'Delivery',
      'transport' => 'refresh',
      'sanitize_callback' => 'sanitize_text_field'
   )
);
 
$wp_customize->add_control( 'shipping_text_edit',
   array(
      'label' => __( 'Shipping Text' ),
      'description' => esc_html__( 'Enter a text to replace shipping everywhere.' ),
      'section' => 'wootext_section_shipping',
      'priority' => 10, 
      'type' => 'text',
      'capability' => 'edit_theme_options', 
      'input_attrs' => array(
         'class' => 'wootext-input',
         'style' => 'border: 1px solid #96588a; color: #96588a; ',
         'placeholder' => __( 'Delivery' ),
      ),
   )
);


