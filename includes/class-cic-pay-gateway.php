<?php
/**
 * WooCommerce payment gateway scaffold.
 *
 * @package WC_CIC_Pay
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Registers the Monetico payment gateway with WooCommerce.
 */
class CIC_Pay_Gateway extends WC_Payment_Gateway {

	/**
	 * Initialize gateway metadata and settings.
	 */
	public function __construct() {
		$this->id                 = 'monetico';
		$this->has_fields         = false;
		$this->method_title       = __( 'CIC Pay', 'wc-cic-pay' );
		$this->method_description = __( 'Paiement par carte bancaire via Monetico (CIC / Crédit Mutuel / OBC).', 'wc-cic-pay' );
		$this->supports           = array( 'products' );

		$this->init_form_fields();
		$this->init_settings();

		$this->title = $this->get_option( 'title', __( 'Carte bancaire (CIC Pay)', 'wc-cic-pay' ) );
	}

	/**
	 * Keep the gateway unavailable until payment processing is implemented.
	 */
	public function is_available(): bool {
		return false;
	}

	/**
	 * Register gateway settings fields.
	 */
	public function init_form_fields(): void {
		$this->form_fields = array();
	}

	/**
	 * Process a WooCommerce payment.
	 *
	 * @param int $order_id WooCommerce order ID.
	 *
	 * @return array<string, mixed>
	 */
	public function process_payment( $order_id ): array {
		unset( $order_id );

		return array();
	}

	/**
	 * Process a WooCommerce refund.
	 *
	 * @param int         $order_id WooCommerce order ID.
	 * @param float|null  $amount   Refund amount.
	 * @param string|null $reason   Refund reason.
	 *
	 * @return bool
	 */
	public function process_refund( $order_id, $amount = null, $reason = '' ) {
		unset( $order_id, $amount, $reason );

		return false;
	}
}
