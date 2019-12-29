<?
	add_theme_support( 'align-wide' );
	// Add support for Block Styles.
	// add_theme_support( 'wp-block-styles' );

	// Add support for editor styles.
	add_theme_support( 'editor-styles' );

	// Enqueue editor styles.
	// add_editor_style( 'style.css' );
	add_editor_style( 'style.css' );

	add_filter( 'big_image_size_threshold', '__return_false' );
?>