<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->
	<footer id="colophon" role="contentinfo">
		<div class="site-info">
			© <?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?> |
			<?php icl_link_to_element(397); ?> |
			<?php icl_link_to_element(26); ?> |
			<?php icl_link_to_element(27); ?> |
			<?php icl_link_to_element(28); ?>
		</div><!-- .site-info -->
		<div class="yellow"></div>
		<div class="image">
		<?php if (is_front_page()) { ?>
			<ul class="partners">
				<li><a href="http://www.cnrs.fr" target="_blank"><img src="<?php bloginfo( "stylesheet_directory"); ?>/images/logo-cnrs.png" alt="site du CNRS" /></a></li>
				<li><a href="http://www.culturecommunication.gouv.fr" target="_blank"><img src="<?php bloginfo( "stylesheet_directory"); ?>/images/logo-ministere-culture.png" alt="site du ministère de la culture et de la communication"/></a></li>
				<li><a href="http://www.upmc.fr" target="_blank"><img src="<?php bloginfo( "stylesheet_directory"); ?>/images/logo-upmc.png" alt="site de l'UPMC" /></a></li>
			</ul>
		<?php } ?>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<!-- SlidesJS Required: Initialize SlidesJS with a jQuery doc ready -->
<script>
jQuery(function() {
	jQuery('#recent-comments').slidesjs({
		width: 252,
		height: 80,
		navigation: false,
		pagination: false
	});
	jQuery('#tweets').slidesjs({
		width: 252,
		height: 90,
		navigation: false,
		pagination: false
	});
	
	jQuery(window).load(function() { fixeColumnsHeight() });
	jQuery(window).resize(function() { fixeColumnsHeight() });
});
function fixeColumnsHeight() {
	jQuery('#primary').css("height", "auto");
	jQuery('#secondary').css("height", "auto");

	if ( jQuery('#main').width() >= 600 ) {
		var $columnOne = jQuery('#primary').height();
		var $columnTwo = jQuery('#secondary').height();
		
		var maxNumber = Math.max($columnOne, $columnTwo);
		
		jQuery('#primary').css("height", maxNumber + "px");
		jQuery('#secondary').css("height", maxNumber + "px");
	}
	
}
</script>
<!-- End SlidesJS Required -->
</body>
</html>