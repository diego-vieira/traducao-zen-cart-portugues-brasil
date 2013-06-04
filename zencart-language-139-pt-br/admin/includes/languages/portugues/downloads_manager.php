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
//  $Id: downloads_manager.php 1105 2005-04-04 22:05:35Z birdbrain $
//

define('HEADING_TITLE','Gerenciador de Downloads');
define('TABLE_HEADING_ATTRIBUTES_ID', 'ID do Atributo');
define('TABLE_HEADING_PRODUCTS_ID', 'ID do Produto');
define('TABLE_HEADING_PRODUCT', 'Nome do Produto');
define('TABLE_HEADING_MODEL', 'Modelo');
define('TABLE_HEADING_OPT_NAME', 'Nome da Opção');
define('TABLE_HEADING_OPT_VALUE', 'Nome do Valor da Opção');
define('TABLE_TEXT_FILENAME', 'Nome do Arquivo');
define('TABLE_TEXT_MAX_DAYS', 'Dias');
define('TABLE_TEXT_MAX_COUNT', 'Contagem');
define('TABLE_HEADING_ACTION', 'Ação');

define('TABLE_HEADING_OPT_PRICE', 'Preço');
define('TABLE_HEADING_OPT_PRICE_PREFIX', 'Prefíxo');

define('TEXT_PRODUCTS_NAME', 'Produto: ');
define('TEXT_PRODUCTS_MODEL', 'Modelo: ');

define('TEXT_INFO_HEADING_EDIT_PRODUCTS_DOWNLOAD', 'EDITANDO INFORMAÇÃO DE DOWNLOAD');
define('TEXT_INFO_HEADING_DELETE_PRODUCTS_DOWNLOAD', 'CONFIRMAR EXCLUSÃO DE DOWNLOAD');
define('TEXT_INFO_EDIT_INTRO', 'Editar a Informação do Download:');
define('TEXT_DELETE_INTRO', 'Os seguintes nome de aruqivos serão excluídos do banco de dados. Isto não irá excluir o arquivo no servidor:');

define('TEXT_INFO_FILENAME', 'Nome do Arquivo: ');
define('TEXT_INFO_MAX_DAYS', 'Máximo de Dias: ');
define('TEXT_INFO_MAX_COUNT', 'Máximo de Downloads: ');

define('TEXT_INFO_FILENAME_MISSING','&nbsp;Nome de arquivo faltando');
define('TEXT_INFO_FILENAME_GOOD','&nbsp;Nome de arquivo válido');
?>