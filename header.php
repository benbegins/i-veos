<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">

    <header class="site_header">
    <?php 
        wp_nav_menu( 
            array( 
                'theme_location' => 'main', 
                'container' => 'ul',
                'menu_class' => 'site_header-menu',
            ) 
        ); 
    ?>
    </header>