=== Shape Dividers Plus for Elementor ===
Contributors: mdburnette
Tags: elementor, layout, design, page builder
Requires at least: 5.0
Tested up to: 6.9.1
Requires PHP: 7.0
Requires Plugins: elementor
Stable tag: 1.2.5
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Add 20+ extra SVG shape dividers to Elementor sections and containers.

== Description ==
Shape Dividers Plus extends Elementor with additional custom SVG dividers so you can create more distinctive transitions between sections.

The plugin adds new options directly into Elementor's existing Shape Divider controls, including brush, geometric, paper, wood, tread, and decorative styles.

Key points:
* Works inside Elementor's native divider UI (no new builder interface to learn).
* Includes multiple divider categories for different design styles.
* Supports Elementor divider behaviors such as flip/height options (where applicable).
* Uses optimized SVG assets for reduced payload size and better front-end performance.
* Requires Elementor to be installed and active.

== Installation ==
Recommended (WordPress.org):
1. In WordPress admin, go to Plugins > Add New.
2. Search for `Shape Dividers Plus`.
3. Click Install Now, then Activate.
4. Make sure Elementor is installed and active.
5. Edit a page with Elementor and select a Section or Container.
6. Open the Style tab and expand Shape Divider.
7. Choose any divider with the `SD+` prefix.

Alternative (upload zip):
1. In WordPress admin, go to Plugins > Add New > Upload Plugin.
2. Upload `shape-dividers-plus.zip` and click Install Now.
3. Activate Shape Dividers Plus.

Alternative (manual):
1. Upload the `shape-dividers-plus` folder to `/wp-content/plugins/`.
2. Activate the plugin from Plugins in WordPress admin.

== Screenshots ==
1. Shape Dividers Plus additional options
2. Dividers - SD+ Brush 1, SD+ Brush 2, SD+ Ink Stripe
3. Dividers - SD+ Splatter Paint, SD+ Splatter Paint 2, SD+ Melting Lines, SD+ Halftone
4. Dividers - SD+ Geometric Chevrons 1, SD+ Cardboard, SD+ Paper Tear 1
5. Dividers - SD+ Paper Tear 2, SD+ Paper Tear 3, SD+ Tape Measure
6. Dividers - SD+ Wood 1, SD+ Wood 2, SD+ Tire Tread
7. Dividers - SD+ Offroad Tire Tread, SD+ Holiday Lights

== Changelog ==
= 1.2.5 (February 14, 2026) =
* Improved: removed unreferenced legacy SVG assets to reduce plugin package size.
* Improved: optimized divider SVG files for smaller payloads and faster rendering.
* Improved: refactored shape registration internals to avoid global state and reduce runtime overhead.
* Improved: added explicit Elementor dependency metadata and missing dependency admin notice.
* Improved: corrected text domain usage and added translation loading hook.
* Improved: updated WordPress compatibility metadata (`Tested up to: 6.9`).
* Docs: expanded plugin description and installation instructions.

= 1.2.4 (January 12, 2026) =
* Improved: updated WordPress compatibility (Tested up to: 6.3).

= 1.2.3 (March 9, 2023) =
* Added: SD+ Splatter Paint 2

= 1.2.2 (April 13, 2022) =
* Added: SD+ Jagged Edge

= 1.2.1 (April 12, 2022) =
* Added: SD+ Grass, SD+ Sprinkles, and SD+ Geometric Polygons

= 1.2 (April 8, 2022) =
* Fixed: removed manual updater
* Initial release for the .org repository

= 1.1.1 (March 5, 2021) =
* Fixed: additional performance tweaks

= 1.1 (March 1, 2021) =
* Fixed: streamlined updater for better plugin preformance

= 1.0.6 (February 19, 2020) =
* Fixed: performance enhancements

= 1.0.5 (December 29, 2019) =
* Added: tape measure divider

= 1.0.4 (November 15, 2019) =
* Added: holiday lights divider
* Fixed: cleaned up a couple dividers

= 1.0.3 (November 14, 2019) =
* Fixed: misc tweaks

= 1.0.2 (November 13, 2019) =
* Added: several additional dividers

= 1.0 (November 11, 2019) =
* Initial plugin release
