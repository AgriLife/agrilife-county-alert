<?php
/**
 * AgriLife County Alert
 *
 * @package      agrilife-county-alert
 * @author       Zachary Watkins
 * @copyright    2020 Texas A&M AgriLife Communications
 * @license      GPL-2.0+
 *
 * @wordpress-plugin
 * Plugin Name:  AgriLife County Alert
 * Plugin URI:   https://github.com/AgriLife/af4-masternaturalist
 * Description:  A plugin for displaying alert messages on AgriLife County websites.
 * Version:      1.0.0
 * Author:       Zachary Watkins
 * Author URI:   https://github.com/ZachWatkins
 * Author Email: zachary.watkins@ag.tamu.edu
 * Text Domain:  agrilife-county-alert
 * License:      GPL-2.0+
 * License URI:  http://www.gnu.org/licenses/gpl-2.0.txt
 */

add_action( 'agriflex_content_wrap', 'agrilife_county_alert_covid19' );

function agrilife_county_alert_covid19() {

	echo '<!-- div class="callout alert" style="display:none;"><a href="#">Get the latest information on Coronavirus (COVID19) here.</a></div -->';

}

// Register global styles used in the theme.
add_action( 'wp_enqueue_scripts', 'agrilife_county_alert_register' );

// Enqueue extension styles.
add_action( 'wp_enqueue_scripts', 'agrilife_county_alert_enqueue' );

/**
 * Registers all styles used within the plugin
 *
 * @since 0.1.0
 * @return void
 */
function agrilife_county_alert_register() {

	wp_register_style(
		'agrilife-county-alert-styles',
		plugin_dir_url( __FILE__ ) . 'css/style.css',
		false,
		filemtime( plugin_dir_path( __FILE__ ) . 'css/style.css' ),
		'screen'
	);

}

/**
 * Enqueues extension styles
 *
 * @since 0.1.0
 * @return void
 */
function agrilife_county_alert_enqueue() {

	wp_enqueue_style( 'agrilife-county-alert-styles' );

}
