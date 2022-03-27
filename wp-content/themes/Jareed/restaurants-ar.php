<?php
/*
 * Template Name: Restaurants Arabic
 * Template Post Type: post, page, product
 */
?>
<?php
    $restaurants = pods('restaurant');
    $params = array(
        'where' => 't.ID ="283"',
        'limit' => 1,
    );
    $restaurants->find($params);
    $restaurants_details = $restaurants->get_field('restaurants');
    
    ?>
<?php require 'header-ar-secondary.php';?>
    <section id="spa-wellness-page" style="padding-top:0px;margin-top:135px;">
        <div class="spa-wellness container-fluid">
            <!-- Jimam Spa -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 d-flex justify-content-center align-items-center" data-aos="fade-up">
                    <div class="rooms-underline-before"></div>
                    <div class="title d-flex justify-content-center align-items-center" style="width:25%;letter-spacing:normal;">المطاعم</div>
                    <div class="rooms-underline-after"></div>
                </div>
                    
            </div>
            <?php
            $i=0;
            foreach($restaurants_details as $restaurant) {
                
                ?>
                <div class="spa-wellness arena container-fluid arabic-restaurants" style="padding-bottom:0px;">
                    <div class="row restaurant-detail">
                        <div class="content col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="spa-image">
                                <div id="carousel<?php echo $i;?>" data-interval="6000" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <?php 
                                        $j=0;
                                        while($j <= (count($restaurants_details))){ ?>
                                        <li data-target="#carousel<?php echo $i;?>" data-slide-to="<?php echo $j;?>" class="<?php echo ($j==0)? 'active':'';?>"></li>

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
                            <div class="title" style="text-transform:uppercase;letter-spacing:normal;"><h2><?php echo $restaurant['restaurant_title'];?></h2></div>
                            <div class="main-text">
                                <?php echo $restaurant['description'];?>
                            </div>
                            <div class="aboutus-underline">
                            </div>
                            <div class="readmore" data-aos="fade-up">
                                    <button type="button" class="btn book-btn" onclick="location.href = '';">اطلع على القائمة</button>
                                    <button type="button" class="btn book-btn" onclick="location.href = '';" style="margin-right:30px;">احجز الآن</button>
                                </div>
                        </div>
        
                    </div>
                </div>
            <?php 
            $i++;
            } ?>
            <!-- <div class="spa-wellness arena container-fluid" style="padding-bottom:0px;">
                <div class="row restaurant-detail">
                    <div class="content col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="spa-image">
                            <div id="jimamCarousel" data-interval="6000" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#jimamCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#jimamCarousel" data-slide-to="1"></li>
                                    <li data-target="#jimamCarousel" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="<?php echo get_template_directory_uri() ?>/images/TLR 1.jpg" class="img-fluid" alt="" data-aos="fade-up">  
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?php echo get_template_directory_uri() ?>/images/TLR 2.jpg" class="img-fluid" alt="" data-aos="fade-up">
                                    
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?php echo get_template_directory_uri() ?>/images/TLR 3.jpg" class="img-fluid" alt="" data-aos="fade-up">
                                    </div>
                                </div>
                            </div>
                                    
                        </div>
                    </div>
                </div>
                <div class="package-page row" style="margin-right:5% !important; margin-left:5% !important; margin-top:40px !important;">
                    <div class="content2 col-lg-9 col-md-9 col-sm-12 col-xs-12" data-aos="fade-up">
                        <div class="title" style="letter-spacing:normal;"><h2>ذا ليڤنج رووم</h2></div>
                        <div class="main-text">
                            <p>مرحبًا بك في وجهتك الجديدة.</p>
                            <p>
                            اعثر على زاويةٍ مريحة أثناء قراءة كتابك، أو احتساء مشروبك المفضل من بار الكوكتيل. والاستمتاع بقهوتك مع وجبةٍ
                            خفيفة في أي وقت خلال اليوم، أو إكمال أعمالك في مساحة العمل المشتركة. حيث أن ذا ليڤنج رووم هي المكان
                            الملائم لإنجازِ جميع مهامِك وعمل كلّ ما يتوافق مع مزاجك.</p>
                            <p>
                                إّنها قلب جريد ولا ينقصها إلا حضورك!
                            </p>
                        </div>
                        <div class="aboutus-underline">
                        </div>
                        <div class="readmore" data-aos="fade-up">
                                <button type="button" class="btn book-btn" onclick="location.href = '';">اطلع على القائمة</button>
                                <button type="button" class="btn book-btn" onclick="location.href = '';" style="margin-right:30px;">احجز الآن</button>
                            </div>
                    </div>
    
                </div>
            </div>        -->
            <!-- <div class="spa-wellness arena container-fluid">
            <div class="row restaurant-detail">
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
                                        <img src="<?php echo get_template_directory_uri() ?>/images/MORINI 1.png" class="img-fluid" alt="" data-aos="fade-up">  
                                </div>
                                <div class="carousel-item">
                                        <img src="<?php echo get_template_directory_uri() ?>/images/MORINI 2.jpg" class="img-fluid" alt="" data-aos="fade-up">  
                                </div>
                                <div class="carousel-item">
                                        <img src="<?php echo get_template_directory_uri() ?>/images/MORINI 3.jpg" class="img-fluid" alt="" data-aos="fade-up">  
                                </div>
                            </div>
                        </div>
                         
                    </div>
                </div>
            </div>
            <div class="package-page row" style="margin-right:5% !important; margin-left:5% !important; margin-top:40px !important;">
                <div class="content2 col-lg-9 col-md-9 col-sm-12 col-xs-12" data-aos="fade-up">
                    <div class="title" style="letter-spacing:normal;"><h2>موريني</h2></div>
                        <div class="main-text">
                            <p>
                                تخيّل النكهات الإيطالية مدموجةً بلمسة نيويورك لتكتشف التجربة الفريدة التي يقدمها لك موريني. حيث سيأخذك
طعم الباستا الفاخرة، واللحوم المشوية، والمأكولات البحرية في رحلةٍ شهيّة إلى أرجاء إيطاليا.
                            </p>
                        </div>
                        <div class="aboutus-underline">
                        </div>
                        <div class="readmore" data-aos="fade-up">
                            <button type="button" class="btn book-btn" onclick="location.href = '';">اطلع على القائمة</button>
                            <button type="button" class="btn book-btn" onclick="location.href = '';" style="margin-right:30px;">احجز الآن</button>
                        </div>
                    </div>
                    
            </div>        
        </div> -->
            
        </div>
       
    </section>
    <?php require 'footer-secondary-ar.php';?>