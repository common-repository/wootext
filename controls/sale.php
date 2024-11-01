<?php 

// Order section
$wp_customize->add_section( 'wootext_section_sale',
   array(
      'title' => __( 'Sale Badge' ),
      'description' => esc_html__( 'Customize woocommerce default texts.' ),
      'panel' => 'wootext_menu', 
      'priority' => 160, 
      'capability' => 'edit_theme_options', 
      'theme_supports' => '', 
      'active_callback' => '', 
      'description_hidden' => 'false',
   )
);

$wp_customize->add_setting( 'sale_text_edit',
   array(
      'default' => 'Sale!',
      'transport' => 'refresh',
      'sanitize_callback' => 'sanitize_text_field'
   )
);
 
$wp_customize->add_control( 'sale_text_edit',
   array(
      'label' => __( 'Sale Badge Text' ),
      'description' => esc_html__( 'Enter a text to replace Sale Badge text.' ),
      'section' => 'wootext_section_sale',
      'priority' => 10, 
      'type' => 'text', 
      'capability' => 'edit_theme_options', 
      'input_attrs' => array(
         'class' => 'wootext-input',
         'style' => 'border: 1px solid #96588a; color: #96588a; ',
         'placeholder' => __( 'Sale' ),
      ),
   )
);


