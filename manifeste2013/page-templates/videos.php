<?php
/**
 * Template Name: Videos
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
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
			<?php get_template_part( 'content', 'page-title' ); ?>
		<?php endwhile; // end of the loop. ?>

		<?php 

			$taxonomies = array( 
			    'video_type',
			);

			$args = array(
    			'orderby' => 'slug', 
    			'order'   => 'ASC',
    			'posts_per_page' => -1,
    		);

			//$member_group_terms = get_terms( 'video_type' );
			$member_group_terms = get_terms( $taxonomies, $args );

		?>
		<?php foreach ( $member_group_terms as $member_group_term ) { ?>

		<h2> 
			<?php echo $member_group_term->name; ?>
		</h2>
		<div>
			<?php $id = $member_group_term->term_id; echo term_description( $id, 'video_type' ); ?>	 
		</div>
		<?php
		$args = array(
			'post_type' => 'video',
			'posts_per_page' => -1,
			'tax_query' => array(
				array(
					'taxonomy' => 'video_type',
					'field' => 'slug',
					'terms' => $member_group_term->slug,
					'operator' => 'IN'
				)
			)
		);
		$query = new WP_Query( $args );
		?>

			<?php while ( $query->have_posts() ) : $query->the_post(); ?>
				<div class="item">
				<a href="<?php the_permalink(); ?>">
					<div class="image" style="width: 192px; height: 108px;">
						<?php the_post_thumbnail('rightcol-thumb') ?>
						<div class="icon_play_button"></div>
					</div>
					<div class="excerpt" style="display: table-cell; height: 50px;"><?php the_excerpt(); ?></div>
				</a>
				</div>
			<?php endwhile; ?>
			<div style="clear: both;"></div>
		<?php } ?><!--end foreach -->
		<?php while ( have_posts() ) : the_post(); ?>
			<footer class="entry-meta">
				<?php twentytwelve_entry_meta(); ?>
			</footer>
		<?php endwhile; // end of the loop. ?>
	</div><!-- #content -->
</div><!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>