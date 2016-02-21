<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

		</section> <!-- END CONTAINER -->

		<div id="footer-container">
			<div class="color-segment top">
				<div class="segment red"></div>
				<hr class="solid" />
			</div>

			<div class="row">

				<div class="medium-5 large-4 columns">
					<ul class="footer-meta">
						<li>
							<button type="button" class="button red inverse">
								<a href="">
									<i class="fa fa-instagram"></i>
									<span data-hover="/jabshirt">Meine Bestellungen</span>
								</a>
							</button>
						</li>

						<li>
							<button type="button" class="button red inverse">
								<a href="">
									<i class="fa fa-instagram"></i>
									<span data-hover="/jabshirt">Spreadhelp</span>
								</a>
							</button>
						</li>
					</ul>
				</div>

				<div class="medium-2 large-4 columns">
					<img class="slogan" src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/slogan-garantie.svg" alt="Unsere Zufriedenheits Garantie" class="slogan">
				</div>

				<div class="medium-5 large-4 columns">
					<ul class="footer-meta">
						<li>
							<button type="button" class="button red">
								<a href="">
									<i class="fa fa-instagram"></i>
									<span data-hover="/jabshirt">Lieferzeiten</span>
								</a>
							</button>
						</li>

						<li>
							<button type="button" class="button red">
								<a href="">
									<i class="fa fa-instagram"></i>
									<span data-hover="/jabshirt">Zahlungsarten</span>
								</a>
							</button>
						</li>
					</ul>
				</div>
			</div>



			<footer id="footer">
				<?php do_action( 'foundationpress_before_footer' ); ?>
				<?php dynamic_sidebar( 'footer-widgets' ); ?>
				<?php do_action( 'foundationpress_after_footer' ); ?>
			</footer>
		</div>

		<?php do_action( 'foundationpress_layout_end' ); ?>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
		</div><!-- Close off-canvas wrapper inner -->
	</div><!-- Close off-canvas wrapper -->
</div><!-- Close off-canvas content wrapper -->
<?php endif; ?>


<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>
