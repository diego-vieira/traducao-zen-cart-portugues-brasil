<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: shopping_cart.php 3183 2006-03-14 07:58:59Z birdbrain $
 */

define('NAVBAR_TITLE', 'Carrinho de compras');
define('HEADING_TITLE', 'Seu carrinho de compras cont&eacute;m:');
define('HEADING_TITLE_EMPTY', 'Seu carrinho de compras');
define('TEXT_INFORMATION', '');
define('TABLE_HEADING_REMOVE', 'Remover');
define('TABLE_HEADING_QUANTITY', 'Quantidade');
define('TABLE_HEADING_MODEL', 'Modelo');
define('TABLE_HEADING_PRICE','Unidades');
define('TEXT_CART_EMPTY', 'Seu carrinho de compras est&aacute; vazio.');
define('SUB_TITLE_SUB_TOTAL', 'Sub-Total:');
define('SUB_TITLE_TOTAL', 'Total:');

define('OUT_OF_STOCK_CANT_CHECKOUT', 'Produtos marcados com ' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . ' est&atilde;o esgotados ou n&atilde;o h&aacute; bastante no estoque para seu pedido.<br />Por favor, altere a quantidade de produtos marcados com (' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . '). Obrigado');
define('OUT_OF_STOCK_CAN_CHECKOUT', 'Produtos marcados com ' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . ' est&atilde;o esgotados.<br />&Iacute;tens esgotados ser&atilde;o colodados em um pedido separado, e estar&atilde;o dispon&iacute;veis assim que estiverem em estoque.');

define('TEXT_TOTAL_ITEMS', 'Total de &iacute;tens: ');
define('TEXT_TOTAL_WEIGHT', '&nbsp;&nbsp;Peso: ');
define('TEXT_TOTAL_AMOUNT', '&nbsp;&nbsp;Total: ');

define('TEXT_VISITORS_CART', '<a href="javascript:session_win();">[ajuda (?)]</a>');
define('TEXT_OPTION_DIVIDER', '&nbsp;-&nbsp;');
?>