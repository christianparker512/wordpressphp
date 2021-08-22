<?php

function carwash_files() {
  wp_enqueue_style('carwash_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts','carwash_files');
