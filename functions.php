<?php

function has_parent($id) {
  return !empty(get_post_ancestors($id));
}

function get_parent_id($id) {
  return get_post_ancestors($id)[0];
}

function page_menu_items($id) {
  if(has_parent($id)){
    $id = get_parent_id($id);
  }

  $my_wp_query = new WP_Query();
  $all_wp_pages = $my_wp_query->query(array('post_type' => 'page'));

  return get_page_children( $id, $all_wp_pages );
}

function get_parent_title($id) {
  if(!has_parent($id)){
    return get_the_title();
  }
  
  return get_page(get_parent_id($id))->post_title;
}

function register_navigation() {
  register_nav_menu('navigation',__( 'Navigation' ));
}

add_action( 'init', 'register_navigation' );
