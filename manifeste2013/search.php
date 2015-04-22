<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<section id="primary" class="site-content">
		<ul class="lang-social-menu">
			<li><a href="https://twitter.com/ircam" target="_blank" class="twitter">twitter</a></li>
			<li><a href="https://www.facebook.com/iIRCAM" target="_blank" class="facebook">facebook</a></li>
			<li><?php do_action('icl_language_selector'); ?></li>
		</ul>
		<div id="content" role="main">

		<?php if ( have_posts() ) : ?>

			<?php twentytwelve_content_nav( 'nav-above' ); ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
								<?php
								switch (get_post_type( $post )) {
								    case "artist":
								        $label = __('Portrait');
								        break;
								    case "event":
								        $label = __('Evénement');
								        break;
								    case "text":
								        $label = __('Tribune');
								        break;
								    case "video":
								        $label = __('Vidéo');
								        break;
								    default:
								        $label = __('Texte');
								        break;
								}
								?>
                <div class="item">                
	                <?php if ( has_post_thumbnail() ) { ?>
						<a href="<?php the_permalink() ?>" title="<?php echo the_title_attribute() ?>" rel="bookmark">
							<span class="thumb">
								<?php the_post_thumbnail( 'thumbnail' ); ?>
							</span>
							<span class="text-tiny">
								<h2><?php the_title(); ?></h2>
								
								<span class="entry-infos"><b><?php echo $label ; ?></b>
									<?php 
										if (get_field('author')) echo " / "; the_field('author'); 
									?> 
									<?php 
										if (get_field('function')) echo " / "; the_field('function'); 
									?> 
									/ <?php echo get_the_date('d.m'); ?>
								</span>	

								<span class="entry-content">
									<?php the_excerpt(); ?>
								</span>
							</span>
						</a>
					<?php } else { ?>
						<a href="<?php the_permalink() ?>" title="<?php echo the_title_attribute() ?>" rel="bookmark">
							<span class="text-large">
								<h2><?php the_title(); ?></h2>
								
								<span class="entry-infos"><b><?php echo $label ; ?></b>
									<?php 
										if (get_field('author')) echo " / "; the_field('author'); 
									?> 
									<?php 
										if (get_field('function')) echo " / "; the_field('function'); 
									?> 
									/ <?php echo get_the_date('d.m'); ?>
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

			<?php twentytwelve_content_nav( 'nav-below' ); ?>

		<?php else : ?>

			<article id="post-0" class="post no-results not-found">
				<header class="entry-header">
					<h1 class="entry-title"><?php _e( 'Nothing Found', 'twentytwelve' ); ?></h1>
				</header>

				<div class="entry-content">
					<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'twentytwelve' ); ?></p>
					<?php get_search_form(); ?>
				</div><!-- .entry-content -->
			</article><!-- #post-0 -->

		<?php endif; ?>

		</div><!-- #content -->
	</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>