<?php
/**
 * @package admin
 * @copyright Copyright 2003-2010 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * $Id: featured.php 18695 2011-05-04 05:24:19Z drbyte $
 */

define('HEADING_TITLE', 'Produtos em Destaque');

define('TABLE_HEADING_PRODUCTS', 'Produtos');
define('TABLE_HEADING_PRODUCTS_MODEL','Modelo');
define('TABLE_HEADING_PRODUCTS_PRICE', 'Pre&ccedil;o/Especial/Promo&ccedil;&atilde;o');
define('TABLE_HEADING_PRODUCTS_PERCENTAGE','Porcentagem');
define('TABLE_HEADING_AVAILABLE_DATE', 'Dispon&iacute;vel');
define('TABLE_HEADING_EXPIRES_DATE','Expira');
define('TABLE_HEADING_STATUS', 'Estado');
define('TABLE_HEADING_ACTION', 'A&ccedil;&atilde;o');

define('TEXT_FEATURED_PRODUCT', 'Produto:');
define('TEXT_FEATURED_EXPIRES_DATE', 'Data de Expira&ccedil;&atilde;o:');
define('TEXT_FEATURED_AVAILABLE_DATE', 'Data de Disponibilidade:');

define('TEXT_INFO_DATE_ADDED', 'Adicionado em:');
define('TEXT_INFO_LAST_MODIFIED', 'Modificado em:');
define('TEXT_INFO_NEW_PRICE', 'Novo Pre&ccedil;o:');
define('TEXT_INFO_ORIGINAL_PRICE', 'Pre&ccedil;o Original:');
define('TEXT_INFO_PERCENTAGE', 'Porcentagem:');
define('TEXT_INFO_AVAILABLE_DATE', 'Dispon&iacute;vel Em:');
define('TEXT_INFO_EXPIRES_DATE', 'Expira Em:');
define('TEXT_INFO_STATUS_CHANGE', 'Alterar Estado:');
define('TEXT_IMAGE_NONEXISTENT', 'Sem Imagem');

define('TEXT_INFO_HEADING_DELETE_FEATURED', 'Excluir Destaque');
define('TEXT_INFO_DELETE_INTRO', 'Tem certeza que deseja excluir o destaque do produto?');

define('SUCCESS_FEATURED_PRE_ADD', 'Sucesso: Pr&eacute;-Adicionado aos Destaques... por favor, atualize as datas...');
define('WARNING_FEATURED_PRE_ADD_EMPTY', 'Aten&ccedil;&atilde;o: Nenhuma ID de Produto especificada... nada foi adicionado...');
define('WARNING_FEATURED_PRE_ADD_DUPLICATE', 'Aten&ccedil;&atilde;o: A ID do Produto j&aacute; existe no Especial... nada foi adicionado...');
define('WARNING_FEATURED_PRE_ADD_BAD_PRODUCTS_ID', 'Aten&ccedil;&atilde;o: A ID do Produto &eacute; inv&aacute;lida... nada foi adicionado...');
define('TEXT_INFO_HEADING_PRE_ADD_FEATURED', 'Manualmente adicionar um Destaque para o Produto de ID');
define('TEXT_INFO_PRE_ADD_INTRO', 'Em bancos de dados grandes, voc&ecirc; pode Manualmente Adicionar um Destauqe por ID<br /><br />Isto &eacute; melhor usado quando uma p&aacute;gina demora muito a carregar e tentar selecionar um produto da Lista se torna muito dif&iacute;cil devido a grande quantidade de Produtos.');
define('TEXT_PRE_ADD_PRODUCTS_ID', 'Por favor, digite a ID do Produto para que seja Pr&eacute;-Adicionado: ');
define('TEXT_INFO_MANUAL', 'ID do Produto para ser Manualmente Adicionado como um Destaque');
?>