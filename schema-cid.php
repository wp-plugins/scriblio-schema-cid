<?php
/*
Plugin Name: Scriblio Community Information Database
Plugin URI: http://about.scriblio.net/
Description: Enables the entry, searching, and display of "community information database" records; requires Scriblio and bSuite. By Casey Bisson with significant contributions by Shannon Astolfi.
Version: 0.0.1
*/


function cid_init(){
	global $scrib;

	$scrib->meditor_register( 'cid',
		array(
			'_title' => 'Community Information Database Record',
			'_elements' => array(

				'location' => array(
					'_title' => 'Location',
					'_repeatable' => TRUE,
					'_elements' => array(
						'weburl' => array(
							'_title' => 'Web',
							'_input' => array(
								'_type' => 'text',
							),
							'_sanitize' => 'sanitize_url',
						),
						'street_a' => array(
							'_title' => 'Street',
							'_input' => array(
								'_type' => 'text',
							),
							'_sanitize' => 'wp_filter_nohtml_kses',
						),
						'street_b' => array(
							'_title' => 'Street',
							'_input' => array(
								'_type' => 'text',
							),
							'_sanitize' => 'wp_filter_nohtml_kses',
						),
						'street_c' => array(
							'_title' => 'Street',
							'_input' => array(
								'_type' => 'text',
							),
							'_sanitize' => 'wp_filter_nohtml_kses',
						),
						'city' => array(
							'_title' => 'City',
							'_input' => array(
								'_type' => 'text',
							),
							'_sanitize' => 'wp_filter_nohtml_kses',
						),
						'state' => array(
							'_title' => 'State',
							'_input' => array(
								'_type' => 'text',
							),
							'_sanitize' => 'wp_filter_nohtml_kses',
						),
						'zip' => array(
							'_title' => 'Zip',
							'_input' => array(
								'_type' => 'text',
							),
							'_sanitize' => 'wp_filter_nohtml_kses',
						),
						'hours' => array(
							'_title' => 'Hours',
							'_input' => array(
								'_type' => 'text',
							),
							'_sanitize' => 'wp_filter_nohtml_kses',
						),
						'directions' => array(
							'_title' => 'Directions',
							'_input' => array(
								'_type' => 'textarea',
							),
							'_sanitize' => 'wp_filter_nohtml_kses',
						),
					),
				),
  
				'contact' => array(
					'_title' => 'Contact',
					'_repeatable' => TRUE,
					'_elements' => array(
						'contact_name' => array(
							'_title' => 'Name',
							'_input' => array(
								'_type' => 'text',
							),
							'_sanitize' => 'wp_filter_nohtml_kses',
						),
						'position' => array(
							'_title' => 'Position',
							'_input' => array(
								'_type' => 'text',
							),
							'_sanitize' => 'wp_filter_nohtml_kses',
						),
					   
						'email' => array(
							'_title' => 'Email',
							'_input' => array(
								'_type' => 'text',
							),
							'_sanitize' => 'wp_filter_nohtml_kses',
						),
						'phone' => array(
							'_title' => 'Phone',
							'_input' => array(
								'_type' => 'text',
							),
							'_sanitize' => 'wp_filter_nohtml_kses',
						),
						'fax' => array(
							'_title' => 'Fax',
							'_input' => array(
								'_type' => 'text',
							),
							'_sanitize' => 'wp_filter_nohtml_kses',
						),
					),
				),
			   
				'geog' => array(
					'_title' => 'Areas Served',
					'_repeatable' => TRUE,
					'_elements' => array(
						'a' => array(
							'_title' => '',
							'_input' => array(
								'_type' => 'text',
							),
							'_sanitize' => 'wp_filter_nohtml_kses',
						),
					),
				),
			  
				'lang' => array(
					'_title' => 'Languages',
					'_repeatable' => TRUE,
					'_elements' => array(
						'a' => array(
							'_title' => '',
							'_input' => array(
								'_type' => 'text',
							),
							'_sanitize' => 'wp_filter_nohtml_kses',
						),
					),
				),
			  
				//customizable subject headings
				'category' => array(
					'_title' => 'Categories',
					'_repeatable' => TRUE,
					'_elements' => array(
						'a' => array(
							'_title' => '',
								'_input' => array(
									'_type' => 'select',
									'_values' => array(
										'0' => '',
										'52' => '52: Finance and insurance',
										'522' => '522: Banking, credit, and financing',
										'523' => '523: Securities, commodity contracts, and other financial investments and related activities',
										'524' => '524: Insurance carriers and related activities',
										'525' => '525: Funds, trusts, and other financial vehicles',
										'5411' => '5411: Professional service - legal',
										'5412' => '5412: Accounting, tax preparation, bookkeeping, and payroll services',
										'55' => '55: Management of companies and enterprises',
										'61' => '61: Educational services',
										'6243' => '6243: Vocational rehabilitation',
										'7113' => '7113: Entertainment - promotion, representation',
										'922' => '922: Public administration - justice',
										'o' => 'Other; please enter keywords below.',
									),
									'_default' => '0',
								),
								'_sanitize' => array( $scrib, 'meditor_sanitize_selectlist' ),
						),
					),
				),
			   
				'keywords' => array(
					'_title' => 'Keywords',
					'_description' => 'Use the terms your customers would to describe your field or category of business. Enter one key phrase per box.',
					'_repeatable' => TRUE,
					'_elements' => array(
						'a' => array(
							'_title' => '',
							'_input' => array(
								'_type' => 'text',
							),
							'_sanitize' => 'wp_filter_nohtml_kses',
						),
					),
				),
			  
				'services' => array(
					'_title' => 'Services',
					'_description' => 'Create one entry per service. Services might be a hotline, meetings, a publication, or anything else you offer.',
					'_repeatable' => TRUE,
					'_elements' => array(
						'serv_name' => array(
							'_title' => 'Name of Service',
							'_input' => array(
								'_type' => 'text',
							),
							'_sanitize' => 'wp_filter_nohtml_kses',
						),
						'day' => array(
							'_title' => 'Day',
							'_input' => array(
								'_type' => 'text',
							),
							'_sanitize' => 'wp_filter_nohtml_kses',
						),
						'time' => array(
							'_title' => 'Time',
							'_input' => array(
								'_type' => 'text',
							),
							'_sanitize' => 'wp_filter_nohtml_kses',
						),
						'phone' => array(
							'_title' => 'Service Phone',
							'_input' => array(
								'_type' => 'text',
							),
							'_sanitize' => 'wp_filter_nohtml_kses',
						),
						'eligibility' => array(
							'_title' => 'Eligibility Requirements',
							'_input' => array(
								'_type' => 'text',
							),
							'_sanitize' => 'wp_filter_nohtml_kses',
						),
						'app' => array(
							'_title' => 'Application Requirements',
							'_input' => array(
								'_type' => 'text',
							),
							'_sanitize' => 'wp_filter_nohtml_kses',
						),
						'fees' => array(
							'_title' => 'Description of Fees',
							'_input' => array(
								'_type' => 'text',
							),
							'_sanitize' => 'wp_filter_nohtml_kses',
						),
					),
				),
			  
				'opportunities' => array(
					'_title' => 'Opportunities',
					'_description' => 'Do you offer volunteer or internship opportunities?',
					'_repeatable' => TRUE,
					'_elements' => array(
						'vol' => array(
							'_title' => 'Volunteers accepted?',
//TODO: Handle checkbox
							'_input' => array(
								'_type' => 'checkbox',
							
							),
						  
						),
						'intern' => array(
							'_title' => 'Internship Information',
							'_input' => array(
								'_type' => 'textarea',
							),
							'_sanitize' => 'wp_filter_nohtml_kses',
						),
					),
				),

				'facilities' => array(
					'_title' => 'Facilities',
					'_desription' => 'Describe your facilities and indicate any special features. Leave fields blank that do not apply.',
					'_repeatable' => TRUE,
					'_elements' => array(
						'desc' => array(
							'_title' => 'Description',
							'_input' => array(
								'_type' => 'text',
							),
							'_sanitize' => 'wp_filter_nohtml_kses',
						),
						'room_cap' => array(
							'_title' => 'Meeting Room Capacity',
							'_input' => array(
								'_type' => 'text',
							),
							'_sanitize' => 'wp_filter_nohtml_kses',
						),
						'room_fee' => array(
							'_title' => 'Meeting Room Fees',
							'_input' => array(
								'_type' => 'text',
							),
							'_sanitize' => 'wp_filter_nohtml_kses',
						),
						'room_restrict' => array(
							'_title' => 'Facility Restrictions',
							'_input' => array(
								'_type' => 'text',
							),
							'_sanitize' => 'wp_filter_nohtml_kses',
						),
						'kitchen' => array(
							'_title' => 'Kitchen',
							'_input' => array(
								'_type' => 'text',
							),
							'_sanitize' => 'wp_filter_nohtml_kses',
							  
						),
						'equip' => array(
							'_title' => 'Available Equipment',
							'_input' => array(
								'_type' => 'text',
							),
							'_sanitize' => 'wp_filter_nohtml_kses',
						),
						'equip_restrict' => array(
							'_title' => 'Equipment Restrictions',
							'_input' => array(
								'_type' => 'text',
							),
							'_sanitize' => 'wp_filter_nohtml_kses',
						),
						'disabled' => array(
							'_title' => 'Accomodations for the Disabled',
							'_input' => array(
								'_type' => 'text',
							),
							'_sanitize' => 'wp_filter_nohtml_kses',
						),
					),
				),
			  
			),
		)
	);
	add_action( 'scrib_meditor_form_cid', 'cid_form_hook' );
	add_action('scrib_meditor_save_record', 'cid_save_record', 1, 2);

	register_taxonomy( 'cid_geog', 'post');
	register_taxonomy( 'cid_lang', 'post');
	register_taxonomy( 'cid_category', 'post');

}
add_action( 'init', 'cid_init' );

