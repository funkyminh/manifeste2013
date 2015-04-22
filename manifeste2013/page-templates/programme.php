<?php
/**
 * Template Name: Programme
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

			<?php 
				//get_template_part( 'content', 'page' ); 
				the_title('<header class="entry-header"><h1 class="entry-title">', '</h1></header>');
			?>

		<?php endwhile; // end of the loop. ?>


<div class="table-container" style="width:100%; overflow-x:auto;">
		<table class="program">
		<?php $loop = new WP_Query( array( 'post_type' => 'event', 'posts_per_page' => -1, 'order' => 'ASC' ) ); ?>
			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

			<tr>
				<td class="date"><div class="day"><?php the_time(_('j')) ?></div><div class="month"><?php the_time(_('m')) ?></div></td>
				<td class="details"><a href="<?php echo get_permalink() ?>" title="<?php the_title_attribute() ?>" rel="bookmark"><span class="hour">
					<?php 
					if (ICL_LANGUAGE_CODE == 'fr') {
					 	if (get_field('hours_multiple')!="") {
					 		$horaire = the_field('hours_multiple');
					 	} else {
					 		$horaire = get_the_time('H\Hi');
					 	}
					} else {
						if (get_field('hours_multiple')!="") {
							$horaire = the_field('hours_multiple');
						} else {
							$horaire = get_the_time('g:ia');
						}
					}
					echo $horaire;
					?>
				</span> - <span class="title"><?php the_title(); ?></span><br /><span class="excerpt"><?php the_excerpt() ?></span></a></td>
				<td class="type"><?php
					$terms = wp_get_object_terms( $post->ID, 'event_type'); 
					foreach( $terms as $term ){
						echo $term->name.' ';
					}
				?></td>
				<!--<td class="action"><a href="<?php the_field('id_billetterie'); ?>">Réserver <i class="icon-play"></i></a></td>-->
				<?php
					$id_billetterie = get_field('id_billetterie');
					$url = display_link_billeterie($id_billetterie, ICL_LANGUAGE_CODE);
				?>
				<?php if ($id_billetterie!="") { ?>
				<td class="action"><a class="hidden-external-link" href="<?php echo $url; ?>"><?php echo __('Réserver');?>&nbsp;<i class="icon-play"></i></a></td>
				<?php } else { ?>
				<td class="action">
				<?php } ?> 
			</tr>
		<?php endwhile; ?>
	</table>
</div>
			<?php while ( have_posts() ) : the_post(); ?>
		<footer class="entry-meta">
			<?php twentytwelve_entry_meta(); ?>
		</footer>
		<?php endwhile; // end of the loop. ?>



	</div><!-- #content -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>