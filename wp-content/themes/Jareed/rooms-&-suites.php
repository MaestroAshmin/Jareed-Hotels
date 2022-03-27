
<?php
/*
 * Template Name:Rooms & Suites
 * Template Post Type: post, page, product
 */
?><?php require 'header.php';?>
    <section id="rooms-suites-page"  style="padding-top:0px;margin-top:134px;">
        <div class="rooms-suits-page container-fluid">
            <div class="row" style="background-color: #4b555c;padding-top:50px;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 d-flex justify-content-center align-items-center" data-aos="fade-up">
                    <div class="rooms-underline-before"></div>
                    <div class="small-title">Comfort, Transcended</div>
                    <div class="rooms-underline-after"></div>
                </div>
                <div class="title col-lg-12 col-md-12 col-sm-12 col-xs-12 d-flex justify-content-center align-items-center" style="margin-bottom:30px;" data-aos="fade-up"><a href="#room" class="active">ROOMS</a> &nbsp; & &nbsp;<a href="#suite" class="">SUITES</a></div>
            </div>
            <div class="room-suits-container container-fluid" style="background-color: #4b555c;padding-bottom:50px;">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 d-flex justify-content-center align-items-center">
                        <div class="room-image-container room-carousel">
                            <div id="room-carousel" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#room-carousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#room-carousel" data-slide-to="1"></li>
                                    <li data-target="#room-carousel" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                    <img class="d-block w-100" src="<?php echo get_template_directory_uri() ?>/images/BEDROOM 1.jpg" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                    <img class="d-block w-100" src="<?php echo get_template_directory_uri() ?>/images/BEDROOM 2.jpg" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                    <img class="d-block w-100" src="<?php echo get_template_directory_uri() ?>/images/BEDROOM 3.jpg" alt="Third slide">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="room-contents">
                        <div class="content col-lg-9 col-md-9 col-sm-9 col-xs-12 d-flex justify-content-center align-items-center" data-aos="fade-up" style="margin-left:75px;">
                            <div class="main-text">
                                <p>Experience new heights of comfort and taste in our immaculately furnished rooms
                                and suites, designed to meet your every whim. Exquisite modern decor merges
                                warmth and elegance, ensuring you feel inspired and well-rested for every
                                moment of your stay.</p>
                                
                                <p>Choose your bedding preferences, find the room scent that soothes you, and get
                            the best sleep of your life. And that’s just the beginning.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
            <!-- <div class="room-suits-container container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 d-flex justify-content-center align-items-center">
                        <div class="room-image-container">
                            <img src="images/deluxe-room-image.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 d-flex justify-content-center align-items-center">
                        <div class="room-details-container">
                            <div class="room-name"><h4>DELUXE ROOM</h4></div>
                            <div class="room-description">
                            <p>
                            For those with a taste for the dramatic, experience a City & Boulevard View with
                            private outside balcony to soak in Riyadh’s energy. Our Deluxe room will have you
                            feeling both well-rested and inspired.
                            </p>
                            </div>
                            <div class="aboutus-underline"></div>
                            <div class="readmore" data-aos="fade-up">
                                <button type="button" class="btn room-button">ROOM DETAILS</button>
                                <button type="button" class="btn book-btn">BOOK NOW</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- <div class="room-suits-container container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 d-flex justify-content-center align-items-center">
                        <div class="room-image-container">
                            <img src="images/superior-room-image.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 d-flex justify-content-center align-items-center">
                        <div class="room-details-container">
                            <div class="room-name"><h4>SUPERIOR ROOM</h4></div>
                            <div class="room-description">
                            <p>
                            Discover the true meaning of comfort. Wake up to a view of the Riyadh sky while
                            you get ready to take on a new day. After the best sleep of your life and a
                            luxuriously designed bath, you’ll feel and look your very best.
                            </p>
                            </div>
                            <div class="aboutus-underline"></div>
                            <div class="readmore" data-aos="fade-up">
                                <button type="button" class="btn room-button">ROOM DETAILS</button>
                                <button type="button" class="btn book-btn">BOOK NOW</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- <div class="room-suits-container container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 d-flex justify-content-center align-items-center">
                        <div class="room-image-container">
                            <img src="images/standard-room.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 d-flex justify-content-center align-items-center">
                        <div class="room-details-container">
                            <div class="room-name"><h4>STANDARD ROOM</h4></div>
                            <div class="room-description">
                            <p>Our Standard room sets a new standard for elevated comfort. Contemporary
                            design and luxurious details merge to create the ideal environment for you to
                            return to after a busy day out.
                            </p>
                            </div>
                            <div class="aboutus-underline"></div>
                            <div class="readmore" data-aos="fade-up">
                                <button type="button" class="btn room-button"><a href="standard-room.php" style="text-decoration: none; color:#c7b283;">ROOM DETAILS</a></button>
                                <button type="button" class="btn book-btn">BOOK NOW</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="room-suits-container container-fluid">
                <div class="row room-page-title">
                    <div class="title">ROOMS</div>
                </div>
                <div class="row room-page-title">
                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 d-block justify-content-center align-items-center">
                        <div class="row justify-content-center">
                            <div id="carouselExampleSlidesOnly1" class="carousel slide" data-pause="true" data-interval="5000">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/images/Boulevard-room-small.jpg" alt="" height="350px" width="100%;" data-aos="fade-up">
                                        <div class="carousel-title normal">
                                            BOULEVARD- VIEW ROOM
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="room-suites-details-carousel">

                                        <!-- <div class="room-suites-details-carousel"  onclick="location.href = '<?php echo site_url();?>/boulevard-view-room';"> -->
                                            <div class="room-carousel-second">
                                                <img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/images/Boulevard-room-small.jpg" alt="" height="350px" width="100%;" data-aos="fade-up">


                                            </div>
                                            <div class="layers">
                                                <div class="layers-text">
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
                                        <div class="carousel-title hover">
                                            BOULEVARD- VIEW ROOM
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 d-block justify-content-center align-items-center">
                        <div class="row justify-content-center">
                            <div id="carouselExampleSlidesOnly2" class="carousel slide" data-pause="true" data-interval="5000">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/images/Superior-room-small.jpg" alt="" height="350px" width="100%;" data-aos="fade-up">
                                        <div class="carousel-title normal">
                                            SUPERIOR ROOM
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="room-suites-details-carousel"  onclick="location.href = '<?php echo site_url();?>/superior-room';">
                                            <div class="room-carousel-second">
                                                <img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/images/Superior-room-small.jpg" alt="" height="350px" width="100%;" data-aos="fade-up">


                                            </div>
                                            <div class="layers">
                                                <div class="layers-text">
                                                    <div class="description">
                                                        <p>
                                                            Discover the true meaning of comfort. Wake up to a view of the Riyadh sky while you get ready to take on a new day. After the best sleep of your life and a luxuriously designed bath, you’ll feel and look your very best.
                                                        </p>
                                                    </div>
                                                    <div class="explore-link">
                                                        <a href="<?php echo site_url();?>/superior">EXPLORE MORE ></a>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="carousel-title hover">
                                            SUPERIOR ROOM
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
     
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 d-block justify-content-center align-items-center">
                        <div class="row justify-content-center">
                            <div id="carouselExampleSlidesOnly3" class="carousel slide" data-pause="true" data-interval="5000">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/images/standard-room-image.png" alt="" height="350px" width="100%;" data-aos="fade-up">
                                        <div class="carousel-title normal">
                                            STANDARD ROOM
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="room-suites-details-carousel"  onclick="location.href = '<?php echo site_url();?>/standard-room';">
                                            <div class="room-carousel-second">
                                                <img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/images/standard-room-image.png" alt="" height="350px" width="100%;" data-aos="fade-up">
                                            </div>
                                            <div class="layers">
                                                <div class="layers-text">
                                                    <div class="description">
                                                        <p>
                                                           Our Standard room sets a new standard for elevated comfort. Contemporary design and luxurious details merge to create the ideal environment for you to return to after a busy day out.
                                                        </p>
                                                    </div>
                                                    <div class="explore-link">
                                                        <a href="<?php echo site_url();?>/standard-room">EXPLORE MORE ></a>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="carousel-title hover">
                                            STANDARD ROOM
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="room-suits-container container-fluid" style="padding-bottom:50px !important;">
                <div class="row room-page-title">
                    <div class="title">SUITES</div>
                </div>
                <div class="row room-page-title">
                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 d-block justify-content-center align-items-center">
                        <div class="row justify-content-center">
                            <div id="carouselExampleSlidesOnly4" class="carousel slide" data-pause="true" data-interval="5000">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/images/Family-suite-small.jpg" alt="" height="350px" width="100%;" data-aos="fade-up">
                                        <div class="carousel-title normal">
                                            FAMILY SUITE
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="room-suites-details-carousel"  onclick="location.href = '<?php echo site_url();?>/family-suite';">
                                            <div class="room-carousel-second">
                                                <img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/images/Family-suite-small.jpg" alt="" height="350px" width="100%;" data-aos="fade-up">


                                            </div>
                                            <div class="layers">
                                                <div class="layers-text">
                                                    <div class="description">
                                                        <p>
                                                            Experience unparalleled luxury in our magnificent Family Suite. With majestic views, sprawling space, and exquisite decor, there’s abundant space for everyone to experience comfort on their own terms. Featuring two private bedrooms separate from your stylish living areas, along with an impressive outdoor patio, you can fit rest, work, and hosting easily within the gorgeous walls of the Family Suite. 
                                                        </p>
                                                    </div>
                                                    <div class="explore-link">
                                                        <a href="<?php echo site_url();?>/family-suite">EXPLORE MORE ></a>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="carousel-title hover">
                                            FAMILY SUITE
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 d-block justify-content-center align-items-center">
                        <div class="row justify-content-center">
                            <div id="carouselExampleSlidesOnly5" class="carousel slide" data-pause="true" data-interval="5000">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/images/Boulevard-suite-small.jpg" alt="" height="350px" width="100%;" data-aos="fade-up">
                                        <div class="carousel-title normal">
                                            BOULEVARD VIEW SUITE
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="room-suites-details-carousel"  onclick="location.href = '<?php echo site_url();?>/boulevard-view-suite';">
                                            <div class="room-carousel-second">
                                                <img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/images/Boulevard-suite-small.jpg" alt="" height="350px" width="100%;" data-aos="fade-up">


                                            </div>
                                            <div class="layers">
                                                <div class="layers-text">
                                                    <div class="description">
                                                        <p>
                                                            Make your Riyadh experience truly unforgettable. Enjoy a spectacular view while you luxuriate in your customized bedding or whilst you entertain friends and family in the exceptionally designed indoor and outdoor dining areas. Live your best life, and feel well-rested while you’re at it. 
                                                        </p>
                                                    </div>
                                                    <div class="explore-link">
                                                        <a href="<?php echo site_url();?>/boulevard-view-suite">EXPLORE MORE ></a>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="carousel-title hover">
                                            BOULEVARD- VIEW SUITE
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
     
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 d-block justify-content-center align-items-center">
                        <div class="row justify-content-center">
                            <div id="carouselExampleSlidesOnly6" class="carousel slide" data-pause="true" data-interval="5000">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/images/superior-suite-image.jpg" alt="" height="350px" width="100%;" data-aos="fade-up">
                                        <div class="carousel-title normal">
                                            SUPERIOR SUITE
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="room-suites-details-carousel"  onclick="location.href = '<?php echo site_url();?>/superior-suite';">
                                            <div class="room-carousel-second">
                                                <img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/images/superior-suite-image.jpg" alt="" height="350px" width="100%;" data-aos="fade-up">
                                            </div>
                                            <div class="layers">
                                                <div class="layers-text">
                                                    <div class="description">
                                                        <p>
                                                            After an adventurous day out in the city, you can look forward to returning to a sanctuary that feels like home. Our spacious, light-filled Superior Suite sets the mood for deep rest as well as stylish hosting, both indoors and outdoors.
                                                        </p>
                                                    </div>
                                                    <div class="explore-link">
                                                        <a href="<?php echo site_url();?>/superior-suite">EXPLORE MORE ></a>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="carousel-title hover">
                                            SUPERIOR SUITE
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row room-page-title">
                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 d-block justify-content-center align-items-center">
                        <div class="row justify-content-center">
                            <div id="carouselExampleSlidesOnly7" class="carousel slide" data-pause="true" data-interval="5000">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/images/standard-suite-image.jpg" alt="" height="350px" width="100%;" data-aos="fade-up">
                                        <div class="carousel-title normal">
                                            STANDARD SUITE
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="room-suites-details-carousel"  onclick="location.href = '<?php echo site_url();?>/standard-suite';">
                                            <div class="room-carousel-second">
                                                <img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/images/standard-suite-image.jpg" alt="" height="350px" width="100%;" data-aos="fade-up">


                                            </div>
                                            <div class="layers">
                                                <div class="layers-text">
                                                    <div class="description">
                                                        <p>
                                                            Who said you can’t have it all? Our sprawling Standard Suite brings together the blissful sleep you crave, with a spacious living area to work and entertain. Work, play, rest, repeat - all within refined luxury. 
                                                        </p>
                                                    </div>
                                                    <div class="explore-link">
                                                        <a href="<?php echo site_url();?>/standard-suite">EXPLORE MORE ></a>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="carousel-title hover">
                                            STANDARD SUITE
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
<?php require 'footer-secondary.php';?>