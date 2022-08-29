<?php


$showFooter = get_field('show_contact_form', get_the_ID());


$makeSpacing = '';
if ( $showFooter) {
    $makeSpacing = 'makeSpacing';
    $banner = get_field('footer_image', 'options')['url'];
}
$name = get_field('company', 'options');
$cvr = get_field('cvr', 'options');
$email = get_field('infoemail', 'options');
$phone = get_field('phone', 'options');
$facebook = get_field('facebook', 'options');
$linkedin = get_field('linkedin', 'options');


$street = get_field('street', 'options');
$zip = get_field('zip', 'options');
$city = get_field('city', 'options');

$address = $street . ', ' . $zip . ' ' . $city;

$message = get_field('message');

?>

<footer class="<?= $makeSpacing ?>">

    <?php if ($showFooter && is_front_page()) { ?>
        <div class="image">
            <img src="<?= $banner ?>" alt="">
        </div>
    <?php } ?>

    <div class="container">

        <?php if ($showFooter || $showFooter) {
            $contactText = get_field('contact_form_text', get_the_ID());
            ?>
            <section class="form">
                <div class="text">
                    <h2><?= $contactText ?></h2>
                </div>
                <div class="form">
                    <?= do_shortcode('[contact-form-7 id="59" title="Footer"]') ?>
                </div>
            </section>
        <?php } ?>

        <div class="content">
            <div class="section">
                <h4>Besøg os</h4>
                <p><?= $address ?></p>
            </div>
            <?php if ($email) { ?>
                <div class="section">
                    <h4>Skriv til os</h4>
                    <p><a href="mailto:<?= $email ?>"> <?= $email ?></a></p>
                </div>
            <?php } ?>
            <?php if ($phone) { ?>
                <div class="section">
                    <h4>Ring til os</h4>
                    <p><a href="tel:<?= $phone ?>"> <?= $phone ?></a></p>
                </div>
            <?php } ?>
            <div class="section">
                <h4>Følg os</h4>
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
        <div class="copy"><strong><?= $name ?></strong><span><?= $cvr ?></span></div>
    </div>

</footer>
<?php wp_footer(); ?>
</body>
</html>