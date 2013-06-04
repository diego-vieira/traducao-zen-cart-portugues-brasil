<?php
//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2003 The zen-cart developers                           |
// |                                                                      |
// | http://www.zen-cart.com/index.php                                    |
// |                                                                      |
// | Portions Copyright (c) 2003 osCommerce                               |
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the GPL license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available through the world-wide-web at the following url:           |
// | http://www.zen-cart.com/license/2_0.txt.                             |
// | If you did not receive a copy of the zen-cart license and are unable |
// | to obtain it through the world-wide-web, please send a note to       |
// | license@zen-cart.com so we can mail you a copy immediately.          |
// +----------------------------------------------------------------------+
// $Id: checkout_process.php 1969 2005-09-13 06:57:21Z drbyte $
//

define('EMAIL_TEXT_SUBJECT', 'Confirmação do pedido');
define('EMAIL_TEXT_HEADER', 'Confirmação do pedido');
define('EMAIL_TEXT_FROM',' de '); //added to the EMAIL_TEXT_HEADER, above on text-only emails
define('EMAIL_THANKS_FOR_SHOPPING','Obrigado por adquirir nossos produtos.');
define('EMAIL_DETAILS_FOLLOW','Os detalhes do Seu Pedido.');
define('EMAIL_TEXT_ORDER_NUMBER', 'Número do pedido:');
define('EMAIL_TEXT_INVOICE_URL', 'Para saber detalhes da sua compra acesse o link abaixo:');
define('EMAIL_TEXT_INVOICE_URL_CLICK', 'Clique aqui para saber mais detalhes da sua compra');
define('EMAIL_TEXT_DATE_ORDERED', 'Data do pedido:');
define('EMAIL_TEXT_PRODUCTS', 'Produto(s)');
define('EMAIL_TEXT_SUBTOTAL', 'Sub-Total:');
define('EMAIL_TEXT_TAX', 'Imposto:    ');
define('EMAIL_TEXT_SHIPPING', 'Entrega: ');
define('EMAIL_TEXT_TOTAL', 'Total:  ');
define('EMAIL_TEXT_DELIVERY_ADDRESS', 'Endere&ccedil;o de entrega');
define('EMAIL_TEXT_BILLING_ADDRESS', 'Endere&ccedil;o de cobran&ccedil;a');
define('EMAIL_TEXT_PAYMENT_METHOD', 'Forma de Pagamento');

define('EMAIL_SEPARATOR', '------------------------------------------------------');
define('TEXT_EMAIL_VIA', 'através de');

// suggest not using # vs No as some spamm protection block emails with these subjects
define('EMAIL_ORDER_NUMBER_SUBJECT', ' No.: ');
define('HEADING_ADDRESS_INFORMATION','Informa&ccedil;&atilde;o de endere&ccedil;o');
define('HEADING_SHIPPING_METHOD','Forma de Envio');
?>