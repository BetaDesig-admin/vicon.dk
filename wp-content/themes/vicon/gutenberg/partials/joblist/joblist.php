<section class="jobList">
    <?php if($is_preview){ ?>
        <p style="padding: 20px; border:1px solid black; font-size: 22px; text-align: center">Der vises nu en liste jobs på denne side</p>
    <?php }else{?>
        <script src="https://recruit.hr-on.com/frame-api/hr.js" type="text/javascript"></script>
        <div id="hr-on">
            <noscript>This page requires javascript</noscript>
        </div>
        <script defer src="https://recruit.hr-on.com/frame-api/customers/viconaps.js?" type="text/javascript"></script>
    <?php } ?>

</section>

