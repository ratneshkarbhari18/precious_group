<main class="page-content" id="project">
    <section id="project-card-section " class="usual-projects-page-section" style="padding-bottom: 15em; margin-bottom: 5em;">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12"></div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="swiper-slidex" style="border: 3px solid #008DD2; border-radius: 10px;">
                        <div class="img-container">
                            <img src="<?php echo site_url("assets/images/projects_01.jpg"); ?>" class="project-image w-100">
                        </div>
                        <div class="meta-container container-fluid text-center">
                            <h3 class="project-title">1 BHK | Precious Harmony</h3>
                            <p class="project-text">Sector - 18 / Plot No. 104, Ulwe</p>
                        </div>
                    </div>
                    <div class="text-center" style="    margin-top: 10%;
    position: absolute;">
                        <h4 id="hightlights-title" style="color: #393185; font-weight: bold;">Highlights</h4>
                        <p class="highlights">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Itaque explicabo molestias, sed mollitia optio facere molestiae dicta placeat dolorem veritatis nobis dolore quibusdam sunt ad facilis repellat impedit in maxime!</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12"></div>
            </div>
        </div>
    </section>
    <section id="features" class="padding-top-bottom-five-em">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2 col-md-12 col-sm-12">

                </div>
                <div class="col-lg-8 col-md-12 col-sm-12">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <div class="card-body text-left feature-card">
                                    <p class="feature-title">Location</p>
                                    <p class="feature-text">Ulwe, Mumbai</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <div class="card-body text-left feature-card">
                                    <p class="feature-title">Flat Configuration</p>
                                    <p class="feature-text">1 BHK</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <div class="card-body text-left feature-card">
                                    <p class="feature-title">Maharera No.</p>
                                    <p class="feature-text">P1234343</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <div class="card-body text-left feature-card">
                                    <p class="feature-title">Rera Carpet</p>
                                    <p class="feature-text">489 Sq. Ft.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-12 col-sm-12">

                </div>
            </div>
            <div class="text-center">
                <p class="bold-text-3d-view" style="margin: 1% 0;"> <img src="<?php echo site_url("assets/images/3d_view_360.png"); ?>" class="features-icon" style="width: 50px; height: 50px;"> 3D View   <a href="" class="btn" style="background-color: #393185; color: white;">Click to View</a></p>
                <p class="internal-external-amenities-title" style="font-weight: bold;
    font-size: 30px;">Internal and External Amenities</p>
            </div>
            <div class="swiper-container container">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <?php for($i=0;$i<6;$i++): ?>
                        <div class="swiper-slide text-center">
                            <img src="<?php echo site_url("assets/images/gym.png"); ?>" class="features-icon" style="width: 50px; height: 50px;">
                            <p class="feature-title">Well Equipped Gym</p>
                        </div>
                    <?php endfor; ?>
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>

                <!-- If we need navigation buttons -->
                <!-- <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div> -->

            </div>
        </div>
    </section>
    <section id="map-section-desktop" style="position: relative; top: 0;">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-2 col-md-12 col-sm-12">
                    
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6">
                                <img class="w-100" src="<?php echo site_url("assets/images/map_new.png"); ?>"  style="margin-bottom: 5%; margin-right: -40%;">
                            </div>
                            <div class="col-lg-6">
                                <img class="w-50" style="margin-left: -40%;"  src="<?php echo site_url("assets/images/map_nfacts_text.jpg"); ?>">
                            </div>                            
                        </div>
                    </div>

                    <div id="address">
                        <h4 style="color: #393185;">Head Office: </h4>
                        <p>Shop No. 1 & 2, Sai Aura Building,  Plot Number 33, <br>Sector 17, Near Sadguru Sweets, Ulwe, Navi Mumbai, Maharashtra 410206 </p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-12 col-sm-12">
                </div>
            </div>
        </div>
    </section>
    <section id="emi-calculator" style='padding: 5rem 0;'>
        <div class="container">
            <div class="title-button-outer">
                <div class="title-button">
                    <div class="section-title">LOAN CALCULATOR</div>
                </div>
            </div>
            <style>
            
            </style>
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
                                        <p class="variable-value-wrapper">₹ <span id="variable-value-figure">0</span></label>
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
                                        <p class="variable-value-wrapper"><span id="variable-value-figure">0</span> MONTHS</label>
                                    </div>
                                </div>
                            </li>
                            <li class="container-fluid variable-list-item">
                                <div class="row">
                                    <div class="col-6">
                                        <h5 class="variable">INTEREST RATE</h5>
                                    </div>
                                    <div class="form-group col-6">
                                        <input type="range" class="form-control-range" id="loanROI">
                                        <p class="variable-value-wrapper"><span id="variable-value-figure">0</span> %</label>
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
    </section>
</main>
<style>
    /* Page Specific Styles */
    p.feature-title{
        font-weight: bold;
        font-size: 1.3rem;
    }
    p.feature-text{
        color: #333333;
    }
    .padding-top-bottom-five-em{
        padding: 5em 0;
    }
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
    .meta-container{
        padding-top: 15px;
        padding-bottom: 15px;
    }
    .swiper-container{
        margin-top: 3%;
        padding: 3% 0 5% 0;
    }
    h3.project-title{
        font-size: 1.5rem;
    }
    .form-group{margin-bottom: 0;}
    .variable-list-item{
        padding-top: 5%;
        border: 3px solid #393185;
        margin-bottom: 3%;
        border-radius: 10px;
    }
    .feature-card{
        border: 3px solid #393185;
        border-radius: 10px;
        margin-bottom: 10px;
    }
    div#emi-calculator-box{
        background-image: url("<?php echo site_url("assets/images/bgs/testimonial1.png"); ?>");
        background-position: center;    
        background-size: 300%;
        border-radius: 10px;
    }
    h5.variable{
        color: #393185;
        font-weight: bold;
    }
    p.variable-value-wrapper{
        font-weight: bold;
    }
</style>
<script>
    const swiper = new Swiper('.swiper-container', {
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
</script>