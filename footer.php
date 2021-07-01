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

<footer id="colophon" class="site-footer">

	<div class="container-fluid">
		<div class="row">

			<div class="col-md-4">
				<?php the_widget( 'footer_1' ); ?>
			</div>

		</div>
	</div>


	<div class="site-info">
		<?php
		/* translators: 1: Theme name, 2: Theme author. */
		printf(esc_html__('%1$s by %2$s.', 'feb-slim'), 'feb-slim', '<a href="https://asifulmamun.info">asifulmamun</a>');
		?>
	</div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>