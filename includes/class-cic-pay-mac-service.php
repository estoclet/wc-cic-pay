<?php
/**
 * Monetico MAC service scaffold.
 *
 * @package WC_CIC_Pay
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Builds and verifies Monetico MAC values.
 */
class CIC_Pay_MAC_Service {

	/**
	 * Build the payment request MAC.
	 *
	 * @param array<string, mixed> $fields Payment fields.
	 */
	public function build_payment_mac( array $fields ): string {
		unset( $fields );

		return '';
	}

	/**
	 * Verify the callback MAC.
	 *
	 * @param array<string, mixed> $fields       Callback fields.
	 * @param string               $received_mac Received MAC.
	 */
	public function verify_callback_mac( array $fields, string $received_mac ): bool {
		unset( $fields, $received_mac );

		return false;
	}
}
