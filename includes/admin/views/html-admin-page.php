<?php
/**
 * Admin options screen.
 *
 * @package WooCommerce_MercadoPago/Admin/Settings
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>

<h3><?php echo esc_html( $this->method_title ); ?></h3>

<?php
	if ( 'yes' == $this->get_option( 'enabled' ) ) {
		if ( ! in_array( get_woocommerce_currency(), $this->api->get_supported_currencies() ) && ! class_exists( 'woocommerce_wpml' ) ) {
			include 'html-notice-currency-not-supported.php';
		}
	}
?>

<?php echo wpautop( $this->method_description ); ?>

<?php include 'html-admin-help-message.php'; ?>

<table class="form-table">
	<?php $this->generate_settings_html(); ?>
</table>
