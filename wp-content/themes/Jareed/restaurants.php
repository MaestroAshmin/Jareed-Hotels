<?php
/*
 * Template Name: Restaurants
 * Template Post Type: post, page, product
 */
?>
 <?php
    $restaurants = pods('restaurant');
    $params = array(
        'where' => 't.ID ="231"',
        'limit' => 1,
    );
    $restaurants->find($params);
    $restaurants_details = $restaurants->get_field('restaurants');
    
    ?>
<?php require 'header.php';?>

    <section id="spa-wellness-page" style="padding-top:0px;margin-top:135px;padding-bottom:50px;background-color:#f1f1f2;">
        <div class="spa-wellness container-fluid"  style="padding-bottom:0px !important;">
            <!-- Jimam Spa -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 d-flex justify-content-center align-items-center" data-aos="fade-up">
                    <div class="rooms-underline-before"></div>
                    <div class="title d-flex justify-content-center align-items-center" style="width:25%;">RESTAURANTS</div>
                    <div class="rooms-underline-after"></div>
                </div>
                    
            </div>
            <?php foreach($restaurants_details as $restaurant) { 
                $lower_case_title = strtolower($restaurant['restaurant_title']);   
                $id_slug = str_replace(" ","-",$lower_case_title);
                ?>
                <div class="spa-wellness arena container-fluid" style="padding-bottom:0px;">
                    <div class="row restaurant-detail">
                        <div class="content col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="spa-image">
                                <div id="<?php echo $id_slug;?>Carousel" data-interval="6000" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <?php 
                                        $j=0;
                                        while($j <= (count($restaurants_details))){ ?>
                                        <li data-target="#<?php echo $id_slug;?>Carousel" data-slide-to="<?php echo $j;?>" class="<?php echo ($j==0)? 'active':'';?>"></li>

                                        <?php
                                        $j++;
                                        }
                                        ?>
                                    </ol>
                                    <div class="carousel-inner">
                                        <?php 
                                        $j=0;
                                        foreach($restaurant['restaurant_slider_images'] as $restaurant_slider_image) { 
                                        $restaurant_image = wp_get_attachment_image_src($restaurant_slider_image['image'],$size="large");
                                        ?>
                                        <div class="carousel-item <?php echo $j==0 ? 'active': '';?>">
                                            <img src="<?php echo $restaurant_image[0];?>" class="img-fluid" alt="" data-aos="fade-up">  
                                        </div>
                                        <?php 
                                        $j++;
                                        } ?>
                                    </div>
                                </div>
                                        
                            </div>
                        </div>
                    </div>
                    <div class="package-page row" style="margin-right:5% !important; margin-left:5% !important; margin-top:40px;">
                        <div class="content2 col-lg-9 col-md-9 col-sm-12 col-xs-12" data-aos="fade-up">
                            <div class="title" style="text-transform:uppercase;"><h2><?php echo $restaurant['restaurant_title'];?></h2></div>
                            <div class="main-text">
                                <?php echo $restaurant['description'];?>
                            </div>
                            <div class="aboutus-underline">
                            </div>
                            <div class="readmore" data-aos="fade-up">
                                    <button type="button" class="btn book-btn" onclick="location.href = '';">VIEW MENU</button>
                                    <button type="button" class="btn book-btn" onclick="location.href = '';" style="margin-left:30px;">BOOK NOW</button>
                                </div>
                        </div>
        
                    </div>
                </div>
            <?php } ?>
    </section>
    <?php require 'footer-secondary.php';?>