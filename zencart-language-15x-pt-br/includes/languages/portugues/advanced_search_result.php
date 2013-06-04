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
// $Id: advanced_search_result.php 1969 2005-09-13 06:57:21Z drbyte $
//

define('NAVBAR_TITLE_1', 'Pesquisa Avan&ccedil;ada');
define('NAVBAR_TITLE_2', 'Resultados da Pesquisa');

//define('HEADING_TITLE_1', 'Advanced Search');
define('HEADING_TITLE', 'Pesquisa Avan&ccedil;ada');

define('HEADING_SEARCH_CRITERIA', 'Crit&eacute;rios da Pesquisa');

define('TEXT_SEARCH_IN_DESCRIPTION', 'Procurar nas Descri&ccedil;&otilde;es dos Produtos');
define('ENTRY_CATEGORIES', 'Categorias:');
define('ENTRY_INCLUDE_SUBCATEGORIES', 'Incluir Sub-categorias');
define('ENTRY_MANUFACTURERS', 'Designers:');
define('ENTRY_PRICE_FROM', 'Pre&ccedil;o m&iacute;nimo:');
define('ENTRY_PRICE_TO', 'Pre&ccedil;o m&aacute;ximo:');
define('ENTRY_DATE_FROM', 'Data de:');
define('ENTRY_DATE_TO', 'Data at&eacute;:');

define('TEXT_SEARCH_HELP_LINK', 'Ajuda da Pesquisa [?]');

define('TEXT_ALL_CATEGORIES', 'Todas as Categorias');
define('TEXT_ALL_MANUFACTURERS', 'Todos os Designers');

define('HEADING_SEARCH_HELP', 'Ajuda da Pesquisa');
define('TEXT_SEARCH_HELP', 'Informe as palavras-chave separadas por AND e/ou OR.<br /><br />Por exemplo, <u>Microsoft AND mouse</u>.');
define('TEXT_CLOSE_WINDOW', 'Fechar Janela [x]');

define('TABLE_HEADING_IMAGE', '');
define('TABLE_HEADING_MODEL', 'Modelo');
define('TABLE_HEADING_PRODUCTS', 'Nome do Produto');
define('TABLE_HEADING_MANUFACTURER', 'Nome do Produto');
define('TABLE_HEADING_QUANTITY', 'Quantidade');
define('TABLE_HEADING_PRICE', 'Pre&ccedil;o');
define('TABLE_HEADING_WEIGHT', 'Peso');
define('TABLE_HEADING_BUY_NOW', 'Comprar Agora');

define('TEXT_NO_PRODUCTS', '<strong>Nenhum produto foi encontrado com os crit&eacute;rio escolhidos por voc&ecirc;.</strong>');

define('ERROR_AT_LEAST_ONE_INPUT', '&Eacute; necess&aacute;rio informar ao menos um campo para efetuar a busca.');
define('ERROR_INVALID_FROM_DATE', 'Data inicial inv&aacute;lida.');
define('ERROR_INVALID_TO_DATE', 'Data final inv&aacute;lida.');
define('ERROR_TO_DATE_LESS_THAN_FROM_DATE', 'A data final deve ser maior ou igual &agrave; data inicial.');
define('ERROR_PRICE_FROM_MUST_BE_NUM', 'Pre&ccedil;o inicial inv&aacute;lido.');
define('ERROR_PRICE_TO_MUST_BE_NUM', 'Pre&ccedil;o final inv&aacute;lido.');
define('ERROR_PRICE_TO_LESS_THAN_PRICE_FROM', 'O pre&ccedil;o final deve ser maior ou igual ao pre&ccedil;o inicial.');
define('ERROR_INVALID_KEYWORDS', 'Palavras Inv&aacute;lidas.');
?>