<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>
        <?php
        if (!is_home()):
            wp_title('|', true, 'right');
        endif;
        bloginfo('name');
        ?>
    </title>
    <?php wp_head(); ?>


    <link rel="icon" type="image/png" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon/vicon_favicon.png"/>
</head>
<body>
<?php

$headerColor = 'banner';

if (!sg_first_block_is('acf/banner')) {
    $headerColor = 'nobanner';
}
?>
<input type="checkbox" name="menuToggle" id="menuToggle"/>
<header id="header" class="<?= $headerColor ?>">
    <div class="container">
        <section class="logo">
            <a href="<?php echo home_url(); ?>">
                <div class="white">
                    <?= file_get_contents(get_template_directory() . "/images/logo/Vicon-logo-hvid.svg"); ?>
                </div>
            </a>
        </section>
        <label for="menuToggle">
            <span></span>
            <span></span>
            <span></span>
        </label>
        <section class="menu">
            <?php wp_nav_menu(array(
                'menu' => 'Hovedemenu', // Do not fall back to first non-empty menu.
                'theme_location' => 'Hovedmenuen',
                'fallback_cb' => false // Do not fall back to wp_page_menu()
            )); ?>
        </section>
    </div>
</header>
</body>