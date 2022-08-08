<?php

$heading = get_field('heading');
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
                <div class="single">
                    <a href="#">
                        <div class="num">
                            <?= $i ?>
                        </div>
                        <h4>Rekruttering</h4>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                            invidunt
                            ut
                            labore et dolore magna aliquyam erat, sed diam voluptua. </p>
                        <span>Læs mere
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40"
                         height="40" viewBox="0 0 40 40">
                        <image id="icons8-right-50" width="40" height="40"
                               xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAABmJLR0QA/wD/AP+gvaeTAAABVElEQVRoge3YP0vDQBiA8ecSUzopODvqJLSD4C4mUicXHUQ6+UX0gwiii+AXKP7rLtgWQXBwFwdFt9omPRcXbW1N7uBOfH9zeXsPhNxdQAghhBBCiAmUiz+9qFdO0Ezr92g7Ob15szEzsDGkgAUU66rcPzvfWpqxMdBJSDhgQ6MegGVV7l81dhdnTWc6ebQAmjuVuTRQTYWeB1ppKUtqB3cvRec5C4GhmHZayuKiMU5DwF6M8xAYjkH1kvjo/jnPDC9CwDzGmxD4FqPpEPTi38Z4FQLFY7wLgWIxY0M0qMt6tQ26anepubXCMFhdOey8/vSDsTv7/h4K9MD+uuz7H4+WC0Vfw16FmOwl3oSYboiu7iNfjDpv5T2iOA8ZcZz/e4dGm3cSuViZsB0BMGVpbblkAY3PiGvdjdZqx7fGX1KchABPwKPuRpu2PgcJIYQQQggx0QfpbNGDoQ5szwAAAABJRU5ErkJggg=="/>
                    </svg>
                </span>
                    </a>
                </div>

                <?php $i++; ?>

            </article>
            <a href="#" class="more">Se alle ydelser
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40"
                     height="40" viewBox="0 0 40 40">
                    <image id="icons8-right-50" width="40" height="40"
                           xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAABmJLR0QA/wD/AP+gvaeTAAABVElEQVRoge3YP0vDQBiA8ecSUzopODvqJLSD4C4mUicXHUQ6+UX0gwiii+AXKP7rLtgWQXBwFwdFt9omPRcXbW1N7uBOfH9zeXsPhNxdQAghhBBCiAmUiz+9qFdO0Ezr92g7Ob15szEzsDGkgAUU66rcPzvfWpqxMdBJSDhgQ6MegGVV7l81dhdnTWc6ebQAmjuVuTRQTYWeB1ppKUtqB3cvRec5C4GhmHZayuKiMU5DwF6M8xAYjkH1kvjo/jnPDC9CwDzGmxD4FqPpEPTi38Z4FQLFY7wLgWIxY0M0qMt6tQ26anepubXCMFhdOey8/vSDsTv7/h4K9MD+uuz7H4+WC0Vfw16FmOwl3oSYboiu7iNfjDpv5T2iOA8ZcZz/e4dGm3cSuViZsB0BMGVpbblkAY3PiGvdjdZqx7fGX1KchABPwKPuRpu2PgcJIYQQQggx0QfpbNGDoQ5szwAAAABJRU5ErkJggg=="/>
                </svg>
            </a>
        </div>
    </section>
<?php
