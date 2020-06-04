<?php

function pgarcia_gutenberg_blocks() {

	wp_register_script(
		'custom-cta-js',
		get_template_directory_uri() . '/public/gutenberg-cta-block-bundle.js',
		array( 'wp-blocks', 'wp-block-editor', 'wp-components' )
	);

	// Add support for custom editor style css file
	// wp_register_style( 'custom-cta-style-editor-css', get_stylesheet_directory_uri() . '/public/custom-cta-style-editor.css', array() );

	// Add support for custom css file
	// wp_register_style( 'custom-cta-css', get_stylesheet_directory_uri() . '/public/custom-cta.css', array() );


	register_block_type(
		'pgarcia/custom-cta',
		array(
			'editor_script' => 'custom-cta-js',
			// 'editor_style' => 'custom-cta-style-editor-css',
			// 'style' => 'custom-cta-css'
		)
	);

}

add_action( 'init', 'pgarcia_gutenberg_blocks' );
