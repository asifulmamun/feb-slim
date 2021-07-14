<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Feb_Slim
 */

?>

<footer id="footer" class="site-footer">

	<div class="container">
		<div class="row">

			<div class="col-md-4">
				<?php dynamic_sidebar( 'footer-1' ); ?>
			</div>


			<div class="col-md-4">
				<?php dynamic_sidebar( 'footer-2' ); ?>
			</div>

			<div class="col-md-4">
				<?php dynamic_sidebar( 'footer-3' ); ?>
			</div>

			
		</div>
	</div>
</footer><!-- #colophon -->

<div id="footer_bottom">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="payment_card">
					<span class="card"><i class="fab fa-cc-visa"></i></span>
					<span class="card"><i class="fab fa-cc-mastercard"></i></span>
				</div>
			</div>
			
			<div class="col text-right">
				<ul class="footer_social">
					<li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
					<li><a href="#"><i class="fab fa-instagram"></i></a></li>
				</ul>
			</div>
		</div>

		<div class="row">
			<div class="col">
				<div class="site-info text-right">
					<?php
						/* translators: 1: Theme name, 2: Theme author. */
						printf(esc_html__('%1$s by %2$s.', 'feb-slim'), 'feb-slim', '<a href="https://asifulmamun.info">asifulmamun</a>');
					?>
				</div>
			</div>
		</div>
	</div><!-- container -->



</div><!-- footer_bottom -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>