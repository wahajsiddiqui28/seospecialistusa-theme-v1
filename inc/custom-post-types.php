<?php
/**
 * Custom Post Types
 *
 * @package seospecialistusa
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register Inventory Custom Post Type
 */
function register_inventory_cpt() {
    $labels = array(
        'name'                  => _x( 'Inventory', 'Post Type General Name', 'seospecialistusa' ),
        'singular_name'         => _x( 'Inventory', 'Post Type Singular Name', 'seospecialistusa' ),
        'menu_name'             => __( 'Inventory', 'seospecialistusa' ),
        'all_items'             => __( 'All Inventory', 'seospecialistusa' ),
        'add_new_item'          => __( 'Add New Inventory', 'seospecialistusa' ),
        'add_new'               => __( 'Add New', 'seospecialistusa' ),
        'edit_item'             => __( 'Edit Inventory', 'seospecialistusa' ),
        'update_item'           => __( 'Update Inventory', 'seospecialistusa' ),
        'view_item'             => __( 'View Inventory', 'seospecialistusa' ),
        'search_items'          => __( 'Search Inventory', 'seospecialistusa' ),
    );
    $args = array(
        'label'                 => __( 'Inventory', 'seospecialistusa' ),
        'description'           => __( 'Inventory for Glossary', 'seospecialistusa' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-list-view',
        'has_archive'           => true,
        'show_in_rest'          => true,
        'rewrite'               => array( 'slug' => 'inventory' ),
    );
    register_post_type( 'inventory', $args );
}
add_action( 'init', 'register_inventory_cpt', 0 );
