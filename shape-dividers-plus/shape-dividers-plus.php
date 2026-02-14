<?php
/*
Plugin Name: Shape Dividers Plus
Plugin URI: https://mburnette.com/shape-dividers-plus/
Description: Adds a number of additional custom shape divider options for Elementor
Version: 1.2.5
Requires at least: 5.0
Requires PHP: 7.0
Tested up to: 6.9.1
Requires Plugins: elementor
Author: Marcus Burnette
Author URI: https://mburnette.com
License: GPLv2 or later
Text Domain: shape-dividers-plus
Domain Path: /languages
*/


/* Exit if accessed directly. */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! defined( 'SDPFE_PLUGIN_PATH' ) ) {
	define( 'SDPFE_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
}

if ( ! defined( 'SDPFE_PLUGIN_URL' ) ) {
	define( 'SDPFE_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
}

/**
 * Load plugin translation files.
 *
 * @return void
 */
function sdpfe_load_textdomain() {
	load_plugin_textdomain( 'shape-dividers-plus', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
}
add_action( 'plugins_loaded', 'sdpfe_load_textdomain' );

/**
 * Display an admin notice when Elementor is not active.
 *
 * @return void
 */
function sdpfe_maybe_show_elementor_notice() {
	if ( did_action( 'elementor/loaded' ) ) {
		return;
	}

	if ( ! current_user_can( 'activate_plugins' ) ) {
		return;
	}
	?>
	<div class="notice notice-warning is-dismissible">
		<p>
			<?php
			echo esc_html__(
				'Shape Dividers Plus requires Elementor to be installed and active.',
				'shape-dividers-plus'
			);
			?>
		</p>
	</div>
	<?php
}
add_action( 'admin_notices', 'sdpfe_maybe_show_elementor_notice' );

/**
 * Return the plugin's custom shape definitions.
 *
 * @return array<string,array<string,mixed>>
 */
function sdpfe_get_custom_dividers() {
	static $dividers = null;

	if ( null !== $dividers ) {
		return $dividers;
	}

	$dividers = [
		'sdpfe-brush-001' => [
			'title'        => _x( 'SD+ Brush 1', 'Shapes', 'shape-dividers-plus' ),
			'has_negative' => false,
			'has_flip'     => true,
			'height_only'  => true,
			'file'         => 'assets/dividers/brushes/sdpfe-brush-001.svg',
		],
		'sdpfe-brush-002' => [
			'title'        => _x( 'SD+ Brush 2', 'Shapes', 'shape-dividers-plus' ),
			'has_negative' => false,
			'has_flip'     => true,
			'height_only'  => true,
			'file'         => 'assets/dividers/brushes/sdpfe-brush-002.svg',
		],
		'sdpfe-ink-stripe-001' => [
			'title'        => _x( 'SD+ Ink Stripe', 'Shapes', 'shape-dividers-plus' ),
			'has_negative' => false,
			'has_flip'     => true,
			'height_only'  => true,
			'file'         => 'assets/dividers/brushes/sdpfe-ink-stripe-001.svg',
		],
		'sdpfe-splatter-paint-001' => [
			'title'        => _x( 'SD+ Splatter Paint', 'Shapes', 'shape-dividers-plus' ),
			'has_negative' => false,
			'has_flip'     => true,
			'height_only'  => true,
			'file'         => 'assets/dividers/brushes/sdpfe-splatter-paint-001.svg',
		],
		'sdpfe-splatter-paint-002' => [
			'title'        => _x( 'SD+ Splatter Paint 2', 'Shapes', 'shape-dividers-plus' ),
			'has_negative' => false,
			'has_flip'     => true,
			'height_only'  => true,
			'file'         => 'assets/dividers/brushes/sdpfe-splatter-paint-002.svg',
		],
		'sdpfe-melting-lines-001' => [
			'title'        => _x( 'SD+ Melting Lines', 'Shapes', 'shape-dividers-plus' ),
			'has_negative' => false,
			'has_flip'     => true,
			'height_only'  => false,
			'file'         => 'assets/dividers/geometric/sdpfe-melting-lines-001c.svg',
		],
		'sdpfe-grass-001' => [
			'title'        => _x( 'SD+ Grass', 'Shapes', 'shape-dividers-plus' ),
			'has_negative' => false,
			'has_flip'     => true,
			'height_only'  => false,
			'file'         => 'assets/dividers/misc/sdpfe-grass-001.svg',
		],
		'sdpfe-halftone-001' => [
			'title'        => _x( 'SD+ Halftone', 'Shapes', 'shape-dividers-plus' ),
			'has_negative' => false,
			'has_flip'     => true,
			'height_only'  => true,
			'file'         => 'assets/dividers/geometric/sdpfe-halftone-001.svg',
		],
		'sdpfe-geometric-001' => [
			'title'        => _x( 'SD+ Geometric Chevrons 1', 'Shapes', 'shape-dividers-plus' ),
			'has_negative' => false,
			'has_flip'     => true,
			'height_only'  => true,
			'file'         => 'assets/dividers/geometric/sdpfe-geometric-001.svg',
		],
		'sdpfe-geometric-002' => [
			'title'        => _x( 'SD+ Geometric Polygons', 'Shapes', 'shape-dividers-plus' ),
			'has_negative' => false,
			'has_flip'     => true,
			'height_only'  => true,
			'file'         => 'assets/dividers/geometric/sdpfe-geometric-002.svg',
		],
		'sdpfe-cardboard-001' => [
			'title'        => _x( 'SD+ Cardboard', 'Shapes', 'shape-dividers-plus' ),
			'has_negative' => false,
			'has_flip'     => true,
			'height_only'  => true,
			'file'         => 'assets/dividers/paper/sdpfe-cardboard-001.svg',
		],
		'sdpfe-papertear-001' => [
			'title'        => _x( 'SD+ Paper Tear 1', 'Shapes', 'shape-dividers-plus' ),
			'has_negative' => false,
			'has_flip'     => true,
			'height_only'  => true,
			'file'         => 'assets/dividers/paper/sdpfe-papertear-001.svg',
		],
		'sdpfe-papertear-002' => [
			'title'        => _x( 'SD+ Paper Tear 2', 'Shapes', 'shape-dividers-plus' ),
			'has_negative' => false,
			'has_flip'     => true,
			'height_only'  => true,
			'file'         => 'assets/dividers/paper/sdpfe-papertear-002.svg',
		],
		'sdpfe-papertear-003' => [
			'title'        => _x( 'SD+ Paper Tear 3', 'Shapes', 'shape-dividers-plus' ),
			'has_negative' => false,
			'has_flip'     => true,
			'height_only'  => true,
			'file'         => 'assets/dividers/paper/sdpfe-papertear-003.svg',
		],
		'sdpfe-tape-measure-001' => [
			'title'        => _x( 'SD+ Tape Measure', 'Shapes', 'shape-dividers-plus' ),
			'has_negative' => false,
			'has_flip'     => false,
			'height_only'  => true,
			'file'         => 'assets/dividers/misc/sdpfe-tape-measure-001.svg',
		],
		'sdpfe-wood-001' => [
			'title'        => _x( 'SD+ Wood 1', 'Shapes', 'shape-dividers-plus' ),
			'has_negative' => false,
			'has_flip'     => true,
			'height_only'  => true,
			'file'         => 'assets/dividers/wood/sdpfe-wood-001.svg',
		],
		'sdpfe-wood-002' => [
			'title'        => _x( 'SD+ Wood 2', 'Shapes', 'shape-dividers-plus' ),
			'has_negative' => false,
			'has_flip'     => true,
			'height_only'  => true,
			'file'         => 'assets/dividers/wood/sdpfe-wood-002.svg',
		],
		'sdpfe-tire-tread-001' => [
			'title'        => _x( 'SD+ Tire Tread', 'Shapes', 'shape-dividers-plus' ),
			'has_negative' => false,
			'has_flip'     => true,
			'height_only'  => true,
			'file'         => 'assets/dividers/misc/sdpfe-tire-tread-001.svg',
		],
		'sdpfe-offroad-tread-001' => [
			'title'        => _x( 'SD+ Offroad Tire Tread', 'Shapes', 'shape-dividers-plus' ),
			'has_negative' => false,
			'has_flip'     => true,
			'height_only'  => true,
			'file'         => 'assets/dividers/misc/sdpfe-offroad-tread-001.svg',
		],
		'sdpfe-holiday-lights-001' => [
			'title'        => _x( 'SD+ Holiday Lights', 'Shapes', 'shape-dividers-plus' ),
			'has_negative' => false,
			'has_flip'     => true,
			'height_only'  => false,
			'file'         => 'assets/dividers/misc/sdpfe-holiday-lights-001.svg',
		],
		'sdpfe-sprinkles-001' => [
			'title'        => _x( 'SD+ Sprinkles', 'Shapes', 'shape-dividers-plus' ),
			'has_negative' => false,
			'has_flip'     => true,
			'height_only'  => false,
			'file'         => 'assets/dividers/misc/sdpfe-sprinkles-001.svg',
		],
		'sdpfe-jagged-edge-001' => [
			'title'        => _x( 'SD+ Jagged Edge', 'Shapes', 'shape-dividers-plus' ),
			'has_negative' => false,
			'has_flip'     => true,
			'height_only'  => false,
			'file'         => 'assets/dividers/misc/sdpfe-jagged-edge-001.svg',
		],
	];

	return $dividers;
}

/**
 * Register custom shapes with Elementor.
 *
 * @param array<string,array<string,mixed>> $additional_shapes Existing shape definitions.
 * @return array<string,array<string,mixed>>
 */
function sdpfe_register_additional_shapes( $additional_shapes ) {
	if ( ! did_action( 'elementor/loaded' ) ) {
		return $additional_shapes;
	}

	foreach ( sdpfe_get_custom_dividers() as $divider_key => $divider ) {
		$additional_shapes[ $divider_key ] = [
			'title'        => $divider['title'],
			'has_negative' => $divider['has_negative'],
			'has_flip'     => $divider['has_flip'],
			'height_only'  => $divider['height_only'],
			'url'          => SDPFE_PLUGIN_URL . $divider['file'],
			'path'         => SDPFE_PLUGIN_PATH . $divider['file'],
		];
	}

	return $additional_shapes;
}

add_filter( 'elementor/shapes/additional_shapes', 'sdpfe_register_additional_shapes' );
