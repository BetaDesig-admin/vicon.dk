<?php
// Show php errors
if (isset($_GET['test'])) {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
}

require_once(__DIR__ . "/gutenberg/blocks.php");
require_once(__DIR__ . "/php/enqueue.php");
require_once(__DIR__ . "/php/admin.php");

register_nav_menus(array('primary' => 'Hovedmenuen'));
add_theme_support('post-thumbnails', array('post'));

// optionspage
if (function_exists('acf_add_options_page')) {
    acf_add_options_sub_page(array(
        'page_title' => 'Basis information',
        'menu_title' => 'Basis information',
        'parent_slug' => 'themes.php',
    ));
    acf_add_options_sub_page(array(
        'page_title' => 'Ydelser arkiv',
        'menu_title' => 'Ydelser arkiv',
        'parent_slug' => 'edit.php?post_type=services',
    ));
    acf_add_options_sub_page(array(
        'page_title' => 'Processen arkiv',
        'menu_title' => 'Processen arkiv',
        'parent_slug' => 'edit.php?post_type=process',
    ));
}

function fb_mce_editor_buttons($buttons)
{

    array_unshift($buttons, 'styleselect');
    return $buttons;
}

add_filter('mce_buttons_2', 'fb_mce_editor_buttons');


function custom_styles($init_array)
{
    $style_formats = array();

    // Insert the array, JSON ENCODED, into 'style_formats'
    $init_array['style_formats'] = json_encode($style_formats);
    return $init_array;
}

add_filter('tiny_mce_before_init', 'custom_styles');

function sg_first_block_is($block_handle)
{
    $post = get_post();

    if (has_blocks($post->post_content)) {
        $blocks = parse_blocks($post->post_content);

        if ($blocks[0]['blockName'] === $block_handle) {
            return true;
        } else {
            return false;
        }
    }
}

function launchpad_render_acf_block( $block_name, $attrs = [] ) {
    $block = acf_get_block_type( $block_name );
    $content = '';
    $is_preview = false;

    foreach( $attrs as $attr => $val) {
        $block['data'][$attr] = $val;
    }

    echo acf_rendered_block( $block, $content, $is_preview );
}