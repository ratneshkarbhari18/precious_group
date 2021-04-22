<div class="container" id="desktop-section-nav" style="background-color: transparent; "> 
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #393185; padding: 2% 0;">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mr-auto">
                <li class="nav-item">
                    <a class="nav-link section-nav-link text-light" href="<?php echo site_url(""); ?>">
                        <!-- <img src="<?php echo site_url("assets/images/home_icon.png"); ?>" class="home-icon-gold"> -->
                        HOME
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link section-nav-link text-light" section-id="completed" href="#">COMPLETED PROJECTS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link section-nav-link text-light" section-id="ongoing" href="#">ONGOING PROJECTS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link section-nav-link text-light" section-id="upcoming" href="#">UPCOMING PROJECTS</a>
                </li>
                
            </ul>
        </div>
    </nav>
</div>
<main class="page-content" id="all-projects">
    <section id="completed" class="usual-projects-page-section">
        <div class="container">
            <div class="title-button-outer">
                <div class="title-button">
                    <div class="section-title">COMPLETED PROJECTS</div>
                </div>
            </div>
            <div class="container">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" />
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />
                <!-- Additional required wrapper -->
                <div class="row properties-row">
                    <!-- Slides -->
                    <?php for($i=0;$i<2;$i++): ?>
                        <div class="col-lg-6 col-md-12 col-sm-12" >
                            <div style="border: 3px solid #008DD2; border-radius: 10px;">
                                <a href="<?php echo site_url("project/1234"); ?>">
                                    <div class="owl-carousel owl-theme project-images-carousel">
                                        <img src="<?php echo site_url("assets/images/horizontal_property.jpeg"); ?>" class="project-image w-100">
                                        <img src="<?php echo site_url("assets/images/horizontal_property.jpeg"); ?>" class="project-image w-100">
                                    </div>
                                    <div class="meta-container container-fluid">
                                        <h2 class="project-title">1 BHK | Precious Harmony</h2>
                                        <p class="project-text">Sector - 18 / Plot No. 104, Ulwe</p>
                                    </div>
                                </a>
                            </div>
                            
                        </div>
                    <?php endfor; ?>
                </div>
                <!-- If we need pagination -->

                <!-- If we need navigation buttons -->
                <!-- <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div> -->

            </div>
            <!-- <a href="#" id="vp-button-1" class="btn view-project-button text-center" style="position: absolute;background-color: #393185;color: white;border: 3px solid white;left: 39rem;">VIEW ALL</a> -->
        </div>
        
    </section>
    <section id="ongoing" class="usual-projects-page-section">
        <div class="container">
            <div class="title-button-outer">
                <div class="title-button">
                    <div class="section-title">ONGOING PROJECTS</div>
                </div>
            </div>
            <div class="row properties-row">
                    <!-- Slides -->
                <?php for($i=0;$i<2;$i++): ?>
                    <div class="col-lg-6 col-md-12 col-sm-12" >
                        <div style="border: 3px solid #008DD2; border-radius: 10px;">
                            <a href="<?php echo site_url("project/1234"); ?>">
                                <div class="owl-carousel owl-theme project-images-carousel">
                                    <img src="<?php echo site_url("assets/images/horizontal_property.jpeg"); ?>" class="project-image w-100">
                                    <img src="<?php echo site_url("assets/images/horizontal_property.jpeg"); ?>" class="project-image w-100">
                                </div>
                                <div class="meta-container container-fluid">
                                    <h2 class="project-title">1 BHK | Precious Harmony</h2>
                                    <p class="project-text">Sector - 18 / Plot No. 104, Ulwe</p>
                                </div>
                            </a>
                        </div>
                        
                    </div>
                <?php endfor; ?>
            </div>
            <!-- <a href="#" id="vp-button-1" class="btn view-project-button text-center" style="position: absolute;background-color: #393185;color: white;border: 3px solid white;left: 39rem;">VIEW ALL</a> -->
        </div>
        
    </section>
    <section id="upcoming" class="usual-projects-page-section">
        <div class="container">
            <div class="title-button-outer">
                <div class="title-button">
                    <div class="section-title">UPCOMING PROJECTS</div>
                </div>
            </div>
            <div class="row properties-row">
                    <!-- Slides -->
            <?php for($i=0;$i<2;$i++): ?>
                <div class="col-lg-6 col-md-12 col-sm-12" >
                    <div style="border: 3px solid #008DD2; border-radius: 10px;">
                        <a href="<?php echo site_url("project/1234"); ?>">
                            <div class="owl-carousel owl-theme project-images-carousel">
                                <img src="<?php echo site_url("assets/images/horizontal_property.jpeg"); ?>" class="project-image w-100">
                                <img src="<?php echo site_url("assets/images/horizontal_property.jpeg"); ?>" class="project-image w-100">
                            </div>
                            <div class="meta-container container-fluid">
                                <h2 class="project-title">1 BHK | Precious Harmony</h2>
                                <p class="project-text">Sector - 18 / Plot No. 104, Ulwe</p>
                            </div>
                        </a>
                    </div>
                    
                </div>
            <?php endfor; ?>
        </div>
            <!-- <a href="#" id="vp-button-1" class="btn view-project-button text-center" style="position: absolute;background-color: #393185;color: white;border: 3px solid white;left: 39rem;">VIEW ALL</a> -->
        </div>
        
    </section>
    <section id="emi-calculator" style='padding: 5rem 0;'>
        <div class="container">
            <div class="title-button-outer">
                <div class="title-button">
                    <div class="section-title">LOAN CALCULATOR</div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-1 col-md-12 col-sm-12"></div>
                <div class="col-lg-10 col-md-12 col-sm-12"> 
                    <div id="emi-calculator-box" class="container-fluid card">
                        <div class="row card-body">
                            <div class="col-lg-7 col-md-12 col-sm-12">
                                <ul id="variables-list" style="list-style: none; padding-left: 0;">
                                    <li class="container-fluid variable-list-item">
                                        <div class="row">
                                            <div class="col-6">
                                                <h5 class="variable">AMOUNT</h5>
                                            </div>
                                            <div class="form-group col-6">
                                                <input type="range" class="form-control-range" id="loanAmount">
                                                <p class="variable-value-wrapper">₹ <span class="variable-value-figure">0</span></label>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="container-fluid variable-list-item">
                                        <div class="row">
                                            <div class="col-6">
                                                <h5 class="variable">MONTHS</h5>
                                            </div>
                                            <div class="form-group col-6">
                                                <input type="range" class="form-control-range" id="loanMonths">
                                                <p class="variable-value-wrapper"><span class="variable-value-figure">0</span> MONTHS</label>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="container-fluid variable-list-item" style="margin-bottom: 0 !important;">
                                        <div class="row">
                                            <div class="col-6">
                                                <h5 class="variable">INTEREST RATE</h5>
                                            </div>
                                            <div class="form-group col-6">
                                                <input type="range" class="form-control-range" id="loanROI">
                                                <p class="variable-value-wrapper"><span class="variable-value-figure">0</span> %</label>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-5 col-md-12 col-sm-12 text-center">
                                <div class="card" id="results-card">
                                    <div class="card-body">
                                        <p class="result-title">LOAN EMI</p>
                                        <p class="calculated-amount-wrapper">₹ <span id="caclulated-amount">1331.21</span></p>
                                        <p class="result-title">TOTAL PAYMENT</p>
                                        <p class="result-title">(PRINCIPLE + INTEREST)</p>
                                        <p class="calculated-amount-wrapper">₹ <span id="caclulated-amount">1331.21</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1 col-md-12 col-sm-12"></div>
            </div>
            
        </div>
    </section>
