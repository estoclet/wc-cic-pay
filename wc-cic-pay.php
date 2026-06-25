<?php
/**
 * Plugin Name: CIC Pay for WooCommerce
 * Plugin URI:  https://github.com/estoclet/wc-cic-pay
 * Description: Passerelle de paiement Monetico (CIC / Crédit Mutuel / OBC) pour WooCommerce.
 * Version:     1.0.0-dev
 * Requires at least: 6.3
 * Requires PHP: 8.1
 * WC requires at least: 8.0
 * WC tested up to: 9.9
 * Author:      Eric Stoclet / Stoelabs
 * Author URI:  https://stoelabs.com
 * License:     GPL-2.0-or-later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: wc-cic-pay
 * Domain Path: /languages
 *
 * @package WC_CIC_Pay
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! defined( 'WC_CIC_PAY_VERSION' ) ) {
	define( 'WC_CIC_PAY_VERSION', '1.0.0-dev' );
}
if ( ! defined( 'WC_CIC_PAY_FILE' ) ) {
	define( 'WC_CIC_PAY_FILE', __FILE__ );
}
if ( ! defined( 'WC_CIC_PAY_PLUGIN_DIR' ) ) {
	define( 'WC_CIC_PAY_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
}
if ( ! defined( 'WC_CIC_PAY_PLUGIN_URL' ) ) {
	define( 'WC_CIC_PAY_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
}

add_action(
	'before_woocommerce_init',
	function () {
		if ( class_exists( \Automattic\WooCommerce\Utilities\FeaturesUtil::class ) ) {
			\Automattic\WooCommerce\Utilities\FeaturesUtil::declare_compatibility(
				'custom_order_tables',
				WC_CIC_PAY_FILE,
				true
			);
		}
	}
);

add_filter(
	'woocommerce_payment_gateways',
	function ( array $gateways ): array {
		$gateways[] = 'CIC_Pay_Gateway';
		return $gateways;
	}
);

add_action(
	'plugins_loaded',
	function () {
		if ( ! class_exists( 'WC_Payment_Gateway' ) ) {
			return;
		}

		require_once WC_CIC_PAY_PLUGIN_DIR . 'includes/class-cic-pay-order-meta.php';
		require_once WC_CIC_PAY_PLUGIN_DIR . 'includes/class-cic-pay-mac-service.php';
		require_once WC_CIC_PAY_PLUGIN_DIR . 'includes/class-cic-pay-context-builder.php';
		require_once WC_CIC_PAY_PLUGIN_DIR . 'includes/class-cic-pay-ipn-handler.php';
		require_once WC_CIC_PAY_PLUGIN_DIR . 'includes/class-cic-pay-refund-handler.php';
		require_once WC_CIC_PAY_PLUGIN_DIR . 'includes/class-cic-pay-migration.php';
		require_once WC_CIC_PAY_PLUGIN_DIR . 'includes/class-cic-pay-gateway.php';

		load_plugin_textdomain( 'wc-cic-pay', false, dirname( plugin_basename( WC_CIC_PAY_FILE ) ) . '/languages' );
	}
);
