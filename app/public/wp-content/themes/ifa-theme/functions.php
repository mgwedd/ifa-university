<?php 
// arg 1 tells wordpress to load some files. arg 2 is our function argument being passed in.
// microtime puts DT as a suffix on the js file, to avoid caching. 
// remove for production.
function university_files() {
    wp_enqueue_script('university_main_scripts', get_theme_file_uri('/js/scripts-bundled.js'), NULL, microtime(), true);
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Roboto+Mono&display=swap');
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('university_main_styles', get_stylesheet_uri(), microtime());
}

add_action('wp_enqueue_scripts', 'university_files');

function university_features() {
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'university_features');

?>