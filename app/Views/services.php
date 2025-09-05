 <?php include "common/header.php";?> 
 <?php include "common/sidebar.php";?> 

 <style>
.services-img img {
        width: 300px;
        height: 200px;
        object-fit: cover; /* optional: crop if aspect ratio doesn't match */
}

.hide-specific,
.hide-main {
    transition: all 0.6s ease-in-out;
}
/* Section background + spacing */
.hide-specific.bg-color.area-padding {
  background: #f7f9fc;
  padding: clamp(24px, 4vw, 56px) 0;
}

/* Limit container width */
.hide-specific .container {
  max-width: 980px;
}

/* Block wrapper: clearfix for floated image */
.img-text-block::after {
  content: "";
  display: table;
  clear: both;
}

/* Image on the left */
.img-text-block img {
  float: left;
  max-width: 320px;          /* adjust as needed */
  margin: 0 20px 12px 0;     /* space to the right and bottom */
  border-radius: 12px;
  object-fit: cover;
}

/* Heading + paragraph style */
.img-text-block h4 {
  margin-top: 0;
  font-weight: 700;
  margin-bottom: 12px;
}

.img-text-block p {
  line-height: 1.7;
  color: #374151;
  font-size: 1.5rem;
  margin-bottom: 12px;
}

/* Responsive: stack image above text on small screens */
@media (max-width: 767.98px) {
  .img-text-block img {
    float: none;
    display: block;
    margin: 0 auto 16px auto; /* center image on mobile */
    max-width: 100%;
  }
}
</style>

        <!-- Start breadcumb Area -->
        <div class="page-area">
            <div class="breadcumb-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcrumb text-center">
                            <div class="section-headline white-headline text-center">
                                <h3>Our Services</h3>
                            </div>
                            <ul>
                                <li class="home-bread">Home</li>
                                <li>Services</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End breadcumb Area -->

    <div class="hide-main">    
        <!-- Welcome service area start -->
        <div class="welcome-area bg-color area-padding">
            <div class="container">
               <div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="center-headline text-center">
						    <h3>“We source, process, and supply premium products globally — backed by trusted logistics, expert handling, and customer-first service.”<span class="color"></span></h3>
						</div>
					</div>
				</div>
				<!-- single-well end-->
				<div class="row">
					<div class="well-inner">
						<div class="col-md-3 col-sm-6 col-xs-12">
							<div class="well-services">
								<div class="well-content">
									<h4><a href="#">End-to-End Sourcing & Export:</a></h4>
									<p>We source premium agricultural and wood products across East Africa, ensuring consistent quality, availability, and competitive pricing for global markets.</p>
								</div>
							</div>
						</div>
						<!-- single-well end-->
						<div class="col-md-3 col-sm-6 col-xs-12">
							<div class="well-services">
								<div class="well-content">
									<h4><a href="#">Flexible Logistics & Cold Chain Solutions: </a></h4>
									<p>From FCL/LCL to road and bulk freight, we deliver reliably—offering cold-chain logistics for perishables like avocado and oil.</p>
								</div>
							</div>
						</div>
						<!-- single-well end-->
						<div class="col-md-3 col-sm-6 col-xs-12">
							<div class="well-services">
								<div class="well-content">
									<h4><a href="#">Custom Packaging & Regulatory Compliance:</a></h4>
									<p> Tailored packaging, private labeling, and full documentation support (TBS, Organic, phytosanitary) ensure market-ready exports.</p>
								</div>
							</div>
						</div>
						<!-- single-well end-->
						<div class="col-md-3 col-sm-6 col-xs-12">
							<div class="well-services ">
								<div class="well-content">
									<h4><a href="#">Strict Quality Control & 24/7 Support:</a></h4>
									<p> Rigorous inspections, lab testing, and real-time customer service guarantee satisfaction from order to delivery.</p>
								</div>
							</div>
						</div>
						<!-- single-well end-->
					</div>
				</div>
            </div>
        </div>
        <!-- Welcome service area End -->
        <!-- service area start -->
        <div class="Services-area area-padding">
            <div class="container">
               <div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="section-headline text-center">
							<h3>Our Services</h3>
							<p>At SUJATHA GLOBAL COMPANY LIMITED, we go beyond trading — we offer end-to-end solutions that ensure quality, reliability, and efficiency from sourcing to delivery. Our services are designed to meet the dynamic needs of domestic and international clients across the food and timber industries.</p>
						</div>
					</div>
				</div>
                <div class="row">
                    <div class="services-all">
                    	<!-- single-well end-->
						<div class="col-md-4 col-sm-6 col-xs-12">
						  <div class="single-services text-center">
	                        <div class="services-img">
	                            <img src="<?= base_url('assets/img/products/avocado.jpg') ?>" alt="Agricultural Products">
	                            <div class="image-layer">
	                                <a href="#"><i class="fas fa-seedling"></i></a>
	                            </div>
	                        </div>
						    <div class="main-services">
						      <div class="service-content">
						        <h4>Avocado</h4>
						        <p>SUJATHA GLOBAL COMPANY LIMITED proudly supplies premium fresh avocados from Tanzania’s fertile Njombe highlands. Our avocados are carefully hand-harvested, sorted by size and grade, and packed under strict quality controls to ensure they reach buyers in perfect condition. We offer reliable year-round supply, supported by sustainable farming partnerships and cold-chain logistics for export readiness.

