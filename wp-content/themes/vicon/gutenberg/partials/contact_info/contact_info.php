<?php
$email = get_field('infoemail', 'options');
$phone = get_field('phone', 'options');
$facebook = get_field('facebook', 'options');
$linkedin = get_field('linkedin', 'options');

$street = get_field('street', 'options');
$zip = get_field('zip', 'options');
$city = get_field('city', 'options');
$address = $street . ', ' . $zip . ' ' . $city;
?>

<section class="contact_info">
    <div class="container">
        <article class="body">
            <div class="text">
                <h2>Du finder os her</h2>
            </div>
            <div class="content">
                <div class="singles">
                    <div class="single location">
                        <h3>Besøg os</h3>
                        <p><?= $address ?></p>
                    </div>
                    <div class="single location">
                        <h3>Skriv til os</h3>
                        <p><a href="mailto:<?= $email ?>"><?= $email ?></a></p>
                    </div>

                    <div class="single location">
                        <h3>Ring til os</h3>
                        <p><a href="tel:<?= $phone ?>"><?= $phone ?></a></p>
                    </div>

                    <div class="single location">
                        <h3>Følg os</h3>
                        <div class="socials">
                            <?php if ($facebook) { ?>
                                <a href="<?= $facebook ?>"><?= file_get_contents(get_template_directory() . "/images/SVG/facebook.svg"); ?></a>
                            <?php } ?>

                            <?php if ($linkedin) { ?>
                                <a href="<?= $linkedin ?>"><?= file_get_contents(get_template_directory() . "/images/SVG/linkedin.svg"); ?></a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </div>
</section>