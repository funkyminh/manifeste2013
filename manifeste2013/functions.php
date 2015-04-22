<?php 
/**
 * Activate Add-ons
 * Here you can enter your activation codes to unlock Add-ons to use in your theme. 
 * Since all activation codes are multi-site licenses, you are allowed to include your key in premium themes.
 */ 

//require_once('ical.php');

function my_acf_settings( $options )
{
	// activate add-ons
	$options['activation_codes']['repeater'] = 'XXXX-XXXX-XXXX-XXXX';
	$options['activation_codes']['options_page'] = 'XXXX-XXXX-XXXX-XXXX';
	$options['activation_codes']['flexible_content'] = 'XXXX-XXXX-XXXX-XXXX';
	$options['activation_codes']['gallery'] = 'XXXX-XXXX-XXXX-XXXX';
	
	// setup other options (http://www.advancedcustomfields.com/docs/filters/acf_settings/)
	
	return $options;
	
}
add_filter('acf_settings', 'my_acf_settings');


/**
* Register field groups
* The register_field_group function accepts 1 array which holds the
relevant data to register a field group
* You may edit the array as you see fit. However, this may result in
errors if the array is not compatible with ACF
* This code must run every time the functions.php file is read
*/

if(function_exists("register_field_group"))
{
 register_field_group(array (
   'id' => '5113f18f1f90a',
   'title' => 'event fields',
   'fields' =>
   array (
	 0 =>
	 array (
	   'key' => 'field_5',
	   'label' => 'Subtitle',
	   'name' => 'subtitle',
	   'type' => 'text',
	   'order_no' => 0,
	   'instructions' => '',
	   'required' => 0,
	   'conditional_logic' =>
	   array (
		 'status' => 0,
		 'rules' =>
		 array (
		   0 =>
		   array (
			 'field' => 'null',
			 'operator' => '==',
			 'value' => '',
		   ),
		 ),
		 'allorany' => 'all',
	   ),
	   'default_value' => '',
	   'formatting' => 'none',
	 ),
	 1 =>
	 array (
	   'key' => 'field_13',
	   'label' => 'Pratical info',
	   'name' => 'pratical_info',
	   'type' => 'wysiwyg',
	   'order_no' => 6,
	   'instructions' => '',
	   'required' => 0,
	   'conditional_logic' =>
	   array (
		 'status' => 0,
		 'rules' =>
		 array (
		   0 =>
		   array (
			 'field' => 'null',
			 'operator' => '==',
			 'value' => '',
		   ),
		 ),
		 'allorany' => 'all',
	   ),
	   'default_value' => '',
	   'toolbar' => 'full',
	   'media_upload' => 'yes',
	   'the_content' => 'yes',
	 ),
	 8 =>
	 array (
	   'key' => 'field_22',
	   'label' => 'Horaires multiples',
	   'name' => 'hours_multiple',
	   'type' => 'text',
	   'order_no' => 8,
	   'instructions' => '',
	   'required' => 0,
	   'conditional_logic' =>
	   array (
		 'status' => 0,
		 'rules' =>
		 array (
		   0 =>
		   array (
			 'field' => 'null',
			 'operator' => '==',
			 'value' => '',
		   ),
		 ),
		 'allorany' => 'all',
	   ),
	   'default_value' => '',
	   'formatting' => 'html',
	 ),
	 2 =>
	 array (
	   'key' => 'field_14',
	   'label' => 'Id billetterie',
	   'name' => 'id_billetterie',
	   'type' => 'text',
	   'order_no' => 7,
	   'instructions' => '',
	   'required' => 0,
	   'conditional_logic' =>
	   array (
		 'status' => 0,
		 'rules' =>
		 array (
		   0 =>
		   array (
			 'field' => 'null',
			 'operator' => '==',
			 'value' => '',
		   ),
		 ),
		 'allorany' => 'all',
	   ),
	   'default_value' => '',
	   'formatting' => 'html',
	 ),
	 3 =>
	 array (
	   'key' => 'field_15',
	   'label' => 'Id typo3',
	   'name' => 'id_typo3',
	   'type' => 'text',
	   'order_no' => 8,
	   'instructions' => '',
	   'required' => 0,
	   'conditional_logic' =>
	   array (
		 'status' => 0,
		 'rules' =>
		 array (
		   0 =>
		   array (
			 'field' => 'null',
			 'operator' => '==',
			 'value' => '',
		   ),
		 ),
		 'allorany' => 'all',
	   ),
	   'default_value' => '',
	   'formatting' => 'html',
	 ),
	 4 =>
	 array (
	   'key' => 'field_17',
	   'label' => 'Show in slider',
	   'name' => 'show_in_slider',
	   'type' => 'true_false',
	   'order_no' => 10,
	   'instructions' => '',
	   'required' => 0,
	   'conditional_logic' =>
	   array (
		 'status' => 0,
		 'rules' =>
		 array (
		   0 =>
		   array (
			 'field' => 'field_17',
			 'operator' => '==',
			 'value' => 1,
		   ),
		 ),
		 'allorany' => 'all',
	   ),
	   'message' => '',
	 ),
	 5 =>
	 array (
	   'key' => 'field_20',
	   'label' => 'Programme',
	   'name' => 'program',
	   'type' => 'text',
	   'order_no' => 0,
	   'instructions' => '',
	   'required' => 0,
	   'conditional_logic' =>
	   array (
		 'status' => 0,
		 'rules' =>
		 array (
		   0 =>
		   array (
			 'field' => 'null',
			 'operator' => '==',
		   ),
		 ),
		 'allorany' => 'all',
	   ),
	   'default_value' => '',
	   'formatting' => 'html',
	 ),
	 6 =>
	 array (
	   'key' => 'field_4',
	   'label' => 'Time and place',
	   'name' => 'time_and_place',
	   'type' => 'wysiwyg',
	   'order_no' => 0,
	   'instructions' => '',
	   'required' => 0,
	   'conditional_logic' =>
	   array (
		 'status' => 0,
		 'rules' =>
		 array (
		   0 =>
		   array (
			 'field' => 'null',
			 'operator' => '==',
		   ),
		 ),
		 'allorany' => 'all',
	   ),
	   'default_value' => '',
	   'toolbar' => 'full',
	   'media_upload' => 'yes',
	   'the_content' => 'yes',
	 ),
	 7 =>
	 array (
	   'key' => 'field_21',
	   'label' => 'Id playlist',
	   'name' => 'id_playlist',
	   'type' => 'text',
	   'order_no' => 8,
	   'instructions' => '',
	   'required' => 0,
	   'conditional_logic' =>
	   array (
		 'status' => 0,
		 'rules' =>
		 array (
		   0 =>
		   array (
			 'field' => 'null',
			 'operator' => '==',
			 'value' => '',
		   ),
		 ),
		 'allorany' => 'all',
	   ),
	   'default_value' => '',
	   'formatting' => 'html',
	 ),
   ),
   'location' =>
   array (
	 'rules' =>
	 array (
	   0 =>
	   array (
		 'param' => 'post_type',
		 'operator' => '==',
		 'value' => 'event',
		 'order_no' => 0,
	   ),
	 ),
	 'allorany' => 'all',
   ),
   'options' =>
   array (
	 'position' => 'normal',
	 'layout' => 'no_box',
	 'hide_on_screen' =>
	 array (
	 ),
   ),
   'menu_order' => 0,
 ));
 register_field_group(array (
   'id' => '5113f18f21bd2',
   'title' => 'text fields',
   'fields' =>
   array (
	 0 =>
	 array (
	   'key' => 'field_18',
	   'label' => 'Author',
	   'name' => 'author',
	   'type' => 'text',
	   'order_no' => 0,
	   'instructions' => '',
	   'required' => 0,
	   'conditional_logic' =>
	   array (
		 'status' => 0,
		 'rules' =>
		 array (
		   0 =>
		   array (
			 'field' => 'null',
			 'operator' => '==',
			 'value' => '',
		   ),
		 ),
		 'allorany' => 'all',
	   ),
	   'default_value' => '',
	   'formatting' => 'none',
	 ),
	 1 =>
	 array (
	   'key' => 'field_19',
	   'label' => 'Function',
	   'name' => 'function',
	   'type' => 'text',
	   'order_no' => 1,
	   'instructions' => '',
	   'required' => 0,
	   'conditional_logic' =>
	   array (
		 'status' => 0,
		 'rules' =>
		 array (
		   0 =>
		   array (
			 'field' => 'null',
			 'operator' => '==',
			 'value' => '',
		   ),
		 ),
		 'allorany' => 'all',
	   ),
	   'default_value' => '',
	   'formatting' => 'none',
	 ),
   ),
   'location' =>
   array (
	 'rules' =>
	 array (
	   0 =>
	   array (
		 'param' => 'post_type',
		 'operator' => '==',
		 'value' => 'text',
		 'order_no' => 0,
	   ),
	 ),
	 'allorany' => 'all',
   ),
   'options' =>
   array (
	 'position' => 'normal',
	 'layout' => 'no_box',
	 'hide_on_screen' =>
	 array (
	 ),
   ),
   'menu_order' => 0,
 ));
 register_field_group(array (
   'id' => '511aa075b80e7',
   'title' => 'ARTIST',
   'fields' =>
   array (
	 0 =>
	 array (
	   'key' => 'field_1',
	   'label' => 'Last name',
	   'name' => 'last_name',
	   'type' => 'text',
	   'order_no' => 0,
	   'instructions' => '',
	   'required' => 0,
	   'conditional_logic' =>
	   array (
		 'status' => 0,
		 'rules' =>
		 array (
		   0 =>
		   array (
			 'field' => 'null',
			 'operator' => '==',
			 'value' => '',
		   ),
		 ),
		 'allorany' => 'all',
	   ),
	   'default_value' => '',
	   'formatting' => 'none',
	 ),
	 1 =>
	 array (
	   'key' => 'field_2',
	   'label' => 'First name',
	   'name' => 'first_name',
	   'type' => 'text',
	   'order_no' => 1,
	   'instructions' => '',
	   'required' => 0,
	   'conditional_logic' =>
	   array (
		 'status' => 0,
		 'rules' =>
		 array (
		   0 =>
		   array (
			 'field' => 'null',
			 'operator' => '==',
		   ),
		 ),
		 'allorany' => 'all',
	   ),
	   'default_value' => '',
	   'formatting' => 'none',
	 ),
   ),
   'location' =>
   array (
	 'rules' =>
	 array (
	   0 =>
	   array (
		 'param' => 'post_type',
		 'operator' => '==',
		 'value' => 'artist',
		 'order_no' => 0,
	   ),
	 ),
	 'allorany' => 'all',
   ),
   'options' =>
   array (
	 'position' => 'normal',
	 'layout' => 'no_box',
	 'hide_on_screen' =>
	 array (
	 ),
   ),
   'menu_order' => 0,
 ));
 register_field_group(array (
   'id' => '511aa075b8d10',
   'title' => 'VIDEO',
   'fields' =>
   array (
	 0 =>
	 array (
	   'key' => 'field_3',
	   'label' => 'Dailymotion Id',
	   'name' => 'dailymotion_id',
	   'type' => 'text',
	   'order_no' => 0,
	   'instructions' => '',
	   'required' => 0,
	   'conditional_logic' =>
	   array (
		 'status' => 0,
		 'rules' =>
		 array (
		   0 =>
		   array (
			 'field' => 'null',
			 'operator' => '==',
		   ),
		 ),
		 'allorany' => 'all',
	   ),
	   'default_value' => '',
	   'formatting' => 'none',
	 ),
   ),
   'location' =>
   array (
	 'rules' =>
	 array (
	   0 =>
	   array (
		 'param' => 'post_type',
		 'operator' => '==',
		 'value' => 'video',
		 'order_no' => 0,
	   ),
	 ),
	 'allorany' => 'all',
   ),
   'options' =>
   array (
	 'position' => 'normal',
	 'layout' => 'no_box',
	 'hide_on_screen' =>
	 array (
	 ),
   ),
   'menu_order' => 0,
 ));
}

