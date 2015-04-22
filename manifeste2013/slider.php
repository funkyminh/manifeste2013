<!-- slider UI -->
<script type="text/javascript">
window.onload = montrer;
function montrer(){
document.getElementById('slider').style.display= "block";
}
</script>


	<div id="slider" style="display: none;">
	<?php
	$tmp = $wp_query;
	$wp_query = new WP_Query(array('post_type' => 'event', 'meta_key' => 'show_in_slider', 'meta_value' => True, 'orderby' => 'date', 'order' => 'ASC'));
	if(have_posts()) :
	    while(have_posts()) :
	        the_post();
	    	$arr_title_anchor = array('title' => '#event_'.get_the_ID());
	    	$arr_title_datas = array('title' => get_the_title(get_the_ID()));
	?>
	            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('nivothumb', $arr_title_anchor); ?></a>
				
	<?php
	    endwhile;
	endif;
	$wp_query = $tmp;
	?>
	</div>
	<!-- end slider UI -->
	<!-- text content for the slider -->
	<?php
	?>
<?php
	$tmp = $wp_query;
	$wp_query = new WP_Query(array('post_type' => 'event', 'meta_key' => 'show_in_slider', 'meta_value' => True, 'orderby' => 'date', 'order' => 'ASC'));
	if(have_posts()) :
	    while(have_posts()) :
	        the_post();
	    	//$arr_title_datas = array('id' => 'event_'.get_the_ID(), 'title' => get_the_title(get_the_ID()),
	    	//	'date' => date_i18n(get_option('date_format'), get_post_meta(get_the_ID(), 'date', true)));
	?>
	            <div id="event_<?php echo the_ID() ?>" class="nivo-html-caption">
	            	<a href="<?php the_permalink(); ?>" style="color:#fff;text-decoration: none;">
	            	<div class="event-date"><?php echo get_the_date('d F'); ?> <!-- if hour needed H:i --></div>
	            	<hr />
	            	<div class="event-title"><?php the_title(); ?></div>
	            	</a>
	            </div>
				
	<?php
	    endwhile;
	endif;
	$wp_query = $tmp;
	?>
	
	<?php
	?>
	<!-- end text content for the slider -->