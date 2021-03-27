<?php if(isset($bundle)): ?>
    
    <!-- Import Assets -->
	<?php $bundle->start(); ?>
		<script type="text/javascript" src="/assets/js/vendor/template/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="/assets/js/vendor/template/bootstrap.min.js"></script>
		<script type="text/javascript" src="/assets/js/vendor/template/poppins.min.js"></script>
		<script type="text/javascript" src="/assets/js/vendor/template/owl.carousel.js"></script>
		<script type="text/javascript" src="/assets/js/pages/base.js"></script>
		<script type="text/javascript" src="/assets/js/pages/home.js"></script>
		<!-- // -->
		<link rel="stylesheet" href="/assets/css/vendor/template/style-starter.css">
		<link media="screen" type="text/css" href="/assets/css/base.css">
		<link media="screen" type="text/css" href="/assets/css/pages/home.css">
	<?php $bundle->end(); ?>

	<?php echo Layout_Main::do_slideshow(); ?>

	<?php echo Layout_Main::do_overview(); ?>

	<?php echo Layout_Main::do_services(); ?>

	<?php echo Layout_Main::do_info(); ?>

	<?php echo Layout_Main::do_features(); ?>

	<?php echo Layout_Main::do_steps(); ?>

	<?php echo Layout_Main::do_latest_news(); ?>

<?php endif; ?>