function manifeste_scripts_styles() {
	global $wp_styles;
	/*
	 * Loads the Internet Explorer specific stylesheet.
	 */
	wp_enqueue_style( 'twentytwelve-ie', get_bloginfo('stylesheet_directory') . '/css/ie.css', array( 'twentytwelve-style' ), '20121010' );
	$wp_styles->add_data( 'twentytwelve-ie', 'conditional', 'lt IE 9' );
}
add_action( 'wp_enqueue_scripts', 'manifeste_scripts_styles' );


/* nivo slider support */

// add nivo javascript
function theme_add_scripts() {
	wp_enqueue_script('jquery'); //omit if jQuery already included
	wp_enqueue_script('nivoslider', get_bloginfo('stylesheet_directory').'/js/nivo-slider/jquery.nivo.slider.pack.js');
	wp_enqueue_script('ircamslider', get_bloginfo('stylesheet_directory').'/js/slider.js');
	wp_enqueue_script('slidesjs', get_bloginfo('stylesheet_directory').'/js/jquery.slides.min.js');
}
add_action('init', 'theme_add_scripts');

// add nivo stylesheets
function theme_add_styles() {
  wp_enqueue_style('nivoslider', get_bloginfo('stylesheet_directory').'/js/nivo-slider/nivo-slider.css');
  wp_enqueue_style('nivoslider-custom', get_bloginfo('stylesheet_directory').'/js/nivo-slider/themes/default/default.css');
}
add_action('init', 'theme_add_styles');

// add support for thumbnails to get thumbnails
add_theme_support('post-thumbnails');
add_image_size('nivothumb', 1040, 357, true);
add_image_size( 'homepage-thumb', 210, 210, true );
add_image_size( 'rightcol-thumb', 600, 338, true );

/**
 * Same arguments that `register_post_type()`
 *
 * -ttp://codex.wordpress.org/Function_Reference/register_post_type
 * -ttp://seebz.net/notes/?note_id=145
 */
class Custom_Post_Type_With_Dates {
  
  protected $_post_type;
  protected $_args;
  
  public function __construct( $post_type, $args = array() ) {
	$this->_post_type = $post_type;
	$this->_args = $args;
	
	add_action('init', array(&$this, 'register_post_type'));
	add_action('rewrite_rules_array', array(&$this, 'rewrite_rules_array'));
	add_action('wp_loaded', array(&$this, 'wp_loaded'));
  }
  
  public function register_post_type() {
	register_post_type($this->_post_type, $this->_args);
  }
  
  public function rewrite_rules_array( $rules ) {
	$post_type = $this->_post_type;
	if ( isset($this->_args['rewrite']) && is_array($this->_args['rewrite'])
	  && isset($this->_args['rewrite']['slug']) ) {
	  $slug = $this->_args['rewrite']['slug'];
	} else {
	  $slug = $post_type;
	}
	$new_rules = $this->_get_new_rules();
	return ($new_rules + $rules);
  }
  
  public function wp_loaded() {
	$test_key = current(array_keys($this->_get_new_rules()));
	$rules = get_option('rewrite_rules');
	if (!array_key_exists($test_key, $rules)) {
	  global $wp_rewrite;
	  $wp_rewrite->flush_rules();
	}
  }
  
  protected function _get_new_rules() {
	$post_type = $this->_post_type;
	if ( isset($this->_args['rewrite']) && is_array($this->_args['rewrite'])
	  && isset($this->_args['rewrite']['slug']) ) {
	  $slug = $this->_args['rewrite']['slug'];
	} else {
	  $slug = $post_type;
	}
	return array(
	  "{$slug}/([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$" => 'index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&feed=$matches[4]' . '&post_type=' .  $post_type,
	  "{$slug}/([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$" => 'index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&feed=$matches[4]' . '&post_type=' .  $post_type,
	  "{$slug}/([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/page/?([0-9]{1,})/?$" => 'index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&paged=$matches[4]' . '&post_type=' .	$post_type,
	  "{$slug}/([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/?$" => 'index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]' . '&post_type=' .	$post_type,
	  "{$slug}/([0-9]{4})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$" => 'index.php?year=$matches[1]&monthnum=$matches[2]&feed=$matches[3]' . '&post_type=' .  $post_type,
	  "{$slug}/([0-9]{4})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$" => 'index.php?year=$matches[1]&monthnum=$matches[2]&feed=$matches[3]' . '&post_type=' .	 $post_type,
	  "{$slug}/([0-9]{4})/([0-9]{1,2})/page/?([0-9]{1,})/?$" => 'index.php?year=$matches[1]&monthnum=$matches[2]&paged=$matches[3]' . '&post_type=' .  $post_type,
	  "{$slug}/([0-9]{4})/([0-9]{1,2})/?$" => 'index.php?year=$matches[1]&monthnum=$matches[2]' . '&post_type=' .  $post_type,
	  "{$slug}/([0-9]{4})/feed/(feed|rdf|rss|rss2|atom)/?$" => 'index.php?year=$matches[1]&feed=$matches[2]' . '&post_type=' .	$post_type,
	  "{$slug}/([0-9]{4})/(feed|rdf|rss|rss2|atom)/?$" => 'index.php?year=$matches[1]&feed=$matches[2]' . '&post_type=' .  $post_type,
	  "{$slug}/([0-9]{4})/page/?([0-9]{1,})/?$" => 'index.php?year=$matches[1]&paged=$matches[2]' . '&post_type=' .	 $post_type,
	  "{$slug}/([0-9]{4})/?$" => 'index.php?year=$matches[1]' . '&post_type=' .	 $post_type,
	);
  }
}
// HACK: special custom post type with archives

 new Custom_Post_Type_With_Dates( 'event',
	array(
	  'labels' => array(
		'name' => __( 'Events' ),
		'singular_name' => __( 'Event' )
	  ),
	  'public' => true,
	  'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
	  'rewrite' => array('slug' => 'event', 'with_front' => false),
	  'has_archive' => true /* to allow archive pages for event */
	)
  ); 


add_action( 'init', 'create_post_type' );


/**
* Future => Published for event post
*
* allow events to be shown even if they are set in the future
* 
*/
remove_action('future_post', '_future_post_hook');

add_filter( 'wp_insert_post_data', 'futurenow_do_not_set_events_to_future' );

function futurenow_do_not_set_events_to_future( $data ) {
	if ( $data['post_status'] == 'future' && $data['post_type'] == 'event' )
		$data['post_status'] = 'publish';
	return $data;
}


