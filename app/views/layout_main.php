
<!--
	Layout: [SITE NAME]
	(c) 2020 Blazed Labs LLC, Tyler Ruff; Matthew Ruff
-->
<?php if(isset($page) && isset($content) && isset($bundle)): ?>
	<!DOCTYPE HTML>
	<html lang="en" dir="ltr" itemscope itemtype="https://schema.org/Organization">
		<head>
			
			<!-- Header META -->
			<?php echo Layout_Main::do_meta($page, 4); 
			echo $bundle->renderCss();
			?>

		</head>
		<body>
			<?php 
				echo Layout_Menu::do_menu() . $content;
				$content->bundle = $bundle;
				echo Layout_Main::do_footer() . $bundle->renderJs();
			 ?>
			<!-- move top -->
			<button onclick="topFunction()" id="movetop" title="Go to top">
				<span class="fa fa-angle-up"></span>
			</button>
		 </body>
	</html>
<?php endif; ?>