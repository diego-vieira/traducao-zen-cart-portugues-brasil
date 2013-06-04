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
// $Id: specials.php 4533 2006-09-17 17:21:10Z ajeh $
//

define('HEADING_TITLE', 'Especiais');

define('TABLE_HEADING_PRODUCTS', 'Produtos');
define('TABLE_HEADING_PRODUCTS_MODEL','Modelo');
define('TABLE_HEADING_PRODUCTS_PRICE', 'Produtos Price/Special/Sale');
define('TABLE_HEADING_PRODUCTS_PERCENTAGE','Porcentagem');
define('TABLE_HEADING_AVAILABLE_DATE', 'Available');
define('TABLE_HEADING_EXPIRES_DATE','Expira');
define('TABLE_HEADING_STATUS', 'Status');
define('TABLE_HEADING_ACTION', 'A&ccedil;&atilde;o');

define('TEXT_SPECIALS_PRODUCT', 'Produto:');
define('TEXT_SPECIALS_SPECIAL_PRICE', 'Pre&ccedil;o Especial:');
define('TEXT_SPECIALS_EXPIRES_DATE', 'Expiry Date:');
define('TEXT_SPECIALS_AVAILABLE_DATE', 'Available Date:');
define('TEXT_SPECIALS_PRICE_TIP', '<b>Specials Notes:</b><ul><li>You can enter a percentage to deduct in the Specials Price field, for example: <b>20%</b></li><li>If you enter a new price, the decimal separator must be a \'.\' (decimal-point), example: <b>49.99</b></li><li>Leave the expiry date empty for no expiration</li></ul>');

define('TEXT_INFO_DATE_ADDED', 'Adicionado em:');
define('TEXT_INFO_LAST_MODIFIED', 'Modificado em:');
define('TEXT_INFO_NEW_PRICE', 'Novo Price:');
define('TEXT_INFO_ORIGINAL_PRICE', 'Original Price:');
define('TEXT_INFO_DISPLAY_PRICE', 'Display Price:<br />');
define('TEXT_INFO_AVAILABLE_DATE', 'Available On:');
define('TEXT_INFO_EXPIRES_DATE', 'Expira At:');
define('TEXT_INFO_STATUS_CHANGE', 'Status Change:');
define('TEXT_IMAGE_NONEXISTENT', 'Sem Imagem');

define('TEXT_INFO_HEADING_DELETE_SPECIALS', 'Excluir Special');
define('TEXT_INFO_DELETE_INTRO', 'Tem certeza que deseja excluir the special products price?');

define('SUCCESS_SPECIALS_PRE_ADD', 'Successful: Pre-Add of Special ... please update the price and dates ...');
define('WARNING_SPECIALS_PRE_ADD_EMPTY', 'Aten&ccedil;&atilde;o: No Produto ID specified ... nada foi adicionado...');
define('WARNING_SPECIALS_PRE_ADD_DUPLICATE', 'Aten&ccedil;&atilde;o: Produto ID already on Special ... nada foi adicionado...');
define('WARNING_SPECIALS_PRE_ADD_BAD_PRODUCTS_ID', 'Aten&ccedil;&atilde;o: Produto ID is invalid ... nada foi adicionado...');
define('TEXT_INFO_HEADING_PRE_ADD_SPECIALS', 'Manually add new Special by Produto ID');
define('TEXT_INFO_PRE_ADD_INTRO', 'On large databases, you may Manually Add a Special by the Produto ID<br /><br />This is best used when the page takes too long to render and trying to select a Produto from the dropdown becomes difficult due to too many Produtos from which to choose.');
define('TEXT_PRE_ADD_PRODUCTS_ID', 'Please enter the Produto ID to be Pre-Added: ');
define('TEXT_INFO_MANUAL', 'Produto ID to be Manually Added as a Special');
?>