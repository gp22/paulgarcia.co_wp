<?php
/**
 * Setup Carbon Fields
 *
 * @package      ClientName
 * @author       Paul Garcia
 * @since        1.0.0
 * @license      GPL-2.0+
**/


use Carbon_Fields\Container;
use Carbon_Fields\Field;

function crb_attach_post_options() {
    Container::make( 'post_meta', 'Landing Page Sections' )
        ->where( 'post_template', '=', 'page-home.php' )
        ->add_fields( array(
            Field::make( 'complex', 'crb_sections' )
                // Hero
                ->add_fields( 'hero', 'Hero', array(
										Field::make( 'text', 'hero_heading', 'Hero Heading' ),
										Field::make( 'text', 'hero_subhead', 'Hero Subhead' ),
										Field::make( 'image', 'hero_image', 'Hero Image' ),
								) )

                // Blockquote
                ->add_fields( 'blockquote', 'Blockquote', array(
										Field::make( 'text', 'quote_text', 'Quote Text' ),
										Field::make( 'text', 'quote_attr', 'Quote Attribute' ),
								) )

                // Feature list ( "what you'll get" ) section
                ->add_fields( 'feature_list', 'Feature List', array(
										Field::make( 'complex', 'features', 'Features' )
											->add_fields( array(
												Field::make( 'text', 'feature_title', 'Feature Title' ),
												Field::make( 'text', 'feature_body', 'Feature Body' ),
											) ),
                ) )

                // Second group will be a list of files for users to download
                // ->add_fields( 'file_list', 'File List', array(
                //     Field::make( 'complex', 'files', 'Files' )
                //         ->add_fields( array(
								// 						Field::make( 'text', 'title', 'Title' ),
                //             Field::make( 'file', 'file', 'File' ),
                //         ) ),
                // ) )

                // Third group will be a list of manually selected posts
                // used as a simple curated "Related posts" listing
                // ->add_fields( 'related_posts', 'Related Posts', array(
                //     Field::make( 'association', 'posts', 'Posts' )
                //         ->set_types( array(
                //             array(
                //                 'type' => 'post',
                //                 'post_type' => 'post',
                //             ),
                //         ) ),
                // ) ),
        ) );
}
add_action( 'carbon_fields_register_fields', 'crb_attach_post_options' );


function crb_load() {
	require_once( WP_PLUGIN_DIR . '/vendor/autoload.php' );
	\Carbon_Fields\Carbon_Fields::boot();
}
add_action( 'after_setup_theme', 'crb_load' );
