<?php include "common/header.php"; ?> 
<?php include "common/sidebar.php"; ?> 

<style>
.equal-height-row {
    display: flex;
    flex-wrap: wrap;
}

.equal-height-row > [class*='col-'] {
    display: flex;
    flex-direction: column;
}

.well.well-services {
    flex: 1;
}

/* Services section */
.services-all {
    display: flex;
    flex-wrap: wrap;
}

.services-all > .col-md-4,
.services-all > .col-sm-6,
.services-all > .col-xs-12 {
    display: flex;
    flex-direction: column;
}

.single-services {
    flex: 1;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    height: 100%;
}

.services-img {
    width: 100%;
    height: 250px;
    overflow: hidden;
    position: relative;
}

.services-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
}
</style>

<!-- Start Slider Area -->
<div class="intro-area intro-area-4">
    <div class="intro-carousel">

        <!-- Slide 1 -->
        <div class="intro-content">
            <div class="slider-images">
                <img src="<?= base_url('assets/img/slider/swood.jpg') ?>" alt="">
            </div>
            <div class="slider-content bg-transparent">
                <div class="display-table">
                    <div class="display-table-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="layer-1-2">
                                        <h1 class="title2">Welcome to SUJATHA GLOBAL</h1>
                                    </div>
                                    <div class="layer-1-1">
                                        <p>
                                            A trusted general trading company based in Tanzania, we specialize in premium food crops and wood products. From fresh avocados and cold-pressed avocado oil to precision-cut pine timber and eucalyptus veneer available in a wide range of sizes tailored to customer requirements, we guarantee quality, sustainability, and timely delivery—every time.
                                        </p>
                                    </div>
                                    <div class="layer-1-3">
                                        <a href="#" class="ready-btn left-btn">Our Services</a>
                                        <a href="#" class="ready-btn right-btn">Contact us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="intro-content">
            <div class="slider-images">
                <img src="<?= base_url('assets/img/slider/s2.png') ?>" alt="">
            </div>
            <div class="slider-content">
                <div class="display-table">
                    <div class="display-table-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="layer-1-2">
                                        <h1 class="title2">Superior products at the best market prices</h1>
                                    </div>
                                    <div class="layer-1-1">
                                        <p>
                                            Summary of above title not more than .. words, Summary of above title not more than .. words.
                                        </p>
                                    </div>
                                    <div class="layer-1-3">
                                        <a href="#" class="ready-btn left-btn">Our Services</a>
                                        <a href="#" class="ready-btn right-btn">Contact us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- End Slider Area -->

<!-- Welcome service area start -->
<div class="welcome-area welcome-area-2 area-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline text-center">
                    <h3>Our Core Values</h3>
                </div>
            </div>
        </div>

        <div class="row equal-height-row">
            <!-- Quality First -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="well well-services">
                    <div class="well-icon">
                        <a href="#"><i class="flaticon" style="font-size: 40px;">&#x2714;</i></a>
                    </div>
                    <div class="well-content">
                        <h4 class="text"><a href="#">Quality First</a></h4>
                        <p>We rigorously select and inspect every product to ensure freshness, purity, and performance.</p>
                    </div>
                </div>
            </div>

            <!-- Value Creation -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="well well-services">
                    <div class="well-icon">
                        <a href="#"><i class="flaticon" style="font-size: 40px;">&#x1F4B8;</i></a>
                    </div>
                    <div class="well-content">
                        <h4><a href="#">Value Creation</a></h4>
                        <p>Through smart procurement and logistics, we deliver cost savings without compromising quality.</p>
                    </div>
                </div>
            </div>

            <!-- Reliable Service -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="well well-services">
                    <div class="well-icon">
                        <a href="#"><i class="flaticon" style="font-size: 40px;">&#x23F3;</i></a>
                    </div>
                    <div class="well-content">
                        <h4><a href="#">Reliable Service</a></h4>
                        <p>We ensure on-time deliveries and clear, transparent communication throughout the process.</p>
                    </div>
                </div>
            </div>

            <!-- Integrity & Sustainability -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="well well-services">
                    <div class="well-icon">
                        <a href="#"><i class="flaticon" style="font-size: 40px;">&#x1F6E1;</i></a>
                    </div>
                    <div class="well-content">
                        <h4><a href="#">Integrity & Sustainability</a></h4>
                        <p>We follow ethical sourcing, fair trade, and environmentally responsible business practices.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Welcome service area End -->

<!-- Start Services Area -->
<div class="Services-area area-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline text-center">
                    <h3>Our Services</h3>
                    <p>
                        We specialize in the sourcing, processing, and export of premium food and wood products across Africa and Beyond. Our logistics and customer support services ensure timely, reliable delivery to clients worldwide.
                    </p>
                </div>
            </div>
        </div>

        <div class="row equal-height-row">
            <div class="services-all">
                <!-- Agricultural Products -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-services text-center">
                        <div class="services-img">
                            <img src="<?= base_url('assets/img/products/agri.jpg') ?>" alt="Agricultural Products">
                            <div class="image-layer">
                                <a href="#"><i class="fas fa-seedling"></i></a>
                            </div>
                        </div>
                        <div class="main-services">
                            <div class="service-content">
                                <h4>Premium Agricultural Products</h4>
                                <p>We supply high-quality Avocados, Maize, Rice, Pigeon Beans, and Soybeans from trusted East African farms.</p>
                                <a class="service-btn" href="#">read more</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Avocado Oil -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-services text-center">
                        <div class="services-img">
                            <img src="<?= base_url('assets/img/products/oil.jpg') ?>" alt="Avocado Oil">
                            <div class="image-layer">
                                <a href="#"><i class="fas fa-oil-can"></i></a>
                            </div>
                        </div>
                        <div class="main-services">
                            <div class="service-content">
                                <h4>Cold-Pressed Avocado Oil</h4>
                                <p>Food-grade, cold-pressed avocado oil perfect for culinary and cosmetic applications.</p>
                                <a class="service-btn" href="#">read more</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Wood Products -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-services text-center">
                        <div class="services-img">
                            <img src="<?= base_url('assets/img/products/timber4.jpg') ?>" alt="Wood Products">
                            <div class="image-layer">
                                <a href="#"><i class="fas fa-tree"></i></a>
                            </div>
                        </div>
                        <div class="main-services">
                            <div class="service-content">
                                <h4>Wood & Timber Products</h4>
                                <p>We offer Eucalyptus Veneer and Pine Timber, kiln-dried and precision-cut to client specifications.</p>
                                <a class="service-btn" href="#">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Welcome service area End -->

<!-- Start Counter Area -->
<div class="counter-area area-padding parallax-bg fix" data-stellar-background-ratio="0.6">
    <div class="container">
        <div class="row">
            <div class="fun-content">
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="fun_text">
                        <span class="counter">5060</span>
                        <h5>Complete projects</h5>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="fun_text">
                        <span class="counter">10050</span>
                        <h5>Latest projects</h5>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="fun_text">
                        <span class="counter">50</span>
                        <h5>Awards won</h5>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="fun_text">
                        <span class="counter">12900</span>
                        <h5>Total worker</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Counter Area -->

<?php include "common/footer.php"; ?>

