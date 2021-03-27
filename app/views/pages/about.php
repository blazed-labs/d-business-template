<?php if(isset($bundle)): ?>
    
    <!-- Import Assets -->
	<?php $bundle->start(); ?>
		<script type="text/javascript" src="/assets/js/vendor/template/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="/assets/js/vendor/template/bootstrap.min.js"></script>
		<script type="text/javascript" src="/assets/js/vendor/template/poppins.min.js"></script>
		<script type="text/javascript" src="/assets/js/pages/base.js"></script>
		<script type="text/javascript" src="/assets/js/pages/about.js"></script>
		<!-- // -->
		<link rel="stylesheet" href="/assets/css/vendor/template/style-starter.css">
		<link media="screen" type="text/css" href="/assets/css/base.css">
		<link media="screen" type="text/css" href="/assets/css/pages/about.css">
	<?php $bundle->end(); ?>

    <!-- Page Title -->
    <section class="w3l-about-breadcrum">
    <div class="breadcrum-bg py-sm-5 py-4">
        <div class="container py-lg-3 py-2">
        <h2>About Us</h2>
        </div>
    </div>
    </section>

    <!-- About Content --> 
    <section class="w3l-content-with-photo-4" id="about">
        <div id="content-with-photo4-block" class="pt-5"> 
            <div class="container py-md-3">
                <div class="cwp4-two row">
                
                    <div class="cwp4-text col-lg-6">
                            <h3>The offers a variety of benefits options.</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicingelit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.
                        </p>
                    
                        <ul class="cont-4">
                            <li><span class="fa fa-check"></span>Refound of airfaire up to €350</li>
                            <li><span class="fa fa-check"></span>Free Support 24h </li>
                            <li><span class="fa fa-check"></span>Management Finance</li>
                            <li><span class="fa fa-check"></span>Advanced Analytics </li>
                        </ul>
                    </div>
                    <div class="cwp4-image col-lg-6 pl-lg-5 mt-lg-0 mt-5">
                        <img src="assets/images/g8.jpg" class="img-fluid" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="w3l-features-5">
        <!-- /features -->
            <div class="features py-4">
                <div class="container pb-5">
                    <div class="fea-gd-vv row ">	
                        <div class="float-lt feature-gd col-lg-4 col-sm-6">	
                            <div class="icon-info">
                                <h5>Global Network</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicingelit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.
                                </p>
                            </div>
                        </div>	
                        <div class="float-mid feature-gd col-lg-4 col-sm-6 mt-sm-0 mt-4">	
                            <div class="icon-info">
                                <h5>High Benefits</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicingelit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                        </div>
                    </div> 
                    <div class="float-rt feature-gd col-lg-4 col-sm-6 mt-lg-0 mt-4">	
                        <div class="icon-info">
                            <h5>Partnership</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicingelit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.
                            </p>
                        </div>
                    </div>	  
                </div>  
            </div>
        </div>
    </section>



<?php endif; ?>