Avocados are among the world’s most sought-after superfoods. They are naturally rich in healthy monounsaturated fats, which support heart function, reduce harmful cholesterol, and provide long-lasting energy. High in dietary fiber, potassium, vitamin K, vitamin C, and antioxidants, avocados promote digestion, maintain healthy blood pressure, and support eye health. For distributors, retailers, and food processors, our avocados represent a premium product that combines exceptional taste with powerful nutritional value.</p>
						        <a class="service-btn" href="#">read more</a>
						      </div>
						    </div>
						  </div>
						</div>
						<!-- single-well end-->
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="single-services text-center">
		                        <div class="services-img">
		                            <img src="<?= base_url('assets/img/products/avocadooil.jpeg') ?>" alt="Agricultural Products">
		                            <div class="image-layer">
		                                <a href="#"><i class="fas fa-seedling"></i></a>
		                            </div>
		                        </div>
								<div class="main-services">
									<div class="col-4  service-content">
										<h4>Avocado Oil</h4>		<p>Extracted through cold-pressing, SUJATHA GLOBAL’s avocado oil is a natural, nutrient-dense product ideal for culinary and cosmetic uses. We work with carefully selected growers, ensuring our oil is pure, chemical-free, and processed under hygienic standards to preserve its vibrant green color and delicate flavor. We can supply food-grade and cosmetic-grade avocado oil in bulk or packaged formats, tailored to customer needs.

Avocado oil is celebrated for its high smoke point, making it ideal for cooking, frying, and salad dressings. It is packed with omega-9 fatty acids, vitamin E, and antioxidants, which promote skin elasticity, joint health, and heart wellness. In cosmetics, it serves as a natural moisturizer and anti-aging ingredient. Partnering with SUJATHA GLOBAL ensures consistent supply, competitive pricing, and a trusted source of one of the most versatile oils on the market.</p>
										<a class="service-btn" href="#">read more</a>
									</div>
								</div>
							</div>
						</div>
						<!-- single-well end-->
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="single-services text-center">
		                        <div class="services-img">
		                            <img src="<?= base_url('assets/img/products/maize.png') ?>" alt="Agricultural Products">
		                            <div class="image-layer">
		                                <a href="#"><i class="fas fa-seedling"></i></a>
		                            </div>
		                        </div>
								<div class="main-services">
									<div class="service-content">
										<h4>Maize</h4>
										<p>SUJATHA GLOBAL COMPANY LIMITED supplies high-quality white and yellow maize grown in Tanzania’s fertile regions. Our maize is carefully harvested, cleaned, and graded to meet both local and international quality standards. We provide flexible bulk and retail supply options, ensuring a reliable source for food processors, wholesalers, and exporters.

