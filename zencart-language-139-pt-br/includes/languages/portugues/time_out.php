<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: time_out.php 3027 2006-02-13 17:15:51Z drbyte $
 */

define('NAVBAR_TITLE', 'O login expirou');
define('HEADING_TITLE', 'Oops! Sua sessão expirou.');
define('HEADING_TITLE_LOGGED_IN', 'Desculpe, mas você não tem permissão para executar esta ação. ');
define('TEXT_INFORMATION', 'Desculpe-nos, mas para sua proteção, depois de um longo tempo sem operações o seu login expirou.<br /><br /> Caso você esteja realizando uma compra, por favor, faça novamente seu <a href="' . zen_href_link(FILENAME_LOGIN, '', 'SSL') . '">Login</a> e terá seu carrinhos de compras restaurado.<br /><br /> Se você terminar um pedido' . (DOWNLOAD_ENABLED == 'true' ? ', ou um dowload e deseja revê-lo, vá até ' : '') . ', <a href="' . zen_href_link(FILENAME_ACCOUNT, '', 'SSL') . '">Minha Conta</a> , depois vá para a página de pedidos.');

define('TEXT_INFORMATION_LOGGED_IN', 'Você ainda está conectado à sua conta e pode continuar comprando.');

define('HEADING_RETURNING_CUSTOMER', 'Entrar');
define('TEXT_PASSWORD_FORGOTTEN', 'Esqueceu sua senha?')
?>