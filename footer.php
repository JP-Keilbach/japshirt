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
				<div class="small-12 large-12 columns ">
					<div class="guarantee">
						<img class="slogan" src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/slogan-garantie.svg" alt="Unsere Zufriedenheits Garantie" class="slogan">
					</div>
				</div>

				<div class="small-12 large-12 columns">
					<div class="footer-meta-mobile">
						<ul class="footer-meta-full">
							<li class="">
								<button type="button" class="button red">
									<a href="">
										<i class="fa fa-shopping-cart"></i>
										<span data-hover="/jabshirt">Bestellungen</span>
									</a>
								</button>
							</li>

							<li class="">
								<button type="button" class="button red">
									<a href="">
										<i class="fa fa-question"></i>
										<span data-hover="/jabshirt">Spreadhelp</span>
									</a>
								</button>
							</li>

							<li class="">
								<button type="button" class="button red">
									<a href="">
										<i class="fa fa-credit-card"></i>
										<span data-hover="/jabshirt">Zahlungsarten</span>
									</a>
								</button>
							</li>

							<li>
								<button type="button" class="button red">
									<a href="">
										<i class="fa fa-clock-o"></i>
										<span data-hover="/jabshirt">Lieferzeiten</span>
									</a>
								</button>
							</li>
						</ul>
					</div> <!-- END FOOTER META MOBILE -->
				</div> <!-- END COLUMNS -->

				<div class="small-12 large-12 large-centered columns">
					<div class="footer-meta-tablet">
						<div class="small-12 medium-6 large-6 columns">
							<ul class="footer-meta-left">
								<li class="left-top">
									<button type="button" class="button red inverse">
										<a href="">
											<i class="fa fa-shopping-cart"></i>
											<span data-hover="/jabshirt">Bestellungen</span>
										</a>
									</button>
								</li>

								<li class="left-bottom">
									<button type="button" class="button red inverse">
										<a href="">
											<i class="fa fa-question"></i>
											<span data-hover="/jabshirt">Spreadhelp</span>
										</a>
									</button>
								</li>
							</ul>
						</div>

						<div class="small-12 medium-6 large-6 columns">
							<ul class="footer-meta-right">
								<li class="right-top">
									<button type="button" class="button red">
										<a href="">
											<i class="fa fa-credit-card"></i>
											<span data-hover="/jabshirt">Zahlungsarten</span>
										</a>
									</button>
								</li>

								<li class="right-bottom">
									<button type="button" class="button red">
										<a href="">
											<i class="fa fa-clock-o"></i>
											<span data-hover="/jabshirt">Lieferzeiten</span>
										</a>
									</button>
								</li>
							</ul>
						</div>
					</div> <!-- END FOOTER META TABLET -->
				</div> <!-- END COLUMNS -->

				<div class="small-12 large-12 columns">
					<div class="footer-meta-desktop">
						<ul class="footer-meta">
							<li class="left-outer">
								<button type="button" class="button red inverse">
									<a href="">
										<i class="fa fa-shopping-cart"></i>
										<span data-hover="/jabshirt">Bestellungen</span>
									</a>
								</button>
							</li>

							<li class="left-inner">
								<button type="button" class="button red inverse">
									<a href="">
										<i class="fa fa-question"></i>
										<span data-hover="/jabshirt">Spreadhelp</span>
									</a>
								</button>
							</li>

							<li class="right-inner">
								<button type="button" class="button red">
									<a href="">
										<i class="fa fa-clock-o"></i>
										<span data-hover="/jabshirt">Lieferzeiten</span>
									</a>
								</button>
							</li>

							<li class="right-outer">
								<button type="button" class="button red">
									<a href="">
										<i class="fa fa-credit-card"></i>
										<span data-hover="/jabshirt">Zahlungsarten</span>
									</a>
								</button>
							</li>
						</ul>
					</div> <!-- END FOOTER META DESKTOP -->
				</div> <!-- END COLUMNS -->

				<div class="small-12 large-12 columns">
					<div class="send-back">
						<hr class="solid top">
						<p>Passt Nicht? Schick's zurück!<br>30 Tage Lang.</p>
					</div>
				</div>
			</div> <!-- END ROW -->

			<div class="row">
				<div class="small-12 large-6 large-centered columns">
					<div class="social-bar">
						<ul>
							<li class="empty-cell left"></li>
							<li class="facebook"><a href=""><i class="fa fa-facebook"></i></a></li>
							<li class="instagram"><a href=""><i class="fa fa-instagram"></i></a></li>
							<li class="pinterest"><a href=""><i class="fa fa-pinterest"></i></a></li>
							<li class="spreadshirt"><a href=""><i class="fa fa-bolt"></i></a></li>
							<li class="empty-cell right"></li>
						</ul>
					</div>
				</div>
			</div> <!-- END ROW -->

			<div class="row">
				<div class="small-12 large-6 large-centered columns">
					<div class="footer-meta-menu">
						<ul>
							<li><a href="#">about</a></li>
							<li><a href="#">kategorien</a></li>
							<li><a href="#">shop</a></li>
							<li><a href="#">contact</a></li>
						</ul>
					</div>
				</div>
			</div> <!-- END ROW -->

			<div class="row">
				<div class="small-12 large-12 large-centered columns">
					<div class="services">
						<ul>
							<li><img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/parcelservices.png" alt="Parcelservices"></li>
							<li><img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/payment.png" alt="Payment"></li>
						</ul>
					</div>
				</div>
			</div> <!-- END ROW -->

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
