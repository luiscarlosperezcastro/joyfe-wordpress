<?php
add_action('init', function () {

  register_post_type('articulos', [
    'labels' => [
      'name' => 'Artículos',
      'singular_name' => 'Artículo',
      'add_new_item' => 'Añadir nuevo artículo',
      'edit_item' => 'Editar artículo',
    ],
    'public' => true,
    'has_archive' => true,
    'rewrite' => ['slug' => 'articulos'],
    'supports' => ['title', 'editor', 'thumbnail', 'excerpt'],
    'show_in_rest' => true,
    'menu_icon' => 'dashicons-media-document',
  ]);

});