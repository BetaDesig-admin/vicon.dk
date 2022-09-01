<?php

// Edit admin menu
add_action("admin_menu", function () {
    // remove_menu_page('edit.php'); // Remove the Post Menu
    remove_menu_page('edit-comments.php'); // Remove the Comments Menu
    remove_menu_page('widgets.php'); // Remove the Widgets Menu
    remove_submenu_page('themes.php', 'widgets.php');
    global $submenu;
    unset($submenu['themes.php'][6]); // Customize link
});


// Reordering the admin menu
add_filter('custom_menu_order', '__return_true');
add_filter('menu_order', function ($menu_ord) {
    if (!$menu_ord) return true;

    return array(
        'index.php', // Dashboard
        'separator1', // First separator
        'edit.php?post_type=page', // Pages
        'edit.php', // Posts

        'edit.php?post_type=company', // Posts
        'edit.php?post_type=services', // Posts
        'edit.php?post_type=process', // Posts

        'edit.php?post_type=product', // Products
        'woocommerce', // WooCommerce
        'separator2', // Second separator
        'upload.php', // Media
        'themes.php', // Appearance
        'plugins.php', // Plugins
        'users.php', // Users
        'separator-last', // Last separator
        'tools.php', // Tools
        'options-general.php', // Settings
        'separator-woocommerce', // WooCommerce separator
    );
});


// Rename default template title
add_filter('default_page_template_title', function () {
    return __('Side', 'nlu');
});


// Adding template in page columns
add_filter('manage_pages_columns', function ($columns) {
    $columns = array(
        'cb' => $columns['cb'],
        'title' => __('Title'),
        'template' => __('Skabelon'),
        'date' => __('Dato'),
    );

    return $columns;
});

add_filter('manage_pages_custom_column', function ($column, $post_id) {
    if ($column == 'template') {
        $page_template = get_post($post_id)->page_template;
        $page_templates = wp_get_theme()->get_page_templates();
        if (isset($page_templates[$page_template]))
            echo __($page_template === "" ? "Side" : $page_templates[$page_template]);
    }
}, 10, 2);


// Use SMTP to send mails if curanet server
add_action('phpmailer_init', function ($phpmailer) {
    if (strpos(gethostname(), "123hotel.dk") !== false) {
        $phpmailer->isSMTP();
        $phpmailer->Host = "smtp.curanet.dk";
        $phpmailer->SMTPAuth = false;
        $phpmailer->Port = 25;
        $phpmailer->Username = null;
        $phpmailer->Password = null;
        $phpmailer->SMTPSecure = null;
        $phpmailer->From = "noreply@" . $_SERVER['SERVER_NAME'];
        $phpmailer->FromName = $_SERVER['SERVER_NAME'];
    }
});


function add_company_post_type()
{
    $labels = array(
        'name' => _x('Virksomheder', 'Post type general name', 'textdomain'),
        'singular_name' => _x('Virksomhed', 'Post type singular name', 'textdomain'),
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'menu_icon' => 'dashicons-businessman',
        'rewrite' => array('slug' => 'Virksomhed'),
        'capability_type' => 'post',
        'has_archive' => false,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title'),
    );
    register_post_type('company', $args);
}

add_action('init', 'add_company_post_type');

function add_services_post_type()
{
    $labels = array(
        'name' => _x('Ydelser', 'Post type general name', 'textdomain'),
        'singular_name' => _x('Ydelse', 'Post type singular name', 'textdomain'),
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'ydelser'),
        'capability_type' => 'post',
        'menu_icon' => 'dashicons-admin-network',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title'),
    );
    register_post_type('services', $args);
}

add_action('init', 'add_services_post_type');

function add_process_post_type()
{
    $labels = array(
        'name' => _x('Processen', 'Post type general name', 'textdomain'),
        'singular_name' => _x('Process', 'Post type singular name', 'textdomain'),
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'menu_icon' => 'dashicons-networking',
        'rewrite' => array('slug' => 'processen'),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title'),
    );
    register_post_type('process', $args);
}

add_action('init', 'add_process_post_type');

function remove_posts_menu() {
    remove_menu_page('edit.php');
}
add_action('admin_menu', 'remove_posts_menu');