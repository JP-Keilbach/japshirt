<?php
/*
Template Name: Front
*/
get_header(); ?>

<section class="about">
	<div class="color-segment top">
		<div class="segment red"></div>
		<hr class="solid" />
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
			<p class="headline-feature">I will share my passion for producing wearable art that tells a story, strengthens humanity and inspires life through creativity & design.</p>
		</div> <!-- END COLUMNS -->
	</div> <!-- END ROW -->
</section> <!-- END SECTION -->

<section class="instagram">
	<div class="row">
		<div class="small-12 large-12 columns">
			<div class="btn-divider">
				<span class="dash left"></span>
				<div class="button-container">
					<button type="button" class="button red">
						<a href="">
							<i class="fa fa-instagram"></i>
							<span data-hover="/jabshirt">instagram</span>
						</a>
					</button>
				</div>
				<span class="dash right"></span>
			</div>
			<div class="instagram-plugin-container"><?php echo do_shortcode('[enjoyinstagram_mb]'); ?></div>
		</div> <!-- END COLUMNS -->
	</div> <!-- END ROW -->

	<div class="color-segment bottom">
		<hr class="solid" />
		<div class="segment red"></div>
	</div>
</section> <!-- END SECTION -->

<section class="categories">
	<div class="row">
		<div class="small-12 large-12 columns">
			<h2>Kategorien</h2>
			<div class="banner-stroke"></div>
			<p class="headline-feature">Cut the cheese ricotta cheddar. Everyone loves bavarian bergkase st. agur blue cheese cheeseburger fondue melted cheese blue castello cheeseburger. Manchego jarlsberg mascarpone mozzarella lancashire port-salut cow cow. Lancashire.</p>
		</div> <!-- END COLUMNS -->

		<div class="category-feature">

			<div class="small-12 medium-4 large-4 columns">
				<div class="shield kids">
					<img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/cat-banner-kids.svg" alt="Category Banner Kids">
					<span class="shield-headline">Minions</span>
				</div>
				<hr class="solid-cat"/>
				<p>Manchego smelly cheese stinking bishop. Everyone loves dolcelatte hard cheese</p>
			</div><!-- END COLUMNS -->

			<div class="small-12 medium-4 large-4 columns">
				<div class="shield logo">
					<img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/cat-banner-logo.svg" alt="Category Banner Kids">
					<span class="shield-headline">Symbols</span>
				</div>
				<hr class="solid-cat"/>
				<p>Manchego smelly cheese stinking bishop. Everyone loves dolcelatte hard cheese</p>
			</div><!-- END COLUMNS -->

			<div class="small-12 medium-4 large-4 columns">
				<div class="shield geek">
					<img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/cat-banner-geek.svg" alt="Category Banner Kids">
					<span class="shield-headline">Portrait</span>
				</div>
				<hr class="solid-cat"/>
				<p>Manchego smelly cheese stinking bishop. Everyone loves dolcelatte hard cheese</p>
			</div><!-- END COLUMNS -->

		</div>

	</div> <!-- END ROW -->
</section> <!-- END SECTION -->

<section class="spreadshop">
	<div class="color-segment top">
		<div class="segment red"></div>
		<hr class="solid" />
	</div>

	<div class="row">
		<div class="small-12 large-12 columns">
			<h2>The Shop</h2>
			<div class="banner-stroke"></div>
			<p class="headline-feature">Port-salut cauliflower cheese cheese slices. Swiss gouda stinking bishop cheesecake blue castello cottage cheese camembert de normandie babybel.</p>

			<div class="category-pages">
				<button class="button">
					<a href="http://www.google.com">
						<i class="fa fa-futbol-o"></i>
						<span data-hover="../more">kids shirt</span>
					</a>
				</button>

				<button class="button">
					<a href="http://www.google.com">
						<i class="fa fa-paint-brush"></i>
						<span data-hover="../more">logo shirt</span>
					</a>
				</button>

				<button class="button">
					<a href="http://www.google.com">
						<i class="fa fa-gamepad"></i>
						<span data-hover="../more">geek shirt</span>
					</a>
				</button>

			</div>

			<?php
			$allId=32;
			$post = get_post($allId);
			$allContent = apply_filters('the_content', $post->post_content);
			echo $allContent;
			?>

		</div> <!-- END COLUMNS -->
	</div> <!-- END ROW -->

	<div class="color-segment bottom">
		<hr class="solid" />
		<div class="segment red"></div>
	</div>
</section> <!-- END SECTION -->

<section class="contact">
	<div class="row">
		<div class="small-12 large-12 columns">
			<h2>Kontakt</h2>
			<div class="banner-stroke"></div>
			<p class="headline-feature">Port-salut cauliflower cheese cheese slices. Swiss gouda stinking bishop cheesecake blue castello cottage cheese camembert de normandie babybel.</p>
			<div class="small-12 medium-12 large-8 small-centered medium-centered large-centered columns end">
				<?php echo do_shortcode('[contact-form-7 id="35" title="Japshirt Contact Form"]'); ?>
			</div>
		</div> <!-- END COLUMNS -->
	</div> <!-- END ROW -->
</section> <!-- END SECTION -->

<?php get_footer(); ?>
