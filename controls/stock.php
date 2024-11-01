<?php 

// stock section
$wp_customize->add_section( 'wootext_section_stock',
   array(
      'title' => __( 'Stock' ),
      'description' => esc_html__( 'Customize woocommerce default texts.' ),
      'panel' => 'wootext_menu', 
      'priority' => 160, 
      'capability' => 'edit_theme_options', 
      'theme_supports' => '', 
      'active_callback' => '', 
      'description_hidden' => 'false', 
   )
);

$wp_customize->add_setting( 'instock_text_edit',
   array(
      'default' => 'In Stock',
      'transport' => 'refresh',
      'sanitize_callback' => 'sanitize_text_field'
   )
);
 
$wp_customize->add_control( 'instock_text_edit',
   array(
      'label' => __( 'In Stock Text' ),
      'description' => esc_html__( '' ),
      'section' => 'wootext_section_stock',
      'priority' => 10, 
      'type' => 'text', 
      'capability' => 'edit_theme_options', 
      'input_attrs' => array(
         'class' => 'wootext-input',
         'style' => 'border: 1px solid #96588a; color: #96588a; ',
         'placeholder' => __( 'Available!' ),
      ),
   )
);

$wp_customize->add_setting( 'outstock_text_edit',
   array(
      'default' => 'Out of Stock',
      'transport' => 'refresh',
      'sanitize_callback' => 'sanitize_text_field'
   )
);
 
$wp_customize->add_control( 'outstock_text_edit',
   array(
      'label' => __( 'Out of Stock Text' ),
      'description' => esc_html__( '' ),
      'section' => 'wootext_section_stock',
      'priority' => 10, 
      'type' => 'text', 
      'capability' => 'edit_theme_options', 
      'input_attrs' => array(
         'class' => 'wootext-input',
         'style' => 'border: 1px solid #96588a; color: #96588a; ',
         'placeholder' => __( 'Not Available.' ),
      ),
   )
);