/**
* Sync typo3 events admin page
*
* allow events to be shown even if they are set in the future
* inspired from http://codex.wordpress.org/Administration_Menus#Using_add_submenu_page
*/
add_action('admin_menu' , 'sync_typo3_events');
 
function sync_typo3_events() {
	add_submenu_page('edit.php?post_type=event', 'Sync Ircam typo3 events Admin', 'Sync typo3 events', 'edit_posts', basename(__FILE__), 'sync_typo3_events_function');
}

function sync_typo3_events_function() {

 //must check that the user has the required capability
 if (!current_user_can('manage_options'))
 {
   wp_die( __('You do not have sufficient permissions to access this page.') );
 }
 $hidden_field_name = 'mt_submit_hidden';
 $event_id_field_name = 'event_id_field_name';
   // See if the user has posted us some information
   // If they did, this hidden field will be set to 'Y'
 if( isset($_POST[ $hidden_field_name ]) && $_POST[ $hidden_field_name ] == 'Y' ) {
   // sync events

 	/*
   if ($_POST[ $event_id_field_name ] == ''){
     get_events_from_typo3_and_create_events_in_wp();
   }
   else{
     get_events_from_typo3_and_create_events_in_wp($_POST[ $event_id_field_name ]);
   }
   */
   get_events_from_typo3_and_create_events_in_wp($_POST[ $event_id_field_name ]);
   ?>
   <div class="updated"><p><strong><?php _e('Well done, events synced', 'menu-test' ); ?></strong></p></div>
   <?php

 }

   // Now display the settings editing screen

 echo '<div class="wrap">';

   // header

 echo "<h2>" . __( 'Sync typo3 events', 'menu-test' ) . "</h2>";

   // settings form

 ?>

 <form name="form1" method="post" action="">
   <input type="hidden" name="<?php echo $hidden_field_name; ?>" value="Y">
   <input type="text" name="<?php echo $event_id_field_name; ?>" value="">
   <p class="submit">
     <input type="submit" name="Submit" class="button-primary" value="<?php esc_attr_e('Sync') ?>" />
   </p>

 </form>
</div>

<?php

}



function create_post_type() {
  
  register_post_type( 'artist',
	array(
	  'labels' => array(
		'name' => __( 'Artists' ),
		'singular_name' => __( 'Artist' )
	  ),
	  'public' => true,
	  'supports' => array('title', 'editor', 'thumbnail', 'excerpt')
	)
  );
  register_post_type( 'video',
	array(
	  'labels' => array(
		'name' => __( 'Videos' ),
		'singular_name' => __( 'Video' )
	  ),
	  'public' => true,
	  'supports' => array('title', 'excerpt', 'editor', 'thumbnail', 'comments')
	)
  );
  register_post_type( 'text',
	array(
	  'labels' => array(
		'name' => __( 'Texts' ),
		'singular_name' => __( 'Text' )
	  ),
	  'public' => true,
	  'supports' => array('title', 'excerpt', 'editor', 'thumbnail', 'comments')
	)
  );
  register_taxonomy(
	'role',
	'artist',
	array(
	  'label' => __( 'Role' ),
	  'rewrite' => array( 'slug' => 'role'),
	  'hierarchical' => true
	)
  );
  register_taxonomy(
	'event_type',
	'event',
	array(
	  'label' => __( 'Event type' ),
	  'rewrite' => array( 'slug' => 'event_type'),
	  'hierarchical' => true
	)
  );
  register_taxonomy(
	'text_type',
	'text',
	array(
	  'label' => __( 'Text type' ),
	  'rewrite' => array( 'slug' => 'text_type'),
	  'hierarchical' => true
	)
  );
  register_taxonomy(
	'video_type',
	'video',
	array(
	  'label' => __( 'Video type' ),
	  'rewrite' => array( 'slug' => 'video_type'),
	  'hierarchical' => true
	)
  );
}


/* create custom pages */

// explanation http://www.krishnakantsharma.com/2011/01/activationdeactivation-hook-for-wordpress-theme/

function on_switch_theme_function() {

// contact post
$contact_post = array(
  'post_title'	  => 'Contact',
  'post_name'	  => 'contact',
  'post_content'  => '[contact-form-7 id="55" title="Formulaire de contact 1"]',
  'post_status'	  => 'publish',
  'post_author'	  => 1,
  'post_type'	  => 'page'
);

// info post
$info_post = array(
  'post_title'	  => 'Infos pratiques / Réservations',
  'post_name'	  => 'info',
  'post_content'  => 'Infos pratiques / Réservations',
  'post_status'	  => 'publish',
  'post_author'	  => 1,
  'post_type'	  => 'page'
);

// partenaires post
$partners_post = array(
  'post_title'	  => 'Partenaires',
  'post_name'	  => 'partners',
  'post_content'  => 'Partenaires',
  'post_status'	  => 'publish',
  'post_author'	  => 1,
  'post_type'	  => 'page'
);

// newsletter post
$newsletter_post = array(
  'post_title'	  => 'Newsletter',
  'post_name'	  => 'newsletter',
  'post_content'  => 'Newsletter',
  'post_status'	  => 'publish',
  'post_author'	  => 1,
  'post_type'	  => 'page'
);

// Insert the post into the database
if( null == get_page_by_title( 'contact' ) ) {
  $contact_post_id = wp_insert_post( $contact_post );
  mwm_wpml_translate_post($contact_post_id, $contact_post, 'en');
}
if( null == get_page_by_title( 'info' ) ) {
  $info_post_id = wp_insert_post( $info_post );
  mwm_wpml_translate_post($info_post_id, $info_post, 'en');
}
if( null == get_page_by_title( 'partners' ) ) {
  $partners_post_id = wp_insert_post( $partners_post );
  mwm_wpml_translate_post($partners_post_id, $partners_post, 'en');
}
if( null == get_page_by_title( 'newsletter' ) ) {
  $newsletter_post_id = wp_insert_post( $newsletter_post );
  mwm_wpml_translate_post($$newsletter_post_id, $newsletter_post, 'en');
}


}



// Get events from typo3 
/*
function get_events_from_typo3_and_create_events_in_wp(){
  global $wpdb;
  

$query = "DELETE FROM $wpdb->posts WHERE post_type = 'event'
";
$wpdb->query($query);

// create events

// db connection
//$con = mysql_connect("127.0.0.1","root","admin");
//$db_selected = mysql_select_db('www', $con);
$con = mysql_connect("127.0.0.1","root","newpwd");
$db_selected = mysql_select_db('www_typo3', $con);

$sql = 'SELECT uid, title_fr, title_en, dates, subtitle_fr, subtitle_en, '.
  'time_place_fr, time_place_en, short_description_fr, short_description_en, '.
  'long_description_fr, long_description_en, infos_fr, infos_en, '.
  'event_type, billetterie_id FROM tx_ircam_events WHERE uid = 1214';

// get the events
$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error()); 
//$datas = mysql_fetch_assoc($req);

while ($row = mysql_fetch_assoc($req))
{ 
   $rows[] = $row;
}

// close sql connexion
mysql_close(); 

// reopen the wp connexion
$con = mysql_connect("127.0.0.1","root","newpwd");
$db_selected = mysql_select_db('wp_db', $con);

foreach($rows as $row)
	{
	  // create the event_posts

	  $post_dates = explode(';', $row['dates']);
	  $post_date = explode('-', $post_dates[0]);
	  $pd = $post_date[2].'-'.$post_date[1].'-'.$post_date[0].' 10:00:00';
	  $event_post_fr = array(
		'post_title' => $row['title_fr'],
		'post_content' => $row['long_description_fr'],
		'post_excerpt' => $row['short_description_fr'],
		'post_type' => 'event',
		'post_date' => $pd , 
		'post_status' => 'publish',
		'comment_status' => 'closed'
	  );
	  // insert the event
	  $post_id = wp_insert_post( $event_post_fr );
	  
	  // get the translation id of the event
	  $event_post_en = array(
		'post_title' => $row['title_en'],
		'post_content' => $row['long_description_en'],
		'post_excerpt' => $row['short_description_en'],
		'post_type' => 'event',
		'post_subtitle' => $row['subtitle_en'],
		'post_date' => $pd,
		'post_status' => 'publish',
		'comment_status' => 'closed'
	  );
	  // insert translated event
	  $post_translated_id = mwm_wpml_translate_post($post_id, $event_post_en, 'en');
	  
	  // update the meta
	  // subtitle
	  update_post_meta($post_id, 'subtitle', $row['subtitle_fr']);
	  update_post_meta($post_translated_id, 'subtitle', $row['subtitle_en']);
	  // dates
	  $dates = explode(';', $row['dates']);
	  // new date format
	  foreach ($dates as &$date) {
		  // ugly hack, 2013 should be dynamic
		  // also, this date format is due to the way ACM works
		  // and may be wordpress too.
		  $date = $date.'2013';
	  }
	  update_post_meta($post_id, 'date', $dates[0]);
	  update_post_meta($post_translated_id, 'date', $dates[0]);
	  if(count($dates) == 2){
		update_post_meta($post_id, 'date_bis', $dates[1]);
		update_post_meta($post_translated_id, 'date_bis', $dates[1]);
	  }
	  if(count($dates) == 3){
		update_post_meta($post_id, 'date_bis', $dates[1]);
		update_post_meta($post_id, 'date_ter', $dates[2]);
		update_post_meta($post_translated_id, 'date_bis', $dates[1]);
		update_post_meta($post_translated_id, 'date_ter', $dates[2]);
	  }
	  // practical_info
	  update_post_meta($post_id, 'practical_info', $row['infos_fr']);
	  update_post_meta($post_translated_id, 'practical_info', $row['infos_en']);	  
	  // time_place
	  update_post_meta($post_id, 'time_place', $row['time_place_fr']);
	  update_post_meta($post_translated_id, 'time_place', $row['time_place_en']); 
	  // billetterie id
	  update_post_meta($post_id, 'id_billetterie', $row['billetterie_id']);
	  update_post_meta($post_translated_id, 'id_billetterie', $row['billetterie_id']); 
	  // typo3 id 
	  update_post_meta($post_id, 'id_typo3', $row['uid']);
	  update_post_meta($post_translated_id, 'id_typo3', $row['uid']);	   
	}
}
*/

