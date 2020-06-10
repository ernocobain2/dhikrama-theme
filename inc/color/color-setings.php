<?php
function dhikrama_themes_cosutumize($wp_costumize)
{
    $wp_costumize->add_setting('dh_header_color', array(
        'default' => '#f9f9f9)',
        'transport' => 'refresh',
    ));

    $wp_costumize->add_setting('dh_footer_color', array(
        'default' => '#ffffff',
        'transport' => 'refresh',
    ));

    $wp_costumize->add_setting('dh_nav_color', array(
        'default' => '#00171f',
        'transport' => 'refresh',
    ));

    $wp_costumize->add_setting('dh_link_color', array(
        'default' => '#003459',
        'transport' => 'refresh',
    ));


    $wp_costumize->add_setting('dh_nav_color_hover', array(
        'default' => 'rgb(187, 128, 51)',
        'transport' => 'refresh',
    ));


    $wp_costumize->add_setting('dh_footer_color', array(
        'default' => 'grey',
        'transport' => 'refresh',
    ));

    $wp_costumize->add_section('dh_standar_colors', array(
        'title' => _('Pemilihan Warna'),
        'priority' => 30,
    ));

    $wp_costumize->add_control(new WP_Customize_Color_Control($wp_costumize, 'dh_header_color_control', array(
        'label' => _('Warna Header'),
        'section' =>  'dh_standar_colors',
        'settings' => 'dh_header_color',
    )));

    $wp_costumize->add_control(new WP_Customize_Color_Control($wp_costumize, 'dh_link_color_control', array(
        'label' => _('Warna Link'),
        'section' =>  'dh_standar_colors',
        'settings' => 'dh_link_color',
    )));

    $wp_costumize->add_control(new WP_Customize_Color_Control($wp_costumize, 'dh_nav_color_control', array(
        'label' => _('Warna Menu'),
        'section' =>  'dh_standar_colors',
        'settings' => 'dh_nav_color',
    )));

    $wp_costumize->add_control(new WP_Customize_Color_Control($wp_costumize, 'dh_link_color_control_hover', array(
        'label' => _('Warna Hover'),
        'section' =>  'dh_standar_colors',
        'settings' => 'dh_nav_color_hover',
    )));

    $wp_costumize->add_control(new WP_Customize_Color_Control($wp_costumize, 'dh_footer_color_control', array(
        'label' => _('Warna Footer'),
        'section' =>  'dh_standar_colors',
        'settings' => 'dh_footer_color',
    )));
}

add_action('customize_register',  'dhikrama_themes_cosutumize');

/*colors*/

get_template_part('inc/color/color', 'header');
get_template_part('inc/color/color', 'nav');
get_template_part('inc/color/color', 'link');
get_template_part('inc/color/color', 'footer');
