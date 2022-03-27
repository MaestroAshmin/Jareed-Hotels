
<?php
/*
 * Template Name: Home Arabic
 * Template Post Type: post, page, product
 */
?>
<?php
    $home = pods('home');
    $params = array(
        'where' => 't.ID ="271"',
        'limit' => 1
    );
    $home->find($params);
    $hero_banner = $home->get_field('hero_banner');

    $about_us = pods('about_us');
    $params = array(
    'where' => 't.ID = "275"',
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

    // Spa and Wellness
    $spa_and_wellness = pods('spa_and_wellness');
    $params = array(
    'where' => 't.ID = "521"',
    'limit' => 1
    );
    $spa_and_wellness->find($params);
    $spa_and_wellness_facilities = $spa_and_wellness->get_field('spa_and_wellness_facilities');

    // spa-wellness old
    // $spa_wellness = pods('spa_wellness');
    // $params = array(
    // 'where' => 't.ID = "284"',
    // 'limit' => 1
    // );
    
    // $spa_wellness->find($params);
    // $jimam_image = $spa_wellness->get_field('jimam_image');
    // $jimam_spa_image = $jimam_image[0]['guid'];
    // $jimam_title = $spa_wellness->get_field('jimam_title');
    // $jimam_description = $spa_wellness->get_field('jimam_description');
    // $jimam_logo = $spa_wellness->get_field('jimam_logo');
    // $jimam_logo_image = $jimam_logo[0]['guid'];
    // $arena_image = $spa_wellness->get_field('arena_image');
    // $arena_fc_image = $arena_image[0]['guid'];
    // $arena_title = $spa_wellness->get_field('arena_title');
    // $arena_description = $spa_wellness->get_field('arena_description');
    // $arena_logo = $spa_wellness->get_field('arena_logo');
    // $arena_logo_image = $arena_logo[0]['guid'];
    // $bs_image = $spa_wellness->get_field('barbershop_image');
    // $barbershop_image = $bs_image[0]['guid'];
    // $barbershop_title = $spa_wellness->get_field('barbershop_title');
    // $barbershop_description = $spa_wellness->get_field('barbershop_description');
    // $barbershop_logo = $spa_wellness->get_field('barbershop_logo');
    // $barbershop_logo_image = $barbershop_logo[0]['guid'];

    $meetings_and_gatherings = pods('meetings');
    $params = array(
        'where' => 't.ID ="285"',
        'limit' => 1,
    );
    $meetings_and_gatherings->find($params);
    $meetings = $meetings_and_gatherings->get_field('meetings');
    
    $experience_riyadh = pods('experience_riyadh');
    $params = array(
        'where' => 't.ID ="286"',
        'limit' => 1,
    );
    $experience_riyadh->find($params);
    $exp_description = $experience_riyadh->get_field('description');
    $exp_images = $experience_riyadh->get_field('images');
    $exp_places = $experience_riyadh->get_field('places');

    $restaurants = pods('restaurant');
    $params = array(
        'where' => 't.ID ="283"',
        'limit' => 1,
    );
    $restaurants->find($params);
    $restaurants_details = $restaurants->get_field('restaurants');
    
    $packages = pods('packages');
    $params = array(
        'where' => 't.ID ="282"',
        'limit' => 1,
    );
    $packages->find($params);
    $packages_details = $packages->get_field('packages');
    $family_suite = pods('room');
    $params = array(
    'where' => 't.ID = "455"',
    'limit' => 1
    );
    $family_suite->find($params);
    $room1_name = $family_suite->get_field('room_name');
    $room1_description = $family_suite->get_field('room_description');
    $room1_feature = $family_suite->get_field('room_featured_image');
    $room1_featured_image = $room1_feature[0]['guid'];

    // 2. Boulevard View Suite
    $boulevard_suite = pods('room');
    $params = array(
    'where' => 't.ID = "459"',
    'limit' => 1
    );
    $boulevard_suite->find($params);
    $room2_name = $boulevard_suite->get_field('room_name');
    $room2_description = $boulevard_suite->get_field('room_description');
    $room2_feature = $boulevard_suite->get_field('room_featured_image');
    $room2_featured_image = $room2_feature[0]['guid'];

    // 3. Superior Room
    $superior_room = pods('room');
    $params = array(
    'where' => 't.ID = "465"',
    'limit' => 1
    );
    $superior_room->find($params);
    $room3_name = $superior_room->get_field('room_name');
    $room3_description = $superior_room->get_field('room_description');
    $room3_feature = $superior_room->get_field('room_featured_image');
    $room3_featured_image = $room3_feature[0]['guid'];

    // 4. Boulevard View Room
    $boulevard_room = pods('room');
    $params = array(
    'where' => 't.ID = "468"',
    'limit' => 1
    );
    $boulevard_room->find($params);
    $room4_name = $boulevard_room->get_field('room_name');
    $room4_description = $boulevard_room->get_field('room_description');
    $room4_feature = $boulevard_room->get_field('room_featured_image');
    $room4_featured_image = $room4_feature[0]['guid'];
    ?>
<?php require 'header-ar.php';?>
    <!-- Banner -->
    <section id="banner">
        <div class="banner">
            <div class="vimeo-wrapper" id="banner-carousel">
                <iframe src="https://player.vimeo.com/video/690150932?h=4dd6b4aafe&background=1&autoplay=1&loop=1&byline=0&title=0&muted=1" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen allow="autoplay; fullscreen"></iframe>
            </div>
        </div>
    </section>
    <!-- About us -->
    <section id="aboutus">
        <div class="aboutus container-fluid d-flex">
            <div class="row">
                <div class="content col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <div class="title"><h2><?php echo $about_us_title;?></h2></div>
                    <div class="main-text" data-aos="fade-up">
                        <p><?php echo $description;?></p>
                    </div>
                    <div class="aboutus-underline">
                    </div>
                    <div class="readmore" data-aos="fade-up">
                        <a href="<?php echo site_url();?>/about-us" class="btn readmore-button">اقرأ المزيد</a>
                    </div>
                </div>
                <!-- <div class="aboutus-logo-container col-lg-3 col-md-3 col-sm-3 col-xs-12" data-aos="fade-up">
                    <div class="aboutus-logo">
                        <div class="row">   
                            <img src="<?php echo $logo_1;?>" class="img1" alt="" height="100px" width="auto">
                            <img src="<?php echo $logo_2;?>" class="img2" height="100px" width="auto" class="" alt="">
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>

    <section id="rooms-suits">
        <div class="rooms-suits container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 d-flex justify-content-center align-items-center" data-aos="fade-up">
                    <div class="rooms-underline-before"></div>
                    <div class="small-title">تَـقـدَّم نـحـو الـفـخـامـة!!</div>
                    <div class="rooms-underline-after"></div>
                </div>
                <div class="title col-lg-12 col-md-12 col-sm-12 col-xs-12 d-flex justify-content-center align-items-center" data-aos="fade-up" style="letter-spacing: normal;"><a href="rooms-&-suites.php" style="padding-left:10px;">الأجــنــحــــة</a>  و  <a href="#suite" class="">الـغــــرف</a></div>
            </div>
            <div class="row" data-aos="fade-up">
                <div class="room-contents">
                    <div class="col-lg-7 col-md-12 col-sm-12">
                        <div id="carouselExampleSlidesOnly" class="carousel slide">
                            <ol class="carousel-indicators" style="display:none;">
                                <li data-target="#carouselExampleSlidesOnly" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleSlidesOnly" data-slide-to="1"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <!-- <img src="<?php echo get_template_directory_uri() ?>/images/Family-suite-small.jpg" class="d-block w-100" alt="Boulevard" height="375px" width="100%;"> -->
                                            <img src="<?php echo $room1_featured_image;?>" class="d-block w-100" alt="Family Suite" height="375px" width="100%;">

                                </div>
                                <div class="carousel-item">
                                    <div class="room-details-carousel">
                                        <div class="room-carousel-second">
                                            <!-- <img src="<?php echo get_template_directory_uri() ?>/images/Family-suite-small.jpg" class="d-block w-100" alt="Boulevard" height="100%" width="100%;"> -->
                                            <img src="<?php echo $room1_featured_image;?>" class="d-block w-100" alt="Family Suite" height="100%" width="100%;">

                                        </div>
                                        <div class="layer">
                                            <div class="layer-text">
                                                <div class="title" style="text-transform: uppercase;">
                                                    <?php echo $room1_name;?>
                                                </div>
                                                <div class="description">
                                                    <?php echo $room1_description;?>
                                                    <!-- <p>
                                                       Experience unparalleled luxury in our magnificent Family Suite. With majestic views, sprawling space, and exquisite decor, there’s abundant space for everyone to experience comfort on their own terms. Featuring two private bedrooms separate from your stylish living areas, along with an impressive outdoor patio, you can fit rest, work, and hosting easily within the gorgeous walls of the Family Suite
                                                    </p> -->
                                                </div>
                                                <div class="explore-link">
                                                    <a href="<?php echo site_url();?>/family-suite';">EXPLORE MORE ></a>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12 col-sm-12">
                        <div id="carouselExampleSlidesOnly1" class="carousel slide" data-pause="true" data-interval="5000">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="<?php echo $room2_featured_image;?>" alt="" height="375px" width="100%;">

                                </div>
                                <div class="carousel-item">
                                    <div class="room-details-carousel">
                                        <div class="room-carousel-second">
                                            <img src="<?php echo $room2_featured_image;?>" alt="" height="375px" width="100%;">

                                        </div>
                                        <div class="layer">
                                            <div class="layer-text">
                                                <div class="title" style="text-transform:uppercase">
                                                    <?php echo $room2_name;?>
                                                </div>
                                                <div class="description">
                                                    <?php echo $room2_description;?>
                                                </div>
                                                <div class="explore-link">
                                                    <a href="<?php echo site_url();?>/boulevard-view-suite';">EXPLORE MORE ></a>
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
            <div class="row"  data-aos="fade-up">
                <div class="room-contents">
                    <div class="col-lg-5 col-md-12 col-sm-12">
                        <div id="carouselExampleSlidesOnly3" class="carousel slide" data-pause="true" data-interval="5000">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="<?php echo $room3_featured_image;?>" alt="" height="375px" width="100%;">

                                </div>
                                <div class="carousel-item">
                                    <div class="room-details-carousel">
                                        <div class="room-carousel-second">
                                            <img src="<?php echo $room3_featured_image;?>" alt="" height="375px" width="100%;">


                                        </div>
                                        <div class="layer">
                                            <div class="layer-text">
                                                <div class="title" style="text-transform:uppercase;">
                                                    <?php echo $room3_name;?>
                                                </div>
                                                <div class="description">
                                                    <?php echo $room3_description;?>
                                                </div>
                                                <div class="explore-link">
                                                    <a href="<?php echo site_url();?>/superior';">EXPLORE MORE ></a>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-lg-7 col-md-12 col-sm-12">
                        <div id="carouselExampleSlidesOnly2" class="carousel slide" data-pause="true" data-interval="5000">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="<?php echo $room4_featured_image;?>" alt="" height="375px" width="100%;" >

                                </div>
                                <div class="carousel-item">
                                    <div class="room-details-carousel">
                                        <div class="room-carousel-second">
                                            <img src="<?php echo $room4_featured_image;?>" alt="" height="375px" width="100%;">


                                        </div>
                                        <div class="layer">
                                            <div class="layer-text">
                                                <div class="title" style="text-transform:uppercase;">
                                                    <?php echo $room4_name;?>
                                                </div>
                                                <div class="description">
                                                    <?php echo $room4_description;?>
                                                </div>
                                                <div class="explore-link">
                                                    <a href="<?php echo site_url();?>/boulevard-view-room">EXPLORE MORE ></a>
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
            <!-- <div class="row" data-aos="fade-up">
                <div class="room-contents">
                    <div class="col-lg-7 col-md-12 col-sm-12">
                        <div id="carouselExampleSlidesOnly" class="carousel slide">
                            <ol class="carousel-indicators" style="display:none;">
                                <li data-target="#carouselExampleSlidesOnly" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleSlidesOnly" data-slide-to="1"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="<?php echo get_template_directory_uri() ?>/images/Slide1.jpg" class="d-block w-100" alt="Boulevard" height="375px" width="100%;">
                                </div>
                                <div class="carousel-item">
                                    <div class="room-details-carousel">
                                        <div class="room-carousel-second">
                                            <img src="<?php echo get_template_directory_uri() ?>/images/Slide1.jpg" class="d-block w-100" alt="Boulevard" height="100%" width="100%;">
                                        </div>
                                        <div class="layer">
                                            <div class="layer-text">
                                                <div class="title">
                                                    FAMILY SUITE
                                                </div>
                                                <div class="description">
                                                    <p>
                                                       Experience unparalleled luxury in our magnificent Family Suite. With majestic views, sprawling space, and exquisite decor, there’s abundant space for everyone to experience comfort on their own terms. Featuring two private bedrooms separate from your stylish living areas, along with an impressive outdoor patio, you can fit rest, work, and hosting easily within the gorgeous walls of the Family Suite
                                                    </p>
                                                </div>
                                                <div class="explore-link">
                                                    <a href="<?php echo site_url();?>/family-suite';">EXPLORE MORE ></a>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12 col-sm-12">
                        <div id="carouselExampleSlidesOnly1" class="carousel slide" data-pause="true" data-interval="5000">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="<?php echo get_template_directory_uri() ?>/images/deluxe-room.jpg" alt="" height="375px" width="100%;">

                                </div>
                                <div class="carousel-item">
                                    <div class="room-details-carousel">
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
                                                       Make your Riyadh experience truly unforgettable. Enjoy a spectacular view while you luxuriate in your customized bedding or whilst you entertain friends and family in the exceptionally designed indoor and outdoor dining areas. Live your best life, and feel well-rested while you’re at it. 
                                                    </p>
                                                </div>
                                                <div class="explore-link">
                                                    <a href="<?php echo site_url();?>/boulevard-view-suite';">EXPLORE MORE ></a>
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
            <div class="row"  data-aos="fade-up">
                <div class="room-contents">
                    <div class="col-lg-5 col-md-12 col-sm-12">
                        <div id="carouselExampleSlidesOnly3" class="carousel slide" data-pause="true" data-interval="5000">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="<?php echo get_template_directory_uri() ?>/images/deluxe-room-image.png" alt="" height="375px" width="100%;">

                                </div>
                                <div class="carousel-item">
                                    <div class="room-details-carousel">
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
                                                        Discover the true meaning of comfort. Wake up to a view of the Riyadh sky while you get ready to take on a new day. After the best sleep of your life and a luxuriously designed bath, you’ll feel and look your very best.
                                                    </p>
                                                </div>
                                                <div class="explore-link">
                                                    <a href="<?php echo site_url();?>/superior-room';">EXPLORE MORE ></a>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-lg-7 col-md-12 col-sm-12">
                        <div id="carouselExampleSlidesOnly2" class="carousel slide" data-pause="true" data-interval="5000">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="<?php echo get_template_directory_uri() ?>/images/18.png" alt="" height="375px" width="100%;" >

                                </div>
                                <div class="carousel-item">
                                    <div class="room-details-carousel">
                                        <div class="room-carousel-second">
                                            <img src="<?php echo get_template_directory_uri() ?>/images/18.png" alt="" height="375px" width="100%;">


                                        </div>
                                        <div class="layer">
                                            <div class="layer-text">
                                                <div class="title">
                                                    BOULEVARD- VIEW ROOM
                                                </div>
                                                <div class="description">
                                                    <p>
                                                        For those with a taste for the dramatic, experience a City & Boulevard View with a private outside balcony to soak in Riyadh’s energy. Our Boulevard View Room will have you feeling both well-rested and inspired. 
                                                    </p>
                                                </div>
                                                <div class="explore-link">
                                                    <a href="<?php echo site_url();?>/boulevard-view-room">EXPLORE MORE ></a>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div> -->
            <div class="row" data-aos="fade-up">
                <div class="room-contents">
                    <div class="content col-lg-9 col-md-9 col-sm-9 col-xs-12" data-aos="fade-up">
                        <div class="main-text">
                            <p>نأخذكَ في تجربة استثنائية لتختبر الراحة المطلقة وتتعرف على الذوق الرفيع، حيث ينعكسُ الدفء والأناقة في التصميم العصريّ لكلّ الغرف والأجنحة، مما يمنحك شعورًا بالإلهام والاسترخاء في كلّ لحظةٍ من لحظات إقامتك.
</p>
                            
                            <p> في جريد يمكنك اختيار نوع مفرش السرير الذي تفضّله، والرائحة التي تُرخي أعصابك، لتحظى بساعاتٍ من النوم الهانئ</p>
                            <p>وهذه هي نقطة الانطلاق معنا!</p>
                            
                        </div>
                        <div class="aboutus-underline">
                        </div>
                        <div class="readmore" data-aos="fade-up">
                            <button type="button" class="btn readmore-button" onclick="location.href = 'rooms-&-suites.php';">اقرأ المزيد</button>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>

    <!-- Packages -->
    
    <section>
        <div class="packages container-fluid">
            <div id="packages" class="small-anchor"></div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 d-flex justify-content-center align-items-center" data-aos="fade-up">
                    <div class="rooms-underline-before"></div>
                    <div class="title" style="letter-spacing:normal;">الـبــاقــــات</div>
                    <div class="rooms-underline-after"></div>
                </div>
            </div>    
            <div class="row package-container">
                <?php foreach($packages_details as $package){
                    $package_image = wp_get_attachment_image_src($package['image'],$size="large");

                ?>
                <div class="col-md-12 col-lg-4 col-sm-12 col-xs-12" data-aos="fade-up">
                    <div class="card">
                        <img src="<?php echo $package_image[0];?>" class="card-img-top card-img" alt="...">
                        <div class="card-body" data-aos="fade-up">
                            <h5 class="card-title package-title"><?php echo $package['packages_title'];?></h5>
                            <div class="package-underline d-flex justify-content-center align-items-center"></div>
                            <a href="#" class="package-link">اكتشف المزيد<span class="arrow">></span></a>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <!-- <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12" data-aos="fade-up">
                <div class="card">
                        <img src="<?php echo get_template_directory_uri() ?>/images/weekend.jpg" class="card-img-top card-img" alt="...">
                        <div class="card-body" data-aos="fade-up">
                            <h5 class="card-title package-title">WEEKEND</h5>
                            <div class="package-underline d-flex justify-content-center align-items-center"></div>
                            <a href="#" class="package-link">Learn more<span class="arrow">></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12" data-aos="fade-up">
                    <div class="card">
                        <img src="<?php echo get_template_directory_uri() ?>/images/honeymoon.jpg" class="card-img-top card-img" alt="...">
                        <div class="card-body" data-aos="fade-up">
                            <h5 class="card-title package-title">HONEYMOON</h5>
                            <div class="package-underline d-flex justify-content-center align-items-center"></div>
                            <a href="#" class="package-link">Learn more<span class="arrow">></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12" data-aos="fade-up">
                    <div class="card">
                        <img src="<?php echo get_template_directory_uri() ?>/images/room-dinner.jpg" class="card-img-top card-img" alt="...">
                        <div class="card-body" data-aos="fade-up">
                            <h5 class="card-title package-title">ROOM & DINNER</h5>
                            <div class="package-underline d-flex justify-content-center align-items-center"></div>
                            <a href="#" class="package-link">Learn more <span class="arrow">></span></a>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <!-- Restaurant -->
    <section>
        <div class="restaurant">
            <div id="restaurant" class="small-anchor"></div>
            <div class="row" style="padding-left:15px;padding-right:15px;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 d-flex justify-content-center align-items-center" style="max-width:100%;" data-aos="fade-up">
                    <div class="packages-underline-before"></div>
                    <div class="title" style="letter-spacing:normal;">الــمــطــــاعــــم</div>
                    <div class="packages-underline-after"></div>
                </div>
            </div> 
            <div class="row morini-banner">
                <div id="carouselExampleIndicators3" class="carousel slide carousel-fade" data-ride="carousel" data-pause="false">
                    <ol class="carousel-indicators" style="height:25px;">
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
                            <div class="centered-title d-flex justify-content-center align-items-center"><img src="<?php echo $restaurant_logo[0];?>" class="img-fluid" height="300px" width="600px" alt="" data-aos="fade-up"></div>

                            <div class="carousel-caption" data-aos="fade-up">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <p><?php echo $restaurant['description'];?></p>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 d-block justify-content-start" style="margin:0 auto;">
                                        <button class="btn readmore-button">اقرأ المزيد</button>
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
        
    </section>
    
    <!-- Spa & wellness -->
    <section id="spa-wellness">
        <div class="spa-wellness container-fluid">
            <!-- Jimam Spa -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 d-flex justify-content-center align-items-center" data-aos="fade-up">
                    <div class="rooms-underline-before"></div>
                    <div class="small-title">اسـتـــرخ. تـمـــرّن. اعتـــنِ بـنفســك</div>
                    <div class="rooms-underline-after"></div>
                </div>
                    <div class="title col-lg-12 col-md-12 col-sm-12 col-xs-12 d-flex justify-content-center align-items-center" style="letter-spacing:normal;" data-aos="fade-up">السـبـا ووســائل الـعـنايــة بالـصـحــة</div>
            </div>
            <?php foreach($spa_and_wellness_facilities as $facility) { 
                $facility_logo = wp_get_attachment_image_src($facility['logo'], $size='large');
                $facility_title_lower = strtolower($facility['title']);
                $facility_id = str_replace(" ", "", $facility_title_lower);
                $slug = str_replace(" ", "-", $facility_title_lower);
                // print_r(count($facility['slider_images']));
                // exit;
                ?>
                <div class="row" data-aos="fade-up">
                <div class="content col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="spa-image">
                        <div id="<?php echo $facility_id;?>Carousel" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <?php
                                $i=0;
                                $count = count($facility['slider_images']);
                                for($i; $i < $count; $i++){ ?>
                                    <li data-target="#<?php echo $facility_id;?>Carousel" data-slide-to="<?php echo $i;?>" class="<?php echo $i == 0 ? 'active':'';?>"></li>
                                <?php 
                                }
                                ?>
                                <!-- <li data-target="#<?php echo $facility_id;?>Carousel" data-slide-to="0" class="active"></li>
                                <li data-target="#<?php echo $facility_id;?>Carousel" data-slide-to="1"></li>
                                <li data-target="#<?php echo $facility_id;?>Carousel" data-slide-to="2"></li>
                                <li data-target="#<?php echo $facility_id;?>Carousel" data-slide-to="3"></li> -->

                            </ol>
                            <div class="carousel-inner">
                                <?php
                                $i=0;
                                $count = count($facility['slider_images']);
                                foreach($facility['slider_images'] as $slider_image){ 
                                    $image = wp_get_attachment_image_src($slider_image['image'], $size='large');
                                    ?>
                                    <div class="carousel-item <?php echo $i == 0 ? 'active':'';?>">
                                        <img src="<?php echo $image[0];?>" class="img-fluid" alt="">  
                                    </div>
                                <?php
                                $i++;
                                }
                                ?>
                                <!-- <div class="carousel-item active">
                                <img src="<?php echo get_template_directory_uri() ?>/images/SPA-1.jpg" class="img-fluid" alt="">  
                                </div>
                                <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri() ?>/images/SPA-2.jpg" class="img-fluid" alt="">  
                                </div>
                                <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri() ?>/images/SPA-3.jpg" class="img-fluid" alt="">  
                                </div>
                                <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri() ?>/images/SPA-4.jpg" class="img-fluid" alt="">  
                                </div> -->
                            </div>
                        </div>
                                 
                    </div>
                </div>
            </div>
            <div class="row" data-aos="fade-up">
                <div class="content2 col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <div class="title" style="letter-spacing:normal;:"><h2><?php echo $facility['title'];?></h2></div>
                    <div class="main-text">
                        <p><?php echo $facility['description'];?></p>
                    </div>
                    <div class="aboutus-underline">
                    </div>
                    <div class="readmore">
                        <!-- <button type="button" class="btn spa-button" onclick="location.href = 'spa.php#spa-treatments-and-packages';">Treatments and Packages</button> -->
                        <button type="button" class="btn book-btn" onclick="location.href = '<?php echo site_url();?>/spa-wellness-ar#<?php echo $slug;?>';">اقرأ المزيد</button>
                    </div>
                </div>
                <div class="spa-wellness-logo-container col-lg-3 col-md-12 col-sm-12 col-xs-12">
                    <div class="aboutus-logo">
                        <img src="<?php echo $facility_logo[0];?>" height="100px" class="" alt="">
                    </div>
                </div>
            </div>
            <?php } ?>
            <!-- <div class="row">
                <div class="content col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="spa-image">
                        <div id="jimamCarousel" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#jimamCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#jimamCarousel" data-slide-to="1"></li>
                                <li data-target="#jimamCarousel" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                <img src="<?php echo get_template_directory_uri() ?>/images/SPA 1.jpg" class="img-fluid" alt="">  
                                </div>
                                <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri() ?>/images/SPA 2.jpg" class="img-fluid" alt="">  
                                </div>
                                <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri() ?>/images/SPA 3.jpg" class="img-fluid" alt="">  
                                </div>
                            </div>
                        </div>           
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="content2 col-lg-9 col-md-9 col-sm-12 col-xs-12" data-aos="fade-up">
                    <div class="title" style="letter-spacing:normal;"><h2><?php echo $jimam_title;?></h2></div>
                    <div class="main-text">
                        <p><?php echo $jimam_description;?></p>
                    </div>
                    <div class="aboutus-underline">
                    </div>
                    <div class="readmore" data-aos="fade-up">
                        <button type="button" class="btn book-btn" onclick="location.href = '<?php echo site_url();?>/spa-wellness#book';">اقرأ المزيد</button>
                    </div>
                </div>
                <div class="spa-wellness-logo-container col-lg-3 col-md-12 col-sm-12 col-xs-12">
                    <div class="aboutus-logo" data-aos="fade-up">
                        <img src="<?php echo $jimam_logo_image;?>" height="100px" class="" alt="">
                    </div>
                </div>
            </div> -->
            <!-- Arena Fitness Center -->
            <!-- <div class="row">
                <div class="content col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="arena-image">
                        <div id="arenaCarousel" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#arenaCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#arenaCarousel" data-slide-to="1"></li>
                                <li data-target="#arenaCarousel" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                       <img src="<?php echo get_template_directory_uri() ?>/images/arena-fitness-center.jpg" class="img-fluid" alt="">   
                                </div>
                                <div class="carousel-item">
                                       <img src="<?php echo get_template_directory_uri() ?>/images/arena-fitness-center.jpg" class="img-fluid" alt="">   
                                </div>
                                <div class="carousel-item">
                                       <img src="<?php echo get_template_directory_uri() ?>/images/arena-fitness-center.jpg" class="img-fluid" alt="">   
                                </div>
                            </div>
                        </div>         
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="content2 col-lg-9 col-md-9 col-sm-12 col-xs-12" data-aos="fade-up">
                    <div class="title" style="letter-spacing:normal;"><h2><?php echo $arena_title;?></h2></div>
                        <div class="main-text">
                            <p><?php echo $arena_description;?></p>
                        </div>
                        <div class="aboutus-underline">
                        </div>
                        <div class="readmore" data-aos="fade-up">
                           
                            <button type="button" class="btn book-btn"  onclick="location.href = '/spa-wellness#arena-fitness-center-memberships-and-packages';">اقرأ المزيد</button>
                        </div>
                    </div>
                    <div class="spa-wellness-logo-container col-lg-3 col-md-12 col-sm-12 col-xs-12">
                    <div class="aboutus-logo">
                        <img src="<?php echo $arena_logo_image;?>" class="" height="100px" alt="" data-aos="fade-up">
                    </div>
                </div>
            </div> -->
            <!-- BarberShop -->
            <!-- <div class="row">
                <div class="content col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="barbershop-image">
                        <div id="barbershopCarousel" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#barbershopCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#barbershopCarousel" data-slide-to="1"></li>
                                <li data-target="#barbershopCarousel" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                                          <img src="<?php echo get_template_directory_uri() ?>/images/BARBER 1.jpg" class="img-fluid" alt="">     
                                </div>
                                <div class="carousel-item">
                                                          <img src="<?php echo get_template_directory_uri() ?>/images/BARBER 2.jpg" class="img-fluid" alt="">    
                                </div>
                                <div class="carousel-item">
                                                          <img src="<?php echo $barbershop_image;?>" class="img-fluid" alt="">   
                                </div>
                            </div>
                        </div>           
                                  
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="content2 col-lg-9 col-md-9 col-sm-12 col-xs-12" data-aos="fade-up">
                    <div class="title" style="letter-spacing:normal;"><h2><?php echo $barbershop_title;?></h2></div>
                        <div class="main-text">
                           <p><?php echo $barbershop_description;?></p>
                        </div>
                        <div class="aboutus-underline">
                        </div>
                        <div class="readmore" data-aos="fade-up">
                            <button type="button" class="btn book-btn" onclick="location.href = '/spa-wellness#barbershop-services';">اقرأ المزيد</button>
                        </div>
                    </div>
                    <div class="spa-wellness-logo-container col-lg-3 col-md-12 col-sm-12 col-xs-12">
                    <div class="aboutus-logo" data-aos="fade-up">
                        <img src="<?php echo $barbershop_logo_image;?>" class="" height="100px" alt="">
                    </div>
            </div> -->
        </div>
    </section>
    <!-- Meetings and gatherings -->
    <section>
        <div class="meetings container-fluid">
            <div id="meetings" class="small-anchor"></div>
            <div class="row" data-aos="fade-up">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 d-flex justify-content-center align-items-center">
                        <div class="meetings-underline-before"></div>
                        <div class="small-title" style="letter-spacing:normal;">النّـجــاح هـو طـريـقـة تـفـكـيـر، ونـحـنُ هـنـا لـنـسـاعـدك فـي الـوصـول إلـيـه</div>
                        <div class="meetings-underline-after"></div>
                    </div>
                        <div class="title col-lg-12 col-md-12 col-sm-12 col-xs-12 d-flex justify-content-center align-items-center" style="letter-spacing:normal;">الاجـتـمـــاعــــات والـفـعـاليــــات</div>
                </div>
            <div class="row meetings-row" style="padding-left:10%;padding-right:10%"  data-aos="fade-up">
                <div class="col-lg-4 col-sm-12 col-xs-12 col-md-12">
                <div id="carouselExampleIndicators2"  data-interval="15000" class="carousel slide carousel-fade" data-ride="carousel" data-interval="7000" data-pause="false">
                        <ol class="carousel-indicators">
                            <?php 
                            $count = count($meetings);
                            $j=0;
                            while($j<$count){ ?>
                                <li id="l<?php echo $j+1;?>" data-target="#carouselExampleIndicators2" data-slide-to="<?php echo $j;?>" class="<?php echo ($j==0)? 'active': ''?>"></li>
                            <?php
                                $j++;
                            }
                            ?>

                        </ol>
                        <div class="carousel-inner">
                            <?php
                            $j=0;
                            foreach($meetings as $meeting) {
                            $meeting_image =  wp_get_attachment_image_src($meeting['image'], $size = 'large');
                            ?>
                            <div class="meeting-content carousel-item <?php echo ($j==0) ? 'active':'';?>">
                                <img src="<?php echo $meeting_image[0];?>" class="img-fluid d-block w-100" alt="...">
                                                                
                            </div>
                            <?php
                            $j++;
                            } ?>
                        </div>
                    </div>
                </div>
                <div class="private-office col-lg-8 col-sm-12 col-xs-12 col-md-12">
                        <div id="carouselExampleIndicators4" class="carousel slide" data-ride="carousel" data-interval="7000" data-pause="false">
                        <ol class="carousel-indicators" style="display:none;">
                            <?php 
                            $count = count($meetings);
                            $j=0;
                            while($j<$count){ ?>
                                <li id="r<?php echo $j+1;?>" data-target="#carouselExampleIndicators4" data-slide-to="<?php echo $j;?>" class="<?php echo ($j==0)? 'active': ''?>"></li>
                            <?php
                                $j++;
                            }
                            ?>


                        </ol>
                        <div class="carousel-inner">
                            <?php
                            $j=0;
                            foreach($meetings as $meeting){ ?>
                                <div class="carousel-item <?php echo ($j==0) ? 'active': ''?>">
                                    <div class="private-title" style="letter-spacing:normal;"><h2><?php echo $meeting['meetings_title'];?></h2></div>
                                    <div class="private-text">
                                        <p><?php echo $meeting['description'];?></p>
                                        <br>
                                    </div>
                                </div>
                            <?php
                            $j++;
                            } ?>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Experiences -->
    <section>
        <div class="experiences container-fluid">
            <div id="experiences" class="small-anchor"></div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 d-flex justify-content-center align-items-center">
                    <div class="rooms-underline-before"></div>
                    <div class="title" style="letter-spacing:normal;">تـجـربـــة الـريــــاض</div>
                    <div class="rooms-underline-after"></div>

                </div>    
            </div>
            <div class="row exp-img-row" style="padding-left:10%;padding-right:10%;">
              <?php echo $exp_description;?>
            </div>
            <div class="row exp-img-row" style="padding-left:10%;padding-right:10%;">
            <?php
            $j=1;
            foreach($exp_images as $exp_image){
            $image_places = wp_get_attachment_image_src($exp_image['images'],$size='large');
            ?> 
                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                    <div class="card experience-riyadh-card<?php echo $j;?>" style="position: relative;text-align: center;color: white;">
                        <img src="<?php echo $image_places[0];?>" class="card-img-top" alt="...">
                        <div class="bottom-left" style="position:absolute;bottom:2%;left:50%;transform:translate(-50%, -50%);display:none;"><?php echo $exp_image['image_title'];?></div>
                    </div>
                </div>
            <?php
                if($j%3 == 0 && $j!=count($exp_places)){ ?>
                     </div>
            <div class="row exp-img-row" style="padding-left:10%;padding-right:10%;">
            <?php 
                }
                $j++;
            } ?>
            </div>
            <div class="row exp-img-row" style="padding-left:10%;padding-right:10%;">
                <div id="ExpcarouselExampleControls" class="carousel slide" data-ride="carousel" style="width:100%;background-color:#4b555c">
                <ol class="carousel-indicators">
                            <?php 
                            $count = count($exp_places);
                            $j=0;
                            while($j<$count){ ?>
                                <li data-target="#ExpcarouselExampleControls" data-slide-to="<?php echo $j;?>" class="<?php echo ($j==0)? 'active': ''?>"></li>
                            <?php
                                $j++;
                            }
                            ?>


                        </ol>
                    <div class="carousel-inner">
                        <?php
                        $j=0;
                        foreach($exp_places as $exp_place) { ?> 
                            <div class="carousel-item <?php echo ($j==0) ? 'active':'';?>">
                                <div class="place-title"><strong><?php echo $exp_place['place_title']?></strong></div>
                                <div class="place-details">
                                    <?php echo $exp_place['place_description'];?>
                                </div>
                            </div>
                        <?php 
                        $j++;
                        } ?>
                    </div>
                </div>
            </div>    
            
        </div>
        
    </section>
    
    <?php require 'footer-secondary-ar.php';?>