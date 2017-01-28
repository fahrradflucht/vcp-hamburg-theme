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

/**
 * Generate a srcset attribute string.
 *
 * Return the string for the HTML img elements srcset attribute. The image
 * must be present at the provided path in all provided sizes in the
 * following scheme: `/path/to/img/name-$width.jpeg`
 *
 * @param string $img   The path of the image from the template directory on.
 * @param int[]  $sizes The sizes (width) the image is provided in.
 *
 * @return string
 */
function get_srcset($img, $sizes) {
    $img_path = get_bloginfo('template_directory') . $img;
    $last_dot = strrpos($img_path, '.');
    return join(', ', array_map(
        function($size) use ($img_path, $last_dot) {
            return substr_replace(
                $img_path . ' ' . $size . 'w',
                '-' . $size . '.',
                $last_dot,
                1
            );
        },
        $sizes
    ));
}

function register_navigation() {
  register_nav_menu('navigation',__( 'Navigation' ));
}

add_action( 'init', 'register_navigation' );
