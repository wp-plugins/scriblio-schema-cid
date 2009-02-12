<?php
/*
Plugin Name: Scriblio Community Information Database
Plugin URI: 
Description: Enables the entry, searching, and display of "community information database" records; requires Scriblio and bSuite.
Author: Casey Bisson
Version: 0.0.1
*/

function abn_init(){
	global $scrib;

	$scrib->meditor_unregister_defaults();

	$scrib->meditor_register( 'abn', 
		array( 
			'_title' => 'Bibliographic Record',
			'_elements' => array( 
				'alum' => array(
					'_title' => 'Alumnae/us',
					'_repeatable' => TRUE,
					'_elements' => array( 
						'name' => array(
							'_title' => 'Name',
							'_input' => array(
								'_type' => 'text',
							),
							'_sanitize' => 'wp_filter_nohtml_kses',
						),
						'year' => array(
							'_title' => 'Class Year',
							'_input' => array(
								'_type' => 'text',
							),
							'_sanitize' => 'wp_filter_nohtml_kses',
						),
					),
				),
	
				'contact' => array(
					'_title' => 'Contact',
					'_repeatable' => FALSE,
					'_elements' => array( 
						'weburl' => array(
							'_title' => 'Web',
							'_input' => array(
								'_type' => 'text',
							),
							'_sanitize' => 'sanitize_url',
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
				'location' => array(
					'_title' => 'Location',
					'_repeatable' => TRUE,
					'_elements' => array( 
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
						'weburl' => array(
							'_title' => 'Web',
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
				'category' => array(
					'_title' => 'Categories',
					'_description' => 'What employment categories does your business fit in?',
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
			),
		)
	);
	add_action( 'scrib_meditor_form_abn', 'abn_form_hook' );
	add_action('scrib_meditor_save_record', 'abn_save_record', 1, 2);

	register_taxonomy( 'abn_geog', 'post');
	register_taxonomy( 'abn_category', 'post');

}
add_action( 'init', 'abn_init' );

function abn_admin_menu_hook() {
	if( ( 'post-new.php' == basename( $_SERVER['PHP_SELF'] )) && ( !isset( $_GET['scrib_meditor_form'] ) ) && ( !current_user_can( 'edit_others_posts' )) ){
			$_GET['scrib_meditor_form'] = 'abn';
			die( wp_redirect( admin_url( 'post-new.php' ) .'?'. http_build_query( $_GET ) ));
	}

	wp_register_script( 'abn-editor', plugins_url( '/abn/editor.js' ) , array('jquery-ui-sortable'), '1' );
	wp_enqueue_script( 'abn-editor' );

	wp_register_style( 'abn-editor', plugins_url( '/abn/editor.css' ) );
	wp_enqueue_style( 'abn-editor' );
}
add_action( 'admin_menu', 'abn_admin_menu_hook' );

function abn_form_hook(){
	add_action( 'admin_footer', 'abn_admin_footer_hook' );
}

function abn_admin_footer_hook() {
?>
<script type="text/javascript">
	abn_meditor();
</script>
<?php
}


function abn_save_record( $post_id , $r ) {
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


	if ( is_array( $r['abn'] )){
		foreach( $r['abn']['location'] as $temp ){
			if( !empty( $temp['city'] ))
				$facets['abn_geog'][] = $temp['city'];
			if( !empty( $temp['state'] ))
				$facets['abn_geog'][] = $temp['state'];
			if( !empty( $temp['zip'] ))
				$facets['abn_geog'][] = $temp['zip'];
		}

		foreach( $r['abn']['geog'] as $temp )
			if( !empty( $temp['a'] ))
				$facets['abn_geog'][] = $temp['a'];

		foreach( $r['abn']['category'] as $temp )
			if( !empty( $temp['a'] )){
				$facets['abn_category'][] = $temp['a'];
				if( !is_array( $facets['abn_tags'] )) $facets['abn_tags'] = array();
				$facets['abn_tags'] = array_merge( $facets['abn_tags'], explode( ',' , $stuff[ $temp['a'] ]['tags'] ));
			}

		foreach( $r['abn']['keywords'] as $temp )
			if( !empty( $temp['a'] ))
				$facets['abn_tags'][] = $temp['a'];
	}

	if ( count( $facets )){
		foreach( $facets as $taxonomy => $tags ){

			if( 'post_tag' == $taxonomy ){
				wp_set_post_tags($post_id, $tags, TRUE);
				continue;
			}

			if(!is_taxonomy( $taxonomy ))
				register_taxonomy($taxonomy, 'post');
			wp_set_object_terms($post_id, $tags, $taxonomy);
		}
	}
}

function abn_sidebar() {
	global $id, $post, $bsuite;

	$id = $post->ID;

	if( ( $r = get_post_meta( $id, 'scrib_meditor_content', true )) && ( is_array( $r['abn'] )) ){
		$abn_div = '<li class="widget widget_scrib_facets">';

		$abn_div .= $bsuite->icon_get_h( $id, 's' );

		$abn_div .= '<h3 class="widgettitle">Alum</h3><ul>';
		foreach( $r['abn']['alum'] as $temp )
			$abn_div .= '<li>'. $temp['name'] . ( $temp['year'] ? '<br /><small>'. $temp['year'] .'</small>' : '' ) .'</li>';
		$abn_div .= '</ul>';

		$abn_div .= '<h3 class="widgettitle">Contact</h3><ul>';
		$abn_div .= ( $r['abn']['contact'][0]['phone'] ? '<li>'. $r['abn']['contact'][0]['phone'] .'</li>' : '' );
		$abn_div .= ( $r['abn']['contact'][0]['weburl'] ? '<li><a href="'. $r['abn']['contact'][0]['weburl'] .'">'. $r['abn']['contact'][0]['weburl'] .'</a></li>' : '' );
		$abn_div .= ( $r['abn']['contact'][0]['email'] ? '<li><a href="mailto:'. $r['abn']['contact'][0]['email'] .'">'. $r['abn']['contact'][0]['email'] .'</a></li>' : '' );
		$abn_div .= '</ul>';

		$abn_div .= '</li>';

//		print_r( $r );

		echo( $abn_div );
	}

	return( $content );
}
?>