function cid_admin_menu_hook() {

/*
// TODO: replace this hack with a new user role that specifies that all they can do is manage their own records
	if( ( 'post-new.php' == basename( $_SERVER['PHP_SELF'] )) && ( !isset( $_GET['scrib_meditor_form'] ) ) && ( !current_user_can( 'edit_others_posts' )) ){
			$_GET['scrib_meditor_form'] = 'cid';
			die( wp_redirect( admin_url( 'post-new.php' ) .'?'. http_build_query( $_GET ) ));
	}
*/

	add_submenu_page('post-new.php', 'Add New Community Information Record', 'New Community Information Record', 'edit_posts',	'post-new.php?scrib_meditor_form=cid' );

	wp_register_script( 'cid-editor', plugins_url( '/cid/editor.js' ) , array('jquery-ui-sortable'), '1' );
	wp_enqueue_script( 'cid-editor' );

	wp_register_style( 'cid-editor', plugins_url( '/cid/editor.css' ) );
	wp_enqueue_style( 'cid-editor' );
}
add_action( 'admin_menu', 'cid_admin_menu_hook' );

function cid_form_hook(){
	add_action( 'admin_footer', 'cid_admin_footer_hook' );
}

function cid_admin_footer_hook() {
?>
<script type="text/javascript">
	cid_meditor();
</script>
<?php
}


