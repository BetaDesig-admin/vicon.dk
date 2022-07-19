<?php
$image = get_field('image')['url'];
$text = get_field('text');
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
    </section>
<?php } ?>
