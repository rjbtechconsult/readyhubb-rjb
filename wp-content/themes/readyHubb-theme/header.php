<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ReadyHUbb
 * @subpackage ReadyHUbb
 * @since 1.0.0
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <title>Ready Hubb</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />
    <link rel="stylesheet" href="<?php echo get_theme_file_uri('style.css'); ?>">

</head>
<body>
    <?php wp_body_open(); ?>
   
        <nav class="navbar navbar-expand-md navbar-light fixed-top " id="mainNav">
            <div class="container">
                <a class="navbar-brand top js-scroll-trigger pl-0 pl-md-3 " href="<?php echo site_url('/')?>">
                    <img class="img-responsive" src="<?php echo get_theme_file_uri('./images/logo.png'); ?>" alt="logo">      
                </a>
                <button  class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse pt-3 pt-md-0 justify-content-end" id="navbarNav">
                    <ul class="navbar-nav me-auto ">
                        <li class="nav-item  "> 
                            <a class="nav-link js-scroll-trigger" href="<?php echo site_url('/partners')?>">Features </a>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link js-scroll-trigger" href="<?php echo site_url('/work-at-mls')?>">Pricing</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link js-scroll-trigger" href="<?php echo site_url('/about')?>"> About us </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link js-scroll-trigger" href="<?php echo site_url('#contact-us')?>">  FAQ </a>
                        </li> 
                        <li class="nav-item ">
                            <a class="nav-link js-scroll-trigger" href="<?php echo site_url('/mls-solutions')?>">  Blog </a>
                        </li> 
                       
                    </ul> 
                </div>   
            </div>
        </nav>
       
       
  


