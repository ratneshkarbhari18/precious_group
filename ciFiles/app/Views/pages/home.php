<main class="page-content d-sm-none d-md-none d-lg-block d-xl-block" id="home">
    <section id="home-header-desktop" data-aos="zoom-in"  style="background-image: url(http://3.6.86.32/precious_group/assets/images/bgs/Home.png);
    background-position: center;
    background-size: cover;
    position: absolute;
    z-index: -5;
    top: 15%;
    width: 100%;
    padding: 40% 0;">
        <div class="container text-center">
            <h1 id="building-better-tommorow-titlex" style="margin-top: -10%; color: white;">BUILDING BETTER <br> <span style="font-weight: bold;">TOMMOROW.</span></h1>
        </div>
    </section>
    <section id="map-section-desktop" data-aos="zoom-in"  style="background-image: url('<?php echo site_url("assets/images/bgs/map.png"); ?>'); background-size: 100% 100%; padding: 15% 0 15% 0;">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-2 col-md-12 col-sm-12">
                    
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12">
                    <img src="<?php echo site_url("assets/images/map_nfacts.jpg"); ?>" style="margin-bottom: 5%; width: 80%">
                     
                    <h4 style="color: #393185;">Head Office: </h4>
                    <p>Shop No. 1 & 2, Sai Aura Building,  Plot Number 33, <br>Sector 17, Near Sadguru Sweets, Ulwe, Navi Mumbai, Maharashtra 410206 </p>
                </div>
                <div class="col-lg-2 col-md-12 col-sm-12">
                </div>
            </div>
        </div>
    </section>
    <section id="about-us-desktop" data-aos="zoom-in"  style="padding: 0 0 5% 0">
        <div class="container text-center"> 
            <div class="module-border-wrap"><div class="btn-title">About us</div></div>
            <div class="row" style="margin: 3% 0;">
                <div class="col-lg-2 col-md-12 col-sm-12">
                    
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi nam laudantium blanditiis animi excepturi? Consequatur quidem nulla dignissimos qui in veritatis eaque rerum perspiciatis aliquam hic, tempora sit quod architecto.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi nam laudantium blanditiis animi excepturi? Consequatur quidem nulla dignissimos qui in veritatis eaque rerum perspiciatis aliquam hic, tempora sit quod architecto.</p>
                </div>
                <div class="col-lg-2 col-md-12 col-sm-12">
                </div>
                <div class="col-lg-2 col-md-12 col-sm-12">
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12">
                    <img  src="<?php echo site_url("assets/images/features_icon.png"); ?>" class="w-100" style="margin-top: 5%;">
                </div>
                <div class="col-lg-2 col-md-12 col-sm-12">
                </div>
            </div>
        </div>
    </section>
    <section id="projects-desktop" data-aos="zoom-in"  style="background-image: url('<?php echo site_url("assets/images/Projects.png"); ?>'); background-size: 100% 100%; padding: 5% 0 12% 0;" class="text-center">
        <div class="container text-center">
            <div class="row">
                <div class="col-4">
                    <div class="project-grid-box" pid="1" style="background-image: url('<?php echo site_url("assets/images/projects_01.jpg") ?>'); background-size: cover;">
                        <div id="p-meta-1" class="project-grid-meta">
                            <h4 class="project-grid-title">Precious Heritage</h4>
                            <h6 class="project-grid-title">1 BHK</h6>
                        </div>
                        <a href="#" id="vp-button-1" class="btn view-project-button" style="background-color: blue; color: white; border: 3px solid white; display: none; position: absolute; left; top: 45%; left: 28%; padding: 1%;">
                        VIEW PROPERTIES
                        </a>
                    </div>
                </div>
                <div class="col-4">
                    <div class="project-grid-box" pid="2" style="background-image: url('<?php echo site_url("assets/images/projects_02.jpg") ?>'); background-size: cover;">
                        <div id="p-meta-2" class="project-grid-meta">
                            <h4 class="project-grid-title">Precious Heritage</h4>
                            <h6 class="project-grid-title">1 BHK</h6>
                        </div>
                        <a href="#" id="vp-button-2" class="btn view-project-button" style="background-color: blue; color: white; border: 3px solid white; display: none; position: absolute; left; top: 45%; left: 28%; padding: 1%;">
                        VIEW PROPERTIES
                        </a>
                    </div>
                </div>
                <div class="col-4">
                    <div class="project-grid-box" pid="3" style="background-image: url('<?php echo site_url("assets/images/projects_03.jpg") ?>'); background-size: cover;">
                        <div id="p-meta-3" class="project-grid-meta">
                            <h4 class="project-grid-title">Precious Heritage</h4>
                            <h6 class="project-grid-title">1 BHK</h6>
                        </div>
                        <a href="#" id="vp-button-3" class="btn view-project-button" style="background-color: blue; color: white; border: 3px solid white; display: none; position: absolute; left; top: 45%; left: 28%; padding: 1%;">
                        VIEW PROPERTIES
                        </a>
                    </div>
                </div>
            </div>
            <script>
                $(".project-grid-box").hover(function () {
                    let pid = $(this).attr("pid");
                    $("a#vp-button-"+pid).css("display","block");
                    $("div#p-meta-"+pid).css("display","none");
                    }, function () {
                        let pid = $(this).attr("pid");
                        $("a#vp-button-"+pid).css("display","none");
                        $("div#p-meta-"+pid).css("display","block");
                    }
                );
                $(".project-grid-box").on('hover', function () {
                    let pid = $(this).attr("pid");
                    console.log(pid);
                    $("a#vp-button-"+pid).css("display","block");
                    $("div#p-meta-"+pid).css("display","none");
                });
            </script>
            <a href="#" class="btn" style="background-color: white; border: 3px solid #393185; color: #393185; margin-top: 5%;">
            VIEW ALL PROJECTS
            </a>
        </div>
    </section>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Sigmar+One&display=swap" rel="stylesheet">
    <section data-aos="zoom-in"  id="customers-speak-desktop" style="padding: 0 0 2% 0; border: 15px solid #fff;
    border-top: none;
    border-left: none;
    border-right: none;
    border-bottom-left-radius: 20%;
    border-bottom-right-radius: 20%;
    background-color: white;">
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
        <div class="container"> 
        <span style="    font-size: 100px;
    position: absolute; color: #393185; font-family: sans-serif;
    top: -10%;
    left: 35%;">"</span><div class="module-border-wrap customer-speak-title"><div class="btn-title">CUSTOMERS SPEAK</div></div><span style="    font-size: 100px;
    position: absolute;
    font-family: sans-serif;
    bottom: 60%; color: #008DD2;
    right: 35%;">"</span>
            <div class="swiper-container">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper" style="padding: 8% 0 2% 0;">
                    <!-- Slides -->
                    <div class="swiper-slide testimonial-slide container-fluid" style="border: 2px solid #008DD2
