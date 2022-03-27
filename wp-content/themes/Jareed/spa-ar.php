<?php
/*
 * Template Name: Spa & Wellness Arabic
 * Template Post Type: post, page, product
 */
?>
<?php
    $spa_and_wellness = pods('spa_and_wellness');
    $params = array(
    'where' => 't.ID = "521"',
    'limit' => 1
    );
    $spa_and_wellness->find($params);
    $spa_and_wellness_facilities = $spa_and_wellness->get_field('spa_and_wellness_facilities');
    
    ?>
<?php require 'header-ar-secondary.php';?>
 <?php
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
    // $jimam_treatments_and_packages = $spa_wellness->get_field('jimam_treatments_and_packages');
    // $jimam_logo = $spa_wellness->get_field('jimam_logo');
    // $jimam_logo_image = $jimam_logo[0]['guid'];
    // $arena_image = $spa_wellness->get_field('arena_image');
    // $arena_fc_image = $arena_image[0]['guid'];
    // $arena_title = $spa_wellness->get_field('arena_title');
    // $arena_description = $spa_wellness->get_field('arena_description');
    // $arena_membership_and_packages = $spa_wellness->get_field('arena_membership_and_packages');
    // $arena_logo = $spa_wellness->get_field('arena_logo');
    // $arena_logo_image = $arena_logo[0]['guid'];
    // $bs_image = $spa_wellness->get_field('barbershop_image');
    // $barbershop_image = $bs_image[0]['guid'];
    // $barbershop_title = $spa_wellness->get_field('barbershop_title');
    // $barbershop_description = $spa_wellness->get_field('barbershop_description');
    // $barbershop_services = $spa_wellness->get_field('barbershop_services');
    // $barbershop_logo = $spa_wellness->get_field('barbershop_logo');
    // $barbershop_logo_image = $barbershop_logo[0]['guid'];
    
    ?>
    <section id="spa-wellness-page" style="padding-top:0px;margin-top:135px;">
        <div class="spa-wellness container-fluid">
            <!-- Jimam Spa -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 d-flex justify-content-center align-items-center" data-aos="fade-up">
                    <div class="rooms-underline-before"></div>
                    <div class="small-title">استرخِ. تمرّن. اعتنِ بنفسك</div>
                    <div class="rooms-underline-after"></div>
                </div>
                    <div class="title col-lg-12 col-md-12 col-sm-12 col-xs-12 d-flex justify-content-center align-items-center" style="letter-spacing:normal;" data-aos="fade-up">السبا ووسائل العناية بالصحة</div>
            </div>
            <!-- New spa repeater -->
            <?php 
            $j=0;
            foreach($spa_and_wellness_facilities as $facility) { 
                $facility_logo = wp_get_attachment_image_src($facility['logo'], $size='large');
                $facility_title_lower = strtolower($facility['title']);
                $facility_id = str_replace(" ", "", $facility_title_lower);
                $slug = str_replace(" ", "-", $facility_title_lower);
                // print_r(count($facility['slider_images']));
                // exit;
                ?>
                <div class="spa-wellness arena container-fluid arabic-spa-wellness" style="padding-bottom:0px;">
                    <div id="jimam-spa" class="small-anchor" style="display: block;height: 150px; margin-top: -150px; visibility: hidden;"></div>
                    <div class="row">
                        
                        <div class="content col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="spa-image">
                                <div id="carousel<?php echo $j;?>" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                        <?php
                                        $i=0;
                                        $count = count($facility['slider_images']);
                                        for($i; $i < $count; $i++){ ?>
                                            <li data-target="#carousel<?php echo $j;?>" data-slide-to="<?php echo $i;?>" class="<?php echo $i == 0 ? 'active':'';?>"></li>
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
                                    </div>
                                </div>
                                        
                            </div>
                        </div>
                    </div>
                    <div class="package-page row" style="margin-right:5% !important; margin-left:5% !important; margin-top:40px;">
                        <div class="content2 col-lg-9 col-md-9 col-sm-12 col-xs-12" data-aos="fade-up">
                            <div class="title" style="text-transform:uppercase;letter-spacing:normal;"><h2><?php echo $facility['title'];?></h2></div>
                            <div class="main-text">
                                <?php echo $facility['description'];?>
                            </div>
                            <div class="aboutus-underline">
                            </div>
                            <div class="readmore" data-aos="fade-up">
                                <button type="button" class="btn book-btn" onclick="location.href = '';">اطلع على القائمة</button>
                                <button type="button" class="btn book-btn" onclick="location.href = '';" style="margin-left:30px;">احجز الآن</button>
                            </div>
                        </div>
                        <div class="spa-wellness-logo-container col-lg-3 col-md-12 col-sm-12 col-xs-12">
                            <div class="aboutus-logo" data-aos="fade-up">
                                <img src="<?php echo $facility_logo[0];?>" height="100px" class="" alt="">
                            </div>
                        </div>
                    </div> 
                </div>
            <?php } ?>
            <!-- march 25 -->
            <!-- <div class="spa-wellness arena container-fluid" style="padding-bottom:0px;">
            <div id="jimam-spa" class="small-anchor"></div>
                <div class="row">
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
                                    <img src="<?php echo get_template_directory_uri() ?>/images/SPA 1.jpg" class="img-fluid" alt="" data-aos="fade-up">  
                                    </div>
                                    <div class="carousel-item">
                                    <img src="<?php echo get_template_directory_uri() ?>/images/SPA 2.jpg" class="img-fluid" alt="" data-aos="fade-up">  
                                    </div>
                                    <div class="carousel-item">
                                    <img src="<?php echo get_template_directory_uri() ?>/images/SPA 3.jpg" class="img-fluid" alt="" data-aos="fade-up">  
                                    </div>
                                </div>
                            </div>
                                    
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-right:5% !important; margin-left:5% !important; margin-top:40px !important;">
                    <div class="content2 col-lg-9 col-md-9 col-sm-12 col-xs-12" data-aos="fade-up">
                        <div class="title" style="letter-spacing:normal;"><h2><?php echo $jimam_title;?></h2></div>
                        <div class="main-text">
                            <?php echo $jimam_description;?>
                        </div>
                        <div class="aboutus-underline">
                        </div>
                        <div class="readmore" data-aos="fade-up">
                            <button type="button" class="btn book-btn" onclick="location.href = '';">اطلع على القائمة</button>
                            <button type="button" class="btn book-btn" onclick="location.href = '';" style="margin-right:30px;">احجز الآن</button>
                        </div>
                    </div>
                    <div class="spa-wellness-logo-container col-lg-3 col-md-12 col-sm-12 col-xs-12">
                        <div class="aboutus-logo" data-aos="fade-up">
                            <img src="<?php echo $jimam_logo_image;?>" height="100px" class="" alt="">
                        </div>
                    </div>
                </div>
            </div>      -->
           
            
        </div>
        <!-- <div class="treatments container-fluid" id="spa-treatments-and-packages">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 d-flex justify-content-center align-items-center" data-aos="fade-up">
                    <div class="rooms-underline-before"></div>
                    <div class="title">TREATMENTS & PACKAGES</div>
                    <div class="rooms-underline-after"></div>
                </div>    
            </div>
            <?php foreach($jimam_treatments_and_packages as $jimam_treatment){
                $treatment_image =  wp_get_attachment_image_src($jimam_treatment['treatment_image'], $size = 'large');
                ?>
                <div class="row treatments-container">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="border-right:1px solid #c7b283; padding-right:0px; padding-left:0px;">
                        <img src="<?php echo $treatment_image[0];?>" alt="" width="100%" height="auto">
                    </div>   
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding-right:0px; padding-left:0px;">
                        <div class="row" style="height:80%;border-bottom:1px solid #c7b283; padding: 50px 50px;">
                            <div class="spa-package-title">
                                <h4><?php echo $jimam_treatment['treatment_title'];?></h4>
                            </div>
                            <p>
                                <?php echo $jimam_treatment['treatments_description'];?>
                            </p>
                            
                        </div>
                        <div class="row" style="height:20%;">
                            <div class="col d-flex justify-content-center align-items-center" style="border-right:1px solid #c7b283; width:50%;"><h4><?php echo $jimam_treatment['duration'];?></h4></div>
                            <div class="col d-flex justify-content-center align-items-center" style="width:50%"><h4><?php echo $jimam_treatment['price'];?></h4></div>
                        </div>
                    </div> 
                </div>
            <?php } ?>
        </div>
        <div class="treatments-contact-form container-fluid">
            <div class="contact-container">
                <div class="contact-form-title" id="book">
                    <h2>PLEASE ENTER YOUR INFORMATION, WE WILL CONTACT YOU SHORTLY.</h2>
                </div>
                <div class="contact-form" >
                    <form autocomplete="off">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding-top:50px">
                                <label for="time">PREFERRED TIME</label><br>
                                <input type="text" class="form-controls timepicker" name="time" id="">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding-top:50px">
                                <label for="date">DATE</label><br>
                                <input type="text" data-toggle="datepicker" class="form-controls" name="date" id="">
                            </div>
                        </div>
                         <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"  style="padding-top:50px" >
                                <label for="Contact No">CONTACT NO</label><br>
                                <input type="tel" class="form-controls"name="phone_no" id="" value="+966">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"  style="padding-top:50px" >
                                <label for="Email">EMAIL</label><br>
                                <input type="email" class="form-controls" name="email" id="">
                            </div>
                        </div>
                        <div class="aboutus-underline" data-aos="fade-up" style="margin-top:30px;"></div>
                        <button class="contact-btn">BOOK NOW</button>
                    </form>
                </div>
            </div>
        </div> -->
            <!-- march 25 -->

        <!-- <div class="spa-wellness arena container-fluid">
            <div id="arena-fitness-center" class="small-anchor"></div>
            <div class="row">
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
                                       <img src="/jareed/images/arena-fitness-center.jpg" class="img-fluid" alt="" data-aos="fade-up">   
                                </div>
                                <div class="carousel-item">
                                       <img src="/jareed/images/arena-fitness-center.jpg" class="img-fluid" alt="" data-aos="fade-up">   
                                </div>
                                <div class="carousel-item">
                                       <img src="/jareed/images/arena-fitness-center.jpg" class="img-fluid" alt="" data-aos="fade-up">   
                                </div>
                            </div>
                        </div>
                         
                    </div>
                </div>
            </div>
            <div class="row" style="margin-right:5% !important; margin-left:5% !important; margin-top:40px !important;">
                <div class="content2 col-lg-9 col-md-9 col-sm-12 col-xs-12" data-aos="fade-up">
                    <div class="title" style="letter-spacing:normal;"><h2><?php echo $arena_title;?></h2></div>
                        <div class="main-text">
                            <p>
                                <?php echo $arena_description;?>
                            </p>
                        </div>
                        <div class="aboutus-underline">
                        </div>
                        <div class="readmore" data-aos="fade-up">
                            <button type="button" class="btn book-btn" onclick="location.href = '';">اطلع على القائمة</button>
                            <button type="button" class="btn book-btn" onclick="location.href = '';" style="margin-right:30px;">احجز الآن</button>
                        </div>
                    </div>
                    <div class="spa-wellness-logo-container col-lg-3 col-md-12 col-sm-12 col-xs-12">
                    <div class="aboutus-logo">
                        <img src="<?php echo $arena_logo_image;?>" class="" height="100px" alt="" data-aos="fade-up">
                    </div>
                </div>
            </div>        
        </div> -->
        <!-- <div class="treatments container-fluid" id="arena-fitness-center-memberships-and-packages">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 d-flex justify-content-center align-items-center" data-aos="fade-up">
                    <div class="rooms-underline-before"></div>
                    <div class="title">MEMBERSHIP & PACKAGES</div>
                    <div class="rooms-underline-after"></div>
                </div>    
            </div>
            <div class="row treatments-container">
            <?php
            $j=1;
            foreach($arena_membership_and_packages as $single_arena_package){ ?>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="border-right:1px solid #c7b283; padding-right:0px; padding-left:0px;">
                    <div class="row d-block" style="height:80%;border-bottom:1px solid #c7b283; padding: 50px 50px;">
                        <div class="spa-package-title w-100">
                            <h4><?php echo $single_arena_package['membership_title'];?></h4>
                        </div>
                        <p>
                            <?php echo $single_arena_package['membership_description'];?>
                        </p>
                    </div>
                    <div class="row align-items-center" style="height:20%; padding-left: 50px;border-bottom:1px solid #c7b283;">
                        <h4><?php echo $single_arena_package['price'];?></h4>
                    </div>
                </div>
            <?php
                if($j%2 == 0 && $j!=count($arena_membership_and_packages)){ ?>
                    </div>
                    <div class="row treatments-container">
            <?php 
                }
                $j++;
            } ?>
            </div>
            <div class="row treatments-container">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="border-right:1px solid #c7b283; padding-right:0px; padding-left:0px;">
                    <div class="row d-block" style="height:80%;border-bottom:1px solid #c7b283; padding: 50px 50px;">
                        <div class="spa-package-title w-100">
                            <h4>SILVER MEMBERSHIP</h4>
                        </div>
                        <p>01 Month Gym Access</p>
                        <p>02 Personal Training Sessions</p>
                        <p>05 Swimming Academy Program</p>
                        <p>FREE Parking</p>
                        <p>Club Monthly Member Challenges</p>   
                    </div>
                    <div class="row align-items-center" style="height:20%; padding-left: 50px;border-bottom:1px solid #c7b283;">
                        <h4>700 SR</h4>
                    </div>
                </div>   
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding-right:0px; padding-left:0px;">
                    <div class="row d-block" style="height:80%;border-bottom:1px solid #c7b283; padding: 50px 50px;">
                        <div class="spa-package-title w-100">
                            <h4>GOLD MEMBERSHIP</h4>
                        </div>
                        <p>03 Month Gym Access</p>
                        <p>05 Personal Training Sessions</p>
                        <p>10 Swimming Academy Program</p>
                        <p>FREE Parking</p>
                        <p>Club Monthly Member Challenges</p>   
                    </div>
                    <div class="row align-items-center" style="height:20%; padding-left: 50px; ">
                        <h4>1,600 SR</h4>
                    </div>
                </div> 
            </div>
            <div class="row treatments-container">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="border-right:1px solid #c7b283; padding-right:0px; padding-left:0px;">
                    <div class="row d-block" style="height:80%;border-bottom:1px solid #c7b283; padding: 50px 50px;">
                        <div class="spa-package-title w-100">
                            <h4>PLATINUM MEMBERSHIP</h4>
                        </div>
                        <p>06 Month Gym Access</p>
                        <p>10 Personal Training Sessions</p>
                        <p>20 Swimming Academy Program</p>
                        <p>FREE Parking</p>
                        <p>Club Monthly Member Challenges</p>   
                    </div>
                    <div class="row align-items-center" style="height:20%; padding-left: 50px; border-bottom:1px solid #c7b283;">
                        <h4>3,000 SR</h4>
                    </div>
                </div>   
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding-right:0px; padding-left:0px;">
                    <div class="row d-block" style="height:80%;border-bottom:1px solid #c7b283; padding: 50px 50px;">
                        <div class="spa-package-title w-100">
                            <h4>DIAMOND MEMBERSHIP</h4>
                        </div>
                        <p>01 Year Gym Access</p>
                        <p>20 Personal Training Sessions</p>
                        <p>40 Swimming Academy Program</p>
                        <p>FREE Parking</p>
                        <p>Club Monthly Member Challenges</p>   
                    </div>
                    <div class="row align-items-center" style="height:20%; padding-left: 50px">
                        <h4>5,500 SR</h4>
                    </div>
                </div> 
            </div>
                
        </div> -->
            <!-- march 25 -->

        <!-- <div class="spa-wellness barber container-fluid" id="barbershop-services">
            <div id="barbershop" class="small-anchor"></div>
            <div class="row">
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
                                                          <img src="<?php echo get_template_directory_uri() ?>/images/BARBER 1.jpg" class="img-fluid" alt="" data-aos="fade-up">     
                                </div>
                                <div class="carousel-item">
                                                          <img src="<?php echo get_template_directory_uri() ?>/images/BARBER 2.jpg" class="img-fluid" alt="" data-aos="fade-up">    
                                </div>
                                <div class="carousel-item">
                                                          <img src="<?php echo $barbershop_image;?>" class="img-fluid" alt="" data-aos="fade-up">   
                                </div>
                            </div>
                        </div>
         
                                  
                    </div>
                </div>
            </div>
            <div class="row" style="margin-right:5% !important; margin-left:5% !important; margin-top:40px !important;">
                <div class="content2 col-lg-9 col-md-9 col-sm-12 col-xs-12" data-aos="fade-up">
                    <div class="title" style="letter-spacing:normal;"><h2><?php echo $barbershop_title;?></h2></div>
                        <div class="main-text">
                            <p><?php echo $barbershop_description;?></p>
                        </div>
                        <div class="aboutus-underline">
                        </div>
                        <div class="readmore" data-aos="fade-up">
                            <button type="button" class="btn book-btn" onclick="location.href = '';">اطلع على القائمة</button>
                            <button type="button" class="btn book-btn" onclick="location.href = '';" style="margin-right:30px;">احجز الآن</button>
                        </div>
                    </div>
                    <div class="spa-wellness-logo-container col-lg-3 col-md-12 col-sm-12 col-xs-12">
                    <div class="aboutus-logo" data-aos="fade-up">
                        <img src="<?php echo $barbershop_logo_image;?>" class="" height="100px" alt="">
                    </div>
            </div>    
        </div> -->
    </div>
        <!-- <div class="treatments container-fluid"  id="">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 d-flex justify-content-center align-items-center" data-aos="fade-up">
                    <div class="rooms-underline-before"></div>
                    <div class="title">SERVICES</div>
                    <div class="rooms-underline-after"></div>
                </div>    
            </div>
             <table>
                <?php foreach($barbershop_services as $barbershop_service){ ?>
                    <tr>
                        <td class="package-name"><?php echo $barbershop_service['services_title']?></td>
                        <td class="package-price"><?php echo $barbershop_service['price']?></td>
                    </tr>
                <?php }
                ?>
            </table>   
        </div> -->
    </section>
    <?php require 'footer-secondary-ar.php';?>