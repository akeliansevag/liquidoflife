<?php
if (! defined('_S_VERSION')) {
	define('_S_VERSION', '1.0.0');
}


function liquidoflife_setup()
{
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');

	register_nav_menus(
		array(
			'menu-1' => esc_html__('Primary', 'liquidoflife'),
		)
	);

	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);
}
add_action('after_setup_theme', 'liquidoflife_setup');

function liquidoflife_scripts()
{
	// Get file paths
	$css_file = get_template_directory_uri() . '/dist/css/output.css';
	$js_file = get_template_directory_uri() . '/dist/js/bundle.js'; // Get file paths

	// Dynamic versioning based on file modification time
	$css_version = file_exists($css_file) ? filemtime($css_file) : _S_VERSION;
	$js_version = file_exists($js_file) ? filemtime($js_file) : _S_VERSION;

	// Enqueue styles and scripts with dynamic versions
	wp_enqueue_style('liquidoflife-style', $css_file, array(), $css_version);
	wp_enqueue_script_module('liquidoflife-scripts', $js_file, array(), $js_version, true);
}
add_action('wp_enqueue_scripts', 'liquidoflife_scripts');

function dd($variable)
{
	echo '<pre style="background-color: #f4f4f4; padding: 10px; border: 1px solid #ccc; border-radius: 5px; font-family: Courier, monospace; color: #333; font-size: 14px;">';
	var_dump($variable);
	echo '</pre>';
}
