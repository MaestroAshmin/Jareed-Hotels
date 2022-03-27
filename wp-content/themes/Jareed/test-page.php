<?php
/*
 * Template Name: Test page
 * Template Post Type: post, page, product
 */
    $home = pods('home');
    $params = array(
        'where' => 't.ID ="271"',
        'limit' => 1
    );
    $home->find($params);
    $hero_banner = $home->get_field('hero_banner');

    $about_us = pods('about_us');
    $params = array(
    'where' => 't.ID = "39"',
    'limit' => 1
    );
    
    $about_us->find($params);
    
    $about_us_title = $about_us->get_field('about_us_title');
    $description = $about_us->get_field('description');
    // $logo_light_1 = $about_us->get_field('logo_light_1');
    // $logo_1 = $logo_light_1[0]['guid'];
    // $logo_light_2 = $about_us->get_field('logo_light_2');
    // $logo_2 = $logo_light_2[0]['guid'];
    $logo1 = $about_us->get_field('logo_1');
    $logo_1 = $logo1[0]['guid'];
    $logo2 = $about_us->get_field('logo_2');
    $logo_2 = $logo2[0]['guid'];
    $spa_wellness = pods('spa_wellness');
    $params = array(
    'where' => 't.ID = "66"',
    'limit' => 1
    );
    
    $spa_wellness->find($params);
    $jimam_image = $spa_wellness->get_field('jimam_image');
    $jimam_spa_image = $jimam_image[0]['guid'];
    $jimam_title = $spa_wellness->get_field('jimam_title');
    $jimam_description = $spa_wellness->get_field('jimam_description');
    $jimam_logo = $spa_wellness->get_field('jimam_logo');
    $jimam_logo_image = $jimam_logo[0]['guid'];
    $arena_image = $spa_wellness->get_field('arena_image');
    $arena_fc_image = $arena_image[0]['guid'];
    $arena_title = $spa_wellness->get_field('arena_title');
    $arena_description = $spa_wellness->get_field('arena_description');
    $arena_logo = $spa_wellness->get_field('arena_logo');
    $arena_logo_image = $arena_logo[0]['guid'];
    $bs_image = $spa_wellness->get_field('barbershop_image');
    $barbershop_image = $bs_image[0]['guid'];
    $barbershop_title = $spa_wellness->get_field('barbershop_title');
    $barbershop_description = $spa_wellness->get_field('barbershop_description');
    $barbershop_logo = $spa_wellness->get_field('barbershop_logo');
    $barbershop_logo_image = $barbershop_logo[0]['guid'];

    $meetings_and_gatherings = pods('meetings');
    $params = array(
        'where' => 't.ID ="175"',
        'limit' => 1,
    );
    $meetings_and_gatherings->find($params);
    $meetings = $meetings_and_gatherings->get_field('meetings');
    
    $experience_riyadh = pods('experience_riyadh');
    $params = array(
        'where' => 't.ID ="206"',
        'limit' => 1,
    );
    $experience_riyadh->find($params);
    $exp_description = $experience_riyadh->get_field('description');
    $exp_images = $experience_riyadh->get_field('images');
    $exp_places = $experience_riyadh->get_field('places');

    $restaurants = pods('restaurant');
    $params = array(
        'where' => 't.ID ="231"',
        'limit' => 1,
    );
    $restaurants->find($params);
    $restaurants_details = $restaurants->get_field('restaurants');
    
    $packages = pods('packages');
    $params = array(
        'where' => 't.ID ="248"',
        'limit' => 1,
    );
    $packages->find($params);
    $packages_details = $packages->get_field('packages');
    ?>
