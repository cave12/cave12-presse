<?php 

// Change the default ordering 
// If you want a list of pages or custom post types to display in that defined order, you must change the post query’s orderby parameter to menu_order (if it’s not already).
// Cf https://wordpress.org/plugins/simple-page-ordering/

function c12_presse_order( $query ) {

        if ( $query->is_archive() && !is_admin() ) {
        
           	$query->set( 'orderby', 'menu_order' );
           	$query->set( 'order', 'ASC' );
            return $query;
            
        }
}
add_filter( 'pre_get_posts', 'c12_presse_order' );