<?php
/**
 * Template Name: Front Page Template
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
				<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>

			<div id="edito-link"><?php icl_link_to_element(282); ?><!--<a title="Edito" href="/wordpress/?page_id=282"><?php echo __("L'édito");?></a>--></div>
			
			<div id="last-articles">
				<h2 class="intertitre"><?php echo __('Derniers articles') ?></h2>
				
		 		<?php $loop = new WP_Query( array( 'post_type' => 'text', 'posts_per_page' => 3) );
		 		$i = 0;?>
				<?php while ( $loop->have_posts() ) : $loop->the_post(); $i++; ?>
					<div class="column <?php if ($i==2) {?>middle-column<?php } ?>">
						<a href="<?php echo get_permalink(); ?>" title="<?php echo the_title_attribute( 'echo=0' ) ?>" rel="bookmark">
						<?php 
							if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
								the_post_thumbnail('homepage-thumb');
				 				the_title( '<h2>', '</h2>' ); ?>
								<!--<span class="entry-infos"><?php the_field('author'); ?> - <?php the_date('d.m'); ?></span>-->
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
									<?php //the_excerpt(); ?>
									<?php echo substr(get_the_excerpt(), 0,100); echo "[...]"; ?>
								</span>
							<?php } else {
				 				the_title( '<h2>', '</h2>' ); ?>
								<!--<span class="entry-infos"><?php the_field('author'); ?> - <?php the_date('d.m'); ?></span>-->
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
									<?php //the_excerpt(); ?>
									<?php echo substr(get_the_excerpt(), 0,200); echo "[...]"; ?>
								</span>
							<?php } 
						?>
						 <div style="font-size:0.9em;text-align:right;color:#EB552C"><?php comments_number( __('Commenter'), __('1 commentaire'), __('% commentaires') ); ?></div>
						 </a>
					</div>
				<?php endwhile; ?>
				<div style="clear:both"></div>
			</div>
			
			<h2 class="intertitre"><?php echo __('Revue de Web') ?></h2>
			<?php get_posts_from_scoopit() ?>
			
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar( 'custom-front' ); ?>
<?php get_footer(); ?>