<?php require 'header.php';?>
    <!-- Banner -->
    <div id="pagescroll">
        <div class="section">
            <div class="banner">
                <div id="banner-carousel" class="carousel slide carousel-fade" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <?php 
                        $j=0;
                        while($j < count($hero_banner)){
                        ?>
                        <li data-target="#banner-carousel" data-slide-to="<?php echo $j;?>" class="<?php echo ($j==0) ? 'active': '';?>"></li>

                        <?php 
                            $j++;
                        }
                        ?>
                    </ol>
                    <div class="carousel-inner">
                        <?php 
                        $j=0;
                        foreach($hero_banner as $hero){
                            $hero_image = wp_get_attachment_image_src($hero['hero_image'], $size="large");
                        ?>
                        <div class="carousel-item <?php echo ($j==0) ? 'active': '';?>">
                            <img src="<?php echo $hero_image[0];?>" class="" alt="...">
                        </div>
                        <?php 
                            $j++;
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="aboutus container-fluid d-flex" style="height:100vh;margin-top:240px;">
                <div class="row">
                    <div class="content col-lg-9 col-md-9 col-sm-9 col-xs-12">
                        <div class="title"><h2><?php echo $about_us_title;?></h2></div>
                        <div class="main-text">
                            <p><?php echo $description;?></p>
                        </div>
                        <div class="aboutus-underline">
                        </div>
                        <div class="readmore">
                            <a href="<?php echo site_url();?>/about-us" class="btn readmore-button">READ MORE</a>
                        </div>
                    </div>
                    <div class="aboutus-logo-container col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="aboutus-logo">
                            <div class="row">   
                                <img src="<?php echo $logo_1;?>" class="img1" alt="" height="100px" width="auto">
                                <img src="<?php echo $logo_2;?>" class="img2" height="100px" width="auto" class="" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="rooms-suits container-fluid"  style="height:100vh;margin-top:-100px;">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 d-flex justify-content-center align-items-center">
                        <div class="rooms-underline-before"></div>
                        <div class="small-title">Comfort, Transcended</div>
                        <div class="rooms-underline-after"></div>
                    </div>
                    <div class="title col-lg-12 col-md-12 col-sm-12 col-xs-12 d-flex justify-content-center align-items-center"><a href="rooms-&-suites.php">ROOMS</a> &nbsp; & &nbsp;<a href="#suite" class="">SUITES</a></div>
                </div>
                <div class="row">
                    <div class="room-contents d-flex justify-content-center">
                        <div class="col-lg-7 col-md-6 col-sm-12">
                            <div id="carouselExampleSlidesOnly" class="carousel slide" data-pause="true" data-interval="5000">
                                <ol class="carousel-indicators" style="display:none;">
                                    <li data-target="#carouselExampleSlidesOnly" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleSlidesOnly" data-slide-to="1"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="<?php echo get_template_directory_uri() ?>/images/Slide1.jpg" class="d-block w-100" alt="Boulevard" height="375px" width="100%;">
                                    </div>
                                    <div class="carousel-item">
                                        <div class="room-details-carousel" onclick="location.href = '<?php echo site_url();?>/family-suite';">
                                            <div class="room-carousel-second">
                                                <img src="<?php echo get_template_directory_uri() ?>/images/Slide1.jpg" class="d-block w-100" alt="Boulevard" height="100%" width="100%;">
                                            </div>
                                            <div class="layer">
                                                <div class="layer-text">
                                                    <div class="title">
                                                        Family Suite
                                                    </div>
                                                    <div class="description">
                                                        <p>
                                                            Who said you can’t have it all? Our sprawling Executive Suite brings together the blissful sleep you crave, with a spacious living area to work and entertain. Work, play, rest, repeat - all within refined luxury. 
                                                        </p>
                                                    </div>
                                                    <div class="explore-link">
                                                        <a href="#">EXPLORE MORE ></a>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-5 col-md-6 col-sm-12">
                            <div id="carouselExampleSlidesOnly1" class="carousel slide" data-pause="true" data-interval="5000">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="<?php echo get_template_directory_uri() ?>/images/deluxe-room.jpg" alt="" height="375px" width="100%;">

                                    </div>
                                    <div class="carousel-item">
                                        <div class="room-details-carousel" onclick="location.href = '<?php echo site_url();?>/boulevard-view-suite';">
                                            <div class="room-carousel-second">
                                                <img src="<?php echo get_template_directory_uri() ?>/images/deluxe-room.jpg" alt="" height="375px" width="100%;">

                                            </div>
                                            <div class="layer">
                                                <div class="layer-text">
                                                    <div class="title">
                                                        BOULEVARD- VIEW SUITE
                                                    </div>
                                                    <div class="description">
                                                        <p>
                                                            Make your Riyadh experience truly unforgettable.
                                                            Enjoy a spectacular view while you luxuriate in your
                                                            customized bedding or whilst you entertain friends
                                                            and family in the exceptionally designed indoor and
                                                            outdoor dining areas. Live your best life, and feel
                                                            well-rested while you’re at it.
                                                        </p>
                                                    </div>
                                                    <div class="explore-link">
                                                        <a href="#">EXPLORE MORE ></a>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
        <div class="section">
            <div class="rooms-suits container-fluid" style="padding-bottom:100px;">
                <div class="row">
                    <div class="room-contents d-flex justify-content-center">
                        <div class="col-lg-5 col-md-6 col-sm-12">
                            <div id="carouselExampleSlidesOnly2" class="carousel slide" data-pause="true" data-interval="5000">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="<?php echo get_template_directory_uri() ?>/images/18.png" alt="" height="375px" width="100%;">

                                    </div>
                                    <div class="carousel-item">
                                        <div class="room-details-carousel" onclick="location.href = '<?php echo site_url();?>/boulevard-view-room';">
                                            <div class="room-carousel-second">
                                                <img src="<?php echo get_template_directory_uri() ?>/images/18.png" alt="" height="375px" width="100%;">


                                            </div>
                                            <div class="layer">
                                                <div class="layer-text">
                                                    <div class="title">
                                                        Boulevard- View Room
                                                    </div>
                                                    <div class="description">
                                                        <p>
                                                            Make your Riyadh experience truly unforgettable.
                                                            Enjoy a spectacular view while you luxuriate in your
                                                            customized bedding or whilst you entertain friends
                                                            and family in the exceptionally designed indoor and
                                                            outdoor dining areas. Live your best life, and feel
                                                            well-rested while you’re at it.
                                                        </p>
                                                    </div>
                                                    <div class="explore-link">
                                                        <a href="#">EXPLORE MORE ></a>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6 col-sm-12">
                            <div id="carouselExampleSlidesOnly3" class="carousel slide" data-pause="true" data-interval="5000">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="<?php echo get_template_directory_uri() ?>/images/deluxe-room-image.png" alt="" height="375px" width="100%;">

                                    </div>
                                    <div class="carousel-item">
                                        <div class="room-details-carousel"  onclick="location.href = '<?php echo site_url();?>/superior-room';">
                                            <div class="room-carousel-second">
                                                <img src="<?php echo get_template_directory_uri() ?>/images/deluxe-room-image.png" alt="" height="375px" width="100%;">


                                            </div>
                                            <div class="layer">
                                                <div class="layer-text">
                                                    <div class="title">
                                                        SUPERIOR ROOM
                                                    </div>
                                                    <div class="description">
                                                        <p>
                                                            Make your Riyadh experience truly unforgettable.
                                                            Enjoy a spectacular view while you luxuriate in your
                                                            customized bedding or whilst you entertain friends
                                                            and family in the exceptionally designed indoor and
                                                            outdoor dining areas. Live your best life, and feel
                                                            well-rested while you’re at it.
                                                        </p>
                                                    </div>
                                                    <div class="explore-link">
                                                        <a href="#">EXPLORE MORE ></a>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="room-contents">
                        <div class="content col-lg-9 col-md-9 col-sm-9 col-xs-12">
                            <div class="main-text">
                                <p>Experience new heights of comfort and taste in our immaculately furnished rooms
                                and suites, designed to meet your every whim. Exquisite modern decor merges
                                warmth and elegance, ensuring your feel inspired and well-rested for every
                                moment of your stay.</p>
                                
                                <p>Choose your bedding preferences, find the room scent that soothes you, and get
                            the best sleep of your life. And that’s just the beginning.</p>
                                
                                
                            </div>
                            <div class="aboutus-underline">
                            </div>
                            <div class="readmore">
                                <button type="button" class="btn readmore-button" onclick="location.href = '<?php echo site_url();?>/rooms-suites';">READ MORE</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="packages container-fluid">
                <!-- <div id="packages" class="small-anchor"></div> -->
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 d-flex justify-content-center align-items-center">
                        <div class="rooms-underline-before"></div>
                        <div class="title">PACKAGES</div>
                        <div class="rooms-underline-after"></div>
                    </div>
                </div>    
                <div class="row package-container">
                    <?php foreach($packages_details as $package){
                        $package_image = wp_get_attachment_image_src($package['image'],$size="large");
                        $package_url = strtolower($package['packages_title']);
                        $br_replaced = str_replace("<br>", " ", $package_url);
                        $explode = explode(" ", $br_replaced);
                        $final = implode("-",$explode);
                    ?>
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                        <div class="card">
                            <img src="<?php echo $package_image[0];?>" class="card-img-top card-img" alt="...">
                            <div class="card-body">
                                <h5 class="card-title package-title"><?php echo $package['packages_title'];?></h5>
                                <div class="package-underline d-flex justify-content-center align-items-center"></div>
                                <a href="<?php echo site_url();?>/packages#<?php echo $final;?>" class="package-link">Learn more<span class="arrow">></span></a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>

                </div>
            </div>
        </div>
        <div class="section" style="height:100vh!important;">
            <div class="restaurant">
                <div class="row" style="padding-left:15px;padding-right:15px;">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 d-flex justify-content-center align-items-center" style="max-width:100%;">
                        <div class="packages-underline-before"></div>
                        <div class="title">RESTAURANTS</div>
                        <div class="packages-underline-after"></div>
                    </div>
                </div> 
                <div class="row morini-banner">
                    <div id="carouselExampleIndicators3" class="carousel slide carousel-fade" data-ride="carousel" data-pause="false">
                        <ol class="carousel-indicators">
                            <?php 
                            $j=0;
                            while($j < (count($restaurants_details))){ ?>
                            <li data-target="#carouselExampleIndicators3" data-slide-to="<?php echo $j;?>" class="<?php echo ($j==0)? 'active':'';?>"></li>

                            <?php
                            $j++;
                            }
                            ?>
                        </ol>
                        <div class="carousel-inner">
                            <?php 
                            $j=0;
                            foreach($restaurants_details as $restaurant){
                            $slider_image = wp_get_attachment_image_src($restaurant['slider_image'],$size='large');
                            $restaurant_logo = wp_get_attachment_image_src($restaurant['logo'], $size='large');
                            ?>
                            <div class="carousel-item <?php echo ($j==0) ? 'active':'';?>">
                                <img src="<?php echo $slider_image[0];?>" class="img-fluid d-block morini-slider" alt="...">
                                <div class="centered-title d-flex justify-content-center align-items-center"><img src="<?php echo $restaurant_logo[0];?>" class="img-fluid" height="300px" width="600px" alt=""></div>

                                <div class="carousel-caption">
                                    <div class="row">
                                        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                            <p><?php echo $restaurant['description'];?></p>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                            <button class="btn menu-btn"  onclick="location.href = '<?php echo site_url();?>/restaurants';">READ MORE</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php
                            $j++;
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>     
    </div>

<?php require('footer-test.php');?>    