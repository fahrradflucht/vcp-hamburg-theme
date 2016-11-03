<?php

function register_my_menu() {
  register_nav_menu('navigation',__( 'Navigation' ));
}
add_action( 'init', 'register_my_menu' );
