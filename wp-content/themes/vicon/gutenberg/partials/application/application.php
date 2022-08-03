<?php
$heading = get_field('heading');
$text = get_field('text');
?>

<section class="application">
    <div class="container">
        <?php if ($heading) { ?>
            <div class="header">
                <div class="heading"><h2><?= $heading ?></h2></div>
                <div class="text"><?= $text ?></div>
            </div>
        <?php } ?>
        <div class="body">
            <div class="nav" id="formNav">
            </div>
            <div class="form" id="appform">
                <?= do_shortcode('[contact-form-7 id="66" title="Multi step - Send dit CV"]') ?>
            </div>
        </div>
    </div>
</section>
