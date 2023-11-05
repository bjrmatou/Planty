<?php

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
}




/**********HOOK LIEN ADMIN NAVBAR *************************/

add_filter ( 'wp_nav_menu_items', 'add_admin_link_to_menu', 10, 2);
function add_admin_link_to_menu($items, $args) 
{
    if (is_user_logged_in() && $args->menu === 'navbar') 
    {
        $menu_items = explode('</li>', $items);
        $new_item = '<li class="menu-item"><a href="' . admin_url() . '">Admin</a></li>';
        array_splice($menu_items, floor(count($menu_items) / 2), 0, $new_item);
        $items = implode('</li>', $menu_items);
    }

    return $items;
}


/************SCRIPT BOUTONS CONTACT FORM *****/
function include_custom_js() {
    wp_enqueue_script('buttonForm', get_stylesheet_directory_uri() . '/buttonForm.js', array('jquery'), null, true);
}

add_action('wp_enqueue_scripts', 'include_custom_js');


?>


