<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: time_out.php 3027 2006-02-13 17:15:51Z drbyte $
 */

define('NAVBAR_TITLE', 'O login expirou');
define('HEADING_TITLE', 'Oops! Sua sess�o expirou.');
define('HEADING_TITLE_LOGGED_IN', 'Desculpe, mas voc� n�o tem permiss�o para executar esta a��o. ');
define('TEXT_INFORMATION', 'Desculpe-nos, mas para sua prote��o, depois de um longo tempo sem opera��es o seu login expirou.<br /><br /> Caso voc� esteja realizando uma compra, por favor, fa�a novamente seu <a href="' . zen_href_link(FILENAME_LOGIN, '', 'SSL') . '">Login</a> e ter� seu carrinhos de compras restaurado.<br /><br /> Se voc� terminar um pedido' . (DOWNLOAD_ENABLED == 'true' ? ', ou um dowload e deseja rev�-lo, v� at� ' : '') . ', <a href="' . zen_href_link(FILENAME_ACCOUNT, '', 'SSL') . '">Minha Conta</a> , depois v� para a p�gina de pedidos.');

define('TEXT_INFORMATION_LOGGED_IN', 'Voc� ainda est� conectado � sua conta e pode continuar comprando.');

define('HEADING_RETURNING_CUSTOMER', 'Entrar');
define('TEXT_PASSWORD_FORGOTTEN', 'Esqueceu sua senha?')
?>