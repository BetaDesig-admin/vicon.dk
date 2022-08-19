<?php

$heading = get_field( 'heading' );

$mode = get_field( 'layout' );
$args = array(
	'post_type'      => 'process',
	'post_status'    => 'publish',
	'posts_per_page' => - 1,
);

if ( $mode === 'single' ) {
	$singles          = get_field( 'singles' );
	$args['post__in'] = $singles;
}
$loop = new WP_Query( $args );

$i = 1;
?>

    <section class="process">
        <div class="container">
            <article class="body">
				<?php if ( $heading ) { ?>
                    <div class="text">
                        <h2><?= $heading ?></h2>
                    </div>
				<?php } ?>

                <div class="swiper processSlider">
                    <div class="singles swiper-wrapper">
						<?php while ( $loop->have_posts() ) : $loop->the_post();
							$desc = get_field( 'desc', get_the_ID() );
							?>
                            <div class="single swiper-slide">
                                <div class="num">
                                    0<?= $i ?>
                                </div>
                                <h4><?= get_the_title(); ?></h4>
								<?= $desc ?>
                            </div>
							<?php
							$i ++;
						endwhile;
						wp_reset_postdata();
						?>
                    </div>
                </div>
            </article>
            <a href="<?= get_post_type_archive_link( 'services' ) ?>" class="more">
                <span>Se hele processen</span>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40"
                     height="40" viewBox="0 0 40 40">
                    <image id="icons8-right-50_2_" data-name="icons8-right-50 (2)" width="40" height="40"
                           xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAABmJLR0QA/wD/AP+gvaeTAAABhklEQVRoge3YPUvDUBTG8f9N01oXBV0d6ywu7mqLdCgi6ODiUvEzSKdIQfwMoiCdBAcFB18Q3R1aP0BHQRwU3WrbJE4BG7Q2L+VGOb+5Ob0PJ+fmJiCEEEIIIcQvlI4/rZZLxy6MZVLZ9e39k/c4ahpxFAlMMQ0UP+zW9d7W2ngcJbUEsekuA00Fcx2ndWuVlyai1tRyawFYm8UpwzXvgJxS1G23XbAOr17D1tMWBHrDAA2Hdj5sGK1BIL4weob9C+vg4tFR3XmgCcwaZG52N1Ymg9bR3hGPvzNmxyxUaqcvg16vvSMef2fstB2oM4npiKdnN0M9pDqp/CCdSVwQCBembxAXVLVcagAzcS40KKWo293UonV09vbTb/rOyI5lKcCJfWVD8G9urcTsWh7/Nvwnhz3KsyQxQaI+EM3hLW1w3523KrXzQOct7TPiP86HPTQm5hgf9Z1EXqyiiDsEaJoRwzUvgZwL92kjuxA1BOjatVyeMdynEWN0Na7PQUIIIYQQQvzqE5J6wv9qhMioAAAAAElFTkSuQmCC"/>
                </svg>
            </a>
        </div>
    </section>
    <script>
        var processSlider = new Swiper(".processSlider", {
            spaceBetween: 40,
            slidesPerView: 1.3,
            breakpoints: {
                // when window width is >= 320px
                1024: {
                    slidesPerView: 3.3,
                    spaceBetween: 60,
                },
                650: {
                    slidesPerView: 2.3,
                },
            }
        });
    </script>
<?php
