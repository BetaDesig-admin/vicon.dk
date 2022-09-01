<?php
if (!$image) {
    $image = get_field('image')['url'];
}
if (!$text) {
    $text = get_field('text');
}

if ($is_preview) {
    if (!$image) {
        $image = 'https://via.placeholder.com/1920x1024/BC5D2E/EAEAEA?Text=Vicon.com';
    }
    if (!$text) {
        $text = '<h2>Indtast en kort tekst i højre side menu</h2>';
    }
}

?>

<?php if ($image) { ?>
    <section class="banner">
        <div class="image">
            <img src="<?= $image ?>" alt="Banner image">
        </div>
        <div class="container">
            <div class="text">
                <?= $text ?>
            </div>
        </div>
        <div class="scroll">
                <span id="scrollTo" onclick="ScrollToNextSection(event);">
             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path
                         d="M246.6 470.6c-12.5 12.5-32.8 12.5-45.3 0l-160-160c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L224 402.7 361.4 265.4c12.5-12.5 32.8-12.5 45.3 0s12.5 32.8 0 45.3l-160 160zm160-352l-160 160c-12.5 12.5-32.8 12.5-45.3 0l-160-160c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L224 210.7 361.4 73.4c12.5-12.5 32.8-12.5 45.3 0s12.5 32.8 0 45.3z"/></svg></span>
        </div>
    </section>
<?php } ?>
