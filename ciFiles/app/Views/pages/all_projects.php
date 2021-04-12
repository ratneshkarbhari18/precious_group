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
</main>
<style>
    /* Page Specific Styles */
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