function cid_save_record( $post_id , $r ) {
//die( print_r( $r ));

$stuff = array(
	'52' => array( 'name' => '52: Finance and insurance', 'tags' => 'finance,insurance' ),
	'522' => array( 'name' => '522: Banking, credit, and financing', 'tags' => 'banking,credit,financing' ),
	'523' => array( 'name' => '523: Securities, commodity contracts, and other financial investments and related activities', 'tags' => 'securities,commodity contracts,financial investments' ),
	'524' => array( 'name' => '524: Insurance carriers and related activities', 'tags' => 'insurance' ),
	'525' => array( 'name' => '525: Funds, trusts, and other financial vehicles', 'tags' => 'funds,trusts,finance' ),
	'5411' => array( 'name' => '5411: Professional service - legal', 'tags' => 'legal,law' ),
	'5412' => array( 'name' => '5412: Accounting, tax preparation, bookkeeping, and payroll services', 'tags' => 'accounting,tax preparation,bookkeeping,payroll services' ),
	'55' => array( 'name' => '55: Management of companies and enterprises', 'tags' => 'management' ),
	'61' => array( 'name' => '61: Educational services', 'tags' => 'education' ),
	'6243' => array( 'name' => '6243: Vocational rehabilitation', 'tags' => 'vocatial rehabilitation' ),
	'7113' => array( 'name' => '7113: Entertainment - promotion, representation', 'tags' => 'entertainment,promotion,representation' ),
	'922' => array( 'name' => '922: Public administration - justice', 'tags' => 'administration,law,justice' ),
);


	if ( is_array( $r['cid'] )){
		foreach( $r['cid']['location'] as $temp ){
			if( !empty( $temp['city'] ))
				$facets['cid_geog'][] = $temp['city'];
			if( !empty( $temp['state'] ))
				$facets['cid_geog'][] = $temp['state'];
			if( !empty( $temp['zip'] ))
				$facets['cid_geog'][] = $temp['zip'];
		}

		foreach( $r['cid']['geog'] as $temp )
			if( !empty( $temp['a'] ))
				$facets['cid_geog'][] = $temp['a'];
			  
		foreach( $r['cid']['lang'] as $temp )
			if( !empty( $temp['a'] ))
				$facets['cid_lang'][] = $temp['a'];


		foreach( $r['cid']['category'] as $temp )
			if( !empty( $temp['a'] )){
				$facets['cid_category'][] = $temp['a'];
				if( !is_array( $facets['cid_tags'] )) $facets['cid_tags'] = array();
				$facets['cid_tags'] = array_merge( $facets['cid_tags'], explode( ',' , $stuff[ $temp['a'] ]['tags'] ));
			}

		foreach( $r['cid']['keywords'] as $temp )
			if( !empty( $temp['a'] ))
				$facets['cid_tags'][] = $temp['a'];
	}

	if ( count( $facets )){
		foreach( $facets as $taxonomy => $tags ){

			if( 'post_tag' == $taxonomy ){
				wp_set_post_tags( $post_id, $tags, TRUE );
				continue;
			}

			if(!is_taxonomy( $taxonomy ))
				register_taxonomy( $taxonomy, 'post' );
			wp_set_object_terms( $post_id, $tags, $taxonomy );
		}
	}
}