Maize is a versatile staple rich in carbohydrates, providing sustained energy for daily consumption. It contains essential nutrients such as B vitamins, magnesium, and antioxidants that support digestion, metabolic health, and immunity. White maize is ideal for human consumption in porridge, flour, and snacks, while yellow maize is commonly used for animal feed and industrial applications. Choosing SUJATHA GLOBAL ensures consistent product quality, competitive pricing, and reliable delivery, making our maize a dependable choice for businesses and consumers alike.</p>
										<a class="service-btn" href="#">read more</a>
									</div>
								</div>
							</div>
						</div>
						<!-- single-well end-->
                        <div class="col-md-4 col-sm-6 col-xs-12">
							<div class="single-services text-center">
								<div class="main-services">
			                        <div class="services-img">
			                            <img src="<?= base_url('assets/img/products/rice.jpeg') ?>" alt="Agricultural Products">
			                            <div class="image-layer">
			                                <a href="#"><i class="fas fa-seedling"></i></a>
			                            </div>
			                        </div>
									<div class="service-content">
										<h4>Mbeya Rice</h4>
										<p>SUJATHA GLOBAL COMPANY LIMITED offers premium Mbeya rice, cultivated in Tanzania’s nutrient-rich valleys. Our rice is cleaned, graded, and carefully packaged to ensure optimal quality, long shelf life, and superior taste for domestic consumption and export. Flexible bulk and retail supply options are available to meet the diverse needs of distributors, wholesalers, and retailers.

Mbeya rice is naturally high in carbohydrates, providing sustained energy, and contains essential vitamins and minerals such as B-complex vitamins, magnesium, and phosphorus. Its low fat content and easy digestibility make it a healthy staple for families and commercial kitchens. By partnering with SUJATHA GLOBAL, clients receive a consistently high-quality rice product supported by efficient logistics and competitive pricing, ensuring reliability and satisfaction.</p>
										<a class="service-btn" href="#">read more</a>
									</div>
								</div>
							</div>
						</div>

						<!-- single-well end-->
                        <div class="col-md-4 col-sm-6 col-xs-12">
							<div class="single-services text-center">
		                        <div class="services-img">
		                            <img src="<?= base_url('assets/img/products/pigeonbeans.png') ?>" alt="Agricultural Products">
		                            <div class="image-layer">
		                                <a href="#"><i class="fas fa-seedling"></i></a>
		                            </div>
		                        </div>
								<div class="main-services">
									<div class="service-content">
										<h4>Pigeon beans</h4>
										<p>At SUJATHA GLOBAL COMPANY LIMITED, we supply high-protein pigeon peas sourced from smallholder farmers across Tanzania. Our pigeon peas are cleaned, graded, and processed to meet export standards, ensuring purity and long shelf life. With bulk availability and flexible shipping options, we cater to wholesalers, food processors, and international buyers seeking quality legumes at competitive prices.