;background-image: url(http://3.6.86.32/precious_group/assets/images/bgs/testimonial1.png);
    background-size: 300%;
    width: 550px;
    margin-right: 10px;
    background-position: center;
}">
                        <img src="<?php echo site_url("assets/images/img-3.jpg"); ?>" class="testimonial-image">
                        <h4 class="testimonial-title">Testimonial Title</h4>
                        <p style="margin-bottom: 0;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos aspernatur eveniet natus vel atque ipsum excepturi placeat magni nobis officiis?</p>
                        <p><span style="font-weight: bold; color:#393185;">John Doe</span> - Designation</p>
                    </div>
                    <div class="swiper-slide testimonial-slide container-fluid" style="border: 2px solid #008DD2
;background-image: url(http://3.6.86.32/precious_group/assets/images/bgs/testimonial2.png);
    background-size: 300%;
    width: 550px;
    margin-right: 10px;
    background-position: center;
}">
                        <img src="<?php echo site_url("assets/images/img-3.jpg"); ?>" class="testimonial-image">
                        <h4 class="testimonial-title">Testimonial Title</h4>
                        <p style="margin-bottom: 0;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos aspernatur eveniet natus vel atque ipsum excepturi placeat magni nobis officiis?</p>
                        <p><span style="font-weight: bold; color:#393185;">John Doe</span> - Designation</p>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script>
            const swiper = new Swiper('.swiper-container', {
                // Optional parameters
                spaceBetween: 10,
                slidesPerView: 2,
                direction: 'horizontal',
                loop: true,
                // autoplay: {
                //     delay: 3000,
                // },
            });
        </script>
    </section>
    <section id="gallery-desktop" style="position: absolute;
    background: linear-gradient(to right, #393185, #b2def3);
    padding: 20% 0 10% 0;
    z-index: -5;
    top: 517%;
    width: 100%;">
        <div class="container"> 
            <div class="module-border-wrap"><div class="btn-title">GALLERY</div></div>
            <div class="swiper-container"  id="gallery-slider">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper" style="padding: 8% 0 5% 0;">
                    <!-- Slides -->
                    <div class="swiper-slide gallery-slide container-fluid" style="border: 1px solid darkgray;">
                        <img class="w-100" src="<?php echo site_url("assets/images/township_01.jpg"); ?>">
                    </div>
                    <div class="swiper-slide gallery-slide container-fluid" style="border: 1px solid darkgray;">
                        <img class="w-100" src="<?php echo site_url("assets/images/township_02.jpg"); ?>">
                    </div>
                    <div class="swiper-slide gallery-slide container-fluid" style="border: 1px solid darkgray;">
                        <img class="w-100" src="<?php echo site_url("assets/images/township_03.jpg"); ?>">
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <style>
                .gallery-slide{
                    background-color: white;
                    padding: 1%;
                    border: none !important;
                }
            </style>
            <script>
                const swiperGallery = new Swiper('#gallery-slider', {
                    // Optional parameters
                    spaceBetween: 0,
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
            </script>
        </div>
    </section>
    <section id="industry-affairs" data-aos="zoom-in"  style="background-image: url(http://3.6.86.32/precious_group/assets/images/ia.png);
    background-size: 100% 100%;
    background-position: bottom;
    padding: 15% 0 10% 0;
    position: absolute;
    width: 100%;
    top: 612%;" >
        <div class="container"> 
            <div class="module-border-wrap"><div class="btn-title">INDUSTRY AFFAIRS</div></div>
            <div class="swiper-container" id="ia-slider">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper" style="padding: 8% 0 5% 0;">
                    <!-- Slides -->
                    <div class="swiper-slide ia-slide container-fluid text-center" style="border: 1px solid darkgray; background-image: url('<?php echo site_url("assets/images/township_01.jpg"); ?>'); background-size: cover; width: 200px; height: 200px; margin: 0 auto;">
                        <div class="township-meta">
                            <h4 class="text-light">TOWNSHIP</h4>
                            <p>Ulve, Navi Mumbai</p>
                            <p>2BHK, 1BHK</p>
                        </div>
                    </div>
                    <div class="swiper-slide ia-slide container-fluid text-center" style="border: 1px solid darkgray; background-image: url('<?php echo site_url("assets/images/township_02.jpg"); ?>'); background-size: cover; width: 200px; height: 200px; margin: 0 auto;">
                        <div class="township-meta">
                            <h4 class="text-light">TOWNSHIP</h4>
                            <p>Ulve, Navi Mumbai</p>
                            <p>2BHK, 1BHK</p>
                        </div>
                    </div>
                    <div class="swiper-slide ia-slide container-fluid text-center" style="border: 1px solid darkgray; background-image: url('<?php echo site_url("assets/images/township_03.jpg"); ?>'); background-size: cover; width: 200px; height: 200px; margin: 0 auto;">
                        <div class="township-meta">
                            <h4 class="text-light">TOWNSHIP</h4>
                            <p>Ulve, Navi Mumbai</p>
                            <p>2BHK, 1BHK</p>
                        </div>
                    </div>
                </div>
            </div>
            <style>
                .township-meta{
                    position: absolute;
                    top: 30%;
                    left: 28%;
                }
                .township-meta h4{
                    color: white;
                }
                .township-meta p{
                    color: white;
                }
            </style>
            <script>
                const swiperIA = new Swiper('#ia-slider', {
                    // Optional parameters
                    spaceBetween: 10,
                    slidesPerView: 3,
                    direction: 'horizontal',
                    loop: true,
                    autoplay: {
                        delay: 3000,
                    },
                });
            </script>
        </div>
    </section>
</main>