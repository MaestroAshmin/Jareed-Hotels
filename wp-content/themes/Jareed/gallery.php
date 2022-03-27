<?php
/*
 * Template Name: Gallery
 * Template Post Type: post, page, product
 */
?>
<?php 
$gallery_page = pods('gallery_page');
    $params = array(
    'where' => 't.ID = "156"',
    'limit' => 1
    );
    
    $gallery_page->find($params);
    $gallery_image = $gallery_page->get_field('gallery_image');
?>
<?php require 'header.php';?>

    <!-- Gallery -->
    <section id="gallery">
    <div class="gallery container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 d-flex justify-content-center align-items-center" data-aos="fade-up">
                <div class="rooms-underline-before"></div>
                <div class="title">GALLERY</div>
                <div class="rooms-underline-after"></div>

            </div>    
        </div>

        <div class="gallery d-block justify-content-center align-items-center">
            <div id="gallery-carousel" class="carousel slide carousel-fade" data-ride="carousel">
                <ol class="carousel-indicators">
                    <?php 
                    $c=0;
                    $count = count($gallery_image);
                    while($c < $count){?>
                        <li data-target="#gallery-carousel" data-slide-to="<?php echo $c;?>" class="<?php echo ($c == 0) ? 'active': ''?>"></li>
                    <?php
                    $c++;    
                    }
                    ?>
                </ol>
                
                
                <div class="carousel-inner">
                    <?php 
                    $c = 0;
                    foreach($gallery_image as $gm_image){ 
                        $image = wp_get_attachment_image_src($gm_image['image'], $size = 'large');
                    ?>
                    <div class="carousel-item <?php echo ($c == 0)? 'active': '';?>  d-block justify-content-center align-items-center">
                        <img src="<?php echo $image[0]?>" class="" alt="...">
                    </div>
                    <?php
                    $c++;
                     } ?>
                    <!-- <div class="carousel-item active d-block justify-content-center align-items-center">
                        <img src="<?php echo get_template_directory_uri() ?>/images/banner.jpg" class="" alt="...">
                    </div>
                    <div class="carousel-item d-block justify-content-center align-items-center">
                        <img src="<?php echo get_template_directory_uri() ?>/images/banner2.png" class="" alt="...">
                    </div>
                    <div class="carousel-item d-block justify-content-center align-items-center">
                        <img src="<?php echo get_template_directory_uri() ?>/images/superior-room.png" class="" alt="...">
                    </div>
                    <div class="carousel-item d-block justify-content-center align-items-center">
                        <img src="<?php echo get_template_directory_uri() ?>/images/deluxe-room-image.png" class="" alt="...">
                    </div> -->
                    <!-- <a class="carousel-control-prev" href="#gallery-carousel" role="button" data-slide="prev">
                    <span class="car-icon" aria-hidden="true"><</span>
                    <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#gallery-carousel" role="button" data-slide="next">
                        <span class="car-icon" aria-hidden="true">></span>
                        <span class="sr-only">Next</span>
                    </a> -->
                </div>
                
                <div class="custom-thumbnail">
                    <div class="row">
                        <?php
                        $c=0;
                        foreach($gallery_image as $gm_image){ 
                        $image = wp_get_attachment_image_src($gm_image['image'], $size = 'large');
                        ?>
                        <div class="col">
                            <a data-target="#gallery-carousel" data-slide-to="<?php echo $c;?>" class="thumbnail <?php echo ($c==0) ? 'active':''?>">
                            <img src="<?php echo $image[0];?>" alt=""> 
                            </a>
                        </div>
                        <?php 
                        $c++;
                        } ?>
                        <!-- <div class="col">
                            <a data-target="#gallery-carousel" data-slide-to="0" class="thumbnail active">
                            <img src="<?php echo get_template_directory_uri() ?>/images/banner.jpg" alt=""> 
                            </a>
                        </div>
                        <div class="col">
                            <a data-target="#gallery-carousel" data-slide-to="1" class="thumbnail">
                            <img src="<?php echo get_template_directory_uri() ?>/images/banner2.png" alt="">
                            </a>
                        </div>
                        <div class="col">
                            <a data-target="#gallery-carousel" data-slide-to="2" class="thumbnail">
                            <img src="<?php echo get_template_directory_uri() ?>/images/superior-room.png" alt=""> 
                            </a>
                        </div>
                        <div class="col">
                            <a data-target="#gallery-carousel" data-slide-to="3" class="thumbnail">
                            <img src="<?php echo get_template_directory_uri() ?>/images/deluxe-room-image.png" alt="">
                            </a>
                        </div> -->
                    </div>
                </div>
                
            </div>
            <!-- <div id="secondary-slider" class="splide">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <img src="images/banner.jpg">
                        </li>
                        <li class="splide__slide">
                            <img src="images/banner2.png">
                        </li>
                    </ul>
                </div>
            </div> -->
            <!-- <div class="thumbnails js-thumbnails">
                <ul class="thumbnails__list">
                    <li class="thumbnails__item" role="button" tabindex="0">
                        <img src=images/banner.jpg alt="Thumbnail 01">
                    </li>
                    <li class="thumbnails__item" role="button" tabindex="0">
                        <img src=images/banner2.png alt="Thumbnail 02">
                    </li>
                </ul>
            </div> -->
            
        </div>
    </div>
    
    </section>
    <?php require 'footer-secondary.php';?>