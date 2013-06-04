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
//  $Id: featured.php 4533 2006-09-17 17:21:10Z ajeh $
//

define('HEADING_TITLE', 'Produtos em Destaque');

define('TABLE_HEADING_PRODUCTS', 'Produtos');
define('TABLE_HEADING_PRODUCTS_MODEL','Modelo');
define('TABLE_HEADING_PRODUCTS_PRICE', 'Pre�o/Especial/Promo��o');
define('TABLE_HEADING_PRODUCTS_PERCENTAGE','Porcentagem');
define('TABLE_HEADING_AVAILABLE_DATE', 'Dispon�vel');
define('TABLE_HEADING_EXPIRES_DATE','Expira');
define('TABLE_HEADING_STATUS', 'Estado');
define('TABLE_HEADING_ACTION', 'A��o');

define('TEXT_FEATURED_PRODUCT', 'Produto:');
define('TEXT_FEATURED_EXPIRES_DATE', 'Data de Expira��o:');
define('TEXT_FEATURED_AVAILABLE_DATE', 'Data de Disponibilidade:');

define('TEXT_INFO_DATE_ADDED', 'Adicionado em:');
define('TEXT_INFO_LAST_MODIFIED', 'Modificado em:');
define('TEXT_INFO_NEW_PRICE', 'Novo Pre�o:');
define('TEXT_INFO_ORIGINAL_PRICE', 'Pre�o Original:');
define('TEXT_INFO_PERCENTAGE', 'Porcentagem:');
define('TEXT_INFO_AVAILABLE_DATE', 'Dispon�vel Em:');
define('TEXT_INFO_EXPIRES_DATE', 'Expira Em:');
define('TEXT_INFO_STATUS_CHANGE', 'Alterar Estado:');
define('TEXT_IMAGE_NONEXISTENT', 'Sem Imagem');

define('TEXT_INFO_HEADING_DELETE_FEATURED', 'Excluir Destaque');
define('TEXT_INFO_DELETE_INTRO', 'Tem certeza que deseja excluir o destaque do produto?');

define('SUCCESS_FEATURED_PRE_ADD', 'Sucesso: Pr�-Adicionado aos Destaques... por favor, atualize as datas...');
define('WARNING_FEATURED_PRE_ADD_EMPTY', 'Aten��o: Nenhuma ID de Produto especificada... nada foi adicionado...');
define('WARNING_FEATURED_PRE_ADD_DUPLICATE', 'Aten��o: A ID do Produto j� existe no Especial... nada foi adicionado...');
define('WARNING_FEATURED_PRE_ADD_BAD_PRODUCTS_ID', 'Aten��o: A ID do Produto � inv�lida... nada foi adicionado...');
define('TEXT_INFO_HEADING_PRE_ADD_FEATURED', 'Manualmente adicionar um Destaque para o Produto de ID');
define('TEXT_INFO_PRE_ADD_INTRO', 'Em bancos de dados grandes, voc� pode Manualmente Adicionar um Destauqe por ID<br /><br />Isto � melhor usado quando uma p�gina demora muito a carregar e tentar selecionar um produto da Lista se torna muito dif�cil devido a grande quantidade de Produtos.');
define('TEXT_PRE_ADD_PRODUCTS_ID', 'Por favor, digite a ID do Produto para que seja Pr�-Adicionado: ');
define('TEXT_INFO_MANUAL', 'ID do Produto para ser Manualmente Adicionado como um Destaque');
?>