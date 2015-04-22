<?php
/**
 * Template Name: Tribunes
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
			<?php if ( has_post_thumbnail() ) : ?>
				<div class="entry-page-image">
					<?php the_post_thumbnail(); ?>
				</div><!-- .entry-page-image -->
			<?php endif; ?>
		<?php endwhile; // end of the loop. ?>


		<?php

			$taxonomies = array( 
			    'text_type',
			);

			$args = array(
    			'orderby' => 'slug', 
    			'order'   => 'ASC',
    		    'posts_per_page' => -1,
    			'parent' => 0,
    		);

			$member_group_terms = get_terms( $taxonomies, $args );
			//$member_group_terms = get_terms( 'text_type', array('parent' => 0) );
		?>
		<?php foreach ( $member_group_terms as $member_group_term ) { ?>
		
		<header class="entry-header">
			<h1 class="entry-title"><?php echo $member_group_term->name; ?></h1>
			<h2><?php $id = $member_group_term->term_id; echo term_description( $id, 'text_type' ); ?></h2>
		</header>
	
		<?php
		$args = array(
			'post_type' => 'text',
			'post_count' => -1,
			//'meta_key' => 'last_name',
			//'orderby' => 'meta_value',
			//'order' => 'ASC',
			'posts_per_page' => -1, 
			'tax_query' => array(
				array(
					'taxonomy' => 'text_type',
					'field' => 'slug',
					'terms' => $member_group_term->slug,
					'operator' => 'IN'
				)
			)
		);
		$query = new WP_Query( $args );
		?>
	
		<?php while ( $query->have_posts() ) : $query->the_post(); ?>
		<?php $terms = wp_get_post_terms( get_the_ID(), 'text_type', array("fields" => "slugs") ); 
		 	$classes = '';
		 	foreach($terms as $term){
				//echo ' '.$term;
				//hack, on enleve les a_ et b_
				if (strpos($term, "etincelle")) $term = "etincelle";
				if (strpos($term, "tribune")) $term = "tribune";
				
				$classes .= ' '.$term;
			}

			if (ICL_LANGUAGE_CODE == 'fr') {
				$libelle_tribune_internaute = __("tribune internaute");
				$libelle_tribune = __("tribune");
			} else if (ICL_LANGUAGE_CODE == 'en') {
				$libelle_tribune_internaute = __("user content");
				$libelle_tribune = __("article");
			}

		 ?> 
			<div class="<?php echo $classes; ?>">
				<?php if ( has_post_thumbnail() ) { ?>
					<a href="<?php the_permalink() ?>" title="<?php echo the_title_attribute() ?>" rel="bookmark">
						<span class="thumb">
							<?php the_post_thumbnail( 'thumbnail' ); ?>
						</span>
						<span class="text-tiny">
							<h2><?php the_title(); ?>
							<?php if (strpos($classes, "invites")) {
								echo("<span class='tag-tribune'>" . $libelle_tribune_internaute . "</span>");
							} else if (strpos($classes, "commande")) {
								echo("<span class='tag-tribune'>" . $libelle_tribune . "</span>");
							} ?>
							</h2>
							
								<span class="entry-infos">
									<?php 
										if (get_field('author')) {the_field('author'); echo " / ";}
									?> 
									<?php 
										if (get_field('function')) {the_field('function'); echo " / ";}
									?> 
									<?php echo get_the_date('d.m'); ?>
								</span>	

							<span class="entry-content">
								<?php the_excerpt(); ?>
							</span>
						</span>
					</a>
				<?php } else { ?>
					<a href="<?php the_permalink() ?>" title="<?php echo the_title_attribute() ?>" rel="bookmark">
						<span class="text-large">
							<h2><?php the_title(); ?>
							<?php if (strpos($classes, "invites")) {
								echo("<span class='tag-tribune'>" . $libelle_tribune_internaute . "</span>");
							} else if (strpos($classes, "commande")) {
								echo("<span class='tag-tribune'>" . $libelle_tribune . "</span>");
							} ?>
							</h2>
								<span class="entry-infos">
									<?php 
										if (get_field('author')) {the_field('author'); echo " / ";}
									?> 
									<?php 
										if (get_field('function')) {the_field('function'); echo " / ";}
									?> 
									<?php echo get_the_date('d.m'); ?>
								</span>	
							<span class="entry-content">
								<?php the_excerpt(); ?>
							</span>
						</span>
					</a>
				<?php } ?>
				<div style="clear:both"></div>
			</div>
		<?php endwhile; ?>
		<?php } ?>
		<?php while ( have_posts() ) : the_post(); ?>
		<footer class="entry-meta">
			<?php twentytwelve_entry_meta(); ?>
		</footer>
		<?php endwhile; // end of the loop. ?>

	</div><!-- #content -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>