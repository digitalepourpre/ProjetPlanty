<?php
/**
 * OceanWP Child Theme Functions
 *
 * When running a child theme (see http://codex.wordpress.org/Theme_Development
 * and http://codex.wordpress.org/Child_Themes), you can override certain
 * functions (those wrapped in a function_exists() call) by defining them first
 * in your child theme's functions.php file. The child theme's functions.php
 * file is included before the parent theme's file, so the child theme
 * functions will be used.
 *
 * Text Domain: oceanwp
 * @link http://codex.wordpress.org/Plugin_API
 *
 */

/**
 * Load the parent style.css file
 *
 * @link http://codex.wordpress.org/Child_Themes
 */

function oceanwp_child_enqueue_parent_style() {
    // Load the parent stylesheet first
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    
    // Load the child stylesheet
    wp_enqueue_style('child-style', get_stylesheet_uri(), array('parent-style'));
}

add_action('wp_enqueue_scripts', 'oceanwp_child_enqueue_parent_style');

function add_admin_link_to_menu($items, $args) {
    // Vérifie si l'utilisateur est connecté
    if (is_user_logged_in()) {
        // Crée le lien "admin"
        $admin_link = '<li><a href="' . admin_url() . '">Admin</a></li>';

        // Trouve l'index de l'élément du menu où vous souhaitez insérer le lien "admin"
        $menu_items = explode('</li>', $items);
        $index_to_insert = floor(count($menu_items) / 2);

        // Insère le lien "admin" à l'index spécifié
        array_splice($menu_items, $index_to_insert, 0, $admin_link);

        // Réassemble les éléments du menu
        $items = implode('</li>', $menu_items);
    }

    return $items;
}
add_filter('wp_nav_menu_items', 'add_admin_link_to_menu', 10, 2);
