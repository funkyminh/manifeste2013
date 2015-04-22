<?php
/**
 * The template for displaying Tag pages.
 *
 * Used to display archive-type pages for posts in a tag.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
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
		<header class="entry-header">
			<h1 class="entry-title"><?php printf( __( 'Tag : %s', 'twentytwelve' ), '<span>' . single_tag_title( '', false ) . '</span>' ); ?>
		</header><!-- .entry-header -->
		<div><p><?php echo tag_description();?></p></div>
		<br/><br/>

		<?php 
		global $wp_query;
		//$args = array_merge( $wp_query->query_vars, array( 'orderby' => 'date', 'order' => 'ASC', 'posts_per_page' => 100 ) );
		$args = array_merge( $wp_query->query_vars, array( 'posts_per_page' => 100 ) );
		$posts=query_posts( $args );
		//$posts=query_posts('hannigan&post_type=any');
		if (have_posts()) : ?>

       

            <?php
            /* Start the Loop */
            while ( have_posts() ) : the_post();

                /* Include the post format-specific template for the content. If you want to
                 * this in a child theme then include a file called called content-___.php
                 * (where ___ is the post format) and that will be used instead.
                 */
                //get_template_part( 'content', get_post_format() );
                ?>


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
								<!--<span class="entry-infos"><?php echo get_post_type( $post ); ?> / <?php the_field('author'); ?> / <?php the_field('function'); ?> / <?php //the_date('d.m'); ?></span>-->

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
								<!--<span class="entry-infos"><?php the_field('author'); ?> / <?php the_field('function'); ?> / <?php //the_date('d.m'); ?></span>-->
								<span class="entry-infos"><b><?php echo $label; ?></b>
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
            <?php
            endwhile;

            twentytwelve_content_nav( 'nav-below' );
            ?>

        <?php else : ?>
            <?php get_template_part( 'content', 'none' ); ?>
        <?php endif; ?>

        </div><!-- #content -->
    </section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>