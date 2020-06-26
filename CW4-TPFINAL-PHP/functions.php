<?php

define("WP_DEBUG" , true) ;
add_theme_support('post-thumbnails');

//menu
function enregistrer_menu() {
register_nav_menus( array(
'menu_principal' => 'Menu principal',
) );
}

add_action('init', 'enregistrer_menu');




// Register Custom Post Type
function cw4_activites() {

    $labels = array(
        'name'                  => _x( 'Activités', 'Post Type General Name', 'cw4_montheme' ),
        'singular_name'         => _x( 'Activité', 'Post Type Singular Name', 'cw4_montheme' ),
        'menu_name'             => __( 'Activités', 'cw4_montheme' ),
        'name_admin_bar'        => __( 'Post Type', 'cw4_montheme' ),
        'archives'              => __( 'Item Archives', 'cw4_montheme' ),
        'attributes'            => __( 'Item Attributes', 'cw4_montheme' ),
        'parent_item_colon'     => __( 'Parent Item:', 'cw4_montheme' ),
        'all_items'             => __( 'Toutes les activités', 'cw4_montheme' ),
        'add_new_item'          => __( 'Ajouter un nouveau activité', 'cw4_montheme' ),
        'add_new'               => __( 'Ajouter Activité', 'cw4_montheme' ),
        'new_item'              => __( 'Nouveau Activité', 'cw4_montheme' ),
        'edit_item'             => __( 'Editer Activité', 'cw4_montheme' ),
        'update_item'           => __( 'MAJ Activité', 'cw4_montheme' ),
        'view_item'             => __( 'View Item', 'cw4_montheme' ),
        'view_items'            => __( 'View Items', 'cw4_montheme' ),
        'search_items'          => __( 'Search Item', 'cw4_montheme' ),
        'not_found'             => __( 'Not found', 'cw4_montheme' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'cw4_montheme' ),
        'featured_image'        => __( 'Featured Image', 'cw4_montheme' ),
        'set_featured_image'    => __( 'Set featured image', 'cw4_montheme' ),
        'remove_featured_image' => __( 'Remove featured image', 'cw4_montheme' ),
        'use_featured_image'    => __( 'Use as featured image', 'cw4_montheme' ),
        'insert_into_item'      => __( 'Insert into item', 'cw4_montheme' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'cw4_montheme' ),
        'items_list'            => __( 'Items list', 'cw4_montheme' ),
        'items_list_navigation' => __( 'Items list navigation', 'cw4_montheme' ),
        'filter_items_list'     => __( 'Filter items list', 'cw4_montheme' ),
    );
    $args = array(
        'label'                 => __( 'Activité', 'cw4_montheme' ),
        'description'           => __( 'Les activités', 'cw4_montheme' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
        'taxonomies'            => array( 'category', 'post_tag' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 25,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type( 'cw4_activites', $args );

}
add_action( 'init', 'cw4_activites', 0 );

// Register Custom Post Type
function cw4_partenaires() {

    $labels = array(
        'name'                  => _x( 'Partenaires', 'Post Type General Name', 'cw4_monthemepartenaire' ),
        'singular_name'         => _x( 'Partenaire', 'Post Type Singular Name', 'cw4_monthemepartenaire' ),
        'menu_name'             => __( 'Partenaires', 'cw4_monthemepartenaire' ),
        'name_admin_bar'        => __( 'Post Type', 'cw4_monthemepartenaire' ),
        'archives'              => __( 'Item Archives', 'cw4_monthemepartenaire' ),
        'attributes'            => __( 'Item Attributes', 'cw4_monthemepartenaire' ),
        'parent_item_colon'     => __( 'Parent Item:', 'cw4_monthemepartenaire' ),
        'all_items'             => __( 'Tous les partenaires', 'cw4_monthemepartenaire' ),
        'add_new_item'          => __( 'Ajouter un nouveau partenaire', 'cw4_monthemepartenaire' ),
        'add_new'               => __( 'Ajouter Partenaire', 'cw4_monthemepartenaire' ),
        'new_item'              => __( 'Nouveau Partenaire', 'cw4_monthemepartenaire' ),
        'edit_item'             => __( 'Editer Partenaire', 'cw4_monthemepartenaire' ),
        'update_item'           => __( 'MAJ Partenaire', 'cw4_monthemepartenaire' ),
        'view_item'             => __( 'View Item', 'cw4_monthemepartenaire' ),
        'view_items'            => __( 'View Items', 'cw4_monthemepartenaire' ),
        'search_items'          => __( 'Search Item', 'cw4_monthemepartenaire' ),
        'not_found'             => __( 'Not found', 'cw4_monthemepartenaire' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'cw4_monthemepartenaire' ),
        'featured_image'        => __( 'Featured Image', 'cw4_monthemepartenaire' ),
        'set_featured_image'    => __( 'Set featured image', 'cw4_monthemepartenaire' ),
        'remove_featured_image' => __( 'Remove featured image', 'cw4_monthemepartenaire' ),
        'use_featured_image'    => __( 'Use as featured image', 'cw4_monthemepartenaire' ),
        'insert_into_item'      => __( 'Insert into item', 'cw4_monthemepartenaire' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'cw4_monthemepartenaire' ),
        'items_list'            => __( 'Items list', 'cw4_monthemepartenaire' ),
        'items_list_navigation' => __( 'Items list navigation', 'cw4_monthemepartenaire' ),
        'filter_items_list'     => __( 'Filter items list', 'cw4_monthemepartenaire' ),
    );
    $args = array(
        'label'                 => __( 'Partenaire', 'cw4_monthemepartenaire' ),
        'description'           => __( 'Les partenaires', 'cw4_monthemepartenaire' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'thumbnail', 'custom-fields' ),
        'taxonomies'            => array( 'category', 'post_tag' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 25,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'rewrite'               => false,
        'capability_type'       => 'page',
    );
    register_post_type( 'cw4_partenaire', $args );

}
add_action( 'init', 'cw4_partenaires', 0 );




// Register Custom Post Type
function cw_program_aventures() {

    $labels = array(
        'name'                  => _x( 'Programmation Aventures', 'Post Type General Name', 'cw4_monthemeprogrammation' ),
        'singular_name'         => _x( 'Programmation Aventure', 'Post Type Singular Name', 'cw4_monthemeprogrammation' ),
        'menu_name'             => __( 'Programmation Aventures', 'cw4_monthemeprogrammation' ),
        'name_admin_bar'        => __( 'Post Type', 'cw4_monthemeprogrammation' ),
        'archives'              => __( 'Item Archives', 'cw4_monthemeprogrammation' ),
        'attributes'            => __( 'Item Attributes', 'cw4_monthemeprogrammation' ),
        'parent_item_colon'     => __( 'Parent Item:', 'cw4_monthemeprogrammation' ),
        'all_items'             => __( 'Tous les Aventures', 'cw4_monthemeprogrammation' ),
        'add_new_item'          => __( 'Ajouter une nouvelle aventure', 'cw4_monthemeprogrammation' ),
        'add_new'               => __( 'Ajouter aventure', 'cw4_monthemeprogrammation' ),
        'new_item'              => __( 'Nouvelle aventure', 'cw4_monthemeprogrammation' ),
        'edit_item'             => __( 'Editer aventure', 'cw4_monthemeprogrammation' ),
        'update_item'           => __( 'MAJ aventure', 'cw4_monthemeprogrammation' ),
        'view_item'             => __( 'View Item', 'cw4_monthemeprogrammation' ),
        'view_items'            => __( 'View Items', 'cw4_monthemeprogrammation' ),
        'search_items'          => __( 'Search Item', 'cw4_monthemeprogrammation' ),
        'not_found'             => __( 'Not found', 'cw4_monthemeprogrammation' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'cw4_monthemeprogrammation' ),
        'featured_image'        => __( 'Featured Image', 'cw4_monthemeprogrammation' ),
        'set_featured_image'    => __( 'Set featured image', 'cw4_monthemeprogrammation' ),
        'remove_featured_image' => __( 'Remove featured image', 'cw4_monthemeprogrammation' ),
        'use_featured_image'    => __( 'Use as featured image', 'cw4_monthemeprogrammation' ),
        'insert_into_item'      => __( 'Insert into item', 'cw4_monthemeprogrammation' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'cw4_monthemeprogrammation' ),
        'items_list'            => __( 'Items list', 'cw4_monthemeprogrammation' ),
        'items_list_navigation' => __( 'Items list navigation', 'cw4_monthemeprogrammation' ),
        'filter_items_list'     => __( 'Filter items list', 'cw4_monthemeprogrammation' ),
    );
    $args = array(
        'label'                 => __( 'Programmation Aventure', 'cw4_monthemeprogrammation' ),
        'description'           => __( 'Programmation des aventures', 'cw4_monthemeprogrammation' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'thumbnail', 'custom-fields' ),
        'taxonomies'            => array( 'category', 'post_tag' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 25,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type( 'cw_program_aventures', $args );

}
add_action( 'init', 'cw_program_aventures', 0 );





//acf check

if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title' => 'Options génèrales de mon thème',
        'menu_title' => 'Options génèrales',
        'menu_slug' => 'cw4-theme-options-generales',
        'capability' => 'edit_posts',
        'redirect' => false
    ));
    acf_add_options_sub_page(array(
        'page_title' => 'Options du pied de page',
        'menu_title' => 'Pied de page',
        'parent_slug' => 'cw4-theme-options-generales',
    ));
}
