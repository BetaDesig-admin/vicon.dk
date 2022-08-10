<?php

$heading = get_field('heading');

$mode = get_field('layout');
$args = array(
    'post_type' => 'process',
    'post_status' => 'publish',
    'posts_per_page' => -1,
);

if ($mode === 'single') {
    $singles = get_field('singles');
    $args['post__in'] = $singles;
}
$loop = new WP_Query($args);

$i = 1;
?>

    <section class="process">
        <div class="container">
            <article class="body">
                <?php if ($heading) { ?>
                    <div class="text">
                        <h2><?= $heading ?></h2>
                    </div>
                <?php } ?>

                <?php while ($loop->have_posts()) : $loop->the_post();
                    $desc = get_field('desc', get_the_ID());
                    ?>
                    <div class="single">
                        <a href="<?= get_post_type_archive_link('process')?>">
                            <div class="num">
                                0<?= $i ?>
                            </div>
                            <h4><?= get_the_title(); ?></h4>
                            <?= $desc ?>

                            <span>Læs mere
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40"
                         height="40" viewBox="0 0 40 40">
                        <image id="icons8-right-50" width="40" height="40"
                               xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAABmJLR0QA/wD/AP+gvaeTAAABVElEQVRoge3YP0vDQBiA8ecSUzopODvqJLSD4C4mUicXHUQ6+UX0gwiii+AXKP7rLtgWQXBwFwdFt9omPRcXbW1N7uBOfH9zeXsPhNxdQAghhBBCiAmUiz+9qFdO0Ezr92g7Ob15szEzsDGkgAUU66rcPzvfWpqxMdBJSDhgQ6MegGVV7l81dhdnTWc6ebQAmjuVuTRQTYWeB1ppKUtqB3cvRec5C4GhmHZayuKiMU5DwF6M8xAYjkH1kvjo/jnPDC9CwDzGmxD4FqPpEPTi38Z4FQLFY7wLgWIxY0M0qMt6tQ26anepubXCMFhdOey8/vSDsTv7/h4K9MD+uuz7H4+WC0Vfw16FmOwl3oSYboiu7iNfjDpv5T2iOA8ZcZz/e4dGm3cSuViZsB0BMGVpbblkAY3PiGvdjdZqx7fGX1KchABPwKPuRpu2PgcJIYQQQggx0QfpbNGDoQ5szwAAAABJRU5ErkJggg=="/>
                    </svg>
                </span>
                        </a>
                    </div>
                    <?php
                    $i++;
                endwhile;
                wp_reset_postdata();
                ?>

            </article>
            <a href="<?= get_post_type_archive_link('process')?>" class="more">Se alle processor
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40"
                     height="40" viewBox="0 0 40 40">
                    <image id="icons8-right-50" width="40" height="40"
                           xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAABmJLR0QA/wD/AP+gvaeTAAABVElEQVRoge3YP0vDQBiA8ecSUzopODvqJLSD4C4mUicXHUQ6+UX0gwiii+AXKP7rLtgWQXBwFwdFt9omPRcXbW1N7uBOfH9zeXsPhNxdQAghhBBCiAmUiz+9qFdO0Ezr92g7Ob15szEzsDGkgAUU66rcPzvfWpqxMdBJSDhgQ6MegGVV7l81dhdnTWc6ebQAmjuVuTRQTYWeB1ppKUtqB3cvRec5C4GhmHZayuKiMU5DwF6M8xAYjkH1kvjo/jnPDC9CwDzGmxD4FqPpEPTi38Z4FQLFY7wLgWIxY0M0qMt6tQ26anepubXCMFhdOey8/vSDsTv7/h4K9MD+uuz7H4+WC0Vfw16FmOwl3oSYboiu7iNfjDpv5T2iOA8ZcZz/e4dGm3cSuViZsB0BMGVpbblkAY3PiGvdjdZqx7fGX1KchABPwKPuRpu2PgcJIYQQQggx0QfpbNGDoQ5szwAAAABJRU5ErkJggg=="/>
                </svg>
            </a>
        </div>
    </section>
<?php
