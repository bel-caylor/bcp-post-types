<?php

function bcp_register_party_theme_type() {
  $labels = array (
    'name' => __( 'Party Themes', BCPDOMAIN ),
    'singular_name' => __( 'Party Theme', BCPDOMAIN),
    'featured_image' => __( 'Theme Image', BCPDOMAIN),
    'set_featured_image' => __( 'Set Theme Image', BCPDOMAIN),
    'remove_featured_image' => __( 'Remove Theme Image', BCPDOMAIN),
    'use_featured_image' => __( 'Use Theme Image', BCPDOMAIN),
    'add_new' => __( 'Add New Party Theme', BCPDOMAIN),
    'add_new_item' => __( 'Add New Party Theme', BCPDOMAIN),
    'archives' => __( 'Party Themes', BCPDOMAIN),
  );

  $args = array(
    'labels' => $labels ,
    'public' => true,
    'has_archive' => 'party-themes',
    'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields'),
    'show_in_rest' => true,
    'taxonomies' => array( 'category')
 );

 register_post_type( 'party-theme', $args );
}
