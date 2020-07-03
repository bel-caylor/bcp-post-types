<?php
/**
 * Plugin Name: BCPaper Party Theme Post Type
 * Description: Plugin for BC Paper Designs Party Theme Post Type.
 * Author: Belinda Caylor
 * Version: 1.0.0
 * Author URI: https://bc-designs.info
 */

 if ( ! defined( 'WPINC' )) {
   die;
 }

define ( 'BCP_VERSION', '1.0.0');
define ( 'BCPDOMAIN', 'bcp-post-types');
define ( 'BCPPATH', plugin_dir_path( __FILE__) );

require_once( BCPPATH . '/post-types/register.php');
add_action( 'init', 'bcp_register_party_theme_type');

require_once( BCPPATH . '/taxonomies/register.php');
add_action( 'init', 'bcp_register_party_type_taxonomy');
add_action( 'init', 'bcp_register_theme_name_taxonomy');
add_action( 'init', 'bcp_register_product_type_taxonomy');
add_action( 'init', 'bcp_register_color_taxonomy');
add_action( 'init', 'bcp_register_keywords_taxonomy');

// party_theme Shortcode
// Get post party_theme taxonomy.
add_shortcode('party_theme', 'shortcode_party_theme');
function shortcode_party_theme($atts = []) {
  extract($atts);
  if (isset($PostID)) {
    $post = get_post($PostID);
  } else {
    global $post;
  }
  $party_theme = get_the_terms($post, 'theme-name')[0]->name ?? NULL;
  if ($cap == "TRUE") {
    return ucfirst($party_theme);
  } else {
    return $party_theme;
  }
}

// color Shortcode
// Get post color taxonomy.
add_shortcode('color', 'shortcode_color');
function shortcode_color($atts = []) {
  extract($atts);
  if (isset($PostID)) {
    $post = get_post($PostID);
  } else {
    global $post;
  }
  $color = get_the_terms($post, 'color')[0]->name ?? NULL;
  if ($cap = "TRUE") {
    return ucfirst($color);
  } else {
    return $color;
  }
}

function bcp_get_cart_item_party_theme_postID( $cart_item ) {
	$item_data = array();
  $postID = '';

	// Filter item data to allow 3rd parties to add more to the array.
	$item_data = apply_filters( 'woocommerce_get_item_data', $item_data, $cart_item );
  // echo print_r($item_data);
  foreach ( $item_data as $key => $data ) {
    // echo $key . "=" . $data;
    if ($data['key'] == 'PostID') {
      $postID = $data['value'];
      return $postID;
    }
  }
}


// class BCP_Post_Types {
//
//   // get postID from Product WS Form data.
//   function get_party_theme_postID($cart_item) {
//     $item_data = array();
//     // $item_data = apply_filters( 'woocommerce_get_item_data', $item_data, $cart_item );
//
//     if (class_exists('WS_Form_Add_On_WooCommerce')) {
//       $wc_form = new WS_Form_Action_WooCommerce;
//       $item_data = $wc_form->get_item_data( $item_data, $cart_item );
//       // $item_data = get_item_data( $item_data, $cart_item );
//     }
//     return $item_data;
//   }
//
// }
//
// add_action('plugins_loaded', 'call_get_party_theme_postID');
// function call_get_party_theme_postID($cart_item) {
//   (new BCP_Post_Types)->get_party_theme_postID($cart_item);
// }
