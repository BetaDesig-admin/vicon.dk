<?php
$mode = get_field('layout');
$args = array(
    'post_type' => 'company',
    'post_status' => 'publish',
    'posts_per_page' => -1,
);

if ($mode === 'single') {
    $singles = get_field('singles');
    $args['post__in'] = $singles;
}
$loop = new WP_Query($args);
?>

    <section class="companys">
        <div class="container swiper reseller">
            <div class="swiper-wrapper">
                <?php while ($loop->have_posts()) : $loop->the_post();
                    $postID = get_the_ID();
                    $logo = get_field('logo', $postID);
                    $href = get_field('link', $postID);
                    $active = get_field('active', $postID);


                    if ($active === 'active') {
                        ?>
                        <div class="single swiper-slide">
                            <img src="<?= $logo['url'] ?>" alt="logo">
                        </div>
                        <?php
                    }
                endwhile;
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </section>

    <script>
        const swiper = new Swiper('.swiper.container.reseller', {
            direction: 'horizontal',
            loop: true,
            centeredSlides: true,
            autoplay: {
                delay: 3500,
            },
            breakpoints: {
                // when window width is >= 320px
                1024: {
                    slidesPerView: 4,
                },
                650: {
                    slidesPerView: 3,
                },
                450: {
                    slidesPerView: 2,
                },
                320: {
                    slidesPerView: 1,
                }
            }
        });
    </script>
<?php


