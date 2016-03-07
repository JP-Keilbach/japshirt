<?php
/*
Template Name: Shop Full Width Kids
*/
get_header(); ?>

<header id="kids-hero" role="banner">

    <div class="row">
        <div class="small-4-centered large-4 large-centered columns">
            <div class="logo-container">
                <a href="#spreadshop"><span>zum shop</span></a>
            </div>
        </div>
    </div> <!-- END ROW -->

    <hr class="bottom-line white">

</header> <!-- END HEADER -->

<?php get_template_part( 'parts/featured-image' ); ?>

<div id="shop-page-full-width" role="main">

<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
  <article <?php post_class('main-content shop-content') ?> id="post-<?php the_ID(); ?>">
      <header>
          <h1 class="shop-entry-title"><?php the_title(); ?></h1>
      </header>
      <?php do_action( 'foundationpress_page_before_entry_content' ); ?>
      <div class="shop-entry-content">
          <?php the_content(); ?>
      </div>
      <footer>
          <?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
          <p><?php the_tags(); ?></p>
      </footer>
      <?php do_action( 'foundationpress_page_before_comments' ); ?>
      <?php comments_template(); ?>
      <?php do_action( 'foundationpress_page_after_comments' ); ?>
  </article>
<?php endwhile;?>

<?php do_action( 'foundationpress_after_content' ); ?>

</div>

<?php get_footer(); ?>