function parse_img($text){

  $img1 = str_replace('src="uploads/', 'src="http://www.ircam.fr/uploads/', $text);
  $newtext = str_replace('src="fileadmin/sites/manifeste-2013/', 'src="http://www.ircam.fr/fileadmin/sites/manifeste-2013/', $img1);

  return $newtext;
}

function parse_pdf_link($text) {
  $matches = array();
  $newtext = preg_match_all('/\bfileadmin\/sites\/(.*)\.pdf\b/', $text, $matches);


  //var_dump($matches);
  if ($matches[0][0]!="")
  	$link_pdf = $matches[0][0];

  return $link_pdf;
}

function get_events_from_typo3_and_create_events_in_wp($id_event_typo3){
  global $wpdb;

  //connect to typo3
  //manifeste_s2 : user qui permet de se connecter à typo3 sur le serveur de manifeste-staging et sur machine Minh
  //$con = mysql_connect("127.0.0.1","root","newpwd");
  $con = mysql_connect("mysql2.ircam.fr","manifeste_s2","GvCadGzfM2OrhxQbIFDM2g");  
  mysql_set_charset("utf8");
  $db_selected = mysql_select_db('www_typo3', $con);


  if ($id_event_typo3==""){
  $sql = "SELECT uid, tstamp, crdate, title_fr, title_en, dates, subtitle_fr, subtitle_en, time_place_fr, 
  time_place_en, short_description_fr, short_description_en, 
  long_description_fr, long_description_en, infos_fr, infos_en,
  event_type, billetterie_id, begin_hours, begin_minutes FROM tx_ircam_events WHERE pid = 1110 and deleted <> 1";
	} else { 
	
  echo $sql = "SELECT uid, tstamp, crdate, title_fr, title_en, dates, subtitle_fr, subtitle_en, time_place_fr, 
  time_place_en, short_description_fr, short_description_en, 
  long_description_fr, long_description_en, infos_fr, infos_en,
  event_type, billetterie_id, begin_hours, begin_minutes FROM tx_ircam_events WHERE uid in (".$id_event_typo3.")" ;
  }

  // get the events
  $req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error()); 

  $rows = array();
  while ($row = mysql_fetch_assoc($req)) { 
     $rows[] = $row;
  }

  // close sql connexion
  mysql_close(); 

  // reopen the wp connexion
  //$con = mysql_connect("127.0.0.1","root","newpwd");
  $con = mysql_connect("mysql2.ircam.fr","manifeste_stag","419oKWfUjjOVM3mwRD45IY4m8SqUOcKCdvVzJP30wmeQy1bnbCSEtatA3tgW0OJG");  
  $db_selected = mysql_select_db('manifeste_staging_wordpress', $con);

  foreach($rows as $row) {

      $begin_hours =  $row['begin_hours'];
      $begin_minutes =  $row['begin_minutes'];
      if ($begin_hours != '') $bh = $begin_hours; else $bh = '20';
      if ($begin_minutes != '') $bm = $begin_minutes; else $bm = '00';
      $seconde = '00';

      // create the event_posts    
      $post_dates_tab = explode(';', $row['dates']);
      foreach($post_dates_tab as $post_dates) {
          $post_date = explode('-', $post_dates);

          $pd = $post_date[2].'-'.$post_date[1].'-'.$post_date[0].' '.$bh.':'.$bm.':'.$seconde;


		  if (parse_pdf_link($row['long_description_fr'])!="") {
		  	$link_pdf = "http://www.ircam.fr/".parse_pdf_link($row['long_description_fr']);
		  } else $link_pdf = "";

          $event_post_fr = array(
          'post_title' => addslashes(($row['title_fr'])),
          'post_content' => addslashes((parse_img($row['long_description_fr']))),
          'post_excerpt' => addslashes(($row['short_description_fr'])),
          'post_type' => 'event',
          'post_subtitle' => addslashes(($row['subtitle_fr'])),
          'post_date' => $pd , 
          'post_status' => 'publish',
          'comment_status' => 'closed'
          );

          // get the translation id of the event
          $event_post_en = array(
          'post_title' => addslashes(($row['title_en'])),
          'post_content' => addslashes((parse_img($row['long_description_en']))),
          'post_excerpt' => addslashes(($row['short_description_en'])),
          'post_type' => 'event',
          'post_subtitle' => addslashes(($row['subtitle_en'])),
          'post_date' => $pd,
          'post_status' => 'publish',
          'comment_status' => 'closed'
          );

          //var_dump($event_post_fr);
          //exit;

          //check if UID exists in WP
          $sql_postid = "SELECT t1.meta_value, t1.post_id, t2.language_code, t3.post_date 
          FROM wp_postmeta as t1, wp_icl_translations as t2, wp_posts as t3 
          WHERE t1.post_id = t2.element_id 
          AND t1.post_id = t3.ID
          AND t1.meta_key = 'id_typo3' AND t1.meta_value = ".$row['uid']. " AND t3.post_date = '".$pd."'";
          $req_postid = mysql_query($sql_postid) or die('Erreur SQL !<br>'.$sql_postid.'<br>'.mysql_error());

          $rows_postid = array();
          while ($row_postid = mysql_fetch_assoc($req_postid)) { 
             $rows_postid[] = $row_postid;
          }
          $nb_postid = sizeof($rows_postid);


          if ($nb_postid  == 0) {
            // insert the event
            //echo "insert";
            $post_id = wp_insert_post( $event_post_fr );
            $post_translated_id = mwm_wpml_translate_post($post_id, $event_post_en, 'en');
          
            update_post_meta($post_id, 'subtitle', addslashes(($row['subtitle_fr'])));
            update_post_meta($post_translated_id, 'subtitle', addslashes(($row['subtitle_en'])));
          
            // practical_info
            update_post_meta($post_id, 'pratical_info', addslashes(($row['infos_fr'])));
            update_post_meta($post_translated_id, 'pratical_info', addslashes(($row['infos_en'])));      
            // time_place
            update_post_meta($post_id, 'time_and_place', addslashes(($row['time_place_fr'])));
            update_post_meta($post_translated_id, 'time_and_place', addslashes(($row['time_place_en']))); 
            // billetterie id
            update_post_meta($post_id, 'id_billetterie', addslashes(($row['billetterie_id'])));
            update_post_meta($post_translated_id, 'id_billetterie', addslashes(($row['billetterie_id']))); 
            // typo3 id 
            update_post_meta($post_id, 'id_typo3', addslashes(($row['uid'])));
            update_post_meta($post_translated_id, 'id_typo3', addslashes(($row['uid']))); 

            update_post_meta($post_id, 'program', addslashes(($link_pdf)));
            update_post_meta($post_id, 'program', addslashes(($link_pdf)));

          } else if ($nb_postid  > 0){

            foreach ($rows_postid as $r_postid) {
              // Update the post into the database
              

              if ($r_postid['language_code'] == 'fr'){
                $event_post_fr['ID'] = $r_postid['post_id'];
                wp_update_post($event_post_fr);
                $post_id = $r_postid['post_id'];
              } else if ($r_postid['language_code'] == 'en'){
                $event_post_en['ID'] = $r_postid['post_id'];
                wp_update_post($event_post_en);
                $post_translated_id = $r_postid['post_id']; 
              }

              update_post_meta($post_id, 'subtitle', addslashes(($row['subtitle_fr'])));
              update_post_meta($post_translated_id, 'subtitle', addslashes(($row['subtitle_en'])));
              
              // practical_info
              update_post_meta($post_id, 'pratical_info', addslashes(($row['infos_fr'])));
              update_post_meta($post_translated_id, 'pratical_info', addslashes(($row['infos_en'])));      
              // time_place
              update_post_meta($post_id, 'time_and_place', addslashes(($row['time_place_fr'])));
              update_post_meta($post_translated_id, 'time_and_place', addslashes(($row['time_place_en']))); 
              // billetterie id
              update_post_meta($post_id, 'id_billetterie', addslashes(($row['billetterie_id'])));
              update_post_meta($post_translated_id, 'id_billetterie', addslashes(($row['billetterie_id']))); 
              // typo3 id 
            	update_post_meta($post_id, 'id_typo3', addslashes(($row['uid'])));
              update_post_meta($post_translated_id, 'id_typo3', addslashes(($row['uid'])));

	            update_post_meta($post_id, 'program', addslashes(($link_pdf)));
	            update_post_meta($post_id, 'program', addslashes(($link_pdf)));

            }
          }

      }

  }

}  



