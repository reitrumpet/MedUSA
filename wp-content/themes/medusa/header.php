<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width">
	<title>Full Service Medical Billing RCM & Medical Credentialing | Med USA</title>
	<?php wp_head(); ?>
</head>
<body <?php body_class();?>>
	<header class="dark-color">	


		<!-- <div uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky"> -->
			<nav class="uk-navbar-container uk-margin uk-container uk-navbar-transparent" uk-navbar>
				<div class="uk-grid uk-width-1-1">
					<div class="nav-overlay uk-navbar-left">
							<?php the_custom_logo(); ?>
					</div>

					<div class="nav-overlay uk-navbar-right">

						<div class="login-menu font12">
							<?php wp_nav_menu(
							array(
							'theme_location'=>'top_menu'
							)
							); ?>
						</div>

						<a class="uk-navbar-toggle" uk-search-icon uk-toggle="target: .nav-overlay; animation: uk-animation-fade" href="#"></a>

					</div>

					<div class="nav-overlay uk-navbar-left uk-flex-1" hidden>

						<div class="uk-navbar-item uk-width-expand">
							<form class="uk-search uk-search-navbar uk-width-1-1">
								<input class="uk-search-input" type="search" placeholder="Search" autofocus>
							</form>
						</div>

						<a class="uk-navbar-toggle" uk-close uk-toggle="target: .nav-overlay; animation: uk-animation-fade" href="#"></a>

					</div>
						<a href="#offcanvas-usage" class="uk-navbar-toggle uk-hidden@m uk-margin-left"  uk-toggle="target: #offcanvas-reveal" uk-navbar-toggle-icon></a>

					<div class="main-menu uk-width-1-1 uk-visible@m">
						<?php wp_nav_menu(
						array(
						'theme_location'=>'my_main_menu'
						)
						); ?>

					</div>
				</div>
			</nav>
		<!-- </div> -->

	</header>