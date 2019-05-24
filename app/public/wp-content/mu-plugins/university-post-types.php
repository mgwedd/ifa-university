<?php 
// registering a new post_type. arg 1 is the typename 'event, arg 2 is an array describing it. public => true means it's publically visible.
// in the second array, 'name' sets the lable in the admin area of the new post_type.
// to give the new label an icon, see https://developer.wordpress.org/resource/dashicons/#calendar-alt
// the second array adds custom labels and names for the type in the WP admin area.

function university_post_types() {
    register_post_type('event', array(
        'rewrite' => array(
            'slug' => 'events'
        ),
        'has_archive' => true,
        'public' => true, 
        'labels' => array(
            'name' => 'Events',
            'add_new_item' => 'Add New Event',
            'edit_item' => 'Edit Event',
            'all_items' => 'All Events',
            'singular_name' => 'Event'
        ), 
        'menu_icon' => 'dashicons-calendar'
     ));
}
// Here's all the customizations you can make for the custom post type: https://codex.wordpress.org/Function_Reference/register_post_type
    
// functions.php isn't the absolute best place to keep custom post type code. Because then access to our data is reliant on a single theme... we want this rather to be a plugin.
// put custom post types in a Must Use Plugins folder. IT'll go in the mu-plugins folder in the wp-content folder.
add_action('init', 'university_post_types');
?>