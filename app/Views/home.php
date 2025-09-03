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

/* Remove slider shadow overlay */
.intro-content::after {
    display: none !important;
    background: transparent !important;
}

/* Ensure image fills the container */
.slider-images img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    position: relative;
    z-index: 0;
}

/* Keep text on top */
.slider-content {
    position: absolute;
    top: 50%;
    left: 0;
    right: 0;
    text-align: left;
    z-index: 2;
    margin: 0 auto;
    margin-top: -160px;
}

.slider-images img {
    height: 550px;   /* adjust to your desired height */
    width: auto;     /* keeps aspect ratio */
    object-fit: cover; /* optional: crop image to fit */
}

.slider-content .layer-1-1 p {
  color: #fff;
  background: rgba(0, 128, 0, 0.4); /* green tint */
  backdrop-filter: blur(8px);        /* blur effect */
  -webkit-backdrop-filter: blur(8px); /* Safari support */
  padding: 15px 20px;
  border-radius: 10px;
  display: inline-block;
}

.title2{
  color: black !important;
}
</style>

<!-- Start Slider Area -->
<div class="intro-area intro-area-4">
    <div class="intro-carousel">
        <div class="intro-content">
            <div class="slider-images mx-4">
                <img src="<?= base_url('assets/img/slider/S1.jpg') ?>" alt="">
            </div>
            <div class="slider-content bg-transparent">
                <div class="display-table">
                    <div class="display-table-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="layer-1-2">
                                        <h1 class="title3">Welcome to SUJATHA GLOBAL</h1>
                                    </div>
                                    <div class="layer-1-1 color-black">
                                        <p>
                                            A trusted general trading company based in Tanzania, we specialize in premium food crops and wood products. Our fresh avocados from East Africa and beyond are rich, creamy, and nutritious, complemented by high-quality cold-pressed avocado oil. Alongside precision-cut pine timber and eucalyptus veneer, we ensure quality, sustainability, and timely delivery every time.
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

        <div class="intro-content">
            <div class="slider-images">
                <img src="<?= base_url('assets/img/slider/maize.jpg') ?>" alt="">
            </div>
            <div class="slider-content">
                <div class="display-table">
                    <div class="display-table-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="layer-1-2">
                                        <h1 class="title2">Maize (White and Yellow Kernels)</h1>
                                    </div>
                                    <div class="layer-1-1">
                                        <p>We provide premium white and yellow maize kernels sourced from trusted farms across East Africa and beyond. Clean, well-dried, and carefully graded for consistency, our maize is ideal for food processing, animal feed, and export. Available in bulk or custom packaging to suit various market need</p>
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
        <div class="intro-content">
            <div class="slider-images">
                <img src="<?= base_url('assets/img/slider/rice.jpeg') ?>" alt="">
            </div>
            <div class="slider-content">
                <div class="display-table">
                    <div class="display-table-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="layer-1-2">
                                        <h1 class="title2">Rice (Long and Medium Grains)</h1>
                                    </div>
                                    <div class="layer-1-1">
                                        <p>We stock premium long and medium grain rice sourced from trusted farms across East Africa and beyond. Our rice is carefully milled and polished to ensure excellent texture, aroma, and cooking quality. Suitable for both retail and bulk buyers, it meets strict quality standards and is available in customizable packaging to fit diverse market needs.</p>
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
        <div class="intro-content">
            <div class="slider-images">
                <img src="<?= base_url('assets/img/slider/pigeonbeans.jpg') ?>" alt="">
            </div>
            <div class="slider-content">
                <div class="display-table">
                    <div class="display-table-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="layer-1-2">
                                        <h1 class="title2">Pigeon Beans</h1>
                                    </div>
                                    <div class="layer-1-1">
                                        <p>Naturally rich in protein, fiber, and essential minerals, pigeon beans are a nutritious staple used in traditional and modern diets. Carefully cleaned, sorted, and graded to meet food safety standards, they are ideal for food processors, retailers, and export markets. Available in bulk or customized packaging to suit your needs</p>
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
        <div class="intro-content">
            <div class="slider-images">
                <img src="<?= base_url('assets/img/slider/soybeans.jpg') ?>" alt="">
            </div>
            <div class="slider-content">
                <div class="display-table">
                    <div class="display-table-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="layer-1-2">
                                        <h1 class="title2">Soybeans</h1>
                                    </div>
                                    <div class="layer-1-1">
                                        <p>East Africa and beyond we supply high-quality non-GMO soybeans sourced from trusted farms. Rich in protein, fiber, and essential nutrients, our soybeans support heart health, aid digestion, and serve as a valuable plant-based protein source. Carefully cleaned, graded, and suitable for both food and feed applications, they are ideal for processors, exporters, and health-conscious markets. Available in bulk or custom packaging to meet diverse customer requirements.</p>
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
        <div class="intro-content">
            <div class="slider-images">
                <img src="<?= base_url('assets/img/slider/S2.jpg') ?>" alt="">
            </div>
            <div class="slider-content">
                <div class="display-table">
                    <div class="display-table-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="layer-1-2">
                                        <h1 class="title2">Pine Timber</h1>
                                    </div>
                                    <div class="layer-1-1">
                                        <p>We offer top-grade pine wood, carefully kiln-dried and processed to ensure strength, durability, and dimensional stability. Harvested from sustainably managed forests in East Africa and beyond, our pine is ideal for structural framing, furniture production, interior finishes, and general woodworking. Available in various cuts, sizes, and finishes to meet specific customer needs, with consistent quality and reliable supply.</p>
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
        <div class="intro-content">
            <div class="slider-images">
                <img src="<?= base_url('assets/img/slider/plywood.jpg') ?>" alt="">
            </div>
            <div class="slider-content">
                <div class="display-table">
                    <div class="display-table-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="layer-1-2">
                                        <h1 class="title2">PlyWood</h1>
                                    </div>
                                    <div class="layer-1-1">
                                        <p>High-quality plywood made from carefully selected hardwood and softwood veneers, bonded with durable adhesives for strength and stability. Ideal for construction, furniture, cabinetry, and interior applications, our plywood is precision-manufactured to meet industry standards. Sourced from sustainable East African forests and available in various thicknesses, grades, and custom sizes to suit your specific project requirements.</p>
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
            <div class="col-md-12 text-center">
                <div class="section-headline">
                    <h3>Our Core Values</h3>
                </div>
            </div>
        </div>

        <div class="row equal-height-row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="well well-services">
                    <div class="well-icon">
                        <a href="#"><i class="flaticon" style="font-size: 40px;">&#x2714;</i></a>
                    </div>
                    <div class="well-content">
                        <h4><a href="#">Quality First: Uncompromising Excellence</a></h4> <p>We believe that true wellness begins with integrity. That’s why we rigorously select and inspect every ingredient and product, ensuring not just freshness and purity, but also superior performance you can trust. Your health is our highest standard.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="well well-services">
                    <div class="well-icon">
                        <a href="#"><i class="flaticon" style="font-size: 40px;">&#x1F4B8;</i></a>
                    </div>
                    <div class="well-content">
                        <h4><a href="#">Value Creation: Smart Savings</a></h4> <p>We believe that premium quality should be within reach. Our strategic procurement and efficient logistics are designed to eliminate unnecessary expenses, passing genuine cost savings on to you without any compromise on our standards.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="well well-services">
                    <div class="well-icon">
                        <a href="#"><i class="flaticon" style="font-size: 40px;">&#x23F3;</i></a>
                    </div>
                    <div class="well-content">
                        <h4><a href="#">Reliable Service: Consistent & Trustworthy</a></h4> <p>We believe that your peace of mind is paramount. Our commitment to meticulous planning and proactive updates guarantees on-time deliveries and clear, transparent communication throughout every step of your journey with us.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="well well-services">
                    <div class="well-icon">
                        <a href="#"><i class="flaticon" style="font-size: 40px;">&#x1F6E1;</i></a>
                    </div>
                    <div class="well-content">
                        <h4><a href="#">Integrity & Sustainability: Our Core Promise</a></h4> <p>We believe in a healthier planet and equitable communities. Our commitment to ethical sourcing, fair trade partnerships, and environmentally responsible practices ensures that your choices support a more sustainable future for all.</p>
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

                <!--  avocado -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-services text-left">
                        <div class="services-img">
                            <img src="<?= base_url('assets/img/products/avocado.jpg') ?>" alt="Agricultural Products">
                            <div class="image-layer">
                                <a href="#"><i class="fas fa-seedling"></i></a>
                            </div>
                        </div>
                        <div class="main-services">
                            <div class="service-content">
                                <h4>Fresh Avocado</h4>
                                <p>Sourced from trusted farms in Tanzania, our variety-graded fresh avocados are packed with heart-healthy fats and fiber. Carefully handled through our cold-chain logistics, they retain peak freshness—ready for export in custom packaging for retail or wholesale clients.</p>
                                <a class="service-btn" href="#">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  avocado oil-->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-services text-left">
                        <div class="services-img">
                            <img src="<?= base_url('assets/img/products/avocadooil.jpeg') ?>" alt="Agricultural Products">
                            <div class="image-layer">
                                <a href="#"><i class="fas fa-seedling"></i></a>
                            </div>
                        </div>
                        <div class="main-services">
                            <div class="service-content">
                                <h4>Avocado Oil</h4>
                                <p>Our cold-pressed avocado oil is rich in vitamin E and oleic acid, promoting skin, heart, and immune health. Produced under hygienic conditions and packaged to international food-grade standards, it's perfect for health-conscious distributors and specialty markets.</p>
                                <a class="service-btn" href="#">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- pigeonbeans -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-services text-left">
                        <div class="services-img">
                            <img src="<?= base_url('assets/img/products/pigeonbeans.jpg') ?>" alt="Wood Products">
                            <div class="image-layer">
                                <a href="#"><i class="fas fa-tree"></i></a>
                            </div>
                        </div>
                        <div class="main-services">
                            <div class="service-content">
                                <h4>Pigeon Peas (Pigeon Beans)</h4> <p>High in protein and iron, our pigeon peas support muscle growth and healthy blood flow. We aggregate from select East African growers, grade by quality, and deliver in bulk or branded packs with complete export documentation and reliability.</p>
                                <a class="service-btn" href="#">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- soybeans  -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-services text-left">
                        <div class="services-img">
                            <img src="<?= base_url('assets/img/products/soybeans.jpg') ?>" alt="Wood Products">
                            <div class="image-layer">
                                <a href="#"><i class="fas fa-tree"></i></a>
                            </div>
                        </div>
                        <div class="main-services">
                            <div class="service-content">
                                <h4>Soybeans</h4>
                                <p>Our non-GMO soybeans offer essential amino acids, fiber, and omega-3s. Whether feed-grade or food-grade, we provide certified, lab-tested batches—cleaned, sorted, and packaged per client specifications for domestic processing or export to international buyers.</p>
                                <a class="service-btn" href="#">read more</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- KidneyBeans  -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-services text-left">
                        <div class="services-img">
                            <img src="<?= base_url('assets/img/products/KidneyBeans.jpeg') ?>" alt="Avocado Oil">
                            <div class="image-layer">
                                <a href="#"><i class="fas fa-oil-can"></i></a>
                            </div>
                        </div>
                        <div class="main-services">
                            <div class="service-content">
                                <h4>Kidney Beans (Red & Yellow)</h4>
                                <p>Loaded with plant protein and potassium, our kidney beans support energy and blood pressure balance. We source ethically, inspect for consistency, and offer custom packing for regional and overseas markets, ensuring freshness and trade compliance.</p>
                                <a class="service-btn" href="#">read more</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Cloves  -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-services text-left">
                        <div class="services-img">
                            <img src="<?= base_url('assets/img/products/cloves.jpeg') ?>" alt="Avocado Oil">
                            <div class="image-layer">
                                <a href="#"><i class="fas fa-oil-can"></i></a>
                            </div>
                        </div>
                        <div class="main-services">
                            <div class="service-content">
                                <h4>Cloves</h4>
                                <p>Our Tanzanian cloves are rich in eugenol, offering powerful anti-inflammatory and antimicrobial benefits. Carefully sun-dried and sorted for export, they support digestion and oral health. We provide bulk or branded packaging with full export compliance and quality assurance.</p>
                                <a class="service-btn" href="#">read more</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Cardamom  -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-services text-left">
                        <div class="services-img">
                            <img src="<?= base_url('assets/img/products/Cardamom.jpeg') ?>" alt="Avocado Oil">
                            <div class="image-layer">
                                <a href="#"><i class="fas fa-oil-can"></i></a>
                            </div>
                        </div>
                        <div class="main-services">
                            <div class="service-content">
                                <h4>Cardamom</h4>
                                <p>Cardamom seeds aid in detoxification, enhance respiratory function, and help regulate blood pressure. Sourced from fertile highlands, we process and pack them hygienically for global spice markets, offering tailored packaging and reliable logistics for B2B customers worldwide.</p>
                                <a class="service-btn" href="#">read more</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Mbeya Rice -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-services text-left">
                        <div class="services-img">
                            <img src="<?= base_url('assets/img/products/rice.jpeg') ?>" alt="Wood Products">
                            <div class="image-layer">
                                <a href="#"><i class="fas fa-tree"></i></a>
                            </div>
                        </div>
                        <div class="main-services">
                            <div class="service-content">
                                <h4>Mbeya Rice</h4> <p>Grown in the rich highlands of Mbeya, this rice is energy-boosting and nutrient-dense. Available in long-grain and parboiled varieties, we mill and pack to export standards, delivering consistent quality and traceability for global distributors and wholesalers.</p>
                                <a class="service-btn" href="#">read more</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- maize  -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-services text-left">
                        <div class="services-img">
                            <img src="<?= base_url('assets/img/products/maize.jpg') ?>" alt="Avocado Oil">
                            <div class="image-layer">
                                <a href="#"><i class="fas fa-oil-can"></i></a>
                            </div>
                        </div>
                        <div class="main-services">
                            <div class="service-content">
                                <h4>Maize(white and yellow kernels)</h4>
                                <p>High-quality white and yellow maize from trusted farms in East Africa and beyond. Clean, well-dried, carefully graded for consistency and purity, ideal for food processing, animal feed, and export. Available in bulk or custom packaging.</p>
                                <a class="service-btn" href="#">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Cashewnuts  -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-services text-left">
                        <div class="services-img">
                            <img src="<?= base_url('assets/img/products/Cashewnuts.jpeg') ?>" alt="Wood Products">
                            <div class="image-layer">
                                <a href="#"><i class="fas fa-tree"></i></a>
                            </div>
                        </div>
                        <div class="main-services">
                            <div class="service-content">
                                <<h4>Cashew Nuts</h4> <p>Cashews offer magnesium, good fats, and antioxidants that promote brain and heart health. We supply export-quality nuts that are sorted, sun-dried, and custom-packaged—ready for snack companies, retailers, and global food processors seeking premium Tanzanian dry fruits.</p>
                                <a class="service-btn" href="#">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Pine timber -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-services text-left">
                        <div class="services-img">
                            <img src="<?= base_url('assets/img/products/timber.jpg') ?>" alt="Wood Products">
                            <div class="image-layer">
                                <a href="#"><i class="fas fa-tree"></i></a>
                            </div>
                        </div>
                        <div class="main-services">
                            <div class="service-content">
                                <h4>Pine Timber</h4>
                                <p>We supply kiln-dried pine timber with excellent durability and finish for construction and furniture. Responsibly harvested and graded, our timber meets sustainable forestry standards and is shipped with professional documentation and customizable quantities for bulk clients.</p>
                                <a class="service-btn" href="#">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!---Teakwood  -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-services text-left">
                        <div class="services-img">
                            <img src="<?= base_url('assets/img/products/teakwood.jpeg') ?>" alt="Wood Products">
                            <div class="image-layer">
                                <a href="#"><i class="fas fa-tree"></i></a>
                            </div>
                        </div>
                        <div class="main-services">
                            <div class="service-content">
                                <h4>Teak wood</h4>
                               <p>Our Tanzanian teak resists weather and pests—ideal for outdoor furniture and high-end construction. Precision cut and sustainably sourced, we ship in custom dimensions with full quality certification and export readiness.</p>
                                <a class="service-btn" href="#">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Ply wood  -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-services text-left">
                        <div class="services-img">
                            <img src="<?= base_url('assets/img/products/plywood.jpg') ?>" alt="Wood Products">
                            <div class="image-layer">
                                <a href="#"><i class="fas fa-tree"></i></a>
                            </div>
                        </div>
                        <div class="main-services">
                            <div class="service-content">
                                <h4>Ply-wood</h4>
                               <p>High-quality plywood in various grades and thicknesses, sourced from trusted mills. Engineered for strength, durability, and smooth finishes, ideal for construction, furniture-making, and interior projects. Available in full or custom-cut sizes.</p>
                                <a class="service-btn" href="#">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- eucalyptusvenner -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-services text-left">
                        <div class="services-img">
                            <img src="<?= base_url('assets/img/products/eucalyptusvenner.jpeg') ?>" alt="Wood Products">
                            <div class="image-layer">
                                <a href="#"><i class="fas fa-tree"></i></a>
                            </div>
                        </div>
                        <div class="main-services">
                            <div class="service-content">
                                <h4>Eucalyptus Veneer</h4> <p>Premium eucalyptus veneer, expertly sliced for consistent grain patterns and natural durability. Sourced from sustainably managed plantations and ideal for high-end furniture, cabinetry, interior décor, and architectural finishes. Available in various cuts, grades, and custom sizes.</p>
                                <a class="service-btn" href="#">read more</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Cashewnuts  -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-services text-left">
                        <div class="services-img">
                            <img src="<?= base_url('assets/img/products/Cashewnuts.jpeg') ?>" alt="Wood Products">
                            <div class="image-layer">
                                <a href="#"><i class="fas fa-tree"></i></a>
                            </div>
                        </div>
                        <div class="main-services">
                            <div class="service-content">
                                <h4>Cashew Nuts</h4> <p>Cashews offer magnesium, good fats, and antioxidants that promote brain and heart health. We supply export-quality nuts that are sorted, sun-dried, and custom-packaged—ready for snack companies, retailers, and global food processors seeking premium Tanzanian dry fruits.</p>
                                <a class="service-btn" href="#">read more</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Coffee  -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-services text-left">
                        <div class="services-img">
                            <img src="<?= base_url('assets/img/products/Coffee.jpeg') ?>" alt="Wood Products">
                            <div class="image-layer">
                                <a href="#"><i class="fas fa-tree"></i></a>
                            </div>
                        </div>
                        <div class="main-services">
                            <div class="service-content">
                                <h4>African Coffee Powder</h4> <p>Finely ground and flavor-rich, our African coffee powder is sourced from high-altitude farms and packed for freshness. Rich in antioxidants and caffeine, it boosts mental alertness, metabolism, and mood—ideal for cafes, retailers, or personal enjoyment.</p>
                                <a class="service-btn" href="#">read more</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- seashells  -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-services text-left">
                        <div class="services-img">
                            <img src="<?= base_url('assets/img/products/seashells.jpeg') ?>" alt="Wood Products">
                            <div class="image-layer">
                                <a href="#"><i class="fas fa-tree"></i></a>
                            </div>
                        </div>
                        <div class="main-services">
                            <div class="service-content">
                                <h4>Sea shells</h4> <p>We supply naturally collected, cleaned, and sorted sea shells for decorative and craft use. Ideal for export and retail, these shells are valued for interior design, jewelry, and landscaping—adding natural beauty and eco-conscious elegance to any space.</p>
                                <a class="service-btn" href="#">read more</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- pineresin  -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-services text-left">
                        <div class="services-img">
                            <img src="<?= base_url('assets/img/products/pineresin.jpeg') ?>" alt="Wood Products">
                            <div class="image-layer">
                                <a href="#"><i class="fas fa-tree"></i></a>
                            </div>
                        </div>
                        <div class="main-services">
                            <div class="service-content">
                                <h4>Pine Resin</h4> <p>Harvested sustainably and processed to industrial standards, our pine resin is packed securely for shipping. Widely used in adhesives, varnishes, and aromatherapy, it’s valued for its antiseptic properties and its role in wellness and industrial applications alike.</p>
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

<?php include "common/footer.php"; ?>
