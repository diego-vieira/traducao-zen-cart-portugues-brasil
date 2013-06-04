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

define('HEADING_CVV', 'O que é o CVV?');
define('TEXT_CVV_HELP1', 'Visa, Mastercard, Descubra os 3 digitos do Número de Verificação do Cartão<br /><br />
                    Para seu conforto e segurança, nós solicitamos que você informe o número de verificação do seu cartão.<br />
                    Os 3 números de verificação estão impressos na parte de trás do seu cartão.
                    Estão à direita do número do seu cartão.<br /><br />' .
                    zen_image(DIR_WS_TEMPLATE_ICONS . 'cvv2visa.gif'));

define('TEXT_CVV_HELP2', '<br />American Express 4 dígitos do Número de Verificação do Cartão<br /><br />
              		O número de verificação do American Express são 4 números impressos na parte da frente do seu cartão.
					Estão à direita do número do seu cartão.<br/> ' .
                    zen_image(DIR_WS_TEMPLATE_ICONS . 'cvv2amex.gif'));

define('TEXT_CLOSE_CVV_WINDOW', '<br />Fechar Janela [x]');
?>