//add_action("after_switch_theme", "on_switch_theme_function");

add_action( 'init', 'register_post_tag_taxonomy' );

function register_post_tag_taxonomy() 
{
  // register post_tag taxonomy for custom post types
   register_taxonomy(
	  'post_tag',
	  array('artist', 'post', 'event', 'video', 'text')
   );
}


function twentytwelve_entry_meta() {
  // Override default twentytwelve_entry_meta to show linked data directly inside the page
  // Test Get the tags an related post / page contents
  //var_dump(get_the_tags());
  $posttags = get_the_tags();
  //var_dump($posttags);
  $id = get_the_ID();
  $linked_contents = array();
  if(ICL_LANGUAGE_CODE=='fr'){
  	$locale = 'fr_FR';
  }else{
  	$locale = 'en_GB';
  }
  $social = '
  <div class="social-single">
  <div id="twitterbutton">
	<script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script><div>
	<a href="http://twitter.com/share" class="twitter-share-button" data-url="'.get_permalink().'" data-counturl="'.get_permalink().'" data-text="'.get_the_title().'" data-via="ircam" data-related="ircam">Tweet</a>
	</div></div>
  <div id="likebutton" style="height:20px;">
	<iframe src="http://www.facebook.com/plugins/like.php?locale='.$locale.'&amp;href='.rawurlencode(get_permalink()).'&amp;layout=button_count&amp;show-faces=true&amp;width=450&amp;action=recommend&amp;font=arial&amp;colorscheme=light" scrolling="no" frameborder="0" allowTransparency="true" id="facebook-like"></iframe>
  </div>
  <div id="mailto">
	<a href="mailto:destinaire?subject=Manifeste2013&body='.get_permalink().'"><i class="icon-envelope"></i> '.__( 'Partager par mail' ).'</a>
  </div>
  <div id="print">
	<a href="#" onClick="window.print()"><i class="icon-print"></i> '.__( 'Imprimer' ).'</a>
  </div>
  </div>';


/*
  if ($posttags) {
	  foreach($posttags as $tag) {
		$args = array(
		  'post_type' => array('page', 'event', 'post', 'video', 'text'),
		  'tag' => $tag->name,
		  'post__not_in' => array($id)
		);
		$the_query = new WP_Query( $args );
		if ($the_query->have_posts() ) { 
		   while ( $the_query->have_posts() ) { 
				 $the_query->the_post();
				 $linked_contents[] = array('title' => get_the_title(),
				  'permalink' => get_permalink(), 'post_type' => get_post_type());
			 }
		 }
	  }
  }
*/


//uniquement pour les pages simples (pas apres une recherche par tag)
  
  if ($posttags && is_single()) {
	  foreach($posttags as $tag) {
		$tab[] = $tag->slug;
		//$tabstr .=
	  }
	//var_dump($tab);
	
	$args = array(
		'post_type' => 'any',
		'tag_slug__in' => $tab,
		'post__not_in' => array($id),
		'posts_per_page' => -1
	);
	
	$the_query = new WP_Query( $args );
	//$the_query = new WP_Query("tag=vienne");
	//echo $the_query->request;
	if ($the_query->have_posts() ) { 
	   while ( $the_query->have_posts() ) { 
			 $the_query->the_post();
			 	$linked_contents[] = array('title' => get_the_title(),
			  'permalink' => get_permalink(), 'post_type' => get_post_type(), 'date' => get_the_date('d.m'));
			 
		 }
   }
  }


  wp_reset_postdata();
  $linked_contents_text = '';

//var_dump($posttags);
//var_dump($linked_contents);
	$i = 0;

	$linked_contents_text = '<div class="linked-contents">';
	foreach ($linked_contents as &$linked_content) {
		if ($linked_content['post_type'] == 'artist') {
			$icon = 'icon-camera';
		} else if ($linked_content['post_type'] == 'page') {
			$icon = 'icon-book';
		} else if ($linked_content['post_type'] == 'event') {
			$icon = 'icon-calendar';
		} else if ($linked_content['post_type'] == 'post') {
			$icon = 'icon-book';
		} else if ($linked_content['post_type'] == 'video') {
			$icon = 'icon-play-circle';
		} else if ($linked_content['post_type'] == 'text') {
			$icon = 'icon-bullhorn';
		}

		if($linked_content['post_type'] == 'event'){
			$linked_contents_text .= '<a class="linked-content" href="'.$linked_content['permalink'].'" style="position:relative"><div style="position:absolute;right:7px;">'.$linked_content['date'].'</div>'.'<i class="'.$icon.' icon-verylarge"></i><br/>'.$linked_content['title'].'</a>';
		}
		else{
			$linked_contents_text .= '<a class="linked-content" href="'.$linked_content['permalink'].'">'.'<i class="'.$icon.' icon-verylarge"></i><br/>'.$linked_content['title'].'</a>';
		}
		$i++;
		// OLD if ( $i==4 ){ $linked_contents_text .= '<div style="clear: both;"></div>'; $i=0;}
		//if ( $i==4 ){ $linked_contents_text .= '</div ><div class="linked-contents">'; $i=0;}
	
	}
	$linked_contents_text .= '</div>';
	//$linked_contents_text .= '<div style="clear: both;"></div>';
	

	$count = sizeof($linked_contents);
	if ($count!=0) {

		/*
		if ( $i<4 ) {
			$j = 4-$i;
			for ($k=0; $k<$j; $k++) {
				$linked_contents_text .= '<div class="blank-linked-content"></div>';
			}
		}
		*/
		
		if ( $linked_contents_text != ''){
			//$linked_contents_text = '<div class="tag-meta"><h2>'.__('À découvrir aussi').'</h2><div class="linked-contents">'.$linked_contents_text.'</div><div style="clear: both;"></div></div>';
			$linked_contents_text = '<div class="tag-meta"><h2>'.__('À découvrir aussi').'</h2>'.$linked_contents_text.'<div style="clear: both;"></div>';
		}
	
	}

	echo $social.$linked_contents_text;
	//printf(
	//	 $linked_contents_text.$social
	//);
}


/**
 * Creates a translation of a post (to be used with WPML)
 *	
 * @param int $post_id The ID of the post to be translated.
 * @param array $post_content The post content of the post to be transaled with it 'post_type' key(ie. 'post', 'page', 'custom type', etc.).
 * @param string $lang The language of the translated post (ie 'fr', 'de', etc.).
 *	  
 * @return the translated post ID
 *	*/
function mwm_wpml_translate_post( $post_id, $post_content, $lang ){

	// Include WPML API
	include_once( WP_PLUGIN_DIR . '/sitepress-multilingual-cms/inc/wpml-api.php' );

	// Define title of translated post
	$post_translated_title = get_post( $post_id )->post_title . ' (' . $lang . ')';

	// Insert translated post
	$post_translated_id = wp_insert_post( $post_content );

	// Get trid of original post
	$trid = wpml_get_content_trid( 'post_'.$post_content['post_type'], $post_id );

	// Get default language
	$default_lang = wpml_get_default_language();

	// Associate original post and translated post
	global $wpdb;
	$wpdb->update( $wpdb->prefix.'icl_translations', array( 'trid' => $trid, 'language_code' => $lang, 'source_language_code' => $default_lang ), array( 'element_id' => $post_translated_id ) );

	// Return translated post ID
	return $post_translated_id;

}


// remove the 'not in our use case' template-front-page class
add_filter('body_class','twentytwelvechild_body_classes', 20);
function twentytwelvechild_body_classes( $classes ) {
  foreach($classes as $key => $value) {
	if ($value == 'template-front-page') unset($classes[$key]);
  }
  return $classes;
}

// set full width support for etincelle.php
function twentytwelve_custom_body_class( $classes ) {
  $background_color = get_background_color();

  if ( ! is_active_sidebar( 'sidebar-1' ) || is_page_template( 'page-templates/etincelle.php' ) )
	$classes[] = 'full-width';

  return $classes;
}
add_filter( 'body_class', 'twentytwelve_custom_body_class' );

// allow Custom Post Template to work with custom post types
function my_cpt_post_types( $post_types ) {
	array_push($post_types, 'text', 'event', 'video', 'artist');
	return $post_types;
}
add_filter( 'cpt_post_types', 'my_cpt_post_types' );


// rewrite request for tag request
// Ugly, kind of a bug: need to implement $request['tax_query']
function any_ptype_on_tag($request) {

  if ( isset($request['post_tag']) ){
	$request['post_type'] = 'any';
	$request['tax_query' ] = array(array('taxonomy' => 'post_tag', 'field' => 'slug', 'terms' => $request['post_tag']));
  };
  return $request;
}
add_filter('request', 'any_ptype_on_tag');


// Specific Ircam calendar

//
/**
 * Display calendar with days that have posts as links.
 *
 * The calendar is cached, which will be retrieved, if it exists. If there are
 * no posts for the month, then it will not be displayed.
 *
 * @since 1.0.0
 * @uses calendar_week_mod()
 *
 * @param bool $initial Optional, default is true. Use initial calendar names.
 * @param bool $echo Optional, default is true. Set to false for return.
 * @return string|null String when retrieving, null when displaying.
 */
