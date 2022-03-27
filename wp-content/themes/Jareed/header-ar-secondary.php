
<?php 
    $site_settings = pods('site_settings');
    $params = array(
    'where' => 't.ID = "136"',
    'limit' => 1
    );
    
    $site_settings->find($params);
    $logo = $site_settings->get_field('arabic_logo');
    $site_logo = $logo[0]['guid'];
    $favicon = $site_settings->get_field('favicon');
    $favicon_logo = $favicon[0]['guid'];
    $uri = $_SERVER['REQUEST_URI'];
    $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";  
    $url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    
    $site = site_url().'/home-ar/';
    // echo $url;
    // echo $site;
    // exit;
    if($site == $url){
        $page_url = site_url();
    }
    else{
        $check_url = $url;
        $url = substr_replace($url ,"", -4);
        $page_url = $url;
        $check_url = substr_replace($check_url ,"", -1);
        $link_array = explode('/',$check_url);
        // print_r($link_array);
        $page = end($link_array);
        // exit;
        switch($page){
            case "about-us-ar":
                $check = 1;
                break;
            case "rooms-suites-ar":
                $check = 2;
                break;
            case "packages-ar":
                $check = 3;
                break;
            case "restaurants-ar":
                $check = 4;
                break;
            case "spa-wellness-ar":
                $check = 5;
                break;
            case "gallery-ar":
                $check = 6;
                break;
            case "standard-room-ar":
                $check = 2;
                break;
        }
    }
    
    // echo $page_url;
    // exit;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jareed Hotel Arabic</title>
    <!-- Style -->
    <link rel="shortcut icon" type="image/jpg" href="<?php echo $favicon_logo;?>"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/style-ar.css" type="text/css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/aos-master/dist/aos.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/jareed-fonts\jareed-font-regular\stylesheet.css" type="text/css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/jareed-fonts\jareed-font-medium\stylesheet.css" type="text/css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/jareed-fonts\Ar\arabic-font.css" type="text/css">
    <link href="https://vjs.zencdn.net/7.11.4/video-js.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/timepicker/jquery.timepicker.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/datepicker-master/dist/datepicker.min.css" />

        <style>
        * {
            direction: rtl;
        }
        body{
            text-align:right;
            
        }
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
            float:left;
            height:300px;
            width:400px;
        }
        .footer-secondary{
            background-color: #c7b283;
             font-family: "HelveticaLight";
        }
        .footer-secondary .footer-links{
            padding-top:75px;
            padding-left: 5% !important;
            padding-right: 5%!important;
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
            padding-left:40px;
            float: left;
        }
        .footer-secondary .footer-image{
            float: right;
            margin-right: 50px;
            height: 90px;
            width: 50px;
        }
        .footer-secondary .footer-underline{
            border-bottom: 1px solid black;
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
            float:left;
            height:300px;
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

    </style>
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-custom fixed-top">
            <div class="logo-container d-flex justify-content-center align-items-center">
                <a class="logo" href="<?php echo site_url();?>/home-ar">
                    <img src="<?php echo $site_logo;?>" data-aos="zoom-in" data-aos-duration="5000">
                </a>
            </div>
            <div class="booking-nav1">
                    <div class="nav justify-content-end">
                        <button type="button" class="btn booknow-button navbar-elements" onclick="location.href = '<?php echo site_url();?>/booking-ar';">احجز الآن</button>
                        <button type="button" class="btn member-button navbar-elements" onclick="location.href = '<?php echo site_url();?>/contact-us-ar';">تواصل معنا</button>
                        <div class="change-btn">
                            <button type="button" class="btn language-button navbar-elements"  style="width:90px; height:38px">
                                <span class="english">
                                    <a href="<?php echo $page_url;?>" style="color:#4b555c !important;font-family:'Florentia Med'">ENGLISH</a>
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
                        <button type="button" class="btn booknow-button navbar-elements" onclick="location.href = '<?php echo site_url();?>/booking-ar';">احجز الآن</button>
                        <button type="button" class="btn member-button navbar-elements" onclick="location.href = '<?php echo site_url();?>/contact-us-ar';">تواصل معنا</button>
                        <button type="button" class="btn language-button navbar-elements" style="width:90px; height:38px">
                            <span class="english">
                                <a href="<?php echo $page_url;?>" style="color:#4b555c !important;font-family:'Florentia Med'">ENGLISH</a>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="navbar-container container-fluid">
                    <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
                        <div class="navbar-nav nav align-items-center">
                        
                            <a class="nav-item nav-link <?php echo ($check == 1) ? 'current-page': ''?>" href="<?php echo site_url();?>/about-us-ar" aria-haspopup="true" aria-expanded="false">
                                نبذة عنا
                            </a>
                            <a class="nav-item nav-link <?php echo ($check == 2) ? 'current-page': ''?>" href="<?php echo site_url();?>/rooms-suites-ar" aria-haspopup="true" aria-expanded="false">
                                الغرف والأجنحة
                            </a>
                            <a class="nav-item nav-link <?php echo ($check == 3) ? 'current-page': ''?>" href="<?php echo site_url();?>/packages-ar" aria-haspopup="true" aria-expanded="false">
                                الباقات
                            </a>
                            <a class="nav-item nav-link <?php echo ($check == 4) ? 'current-page': ''?>" href="<?php echo site_url();?>/restaurants-ar" aria-haspopup="true" aria-expanded="false">
                                المطاعم
                            </a>
                            <a class="nav-item nav-link <?php echo ($check == 5) ? 'current-page': ''?>" href="<?php echo site_url();?>/spa-wellness-ar" aria-haspopup="true" aria-expanded="false">
                                السبا ووسائل العناية بالصحة
                            </a>
                            
                            <a class="nav-item nav-link" href="<?php echo site_url();?>/home-ar#meetings" aria-haspopup="true" aria-expanded="false">
                                الاجتماعات والفعاليات
                            </a>
                            <a class="nav-item nav-link" href="<?php echo site_url();?>/home-ar#experiences" aria-haspopup="true" aria-expanded="false">
                                التجارب
                            </a>
                            <!-- <a class="nav-item nav-link" href="<?php echo site_url();?>/gallery" aria-haspopup="true" aria-expanded="false">
                                Gallery
                            </a> -->
                            <a class="nav-item nav-link mobile-menu" href="<?php echo site_url();?>/booking-ar" aria-haspopup="true" aria-expanded="false">
                               احجز الآن
                            </a>
                            <a class="nav-item nav-link mobile-menu" href="<?php echo site_url();?>/contact-us-ar" aria-haspopup="true" aria-expanded="false">
                                تواصل معنا
                            </a>
                            <a class="nav-item nav-link mobile-menu" href="<?php echo $page_url;?>" aria-haspopup="true" aria-expanded="false">
                                English
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>