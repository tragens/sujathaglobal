 <?php include "common/header.php";?> 
 <?php include "common/sidebar.php";?> 

        <!-- Start breadcumb Area -->
        <div class="page-area">
            <div class="breadcumb-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcrumb text-center">
                            <div class="section-headline white-headline text-center">
                                <h3>Contact us</h3>
                            </div>
                            <ul>
                                <li class="home-bread">Home</li>
                                <li>Contact</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End breadcumb Area -->
         <!-- Start contact Area -->
        <div class="map-area">
            <div class="container">
                <div class="row">
                    <!-- Start contact icon column -->
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <!-- Start Map -->
                        <div class="map-main">
                            <div id="googleMap" style="width:100%;height:450px;"></div>
                        </div>
                        <!-- End Map -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Start contact Area -->
        <div class="contact-page area-padding">
            <div class="container">
                <div class="row">
                   <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="contact-head">
                            <h3>Request a Contact us</h3>
                            <p>Water The universal acceptance of website has given a tremendous opportunity for merchants to do crossborder transactions instantly and at reduced cost.</p>
                            <div class="contact-icon">
								<div class="contact-inner">
									<h5>Location :</h5>
									<a href="#"><i class="fa fa-map"></i><span>Road-7 old Street, Dubai</span></a>
									<a href="#"><i class="fa fa-phone"></i><span>+2112-6546654</span></a>
									<a href="#"><i class="fa fa-envelope"></i><span>info@tionscal3.com</span></a>
								</div>
							</div>
                        </div>
                    </div>
                    <!-- End contact icon -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="contact-form">
                            <div class="row">
                                <form id="contactForm" method="POST" action="http://rockstheme.com/rocks/tionscal-previews/contact.php" class="contact-form">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="name" class="form-control" placeholder="Name" required data-error="Please enter your name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="email" class="email form-control" id="email" placeholder="Email" required data-error="Please enter your email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <input type="text" id="msg_subject" class="form-control" placeholder="Subject" required data-error="Please enter your message subject">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <textarea id="message" rows="7" placeholder="Massage" class="form-control" required data-error="Write your message"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                        <button type="submit" id="submit" class="contact-btn">Submit</button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div> 
                                        <div class="clearfix"></div>
                                    </div>   
                                </form>  
                            </div>
                        </div>
                    </div>
                    <!-- End contact Form -->
                </div>
            </div>
        </div>
        <!-- Start Footer bottom Area -->

 <?php include "common/footer.php";?> 
