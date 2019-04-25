<?php 

/*
Plugin Name: C12 Presse
Plugin URI: https://github.com/cave12/c12-presse
Description: Ajoute le type de contenu "Presse".
Version: 0.1
Author: Manuel Schmalstieg
Author URI: https://ms-studio.net
GitHub Plugin URI: https:/github.com/cave12/c12-presse
*/

add_action( 'init', 'c12_register_presse_post_type' );
function c12_register_presse_post_type() {
	
	register_post_type(
		'presse',
		array(
			 'label'			   => 'Presse',
			 'labels'			  => array(
				 'name'			   => 'Presse',
				 'singular_name'	  => 'Presse',
				 'add_new'			=> __( 'Ajouter' ),
				 'add_new_item'	   => __( 'Ajouter un nouvel article de presse' ),
				 'edit'			   => __( 'Éditer' ),
				 'edit_item'		  => __( 'Éditer l’article' ),
				 'new_item'		   => __( 'Nouvel article' ),
				 'view'			   => __( 'Voir l’article' ),
				 'view_item'		  => __( 'Voir l’article' ),
				 'search_items'	   => __( 'Rechercher les articles' ),
				 'not_found'		  => __( 'Pas d’articles trouvés' ),
				 'not_found_in_trash' => __( 'Pas d’articles trouvés dans la Corbeille' ),
				 'parent_item_colon'  => __( 'Article parent' ),
			 ),
			 'description'		 => __( 'Presse.' ),
			 'public'			  => true,
			 'show_ui'			 => true,
			 'publicly_queryable'  => true,
			 'exclude_from_search' => false,
			 'menu_position'	   => 20,
			 'menu_icon' => 'dashicons-media-spreadsheet',
			 'map_meta_cap'		=> true,
			 'hierarchical'		=> false,
			 'has_archive'		=> true,
			 'supports'			=> array(
				 'title',
				 'editor',
				 'author',
				 'revisions',
			 ),
			 'taxonomies'		  => array( 'post_tag' ),
			 'rewrite'			 => array( 
			 	'slug'	   => 'presse',
				'with_front' => false,
				'pages' => false
				 ),
		)
	);
	
}


// Champs ACF
include_once (plugin_dir_path(__FILE__).'c12-presse-acf.php');