</main>
<style>
    /* Page Specific Styles */
    p.calculated-amount-wrapper{
        font-size: 30px;
        color: #393185;
        font-weight: bold;
    }
    p.result-title{
        font-size: 20px;
        color: #008DD2;
        font-weight: bold;
    }
    .meta-container{
        background-color: white;
    }
    div#results-card{
        border-radius: 10px;
        border: 3px solid #393185;
    }
    footer#desktop {
    padding: 5% 0 5% 0;
    width: 100%;
    z-index: -5;
    background-color: #393185;
    }
    .swiper-container {
      width: 100%;
      height: 100%;
    }
    .meta-container{
        padding-top: 15px;
        padding-bottom: 15px;
    }
    .swiper-container{
        margin-top: 3%;
        padding: 3% 0 5% 0;
    }
    h2.project-title{
        font-size: 1.1rem !important;
    }
    .form-group{margin-bottom: 0;}
    
</style>
<script>
    const swiper = new Swiper('.swiper-containerx', {
         // Optional parameters
        spaceBetween: 10,
        slidesPerView: 3,
        direction: 'horizontal',
        loop: true,
        autoplay: {
            delay: 3000,
        },  
        pagination: {
            el: '.swiper-pagination',
            type: 'bullets',
        },
    });
    const swiperx = new Swiper('.project-img-container', {
        spaceBetween: 10,
        slidesPerView: 3,
        direction: 'horizontal',
        loop: true,
        autoplay: {
            delay: 3000,
        },  
    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
<script>
$(".project-images-carousel").owlCarousel({
    loop:true,
    autoplay:true,
    dots: false,
    autoplayTimeout:2000,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})
</script>