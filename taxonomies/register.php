<?php


//theme-name
function bcp_register_theme_name_taxonomy() {
  $labels = array (
    'name' => __( 'Theme Name', BCPDOMAIN ),
    'singular_name' => __( 'Theme Name', BCPDOMAIN),
    'add_new_item' => __( 'Add Theme Name', BCPDOMAIN),
  );

  $args = array(
    'labels' => $labels ,
    'public' => true,
    'hierarchical' => true,
    'show_admin_column' => true,
    'show_in_quick_edit' => true,
    'show_in_rest' => true,
   );

   $post_types = array( 'party-theme', 'attachment');
   register_taxonomy( 'theme-name', $post_types, $args );
}


//party-type
function bcp_register_party_type_taxonomy() {
  $labels = array (
    'name' => __( 'Party Types', BCPDOMAIN ),
    'singular_name' => __( 'Party Type', BCPDOMAIN),
    'add_new_item' => __( 'Add New Type', BCPDOMAIN),
  );

  $args = array(
    'labels' => $labels ,
    'public' => true,
    'hierarchical' => true,
    'show_admin_column' => true,
    'show_in_quick_edit' => true,
    'show_in_rest' => true,
   );

   $post_types = array( 'attachment');

   register_taxonomy( 'party-type', $post_types, $args );
}


//product-type
function bcp_register_product_type_taxonomy() {
  $labels = array (
    'name' => __( 'Product Types', BCPDOMAIN ),
    'singular_name' => __( 'Product Type', BCPDOMAIN),
    'add_new_item' => __( 'Add New Product Type', BCPDOMAIN),
  );

  $args = array(
    'labels' => $labels ,
    'public' => true,
    'hierarchical' => true,
    'show_admin_column' => true,
    'show_in_quick_edit' => true,
    'show_in_rest' => true,
   );

   $post_types = array( 'attachment', 'product');
   register_taxonomy( 'product-type', $post_types, $args );
}


//color
function bcp_register_color_taxonomy() {
  $labels = array (
    'name' => __( 'Color Schemes', BCPDOMAIN ),
    'singular_name' => __( 'Color Scheme', BCPDOMAIN),
    'add_new_item' => __( 'Add New Color Scheme', BCPDOMAIN),
  );

  $args = array(
    'labels' => $labels ,
    'public' => true,
    'hierarchical' => true,
    'show_admin_column' => true,
    'show_in_quick_edit' => true,
    'show_in_rest' => true,
   );

   $post_types = array( 'party-theme', 'attachment');
   register_taxonomy( 'color', $post_types, $args );
}


//keywords
function bcp_register_keywords_taxonomy() {
  $labels = array (
    'name' => __( 'Keywords', BCPDOMAIN ),
    'singular_name' => __( 'Keyword', BCPDOMAIN),
    'add_new_item' => __( 'Add New Keyword', BCPDOMAIN),
  );

  $args = array(
    'labels' => $labels ,
    'public' => true,
    'hierarchical' => true,
    'show_admin_column' => true,
    'show_in_quick_edit' => true,
    'show_in_rest' => true,
 );

 $post_types = array( 'party-theme', 'attachment');
 register_taxonomy( 'keywords', $post_types, $args );
}
