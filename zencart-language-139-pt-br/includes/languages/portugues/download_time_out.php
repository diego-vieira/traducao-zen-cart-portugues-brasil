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
// $Id: download_time_out.php 1969 2005-09-13 06:57:21Z drbyte $
//

define('NAVBAR_TITLE', 'Seu download ...');
define('HEADING_TITLE', 'Seu download ...');

define('TEXT_INFORMATION', 'Seu download expirou.<br /><br />

  Caso você tenha outros downloads para fazer vá até <a href="' . zen_href_link(FILENAME_ACCOUNT, '', 'SSL') . '">Minha Conta</a> e verifique sua página de Pedidos.<br /><br />
  Caso ocorra algum erro em seu pedido entre em contato pelo <a href="' . zen_href_link(FILENAME_CONTACT_US) . '">FALE CONOSCO</a> <br /><br />
  Obrigado!
  ');
?>