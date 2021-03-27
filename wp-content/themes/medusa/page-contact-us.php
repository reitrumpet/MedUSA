<?php get_header(); ?>

<div class="uk-section uk-section-default general margintop-50">
	<div class="uk-section-default">
		<div class="uk-section uk-light uk-background-cover bg3">
			<div class="uk-container" id="contact">
				<div class="content-area">
					<div class="uk-container">
						<section class="content-three uk-grid uk-width-1-1">
							<div class="uk-grid uk-width-1-3">&nbsp;</div>
							<div class="card-three uk-grid uk-width-2-3">
								<div class="uk-grid">
									<!-- <img class="diagonal-top" src="<?php echo get_template_directory_uri() . '/images/qb_upper.png'?>" /> -->
									<div class="diagonal-top">&nbsp;</div>
									<div class="title-three"><?php the_field('title_section_3'); ?></div>
									<div class="diagonal-bottom">&nbsp;</div>
									<!-- <img class="diagonal-bottom" src="<?php echo get_template_directory_uri() . '/images/qb_lower.png'?>" /> -->
									<div class="top-form uk-grid"><?php the_field('subtitle_section_3'); ?></div>
								</div>
								
								<div class="form-area uk-grid">
									<form class="main-form uk-grid">
										<div class="label-float">
											<input class="" type="text" name="firstName" placeholder=" " title="First Name">
											<label class="label-class">First Name</label>
										</div>
										<div class="label-float">
											<input class="" type="text" name="lastName" placeholder=" " title="Last Name">
											<label class="label-class">Last Name</label>
										</div>
										<div class="label-float">
											<input class="" type="email" name="email" placeholder=" " title="Email">
											<label class="label-class">Email</label>
										</div>
										<div class="label-float">
											<input class="" type="tel" name="phone" placeholder=" " title="Phone">
											<label class="label-class">Phone</label>
										</div>
										<div class="uk-grid uk-margin-top uk-width-1-1">
											<div class="uk-width-1-3"></div>
											<div class="uk-width-1-3"></div>
											<div class="uk-width-1-3"><button class="uk-button uk-button-primary button-submit floatRight" name="submit" type="button"><?php the_field('name_button_section_3'); ?></button>  </div>
											
										</div>
									</form>
								</div>
							</div>
						</section>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<?php get_footer(); ?>