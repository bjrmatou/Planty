<?php

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
}




/**********HOOK LIEN ADMIN NAVBAR *************************/

add_filter( 'wp_nav_menu_items', 'add_menu_item', 10, 2 );
function add_menu_item ( $items, $args ) 
{        
    $items_array = array();

        if ( is_user_logged_in ( $item_pos = strpos ( $items, '<li', 2 ) ) ) 
        {
            $items_array[] = substr($items, 0, $item_pos);
            $items = substr($items, $item_pos);
        }

        $items_array[] = $items;
        array_splice($items_array, 1, 0, '<li class="menu-item-ad"><a href="' . admin_url() . '">Admin</a></li>'); // POSITION DE L'ITEM ici 1 donc

        $items = implode('', $items_array);
       
       return $items;
}




?>

