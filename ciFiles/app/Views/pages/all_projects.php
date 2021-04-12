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
            <div class="swiper-container">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <?php for($i=0;$i<6;$i++): ?>
                    <div class="swiper-slide" style="border: 3px solid #008DD2; border-radius: 10px;">
                        <div class="img-container">
                            <img src="<?php echo site_url("assets/images/projects_01.jpg"); ?>" class="project-image w-100">
                        </div>
                        <div class="meta-container container-fluid">
                            <h3 class="project-title">1 BHK | Precious Harmony</h3>
                            <p class="project-text">Sector - 18 / Plot No. 104, Ulwe</p>
                        </div>
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
    <section id="ongoing" class="usual-projects-page-section">
        <div class="container">
            <div class="title-button-outer">
                <div class="title-button">
                    <div class="section-title">ONGOING PROJECTS</div>
                </div>
            </div>
            <div class="swiper-container">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <?php for($i=0;$i<6;$i++): ?>
                    <div class="swiper-slide" style="border: 3px solid #008DD2; border-radius: 10px;">
                        <div class="img-container">
                            <img src="<?php echo site_url("assets/images/projects_01.jpg"); ?>" class="project-image w-100">
                        </div>
                        <div class="meta-container container-fluid">
                            <h3 class="project-title">1 BHK | Precious Harmony</h3>
                            <p class="project-text">Sector - 18 / Plot No. 104, Ulwe</p>
                        </div>
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
    <section id="upcoming" class="usual-projects-page-section">
        <div class="container">
            <div class="title-button-outer">
                <div class="title-button">
                    <div class="section-title">UPCOMING PROJECTS</div>
                </div>
            </div>
            <div class="swiper-container">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <?php for($i=0;$i<6;$i++): ?>
                    <div class="swiper-slide" style="border: 3px solid #008DD2; border-radius: 10px;">
                        <div class="img-container">
                            <img src="<?php echo site_url("assets/images/projects_01.jpg"); ?>" class="project-image w-100">
                        </div>
                        <div class="meta-container container-fluid">
                            <h3 class="project-title">1 BHK | Precious Harmony</h3>
                            <p class="project-text">Sector - 18 / Plot No. 104, Ulwe</p>
                        </div>
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