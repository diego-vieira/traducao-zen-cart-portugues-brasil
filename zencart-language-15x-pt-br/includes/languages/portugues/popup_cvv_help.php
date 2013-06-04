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
// $Id: popup_cvv_help.php 1969 2005-09-13 06:57:21Z drbyte $
//

define('HEADING_CVV', 'O que &eacute; o CVV?');
define('TEXT_CVV_HELP1', 'Visa, Mastercard, Descubra os 3 digitos do N&uacute;mero de Verifica&ccedil;&atilde;o do Cart&atilde;o<br /><br />
          Para seu conforto e seguran&ccedil;a, n&oacute;s solicitamos que voc&ecirc; informe o n&uacute;mero de verifica&ccedil;&atilde;o do seu cart&atilde;o.<br />
          Os 3 n&uacute;meros de verifica&ccedil;&atilde;o est&atilde;o impressos na parte de tr&aacute;s do seu cart&atilde;o.
          Est&atilde;o &agrave; direita do n&uacute;mero do seu cart&atilde;o.<br /><br />' .
          zen_image(DIR_WS_TEMPLATE_ICONS . 'cvv2visa.gif'));

define('TEXT_CVV_HELP2', '<br />American Express 4 d&iacute;gitos do N&uacute;mero de Verifica&ccedil;&atilde;o do Cart&atilde;o<br /><br />
       		O n&uacute;mero de verifica&ccedil;&atilde;o do American Express s&atilde;o 4 n&uacute;meros impressos na parte da frente do seu cart&atilde;o.
					Est&atilde;o &agrave; direita do n&uacute;mero do seu cart&atilde;o.<br/> ' .
          zen_image(DIR_WS_TEMPLATE_ICONS . 'cvv2amex.gif'));

define('TEXT_CLOSE_CVV_WINDOW', '<br />Fechar Janela [x]');
?>