Pigeon peas are a staple in many diets, valued for their high protein and essential amino acid content. They are rich in fiber, iron, and potassium, helping regulate blood sugar, improve digestion, and strengthen immunity. Naturally gluten-free and low in fat, pigeon peas are an affordable and healthy protein alternative for vegetarian and vegan diets. By choosing SUJATHA GLOBAL, buyers gain access to a sustainable, nutritious legume with strong consumer demand worldwide.</p>
										<a class="service-btn" href="#">read more</a>
									</div>
								</div>
							</div>
						</div>
						<!-- single-well end-->
						<!-- single-well end-->
                        <div class="col-md-4 col-sm-6 col-xs-12">
							<div class="single-services text-center">
		                        <div class="services-img">
		                            <img src="<?= base_url('assets/img/products/soybeans.jpg') ?>" alt="Agricultural Products">
		                            <div class="image-layer">
		                                <a href="#"><i class="fas fa-seedling"></i></a>
		                            </div>
		                        </div>
								<div class="main-services">
									<div class="service-content">
										<h4>Soybeans</h4>
										<p>SUJATHA GLOBAL COMPANY LIMITED provides premium non-GMO soya beans sourced from Tanzania’s top agricultural regions. Our beans are carefully cleaned, graded, and packed to meet both local and international quality standards. We offer flexible supply options, including bulk shipments and custom packaging, ensuring reliability for food processors, feed manufacturers, and exporters.

Soya beans are a nutritional powerhouse, rich in complete plant-based protein, essential fatty acids, and fiber. They are a natural source of isoflavones, which support heart health, hormonal balance, and bone strength. Their versatility makes them ideal for tofu, soya milk, animal feed, and various culinary applications. By sourcing from SUJATHA GLOBAL, partners benefit from consistent quality, ethical sourcing practices, and timely delivery, making our soya beans a smart choice for business and health-conscious consumers alike.</p>
										<a class="service-btn" href="#">read more</a>
									</div>
								</div>
							</div>
						</div>
						<!-- single-well end-->
						<!-- single-well end-->
                        <div class="col-md-4 col-sm-6 col-xs-12">
							<div class="single-services text-center">
		                        <div class="services-img">
		                            <img src="<?= base_url('assets/img/products/kidneybeans.jpeg') ?>" alt="Agricultural Products">
		                            <div class="image-layer">
		                                <a href="#"><i class="fas fa-seedling"></i></a>
		                            </div>
		                        </div>
								<div class="main-services">
									<div class="service-content">
										<h4>Kidney Beans</h4>
										<p>SUJATHA GLOBAL COMPANY LIMITED supplies high-quality red and yellow kidney beans cultivated under optimal conditions in Tanzania. Our beans undergo rigorous sorting, grading, and hygienic packaging to maintain purity and extend shelf life, catering to wholesalers, food processors, and international markets.

Kidney beans are packed with protein, dietary fiber, and essential minerals such as iron and magnesium. Regular consumption supports digestion, regulates blood sugar levels, and promotes cardiovascular health. Red kidney beans are especially rich in antioxidants, while yellow varieties offer a mild flavor suitable for stews, salads, and soups. Partnering with SUJATHA GLOBAL ensures a consistent supply of nutritious, high-quality legumes, ready to meet growing market demand.</p>
										<a class="service-btn" href="#">read more</a>
									</div>
								</div>
							</div>
						</div>
						<!-- single-well end-->
						<!-- single-well end-->
                        <div class="col-md-4 col-sm-6 col-xs-12">
							<div class="single-services text-center">
		                        <div class="services-img">
		                            <img src="<?= base_url('assets/img/products/cloves.jpeg') ?>" alt="Agricultural Products">
		                            <div class="image-layer">
		                                <a href="#"><i class="fas fa-seedling"></i></a>
		                            </div>
		                        </div>
								<div class="main-services">
									<div class="service-content">
										<h4>Cloves</h4>
										<p>SUJATHA GLOBAL COMPANY LIMITED supplies premium Tanzanian cloves, carefully harvested from fertile highlands to preserve their natural aroma and potency. Our cloves are cleaned, sorted, and packaged to meet both local and international quality standards. Bulk and retail options are available, with customized packaging for export or domestic markets.

