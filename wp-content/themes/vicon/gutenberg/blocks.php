<?php

function allow_blocks($blocks, $post)
{

    $blocks = [
        'acf/twocolumn', 'acf/text', 'acf/banner', 'acf/contactinfo', 'acf/services', 'acf/logoslider', 'acf/process', 'acf/application', 'acf/joblist'
    ];

    return $blocks;
}


function register_blocks()
{
    if (!function_exists('acf_register_block'))
        return;

    acf_register_block([
        'name' => 'twocolumn',
        'title' => 'Tekst og billede',
        'render_template' => __DIR__ . '/partials/two_column/two_column.php',
        'category' => 'layout',
        'icon' => 'align-left',
        'mode' => 'preview',
    ]);
    acf_register_block([
        'name' => 'text',
        'title' => 'Tekst indhold',
        'render_template' => __DIR__ . '/partials/text_content/text_content.php',
        'category' => 'layout',
        'icon' => 'welcome-write-blog',
        'mode' => 'preview',
    ]);
    acf_register_block([
        'name' => 'banner',
        'title' => 'Top Banner',
        'render_template' => __DIR__ . '/partials/banner/banner.php',
        'category' => 'layout',
        'icon' => 'format-image',
        'mode' => 'preview',
    ]);
    acf_register_block([
        'name' => 'contactinfo',
        'title' => 'Kontakt information',
        'render_template' => __DIR__ . '/partials/contact_info/contact_info.php',
        'category' => 'layout',
        'icon' => 'email',
        'mode' => 'preview',
    ]);
    acf_register_block([
        'name' => 'logoslider',
        'title' => 'Slider',
        'render_template' => __DIR__ . '/partials/logo_slider/logo_slider.php',
        'category' => 'layout',
        'icon' => 'images-alt',
        'mode' => 'preview',
    ]);

    acf_register_block([
        'name' => 'services',
        'title' => 'Ydelser',
        'render_template' => __DIR__ . '/partials/services/services.php',
        'category' => 'layout',
        'icon' => 'heart',
        'mode' => 'preview',
    ]);
    acf_register_block([
        'name' => 'process',
        'title' => 'Proces',
        'render_template' => __DIR__ . '/partials/process/process.php',
        'category' => 'layout',
        'icon' => 'star-filled',
        'mode' => 'preview',
    ]);
	acf_register_block([
		'name' => 'application',
		'title' => 'Uopfordret ansøgning',
		'render_template' => __DIR__ . '/partials/application/application.php',
		'category' => 'layout',
		'icon' => 'clipboard',
		'mode' => 'preview',
	]);
	acf_register_block([
		'name' => 'joblist',
		'title' => 'Jobliste',
		'render_template' => __DIR__ . '/partials/joblist/joblist.php',
		'category' => 'layout',
		'icon' => 'groups',
		'mode' => 'preview',
	]);
}

add_action('acf/init', 'register_blocks');
add_filter('allowed_block_types', 'allow_blocks', 1, 2);