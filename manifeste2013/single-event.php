<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

<div id="primary" class="site-content">
	<ul class="lang-social-menu">
		<li><a href="https://twitter.com/ircam" target="_blank" class="twitter">twitter</a></li>
		<li><a href="https://www.facebook.com/iIRCAM" target="_blank" class="facebook">facebook</a></li>
		<li><?php do_action('icl_language_selector'); ?></li>
	</ul>
	<div id="content" role="main">
		<?php while ( have_posts() ) : the_post(); ?>
			
			<?php get_template_part( 'content-event' ); ?>

			<?php comments_template( '', true ); ?>

		<?php endwhile; // end of the loop. ?>

	</div><!-- #content -->
</div><!-- #primary -->
<?php get_sidebar('event'); ?>
<?php get_footer(); ?>