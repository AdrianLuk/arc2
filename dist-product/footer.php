<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod('understrap_container_type');
?>

<?php //get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">
	<div class="container">
		<?php wp_nav_menu(array(
    'theme_location' => 'footer',
    'menu_class' => 'row justify-content-center list-unstyled',
));
?>
	</div>
	<div class="container">

		<div class="row">

			<div class="col-md-12 p-0">

				<footer class="site-footer" id="colophon">

					<div class="site-info">
							<small>
							&copy;<?php echo date("Y"); ?> Arc Education Centre
							<!-- <span class="sep"> | </span>
							Developed By <a class="adrian" href="http://adrianluk.com">Adrian Luk</a> -->
							</small>

					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer();?>

</body>

</html>