function cid_the_content( $content ) {
	global $id, $bsuite;

	if ( $id && ( $r = get_post_meta( $id, 'scrib_meditor_content', true )) && is_array( $r['cid'] )){
		$r = $r['cid'];

		$record = '<ul class="cid-fullrecord">';
		$record .= $bsuite->icon_get_h( $id, 's' );

		// go through each of the locations and build an html list for each 
		foreach( $r['location'] as $temp ){
			$location = '';
			if( !empty( $temp['street_a'] ))
				$location .= '<li class="street_a">' . $temp['street_a'] . '</li>';

			if( !empty( $temp['street_b'] ))
				$location .= '<li class="street_b">' . $temp['street_b'] . '</li>';

			if( !empty( $temp['street_c'] ))
				$location .= '<li class="street_c">' . $temp['street_c'] . '</li>';

			if( !empty( $temp['city'] ))
				$location .= '<li class="city">' . $temp['city'] . '</li>';

			if( !empty( $temp['state'] ))
				$location .= '<li class="state">' . $temp['state'] . '</li>';

			if( !empty( $temp['zip'] ))
				$location .= '<li class="zip">' . $temp['zip'] . '</li>';

			if( !empty( $temp['directions'] ))
				$location .= '<li class="directions">' . $temp['directions'] . '</li>';

			// if $location is not empty, then add it to the record
			if( !empty( $location ))
				$record .= '<li class="location"><ul>' . $location . '</ul></li>';
		}

		// go through each of the facilities and build an html list for each 
		foreach( $r['facilities'] as $temp ){
			$facility = '';
			if( !empty( $temp['room_cap'] ))
				$facility .= '<li class="room_cap">' . $temp['room_cap'] . '</li>';

			if( !empty( $temp['room_fee'] ))
				$facility .= '<li class="room_fee">' . $temp['room_fee'] . '</li>';

			if( !empty( $temp['room_restrict'] ))
				$facility .= '<li class="room_restrict">' . $temp['room_restrict'] . '</li>';

			if( !empty( $temp['kitchen'] ))
				$facility .= '<li class="kitchen">' . $temp['kitchen'] . '</li>';

			if( !empty( $temp['equip'] ))
				$facility .= '<li class="equip">' . $temp['equip'] . '</li>';

			if( !empty( $temp['equip_restrict'] ))
				$facility .= '<li class="equip_restrict">' . $temp['equip_restrict'] . '</li>';

			if( !empty( $temp['disabled'] ))
				$facility .= '<li class="disabled">' . $temp['disabled'] . '</li>';

			// if $facility is not empty, then add it to the record
			if( !empty( $facility ))
				$record .= '<li class="desc">'. ( isset( $temp['desc'] ) ? $temp['desc'] : '' ) .'<ul>' . $facility . '</ul></li>';
		}
	   
		$record .= '</ul>';
	}
   
	return( $record . $content );
   
}
add_filter( 'the_content', 'cid_the_content');
