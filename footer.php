<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package banco
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="wrapper">
			<div class="site-info">
				<span class="copyright">
                    &copy; <?php echo date('Y'); ?> <?php echo get_bloginfo('name'); ?>
                </span>
			</div><!-- .site-info -->
	</div><!-- wrapper -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<div class="triangle-bg1 trbg"></div>
<div class="triangle-bg2 trbg"><div class="slope"></div></div>
<div class="triangle-bg3 trbg"><div class="slope"></div></div>
<?php wp_footer(); ?>

</body>
</html>
