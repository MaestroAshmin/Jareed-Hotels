<?php
/*
 * Template Name: Packages
 * Template Post Type: post, page, product
 */
?>

 <?php
    $packages_pods = pods('packages');
    $params = array(
    'where' => 't.ID = "248"',
    'limit' => 1
    );
    $packages_pods->find($params);
    $packages = $packages_pods->get_field('packages');
    // print_r($packages);
    
    ?>
    <?php require 'header.php';?>
    <section id="spa-wellness-page"  style="padding-top:0px;margin-top:135px;padding-bottom:50px;background-color:#f1f1f2;">
        <div class="spa-wellness arena container-fluid" style="padding-bottom:0px;">
            <!-- Jimam Spa -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 d-flex justify-content-center align-items-center" data-aos="fade-up">
                    <div class="rooms-underline-before"></div>
                    <div class="title d-flex justify-content-center align-items-center" style="width:25%;">PACKAGES</div>
                    <div class="rooms-underline-after"></div>
                </div>
                    
            </div>
            <?php foreach($packages as $package){
            $package_image = wp_get_attachment_image_src($package['image'],$size="large");
            $lower_case_title = str_replace("<br>"," ",strtolower($package['packages_title']));   
            $id_slug = str_replace(" ","-",$lower_case_title);   
            $upper_case_title = strtoupper($lower_case_title);
            ?>
            <div class="spa-wellness arena container-fluid" style="padding-bottom:0px;">
                <div id="<?php echo $id_slug;?>" class="small-anchor"></div>
                <div class="row">
                    
                    <div class="content col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="spa-image">
                            <div id="jimamCarousel" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                    <img src="<?php echo $package_image[0];?>" class="img-fluid" alt="" data-aos="fade-up">  
                                    </div>
                                </div>
                            </div>
                                    
                        </div>
                    </div>
                </div>
                <div class="package-page row" style="margin-right:5% !important; margin-left:5% !important; margin-top:40px;">
                    <div class="content2 col-lg-9 col-md-9 col-sm-12 col-xs-12" data-aos="fade-up">
                        <div class="title"><h2><?php echo $upper_case_title;?></h2></div>
                        <div class="main-text">
                            <?php echo $package['description'];?>
                            <ul>
                                <?php foreach($package['points'] as $points){ ?>
                                <li><?php echo $points['points'];?></li>
                                <?php } ?>
                            </ul>
                        </div>
                        <div class="aboutus-underline">
                        </div>
                        <div class="readmore" data-aos="fade-up">
                            <button type="button" class="btn book-btn" onclick="location.href = '';">BOOK NOW</button>
                        </div>
                    </div>
    
                </div>
            </div>  
            <?php } ?>    
    </div>
    </section>
    <?php require 'footer-secondary.php';?>