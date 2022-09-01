<?php get_header();
$text = get_field('serivces_text', 'options');
$image = get_field('serivces_image', 'options')['url'];
$heading = get_field('services_heading', 'options');
$footer = get_field('services_footer', 'options');

require_once('gutenberg/partials/banner/banner.php')
?>
    <section class="archive std services">

        <?php if ($heading) { ?>
            <div class="single heading"><h1><?= $heading ?></h1></div>
        <?php } ?>
        <?php if (have_posts()): ?>
            <?php while (have_posts()) : the_post();
                $svg = get_field('svg_header');
                $desc = get_field('desc_details');
                $active = get_field('active');
                if ($active !== 'deactive') {
                    ?>
                    <div class="single">
                        <div class="svg">
                            <?= file_get_contents(get_template_directory() . "/images/services/details/" . $svg . ".svg"); ?>
                        </div>
                        <div class="content">
                            <h2><?php the_title(); ?></h2>
                            <?= $desc ?>
                        </div>
                    </div>
                    <?php the_excerpt(); ?>
                    <?php
                }
            endwhile;
            wp_reset_query(); ?>
        <?php endif; ?>
        <div class="single heading">
            <h2><?= $footer ?></h2>
            <a href="/kontakt" class="servicesContact">
                <span>Kontakt os</span>
                <svg xmlns="http://www.w3.org/2000/svg"
                     xmlns:xlink="http://www.w3.org/1999/xlink" width="40" height="40"
                     viewBox="0 0 40 40">
                    <image id="icons8-right-50_2_" data-name="icons8-right-50 (2)" width="40" height="40"
                           xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAABmJLR0QA/wD/AP+gvaeTAAABhklEQVRoge3YPUvDUBTG8f9N01oXBV0d6ywu7mqLdCgi6ODiUvEzSKdIQfwMoiCdBAcFB18Q3R1aP0BHQRwU3WrbJE4BG7Q2L+VGOb+5Ob0PJ+fmJiCEEEIIIcQvlI4/rZZLxy6MZVLZ9e39k/c4ahpxFAlMMQ0UP+zW9d7W2ngcJbUEsekuA00Fcx2ndWuVlyai1tRyawFYm8UpwzXvgJxS1G23XbAOr17D1tMWBHrDAA2Hdj5sGK1BIL4weob9C+vg4tFR3XmgCcwaZG52N1Ymg9bR3hGPvzNmxyxUaqcvg16vvSMef2fstB2oM4npiKdnN0M9pDqp/CCdSVwQCBembxAXVLVcagAzcS40KKWo293UonV09vbTb/rOyI5lKcCJfWVD8G9urcTsWh7/Nvwnhz3KsyQxQaI+EM3hLW1w3523KrXzQOct7TPiP86HPTQm5hgf9Z1EXqyiiDsEaJoRwzUvgZwL92kjuxA1BOjatVyeMdynEWN0Na7PQUIIIYQQQvzqE5J6wv9qhMioAAAAAElFTkSuQmCC"/>
                </svg>
            </a>
        </div>
    </section>
<?php get_footer(); ?>