# Shape Dividers Plus Documentation

## Overview

Shape Dividers Plus adds extra SVG shape dividers to Elementor's built-in Shape Divider controls. After activation, the plugin's dividers appear alongside Elementor's native divider options and are identified with the `SD+` prefix.

This plugin does not add a separate builder interface. You use the new divider shapes directly inside Elementor when editing a Section or Container.

## Requirements

- WordPress 6.5 or newer
- Elementor installed and active
- PHP 7.0 or newer

## Installation

### Install from a ZIP file

1. In the WordPress admin area, go to `Plugins > Add New Plugin`.
2. Click `Upload Plugin`.
3. Select the plugin ZIP file and click `Install Now`.
4. Click `Activate Plugin`.

### Install manually

1. Upload the `shape-dividers-plus` folder to `/wp-content/plugins/`.
2. In WordPress admin, go to `Plugins`.
3. Activate `Shape Dividers Plus`.

## First-Time Setup

1. Make sure Elementor is installed and active.
2. Edit a page with Elementor.
3. Select a Section or Container.
4. Open the `Style` tab.
5. Expand either `Shape Divider Top` or `Shape Divider Bottom`.
6. Open the `Type` dropdown.
7. Select any divider whose name begins with `SD+`.

If Elementor is not active, Shape Dividers Plus shows an admin notice and does not register its custom shapes.

## How To Use The Dividers

Once you choose an `SD+` divider in Elementor, you can style it with Elementor's normal Shape Divider controls.

Common settings include:

- Color
- Width
- Height
- Flip
- Bring to Front

Some dividers support only height-based adjustments, while others support broader sizing behavior. Available controls depend on the individual divider shape.

## Included Divider Library

The following divider shapes are included in the current version of the plugin.

### Brushes

- `SD+ Brush 1`
- `SD+ Brush 2`
- `SD+ Ink Stripe`
- `SD+ Splatter Paint`
- `SD+ Splatter Paint 2`

### Geometric

- `SD+ Melting Lines`
- `SD+ Halftone`
- `SD+ Geometric Chevrons 1`
- `SD+ Geometric Polygons`

### Paper

- `SD+ Cardboard`
- `SD+ Paper Tear 1`
- `SD+ Paper Tear 2`
- `SD+ Paper Tear 3`

### Wood

- `SD+ Wood 1`
- `SD+ Wood 2`

### Miscellaneous

- `SD+ Grass`
- `SD+ Tape Measure`
- `SD+ Tire Tread`
- `SD+ Offroad Tire Tread`
- `SD+ Holiday Lights`
- `SD+ Sprinkles`
- `SD+ Jagged Edge`

## Tips For Best Results

- Use `Top` and `Bottom` dividers together to create stronger transitions between content sections.
- Try `Flip` to mirror eligible shapes without needing extra assets.
- Use decorative dividers like `Holiday Lights` or `Sprinkles` on landing pages, seasonal pages, or promotional sections.
- Use textures like `Paper Tear`, `Cardboard`, `Wood`, and `Brush` dividers to make section breaks feel less rigid.
- Preview your page on tablet and mobile sizes to confirm the divider height and spacing still look balanced.

## Troubleshooting

### The `SD+` dividers do not appear in Elementor

Check the following:

- Elementor is installed and activated.
- Shape Dividers Plus is activated.
- You are editing a Section or Container that supports Shape Dividers.
- You are looking in the `Type` dropdown inside `Shape Divider Top` or `Shape Divider Bottom`.

### I see an admin warning about Elementor

That message appears when Elementor is not loaded. Activate Elementor and refresh the admin area.

### A divider does not look right on the page

If a divider appears small or sits inside the content instead of at the section edge, Elementor's shared divider stylesheet may be missing. This can affect both native and `SD+` shapes when templates or cached content are embedded in a page. Shape Dividers Plus ensures Elementor's registered divider stylesheet is loaded alongside its frontend styles, including in the editor preview.

After updating the plugin, clear Elementor's generated files and site caches so previously cached pages can include the stylesheet.

Try the following:

- Adjust the divider height.
- Toggle `Flip` if the divider supports it.
- Check spacing and overlap between adjacent sections.
- Review the result on desktop, tablet, and mobile breakpoints.

## Developers

Shape Dividers Plus is primarily an end-user plugin, but it does expose a small amount of developer-accessible behavior through WordPress and Elementor.

### Available Integration Points

#### `sdpfe_get_custom_dividers()`

Returns the plugin's divider definition array. This can be useful if you want to inspect the built-in Shape Dividers Plus library from custom code.

Example:

```php
<?php
if ( function_exists( 'sdpfe_get_custom_dividers' ) ) {
	$dividers = sdpfe_get_custom_dividers();

	foreach ( $dividers as $divider_key => $divider ) {
		error_log( $divider_key . ': ' . $divider['title'] );
	}
}
```

#### `elementor/shapes/additional_shapes`

Shape Dividers Plus uses Elementor's `elementor/shapes/additional_shapes` filter to register its divider library. If you are already extending Elementor, you can also use the same filter to add your own shapes alongside the plugin's dividers.

Example:

```php
<?php
add_filter(
	'elementor/shapes/additional_shapes',
	function( $additional_shapes ) {
		$additional_shapes['my-custom-divider'] = [
			'title'        => 'My Custom Divider',
			'has_negative' => false,
			'has_flip'     => true,
			'height_only'  => true,
			'url'          => plugin_dir_url( __FILE__ ) . 'assets/my-custom-divider.svg',
			'path'         => plugin_dir_path( __FILE__ ) . 'assets/my-custom-divider.svg',
		];

		return $additional_shapes;
	}
);
```

## FAQ

### Does this plugin work without Elementor?

No. Elementor is required because the plugin adds shapes to Elementor's existing Shape Divider system.

### Does this plugin create a new Elementor widget?

No. It extends the Shape Divider options already available in Elementor Sections and Containers.

### Can I use the dividers on both the top and bottom of a section?

Yes. You can choose supported `SD+` dividers in either `Shape Divider Top` or `Shape Divider Bottom`.

### Are all divider controls the same for every shape?

No. Some shapes are configured for height-only behavior, while others allow broader sizing options based on how the SVG is registered.

## Support

For site-specific help, verify that WordPress, Elementor, and the plugin are all active and up to date, then reproduce the issue inside Elementor using one divider at a time. That usually makes it easier to isolate whether the issue is related to a specific divider, layout, or breakpoint.

## Changelog

### 1.2.6 - 2026-10-07

- Add WordPress 6.5 as the minimum supported version and update the Tested up to value to 7.1.
- Fix small or misplaced native and custom dividers by loading Elementor's shared divider stylesheet on the frontend and in the editor preview.
- Document troubleshooting and cache-clearing steps for divider positioning issues.
