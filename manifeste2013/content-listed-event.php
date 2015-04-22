<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

	
			<tr>
				<td class="date"><div class="day"><?php the_time(_('j')) ?></div><div class="month"><?php the_time(_('m')) ?></div></td>
				<td class="details">
					<a href="<?php echo get_permalink() ?>" title="<?php the_title_attribute() ?>" rel="bookmark">
						<span class="hour">
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
						</span> - 
						<span class="title"><?php the_title(); ?></span>
						<br /><span class="excerpt"><?php the_excerpt() ?></span>
					</a>
				</td>
				<td class="type"><?php
					$terms = wp_get_object_terms( $post->ID, 'event_type'); 
					foreach( $terms as $term ){
						echo $term->name.' ';
					}
				?></td>
				<!--<td class="action"><a href="<?php the_field('id_billetterie'); ?>"><?php echo __('Réserver'); ?>&nbsp;<i class="icon-play"></i></a></td>-->
				<?php
					$id_billetterie = get_field('id_billetterie');
					$url = display_link_billeterie($id_billetterie, ICL_LANGUAGE_CODE);	
				?>
				<?php if ($id_billetterie!="") { ?>
				<td class="action"><a class="hidden-external-link" href="<?php echo $url; ?>" target="_blank"><?php echo __('Réserver');?>&nbsp;<i class="icon-play"></i></a></td>
				<?php } else { ?>
				<td class="action">
				<?php } ?> 
			</tr>
