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
// $Id: manufacturers.php 4808 2006-10-22 18:48:53Z ajeh $
//

define('HEADING_TITLE', 'Fabricantes');

define('TABLE_HEADING_MANUFACTURERS', 'Fabricantes');
define('TABLE_HEADING_ACTION', 'A&ccedil;&atilde;o');

define('TEXT_HEADING_NEW_MANUFACTURER', 'Novo Fabricante');
define('TEXT_HEADING_EDIT_MANUFACTURER', 'Editar Fabricante');
define('TEXT_HEADING_DELETE_MANUFACTURER', 'Excluir Fabricante');

define('TEXT_MANUFACTURERS', 'Fabricantes:');
define('TEXT_DATE_ADDED', 'Adicionado em:');
define('TEXT_LAST_MODIFIED', '&Uacute;ltima Modifica&ccedil;&atilde;o:');
define('TEXT_PRODUCTS', 'Produtos:');
define('TEXT_PRODUCTS_IMAGE_DIR', 'Diret&oacute;rio de envio:');
define('TEXT_IMAGE_NONEXISTENT', 'NENHUMA IMAGEM');
define('TEXT_MANUFACTURERS_IMAGE_MANUAL', '<strong>Ou, selecione uma imagem do servidor, nome do arquivo:</strong>');

define('TEXT_NEW_INTRO', 'Por favor, preencha as informa&ccedil;&otilde;es do novo fabricante');
define('TEXT_EDIT_INTRO', 'Por favor, fa&ccedil;a os ajustes necess&aacute;rios');

define('TEXT_MANUFACTURERS_NAME', 'Nome do Fabricante:');
define('TEXT_MANUFACTURERS_IMAGE', 'Imagem do Fabricante:');
define('TEXT_MANUFACTURERS_URL', 'URL do Fabricante:');

define('TEXT_DELETE_INTRO', 'Tem certeza que deseja excluir este fabricante?');
define('TEXT_DELETE_IMAGE', 'Excluir a imagem deste fabricante?');
define('TEXT_DELETE_PRODUCTS', 'Excluir os produtos deste fabricante? (incluindo avalia&ccedil;&otilde;es de produtos, produtos no cadastro de pre&ccedil;os especiais, produtos futuros)');
define('TEXT_DELETE_WARNING_PRODUCTS', '<b>ATEN&Ccedil;&Atilde;O:</b> Ainda existe(m) %s produto(s) ligado(s) a este fabricante!');

define('ERROR_DIRECTORY_NOT_WRITEABLE', 'Erro: N&atilde;o consegui escrever neste diret&oacute;rio. Por favor, configure as permiss&otilde;es corretas para: %s');
define('ERROR_DIRECTORY_DOES_NOT_EXIST', 'Erro: O diret&oacute;rio n&atilde;o existe: %s');
?>