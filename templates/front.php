<?php
/*
Template Name: Front
*/
get_header(); ?>

<header id="front-hero" role="banner">

	<div class="row">
		<div class="small-4-centered large-4 large-centered columns">
			<div class="logo-container">
				<a href="#spreadshop"><span>zum shop</span></a>
			</div>
			<!--					<img src="--><?php //echo get_bloginfo('template_directory'); ?><!--/assets/images/logo.png" alt="Japshirt Logo" class="logo">-->
		</div>
	</div> <!-- END ROW -->

	<hr class="bottom-line white">

</header> <!-- END HEADER -->

<section class="about">
	<div class="color-segment rainbow">
		<div class="color-segment-inner">
			<div class="segment blue"></div>
			<div class="segment yellow"></div>
			<div class="segment red"></div>
		</div>
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
					<button type="button" class="button yellow">
						<a href="">
							<i class="fa fa-instagram"></i>
							<span data-hover="/japshirt">instagram</span>
						</a>
					</button>
				</div>
				<span class="dash right"></span>
			</div>
			<div class="instagram-plugin-container"><?php echo do_shortcode('[enjoyinstagram_mb]'); ?></div>
		</div> <!-- END COLUMNS -->
	</div> <!-- END ROW -->
	<hr class="segment-divider" />
</section> <!-- END SECTION -->

<section class="categories">

	<div class="color-segment">
		<div class="segment blue"></div>
		<hr class="solid" />
	</div>

	<div class="row">
		<div class="small-12 large-12 columns">
			<h2>Kategorien</h2>
			<div class="banner-stroke"></div>
			<p class="headline-feature">Cut the cheese ricotta cheddar. Everyone loves bavarian bergkase st. agur blue cheese cheeseburger fondue melted cheese blue castello cheeseburger. Manchego jarlsberg mascarpone mozzarella lancashire port-salut cow cow. Lancashire.</p>
		</div> <!-- END COLUMNS -->

		<div class="category-feature">

			<div class="small-12 medium-4 large-4 columns">
				<div class="shield">
					<div class="cat-banner-kids"></div>
				</div>
				<span class="shield-headline">Minions</span>
				<hr class="solid-cat"/>
				<p>Manchego smelly cheese stinking bishop. Everyone loves dolcelatte hard cheese</p>
			</div><!-- END COLUMNS -->

			<div class="small-12 medium-4 large-4 columns">
				<div class="shield">
					<div class="cat-banner-logo"></div>
				</div>
				<span class="shield-headline">Symbols</span>
				<hr class="solid-cat"/>
				<p>Manchego smelly cheese stinking bishop. Everyone loves dolcelatte hard cheese</p>
			</div><!-- END COLUMNS -->

			<div class="small-12 medium-4 large-4 columns">
				<div class="shield">
					<div class="cat-banner-geek"></div>
				</div>
				<span class="shield-headline">Portrait</span>
				<hr class="solid-cat"/>
				<p>Manchego smelly cheese stinking bishop. Everyone loves dolcelatte hard cheese</p>
			</div><!-- END COLUMNS -->

		</div> <!-- END CATEGORY FEATURE -->
	</div> <!-- END ROW -->
	<hr class="segment-divider" />
</section> <!-- END SECTION -->

<section class="spreadshop">
	<div class="color-segment">
		<div class="segment yellow"></div>
		<hr class="solid" />
	</div>

	<div class="row">
		<div class="small-12 large-12 columns">
			<h2>The Shop</h2>
			<div class="banner-stroke"></div>
			<p class="headline-feature">Port-salut cauliflower cheese cheese slices. Swiss gouda stinking bishop cheesecake blue castello cottage cheese camembert de normandie babybel.</p>

			<div class="category-pages">
				<button class="button yellow">
					<a href="http://www.google.com">
						<i class="fa fa-futbol-o"></i>
						<span data-hover="mehr info">kids shirt</span>
					</a>
				</button>

				<button class="button red">
					<a href="http://www.google.com">
						<i class="fa fa-paint-brush"></i>
						<span data-hover="mehr info">logo shirt</span>
					</a>
				</button>

				<button class="button blue">
					<a href="http://www.google.com">
						<i class="fa fa-gamepad"></i>
						<span data-hover="mehr info">geek shirt</span>
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
	<hr class="segment-divider" />
</section> <!-- END SECTION -->

<section class="contact">
	<div class="color-segment">
		<div class="segment red"></div>
		<hr class="solid" />
	</div>

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
	<hr class="segment-divider" />
</section> <!-- END SECTION -->

<?php get_footer(); ?>
