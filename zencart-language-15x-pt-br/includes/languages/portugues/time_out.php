<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: time_out.php 3027 2006-02-13 17:15:51Z drbyte $
 */

define('NAVBAR_TITLE', 'O login expirou');
define('HEADING_TITLE', 'Oops! Sua sess&atilde;o expirou.');
define('HEADING_TITLE_LOGGED_IN', 'Desculpe, mas voc&ecirc; n&atilde;o tem permiss&atilde;o para executar esta a&ccedil;&atilde;o. ');
define('TEXT_INFORMATION', 'Desculpe-nos, mas para sua prote&ccedil;&atilde;o, depois de um longo tempo sem opera&ccedil;&otilde;es o seu login expirou.<br /><br /> Caso voc&ecirc; esteja realizando uma compra, por favor, fa&ccedil;a novamente seu <a href="' . zen_href_link(FILENAME_LOGIN, '', 'SSL') . '">Login</a> e ter&aacute; seu carrinhos de compras restaurado.<br /><br /> Se voc&ecirc; terminar um pedido' . (DOWNLOAD_ENABLED == 'true' ? ', ou um dowload e deseja rev&ecirc;-lo, v&aacute; at&eacute; ' : '') . ', <a href="' . zen_href_link(FILENAME_ACCOUNT, '', 'SSL') . '">Minha Conta</a> , depois v&aacute; para a p&aacute;gina de pedidos.');

define('TEXT_INFORMATION_LOGGED_IN', 'Voc&ecirc; ainda est&aacute; conectado &agrave; sua conta e pode continuar comprando.');

define('HEADING_RETURNING_CUSTOMER', 'Entrar');
define('TEXT_PASSWORD_FORGOTTEN', 'Esqueceu sua senha?')
?>