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
// $Id: gv_mail.php 1105 2005-04-04 22:05:35Z birdbrain $
//

define('HEADING_TITLE', 'Enviar ' . TEXT_GV_NAME . ' para os Clientes');

define('TEXT_CUSTOMER', 'Cliente:');
define('TEXT_SUBJECT', 'Assunto:');
define('TEXT_FROM', 'De:');
define('TEXT_TO', 'Enviar para:');
define('TEXT_AMOUNT', 'Valor');
define('TEXT_MESSAGE', 'Mensagem <br />Somente Texto:');
define('TEXT_RICH_TEXT_MESSAGE', 'Mensagem <br />HTML:');
define('TEXT_SINGLE_EMAIL', '<span class="smallText">Use isto para enviar um &uacute;nico e-mail, ou use a lista acima</span>');
define('TEXT_SELECT_CUSTOMER', 'Selecionar Cliente');
define('TEXT_ALL_CUSTOMERS', 'Todos os Clientes');
define('TEXT_NEWSLETTER_CUSTOMERS', 'Todos os Cliente Inscritos na Newsletter');

define('NOTICE_EMAIL_SENT_TO', 'Not&iacute;cia: E-mail enviado para: %s');
define('ERROR_NO_CUSTOMER_SELECTED', 'Erro: Nenhum cliente foi selecionado.');
define('ERROR_NO_AMOUNT_SELECTED', 'Erro: Nenhum valor foi informado.');
define('ERROR_NO_SUBJECT', 'Erro: Nenhum assunto foi digitado.');
define('ERROR_GV_AMOUNT', 'Por favor, defina o valor como um valor sem s&iacute;mbolos. Example: 25.00');

define('TEXT_GV_ANNOUNCE','<font color="#0000ff">N&oacute;s gostar&iacute;amos de lhe oferecer este ' . TEXT_GV_NAME . '</font>');
define('TEXT_GV_WORTH', 'O ' . TEXT_GV_NAME . ' tem um valor de ');
define('TEXT_TO_REDEEM', 'Para resgatar este ' . TEXT_GV_NAME . ', por favor, clique no link abaixo. Por favor, anote o ' . TEXT_GV_REDEEM);
define('TEXT_WHICH_IS', ' que &eacute;');
define('TEXT_IN_CASE', ' se voc&ecirc; tiver algum problema.');
define('TEXT_OR_VISIT', 'ou visite ');
define('TEXT_ENTER_CODE', ' e digite o c&oacute;digo durante o processo de pagamento');
define('TEXT_CLICK_TO_REDEEM','Clique aqui para resgatar');

define ('TEXT_REDEEM_COUPON_MESSAGE_HEADER', 'Voc&ecirc; comprou recentemente um ' . TEXT_GV_NAME . ' de nosso site, por quest&otilde;es de seguran&ccedil;a, a quantia do ' . TEXT_GV_NAME . ' n&atilde;o foi imediatamente creditado pra voc&ecirc;. O dono da loja liberou agora este valor.');
define ('TEXT_REDEEM_COUPON_MESSAGE_AMOUNT', "\n\n" . 'O valor do ' . TEXT_GV_NAME . ' &eacute; %s');
define ('TEXT_REDEEM_COUPON_MESSAGE_BODY', "\n\n" . 'Voc&ecirc; pode agora visitar nosso site, entrar com sua conta e enviar o valor do ' . TEXT_GV_NAME . ' para qualquer pessoa.');
define ('TEXT_REDEEM_COUPON_MESSAGE_FOOTER', "\n\n");

?>