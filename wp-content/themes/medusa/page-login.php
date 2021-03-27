<?php get_header(); ?>
<div class="uk-container">
	<div class="uk-grid">
		<div class="uk-width-1-1 uk-text-center uk-margin-bottom">
			<h1>Welcome to MedUSA</h1>
		</div>
		<div class="uk-width-1-1 uk-text-center">
			<form>
			<div class="uk-margin">
				<div class="uk-inline">
					<span class="uk-form-icon" uk-icon="icon: user"></span>
					<input class="uk-input" type="text" placeholder="User Name">
				</div>
			</div>

			<div class="uk-margin">
				<div class="uk-inline">
					<span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: lock"></span>
					<input class="uk-input" type="Password" placeholder="Password">
				</div>
			</div>
			<div class="uk-margin">

				<button class="uk-button uk-button-primary button-submit" name="submit" type="button">Submit</button>

			</div>
			

		</form>
		</div>
		
	</div>
</div>

<?php get_footer(); ?>