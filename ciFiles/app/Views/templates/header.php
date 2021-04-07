<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?> | Precious Group</title>
    <link rel="stylesheet" href="<?php echo site_url("assets/css/bootstrap.min.css"); ?>">
    <link rel="stylesheet" href="<?php echo site_url("assets/css/site.min.css"); ?>">
</head>
<body>
    <script src="<?php echo site_url("assets/js/jquery.min.js"); ?>"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <header id="desktop" class="d-none">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <nav class="navbar navbar-expand-lg">
                        <ul id="left-nav-top-desktop" class="nav-list navbar-nav mr-auto">
                            <li class="nav-item">
                                <a href="#" class="nav-link"><img src="<?php echo site_url("assets/images/whatsapp.png"); ?>" class="top-icon"></a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <img class="top-icon" src="<?php echo site_url("assets/images/mail_icon_2.svg"); ?>">
                                </a>
                            </li>
                        </ul>
                    </nav>   
                </div>
                <div class="col-lg-6 text-center">
                    <a href="<?php echo site_url(); ?>"><img src="<?php echo site_url("assets/images/logo.svg"); ?>" style="width: 25%; margin-bottom: 5%;"></a>
                    <div class="top-menu-items-container">
                        <a href="<?php echo site_url(); ?>" class="top-nav-curved-link">HOME</a> <a href="<?php echo site_url("#about-us"); ?>" class="top-nav-curved-link">ABOUT US</a> <a href="<?php echo site_url("projects"); ?>" class="top-nav-curved-link">PROJECTS</a> <a href="<?php echo site_url("customer-speaks"); ?>" class="top-nav-curved-link">CUSTOMER SPEAK</a>  <a href="<?php echo site_url("gallery"); ?>" class="top-nav-curved-link">GALLERY</a> <a href="<?php echo site_url("investor-corner"); ?>" class="top-nav-curved-link">INVESTOR CORNER</a> <a href="<?php echo site_url("industry-affairs"); ?>" class="top-nav-curved-link">INDUSTRY AFFAIRS</a> <a href="<?php echo site_url("contact"); ?>" class="top-nav-curved-link">CONTACT US</a> 

                    </div>
                </div>
                <div class="col-lg-3">
                    <nav class="navbar navbar-expand-lg">
                        <ul id="left-nav-top-desktop" class="nav-list navbar-nav ml-auto">
                            <li class="nav-item">
                                <a href="#" class="nav-link"><img src="<?php echo site_url("assets/images/twitter_icon_grey.svg"); ?>" class="top-icon"></a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link"><img src="<?php echo site_url("assets/images/fb_icon_grey.svg"); ?>" class="top-icon"></a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link"><img src="<?php echo site_url("assets/images/insta_icon_grey.svg"); ?>" class="top-icon"></a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link"><img src="<?php echo site_url("assets/images/pintrest_icon_grey.svg"); ?>" class="top-icon"></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <header id="touch">
        <div class="container-fluid">
            touch header
        </div>
    </header>