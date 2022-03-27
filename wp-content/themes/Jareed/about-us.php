<?php
/*
 * Template Name: About Us
 * Template Post Type: post, page, product
 */
?>
    <?php require 'header.php';?>
    <?php
    $about_us = pods('about_us');
    $params = array(
    'where' => 't.ID = "39"',
    'limit' => 1
    );
    
    $about_us->find($params);
    
    $about_us_title = $about_us->get_field('about_us_title');
    $description = $about_us->get_field('description');
    $logo1 = $about_us->get_field('logo_1');
    $logo_1 = $logo1[0]['guid'];
    $logo2 = $about_us->get_field('logo_2');
    $logo_2 = $logo2[0]['guid'];
    $about_us_content = $about_us->get_field('about_us_content');
    // foreach($about_us_content as $ab_content){
    //     print_r($ab_content);
    // }
    // exit;
    ?>
    
    <!-- About us -->
    <section id="about-us-page" style="padding-top:0px;margin-top:135px;">
        <div class="aboutus-page container-fluid d-flex">
            <div class="row">
                <div class="content col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="title"><h2><?php echo $about_us_title;?></h2></div>
                    <div class="main-text">
                        <!-- <p>Within the heart of Saudi Arabia's shimmering capital, your urban oasis awaits.</p> -->
                        <!-- <br> -->
                        <!-- <p>Step into luxury defined on your own term. Here, we transcend hospitality and illuminate new heights for living your best life</p>
                        <br>
                        <p>Experience comfort you only dreamed of, in sumptuous surroudings that pique your senses and expand the limits of your imagination.</p>
                        <p>Bespoke service. Sublime Design. The Jareed Experience.</p> -->
                        <?php echo $description;?>
                    </div>
                    <div class="aboutus-underline">
                    </div>
                </div>   
                <!-- <div class="aboutus-logo-container col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="aboutus-logo">
                        <img src="<?php echo $logo_1;?>" class="img1" alt="" height="100px" width="auto">
                        <img src="<?php echo $logo_2;?>" class="img2" height="100px" width="auto" class="" alt="">
                    </div>
                </div>      -->
            </div>
                
            <!-- </div> -->
        </div>
    </section>

    <section>
        <div class="aboutus-content container-fluid d-flex">
            <?php
            $i=1;
            foreach($about_us_content as $ab_content){
                $image =  wp_get_attachment_image_src($ab_content['image'][0]['about_us_section_image'], $size = 'large');
                if($i %2 != 0){ ?>
                    <div class="row" data-aos="fade-up">
                        <div id="jareed-story" class="anchor"></div>
                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12"  data-aos="fade-up">
                            <?php if(count($ab_content['image'])<=1){?>
                                <img src ="<?php echo $image[0];?>" class="img-fluid about-img" width="100%" data-aos="fade-up">
                            <?php }else{ ?>
                                <div id="carouselExampleIndicators5" class="carousel slide carousel-fade" data-ride="carousel" data-interval="4000" data-pause="false">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators5" data-slide-to="0" class="active"></li>
                                        <li data-target="#carouselExampleIndicators5" data-slide-to="1"></li>
                                        <li data-target="#carouselExampleIndicators5" data-slide-to="2"></li>
                                        <li data-target="#carouselExampleIndicators5" data-slide-to="3"></li>
                                        <li data-target="#carouselExampleIndicators5" data-slide-to="4"></li>
                                        <li data-target="#carouselExampleIndicators5" data-slide-to="5"></li>
                                        <li data-target="#carouselExampleIndicators5" data-slide-to="6"></li>


                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="boulevard-carousel carousel-item active">
                                            <img src="images/Boulevard 1.jpeg" class="img-fluid d-block w-100" alt="...">
                                                                            
                                        </div>
                                        <div class="boulevard-carousel carousel-item">
                                            <img src="images/Boulevard 2.jpeg" class="img-fluid d-block w-100" alt="...">
                                        </div>
                                        <div class="boulevard-carousel carousel-item">
                                            <img src="images/Boulevard 3.jpeg" class="img-fluid d-block w-100" alt="...">
                                        </div>
                                        <div class="boulevard-carousel carousel-item">
                                            <img src="images/Boulevard 4.jpeg" class="img-fluid d-block w-100" alt="...">
                                        </div>
                                        <div class="boulevard-carousel carousel-item">
                                            <img src="images/Boulevard 5.jpeg" class="img-fluid d-block w-100" alt="...">
                                        </div>
                                        <div class="boulevard-carousel carousel-item">
                                            <img src="images/Boulevard 6.jpeg" class="img-fluid d-block w-100" alt="...">
                                        </div>
                                        <div class="boulevard-carousel carousel-item">
                                            <img src="images/Boulevard 7.jpeg" class="img-fluid d-block w-100" alt="...">
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            
                        </div>
                        <div class="content col-lg-7 col-md-7 col-sm-12 col-xs-12" style="padding-left:50px;"  data-aos="fade-up">
                            <div class="title" style="padding-top:50px;" data-aos="fade-up"><h2><?php echo $ab_content['name'];?></h2></div>
                            <div class="main-text" data-aos="fade-up">
                                <?php echo $ab_content['description'];?>
                            </div>
                            <div class="aboutus-underline-graphics">
                        </div>
                        <?php 
                                
                                if(!empty($ab_content['logo_image'])){
                                $logo_image = wp_get_attachment_image_src($ab_content['logo_image'],$size='large');    
                                // print_r(empty($ab_content['logo_image']));exit;
                                ?>
                                <div class="logo-about">
                                    <img src="<?php echo $logo_image[0];?>" alt="">
                                </div>
                                <?php 
                                }
                                ?>
                        
                    </div>
                <?php }
                else{ ?>
                    <div class="row" data-aos="fade-up">
                        <div id="jareed-experience" class="anchor"></div>
                        <div class="content col-lg-7 col-md-7 col-sm-12 col-xs-12">
                        <div class="title" style="padding-top:50px;" data-aos="fade-up"><h2><?php echo $ab_content['name'];?></h2></div>
                            <div class="main-text" data-aos="fade-up">
                                <?php echo $ab_content['description'];?>
                                <p class="aboutus-underline-graphics"></p>
                                <?php 
                                
                                if(!empty($ab_content['logo_image'])){
                                $logo_image = wp_get_attachment_image_src($ab_content['logo_image'],$size='large');    
                                // print_r(empty($ab_content['logo_image']));exit;
                                ?>
                                <div class="logo-about">
                                    <img src="<?php echo $logo_image[0];?>" alt="">
                                </div>
                                <?php 
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12" style="padding-top:50px;">
                           <?php if(count($ab_content['image'])<=1){?>
                                <img src ="<?php echo $image[0];?>" class="img-fluid" width="100%" data-aos="fade-up">
                            <?php }else{?>
                                <div id="carouselExampleIndicators5" class="carousel slide carousel-fade" data-ride="carousel" data-interval="4000" data-pause="false">
                                    <ol class="carousel-indicators">
                                        <?php
                                        $j=0;
                                        $count = count($ab_content['image']);
                                        while($j< $count){?>
                                            <li data-target="#carouselExampleIndicators5" data-slide-to="<?php echo $j;?>" class="<?php echo ($j==0) ? 'active' : '';?>"></li>
                                        <?php
                                        $j++;
                                        } ?>
                                    </ol>
                                    <div class="carousel-inner">
                                        <?php
                                        $j=0;
                                        $count = count($ab_content['image']);
                                        while($j< $count){
                                            $image =  wp_get_attachment_image_src($ab_content['image'][$j]['about_us_section_image'], $size = 'small');?>
                                            <div class="boulevard-carousel carousel-item <?php echo ($j==0) ? 'active' : '';?>">
                                                <img src="<?php echo $image[0];?>" class="img-fluid about-img d-block w-100" alt="...">
                                            </div>
                                        <?php
                                        $j++;
                                        } ?>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                <?php
                }
            $i++;
            } ?>
            <!-- <div class="row" data-aos="fade-up">
                <div id="jareed-story" class="anchor"></div>
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12"  data-aos="fade-up">
                    <img src ="images/The Jareed Hotel Website-30.png" class="img-fluid" width="100%" data-aos="fade-up">
                </div>
                <div class="content col-lg-7 col-md-7 col-sm-12 col-xs-12" style="padding-left:50px;"  data-aos="fade-up">
                    <div class="title" style="padding-top:50px;" data-aos="fade-up"><h2>THE JAREED<br>STORY</h2></div>
                    <div class="main-text" data-aos="fade-up">
                        <p>For centuries, the stems and leaves of the grand
                            palm tree - also known as Jareed - were used to
                            create roofs of local houses.</p>
                        <br>
                        <p>Palm trees are thus a symbol of home and
                        hospitality, something near to sacred in Saudi
                        Arabian heritage.</p>
                        <br>
                        <p>This is the heart of Jareed Hotel - transcending
                            hospitality and becoming your dream home away
                            from home.</p>
                    </div>
                    <div class="aboutus-underline-graphics">
                </div>
            </div> -->
            <!-- <div class="row" data-aos="fade-up">
                <div id="jareed-experience" class="anchor"></div>
                <div class="content col-lg-7 col-md-7 col-sm-12 col-xs-12">
                <div class="title" style="padding-top:50px;" data-aos="fade-up"><h2>THE JAREED<br>EXPERIENCE</h2></div>
                    <div class="main-text" data-aos="fade-up">
                        <p>We take your experience personally. Our
                        hand-selected team is devoted to providing sincere,
                        intuitive service. We listen carefully and curate your
                        stay based on your unique preferences and
                        schedule</p>
                        <br>
                        <p>Expect the unparalleled luxury of 5 star lodging with
                        the exclusivity and comfort of a boutique atmosphere. With dazzling
                        interiors and exquisite dining options, you’ll
                        experience fulfilment on a whole new level.</p>
                        <br>
                        <p>We can’t wait to show you.</p>
                        <p class="aboutus-underline-graphics"></p>
                        
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12" style="padding-top:50px;">
                    <img src ="images/LINKS-09.png" class="img-fluid" data-aos="fade-up">
                </div>
            </div> -->
            <!-- <div class="row" data-aos="fade-up">
                <div id="NMR-hospitality" class="anchor"></div>
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                    <img src ="images/The Jareed Hotel Website-32.png" class="img-fluid" data-aos="fade-up">
                </div>
                <div class="content col-lg-7 col-md-7 col-sm-12 col-xs-12" style="padding-left:50px;">
                    <div class="title" style="padding-top:50px;" data-aos="fade-up"><h2>NMR<br>HOSPITALITY</h2></div>
                    <div class="main-text" data-aos="fade-up">
                        <p>NMR Hospitality is a Saudi luxury hotel and resort
                    brand on a mission to transform the region’s
                    hospitality industry with distinctive concepts and
                    elevated, unforgettable experiences</p>
                        <br>
                    </div>
                    
                    <div class="aboutus-underline-graphics"></div>
                    <div class="logo-about">
                        <img src="images/The Jareed Hotel Website-28-dark.png" alt="">
                    </div>
                    
                </div>
            </div> -->
            <!-- <div class="row" data-aos="fade-up">
                <div id="the-boulevard" class="anchor"></div>
                <div class="content col-lg-7 col-md-7 col-sm-12 col-xs-12">
                <div class="title" style="padding-top:50px;" data-aos="fade-up"><h2>THE <br>BOULEVARD</h2></div>
                    <div class="main-text" data-aos="fade-up">
                        <p>Jareed Hotel is situated in The Boulevard, Riyadh’s
                        premier outdoor luxury district. Merging social
                        spaces, dining, entertainment and the finest shopping
                        within a gorgeously designed landscape, The
                        Boulevard transports you to a world unlike your own.
                        With an unrivalled selection of brands, restaurants,
                        and recreation options, you’ll discover something new
                        with every visit.</p>
                        <br>
                        <p>Meet your friends for a picturesque stroll, indulge in
                        an exciting new dish, or peruse curated boutiques to
                        find your new favourite purchase - The Boulevard is
                        your ideal headquarters for your stay in Riyadh.</p>
                        <p class="aboutus-underline-graphics"></p>
                        <div class="logo-about">
                        <img src="images/The Jareed Hotel Website-29-dark.png" alt="">
                        </div>
                    </div>
                    
                </div>
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12" style="padding-top:50px;margin-bottom:35px;">
                    <div id="carouselExampleIndicators5" class="carousel slide carousel-fade" data-ride="carousel" data-interval="4000" data-pause="false">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators5" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators5" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators5" data-slide-to="2"></li>
                            <li data-target="#carouselExampleIndicators5" data-slide-to="3"></li>
                            <li data-target="#carouselExampleIndicators5" data-slide-to="4"></li>
                            <li data-target="#carouselExampleIndicators5" data-slide-to="5"></li>
                            <li data-target="#carouselExampleIndicators5" data-slide-to="6"></li>


                        </ol>
                        <div class="carousel-inner">
                            <div class="boulevard-carousel carousel-item active">
                                <img src="images/Boulevard 1.jpeg" class="img-fluid d-block w-100" alt="...">
                                                                
                            </div>
                            <div class="boulevard-carousel carousel-item">
                                <img src="images/Boulevard 2.jpeg" class="img-fluid d-block w-100" alt="...">
                            </div>
                            <div class="boulevard-carousel carousel-item">
                                <img src="images/Boulevard 3.jpeg" class="img-fluid d-block w-100" alt="...">
                            </div>
                            <div class="boulevard-carousel carousel-item">
                                <img src="images/Boulevard 4.jpeg" class="img-fluid d-block w-100" alt="...">
                            </div>
                            <div class="boulevard-carousel carousel-item">
                                <img src="images/Boulevard 5.jpeg" class="img-fluid d-block w-100" alt="...">
                            </div>
                            <div class="boulevard-carousel carousel-item">
                                <img src="images/Boulevard 6.jpeg" class="img-fluid d-block w-100" alt="...">
                            </div>
                            <div class="boulevard-carousel carousel-item">
                                <img src="images/Boulevard 7.jpeg" class="img-fluid d-block w-100" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div> -->
        </div>
    </section>
   <?php require 'footer-secondary.php';?>