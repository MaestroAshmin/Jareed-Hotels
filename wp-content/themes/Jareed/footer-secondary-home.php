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
     <footer class="footer-secondary text-left text-lg-start" >
    <!-- Grid container -->
    <div class="footer-links">
        <!--Grid row-->
        <div class="row seven-cols" data-aos="fade-up">
        <!--Grid column-->
        <div class="links col-md-1 col-lg-1 col-sm-1 mb-4 mb-md-0">
            <ul class="list-unstyled">
            <li>
                <a href="<?php echo site_url();?>/about-us" class=""><b>About us</b></a>
            </li>
            <br>    
            <li>
                <a href="<?php echo site_url();?>/about-us#jareed-story">Story</a>
            </li>
            <li>
                <a href="<?php echo site_url();?>/about-us#jareed-experience" class="">Experience</a>
            </li>
            <li>
                <a href="<?php echo site_url();?>/about-us#NMR-hospitality" class="">NMR Hospitality</a>
            </li>
            <li>
                <a href="<?php echo site_url();?>/about-us#the-boulevard" class="">The Boulevard</a>
            </li>
            </ul>
        </div>
        
        <!--Grid column-->

        <!--Grid column-->
        <div class="links col-md-1 col-lg-1 col-sm-1 mb-4 mb-md-0" >
            <ul class="list-unstyled">
            <li>
                <a href="rooms-&-suites.php" class=""><b>Rooms & Suites</b></a>
            </li>
            <br> 
            <li>
                <a href="rooms-&-suites.php" class=""><b>Rooms</b></a>
            </li>
            <li>
                <a href="#" class="#">Boulevard View</a>
            </li>
            <li>
                <a href="#" class="#">Superior</a>
            </li>
            <li>
                <a href="standard-room.php" class="">Standard</a>
            </li>
            <br>
            <li>
                <a href="#!" class="#"><b>Suites</b></a>
            </li>
            <li>
                <a href="#!" class="#">Family</a>
            </li>
            <li>
                <a href="#!" class="#">Boulevard View</a>
            </li>
            <li>
                <a href="#!" class="#">Superior</a>
            </li>
            <li>
                <a href="#!" class="#">Standard</a>
            </li>
            </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="links col-md-1 col-lg-1 col-sm-1 mb-4 mb-md-0">
            <ul class="list-unstyled">
            <li>
                <a href="index.php#packages" class=""><b>Packages</b></a>
            </li>
            <br> 
            <li>
                <a href="index.php#packages" class="">Celebrate in Style</a>
            </li>
            <li>
                <a href="index.php#packages" class="#">Stay a little longer</a>
            </li>
            <li>
                <a href="index.php#packages" class="">Weekend Escape</a>
            </li>
            </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="links col-md-1 col-lg-1 col-sm-1 mb-4 mb-md-0">
            <ul class="list-unstyled">
            <li>
                <a href="<?php echo site_url();?>/spa-wellness" class=""><b>Spa & Wellness</b></a>
            </li>
            <br> 
            <li>
                <a href="<?php echo site_url();?>/spa-wellness#jimam-spa" class="">Spa | Jimam Spa</a>
            </li>
            <li>
                <a href="<?php echo site_url();?>/spa-wellness#barbershop" class="">Barbershop | Four Style</a>
            </li>
            <li>
                <a href="<?php echo site_url();?>/spa-wellness#arena-fitness-center" class="">Fitness | Arena & Almultaka</a>
            </li>
            </ul>
        </div>
        <!--Grid column-->
        <!--Grid column-->
        <div class="links col-md-1 col-lg-1 col-sm-1 mb-4 mb-md-0">
            <ul class="list-unstyled">
            <li>
                <a href="index.php#restaurant" class=""><b>Restaurants</b></a>
            </li>
            <br> 
            <li>
                <a href="index.php#restaurant" class="">Morini</a>
            </li>
            <li>
                <a href="index.php#restaurant" class="">The Living Room</a>
            </li>
            </ul>
        </div>
        <!--Grid column-->
        <!--Grid column-->
        <div class="links col-md-1 col-lg-1 col-sm-1 mb-4 mb-md-0">
            <ul class="list-unstyled">
            <li>
                <a href="index.php#meetings" class=""><b>Meetings & Events</b></a>
            </li>
            <br> 
            <li>
                <a href="index.php#meetings" class="">The Private Office</a>
            </li>
            <li>
                <a href="index.php#meetings" clas="index.php#meetings">The Living Room</a>
            </li>
            </ul>
        </div>
        <!--Grid column-->
        <!--Grid column-->
         <div class="links col-md-1 col-lg-1 col-sm-1 mb-4 mb-md-0">
            <ul class="list-unstyled">
            <li>
                <a href="index.php#experiences" class=""><b>Experiences</b></a>
            </li>
            <br> 
            <li>
                <a href="index.php#experiences" class="">Al Masmak Fortress</a>
            </li>
            <li>
                <a href="index.php#experiences" class="">The National Museum</a>
            </li>
            <li>
                <a href="index.php#experiences" class="">Edge of The World</a>
            </li>
            <li>
                <a href="index.php#experiences" class="">Historical Diriyah</a>
            </li>
            <li>
                <a href="index.php#experiences" class="">Saqr Al-Jazira Museum</a>
            </li>
            </ul>
        </div>
        <!--Grid column-->
        
        </div>
        <div class="footer-underline"></div>
        <!--Grid row-->
    </div>
    <!-- Grid container -->
    <section id="contact">
    <div class="container contact">
            <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" data-aos="fade-up">
                <div class="section-title">
                    <h2>CONTACT US</h2>
                    <?php foreach($social_media_accounts_dark as $sma_theme) {
                        $icon= wp_get_attachment_image_src($sma_theme['icon'], $size="large");
                        ?>
                        <a href="<?php echo $sma_theme['url'];?>" target="_blank"><img src="<?php echo $icon[0];?>"></a>
                    <?php } ?>
                        <br>
                        <br>
                    <?php echo $contact;?>
                </div>
            </div>

                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" data-aos="fade-up" data-aos-delay="100">
                   <?php echo $google_map;?>
                
                </div>

            </div>
            </div>

        </div>
    </section>
        
    <!-- Copyright -->
    <div class="footer-copyright" style="color:white;">
        <div class="footer-image">
            <img src="<?php echo $footer_logo;?>" alt="" height="90px" width="50px;">
        </div>
        <div class="copyright-text">
        ?? Jareed Hotel, <script>
              document.write(new Date().getFullYear());
            </script>
        <a class="" href="#"> . Terms & Conditions</a>
        </div>
    </div>
    <!-- Copyright -->
    </footer>
    <!-- script -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script src="<?php echo get_template_directory_uri() ?>/js/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="<?php echo get_template_directory_uri() ?>/js/custom-home.js"></script>    
    <script src="<?php echo get_template_directory_uri() ?>/aos-master/dist/aos.js"></script>
    <script src="https://vjs.zencdn.net/7.11.4/video.min.js"></script>
    <!-- <script src="<?php echo get_template_directory_uri() ?>/splide-2.4.21/dist/js/splide.min.js"></script> -->
    <script src="<?php echo get_template_directory_uri() ?>/datepicker-master/dist/datepicker.min.js"></script>
    <!-- <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/pagescroll/pagescroll.js"></script> -->

    <script>
        setTimeout(function () { AOS.init({
            once: true,
        }); }, 1000);
    //     new fullpage('#fullpage', {
    //     licenseKey: 'YOUR KEY HERE',
    //     //options here
    //     autoScrolling:true,
    //     scrollHorizontally: true
    // });

    //methods
    // fullpage_api.setAllowScrolling(false);
    // new PageScroll('#pagescroll', {
    //     animDuration: 500,
    //     easing: 'cubic-bezier(...)'
    // })
    </script>
</body>
</html>