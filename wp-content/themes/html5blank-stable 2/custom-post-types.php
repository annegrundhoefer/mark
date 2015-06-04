<?php 

add_action('init', 'register_mypost_type');
function register_mypost_type() {
register_post_type( 'dates',
    array(
        'labels' => array(
            'name'                  => 'Dates',
            'singular_name'         => 'Date',
            'add_new'               => 'Add New',
            'add_new_item'          => 'Add New Date',
            'edit_item'             => 'Edit Date',
            'new_item'              => 'New Date',
            'all_items'             => 'All Dates',
            'view_item'             => 'View Date',
            'search_items'          => 'Search Dates',
            'not_found'             => 'No channels found',
            'not_found_in_trash'    => 'No channels found in trash',
            'parent_item_colon'     => '',
            'menu_name'             => 'Dates'
        ),
        'public'                => true,
        'publicly_queryable'    => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'query_var'             => true,
        'rewrite'               => true,
        'capability_type'       => 'post',
        'has_archive'           => true,
        'hierarchical'          => false,
        'menu_position'         => null,
        'menu_icon'             => 'dashicons-calendar-alt',
        'supports'              => array( 'title','content','thumbnail' )
    )
);
}

?>