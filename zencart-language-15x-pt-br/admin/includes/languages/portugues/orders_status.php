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
// $Id: orders_status.php 1105 2005-04-04 22:05:35Z birdbrain $
//

define('HEADING_TITLE', 'Estado das Vendas');

define('TABLE_HEADING_ORDERS_STATUS', 'Estado das Vendas');
define('TABLE_HEADING_ACTION', 'A&ccedil;&atilde;o');

define('TEXT_INFO_EDIT_INTRO', 'Por favor, fa&ccedil;a os ajustes necess&aacute;rios');
define('TEXT_INFO_ORDERS_STATUS_NAME', 'Estado das Vendas:');
define('TEXT_INFO_INSERT_INTRO', 'Por favor, digite os dados do novo estado de vendas');
define('TEXT_INFO_DELETE_INTRO', 'Tem certeza que deseja excluir este estado de vendas?');
define('TEXT_INFO_HEADING_NEW_ORDERS_STATUS', 'Novo Estado de Vendas');
define('TEXT_INFO_HEADING_EDIT_ORDERS_STATUS', 'Editar Estado de Vendas');
define('TEXT_INFO_HEADING_DELETE_ORDERS_STATUS', 'Excluir Estado de Vendas');

define('ERROR_REMOVE_DEFAULT_ORDER_STATUS', 'Erro: O estado de vendas padr&atilde;o n&atilde;o pode ser exclu&iacute;do. Por favor, configure outro estado de venda para ser o padr&atilde;o e tente novamente.');
define('ERROR_STATUS_USED_IN_ORDERS', 'Erro: Este estado de venda est&aacute; atualmente sendo usado nas vendas.');
define('ERROR_STATUS_USED_IN_HISTORY', 'Erro: Este estado de venda est&aacute; atualmente sendo usado no estado do hist&oacute;rico das vendas.');
?>