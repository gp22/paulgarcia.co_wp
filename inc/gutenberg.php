<?php

function pgarcia_gutenberg_blocks() {

	wp_register_script(
		'custom-cta-js',
		get_template_directory_uri() . '/public/gutenberg-cta-block-bundle.js',
		array( 'wp-blocks', 'wp-block-editor', 'wp-components' )
	);

	register_block_type(
		'pgarcia/custom-cta',
		array(
			'editor_script' => 'custom-cta-js'
		)
	);

}

add_action( 'init', 'pgarcia_gutenberg_blocks' );
