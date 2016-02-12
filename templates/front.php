<?php
/*
Template Name: Front
*/
get_header(); ?>

<section class="about">
	<div class="color-segment top">
		<div class="segment red"></div>
	</div>

	<div class="row">
		<div class="small-12 large-12 columns">
			<h2>handcrafted</h2>
			<h1>Vector Shirts</h1>
			<div class="humblebrag">
				<div class="for"><span class="dash left"></span>for<span class="dash right"></span></div>
				<span class="awesome-people">Awesome People</span>
				<span class="like-you">Like You <i class="fa fa-heart"></i></span>
			</div>
			<p class="feature">I will share my passion for producing wearable art that tells a story,<br> strengthens humanity and inspires life through creativity & design.</p>
		</div> <!-- END COLUMNS -->
	</div> <!-- END ROW -->

	<div class="color-segment bottom">
		<div class="segment red"></div>
	</div>
</section> <!-- END SECTION -->

<section class="instagram">
	<div class="row">
		<div class="small-12 large-12 columns">
			<div class="btn-divider">
				<div class="button">
					<a href=""><i class="fa fa-instagram"></i>/japshirt</a>
				</div>
			</div>
			<div class="instagram-plugin">Instagram Plugin goes here.</div>
		</div> <!-- END COLUMNS -->
	</div> <!-- END ROW -->
</section> <!-- END SECTION -->

<section class="categories">
	<div class="row">
		<div class="small-12 large-12 columns">
			<h2>Kategorien</h2>
			<div class="banner-stroke"></div>
			<p class="headline-feature">Cut the cheese ricotta cheddar. Everyone loves bavarian bergkase st. agur blue cheese cheeseburger fondue melted cheese blue castello cheeseburger. Manchego jarlsberg mascarpone mozzarella lancashire port-salut cow cow. Lancashire.</p>
		</div> <!-- END COLUMNS -->

		<div class="small-4 large-4 columns">
			<div class="shield kids">
				<span class="shield-headline">Minions</span>
			</div>
			<p>Manchego smelly cheese stinking bishop. Everyone loves dolcelatte hard cheese</p>
		</div><!-- END COLUMNS -->

		<div class="small-4 large-4 columns">
			<div class="shield logo">
				<span class="shield-headline">Symbols</span>
			</div>
			<p>Manchego smelly cheese stinking bishop. Everyone loves dolcelatte hard cheese</p>
		</div><!-- END COLUMNS -->

		<div class="small-4 large-4 columns">
			<div class="shield geek">
				<span class="shield-headline">Portrait</span>
			</div>
			<p>Manchego smelly cheese stinking bishop. Everyone loves dolcelatte hard cheese</p>
		</div><!-- END COLUMNS -->
	</div> <!-- END ROW -->
</section> <!-- END SECTION -->

<section class="spreadshop">
	<div class="color-segment top">
		<div class="segment red"></div>
	</div>

	<div class="row">
		<div class="small-12 large-12 columns">
			<h2>The Shop</h2>
			<div class="banner-stroke"></div>
			<p class="headline-feature">Port-salut cauliflower cheese cheese slices. Swiss gouda stinking bishop cheesecake blue castello cottage cheese camembert de normandie babybel.</p>

			<?php
				$typoId=31;
				$post = get_post($typoId);
				$typoContent = apply_filters('the_content', $post->post_content);
			?>

			<?php
				$logoId=29;
				$post = get_post($logoId);
				$logoContent = apply_filters('the_content', $post->post_content);
			?>

			<?php echo do_shortcode("
				[tr_tabs]
				[ir_item id=\"1\" title=\"Tab title\"]' . $typoContent . '[/ir_item]
				[ir_item id=\"2\" title=\"Tab title\"]' . $logoContent . '[/ir_item]
				[ir_item id=\"3\" title=\"Tab title\"]' . $text . '[/ir_item]
				[/tr_tabs]
			");?>

		</div> <!-- END COLUMNS -->
	</div> <!-- END ROW -->

	<div class="color-segment top">
		<div class="segment red"></div>
	</div>
</section> <!-- END SECTION -->

<section class="contact">
	<div class="row">
		<div class="small-12 large-12">
			<h2>Kontakt</h2>
			<div class="banner-stroke"></div>
			<p class="headline-feature">Port-salut cauliflower cheese cheese slices. Swiss gouda stinking bishop cheesecake blue castello cottage cheese camembert de normandie babybel.</p>
			<?php echo do_shortcode('[contact-form-7 id="41" title="Kontaktformular 1"]'); ?>
		</div> <!-- END COLUMNS -->
	</div> <!-- END ROW -->
</section> <!-- END SECTION -->

<div class="section-divider">
	<hr />
</div>

<?php get_footer(); ?>
