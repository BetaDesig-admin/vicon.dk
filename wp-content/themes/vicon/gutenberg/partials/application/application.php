<section class="application">

    <?php if ($is_preview) { ?>
        <p style="padding: 20px; border:1px solid black; font-size: 22px; text-align: center">Der vises nu en
            mulighed for at sende ansøgning på denne side</p>
    <?php } else { ?>
        <div class="container">
            <script src="https://recruit.hr-on.com/frame-api/hr.js" type="text/javascript"></script>
            <div id="hrskyen">
                <noscript>This page requires javascript</noscript>
            </div>
            <script defer src="https://recruit.hr-on.com/frame-api/customers/viconaps-unsolicited.js?"
                    type="text/javascript"></script>
        </div>
    <?php } ?>
</section>


