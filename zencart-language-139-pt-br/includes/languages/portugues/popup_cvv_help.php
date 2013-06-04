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
// $Id: popup_cvv_help.php 1969 2005-09-13 06:57:21Z drbyte $
//

define('HEADING_CVV', 'O que � o CVV?');
define('TEXT_CVV_HELP1', 'Visa, Mastercard, Descubra os 3 digitos do N�mero de Verifica��o do Cart�o<br /><br />
                    Para seu conforto e seguran�a, n�s solicitamos que voc� informe o n�mero de verifica��o do seu cart�o.<br />
                    Os 3 n�meros de verifica��o est�o impressos na parte de tr�s do seu cart�o.
                    Est�o � direita do n�mero do seu cart�o.<br /><br />' .
                    zen_image(DIR_WS_TEMPLATE_ICONS . 'cvv2visa.gif'));

define('TEXT_CVV_HELP2', '<br />American Express 4 d�gitos do N�mero de Verifica��o do Cart�o<br /><br />
              		O n�mero de verifica��o do American Express s�o 4 n�meros impressos na parte da frente do seu cart�o.
					Est�o � direita do n�mero do seu cart�o.<br/> ' .
                    zen_image(DIR_WS_TEMPLATE_ICONS . 'cvv2amex.gif'));

define('TEXT_CLOSE_CVV_WINDOW', '<br />Fechar Janela [x]');
?>