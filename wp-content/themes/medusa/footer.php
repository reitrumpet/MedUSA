<footer>
	<div class="uk-container">
		<div class="uk-grid uk-grid-width-small-1-1">
			<section class="company">
				<div class="logo-footer">Logo</div>
				<div class="address">
					<div class="location">9825 S 500 W</div>
					<div class="address-line">Sandy, UT 84070, EUA</div>
					<div class="contact-one">Support: 801.352.9500</div>
					<div class="contact-two">Sales: 855.303.8806</div>
					<div class="contact-email">info@medusacm.com</div>
				</div>
				<div class="social-icons">
					<div class="twitter"></div>
					<div class="facebook"></div>
					<div class="linkedin"></div>
				</div>
			</section>
			<section class="">
				<div class="footer-menu">
					<?php 
					wp_nav_menu(
						array(
							'theme_location' => 'footer_menu'
						)
					);
					?>
				</div>
			</section>
			<section class="">
				<div class="packages-menu">
					Packages:
					<?php 
					wp_nav_menu(
						array(
							'theme_location' => 'packages_menu'
						)
					);
					?>
				</div>
			</section>
		</div>
	</div>
	<div class="uk-container">
		<section class="bottom-bar uk-grid uk-grid-width-small-1-1">
			<div class="copyright">©2020 MedUSA | All right reserved</div>
			<div class="menu-bottom-bar">
				<?php 
				wp_nav_menu(
					array(
						'theme_location' => 'bottom_menu'
					)
				);
				?>
			</div>
		</section>
	</div>
</footer>

</body>
</html>