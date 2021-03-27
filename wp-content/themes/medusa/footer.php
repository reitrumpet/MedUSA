<footer>
	<div class="dark-color footer-one">
		<div class="uk-container">



			<div class="uk-child-width-expand uk-grid-small" uk-grid>
				<div>
					<section class="company">
						<div class="logo-footer">

							<?php 
							$custom_logo_id = get_theme_mod( 'custom_logo' );
							$custom_logo_url = wp_get_attachment_image_url( $custom_logo_id , 'full' );
							echo '<img src="' . esc_url( $custom_logo_url ) . '" alt="">';
							?>	

						</div>
						<div class="address uk-margin-top">
							<div class="location">9825 S 500 W</div>
							<div class="address-line">Sandy, UT 84070</div>
							<div class="contact-one">Support: 801.352.9500</div>
							<div class="contact-two">Sales: 855.303.8806</div>
							<div class="contact-email">info@medusacm.com</div>
						</div>
						<div class="social-icons uk-grid uk-width-1-1 uk-margin-top">
							<div class="twitter uk-width-1-3"><a href="" uk-icon="icon: twitter"></a></div>
							<div class="facebook uk-width-1-3"><a href="" uk-icon="icon: facebook"></a></div>
							<div class="linkedin uk-width-1-3"><a href="" uk-icon="icon: linkedin"></a></div>
						</div>
					</section>
				</div>
				<div class="uk-width-2-3">
					<section class="">
						<div class="footer-menu uk-margin-top">
							<div class="uk-grid uk-margin-left">
								<div class="footer-block-1">
									<?php 
									wp_nav_menu(
										array(
											'theme_location' => 'footer_menu_1'
										)
									);
									?>
								</div>
								<div class="footer-block-2">
									<?php 
									wp_nav_menu(
										array(
											'theme_location' => 'footer_menu_2'
										)
									);
									?>
								</div>
								<div class="footer-block-3">
									<?php 
									wp_nav_menu(
										array(
											'theme_location' => 'footer_menu_3'
										)
									);
									?>
								</div>
							</div>
							
						</div>
					</section>
				</div>
				<div class="general-packages">
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
		</div>
	</div>
	<div class="uk-container uk-margin-top">
		<section class="bottom-bar uk-grid uk-width-1-1">
			<div class="copyright uk-width-1-2">©2020 MedUSA | All right reserved</div>
			<div class="menu-bottom-bar uk-width-1-2">
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


<div id="offcanvas-reveal" uk-offcanvas="mode: reveal; overlay: true">
	<div class="uk-offcanvas-bar uk-grid">
		<div class="margintop40 off-canvas-menu">
			<button class="uk-offcanvas-close" type="button" uk-close></button>

			<?php wp_nav_menu(
				array(
					'theme_location'=>'offcanvas_menu'
				)
			); ?>
		</div>
	</div>
</div>

</body>
</html>