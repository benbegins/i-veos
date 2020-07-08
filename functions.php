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

    if ( function_exists( 'add_image_size' ) ) { 
        add_image_size( 'fullwidth-size', 1600, 1000, true );
        add_image_size( 'phone-size', 380, 380, true );
    }

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

//Desactive Gutenberg
add_filter('use_block_editor_for_post', '__return_false');

// Register Temoignage Post Type
function temoignage_post_type() {

	$labels = array(
		'name'                  => _x( 'Témoignages', 'Post Type General Name', 'iveos' ),
		'singular_name'         => _x( 'Témoignage', 'Post Type Singular Name', 'iveos' ),
		'menu_name'             => __( 'Témoignages', 'iveos' ),
		'name_admin_bar'        => __( 'Témoignage', 'iveos' ),
		'archives'              => __( 'Témoignage', 'iveos' ),
		'attributes'            => __( 'Item Attributes', 'iveos' ),
		'parent_item_colon'     => __( 'Parent Item:', 'iveos' ),
		'all_items'             => __( 'Tous les témoignages', 'iveos' ),
		'add_new_item'          => __( 'Ajouter un témoignage', 'iveos' ),
		'add_new'               => __( 'Ajouter un témoignage', 'iveos' ),
		'new_item'              => __( 'Nouveau témoignage', 'iveos' ),
		'edit_item'             => __( 'Editer témoignage', 'iveos' ),
		'update_item'           => __( 'Mettre à jour le témoignage', 'iveos' ),
		'view_item'             => __( 'Voir le témoignage', 'iveos' ),
		'view_items'            => __( 'Voir les témoignages', 'iveos' ),
		'search_items'          => __( 'Rechercher un témoignage', 'iveos' ),
		'not_found'             => __( 'Rien trouvé', 'iveos' ),
		'not_found_in_trash'    => __( 'Rien trouvé', 'iveos' ),
		'featured_image'        => __( 'Image à la une', 'iveos' ),
		'set_featured_image'    => __( 'Mettre en image à la une', 'iveos' ),
		'remove_featured_image' => __( 'Supprimer l\'image à la une', 'iveos' ),
		'use_featured_image'    => __( 'Utiliser comme image à la une', 'iveos' ),
		'insert_into_item'      => __( 'Insérer dans le témoignage', 'iveos' ),
		'uploaded_to_this_item' => __( 'Charger dans ce témoignage', 'iveos' ),
		'items_list'            => __( 'Liste des témoignages', 'iveos' ),
		'items_list_navigation' => __( 'Liste des témoignages', 'iveos' ),
		'filter_items_list'     => __( 'Filtrer les témoignages', 'iveos' ),
	);
	$args = array(
		'label'                 => __( 'Témoignage', 'iveos' ),
		'description'           => __( 'Témoignages clients', 'iveos' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'custom-fields' ),
		'taxonomies'            => array( 'categorie_temoignage' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-format-status',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'temoignage', $args );

}
add_action( 'init', 'temoignage_post_type', 0 );


// Register Catégorie témoignage
function temoignage_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Catégories de témoignage', 'Taxonomy General Name', 'iveos' ),
		'singular_name'              => _x( 'Catégorie de témoignage', 'Taxonomy Singular Name', 'iveos' ),
		'menu_name'                  => __( 'Catégories de témoignage', 'iveos' ),
		'all_items'                  => __( 'Toutes les catégories', 'iveos' ),
		'parent_item'                => __( 'Parent Item', 'iveos' ),
		'parent_item_colon'          => __( 'Parent Item:', 'iveos' ),
		'new_item_name'              => __( 'Nom de la catégorie', 'iveos' ),
		'add_new_item'               => __( 'Ajouter une catégorie', 'iveos' ),
		'edit_item'                  => __( 'Editer la catégorie', 'iveos' ),
		'update_item'                => __( 'Mettre à jour la catégorie', 'iveos' ),
		'view_item'                  => __( 'Voir la catégorie', 'iveos' ),
		'separate_items_with_commas' => __( 'Séparer par des virgules', 'iveos' ),
		'add_or_remove_items'        => __( 'Ajouter ou supprimer', 'iveos' ),
		'choose_from_most_used'      => __( 'Choisir parmi les plus utilisées', 'iveos' ),
		'popular_items'              => __( 'Catégories populaires', 'iveos' ),
		'search_items'               => __( 'Rechercher des catégories', 'iveos' ),
		'not_found'                  => __( 'Rien trouvé', 'iveos' ),
		'no_terms'                   => __( 'Pas de résultat', 'iveos' ),
		'items_list'                 => __( 'Liste des catégories', 'iveos' ),
		'items_list_navigation'      => __( 'Liste catégories', 'iveos' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'categorie_temoignage', array( 'temoignage' ), $args );

}
add_action( 'init', 'temoignage_taxonomy', 0 );

//Remove Jetpack CSS
add_filter( 'jetpack_sharing_counts', '__return_false', 99 );
add_filter( 'jetpack_implode_frontend_css', '__return_false', 99 );