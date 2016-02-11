<?php
/*
Template Name: Front
*/
get_header(); ?>

<section clas="about">
	<div class="color-segment">
		<div class="segment red"></div>
	</div>

	<div class="row">
		<div class="small-12 large-12 columns">
			<h1>
				<img src="../images/headline-about-part1.png" alt="Handcrafted">
				<img src="../images/headline-about-part2.png" alt="Vector Shirts">
			</h1>
			<span class="">for</span>
			<span class="">Awesome People</span>
			<span>Like You <i class="fa fa-heart"></i></span>
			<p>I will share my passion for producing wearable art that tells a story, strengthens humanity and inspires life through creativity & design.</p>
		</div>
	</div>
</section>

<section class="instagram">
	<div class="row">
		<div class="small-12 large-12 columns">
			<div class="btn-divider">
				<div class="button">
					<a href=""><i class="fa fa-instagram"></i>/japshirt</a>
				</div>
			</div>
			<div class="instagram-plugin">Instagram Plugin goes here.</div>
		</div>
	</div>
</section>

<section class="categories">
	<div class="row">
		<div class="small-12 large-12 columns">
			<h2>Kategorien</h2>
			<div class="banner-stroke"></div>
			<p class="headline-feature">Port-salut cauliflower cheese cheese slices. Swiss gouda stinking bishop cheesecake blue castello cottage cheese camembert de normandie babybel. </p>
		</div>

		<div class="small-4 large-4 columns">
			<div class="shield kids">
				<span class="shield-headline">Minions</span>
			</div>
			<p>Manchego smelly cheese stinking bishop. Everyone loves dolcelatte hard cheese</p>
		</div>
		<div class="small-4 large-4 columns">
			<div class="shield logo">
				<span class="shield-headline">Symbols</span>
			</div>
			<p>Manchego smelly cheese stinking bishop. Everyone loves dolcelatte hard cheese</p>
		</div>
		<div class="small-4 large-4 columns">
			<div class="shield geek">
				<span class="shield-headline">Portrait</span>
			</div>
			<p>Manchego smelly cheese stinking bishop. Everyone loves dolcelatte hard cheese</p>
		</div>
	</div>
</section>

<section class="spreadshop">
	<div class="row">
		<div class="small-12 large-12 columns">
			<h2>The Shop</h2>
			<div class="banner-stroke"></div>
			<p class="headline-feature">Port-salut cauliflower cheese cheese slices. Swiss gouda stinking bishop cheesecake blue castello cottage cheese camembert de normandie babybel. </p>

			<?php
				$id=19;
				$post = get_post($id);
				$content = apply_filters('the_content', $post->post_content);
				echo $content
			?>
		</div>
	</div>
</section>


<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>

<section class="intro" role="main">
	<div class="fp-intro">

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			<footer>
				<?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
				<p><?php the_tags(); ?></p>
			</footer>
			<?php do_action( 'foundationpress_page_before_comments' ); ?>
			<?php comments_template(); ?>
			<?php do_action( 'foundationpress_page_after_comments' ); ?>
		</div>

	</div>
</section>

<?php endwhile;?>
<?php do_action( 'foundationpress_after_content' ); ?>

<div class="section-divider">
	<hr />
</div>


<section class="benefits">
	<header>
		<h2>Build Foundation based sites, powered by WordPress</h2>
		<h4>Foundation is the professional choice for designers, developers and teams. <br /> WordPress is by far, <a href="http://trends.builtwith.com/cms">the world's most popular CMS</a> (currently powering 38% of the web).</h4>
	</header>

	<div class="semantic">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/semantic.svg" alt="semantic">
		<h3>Semantic</h3>
		<p>Everything is semantic. You can have the cleanest markup without sacrificing the utility and speed of Foundation.</p>
	</div>

	<div class="responsive">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/responsive.svg" alt="responsive">
		<h3>Responsive</h3>
		<p>You can build for small devices first. Then, as devices get larger and larger, layer in more complexity for a complete responsive design.</p>

	</div>

	<div class="customizable">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/customizable.svg" alt="customizable">
		<h3>Customizable</h3>
		<p>You can customize your build to include or remove certain elements, as well as define the size of columns, colors, font size and more.</p>

	</div>

	<div class="professional">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/professional.svg" alt="professional">
		<h3>Professional</h3>
		<p>Millions of designers and developers depend on Foundation. We have business support, training and consulting to help grow your product or service.</p>
	</div>

	<div class="why-foundation">
		<a href="/kitchen-sink">See what's in Foundation out of the box →</a>
	</div>

</section>



<?php get_footer(); ?>
