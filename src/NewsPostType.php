<?php

class NewsPostType {

    public function __construct() {
        add_action('init', array($this, 'createPostType'));
    }

    public function createPostType() {
        $labels = array(
            'name' => _x('News', 'Post Type General Name'),
            'singular_name' => _x('News', 'Post Type Singular Name'),
            'menu_name' => __('News'),
            'all_items' => __('All News'),
            'view_item' => __('View News'),
            'add_new_item' => __('Add New News'),
            'add_new' => __('Add New'),
            'edit_item' => __('Edit News'),
            'update_item' => __('Update News'),
            'search_items' => __('Search News'),
            'not_found' => __('Not Found'),
            'not_found_in_trash' => __('Not found in Trash'),
        );

        $args = array(
            'label' => __('news'),
            'description' => __('News and Reviews'),
            'labels' => $labels,
            'supports' => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields'),
            'taxonomies' => array('genres'),
            'hierarchical' => false,
            'public' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'show_in_nav_menus' => true,
            'show_in_admin_bar' => true,
            'menu_position' => 5,
            'has_archive' => true,
        );

        register_post_type('news', $args);
    }

}
