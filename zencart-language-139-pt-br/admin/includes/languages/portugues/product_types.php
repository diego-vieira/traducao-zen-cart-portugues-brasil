<?php
//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2004 The zen-cart developers                           |
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
//  $Id: product_types.php 1122 2005-04-05 04:37:58Z drbyte $
//

define('HEADING_TITLE', 'Tipos de Produto');
define('HEADING_TITLE_LAYOUT', 'Página de Informação de Layouts de Tipo de Produto :: ');

define('TABLE_HEADING_PRODUCT_TYPES', 'Tipos de Produto');
define('TABLE_HEADING_PRODUCT_TYPES_Permitir_ADD_TO_CART', 'Add<br />to Cart');
define('TABLE_HEADING_ACTION', 'Ação');
define('TABLE_HEADING_CONFIGURATION_TITLE', 'Title');
define('TABLE_HEADING_CONFIGURATION_VALUE', 'Value');

define('TEXT_HEADING_NEW_PRODUCT_TYPE', 'Novo Tipo de Produto');
define('TEXT_HEADING_EDIT_PRODUCT_TYPE', 'Editar Tipo de Produto');
define('TEXT_HEADING_DELETE_PRODUCT_TYPE', 'Excluir Tipo de Produto');

define('TEXT_PRODUCT_TYPES', 'Tipos de Produto:');
define('TEXT_PRODUCT_TYPES_HANDLER', 'Página Gerenciadora:');
define('TEXT_PRODUCT_TYPES_Permitir_ADD_CART', 'Este Produto pode ser adicionado ao carrinho:');
define('TEXT_DATE_ADDED', 'Adicionado em:');
define('TEXT_LAST_MODIFIED', 'Modificado em:');
define('TEXT_PRODUCTS', 'Produtos:');
define('TEXT_PRODUCTS_IMAGE_DIR', 'Diretório de envio:');
define('TEXT_IMAGE_NONEXISTENT', 'Sem Imagem');
define('TEXT_MASTER_TYPE', 'Este tipo de produto deve ser considerado um subtipo de ');

define('TEXT_NEW_INTRO', 'Por favor, preencha a seguinte informação para o novo fabricante');
define('TEXT_EDIT_INTRO', 'Por favor, faça os ajustes necessários');

define('TEXT_PRODUCT_TYPES_NAME', 'Nome do Tipo de Produto:');
define('TEXT_PRODUCT_TYPES_IMAGE', 'Imagem Padrão para o Tipo de Produto:');
define('TEXT_PRODUCT_TYPES_URL', 'URL do Fabricante:');

define('TEXT_DELETE_INTRO', 'Tem certeza que deseja excluir este tipo de produto?');
define('TEXT_DELETE_IMAGE', 'Excluir imagem padrão do tipo de produto?');
define('TEXT_DELETE_PRODUCTS', 'Excluir produtos deste tipo de produto? (incluindo avaliações de produto, produtos com preço especial, produtos esperados)');
define('TEXT_DELETE_WARNING_PRODUCTS', '<b>ATENÇÃO:</b> Ainda existem %s produtos linkados a este tipo de produto!');

define('ERROR_DIRECTORY_NOT_WRITEABLE', 'Erro: Eu não consegui gravar neste diretório. Por favor, configure as permissões de usuário para: %s');
define('ERROR_DIRECTORY_DOES_NOT_EXIST', 'Erro: O diretório não existe: %s');

define('IMAGE_LAYOUT', 'Layout Settings');
?>