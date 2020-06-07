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

    <header class="site-header">
        <div class="site-header__logo">
            <a href="<?php echo get_site_url(); ?>">
                <img src="<?php echo get_template_directory_uri() . '/public/img/logo-iveos.png' ?>" 
                alt="Logo iveos" 
                srcset="<?php echo get_template_directory_uri() . '/public/img/logo-iveos@2x.png' ?> 2x">
            </a>
        </div>
        <div class="site-header__burger">
            <div class="line line1"></div>
            <div class="line line2"></div>
            <div class="line line3"></div>
        </div>
        <?php 
        wp_nav_menu( 
            array( 
                'theme_location' => 'main', 
                'container' => 'ul',
                'menu_class' => 'site-header__navigation',
            ) 
        ); 
        ?>
    </header>