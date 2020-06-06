<?php

// Configure les fonctionnalités de bases
function iveos_setup(){

    // Prise en charge des images de mise en avant
    add_theme_support('post-thumbnails');

    // Ajouter automatiquement le titre du site dans l'entete
    add_theme_support('title-tag');

    // Custom logo
    add_theme_support(
        'custom-logo',
        array(
            'height'      => 250,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        )
    );

    // Ajouts des menus
    register_nav_menus( array(
        'main' => 'Menu Principal',
    ) );

}
add_action( 'after_setup_theme', 'iveos_setup' );


// Ajout des scripts
function iveos_register_assets(){

    // CSS
    wp_enqueue_style( 
        'iveos_fonts', 
        'https://use.typekit.net/lsr1bzs.css',
        array(),
        '1.0'
    );

    wp_enqueue_style( 
        'iveos', 
        get_stylesheet_uri( ),
        array('iveos_fonts'),
        '1.0'
    );

    // JS
    wp_enqueue_script( 
        'iveos', 
        get_template_directory_uri() . '/public/bundle.js', 
        array(),
        '1.0',
        true
    );

}
add_action( 'wp_enqueue_scripts', 'iveos_register_assets');


// Fichier de compatibilite Jetpack
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

// Custom template tags
require get_template_directory() . '/inc/template-tags.php';

// Custom template functions
require get_template_directory() . '/inc/template-functions.php';