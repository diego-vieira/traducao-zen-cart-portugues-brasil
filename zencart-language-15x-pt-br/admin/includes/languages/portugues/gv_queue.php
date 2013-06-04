<?php
//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                    |
// +----------------------------------------------------------------------+
// | Copyright (c) 2003 The zen-cart developers              |
// |                                   |
// | http://www.zen-cart.com/index.php                  |
// |                                   |
// | Portions Copyright (c) 2003 osCommerce                |
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the GPL license,    |
// | that is bundled with this package in the file LICENSE, and is    |
// | available through the world-wide-web at the following url:      |
// | http://www.zen-cart.com/license/2_0.txt.               |
// | If you did not receive a copy of the zen-cart license and are unable |
// | to obtain it through the world-wide-web, please send a note to    |
// | license@zen-cart.com so we can mail you a copy immediately.     |
// +----------------------------------------------------------------------+
// $Id: gv_queue.php 1105 2005-04-04 22:05:35Z birdbrain $
//

define('HEADING_TITLE', 'Libera&ccedil;&atilde;o de Fila de ' . TEXT_GV_NAME);

define('TABLE_HEADING_CUSTOMERS', 'Clientes');
define('TABLE_HEADING_ORDERS_ID', 'No. da Venda');
define('TABLE_HEADING_VOUCHER_VALUE', 'Valor do ' . TEXT_GV_NAME);
define('TABLE_HEADING_DATE_PURCHASED', 'Data da Venda');
define('TABLE_HEADING_ACTION', 'A&ccedil;&atilde;o');

define('TEXT_REDEEM_GV_MESSAGE_HEADER', 'Voc&ecirc; comprou recentemente um ' . TEXT_GV_NAME . ' da nossa loja online.');
define('TEXT_REDEEM_GV_MESSAGE_RELEASED', 'Por motivos de seguran&ccedil;a este n&atilde;o estar&aacute; liberado pra voc&ecirc; imediamente. ' .
                     'No entanto, este valor foi agora liberado. Voc&ecirc; pode agora visitar nossa loja e enviar o valor do ' . TEXT_GV_NAME . ' via e-mail para algu&eacute;m, ou voc&ecirc;s mesmo poder&aacute; us&aacute;-lo.' . "\n\n"
                     );

define('TEXT_REDEEM_GV_MESSAGE_AMOUNT', 'O(s) ' . TEXT_GV_NAME . '(s) que voc&ecirc; comprou vale(m) %s');
define('TEXT_REDEEM_GV_MESSAGE_THANKS', 'Obrigado por comprar conosco!');

define('TEXT_REDEEM_GV_MESSAGE_BODY', '');
define('TEXT_REDEEM_GV_MESSAGE_FOOTER', '');
define('TEXT_REDEEM_GV_SUBJECT', 'Compra de ' . TEXT_GV_NAME);
define('TEXT_REDEEM_GV_SUBJECT_ORDER',' Venda #');

define('TEXT_EDIT_ORDER','Editar Venda ID# ');
define('TEXT_GV_NONE','No ' . TEXT_GV_NAME . ' para liberar');
?>