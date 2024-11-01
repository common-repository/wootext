<?php 

// add to cart section
$wp_customize->add_section( 'wootext_section_add_to_cart',
   array(
      'title' => __( 'Add To Cart' ),
      'description' => esc_html__( 'Customize woocommerce default texts.' ),
      'panel' => 'wootext_menu', 
      'priority' => 160, 
      'capability' => 'edit_theme_options', 
      'theme_supports' => '', 
      'active_callback' => '', 
      'description_hidden' => 'false',
   )
);


//default button (global)

$wp_customize->add_setting( 'default_cart_btn_edit',
   array(
      'default' => 'Add To Cart',
      'transport' => 'refresh',
      'sanitize_callback' => 'sanitize_text_field'
   )
);
 
$wp_customize->add_control( 'default_cart_btn_edit',
   array(
      'label' => __( 'Default Product Button Text' ),
      'description' => esc_html__( 'This text will be applied to all products on home page.' ),
      'section' => 'wootext_section_add_to_cart',
      'priority' => 10, 
      'type' => 'text', 
      'capability' => 'edit_theme_options', 
      'input_attrs' => array(
         'class' => 'wootext-input',
         'style' => 'border: 1px solid #96588a; color: #96588a; ',
         'placeholder' => __( 'Add To Cart' ),
      ),
   )
);


//simple product


$wp_customize->add_setting( 'simple_cart_btn_edit',
   array(
      'default' => 'Add To Cart',
      'transport' => 'refresh',
      'sanitize_callback' => 'sanitize_text_field'
   )
);


 
$wp_customize->add_control( 'simple_cart_btn_edit',
   array(
      'label' => __( 'Simple Product Button Text' ),
      'description' => esc_html__( 'This text will be applied to simple products only.' ),
      'section' => 'wootext_section_add_to_cart',
      'priority' => 10, 
      'type' => 'text', 
      'capability' => 'edit_theme_options', 
      'input_attrs' => array(
         'class' => 'wootext-input',
         'style' => 'border: 1px solid #96588a; color: #96588a; ',
         'placeholder' => __( 'Add To Cart' ),
      ),
   )
);


//grouped product

$wp_customize->add_setting( 'grouped_cart_btn_edit',
   array(
      'default' => 'Select',
      'transport' => 'refresh',
      'sanitize_callback' => 'sanitize_text_field'
   )
);
 

$wp_customize->add_control( 'grouped_cart_btn_edit',
   array(
      'label' => __( 'Grouped Product Button Text' ),
      'description' => esc_html__( 'This text will be applied to grouped products only.' ),
      'section' => 'wootext_section_add_to_cart',
      'priority' => 10, 
      'type' => 'text', 
      'capability' => 'edit_theme_options', 
      'input_attrs' => array(
         'class' => 'wootext-input',
         'style' => 'border: 1px solid #96588a; color: #96588a; ',
         'placeholder' => __( 'Select' ),
      ),
   )
);

//external product

$wp_customize->add_setting( 'external_cart_btn_edit',
   array(
      'default' => 'Buy Now',
      'transport' => 'refresh',
      'sanitize_callback' => 'sanitize_text_field'
   )
);
 
$wp_customize->add_control( 'external_cart_btn_edit',
   array(
      'label' => __( 'External Product Button Text' ),
      'description' => esc_html__( 'This text will be applied to external products only.' ),
      'section' => 'wootext_section_add_to_cart',
      'priority' => 10, 
      'type' => 'text', 
      'capability' => 'edit_theme_options', 
      'input_attrs' => array(
         'class' => 'wootext-input',
         'style' => 'border: 1px solid #96588a; color: #96588a; ',
         'placeholder' => __( 'Buy Now' ),
      ),
   )
);

//variable product

$wp_customize->add_setting( 'variable_cart_btn_edit',
   array(
      'default' => 'Select',
      'transport' => 'refresh',
      'sanitize_callback' => 'sanitize_text_field'
   )
);
 
$wp_customize->add_control( 'variable_cart_btn_edit',
   array(
      'label' => __( 'Variable Product Button Text' ),
      'description' => esc_html__( 'This text will be applied to variable products only.' ),
      'section' => 'wootext_section_add_to_cart',
      'priority' => 10, 
      'type' => 'text', 
      'capability' => 'edit_theme_options', 
      'input_attrs' => array(
         'class' => 'wootext-input',
         'style' => 'border: 1px solid #96588a; color: #96588a; ',
         'placeholder' => __( 'Select Variation' ),
      ),
   )
);