Cloves are rich in antioxidants and contain compounds with natural antiseptic, anti-inflammatory, and digestive benefits. They are widely used in culinary dishes, beverages, and traditional remedies, enhancing flavor while promoting wellness. By partnering with SUJATHA GLOBAL, clients gain access to consistently high-quality cloves, ethically sourced and supported by efficient logistics and competitive pricing, making them ideal for businesses and health-conscious consumers.</p>
										<a class="service-btn" href="#">read more</a>
									</div>
								</div>
							</div>
						</div>
						<!-- single-well end-->
						<!-- single-well end-->
                        <div class="col-md-4 col-sm-6 col-xs-12">
							<div class="single-services text-center">
		                        <div class="services-img">
		                            <img src="<?= base_url('assets/img/products/cardamom.jpeg') ?>" alt="Agricultural Products">
		                        </div>
								<div class="main-services">
									<div class="service-content">
										<h4>Cardamom</h4>
										<p>SUJATHA GLOBAL COMPANY LIMITED offers top-grade cardamom seeds, harvested from Tanzania’s premium growing regions. Our seeds are carefully dried, cleaned, and graded to maintain maximum flavor and quality. We supply both bulk and retail quantities, with flexible packaging options to meet diverse client needs.

Cardamom seeds are valued for their aromatic, warm flavor and health benefits, including improved digestion, oral health, and antioxidant support. They are commonly used in cooking, baking, beverages, and natural remedies. By sourcing cardamom from SUJATHA GLOBAL, clients receive a consistently fresh, high-quality product backed by reliable supply, ethical sourcing, and competitive pricing, ensuring satisfaction for both culinary and commercial applications.</p>
										<a class="service-btn" href="#">read more</a>
									</div>
								</div>
							</div>
						</div>
						<!-- single-well end-->
						<!-- single-well end-->
                        <div class="col-md-4 col-sm-6 col-xs-12">
							<div class="single-services text-center">
		                        <div class="services-img">
		                            <img src="<?= base_url('assets/img/products/cinnamon.jpeg') ?>" alt="Agricultural Products">
		                        </div>
								<div class="main-services">
									<div class="service-content">
										<h4>Cinnamon </h4>
										<p>SUJATHA GLOBAL COMPANY LIMITED provides premium  cinnamon, carefully harvested, dried, and graded for optimal aroma, flavor, and quality. Our cinnamon is suitable for culinary, medicinal, and industrial applications, and we supply both bulk and packaged formats to meet diverse market needs.

Cinnamon is renowned for its antioxidant properties, ability to regulate blood sugar, and support for cardiovascular health. Its warm, aromatic flavor enhances both sweet and savory dishes, beverages, and natural remedies. Partnering with SUJATHA GLOBAL ensures access to ethically sourced, high-quality cinnamon that combines exceptional flavor with health benefits, backed by reliable supply chains and competitive pricing.</p>
										<a class="service-btn" href="#">read more</a>
									</div>
								</div>
							</div>
						</div>
						<!-- single-well end-->
						<!-- single-well end-->
                        <div class="col-md-4 col-sm-6 col-xs-12">
							<div class="single-services text-center">
		                        <div class="services-img">
		                            <img src="<?= base_url('assets/img/products/cashewnuts.jpeg') ?>" alt="Agricultural Products">
		                        </div>
								<div class="main-services">
									<div class="service-content">
										<h4>Cashewnuts</h4>
										<p>SUJATHA GLOBAL COMPANY LIMITED delivers premium Tanzanian cashew nuts, carefully harvested, sorted, and processed to preserve flavor and crunch. Our cashews meet international quality standards, with flexible supply options for bulk buyers, processors, and retailers. Packaging can be customized to client specifications for export or domestic markets.

