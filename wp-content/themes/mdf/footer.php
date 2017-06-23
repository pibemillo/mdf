<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MDF
 */

?>

	</div><!-- #content -->

	<footer id="contact" role="contentinfo">
		<section class="b-footer">
			<div class="row b-vpad-lg">
				<div class="small-12 medium-10 large-9 medium-centered columns">
					<h2 class="b-header-line--white">Get in Touch</h2>
					<div class="b-call b-call--footer">
						<p class="b-call__copy">Call Now To Book Your FREE Personal Training Session <a class="b-call__link" href="tel:424-291-2156"><i class="fa fa-mobile"></i> 424-291-2156</a></p>
					</div>
					<div id="form" class="row">			
						<?php echo do_shortcode('[contact-form-7 id="1138" title="Contact"]');?>
					</div>
				</div>
				<div class="small-12 medium-10 large-9 medium-centered columns">
					<h2 class="b-header-line--white">Where we Train</h2>
					<div class="row">
						<div class="medium-6 small-10 medium-uncentered small-centered columns">
							<div class="flex-video">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3307.2202572354786!2d-118.46834598490986!3d34.012556827268085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2bb2081226151%3A0xe76a511968900963!2s1716+Ocean+Park+Blvd%2C+Santa+Monica%2C+CA+90405!5e0!3m2!1sen!2sus!4v1496373950681" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
							</div>
						</div>
						<div class="b-footer-map medium-6 columns">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/trio.png" alt="Trio: Science Driven Fitness">
							<p class="b-footer__location"><a href="http://go2trio.com" target="blank">Trio: Science Driven Fitness</a></p>							
							<p class="b-footer__location">1716 Ocean Park Blvd</p>
							<p class="b-footer__location">Santa Monica, CA</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<div class="b-copyright">
			<div class="row">
				<div class="medium-6 columns">
					<p class="b-copyright__text">Michael Denis Fitness © <?php echo date("Y"); ?></p>
				</div>
				<div class="medium-6 columns medium-text-right">
					<ul class="b-social">
						<li class="b-social__profile">
							<a href="https://www.facebook.com/michaeldenisfitness/" class="b-social__link" target="blank"><i class="fa fa-facebook-official"></i></a>
						</li>
						<li class="b-social__profile">
							<a href="https://www.instagram.com/michael_denis_fitness/" class="b-social__link" target="blank"><i class="fa fa-instagram"></i></a>
						</li>
						<li class="b-social__profile">
							<a href="https://www.yelp.com/biz/michael-denis-fitness-santa-monica-3" class="b-social__link" target="blank"><i class="fa fa-yelp"></i></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
