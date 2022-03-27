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
        <div class="row seven-cols" data-aos="fade-up" style="text-align:right;">
        <!--Grid column-->
        <div class="links col-md-1 col-lg-1 col-sm-1 mb-4 mb-md-0">
            <ul class="list-unstyled">
                <li>
                    <a href="<?php echo site_url();?>/about-us-ar" class="title"><b>تواصل معنا</b></a>
                </li>
                <br>    
                <li>
                    <a href="<?php echo site_url();?>/about-us-ar#jareed-story">قصة جريد</a>
                </li>
                <li>
                    <a href="<?php echo site_url();?>/about-us-ar#jareed-experience" class="">التجربة في جريد</a>
                </li>
                <li>
                    <a href="<?php echo site_url();?>/about-us-ar#NMR-hospitality" class="">شركة نمر للضيافة</a>
                </li>
                <li>
                    <a href="<?php echo site_url();?>/about-us-ar#the-boulevard" class="">بوليڤارد الرياض</a>
                </li>
            </ul>
        </div>
        
        <!--Grid column-->

        <!--Grid column-->
        <div class="links col-md-1 col-lg-1 col-sm-1 mb-4 mb-md-0" >
            <ul class="list-unstyled">
            <li>
                <a href="<?php echo site_url();?>/rooms-&-suites-ar"  class="title"><b>الغرف والأجنحة</b></a>
            </li>
            <br> 
            <li>
                <a href="<?php echo site_url();?>/rooms-&-suites-ar" class=""><b>الغرف</b></a>
            </li>
            <li>
                <a href="<?php echo site_url();?>/rooms-&-suites-ar" class="#">ديلوكس | الغرف الفخمة</a>
            </li>
            <li>
                <a href="<?php echo site_url();?>/rooms-&-suites-ar" class="#">سوبيرير | الغرف الفاخرة
            </a>
            </li>
            <li>
                <a href="<?php echo site_url();?>/rooms-&-suites-ar" class="">ستاندرد | الغرف القياسية</a>
            </li>
            <br>
            <li>
                <a href="<?php echo site_url();?>/rooms-&-suites-ar"  class="title"><b>الأجنحة</b></a>
            </li>
            <li>
                <a href="<?php echo site_url();?>/rooms-&-suites-ar" class="#">جناح النخيل | ذا بالم
                </a>
            </li>
            <li>
                <a href="<?php echo site_url();?>/rooms-&-suites-ar" class="#">جناح البوليڤارد</a>
            </li>
            <li>
                <a href="<?php echo site_url();?>/rooms-&-suites-ar" class="#">الجناح الفاخر | سوبيرير</a>
            </li>
            <li>
                <a href="<?php echo site_url();?>/rooms-&-suites-ar" class="#">الجناح التنفيذي | إكسيكتڤ</a>
            </li>
            </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="links col-md-1 col-lg-1 col-sm-1 mb-4 mb-md-0">
            <ul class="list-unstyled">
            <li>
                <a href="<?php echo site_url();?>/home-ar#packages"  class="title"><b>الباقات</b></a>
            </li>
            <br> 
            <li>
                <a href="<?php echo site_url();?>/home-ar#packages" class="">نهاية الأسبوع</a>
            </li>
            <li>
                <a href="<?php echo site_url();?>/home-ar#packages" class="#">شهر العسل</a>
            </li>
            <li>
                <a href="<?php echo site_url();?>/home-ar#packages" class="">الغرف والعشاء</a>
            </li>
            </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="links col-md-1 col-lg-1 col-sm-1 mb-4 mb-md-0">
            <ul class="list-unstyled">
            <li>
                <a href="<?php echo site_url();?>/spa-wellness-ar"  class="title"><b>السبا ووسائل العناية بالصحة</b></a>
            </li>
            <br> 
            <li>
                <a href="<?php echo site_url();?>/spa-wellness-ar#jimam-spa" class="">السبا</a>
            </li>
            <li>
                <a href="<?php echo site_url();?>/spa-wellness-ar#barbershop" class="">صالون الحلاقة</a>
            </li>
            <li>
                <a href="<?php echo site_url();?>/spa-wellness-ar#arena-fitness-center" class="">النادي الرياضي</a>
            </li>
            </ul>
        </div>
        <!--Grid column-->
        <!--Grid column-->
        <div class="links col-md-1 col-lg-1 col-sm-1 mb-4 mb-md-0">
            <ul class="list-unstyled">
            <li>
                <a href="<?php echo site_url();?>/home-ar#restaurant"  class="title"><b>المطاعم</b></a>
            </li>
            <br> 
            <li>
                <a href="<?php echo site_url();?>/home-ar#restaurant" class="">موريني</a>
            </li>
            <li>
                <a href="<?php echo site_url();?>/home-ar#restaurant" class="">ذا ليڤنج رووم</a>
            </li>
            </ul>
        </div>
        <!--Grid column-->
        <!--Grid column-->
        <div class="links col-md-1 col-lg-1 col-sm-1 mb-4 mb-md-0">
            <ul class="list-unstyled">
            <li>
                <a href="<?php echo site_url();?>/home-ar#meetings"  class="title"><b>الاجتماعات والفعاليات</b></a>
            </li>
            <br> 
            <li>
                <a href="<?php echo site_url();?>/home-ar#meetings" class="">المكتب الخاص</a>
            </li>
            <li>
                <a href="<?php echo site_url();?>/home-ar#meetings" class="">ذا ليڤنج رووم</a>
            </li>
            </ul>
        </div>
        <!--Grid column-->
        <!--Grid column-->
         <div class="links col-md-1 col-lg-1 col-sm-1 mb-4 mb-md-0">
            <ul class="list-unstyled">
            <li>
                <a href="<?php echo site_url();?>/home-ar#experiences"  class="title"><b>التجارب</b></a>
            </li>
            <br> 
            <li>
                <a href="<?php echo site_url();?>/home-ar#experiences" class="">قصر المصمك</a>
            </li>
            <li>
                <a href="<?php echo site_url();?>/home-ar#experiences" class="">المتحف الوطني السعودي</a>
            </li>
            <li>
                <a href="<?php echo site_url();?>/home-ar#experiences" class="">حافة العالم</a>
            </li>
            <li>
                <a href="<?php echo site_url();?>/home-ar#experiences" class="">الدرعية التاريخية</a>
            </li>
            <li>
                <a href="<?php echo site_url();?>/home-ar#experiences" class="">متحف صقر الجزيرة للطيران</a>
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
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" data-aos="fade-up" style="text-align:right;">
                <div class="section-title">
                    <h2 class="title">تواصل معنا</h2>
                    <?php foreach($social_media_accounts_dark as $sma_theme) {
                        $icon= wp_get_attachment_image_src($sma_theme['icon'], $size="large");
                        ?>
                        <a href="<?php echo $sma_theme['url'];?>"><img src="<?php echo $icon[0];?>"></a>
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
        <div class="copyright-text" style="direction:ltr;">
        © Jareed Hotel, <script>
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
    <script src="<?php echo get_template_directory_uri() ?>/js/custom.js"></script>    
    <script src="<?php echo get_template_directory_uri() ?>/aos-master/dist/aos.js"></script>
    <script src="https://vjs.zencdn.net/7.11.4/video.min.js"></script>
    <!-- <script src="<?php echo get_template_directory_uri() ?>/splide-2.4.21/dist/js/splide.min.js"></script> -->
    <script src="<?php echo get_template_directory_uri() ?>/datepicker-master/dist/datepicker.min.js"></script>


</body>
</html>