function get_event_calendar($initial = true, $echo = true) {
  global $wpdb, $day, $m, $monthnum, $year, $wp_locale, $posts;

  $selected_day = $day;
  //echo  $monthnum;

  $cache = array();
  $key = md5( $m . $monthnum . $year );
  if ( $cache = wp_cache_get( 'get_calendar', 'calendar' ) ) {
	if ( is_array($cache) && isset( $cache[ $key ] ) ) {
	  if ( $echo ) {
		echo apply_filters( 'get_calendar',	 $cache[$key] );
		return;
	  } else {
		return apply_filters( 'get_calendar',  $cache[$key] );
	  }
	}
  }

  if ( !is_array($cache) )
	$cache = array();

  // HACK: don't check for post, sure I'll have event
  // Quick check. If we have no posts at all, abort!
  /*
  if ( !$posts ) {
	$gotsome = $wpdb->get_var("SELECT 1 as test FROM $wpdb->posts WHERE post_type = 'post' AND post_status = 'publish' LIMIT 1");
	if ( !$gotsome ) {
	  $cache[ $key ] = '';
	  wp_cache_set( 'get_calendar', $cache, 'calendar' );
	  return;
	}
  }
  */

  if ( isset($_GET['w']) )
	$w = ''.intval($_GET['w']);

  // week_begins = 0 stands for Sunday
  $week_begins = intval(get_option('start_of_week'));

  // Let's figure out when we are

  if ( !empty($monthnum) && !empty($year) ) {
	$thismonth = ''.zeroise(intval($monthnum), 2);
	$thisyear = ''.intval($year);
  } elseif ( !empty($w) ) {
	// We need to get the month from MySQL
	$thisyear = ''.intval(substr($m, 0, 4));
	$d = (($w - 1) * 7) + 6; //it seems MySQL's weeks disagree with PHP's
	$thismonth = $wpdb->get_var("SELECT DATE_FORMAT((DATE_ADD('{$thisyear}0101', INTERVAL $d DAY) ), '%m')");
  } elseif ( !empty($m) ) {
	$thisyear = ''.intval(substr($m, 0, 4));
	if ( strlen($m) < 6 )
		$thismonth = '01';
	else
		$thismonth = ''.zeroise(intval(substr($m, 4, 2)), 2);
  } else {
	//$thisyear = gmdate('Y', current_time('timestamp'));
	//$thismonth = gmdate('m', current_time('timestamp'));

	$thisyear = 2013;
  	if (gmdate('m', current_time('timestamp')) == '06') $thismonth = '06';
  	else $thismonth = '05';	

  }
  // HACK: if needed force set calendar to June
  $thisyear = 2013;
  $thismonth = '06';

  $unixmonth = mktime(0, 0 , 0, $thismonth, 1, $thisyear);
  $last_day = date('t', $unixmonth);

  // Get the next and previous month and year with at least one post
  
  $previous = $wpdb->get_row("SELECT MONTH(post_date) AS month, YEAR(post_date) AS year
	FROM $wpdb->posts
	WHERE post_date < '$thisyear-$thismonth-01'
	AND post_type = 'event' AND post_status = 'publish'
	  ORDER BY post_date DESC
	  LIMIT 1");
  $next = $wpdb->get_row("SELECT MONTH(post_date) AS month, YEAR(post_date) AS year
	FROM $wpdb->posts
	WHERE post_date > '$thisyear-$thismonth-{$last_day} 23:59:59'
	AND post_type = 'event' AND post_status = 'publish'
	  ORDER BY post_date ASC
	  LIMIT 1");
  
  /* translators: Calendar caption: 1: month name, 2: 4-digit year */
  $calendar_caption = _x('%1$s %2$s', 'calendar caption');
  /*
  $calendar_output = '<table id="wp-calendar">
  <caption>' . sprintf($calendar_caption, $wp_locale->get_month($thismonth), date('Y', $unixmonth)) . '</caption>
  <thead>
  <tr>';
  */
  $calendar_output = '<table id="wp-calendar">
  <caption>' . __('Mai / Juin') . '</caption>
  <thead>
  <tr>';
  $myweek = array();
  for ( $wdcount=0; $wdcount<=6; $wdcount++ ) {
	$myweek[] = $wp_locale->get_weekday(($wdcount+$week_begins)%7);
  }

  foreach ( $myweek as $wd ) {
	$day_name = (true == $initial) ? $wp_locale->get_weekday_initial($wd) : $wp_locale->get_weekday_abbrev($wd);
	$wd = esc_attr($wd);
	$calendar_output .= "\n\t\t<th scope=\"col\" title=\"$wd\">$day_name</th>";
  }

  $calendar_output .= '
  </tr>
  </thead>';
  
  /* HACK : comment original position of month navigation */
/*
  $calendar_output .= '
  </tr>
  </thead>

  <tfoot>
  <tr>';
  $home_url = icl_get_home_url('/'); // use icl_get_home_url instead of just home_url to allow local
  if ( $previous ) {
	$url_previous = $home_url.'event/'.$previous->year.'/'.$previous->month;
	$calendar_output .= "\n\t\t".'<td colspan="3" id="prev"><a href="' . $url_previous . '" title="' . esc_attr( sprintf(__('View posts for %1$s %2$s'), $wp_locale->get_month($previous->month), date('Y', mktime(0, 0 , 0, $previous->month, 1, $previous->year)))) . '">&laquo; ' . $wp_locale->get_month_abbrev($wp_locale->get_month($previous->month)) . '</a></td>';
  } else {
	$calendar_output .= "\n\t\t".'<td colspan="3" id="prev" class="pad">&nbsp;</td>';
  }

  $calendar_output .= "\n\t\t".'<td class="pad">&nbsp;</td>';

  if ( $next ) {
	$url_next = $home_url.'event/'.$next->year.'/'.$next->month;
	$calendar_output .= "\n\t\t".'<td colspan="3" id="next"><a href="' . $url_next . '" title="' . esc_attr( sprintf(__('View posts for %1$s %2$s'), $wp_locale->get_month($next->month), date('Y', mktime(0, 0 , 0, $next->month, 1, $next->year))) ) . '">' . $wp_locale->get_month_abbrev($wp_locale->get_month($next->month)) . ' &raquo;</a></td>';
  } else {
	$calendar_output .= "\n\t\t".'<td colspan="3" id="next" class="pad">&nbsp;</td>';
  }

  $calendar_output .= '
  </tr>
  </tfoot>

  <tbody>
  <tr>';
  */

  $calendar_output .= '
  <tbody>
  <tr>';

  // Get days with posts
  /* HACK: comment original query
  $dayswithposts = $wpdb->get_results("SELECT DISTINCT DAYOFMONTH(post_date)
	FROM $wpdb->posts WHERE post_date >= '{$thisyear}-{$thismonth}-01 00:00:00'
	AND post_type = 'post' AND post_status = 'publish'
	AND post_date <= '{$thisyear}-{$thismonth}-{$last_day} 23:59:59'", ARRAY_N);
  */
  // HACK: set my own query to get 'event' post_type
  $dayswithposts = $wpdb->get_results("SELECT DISTINCT DAYOFMONTH(post_date)
	FROM $wpdb->posts WHERE post_date >= '{$thisyear}-{$thismonth}-01 00:00:00'
	AND post_type = 'event'
	AND post_date <= '{$thisyear}-{$thismonth}-{$last_day} 23:59:59'", ARRAY_N);
  // HACK: look inside var_dump($dayswithposts) if you are suspicious
  // we mustn't look at the post_date, but our custom date fields (also date_bis and date_ter)
  // or 'better' (not really in fact) have just one input field with all dates
  if ( $dayswithposts ) {
	foreach ( (array) $dayswithposts as $daywith ) {
	  $daywithpost[] = $daywith[0];
	}
  } else {
	$daywithpost = array();
  }

  if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false || stripos($_SERVER['HTTP_USER_AGENT'], 'camino') !== false || stripos($_SERVER['HTTP_USER_AGENT'], 'safari') !== false)
	$ak_title_separator = "\n";
  else
	$ak_title_separator = ', ';

  $ak_titles_for_day = array();
  $ak_post_titles = $wpdb->get_results("SELECT ID, post_title, DAYOFMONTH(post_date) as dom "
	."FROM $wpdb->posts "
	."WHERE post_date >= '{$thisyear}-{$thismonth}-01 00:00:00' "
	."AND post_date <= '{$thisyear}-{$thismonth}-{$last_day} 23:59:59' "
	// HACK: comment below, but don't know why really
	//."AND post_type = 'post' AND post_status = 'publish'"
	."AND post_type = 'event' "
  );
  if ( $ak_post_titles ) {
	foreach ( (array) $ak_post_titles as $ak_post_title ) {

		$post_title = esc_attr( apply_filters( 'the_title', $ak_post_title->post_title, $ak_post_title->ID ) );

		if ( empty($ak_titles_for_day['day_'.$ak_post_title->dom]) )
		  $ak_titles_for_day['day_'.$ak_post_title->dom] = '';
		if ( empty($ak_titles_for_day["$ak_post_title->dom"]) ) // first one
		  $ak_titles_for_day["$ak_post_title->dom"] = $post_title;
		else
		  $ak_titles_for_day["$ak_post_title->dom"] .= $ak_title_separator . $post_title;
	}
  }

  // See how much we should pad in the beginning
  $pad = calendar_week_mod(date('w', $unixmonth)-$week_begins);
  //if ( 0 != $pad )
//	$calendar_output .= "\n\t\t".'<td colspan="'. esc_attr($pad) .'" class="pad">&nbsp;</td>';
  if ( 0 != $pad ){
    $home_url = icl_get_home_url('/');
    $calendar_output .= "\n\t\t".'<td colspan="'. esc_attr($pad-3) .'" class="pad">&nbsp;</td>';
    if ( $day == '29' && $monthnum == '5' && $thisyear == '2013' ){
    	$calendar_output .= '<td class="" id="current-selected-day"><a href="'.$home_url.'event/2013/5/29">29</a></td><td class=""><a href="'.$home_url.'event/2013/5/30">30</a></td><td class=""><a href="'.$home_url.'event/2013/5/31">31</a></td>';
  	}
    if ( $day == '30' && $monthnum == '5' && $thisyear == '2013' ){
    	$calendar_output .= '<td class="" ><a href="'.$home_url.'event/2013/5/29">29</a></td><td class="" id="current-selected-day"><a href="'.$home_url.'event/2013/5/30">30</a></td><td class=""><a href="'.$home_url.'event/2013/5/31">31</a></td>';
  	}
    if ( $day == '31' && $monthnum == '5' && $thisyear == '2013' ){
    	$calendar_output .= '<td class="" ><a href="'.$home_url.'event/2013/5/29">29</a></td><td class=""><a href="'.$home_url.'event/2013/5/30">30</a></td><td class="" id="current-selected-day"><a href="'.$home_url.'event/2013/5/31">31</a></td>';
  	}
  	if($monthnum != '5'){
  		$calendar_output .= '<td class="" ><a href="'.$home_url.'event/2013/5/29">29</a></td><td class=""><a href="'.$home_url.'event/2013/5/30">30</a></td><td class=""><a href="'.$home_url.'event/2013/5/31">31</a></td>';
  	}
  }


  $daysinmonth = intval(date('t', $unixmonth));
  for ( $day = 1; $day <= $daysinmonth; ++$day ) {
	if ( isset($newrow) && $newrow )
	  $calendar_output .= "\n\t</tr>\n\t<tr>\n\t\t";
	$newrow = false;


	if ( $day == $selected_day && $thismonth == $monthnum && $thisyear == $year )
		$calendar_output .= '<td id="current-selected-day">';
	else if ( $day == gmdate('j', current_time('timestamp')) && $thismonth == gmdate('m', current_time('timestamp')) && $thisyear == gmdate('Y', current_time('timestamp')) )
	  $calendar_output .= '<td id="today">';
	else
	  $calendar_output .= '<td>';
	// HACK must add { and } to original code below in if structure
	if ( in_array($day, $daywithpost) ){ // any posts today?
		// HACK: change url to fit w/ event archive
		//$calendar_output .= '<a href="' . get_day_link( $thisyear, $thismonth, $day ) . '" title="' . esc_attr( $ak_titles_for_day[ $day ] ) . "\">$day</a>";
		$home_url = icl_get_home_url('/'); // use icl_get_home_url instead of just home_url to allow local
		$calendar_output .= '<a href="'.$home_url.'event/'.$thisyear.'/'.$thismonth.'/'.$day.'">'.$day.'</a>';
	}
	else
	  $calendar_output .= $day;
	$calendar_output .= '</td>';

	if ( 6 == calendar_week_mod(date('w', mktime(0, 0 , 0, $thismonth, $day, $thisyear))-$week_begins) )
	  $newrow = true;
  }

  $pad = 7 - calendar_week_mod(date('w', mktime(0, 0 , 0, $thismonth, $day, $thisyear))-$week_begins);
  if ( $pad != 0 && $pad != 7 )
	$calendar_output .= "\n\t\t".'<td class="pad" colspan="'. esc_attr($pad) .'">&nbsp;</td>';

  $calendar_output .= "\n\t</tr>\n\t</tbody>\n\t</table>";



  /* HACK : new position of month navigation */
/*
  $home_url = icl_get_home_url('/'); // use icl_get_home_url instead of just home_url to allow local
  if ( $previous ) {
	$url_previous = $home_url.'event/'.$previous->year.'/'.$previous->month;
	$calendar_output .= '<div id="prev-month"><a href="' . $url_previous . '" title="' . esc_attr( sprintf(__('View posts for %1$s %2$s'), $wp_locale->get_month($previous->month), date('Y', mktime(0, 0 , 0, $previous->month, 1, $previous->year)))) . '"><i class="icon-caret-left icon-large"></i></a></div>';
  } else {
	$calendar_output .= '<div id="prev-month" class="pad">&nbsp;</div>';
  }

  if ( $next ) {
	$url_next = $home_url.'event/'.$next->year.'/'.$next->month;
	$calendar_output .= '<div id="next-month"><a href="' . $url_next . '" title="' . esc_attr( sprintf(__('View posts for %1$s %2$s'), $wp_locale->get_month($next->month), date('Y', mktime(0, 0 , 0, $next->month, 1, $next->year))) ) . '"><i class="icon-caret-right icon-large"></i></a></div>';
  } else {
	$calendar_output .= '<div id="next-month" class="pad">&nbsp;</div>';
  }
  */
  /* end */
  
  
  
  $cache[ $key ] = $calendar_output;
  wp_cache_set( 'get_calendar', $cache, 'calendar' );

  if ( $echo )
	echo apply_filters( 'get_calendar',	 $calendar_output );
  else
	return apply_filters( 'get_calendar',  $calendar_output );
  // HACK: end of HACK, but, links on the calendar refer to specific url : /yyyy/mm/dd
  // we must catch these urls to build or specific 'list of events' for the dayvar
}


/**
 * Ircam Calendar widget class
 *
 * @since 2.8.0
 */
class WP_Event_Widget_Calendar extends WP_Widget_Calendar {

  function widget( $args, $instance ) {
	extract($args);
	$title = apply_filters('widget_title', empty($instance['title']) ? '' : $instance['title'], $instance, $this->id_base);
	echo $before_widget;
	if ( $title )
	  echo $before_title . $title . $after_title;
	echo '<div id="calendar_wrap">';
	get_event_calendar();
	echo '</div>';
	echo $after_widget;
  }
}


add_action('widgets_init', create_function('', 'return register_widget("WP_Event_Widget_Calendar");'));



/**
 * Playlist widget class
 *
 * @since 2.8.0
 */
class WP_Widget_Playlist extends WP_Widget {

  function __construct() {
	$widget_ops = array('classname' => 'widget_playlist', 'description' => __('Playlist id'));
	$control_ops = array('width' => 400, 'height' => 350);
	parent::__construct('playlist', __('Playlist'), $widget_ops, $control_ops);
  }

  function widget( $args, $instance ) {
	extract($args);
	$title = apply_filters( 'widget_title', empty( $instance['title'] ) ? '' : $instance['title'], $instance, $this->id_base );
	$text = apply_filters( 'widget_text', empty( $instance['text'] ) ? '' : $instance['text'], $instance );
	echo $before_widget;
	if ( !empty( $title ) ) { echo $before_title . '<i class="icon-headphones"></i> ' . $title . $after_title; } ?>
	  <?php echo '' . get_playlist($text) ?>
	<?php
	echo $after_widget;
  }

  function update( $new_instance, $old_instance ) {
	$instance = $old_instance;
	$instance['title'] = strip_tags($new_instance['title']);
	if ( current_user_can('unfiltered_html') )
	  $instance['text'] =  $new_instance['text'];
	else
	  $instance['text'] = stripslashes( wp_filter_post_kses( addslashes($new_instance['text']) ) ); // wp_filter_post_kses() expects slashed
	//$instance['filter'] = isset($new_instance['filter']);
	return $instance;
  }

  function form( $instance ) {
	$instance = wp_parse_args( (array) $instance, array( 'title' => '', 'text' => '' ) );
	$title = strip_tags($instance['title']);
	$text = esc_textarea($instance['text']);
?>
	<p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>
	<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" /></p>
	<input class="widefat" id="<?php echo $this->get_field_id('text'); ?>" name="<?php echo $this->get_field_name('text'); ?>" type="text" value="<?php echo esc_attr($text); ?>" /></p>
   </p>
<?php
  }
}


add_action('widgets_init', create_function('', 'return register_widget("WP_Widget_Playlist");'));


// Playlist HTML Markup given an id, return the playlist markup

function get_playlist($id){
  // construct the html markup 
  //return "<div class='playlistwidget' data-id='".$id."'>playlist".$id."</div>";
?>
<script language="javascript"> 
function toggle() {
  var ele = document.getElementById("toggleText");
  var text = document.getElementById("displayText");
  if(ele.style.display == "block") {
		ele.style.display = "none";
	text.innerHTML = "<i class='icon-play-circle'></i> <?php echo __('ouvrir player audio') ?>";
	}
  else {
	ele.style.display = "block";
	text.innerHTML = "<i class='icon-play-circle'></i> <?php echo __('fermer player audio') ?>";
  }
} 
</script>

<?php

  return 
  "<a id=\"displayText\" href=\"javascript:toggle();\"><i class='icon-play-circle'></i> ". __('ouvrir player audio') ."</a>
  <div id=\"toggleText\" style=\"display: none\" class='playlistwidget' data-id='".$id."'>
  <a target=\"_blank\" href=\"http://www.musiquecontemporaine.fr\"><img src=\"http://www.ircam.fr//media/logos/mc2021.jpg\">&nbsp;</a>Portail de la musique contemporaine 
  <embed id=\"playlist\" width=\"440\" height=\"212\" 
  flashvars=\"&file=http://playlists.ircam.fr/plFiles/playlist_". $id .".xml&backcolor=333333&frontcolor=ffffff&lightcolor=dd3333&playlist=top&dock=true&repeat=list&wmode=opaque&skin=http://playlists.ircam.fr/application/js/mediaplayer/stylish_slim.swf&autostart=none&stretching=none\" 
  allowfullscreen=\"true\" allowscriptaccess=\"always\" quality=\"high\" name=\"playlist\" style=\"undefined\" 
  src=\"http://playlists.ircam.fr/application/js/mediaplayer/player.swf\" type=\"application/x-shockwave-flash\">
  </div>";
}


// return tweets by hastags

function tweets_by_hashtag($atts, $content = null){
		extract(shortcode_atts(array(
				"hashtag" => 'default_tag',
				"number" => 5,
				), $atts));
		//foreach ($hashtag as &$value) {
		//	  $value = '%23'.$value;
		//}

		$hashtags = implode($hashtag, '+OR+');
		$hashtags = str_replace('#','%23',$hashtags);//replace # by %23
		$api_url = 'http://search.twitter.com/search.json';
		$raw_response = wp_remote_get("$api_url?q=$hashtags&result_type=recent");

		if ( is_wp_error($raw_response) ) {
			$output = "<p>Failed to update from Twitter!</p>\n";
			$output .= "<!--{$raw_response->errors['http_request_failed'][0]}-->\n";
			$output .= get_option('twitter_hash_tag_cache');
		} else {
			if ( function_exists('json_decode') ) {
				$response = get_object_vars(json_decode($raw_response['body']));
				for ( $i=0; $i < count($response['results']); $i++ ) {
					$response['results'][$i] = get_object_vars($response['results'][$i]);
				}
			} else {
				include(ABSPATH . WPINC . '/js/tinymce/plugins/spellchecker/classes/utils/JSON.php');
				$json = new Moxiecode_JSON();
				$response = @$json->decode($raw_response['body']);
			}

			$output = "<div class='twitter-hash-tag widget'><h3 class='widget-title'><i class='icon-twitter'></i> Twitter</h3>\n";
			$output .= "<div class='container'>\n";
			$output .= "<div id='tweets'>\n";

			foreach ( $response['results'] as $result ) {
				$text = $result['text'];
				$user = $result['from_user'];
				$image = $result['profile_image_url'];
				$user_url = "http://twitter.com/$user";
				$source_url = "$user_url/status/{$result['id']}";

				$text = preg_replace('|(https?://[^\ ]+)|', '<a href="$1">$1</a>', $text);
				$text = preg_replace('|@(\w+)|', '<a href="http://twitter.com/$1">@$1</a>', $text);
				//$text = preg_replace('|#(\w+)|', '<a href="http://search.twitter.com/search?q=%23$1">#$1</a>', $text);
				$text = preg_replace('|#(\w+)|', '<a href="http://twitter.com/search?q=%23$1">#$1</a>', $text);

				$output .= "<div>";

				if ( $images )
					$output .= "<a href='$user_url'><img src='$image' alt='$user' /></a>";
				$output .= "<a href='$user_url'>$user</a>: $text <a href='$source_url'>&raquo;</a></div>\n";
			}
			$output .= "<a href='#' class='slidesjs-previous slidesjs-navigation'><i class='icon-caret-left icon-large'></i></a>\n";
			$output .= "<a href='#' class='slidesjs-next slidesjs-navigation'><i class='icon-caret-right icon-large'></i></a>\n";
			$output .= "</div>\n";
			$output .= "</div>\n";
			$output .= "</div>\n";
		}

		return $output;
}




// menu highlights for custom post_type
// from http://wordpress.stackexchange.com/questions/3014/highlighting-wp-nav-menu-ancestor-class-w-o-children-in-nav-structure/3034#3034

add_filter('nav_menu_css_class', 'current_type_nav_class', 10, 2 );
function current_type_nav_class($classes, $item) {
	$post_type = get_query_var('post_type');
	if ($item->attr_title != '' && $item->attr_title == $post_type) {
		array_push($classes, 'current-menu-item');
	};
	return $classes;
}

// scoopit integration
function redirect_to_archive(){
  global $wp_query;
  if( is_single() && in_category(25) ){
	$category_link = get_category_link( 25);
	wp_redirect( $category_link );
  }

}

add_action('template_redirect', 'redirect_to_archive');


function parse_scoopit_link($text) {
  $matches = array();
  $newtext = preg_match_all('#\bhttps?://[^\s()<>]+(?:\([\w\d]+\)|([^[:punct:]\s]|/))#', $text, $matches);

  $tab_link = $matches[0];
  $size = sizeof($tab_link)-1;
  $link = $tab_link[$size];
  $shortlink = explode("/", $link);
  $shortlink = $shortlink[2];

  return array($link, $shortlink);
}


function get_posts_from_scoopit(){
  $args = array(
	'post_type' => 'post',
 	'category_name' => 'Scoopit'
  );

  $loop = new WP_Query($args);
  while ( $loop->have_posts() ) : $loop->the_post();
		$linktab = parse_scoopit_link(get_the_content());

		$p = '<a class="web-revue" target="_blank" href="' . $linktab[0] . '" title="' . the_title_attribute( 'echo=0' ) . '" rel="bookmark"><i class="icon-play"></i> ';
		$p .= '<span class="date">' . get_the_date('d.m.y') . ' - </span>';
		$p .= '<span class="title">' . get_the_title() . '</span>';
		$p .= ' - Source : ' . $linktab[1];
		$p .= "</a>";
		echo $p;

  endwhile;
}

add_shortcode('wp_caption', 'manifeste_img_caption_shortcode');
add_shortcode('caption', 'manifeste_img_caption_shortcode');

/**
 * The Caption shortcode.
 *
 * Allows a plugin to replace the content that would otherwise be returned. The
 * filter is 'img_caption_shortcode' and passes an empty string, the attr
 * parameter and the content parameter values.
 *
 * The supported attributes for the shortcode are 'id', 'align', 'width', and
 * 'caption'.
 *
 * @since 2.6.0
 *
 * @param array $attr Attributes attributed to the shortcode.
 * @param string $content Optional. Shortcode content.
 * @return string
 */
function manifeste_img_caption_shortcode($attr, $content = null) {
	// New-style shortcode with the caption inside the shortcode with the link and image tags.
	if ( ! isset( $attr['caption'] ) ) {
		if ( preg_match( '#((?:<a [^>]+>\s*)?<img [^>]+>(?:\s*</a>)?)(.*)#is', $content, $matches ) ) {
			$content = $matches[1];
			$attr['caption'] = trim( $matches[2] );
		}
	}

	// Allow plugins/themes to override the default caption template.
	$output = apply_filters('img_caption_shortcode', '', $attr, $content);
	if ( $output != '' )
		return $output;

	extract(shortcode_atts(array(
		'id'	=> '',
		'align'	=> 'alignnone',
		'width'	=> '',
		'caption' => ''
	), $attr));

	if ( 1 > (int) $width || empty($caption) )
		return $content;

	if ( $id ) $id = 'id="' . esc_attr($id) . '" ';

	return '<div ' . $id . 'class="wp-caption ' . esc_attr($align) . '" style="width: ' . (10 + (int) $width) . 'px">'
	. do_shortcode( $content ) . '<span class="wp-caption-text">' . $caption . '</span></div>';
}


add_action('init', 'myStartSession', 1);
function myStartSession() {
    if(!session_id()) {
        session_start();
    }
}

function save_idcaddy(){
	// on enregistre la valeur du caddy en session
	if (isset($_GET['idcaddy'])) {
		$_SESSION['idcaddy'] = $_GET['idcaddy'];
		$idcaddy = $_GET['idcaddy'];
		//var_dump($_SESSION['idcaddy']);
	} else if (isset($_SESSION['idcaddy'])) {
	   	$idcaddy = $_SESSION['idcaddy'];
	} else {
		$_SESSION['idcaddy'] = "";
		$idcaddy = "";
	}	
	return $idcaddy;
}


function display_link_billeterie($id_billetterie, $locale){
  if ($locale == 'fr') $lg = "LNG1";
  else if  ($locale == 'en') $lg = "LNG2";
  else $lg = "LNG1";

  $idcaddy = save_idcaddy();

  if ($id_billetterie!='')
    $url = "http://www.ircam.fr/b2b.html?ttarget=%2F4DCGI%2FIDCADDY".$idcaddy."REC01114000".$id_billetterie.$lg;
  else $url = "";

  return $url;
}




/*
function disableAutoSave(){
    wp_deregister_script('autosave');
}
add_action( 'wp_print_scripts', 'disableAutoSave' );
*/

?>