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
                ->add_fields( 'feature_list', array(
										Field::make( 'complex', 'features' )
												->add_fields( array(
														Field::make( 'text', 'feature_title' ),
														Field::make( 'text', 'feature_body' ),
												) ),
								) )

                // Qualifier ( "wonder if we're a good fit?" ) section
                ->add_fields( 'qualifier', array(
										Field::make( 'complex', 'qualifier_text_box' )
												->add_fields( array(
														Field::make( 'text', 'qualifier_text' ),
												) ),
										Field::make( 'complex', 'disqualifier_text_box' )
												->add_fields( array(
														Field::make( 'text', 'disqualifier_text' ),
												) ),
                ) )
        ) );
}
add_action( 'carbon_fields_register_fields', 'crb_attach_post_options' );


function crb_load() {
	require_once( WP_PLUGIN_DIR . '/vendor/autoload.php' );
	\Carbon_Fields\Carbon_Fields::boot();
}
add_action( 'after_setup_theme', 'crb_load' );
