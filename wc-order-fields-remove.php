<?php 

/*
 * Plugin Name: L.A.P.S. WC order fields remover
 * Plugin URI:  https://github.com/laps78/WC-fields-remover
 * Description: Данный плагин удаляет произвольные поля из заказа woocommerce
 * Version: 1.1.1
 * Author: Евгений Лаптев
 * Author URI: https://laps78.github.io
 * License: GPLv2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 *
 * Text Domain: truelaps
 * Domain Path: /languages
 *
 * Network: true
 */
  function fields_remover($fields) {
  
  // hide the billing fields
  unset($fields["billing"]["billing_first_name"]);
  unset($fields["billing"]["billing_last_name"]);
  unset($fields["billing"]["billing_company"]);
  unset($fields["billing"]["billing_address_1"]);
  unset($fields["billing"]["billing_address_2"]);
  unset($fields["billing"]["billing_city"]);
  unset($fields["billing"]["billing_postcode"]);
  unset($fields["billing"]["billing_country"]);
  unset($fields["billing"]["billing_state"]);
  unset($fields["billing"]["billing_email"]);
  unset($fields["billing"]["billing_phone"]);

  // hide shipping fields
  unset($fields['shipping']['shipping_first_name']);
  unset($fields['shipping']['shipping_last_name']);
  unset($fields['shipping']['shipping_company']);
  unset($fields['shipping']['shipping_address_1']);
  unset($fields['shipping']['shipping_address_2']);
  unset($fields['shipping']['shipping_city']);
  unset($fields['shipping']['shipping_postcode']);
  unset($fields['shipping']['shipping_country']);
  unset($fields['shipping']['shipping_state']);
  unset($fields['shipping']['shipping_phone']);

  // hide order fields
  unset($fields["order"]["order_comments"]);
 };

 add_filter( 'woocommerce_checkout_fields', 'fields_remover',);
 