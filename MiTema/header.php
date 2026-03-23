<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header style="max-width:900px; margin:20px auto; padding:12px; border:2px solid red;">
    <strong><?php bloginfo( 'name' ); ?></strong>
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Inicio</a>
</header>