Cashew nuts are rich in heart-healthy monounsaturated fats, plant-based protein, and essential minerals like magnesium, zinc, and iron. They support cardiovascular health, bone strength, and energy metabolism. Their delicious taste and nutritional value make them ideal for snacking, baking, cooking, and confectionery products. SUJATHA GLOBAL ensures every cashew batch maintains consistent quality, freshness, and ethical sourcing, offering a superior product that meets growing consumer demand for healthy, natural snacks.</p>
										<a class="service-btn" href="#">read more</a>
									</div>
								</div>
							</div>
						</div>
						<!-- single-well end-->
						<!-- single-well end-->
                        <div class="col-md-4 col-sm-6 col-xs-12">
							<div class="single-services text-center">
		                        <div class="services-img">
		                            <img src="<?= base_url('assets/img/products/teakwood.jpeg') ?>" alt="Agricultural Products">
		                            <div class="image-layer">
		                                <a href="#"><i class="fas fa-seedling"></i></a>
		                            </div>
		                        </div>
								<div class="main-services">
									<div class="service-content">
										<h4>Teakwood</h4>
										<p>SUJATHA GLOBAL COMPANY LIMITED supplies premium Teak wood sourced from sustainably managed plantations. Our teak is carefully harvested, seasoned, and graded to meet international standards for furniture, decking, and construction. We provide flexible supply options to suit both bulk buyers and specialized projects, ensuring reliable delivery and consistent quality.

Teak wood is highly prized for its natural durability, water resistance, and rich golden-brown color, making it ideal for indoor and outdoor furniture, flooring, and joinery. Its natural oils protect against decay, pests, and moisture, reducing maintenance requirements. By choosing SUJATHA GLOBAL, clients gain access to ethically sourced, high-quality teak timber that combines strength, beauty, and long-term value, backed by our commitment to sustainable forestry practices.</p>
										<a class="service-btn" href="#">read more</a>
									</div>
								</div>
							</div>
						</div>
						<!-- single-well end-->
						<!-- single-well end-->
                        <div class="col-md-4 col-sm-6 col-xs-12">
							<div class="single-services text-center">
		                        <div class="services-img">
		                            <img src="<?= base_url('assets/img/products/pinetimber.jpeg') ?>" alt="Agricultural Products">
		                            <div class="image-layer">
		                                <a href="#"><i class="fas fa-seedling"></i></a>
		                            </div>
		                        </div>
								<div class="main-services">
									<div class="service-content">
										<h4>Pine Timber</h4>
										<p>SUJATHA GLOBAL COMPANY LIMITED specializes in premium pine timber, kiln-dried and graded to meet high construction and furniture industry standards. Our timber is sustainably harvested, processed, and packaged for domestic and export markets, ensuring consistent quality and long-term supply.

Pine timber is lightweight, strong, and easy to work with, making it ideal for flooring, paneling, furniture, and structural projects. It naturally resists warping and cracking when properly treated, and its smooth finish enhances aesthetic appeal. Choosing SUJATHA GLOBAL ensures a reliable source of sustainably sourced pine timber with competitive pricing, efficient logistics, and quality assurance for every order.</p>
										<a class="service-btn" href="#">read more</a>
									</div>
								</div>
							</div>
						</div>
						<!-- single-well end-->
                        <div class="col-md-4 col-sm-6 col-xs-12">
							<div class="single-services text-center">
		                        <div class="services-img">
		                            <img src="<?= base_url('assets/img/products/plywood.jpeg') ?>" alt="Agricultural Products">
		                            <div class="image-layer">
		                                <a href="#"><i class="fas fa-seedling"></i></a>
		                            </div>
		                        </div>
								<div class="main-services">
									<div class="service-content">
										<h4>Plywood</h4>
										<p>SUJATHA GLOBAL COMPANY LIMITED supplies high-quality plywood suitable for construction, furniture, and industrial applications. Our plywood sheets are produced with precision, strength, and durability in mind, meeting stringent local and export standards. Bulk and customized packaging options are available for various buyer requirements.

