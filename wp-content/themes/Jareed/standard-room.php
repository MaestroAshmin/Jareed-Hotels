<?php
/*
 * Template Name: Standard Room
 * Template Post Type: post, page, product
 */
?>
<?php require 'header.php';?>
   <div style="background-color:#f1f1f2;">
         <div class="room-banner">
         <div id="boulevard-room-slide" data-interval="5000" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#boulevard-room-slide" data-slide-to="0" class="active"></li>
                    <li data-target="#boulevard-room-slide" data-slide-to="1"></li>
                    <li data-target="#boulevard-room-slide" data-slide-to="2"></li>
                    <li data-target="#boulevard-room-slide" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner" style="height:450px;">
                    <div class="carousel-item active">
                    <img class="" src="<?php echo get_template_directory_uri() ?>/images/SR 1.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                    <img class="" src="<?php echo get_template_directory_uri() ?>/images/SR 2.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                    <img class="" src="<?php echo get_template_directory_uri() ?>/images/SR 3.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                    <img class="" src="<?php echo get_template_directory_uri() ?>/images/SR 4.jpg" alt="Second slide">
                    </div>
                </div>
            </div>
    </div>

    <div class="price-container d-flex">
        <!-- <div class="price d-flex justify-content-between">
            <div class="price-text d-flex">
            <p>600 SR <sub>/night</sub></p>
            </div>
            <div class="price-text d-flex justify-content-end" style="float:right;">
            <img src="<?php echo get_template_directory_uri() ?>/images/LINKS-24.png" alt="" height="30px" width="30px">
                <p class="text">2 Guests</p>
                <img src="<?php echo get_template_directory_uri() ?>/images/LINKS-25.png" alt="" height="30px" width="30px">
                <p class="text">52 m<sup>2</sup></p>
            </div>
        </div> -->
        
    </div>
    <div class="room-suits-container container-fluid">   
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 d-flex justify-content-center align-items-center">
                <div class="room-details-container">
                    <div class="room-name"><h2>STANDARD ROOM</h2></div>
                    <div class="room-description">
                    <p>
                    Our Standard room sets a new standard for elevated comfort. Contemporary design and luxurious details merge to create the ideal environment for you to return to after a busy day out.
                    </p>
                    </div>
                    <div class="aboutus-underline"></div>
                    <div class="at-a-glance">
                        <div class="content">
                            <div class="title">AT A GLANCE</div>
                            <div class="points">
                            <div class="row">
                                <div class="col">
                                        <ul>
                                            <li>Sleeps up to 2 adults and 1 child</li>
                                            <li>1 King bed or 2 single beds</li>
                                            <li>View: No view</li>
                                        </ul>
                                </div>
                                <div class="col">
                                    <ul>
                                            <li>Outdoor enclosed small private area</li>
                                            <li>Size: 52 m2</li>
                                            <li>Connecting rooms available</li>
                                    </ul>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="readmore" data-aos="fade-up">
                        <button type="button" class="btn book-btn">BOOK THIS ROOM</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="video-tour d-flex justify-content-center align-items-center">
        <div class="video-container">
            <video
            id="my-video"
            class="video-js vjs-big-play-centered"
            controls
            preload="auto"
            width="auto"
            height="550"
            poster="<?php echo get_template_directory_uri() ?>/images/3D Tour.png"
            data-setup="{}"
        >
            <source src="<?php echo get_template_directory_uri() ?>/videos/standard-room-tour.mp4" type="video/mp4" />
            <source src="MY_VIDEO.webm" type="video/webm" />
            <p class="vjs-no-js">
            To view this video please enable JavaScript, and consider upgrading to a
            web browser that
            <a href="https://videojs.com/html5-video-support/" target="_blank"
                >supports HTML5 video</a
            >
            </p>
        </video>
        <div class="at-a-glance">
            <div class="content">
                <div class="title">AT A GLANCE</div>
                <div class="points">
                   <div class="row">
                       <div class="col">
                            <ul>
                                <li>Sleeps up to 2 adults and 1 child</li>
                                <li>1 King bed or 2 single beds</li>
                                <li>View: No view</li>
                            </ul>
                       </div>
                       <div class="col">
                           <ul>
                                <li>Outdoor enclosed small private area</li>
                                <li>Size: 52 m2</li>
                                <li>Connecting rooms available</li>
                           </ul>
                       </div>
                   </div>
                </div>
            </div>
        </div>
        </div>
    </div> -->
    <!-- <div class="rooms">
        <div class="room-features d-flex justify-content-center align-items-center">
            <div class="room-tabs">
                <div class="row" style="height:100%;">
                    <div class="overview-tab col-lg-3 col-md-3 col-sm-12 col-xs-12 d-flex justify-content-center align-items-center tab border border-white"><a class="box">OVERVIEW</a></div>
                    <div class="amenities-tab col-lg-3 col-md-3 col-sm-12 col-xs-12 d-flex justify-content-center align-items-center tab border border-white"><a class="box">AMENITIES</a></div>
                    <div class="in-room-media-tab col-lg-3 col-md-3 col-sm-12 col-xs-12 d-flex justify-content-center align-items-center tab border border-white"><a class="box">IN-ROOM MEDIA</a></div>
                    <div class="floor-plan-tab col-lg-3 col-md-3 col-sm-12 col-xs-12 d-flex justify-content-center align-items-center tab border border-white"><a class="box">FOOR PLAN</a></div>
                </div>
            </div>
            
        </div>
        <div class="overview justify-content-center align-items-center">
            <div class="room-full-description">
                <div class="title d-flex"><img src="images/LINKS-13.png" alt=""><h6>SPECIAL BENEFITS</h6></div>
                <div class="descript">
                    <p>Business services, for a fee</p>
                </div>
                <div class="title d-flex"><img src="images/LINKS-14.png" alt=""><h6>ROOM FEATURES</h6></div>
                <div class="descript">
                    <p>52 m2</p>
                    <p>Air-conditioned</p>
                    <p>Small private outside sitting area for two.</p>
                    <p>Marble Bathroom with shower, stand-alone soaking tub + separate vanity</p>
                    <p>Fully equipped Minibar with Complementary Beverages and Coffee Machine.</p>
                    <p>65” 4K TV Display</p>
                </div>
                <div class="title d-flex" ><img src="images/LINKS-15.png" alt=""><h6>ACCESSIBLE ROOM FEATURES</h6></div>
                <div class="descript">
                    <p>This room type does not offer mobility accessible rooms</p>
                    <p>This room type offers accessible rooms with roll in showers</p>
                    <p>This room type does not offer hearing accessible rooms</p>
                </div>
            </div>
        </div>
        <div class="amenities justify-content-center align-items-center">
            <div class="room-full-description">
                <div class="title d-flex"><img src="images/LINKS-16.png" alt=""><h6>BEDS AND BEDDING</h6></div>
                <div class="descript">
                    <p>Maximum Occupancy: 3</p>
                    <p>1 King or 2 Single</p>
                    <p>Rollaway beds permitted: 1</p>
                    <p>Cribs permitted: 1</p>
                    <p>Maximum cribs/rollaway beds permitted: 1</p>
                    <p>Duvet</p>
                </div>
                <div class="title d-flex"><img src="images/LINKS-17.png" alt=""><h6>BATH AND BATHROOM FEATURES</h6></div>
                <div class="descript">
                    <p>Marble bathroom</p>
                    <p>Bathtub and shower separate</p>
                    <p>Bidet</p>
                    <p>Double vanities</p>
                    <p>Hair dryer</p>
                    <p>Robes: 2</p>
                    <p>Slippers</p>
                </div>
                <div class="title d-flex"><img src="images/LINKS-18.png" alt=""><h6>FURNITURE AND FURNISHINGS</h6></div>
                <div class="descript">
                    <p>Sofa</p>
                    <p>Chair</p>
                    <p>Alarm Clock</p>
                    <p>Safe, in room</p>
                    <p>Desk, writing / work, electrical outlet</p>
                    <p>Iron and ironing board</p>
                </div>
                <div class="title d-flex"><img src="images/LINKS-19.png" alt=""><h6>FOOD & BEVERAGES</h6></div>
                <div class="descript">
                    <p>Room service, 24-Hour</p>
                    <p>Grocery shopping service</p>
                    <p>Bottled water, complimentary</p>
                    <p>Coffee maker / tea service</p>
                    <p>Instant hot water</p>
                    <p>Mini-bar, for a fee</p>
                </div>
                <div class="title d-flex"><img src="images/LINKS-20.png" alt=""><h6>KITCHEN FEATURES</h6></div>
                <div class="descript">
                    <p>Mini-refrigerator</p>
                </div>
            </div>
        </div>
        <div class="in-room-media justify-content-center align-items-center">
            <div class="room-full-description">
                <div class="title d-flex"><img src="images/LINKS-21.png" alt=""><h6>INTERNET AND PHONES</h6></div>
                <div class="descript">
                    <p>Phones: 3</p>
                    <p>Phone features: cordless phone, voicemail, speaker phone, and phone lines (2)</p>
                    <p>High speed Internet, complimentary</p>
                    <p>Wired Internet, complimentary</p>
                    <p>Wireless Internet, complimentary</p>
                </div>
                <div class="title d-flex"><img src="images/LINKS-22.png" alt=""><h6>ENTERTAINMENT</h6></div>
                <div class="descript">
                    <p>TV features: remote control, 42in/107cm, and LED screen</p>
                    <p>Plug-In High Tech room</p>
                    <p>Premium movie channels</p>
                    <p>Cable/satellite</p>
                    <p>International cable/satellite</p>
                    <p>CNN</p>
                    <p>Radio</p>
                    <p>Chromecast</p>
                    <p>Netflix</p>
                </div>
               
            </div>
        </div>
        <div class="floor-plan justify-content-center align-items-center">
            <div class="room-full-description">
               <img src="images/LINKS-12.png" alt="">
            </div>
        </div>
    </div> -->
    <!-- <div class="rooms">
        <div class="room-features d-flex justify-content-center align-items-center">
                <div class="room-tabs">
                    <div class="row" style="height:100%;">
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 d-block justify-content-center align-items-center">
                            <div class="row overview-tab tab d-flex justify-content-center align-items-center border border-white">
                                <a class="box">OVERVIEW</a>
                            </div>
                            <div class="row overview justify-content-center align-items-center">
                                <div class="room-full-description">
                                    <div class="title d-flex"><img src="images/LINKS-13.png" alt=""><h6>SPECIAL BENEFITS</h6></div>
                                    <div class="descript">
                                        <p>Business services, for a fee</p>
                                    </div>
                                    <div class="title d-flex"><img src="images/LINKS-14.png" alt=""><h6>ROOM FEATURES</h6></div>
                                    <div class="descript">
                                        <p>52 m2</p>
                                        <p>Air-conditioned</p>
                                        <p>Small private outside sitting area for two.</p>
                                        <p>Marble Bathroom with shower, stand-alone soaking tub + separate vanity</p>
                                        <p>Fully equipped Minibar with Complementary Beverages and Coffee Machine.</p>
                                        <p>65” 4K TV Display</p>
                                    </div>
                                    <div class="title d-flex" ><img src="images/LINKS-15.png" alt=""><h6>ACCESSIBLE ROOM FEATURES</h6></div>
                                    <div class="descript">
                                        <p>This room type does not offer mobility accessible rooms</p>
                                        <p>This room type offers accessible rooms with roll in showers</p>
                                        <p>This room type does not offer hearing accessible rooms</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 d-block justify-content-center align-items-center">
                            <div class="row amenities-tab tab d-flex justify-content-center align-items-center border border-white">
                                    <a class="box">AMENITIES</a>
                            </div>
                            <div class="row amenities justify-content-center align-items-center">
                                <div class="room-full-description">
                                    <div class="title d-flex"><img src="images/LINKS-16.png" alt=""><h6>BEDS AND BEDDING</h6></div>
                                    <div class="descript">
                                        <p>Maximum Occupancy: 3</p>
                                        <p>1 King or 2 Single</p>
                                        <p>Rollaway beds permitted: 1</p>
                                        <p>Cribs permitted: 1</p>
                                        <p>Maximum cribs/rollaway beds permitted: 1</p>
                                        <p>Duvet</p>
                                    </div>
                                    <div class="title d-flex"><img src="images/LINKS-17.png" alt=""><h6>BATH AND BATHROOM FEATURES</h6></div>
                                    <div class="descript">
                                        <p>Marble bathroom</p>
                                        <p>Bathtub and shower separate</p>
                                        <p>Bidet</p>
                                        <p>Double vanities</p>
                                        <p>Hair dryer</p>
                                        <p>Robes: 2</p>
                                        <p>Slippers</p>
                                    </div>
                                    <div class="title d-flex"><img src="images/LINKS-18.png" alt=""><h6>FURNITURE AND FURNISHINGS</h6></div>
                                    <div class="descript">
                                        <p>Sofa</p>
                                        <p>Chair</p>
                                        <p>Alarm Clock</p>
                                        <p>Safe, in room</p>
                                        <p>Desk, writing / work, electrical outlet</p>
                                        <p>Iron and ironing board</p>
                                    </div>
                                    <div class="title d-flex"><img src="images/LINKS-19.png" alt=""><h6>FOOD & BEVERAGES</h6></div>
                                    <div class="descript">
                                        <p>Room service, 24-Hour</p>
                                        <p>Grocery shopping service</p>
                                        <p>Bottled water, complimentary</p>
                                        <p>Coffee maker / tea service</p>
                                        <p>Instant hot water</p>
                                        <p>Mini-bar, for a fee</p>
                                    </div>
                                    <div class="title d-flex"><img src="images/LINKS-20.png" alt=""><h6>KITCHEN FEATURES</h6></div>
                                    <div class="descript">
                                        <p>Mini-refrigerator</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 d-block justify-content-center align-items-center">
                            <div class="row in-room-media-tab tab d-flex justify-content-center align-items-center border border-white">
                                    <a class="box">IN-ROOM MEDIA</a>
                            </div>
                            <div class="row in-room-media justify-content-center align-items-center">
                                <div class="room-full-description">
                                    <div class="title d-flex"><img src="images/LINKS-21.png" alt=""><h6>INTERNET AND PHONES</h6></div>
                                    <div class="descript">
                                        <p>Phones: 3</p>
                                        <p>Phone features: cordless phone, voicemail, speaker phone, and phone lines (2)</p>
                                        <p>High speed Internet, complimentary</p>
                                        <p>Wired Internet, complimentary</p>
                                        <p>Wireless Internet, complimentary</p>
                                    </div>
                                    <div class="title d-flex"><img src="images/LINKS-22.png" alt=""><h6>ENTERTAINMENT</h6></div>
                                    <div class="descript">
                                        <p>TV features: remote control, 42in/107cm, and LED screen</p>
                                        <p>Plug-In High Tech room</p>
                                        <p>Premium movie channels</p>
                                        <p>Cable/satellite</p>
                                        <p>International cable/satellite</p>
                                        <p>CNN</p>
                                        <p>Radio</p>
                                        <p>Chromecast</p>
                                        <p>Netflix</p>
                                    </div>
                                
                                </div>
                            </div>
                            <div class="row floor-plan-tab tab d-flex justify-content-center align-items-center border border-white">
                                    <a class="box">FLOOR PLAN</a>
                            </div>
                            <div class="row floor-plan justify-content-center align-items-center">
                                <img src="images/Floorplans/Floorplans/PNG/Floormaps-02.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
    </div> -->
    <div class="rooms">
        <div class="room-features d-flex justify-content-center align-items-center">
                <div class="room-tabs">
                    <div class="row" style="height:100%;">
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 d-block justify-content-center align-items-center">
                            <div class="row overview-tab tab d-flex justify-content-center align-items-center border border-white">
                                <a class="box">AMENITIES</a>
                            </div>
                            <div class="row overview justify-content-center align-items-center">
                                <div class="room-full-description">
                                   <ul>
                                        <li>
                                           Maximum cribs/rollaway beds permitted: 1 extra bed or baby crib
                                        </li>
                                        <li>
                                           24-hour room service
                                        </li>
                                        <li>
                                           Fully equipped minibar with complimentary beverages
                                        </li>
                                        <li>
                                           Nespresso coffee machine and tea setup
                                        </li>
                                        <li>
                                           Wireless phone
                                        </li>
                                        <li>
                                           Complimentary high-speed Wi-Fi
                                        </li>
                                        <li>
                                           USB wall and desk ports for multi-device charging
                                        </li>
                                        <li>
                                           65” Smart TV with streaming services
                                        </li>
                                        <li>
                                           Oliver Hemming Bluetooth speaker and alarm clock
                                        </li>
                                        <li>
                                           In-room safe box
                                        </li>
                                        <li>
                                           Separate working desk
                                        </li>
                                   </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 d-block justify-content-center align-items-center">
                            <div class="row amenities-tab tab d-flex justify-content-center align-items-center border border-white">
                                    <a class="box">BATHROOMS</a>
                            </div>
                            <div class="row amenities justify-content-center align-items-center">
                                <div class="room-full-description">
                                   <ul>
                                       <li>
                                           Freestanding bathtub and walk-in shower
                                       </li>
                                       <li>
                                           Dedicated makeup vanity
                                       </li>
                                       <li>
                                           Luxury Francis Kurkdjian toiletries
                                       </li>
                                   </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 d-block justify-content-center align-items-center">
                            <div class="row floor-plan-tab tab d-flex justify-content-center align-items-center border border-white">
                                    <a class="box">FLOOR PLAN</a>
                            </div>
                            <div class="row floor-plan justify-content-center align-items-center">
                                <img src="<?php echo get_template_directory_uri() ?>/images/Floorplans/Floorplans/PNG/Floormaps-02.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <section id=".featured-rooms">
        <div class="featured-rooms container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 d-flex justify-content-center align-items-center">
                    <div class="rooms-underline-before"></div>
                    <div class="title">OTHER ROOMS</div>
                    <div class="rooms-underline-after"></div>

                </div>    
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
        
    </section>
    <?php require 'footer-secondary.php';?>