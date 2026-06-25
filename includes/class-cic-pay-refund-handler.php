<?php
/**
 * Monetico refund handler scaffold.
 *
 * @package WC_CIC_Pay
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Handles Monetico refunds.
 */
class CIC_Pay_Refund_Handler {

	/**
	 * Refund a paid WooCommerce order.
	 *
	 * @param WC_Order $order  WooCommerce order.
	 * @param float    $amount Refund amount.
	 *
	 * @return bool|WP_Error
	 */
	public function refund( WC_Order $order, float $amount ): bool|WP_Error {
		unset( $order, $amount );

		return false;
	}
}
