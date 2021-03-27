<!--
	@component = Menu
	@use Layout_Main::do_menu();
-->

<!-- Top Menu 1 -->
<section class="w3l-top-menu-1">
	<div class="top-hd">
		<div class="container">
			<header class="row">
				<div class="social-top col-sm-6 col-6 pl-0">
					<li>We are Blazed Labs LLC.</li>
				</div>
				<div class="accounts col-sm-6 col-6 pr-0">
						<li class="top_li1"><a href="#">Login</a></li>
						<li class="top_li2"><a href="#">Register</a></li>
				</div>
			</header>
		</div>
	</div>
</section>
<!-- //Top Menu 1 -->
<section class="w3l-bootstrap-header">
  <nav class="navbar navbar-expand-lg navbar-light py-lg-2 py-2">
    <div class="container">
      <a class="navbar-brand" href="index.html"><span>Blazed</span>Labs</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon fa fa-bars"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto">
		  <?php echo Layout_Menu::do_build_menu(); ?>
        </ul>
        <p>For Support Call<span class="fa fa-headphones pl-1"></span><br><a href="tel:+16092873897">609-287-3897</a></p>
      </div>
    </div>
  </nav>
</section>