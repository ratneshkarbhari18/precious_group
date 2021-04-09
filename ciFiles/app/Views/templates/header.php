<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?> | Precious Group</title>
    <link rel="stylesheet" href="<?php echo site_url("assets/css/bootstrap.min.css"); ?>">
    <link rel="stylesheet" href="<?php echo site_url("assets/css/bg.css"); ?>">
    <link rel="stylesheet" href="<?php echo site_url("assets/css/site.min.css"); ?>">
</head>
<body>
    <script src="<?php echo site_url("assets/js/jquery.min.js"); ?>"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <header id="desktop" class="d-none">
        <div class="container-fluid" id="desktop-navbar">
            <div class="row">
                <div class="col-lg-3">
                    <nav class="navbar navbar-expand-lg">
                        <ul id="left-nav-top-desktop" class="nav-list navbar-nav mr-auto">
                            <li class="nav-item">
                                <a href="#" class="nav-link"><img src="<?php echo site_url("assets/images/whatsapp.png"); ?>" class="top-icon"></a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link"><img id="social-icon-3" alt-img-src="<?php echo site_url("assets/images/mail_gold.svg"); ?>" src="<?php echo site_url("assets/images/mail_blue.svg"); ?>" class="top-icon color-changer-icon"></a>
                            </li>
                        </ul>
                    </nav>   
                </div>
                <div class="col-lg-6 text-center">
                    <a href="<?php echo site_url(); ?>"><img src="<?php echo site_url("assets/images/logo.svg"); ?>" style="width: 25%; margin-bottom: 5%;"></a>
                    <div class="top-menu-items-container">
                        <a href="<?php echo site_url(); ?>" class="top-nav-curved-link">HOME</a> <a href="<?php echo site_url("#about-us"); ?>" class="top-nav-curved-link">ABOUT US</a> <a href="<?php echo site_url("projects"); ?>" class="top-nav-curved-link">PROJECTS</a> <a href="<?php echo site_url("gallery"); ?>" class="top-nav-curved-link">GALLERY</a> <a href="<?php echo site_url("investor-corner"); ?>" class="top-nav-curved-link">INVESTOR CORNER</a> <a href="<?php echo site_url("industry-affairs"); ?>" class="top-nav-curved-link">INDUSTRY AFFAIRS</a> <a href="<?php echo site_url("contact"); ?>" class="top-nav-curved-link">CONTACT US</a> 

                    </div>
                </div>
                <div class="col-lg-3">
                    <nav class="navbar navbar-expand-lg">
                        <ul id="left-nav-top-desktop" class="nav-list navbar-nav ml-auto">
                            <li class="nav-item">
                                <a href="#" class="nav-link"><img id="social-icon-1" alt-img-src="<?php echo site_url("assets/images/icon_gold_01.svg"); ?>" src="<?php echo site_url("assets/images/socialmedia_icon-01.svg"); ?>" class="top-icon color-changer-icon"></a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link"><img id="social-icon-2" alt-img-src="<?php echo site_url("assets/images/icon_gold_02.svg"); ?>" src="<?php echo site_url("assets/images/icon_blue-02.svg"); ?>" class="top-icon color-changer-icon"></a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link"><img id="social-icon-3" alt-img-src="<?php echo site_url("assets/images/icon_gold_03.svg"); ?>" src="<?php echo site_url("assets/images/icon_blue-03.svg"); ?>" class="top-icon color-changer-icon"></a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link"><img id="social-icon-4" alt-img-src="<?php echo site_url("assets/images/icon_gold_04.svg"); ?>" src="<?php echo site_url("assets/images/icon_blue-04.svg"); ?>" class="top-icon color-changer-icon"></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="container-fluid" id="desktop-section-nav" style="background-color: #393185;"> 
            <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #393185;">
    

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto mr-auto">
                        
                        <li class="nav-item">
                            <a class="nav-link section-nav-link text-light" section-id="about-us-desktop" href="#">ABOUT US</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link section-nav-link text-light" section-id="projects-desktop" href="#">PROJECTS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link section-nav-link text-light" section-id="customers-speak-desktop" href="#">CUSTOMER SPEAKS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link section-nav-link text-light" section-id="gallery-desktop" href="#">GALLERY</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link section-nav-link text-light" section-id="industry-affairs-desktop" href="#">INDUSTRY AFFAIRS</a>
                        </li>
                        
                        
                    </ul>
                </div>
            </nav>
        </div>
        <script>
            $("a.section-nav-link").click(function() {
                let targetSectionId = $(this).attr("section-id");
                $([document.documentElement, document.body]).animate({
                    scrollTop: $("section#"+targetSectionId).offset().top
                }, 1000);
            });
        </script>
    </header>
    <header id="touch">
        <div class="container-fluid">
            touch header
        </div>
    </header>