Plywood is valued for its stability, flexibility, and resistance to splitting, making it an essential material for builders and manufacturers. It can be easily cut, shaped, and finished to match design specifications. Choosing SUJATHA GLOBAL ensures a reliable supply of premium plywood, backed by sustainable sourcing, quality assurance, and timely delivery to meet the demands of diverse projects.</p>
										<a class="service-btn" href="#">read more</a>
									</div>
								</div>
							</div>
						</div>
						<!-- single-well end-->
						<!-- single-well end-->
                        <div class="col-md-4 col-sm-6 col-xs-12">
							<div class="single-services text-center">
		                        <div class="services-img">
		                            <img src="<?= base_url('assets/img/products/venner.jpeg') ?>" alt="Agricultural Products">
		                            <div class="image-layer">
		                                <a href="#"><i class="fas fa-seedling"></i></a>
		                            </div>
		                        </div>
								<div class="main-services">
									<div class="service-content">
										<h4>Eucalyptus Veneer</h4>
										<p>SUJATHA GLOBAL COMPANY LIMITED offers precision-cut Eucalyptus veneer in custom thicknesses for high-end furniture, paneling, and interior design projects. Our veneers are sourced from responsibly managed forests, ensuring consistent grain patterns, color, and quality suitable for domestic and international markets.

Eucalyptus veneer provides a versatile and cost-effective solution for designers and manufacturers seeking attractive finishes. Its smooth texture and durability make it ideal for cabinetry, wall panels, and decorative surfaces. Partnering with SUJATHA GLOBAL ensures clients receive sustainably sourced, premium-grade veneers, supported by efficient logistics, competitive pricing, and expert customer service for all project needs.</p>
										<a class="service-btn" href="#">read more</a>
									</div>
								</div>
							</div>
						</div>
						<!-- single-well end-->
						<!-- single-well end-->
                        <div class="col-md-4 col-sm-6 col-xs-12">
							<div class="single-services text-center">
		                        <div class="services-img">
		                            <img src="<?= base_url('assets/img/products/seashells.jpeg') ?>" alt="Agricultural Products">
		                        </div>
								<div class="main-services">
									<div class="service-content">
										<h4>Sea shells</h4>
										<p>SUJATHA GLOBAL COMPANY LIMITED provides natural sea shells sourced from Tanzania’s pristine coastal regions. Our shells are carefully cleaned, sorted, and packaged for decorative, craft, and commercial applications. We supply bulk quantities as well as specialized selections to meet customer preferences.

Sea shells are versatile for home décor, jewelry making, landscaping, and artisanal crafts. They offer aesthetic beauty, texture, and natural uniqueness, appealing to designers and creative businesses. By partnering with SUJATHA GLOBAL, clients benefit from ethically collected, high-quality sea shells, consistent supply, and competitive pricing, ensuring their projects are both visually striking and sustainable.</p>
										<a class="service-btn" href="#">read more</a>
									</div>
								</div>
							</div>
						</div>
						<!-- single-well end-->
						<!-- single-well end-->
                        <div class="col-md-4 col-sm-6 col-xs-12">
							<div class="single-services text-center">
		                        <div class="services-img">
		                            <img src="<?= base_url('assets/img/products/coffee.jpeg') ?>" alt="Agricultural Products">
		                        </div>
								<div class="main-services">
									<div class="service-content">
										<h4>African Coffee Powder</h4>
										<p>SUJATHA GLOBAL COMPANY LIMITED offers premium African coffee powder sourced from Tanzania’s high-altitude coffee regions. Our coffee beans are carefully selected, roasted to perfection, and ground to provide rich aroma and exceptional flavor. We supply bulk and retail quantities, catering to exporters, cafes, and specialty retailers.

