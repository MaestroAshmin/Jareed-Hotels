
<?php 
    $site_settings = pods('site_settings');
    $params = array(
    'where' => 't.ID = "136"',
    'limit' => 1
    );
    
    $site_settings->find($params);
    $logo = $site_settings->get_field('logo');
    $site_logo = $logo[0]['guid'];
    $favicon = $site_settings->get_field('favicon');
    $favicon_logo = $favicon[0]['guid'];
    $uri = $_SERVER['REQUEST_URI'];
    $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";  
    $url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    $site_url = site_url().'/';
    
    if($site_url == $url){
        $page_url = $url.'home-ar';
    }
    else{
        $url = substr_replace($url ,"", -1);
        $page_url = $url.'-ar';
        $link_array = explode('/',$url);
        $page = end($link_array);
        switch($page){
            case "about-us":
                $check = 1;
                break;
            case "rooms-suites":
                $check = 2;
                break;
            case "packages":
                $check = 3;
                break;
            case "restaurants":
                $check = 4;
                break;
            case "spa-wellness":
                $check = 5;
                break;
            case "gallery":
                $check = 6;
                break;
            case "standard-room":
                $check = 2;
                break;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jareed Hotel</title>
    <!-- Style -->
    <link rel="shortcut icon" type="image/jpg" href="<?php echo $favicon_logo;?>"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/style.css" type="text/css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/aos-master/dist/aos.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/jareed-fonts\jareed-font-regular\stylesheet.css" type="text/css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/jareed-fonts\jareed-font-medium\stylesheet.css" type="text/css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/jareed-fonts\Ar\arabic-font.css" type="text/css">
    <link href="https://vjs.zencdn.net/7.11.4/video-js.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/timepicker/jquery.timepicker.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/datepicker-master/dist/datepicker.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/pagescroll/pagescroll.css" />


        <style>
        .carousel-indicators li {
            width: 0;
            height: 0;
            border: 10px solid transparent;
            border-bottom-color: white;
            position: relative;
            top: -10px;
        }
        .carousel-indicators li:after {
            content: '';
            position: absolute;
            left: -10px;
            top: 10px;
            width: 0;
            height: 0;
            border: 10px solid transparent;
            border-top-color: white;
        }
        .banner .carousel-indicators li,
        .restaurant .carousel-indicators li,
        .meetings .carousel-indicators li {
            width: 0; 
            height: 0;
            border: 10px solid transparent;
            border-bottom-color: #c7b283;
            position: relative;
            top: -10px;
        }
        .banner .carousel-indicators li:after,
        .restaurant .carousel-indicators li:after,
        .meetings .carousel-indicators li:after {
            content: '';
            position: absolute;
            left: -10px;
            top: 10px;
            width: 0;
            height: 0;
            border: 10px solid transparent;
            border-top-color: #c7b283;
        }
        .morini-banner ol{
            background-color: #4b555c;
            margin-block-start: 0em;
            margin-block-end: 0em;
            margin-inline-start: 0px;
            margin-inline-end: 0px;
            padding-inline-start: 0px;
        }
        .morini-banner .carousel-indicators{
            margin-right:0%;;
            margin-left:0%;
        }
        iframe{
            border:1px solid #c7b283 !important;
            border-radius:0px !important;
            float:right;
            height:300px;
            width:400px;
        }
        .footer-secondary{
            background-color: #c7b283;
            font-family: 'Florentia';
        }
        .footer-secondary .footer-links{
            padding-top:75px;
            padding-left: 5% !important;
            padding-right: 5% !important;
            width:auto;
            font-size:14px;
        }
        .footer-secondary .footer-copyright{
            height:100px;
            width:100%;
            background-color: #4b555c;
            color:white;
        }
        .footer-secondary .links a{
            color:#4B545C;
        }
        .footer-secondary .links a:hover{
            color:#f1f1f2;
            text-decoration: none;
        }
        .footer-secondary .footer-copyright a{
            color: white;
        }
        .footer-secondary .copyright-text{
            padding-top:40px;
            padding-right:40px;
            float: right;
        }
        .footer-secondary .footer-image{
            float: left;
            margin-left: 50px;
            height: 90px;
            width: 50px;
        }
        .footer-secondary .footer-underline{
            border-bottom: 1px solid #4b555c;
            padding-left:75px;
            width:100%;
            margin-top: 40px;
            margin-bottom: 60px;
        }
        .footer-secondary .contact {
            color: #4B545C;
        }
        .footer-secondary iframe{
            border:none;
            border-radius:0px !important;
            float:right;
            height:300px ;
            width:400px;
        }
        .aboutus-content .carousel-indicators li {
            width: 0; 
            height: 0;
            border: 10px solid transparent;
            border-bottom-color: #c7b283;
            position: relative;
            top: -10px;
        }
        .aboutus-content .carousel-indicators li:after {
            content: '';
            position: absolute;
            left: -10px;
            top: 10px;
            width: 0;
            height: 0;
            border: 10px solid transparent;
            border-top-color: #c7b283;
        }
        .carousel-indicators1 {
            position: static;
        }
        .carousel-indicators1 li {
            width: 300px;
            height: 100%;
            opacity: 0.8;
        }
        .splide__slide img {
            width : 100%;
            height: auto;
        }
        #secondary-slider{
            margin-top:50px;
        }
        .splide__list{
            width:25%;
        }
    </style>
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-custom fixed-top" style="display:none;">
            <div class="logo-container d-flex justify-content-center align-items-center">
                <a class="logo" href="<?php echo site_url();?>">
                    <img src="<?php echo $site_logo;?>" data-aos="zoom-in" data-aos-duration="5000">
                </a>
            </div>
            <div class="booking-nav1">
                    <div class="nav justify-content-end">
                        <button type="button" class="btn booknow-button navbar-elements" onclick="location.href = '<?php echo site_url();?>/booking';">BOOK NOW</button>
                        <button type="button" class="btn member-button navbar-elements">CONTACT US</button>
                        <div class="change-btn">
                            <button type="button" class="btn language-button navbar-elements"  style="width:90px; height:38px;">
                                <span class="arabic" >
                                    <a href="<?php echo $page_url;?>" style="color:#4b555c !important;font-weight: 1000 !important; ">
                                    عـربـي
                                    </a>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            <button class="navbar-toggler navbar-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-contain">   
                <div class="booking-nav">
                    <div class="nav justify-content-end">
                        <button type="button" class="btn booknow-button navbar-elements" onclick="location.href = '<?php echo site_url();?>/booking';">BOOK NOW</button>
                        <button type="button" class="btn member-button navbar-elements">
                            <a href="<?php echo site_url();?>/contact-us" style="color:#4b555c !important;">
                            CONTACT US
                                </a>
                            
                        </button>
                        <button type="button" class="btn language-button navbar-elements" style="width:90px; height:38px">
                            <span class="arabic">
                                <a href="<?php echo $page_url;?>" style="color:#4b555c !important;font-weight: 1000 !important;">
                                عـربـي
                                </a>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="navbar-container container-fluid" style="background-color:transparent;">
                    <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
                        <div class="navbar-nav nav align-items-center">
                        
                            <a class="nav-item nav-link <?php echo ($check == 1) ? 'current-page': ''?>" href="<?php echo site_url();?>/about-us" aria-haspopup="true" aria-expanded="false">
                                About us
                            </a>
                            <a class="nav-item nav-link <?php echo ($check == 2) ? 'current-page': ''?>" href="<?php echo site_url();?>/rooms-suites" aria-haspopup="true" aria-expanded="false">
                                Room & Suites
                            </a>
                            <a class="nav-item nav-link <?php echo ($check == 3) ? 'current-page': ''?>" href="<?php echo site_url();?>/packages" aria-haspopup="true" aria-expanded="false">
                                Packages
                            </a>
                            <a class="nav-item nav-item nav-link <?php echo ($check == 4) ? 'current-page': ''?>" href="<?php echo site_url();?>/restaurants" aria-haspopup="true" aria-expanded="false">
                                Restaurants
                            </a>
                            <a class="nav-item nav-link <?php echo ($check == 5) ? 'current-page': ''?>" href="<?php echo site_url();?>/spa-wellness" aria-haspopup="true" aria-expanded="false">
                                Spa & Wellness
                            </a>
                            
                            <a class="nav-item nav-link" href="<?php echo site_url();?>/#meetings" aria-haspopup="true" aria-expanded="false">
                                Meetings & Gatherings
                            </a>
                            <a class="nav-item nav-link" href="<?php echo site_url();?>/#experiences" aria-haspopup="true" aria-expanded="false">
                                Experiences
                            </a>
                            <a class="nav-item nav-link <?php echo ($check == 6) ? 'current-page': ''?>" href="<?php echo site_url();?>/gallery" aria-haspopup="true" aria-expanded="false">
                                Gallery
                            </a>
                            <a class="nav-item nav-link mobile-menu" href="<?php echo site_url();?>/booking" aria-haspopup="true" aria-expanded="false">
                                Book Now
                            </a>
                            <a class="nav-item nav-link mobile-menu" href="<?php echo site_url();?>/contact-us aria-haspopup="true" aria-expanded="false">
                                Contact Us
                            </a>
                            <a class="nav-item nav-link mobile-menu" href="<?php echo $page_url;?>" aria-haspopup="true" aria-expanded="false">
                                عـربـي
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>