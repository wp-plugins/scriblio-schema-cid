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
                'aka' => array (
                '_title' => 'Other Names',
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

                'web' => array (
                '_title' => 'Web',
                    '_repeatable' => TRUE,
                    '_elements' => array(
                        'weburl' => array(
                            '_title' => 'URL',
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
                        'con_street_a' => array(
                            '_title' => 'Street',
                            '_input' => array(
                                '_type' => 'text',
                            ),
                            '_sanitize' => 'wp_filter_nohtml_kses',
                        ),
                        'con_street_b' => array(
                            '_title' => 'Street',
                            '_input' => array(
                                '_type' => 'text',
                            ),
                            '_sanitize' => 'wp_filter_nohtml_kses',
                        ),
                        'con_city' => array(
                            '_title' => 'City',
                            '_input' => array(
                                '_type' => 'text',
                            ),
                            '_sanitize' => 'wp_filter_nohtml_kses',
                        ),
                        'con_state' => array(
                            '_title' => 'State',
                            '_input' => array(
                                '_type' => 'text',
                            ),
                            '_sanitize' => 'wp_filter_nohtml_kses',
                        ),
                        'con_zip' => array(
                            '_title' => 'Zip',
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
                /*'category' => array(
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
                ),*/
            
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
                            '_title' => 'Service',
                            '_input' => array(
                                '_type' => 'text',
                            ),
                            '_sanitize' => 'wp_filter_nohtml_kses',
                        ),
                        'frequency' => array(
                            '_title' => 'Frequency',
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
                        'place' => array(
                            '_title' => 'Place',
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
                            '_title' => 'Volunteer information',
                            '_input' => array(
                                '_type' => 'textarea',
                            ),
                            '_sanitize' => 'wp_filter_nohtml_kses',
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
                    '_description' => 'Describe your facilities and indicate any special features. Leave fields blank that do not apply.',
                    '_repeatable' => TRUE,
                    '_elements' => array(
                        'desc' => array(
                            '_title' => 'Description',
                            '_input' => array(
                                '_type' => 'textarea',
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
             
                'affiliation' => array(
                    '_title' => 'Affiliations',
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
                
                'private' => array(
                    '_title' => 'Private Notes',
                    '_description' => 'This field is not visible to the public.',
                    '_repeatable' => FALSE,
                    '_elements' => array(
                        'a' => array(
                            '_title' => '',
                            '_input' => array(
                                '_type' => 'textarea',
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

    add_submenu_page('post-new.php', 'Add New Community Information Record', 'New Community Information Record', 'edit_posts', 'post-new.php?scrib_meditor_form=cid' );

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

/*$stuff = array(
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
);*/


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


        /*foreach( $r['cid']['category'] as $temp )
            if( !empty( $temp['a'] )){
                $facets['cid_category'][] = $temp['a'];
                if( !is_array( $facets['cid_tags'] )) $facets['cid_tags'] = array();
                $facets['cid_tags'] = array_merge( $facets['cid_tags'], explode( ',' , $stuff[ $temp['a'] ]['tags'] ));
            }*/

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

/* debugging
echo "<h2>Do we have a post ID? ID: $id</h2>";
print_r( get_post_meta( $id, 'scrib_meditor_content', true ));
 end debugging */

    if ( $id && ( $r = get_post_meta( $id, 'scrib_meditor_content', true )) && is_array( $r['cid'] )){
        $r = $r['cid'];

/* debugging
echo "<h2>We have a CID record! ID: $id</h2>";
print_r( $r );
 end debugging */

        $record = '<ul class="cid-fullrecord">';
        //$record .= $bsuite->icon_get_h( $id, 's' );

        //build an html list for additional names
        if( !empty( $r['aka'] ))  
                $record .='<h3>Other Names</h3>';

           foreach( $r['aka'] as $temp){
           $aka = '';
                if( !empty( $temp['a'] ))
                $aka .= '<li class="aka_a">' . $temp['a'] . '</li>';

        if( !empty( $aka ))
                $record .= '<li class="aka_a"><ul>' . $aka . '</ul></li>';
        }

        //build a linked URL
        if( !empty( $r['web'] ))  
                $record .='<h3>Web</h3>';

           foreach( $r['web'] as $temp){
           $web = '';
                if( !empty( $temp['weburl'] ))
                $web .= '<li class="weburl"><a href="' . $temp['weburl'] . '">' . $temp['weburl'] .  '</a></li>';

        if( !empty( $web ))
                $record .= '<li class="weburl"><ul>' . $web . '</ul></li>';
        }

        // go through each of the locations and build an html list for each
        if( !empty( $r['location'] ))  
                $record .='<h3>Location</h3>';

           foreach( $r['location'] as $temp ){
            $location = '';
            if( !empty( $temp['street_a'] ))
                $location .= '<li class="street_a"><h5>Address:</h5>' . $temp['street_a'] . '</li>';

            if( !empty( $temp['street_b'] ))
                $location .= '<li class="street_b">' . $temp['street_b'] . '</li>';

            if( !empty( $temp['street_c'] ))
                $location .= '<li class="street_c">' . $temp['street_c'] . '</li>';

            if( !empty( $temp['city'] ))
                $location .= '<li class="csz">' . $temp['city'] . ',';

            if( !empty( $temp['state'] ))
                $location .= '' . $temp['state'] . ' ';

            if( !empty( $temp['zip'] ))
                $location .= '' . $temp['zip'] . '</li>';

            if( !empty( $temp['hours'] ))
                $location .= '<li class="hours"><h5>Business Hours:</h5>' . $temp['hours'] . '</li>';

            if( !empty( $temp['directions'] ))
                $location .= '<li class="directions"><h5>Directions:</h5>' . $temp['directions'] . '</li>';

            // if $location is not empty, then add it to the record
            if( !empty( $location ))
                $record .= '<li class="location"><ul>' . $location . '<br/></ul></li>';
        }
    
        // go through each of the contacts and build an html list for each
        if( !empty( $r['contact'] ))  
                $record .='<h3>Contacts</h3>';

           foreach( $r['contact'] as $temp ){
            $contact = '';
            if( !empty( $temp['contact_name'] ))
                $contact .= '<li class="name"><h5>Name:</h5>' . $temp['contact_name'] . '</li>';

            if( !empty( $temp['position'] ))
                $contact .= '<li class="position"><h5>Position:</h5>' . $temp['position'] . '</li>';

            if( !empty( $temp['email'] ))
                $contact .= '<li class="email"><h5>Email:</h5>' . $temp['email'] . '</li>';

            if( !empty( $temp['phone'] ))
                $contact .= '<li class="phone"><h5>Phone:</h5>' . $temp['phone'] . '</li>';

            if( !empty( $temp['fax'] ))
                $contact .= '<li class="fax"><h5>Fax:</h5>' . $temp['fax'] . '</li>';

            if( !empty( $temp['con_street_a'] ))
                $contact .= '<li class="con_street"><h5>Mailing:</h5>' . $temp['con_street_a'] . '</li>';

            if( !empty( $temp['con_street_b'] ))
                $contact .= '<li class="con_street">' . $temp['con_street_b'] . '</li>';

            if( !empty( $temp['con_city'] ))
                $contact .= '<li class="con_csz">' . $temp['con_city'] . ',';

            if( !empty( $temp['con_state'] ))
                $contact .= '' . $temp['con_state'] . ' ';

            if( !empty( $temp['con_zip'] ))
                $contact .= '' . $temp['con_zip'] . '</li>';

            // if $contact is not empty, then add it to the record
            if( !empty( $contact ))
                $record .= '<li class="contact"><ul>' . $contact . '<br/></ul></li>';
        }
       
        // go through each of the geographic areas and build an html list for each
        if( !empty( $r['geog'] ))  
                $record .='<h3>Areas Served</h3>';

           foreach( $r['geog'] as $temp ){
            $geog = '';
            if( !empty( $temp['a'] ))
                $geog .= '<li class="geog_a">' . $temp['a'] . '</li>';

            // if $geog is not empty, then add it to the record
            if( !empty( $geog ))
                $record .= '<li class="geog"><ul>' . $geog . '</ul></li>';
        }
       
        // go through each of the languages and build an html list for each
        if( !empty( $r['lang'] ))  
                $record .='<h3>Languages Spoken</h3>';

           foreach( $r['lang'] as $temp ){
            $lang = '';
            if( !empty( $temp['a'] ))
                $lang .= '<li class="lang_a">' . $temp['a'] . '</li>';

            // if $lang is not empty, then add it to the record
            if( !empty( $lang ))
                $record .= '<li class="lang"><ul>' . $lang . '</ul></li>';
        }
       
        // go through each of the services and build an html list for each
        if( !empty( $r['services'] ))  
                $record .='<h3>Services</h3>';
          foreach( $r['services'] as $temp ){
            $services = '';
            if( !empty( $temp['serv_name'] ))
                $services .= '<li class="serv_name"><h5>Service:</h5>' . $temp['serv_name'] . '</li>';

            if( !empty( $temp['frequency'] ))
                $services .= '<li class="frequency"><h5>Frequency:</h5>' . $temp['frequency'] . '</li>';

            if( !empty( $temp['day'] ))
                $services .= '<li class="day"><h5>Day:</h5>' . $temp['day'] . '</li>';

            if( !empty( $temp['time'] ))
                $services .= '<li class="time"><h5>Time:</h5>' . $temp['time'] . '</li>';

            if( !empty( $temp['place'] ))
                $services .= '<li class="place"><h5>Place:</h5>' . $temp['place'] . '</li>';

            if( !empty( $temp['phone'] ))
                $services .= '<li class="phone"><h5>Phone:</h5>' . $temp['phone'] . '</li>';

            if( !empty( $temp['eligibility'] ))
                $services .= '<li class="eligibility"><h5>Eligibility:</h5>' . $temp['eligibility'] . '</li>';

            if( !empty( $temp['app'] ))
                $services .= '<li class="app"><h5>Application:</h5>' . $temp['app'] . '</li>';

            if( !empty( $temp['fees'] ))
                $services .= '<li class="fees"><h5>Fees:</h5>' . $temp['fees'] . '</li>';

            // if $services is not empty, then add it to the record
            if( !empty( $services ))
                $record .= '<li class="services"><ul>' . $services . '<br/></ul></li>';
        }
    
        // go through each of the opportunities and build an html list for each
        if( !empty( $r['opportunities'] ))  
                $record .='<h3>Opportunties</h3>';
            foreach( $r['opportunities'] as $temp ){
            $opportunities = '';
            if( !empty( $temp['vol'] ))
                $opportunities .= '<li class="vol"><h5>Volunteers</h5>' . $temp['vol'] . '</li>';
               
            if( !empty( $temp['intern'] ))
                $opportunities .= '<li class="intern"><h5>Internships</h5>' . $temp['intern'] . '</li>';

            // if $opportunities is not empty, then add it to the record
            if( !empty( $opportunities ))
                $record .= '<li class="opportunities"><ul>' . $opportunities . '</ul></li>';
        }

        // go through each of the facilities and build an html list for each
        if( !empty( $r['facilities'] ))  
                $record .='<h3>Facilities</h3>';

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
                $record .= '<li class="desc">' . ( isset( $temp['desc'] ) ? $temp['desc'] : '' ) .'<ul>' . $facility . '<br/></ul></li>';
        }

// go through each of the affiliations and build an html list for each
        if( !empty( $r['affiliation'] ))  
                $record .='<h3>Affiliations</h3>';
            foreach( $r['affiliation'] as $temp ){
            $affiliation = '';
            if( !empty( $temp['a'] ))
                $affiliation .= '<li class="affiliation_a">' . $temp['a'] . '</li>';

            // if $affiliation is not empty, then add it to the record
            if( !empty( $affiliation ))
                $record .= '<li class="affiliation"><ul>' . $affiliation . '</ul></li>';
        }

/*
// go through each of the keywords and build an html list for each
        if( !empty( $r['keywords'] ))  
                $record .='<h3>Related Topics</h3>';      
        foreach( $r['keywords'] as $temp ){
            $keywords = '';
            if( !empty( $temp['a'] ))
                $keywords .= '<li class="keywords_a">' . $temp['a'] . '</li>';

            // if $affiliation is not empty, then add it to the record
            if( !empty( $keywords ))
                $record .= '<li class="keywords"><ul>' . $keywords . '</ul></li>';
        }
*/
      
        $record .= '</ul>';
    }
  
    return( $content . $record );
  
}
add_filter( 'the_content', 'cid_the_content');
//add_filter( 'the_excerpt', 'cid_the_content');