African coffee is naturally rich in antioxidants and essential nutrients such as magnesium, potassium, and B vitamins, promoting alertness, metabolism, and heart health. Its unique flavor profile, characterized by bright acidity and smooth body, makes it a preferred choice for coffee connoisseurs worldwide. By choosing SUJATHA GLOBAL, clients receive high-quality, ethically sourced coffee powder with consistent taste, competitive pricing, and dependable supply for global markets.</p>
										<a class="service-btn" href="#">read more</a>
									</div>
								</div>
							</div>
						</div>
						<!-- single-well end-->
						<!-- single-well end-->
                        <div class="col-md-4 col-sm-6 col-xs-12">
							<div class="single-services text-center">
		                        <div class="services-img">
		                            <img src="<?= base_url('assets/img/products/pineresin.jpeg') ?>" alt="Agricultural Products">
		                        </div>
								<div class="main-services">
									<div class="service-content">
										<h4>Pine Resin</h4>
										<p>SUJATHA GLOBAL COMPANY LIMITED supplies high-grade pine resin sourced from sustainable plantations in Tanzania. Our resin is carefully extracted, purified, and packaged to meet industrial and commercial standards for adhesives, varnishes, and pharmaceutical applications. Flexible bulk supply options ensure that manufacturers and exporters have reliable access to quality resin.

Pine resin is valued for its natural adhesive properties, durability, and chemical versatility. It is widely used in paints, varnishes, inks, and as a raw material for various industrial processes. By sourcing from SUJATHA GLOBAL, clients gain a sustainable, high-quality product with consistent performance, competitive pricing, and timely delivery, supporting long-term business reliability.</p>
										<a class="service-btn" href="#">read more</a>
									</div>
								</div>
							</div>
						</div>
						<!-- single-well end-->
                    </div>
                </div>
            </div>
        </div>
        <!-- Welcome service area End -->

    </div>





				<div class="hide-specific bg-color area-padding">
				  <div class="container">
				    <div class="row">
				      <div class="well-inner img-text-block">
				        <img src="<?= base_url('assets/img/products/pineresin.jpeg') ?>" alt="Agricultural Products">
				        <h4>Pine Resin</h4>
				        <p>
				        </p>
						<div class="back-btn-container" style="margin: 20px 0;"></div>
				      </div>
				    </div>
				  </div>
				</div>





<script>
$(document).ready(function() {

	$('.hide-specific').hide();

    $('.single-services').each(function () {
        const p = $(this).find('p');
        const fullText = p.text().trim();

        // Store full text in a data attribute
        p.attr('data-fulltext', fullText);

        const words = fullText.split(/\s+/);

        if (words.length > 5) {
            const shortText = words.slice(0, 41).join(' ') + '...';
            p.text(shortText);
        }
    });

    $('.service-btn').on('click', function(e) {
        e.preventDefault();

        // Get content from clicked section
        const service = $(this).closest('.single-services');
        const imgSrc = service.find('img').attr('src');
        console.log(imgSrc);
        const header = service.find('h4').text();
        const fullText = service.find('p');
        const paragraph = fullText.attr('data-fulltext');

        // Set content in .hide-specific
        $('.hide-specific img').attr('src', imgSrc);
        $('.hide-specific h4').text(header);
        $('.hide-specific p').text(paragraph);

        // Add back button if not already there
        if ($('.back-btn-container .back-btn').length === 0) {
            $('.back-btn-container').append('<button class="back-btn btn btn-primary">Back</button>');
        }

        // Animate transition
        $('.hide-main').hide();
        $('.hide-specific').css({
            display: 'none',
            position: 'relative',
            left: '-100%',
            opacity: 0
        }).show().animate({
            left: '0',
            opacity: 1
        }, 600);

		$('html, body').animate({ scrollTop: 0 }, 400);

    });

    // Handle back button click
    $(document).on('click', '.back-btn', function() {
        $('.hide-specific').animate({
            left: '100%',
            opacity: 0
        }, 600, function() {
            $(this).hide();
            $('.hide-main').css({
                display: 'none',
                position: 'relative',
                left: '-100%',
                opacity: 0
            }).show().animate({
                left: '0',
                opacity: 1
            }, 600);
        });
		$('html, body').animate({ scrollTop: 0 }, 400);
    });
});
</script>


 <?php include "common/footer.php";?> 
