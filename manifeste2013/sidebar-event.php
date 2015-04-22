<?php
/**
 * The sidebar containing the main widget area.
 *
 * If no active widgets in sidebar, let's hide it completely.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
		<div id="secondary" class="widget-area" role="complementary">
			<aside class="widget widget_calendar">
				<h3 class="widget-title"><?php echo __('Calendar') ?></h3>
				<div id="calendar_wrap">
					<?php get_event_calendar(); ?>
				</div>
			</aside>
	
			<?php while ( have_posts() ) : the_post(); ?>
				
				<aside class="widget widget_download">
					<h3 class="widget-title"><?php echo __('Date & Lieu') ?></h3>
					<div class="content">
						<?php the_date(__('d F')); ?><br/>
						<?php the_field('time_and_place'); ?>
					</div>
					<h3 class="widget-title"><?php echo __('Tarifs & Infos pratiques') ?></h3>
					<div class="content"><?php the_field('pratical_info'); ?></div>
					<?php
						$id_billetterie = get_field('id_billetterie');
						$url = display_link_billeterie($id_billetterie, ICL_LANGUAGE_CODE);
					?>
					<br/>
					<?php if ($id_billetterie!="") { ?>
					<a id="booking-btn" class="hidden-external-link" href="<?php echo $url; ?>"><?php echo __('Réserver');?></a>
					<?php } ?>				
				</aside>
				
				<aside class="widget widget_playlist">
					<h3 class="widget-title"><i class="icon-headphones"></i> Playlist</h3>
					<?php echo get_playlist(get_field('id_playlist')); ?>
				</aside>
				<aside class="widget widget_download">
					<h3 class="widget-title"><?php echo __('Télécharger') ?></h3>
					<div class="content">
						<img src="<?php bloginfo( "stylesheet_directory"); ?>/images/program.jpg" />
						<?php if (get_field('program')!='') {?>
						<a href="<?php echo get_field('program'); ?>" class="hidden-external-link" target="_blank"><i class="icon-download"></i> <?php echo __('Le programme') ?></a><br />
						<?php } ?>
						<a href="<?php echo wp_get_attachment_url( 1387 ); ?> " class="hidden-external-link" target="_blank"><i class="icon-download"></i> <?php echo __('La brochure') ?></a>
						<div style="clear: both;"></div>
					</div>
				</aside>

			<?php endwhile; // end of the loop. ?>
		</div><!-- #secondary -->
	<?php endif; ?>
