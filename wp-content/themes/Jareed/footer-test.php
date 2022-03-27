 <?php 
$site_settings = pods('site_settings');
    $params = array(
    'where' => 't.ID = "136"',
    'limit' => 1
    );
    
    $site_settings->find($params);
    $logo = $site_settings->get_field('footer_logo');
    $footer_logo = $logo[0]['guid'];
    $google_map = $site_settings->get_field('google_map');
    $social_media_accounts_dark = $site_settings->get_field('social_media_accounts_dark');
    $contact = $site_settings->get_field('contact');
?>
 <!-- Footer -->
    <!-- script -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script src="<?php echo get_template_directory_uri() ?>/js/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="<?php echo get_template_directory_uri() ?>/js/custom.js"></script>    
    <script src="<?php echo get_template_directory_uri() ?>/aos-master/dist/aos.js"></script>
    <script src="https://vjs.zencdn.net/7.11.4/video.min.js"></script>
    <!-- <script src="<?php echo get_template_directory_uri() ?>/splide-2.4.21/dist/js/splide.min.js"></script> -->
    <script src="<?php echo get_template_directory_uri() ?>/datepicker-master/dist/datepicker.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/pagescroll/pagescroll.js"></script>

    <script>
        AOS.init({
            once:true,
        });
    //     new fullpage('#fullpage', {
    //     licenseKey: 'YOUR KEY HERE',
    //     //options here
    //     autoScrolling:true,
    //     scrollHorizontally: true
    // });

    //methods
    // fullpage_api.setAllowScrolling(false);
    new PageScroll('#pagescroll', {
        animDuration: 500,
        easing: 'cubic-bezier(...)'
    })
    </script>
</body>
</html>