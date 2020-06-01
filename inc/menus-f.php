<?php
register_nav_menus(array(
    "main_menu" => "Main Menu",
));

add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1);
add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1);
add_filter('page_css_class', 'my_css_attributes_filter', 100, 1);
function my_css_attributes_filter($var)
{
    return is_array($var) ? array() : '';
}
