 <?php include "common/header.php";?> 
 <?php include "common/sidebar.php";?> 

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
/*/////////*/
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
    justify-content: space-between; /* Helps content stretch and space evenly */
    height: 100%;
}

/*///////*/

.services-img {
    width: 100%;
    height: 250px; /* or whatever height you need */
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
   <div class="main-overly"></div>
    <div class="intro-carousel">
        <div class="intro-content">
            <div class="slider-images">
                <img src="<?= base_url('assets/img/slider/s1.jpg') ?>" alt="">
            </div>
            <div class="slider-content">
                <div class="display-table">
                    <div class="display-table-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- layer 1 -->
                                    <div class="layer-1-2">
                                        <h1 class="title2">Welcome to SUJATHA GLOBAL</h1>
                                    </div>
                                    <div class="layer-1-1 ">
                                        <p>A trusted general trading company based in Tanzania, specializing in high-quality food crops and wood products. From fresh avocados and cold-pressed avocado oil to precision-cut eucalyptus veneer and pine timber, we ensure quality, sustainability, and timely delivery—every time.
                                        </p>
                                    </div>
                                    <!-- layer 3 -->
                                    <div class="layer-1-3">
                                        <a href="#" class="ready-btn left-btn" >Our Services</a>
                                        <a href="#" class="ready-btn right-btn">Contact us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="intro-content">
            <div class="slider-images">
                <img src="<?= base_url('assets/img/slider/s2.jpg') ?>" alt="">
            </div>
            <div class="slider-content">
                <div class="display-table">
                    <div class="display-table-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- layer 1 -->
                                    <div class="layer-1-2">
                                        <h1 class="title2">Another title comes here</h1>
                                    </div>
                                    <div class="layer-1-1 ">
                                        <p>Summary of above title not more than .. words, Summary of above title not more than .. words, Summary of above title not more than .. words, Summary of above title not more than .. words, Summary of above title not more than .. words, .</p>
                                    </div>
                                    <!-- layer 3 -->
                                    <div class="layer-1-3">
                                        <a href="#" class="ready-btn left-btn" >Our Services</a>
                                        <a href="#" class="ready-btn right-btn" >Contact us</a>
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
                <a href="#"><i class="flaticon" style="font-size: 40px;">&#x1F4B8;</i></a> <!-- Growth icon -->
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
                <a href="#"><i class="flaticon" style="font-size: 40px;">&#x23F3;</i></a> <!-- Clock icon -->
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
                <a href="#"><i class="flaticon" style="font-size: 40px;">&#x1F6E1;</i></a> <!-- Shield icon -->
            </div>
            <div class="well-content">
                <h4><a href="#">Integrity & Sustainability</a></h4>
                <p>We follow ethical sourcing, fair trade, and environmentally responsible business practices.</p>
            </div>
        </div>
    </div>
</div>





<!--                <div class="row">
                    <div class="well-inner">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="well-services">
                                <div class="well-icon">
                                    <a href="#"><i class="flaticon-gear-3" ></i></a>
                                </div>
                                <div class="well-content">
                                    <h4><a href="#">Mechanical <br>Engineering</a></h4>
                                    <p>Aspernatur sit adipisci quaerat unde at neque Redug Lagre dolor sit amet.</p>
                                </div>
                            </div>
                        </div> -->
                        <!-- single-well end-->
<!--                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="well-services">
                                <div class="well-icon">
                                    <a href="#"><i class="flaticon-industrial-robot" ></i></a>
                                </div>
                                <div class="well-content">
                                    <h4><a href="#">Automotive <br>Manufacturing</a></h4>
                                    <p>Aspernatur sit adipisci quaerat unde at neque Redug Lagre dolor sit amet.</p>
                                </div>
                            </div>
                        </div> -->
                        <!-- single-well end-->
<!--                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="well-services">
                                <div class="well-icon">
                                    <a href="#"><i class="flaticon-factory-1" ></i></a>
                                </div>
                                <div class="well-content">
                                    <h4><a href="#">Industrial <br>Construction</a></h4>
                                    <p>Aspernatur sit adipisci quaerat unde at neque Redug Lagre dolor sit amet.</p>
                                </div>
                            </div>
                        </div> -->
                        <!-- single-well end-->
<!--                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="well-services ">
                                <div class="well-icon">
                                    <a href="#"><i class="flaticon-tanks-1" ></i></a>
                                </div>
                                <div class="well-content">
                                    <h4><a href="#">Oil & Gas<br> fields</a></h4>
                                    <p>Aspernatur sit adipisci quaerat unde at neque Redug Lagre dolor sit amet.</p>
                                </div>
                            </div>
                        </div> -->
                        <!-- single-well end-->
<!--                    </div>
                </div> -->
            </div>
        </div>
        <!-- Welcome service area End -->
        <!-- Start About Area -->
<!--          <div class="video-area bg-color area-padding">
            <div class="container">
                <div class="row">
                   <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="video-inner text-center">
                            <div class="video-content">
                                <a href="https://www.youtube.com/watch?v=O33uuBh6nXA" class="video-play vid-zone">
                                <i class="fa fa-play"></i>
                            </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="video-text">
                           <h4>Watch our company programe video for future industry construction.</h4>
                            <p>
                                Redug Lares dolor sit amet, consectetur adipisicing elit. Animi vero excepturi magnam ducimus adipisci voluptas, praesentium maxime necessitatibus.ducimus adipisci voluptas, praesentium maxime necessitatibus.
                            </p>
                            <ul class="marker-list">
                                <li>Lares dolor sit amet.</li>
                                <li>Animi vero excepturi magnam.</li>
                                <li>ducimus adipisci voluptas.</li>
                                <li>consectetur adipisicing elit.</li>
                                <li>praesentium maxime necessitatibus.</li>
                            </ul>
                        </div>
                    </div>
                </div> -->
                <!-- end Row -->
<!--             </div>
        </div> -->
        <!-- End About Area -->
        <!-- Welcome service area start -->
        <div class="Services-area area-padding">
            <div class="container">
               <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-headline text-center">
                            <h3>Our Services</h3>
                            <p>We specialize in the sourcing, processing, and export of premium food and wood products across East Africa. Our logistics and customer support services ensure timely, reliable delivery to clients worldwide.</p>

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

        <!-- Export Logistics -->
<!--         <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="single-services text-center">
                <div class="services-img">
                    <img src="<?= base_url('assets/img/products/trans.jpg') ?>" alt="Export Logistics">
                    <div class="image-layer">
                        <a href="#"><i class="fas fa-shipping-fast"></i></a>
                    </div>
                </div>
                <div class="main-services">
                    <div class="service-content">
                        <h4>Export & Logistics</h4>
                        <p>End-to-end shipping solutions including FCL, LCL, road transport, and complete customs documentation.</p>
                        <a class="service-btn" href="#">read more</a>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- Quality Assurance -->
<!--         <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="single-services text-center">
                <div class="services-img">
                    <img src="<?= base_url('assets/img/service/quality.jpg') ?>" alt="Quality Assurance">
                    <div class="image-layer">
                        <a href="#"><i class="fas fa-clipboard-check"></i></a>
                    </div>
                </div>
                <div class="main-services">
                    <div class="service-content">
                        <h4>Quality Assurance</h4>
                        <p>Strict supplier audits, cold-chain handling, and lab testing ensure consistent product quality.</p>
                        <a class="service-btn" href="#">read more</a>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- Customer Support -->
<!--         <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="single-services text-center">
                <div class="services-img">
                    <img src="<?= base_url('assets/img/service/support.jpg') ?>" alt="Customer Support">
                    <div class="image-layer">
                        <a href="#"><i class="fas fa-headset"></i></a>
                    </div>
                </div>
                <div class="main-services">
                    <div class="service-content">
                        <h4>24/7 Customer Support</h4>
                        <p>Our team offers real-time order tracking and tailored support to ensure seamless service delivery.</p>
                        <a class="service-btn" href="#">read more</a>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
</div>



<!--                 <div class="row">
                    <div class="services-all">
                        < !-- single-well end-- >
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="single-services text-center">
                                <div class="services-img">
                                    <img src="<?= base_url('assets/img/service/1.jpg') ?>" alt="">
                                    <div class="image-layer">
                                        <a href="#"><i class="flaticon-gear-3" ></i></a>
                                    </div>
                                </div>
                                <div class="main-services">
                                    <div class="service-content">
                                        <h4>Mechanical Engineering</h4>
                                        <p>Aspernatur sit adipisci quaerat unde at neque Redug Lagre dolor sit amet consectetu.</p>
                                        <a class="service-btn" href="#">read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        < !-- single-well end-- >
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="single-services text-center">
                                <div class="services-img">
                                    <img src="<?= base_url('assets/img/service/2.jpg') ?>" alt="">
                                    <div class="image-layer">
                                        <a href="#"><i class="flaticon-industrial-robot" ></i></a>
                                    </div>
                                </div>
                                <div class="main-services">
                                    <div class="service-content">
                                        <h4>Automotive Manufacturing</h4>
                                        <p>Aspernatur sit adipisci quaerat unde at neque Redug Lagre dolor sit amet consectetu.</p>
                                        <a class="service-btn" href="#">read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        < !-- single-well end-- >
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="single-services text-center">
                                <div class="services-img">
                                    <img src="<?= base_url('assets/img/service/3.jpg') ?>" alt="">
                                    <div class="image-layer">
                                        <a href="#"><i class="flaticon-factory-1"></i></a>
                                    </div>
                                </div>
                                <div class="main-services">
                                    <div class="service-content">
                                        <h4>Construction Engineering </h4>
                                        <p>Aspernatur sit adipisci quaerat unde at neque Redug Lagre dolor sit amet consectetu.</p>
                                        <a class="service-btn" href="#">read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        < !-- single-well end-- >
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="single-services text-center">
                                <div class="services-img">
                                    <img src="<?= base_url('assets/img/service/4.jpg') ?>" alt="">
                                    <div class="image-layer">
                                        <a href="#"><i class="flaticon-warehouse" ></i></a>
                                    </div>
                                </div>
                                <div class="main-services">
                                    <div class="service-content">
                                        <h4>Agricultural Engineering</h4>
                                        <p>Aspernatur sit adipisci quaerat unde at neque Redug Lagre dolor sit amet consectetu.</p>
                                        <a class="service-btn" href="#">read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        < !-- single-well end-- >
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="single-services text-center">
                                <div class="services-img">
                                    <img src="<?= base_url('assets/img/service/5.jpg') ?>" alt="">
                                    <div class="image-layer">
                                        <a href="#"><i class="flaticon-control-system" ></i></a>
                                    </div>
                                </div>
                                <div class="main-services">
                                    <div class="service-content">
                                        <h4>Solar Energy System</h4>
                                        <p>Aspernatur sit adipisci quaerat unde at neque Redug Lagre dolor sit amet consectetu.</p>
                                        <a class="service-btn" href="#">read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        < !-- single-well end-- >
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="single-services text-center">
                                <div class="services-img">
                                    <img src="<?= base_url('assets/img/service/6.jpg') ?>" alt="">
                                    <div class="image-layer">
                                        <a href="#"><i class="flaticon-tanks-1" ></i></a>
                                    </div>
                                </div>
                                <div class="main-services">
                                    <div class="service-content">
                                        <h4>Oil & gas Fields</h4>
                                        <p>Aspernatur sit adipisci quaerat unde at neque Redug Lagre dolor sit amet consectetu.</p>
                                        <a class="service-btn" href="#">read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        < !-- single-well end-- >
                    </div>
                </div> -->
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
                        <!-- fun_text  -->
                        <div class="col-md-3 col-sm-3 col-xs-6">
                            <div class="fun_text">
                                <span class="counter">10050</span>
                                <h5>Latest projects</h5>
                            </div>
                        </div>
                        <!-- fun_text  -->
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
                <!-- end Row -->
            </div>
        </div>
        <!-- End Counter Area -->
        <!-- Start project Area -->
        <div class="project-area area-padding fix">
            <div class="container-full">
               <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-headline text-center">
<h3>Our Projects</h3>
<p>We are proud to support food security and sustainable development through agricultural and wood product trade across East Africa. From crop sourcing to timber exports, our projects deliver value to farmers, partners, and communities.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="project-content project-content-4">
                        <!-- single-awesome-project start -->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="single-awesome-project">
                                <div class="awesome-img">
                                    <a href="#">
                                        <img src="<?= base_url('assets/img/project/p1.jpg') ?>" alt="" />
                                    </a>
                                    <div class="add-actions">
                                        <a class="venobox" data-gall="myGallery" href="<?= base_url('assets/img/project/p1.jpg') ?>">
                                            <i class="port-icon icon icon-picture"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="project-dec">
                                    <h4><a href="#">Industry Construction</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <!-- single-awesome-project start -->
                            <div class="single-awesome-project">
                                <div class="awesome-img">
                                    <a href="#">
                                        <img src="<?= base_url('assets/img/project/p2.jpg') ?>" alt="" />
                                    </a>
                                    <div class="add-actions">
                                        <a class="venobox" data-gall="myGallery" href="<?= base_url('assets/img/project/p2.jpg') ?>">
                                            <i class="port-icon icon icon-picture"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="project-dec">
                                    <h4><a href="#">Automotive manufacturing</a></h4>
                                </div>
                            </div>
                            <!-- single-awesome-project end -->
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <!-- single-awesome-project start -->
                            <div class="single-awesome-project">
                                <div class="awesome-img">
                                    <a href="#">
                                        <img src="<?= base_url('assets/img/project/p3.jpg') ?>" alt="" />
                                    </a>
                                    <div class="add-actions ">
                                        <a class="venobox" data-gall="myGallery" href="<?= base_url('assets/img/project/p3.jpg') ?>">
                                            <i class="port-icon icon icon-picture"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="project-dec">
                                    <h4><a href="#">Solar Energy System</a></h4>
                                </div>
                            </div>
                            <!-- single-awesome-project end -->
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <!-- single-awesome-project start -->
                            <div class="single-awesome-project">
                                <div class="awesome-img">
                                    <a href="#">
                                        <img src="<?= base_url('assets/img/project/p4.jpg') ?>" alt="" />
                                    </a>
                                    <div class="add-actions">
                                        <a class="venobox" data-gall="myGallery" href="<?= base_url('assets/img/project/p4.jpg') ?>">
                                            <i class="port-icon icon icon-picture"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="project-dec">
                                    <h4><a href="#">Agricultural Projects</a></h4>
                                </div>
                            </div>
                            <!-- single-awesome-project end -->
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <!-- single-awesome-project start -->
                            <div class="single-awesome-project">
                                <div class="awesome-img">
                                    <a href="#">
                                        <img src="<?= base_url('assets/img/project/p5.jpg') ?>" alt="" />
                                    </a>
                                    <div class="add-actions">
                                        <a class="venobox" data-gall="myGallery" href="<?= base_url('assets/img/project/p5.jpg') ?>">
                                            <i class="port-icon icon icon-picture"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="project-dec">
                                    <h4><a href="#">Oil fields Projects</a></h4>
                                </div>
                            </div>
                            <!-- single-awesome-project end -->
                        </div>
                       <div class="col-md-4 col-sm-6 col-xs-12">
                            <!-- single-awesome-project start -->
                            <div class="single-awesome-project">
                                <div class="awesome-img">
                                    <a href="#">
                                        <img src="<?= base_url('assets/img/project/p6.jpg') ?>" alt="" />
                                    </a>
                                    <div class="add-actions">
                                        <a class="venobox" data-gall="myGallery" href="<?= base_url('assets/img/project/p6.jpg') ?>">
                                            <i class="port-icon icon icon-picture"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="project-dec">
                                    <h4><a href="#">Chamical Projects</a></h4>
                                </div>
                            </div>
                            <!-- single-awesome-project end -->
                        </div>
                    </div>      
                </div>  
            </div>
            <!-- End main content -->
        </div>
        <!-- End project Area -->
        <!-- Start Quote Area -->
        <div class="quote-area area-padding">
            <div class="container ">
                <div class="row">
                    <div class="col-md-12 col-sm-12 ">
                        <div class="row ">
                            <div class="col-md-4 col-sm-4 col-xs-12">
<div class="sub-head">
    <h4>Request a <span class="color">Call Back</span></h4>
    <p>Have questions about our products, services, or export process? Leave your details and one of our specialists will get in touch shortly to assist you.</p>
</div>
                            </div>
                            <div class="col-md-8 col-sm-8 col-xs-12">
                                <div class="row">
                                    <form id="contactForm" method="POST" action="http://rockstheme.com/rocks/tionscal-previews/contact.php" class="contact-form">
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" id="name" class="form-control" placeholder="Name" required data-error="Please enter your name">
                                            <div class="help-block with-errors"></div>
                                            <input type="email" class="email form-control" id="email" placeholder="Email" required data-error="Please enter your email">
                                            <div class="help-block with-errors"></div>
                                            <input type="text" id="msg_subject" class="form-control last-part" placeholder="Subject" required data-error="Please enter your message subject">
                                            <div class="help-block with-errors last-part"></div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <textarea id="message" rows="7" placeholder="Massage" class="form-control" required data-error="Write your message"></textarea>
                                            <div class="help-block with-errors"></div>
                                            <button type="submit" id="submit" class="quote-btn">Submit</button>
                                            <div id="msgSubmit" class="h3 text-center hidden"></div> 
                                            <div class="clearfix"></div>
                                        </div>   
                                    </form>
                                </div> 
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Quote -->
        <!--Blog Area Start-->
        <div class="blog-area area-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-headline text-center">
<h3>Latest News</h3>
<p>Explore the latest market trends, export milestones, and innovations driving SUJATHA GLOBAL COMPANY LIMITED’s growth and commitment to quality.</p>
                        </div>
                    </div>
                </div>



<div class="row">
    <div class="blog-grid home-blog">
        <!-- Start single blog -->
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="single-blog">
                <div class="blog-image">
                    <a class="image-scale" href="#">
                        <img src="<?= base_url('assets/img/blog/b1.jpg') ?>" alt="Avocado Export Success">
                    </a>
                </div>
                <div class="blog-content">
                    <div class="blog-title">
                        <div class="blog-meta">
                            <span class="date-type">15 August</span>
                        </div>
                        <a href="#">
                            <h4>Record Avocado Export Volume in 2025</h4>
                        </a>
                    </div>
                    <div class="blog-text">
                        <p>SUJATHA GLOBAL celebrates a new milestone by exporting a record volume of premium-grade avocados to East African markets, boosting local farmers’ income.</p>
                        <a class="blog-btn" href="#">Read more</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End single blog -->

        <!-- Start single blog -->
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="single-blog">
                <div class="blog-image">
                    <a class="image-scale" href="#">
                        <img src="<?= base_url('assets/img/blog/b2.jpg') ?>" alt="Sustainability Initiatives">
                    </a>
                </div>
                <div class="blog-content">
                    <div class="blog-title">
                        <div class="blog-meta">
                            <span class="date-type">02 July</span>
                        </div>
                        <a href="#">
                            <h4>Advancing Sustainable Sourcing Practices</h4>
                        </a>
                    </div>
                    <div class="blog-text">
                        <p>Committed to environmental stewardship, SUJATHA GLOBAL rolls out new sustainable sourcing initiatives for eucalyptus veneer and pine timber products.</p>
                        <a class="blog-btn" href="#">Read more</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End single blog -->

        <!-- Start single blog -->
        <div class="col-md-4 col-sm-12 col-xs-12">
            <div class="single-blog">
                <div class="blog-image">
                    <a class="image-scale" href="#">
                        <img src="<?= base_url('assets/img/blog/b3.jpg') ?>" alt="Cold Chain Innovation">
                    </a>
                </div>
                <div class="blog-content">
                    <div class="blog-title">
                        <div class="blog-meta">
                            <span class="date-type">10 June</span>
                        </div>
                        <a href="#">
                            <h4>Enhancing Cold Chain Logistics for Avocado Oil</h4>
                        </a>
                    </div>
                    <div class="blog-text">
                        <p>Innovations in cold-chain management have improved freshness and shelf life for our cold-pressed avocado oil, expanding market reach across East Africa.</p>
                        <a class="blog-btn" href="#">Read more</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End single blog -->
    </div>
</div>


<!--                 <div class="row">
                    <div class="blog-grid home-blog">
                        < !-- Start single blog -- >
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="single-blog">
                                <div class="blog-image">
                                    <a class="image-scale" href="#">
                                        <img src="<?= base_url('assets/img/blog/b1.jpg') ?>" alt="">
                                    </a>
                                </div>
                                <div class="blog-content">
                                   <div class="blog-title">
                                       <div class="blog-meta">
                                            <span class="date-type">
                                                20 june
                                            </span>
                                        </div>
                                        <a href="#">
                                            <h4>Esse est assumenda inventore.</h4>
                                        </a>
                                    </div>
                                    <div class="blog-text">
                                        <p>Redug Lagre dolor sit amet, consectetur adipisicing elit. Minima in nostrum, veniam. Esse est assumenda inventore.</p>
                                        <a class="blog-btn" href="#">Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        < !-- End single blog -- >
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="single-blog">
                                <div class="blog-image">
                                    <a class="image-scale" href="#">
                                        <img src="<?= base_url('assets/img/blog/b2.jpg') ?>" alt="">
                                    </a>
                                </div>
                                <div class="blog-content">
                                   <div class="blog-title">
                                       <div class="blog-meta">
                                            <span class="date-type">
                                                20 jan
                                            </span>
                                        </div>
                                        <a href="#">
                                            <h4>Consectetur adipisicing elit</h4>
                                        </a>
                                    </div>
                                    <div class="blog-text">
                                        <p>Redug Lagre dolor sit amet, consectetur adipisicing elit. Minima in nostrum, veniam. Esse est assumenda inventore.</p>
                                        <a class="blog-btn" href="#">Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        < !-- End single blog -- >
                        <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="single-blog">
                                <div class="blog-image">
                                    <a class="image-scale" href="#">
                                        <img src="<?= base_url('assets/img/blog/b3.jpg') ?>" alt="">
                                    </a>
                                </div>
                                <div class="blog-content">
                                   <div class="blog-title">
                                       <div class="blog-meta">
                                            <span class="date-type">
                                                20 may
                                            </span>
                                        </div>
                                        <a href="#">
                                            <h4>Esse est assumenda inventore.</h4>
                                        </a>
                                    </div>
                                    <div class="blog-text">
                                        <p>Redug Lagre dolor sit amet, consectetur adipisicing elit. Minima in nostrum, veniam. Esse est assumenda inventore.</p>
                                        <a class="blog-btn" href="#">Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        < !-- End single blog -- >
                    </div>
                </div> -->
                <!-- End row -->
            </div>
        </div>
        <!--End of Blog Area-->
        <!-- Start Brand Area -->
        <div class="brand-area bg-color area-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="brand-items">
                            <div class="brand-carousel item-indicator">
                                <div class="single-brand-item">
                                    <a href="#"><img src="<?= base_url('assets/img/brand/1.jpg') ?>" alt=""></a>
                                </div>
                                <div class="single-brand-item">
                                    <a href="#"><img src="<?= base_url('assets/img/brand/2.jpg') ?>" alt=""></a>
                                </div>
                                <div class="single-brand-item">
                                    <a href="#"><img src="<?= base_url('assets/img/brand/3.jpg') ?>" alt=""></a>
                                </div>
                                <div class="single-brand-item">
                                    <a href="#"><img src="<?= base_url('assets/img/brand/4.jpg') ?>" alt=""></a>
                                </div>
                                <div class="single-brand-item">
                                    <a href="#"><img src="<?= base_url('assets/img/brand/5.jpg') ?>" alt=""></a>
                                </div>
                                <div class="single-brand-item">
                                    <a href="#"><img src="<?= base_url('assets/img/brand/6.jpg') ?>" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end Brand Area -->
        <!-- Start Banner Area -->
        <div class="banner-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="banner-content text-left">
<h4>Looking for Professional Trading and Supply Services? Partner with SUJATHA GLOBAL.</h4>
                            <div class="banner-contact-btn">
                                <a class="banner-btn" href="#">Contact us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Banner Area -->
        <!-- Start Footer bottom Area -->
 <?php include "common/footer.php"; ?> 

