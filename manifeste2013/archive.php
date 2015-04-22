<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each specific one. For example, Twenty Twelve already
 * has tag.php for Tag archives, category.php for Category archives, and
 * author.php for Author archives.
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
		<!--<li><?php do_action('icl_language_selector'); ?></li>-->
		<?php 
			$req = $wp->request;
			if(ICL_LANGUAGE_CODE == 'fr'){
				$req_fr = home_url($req);
				$req_en = home_url('en/'.$req);
			}
			else{
				$req_fr = home_url(substr($req, 3));
				$req_en = home_url($req);
			}
		?>
		<?php if(ICL_LANGUAGE_CODE == 'fr') : ?>
		<li>
			<div id="lang_sel_list">           
            <ul>
                                <li class="icl-en">          
                    <a class="lang_sel_other" href="<?php echo $req_en ?>">
                                        English                    </a>
                </li>
                                <li class="icl-fr">          
                    <a class="lang_sel_sel" href="<?php echo $req_fr ?>">
                                        Français                    </a>
                </li>
            </ul>
			</div>
		</li>
		<?php else : ?>
		<li>
			<div id="lang_sel_list">           
            <ul>
                                <li class="icl-en">          
                    <a class="lang_sel_sel" href="<?php echo $req_en ?>">
                                        English                    </a>
                </li>
                                <li class="icl-fr">          
                    <a class="lang_sel_other" href="<?php echo $req_fr ?>">
                                        Français                    </a>
                </li>
            </ul>
			</div>
		</li>

		<?php endif; ?>
	</ul>
		<div id="content" role="main">

		<?php if ( have_posts() ) : ?>

		<table class="program">
			<?php
			/* Start the Loop */
			global $query_string;
			query_posts($query_string . '&order=ASC' . '&posts_per_page=-1' );
			while ( have_posts() ) : the_post();

				/* Include the post format-specific template for the content. If you want to
				 * this in a child theme then include a file called called content-___.php
				 * (where ___ is the post format) and that will be used instead.
				 */
				get_template_part( 'content', 'listed-event' );

			endwhile;

			twentytwelve_content_nav( 'nav-below' );
			?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>
		</table>

		</div><!-- #content -->
	</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>