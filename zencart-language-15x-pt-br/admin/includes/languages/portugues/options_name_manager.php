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
// $Id: options_name_manager.php 2181 2005-10-20 18:37:16Z ajeh $
//

define('HEADING_TITLE_OPT', 'Op&ccedil;&otilde;es de Produto');
define('HEADING_TITLE_VAL', 'Valores da Op&ccedil;&atilde;o');
define('HEADING_TITLE_ATRIB', 'Atributos dos Produtos');

define('TABLE_HEADING_ID', 'ID');
define('TABLE_HEADING_PRODUCT', 'Nome do Produto');
define('TABLE_HEADING_OPT_NAME', 'Nome da Op&ccedil;&atilde;o');
define('TABLE_HEADING_OPT_VALUE', 'Valor da Op&ccedil;&atilde;o');
define('TABLE_HEADING_OPT_PRICE', 'Pre&ccedil;o');
define('TABLE_HEADING_OPT_PRICE_PREFIX', 'Prefixo');
define('TABLE_HEADING_ACTION', 'A&ccedil;&atilde;o');
define('TABLE_HEADING_DOWNLOAD', 'Produtos Baix&aacute;veis (Download):');
define('TABLE_TEXT_FILENAME', 'Nome do arquivo:');
define('TABLE_TEXT_MAX_DAYS', 'Dias de expira&ccedil;&atilde;o:');
define('TABLE_TEXT_MAX_COUNT', 'N&uacute;mero m&aacute;ximo de downloads:');

define('TEXT_WARNING_OF_DELETE', 'Esta op&ccedil;&atilde;o possui produtos e valores linkados a ela - n&atilde;o &eacute; seguro exclu&iacute;-la.');
define('TEXT_OK_TO_DELETE', 'Esta op&ccedil;&atilde;o possui produtos linkados a ela - n&atilde;o &eacute; seguro exclu&iacute;-la.<br />Aten&ccedil;&atilde;o: Todos os Valores de Op&ccedil;&otilde;es ser&atilde;o deletados para este Nome de Op&ccedil;&atilde;o.');
define('TEXT_OPTION_ID', 'ID da Op&ccedil;&atilde;o');
define('TEXT_OPTION_NAME', 'Nome da Op&ccedil;&atilde;o');
define('TABLE_HEADING_OPT_DISCOUNTED','Descontado');

define('ATTRIBUTE_WARNING_DUPLICATE','Atributo Duplicado - Atributo n&atilde;o adicionado'); // attributes duplicate warning
define('ATTRIBUTE_WARNING_DUPLICATE_UPDATE','Atributado Duplicado Existente - Atributao n&atilde;o alterado'); // attributes duplicate warning
define('ATTRIBUTE_WARNING_INVALID_MATCH','Atributo da Op&ccedil;&atilde;o e Valor da Op&ccedil;&atilde;o N&Atilde;O s&atilde;o iguais - Atributo n&atilde;o adicionado'); // miss matched option and options value
define('ATTRIBUTE_WARNING_INVALID_MATCH_UPDATE','Atributo da Op&ccedil;&atilde;o e Valor da Op&ccedil;&atilde;o N&Atilde;O s&atilde;o iguais - Atributo n&atilde;o foi alterado'); // miss matched option and options value
define('ATTRIBUTE_POSSIBLE_OPTIONS_NAME_WARNING_DUPLICATE','Poss&iacute;vel Duplicidade de Nome de Op&ccedil;&otilde;es Adicionado'); // Options Name Duplicate warning
define('ATTRIBUTE_POSSIBLE_OPTIONS_VALUE_WARNING_DUPLICATE','Poss&iacute;vel Duplicidade de Valor de Op&ccedil;&otilde;es Adicionado'); // Options Value Duplicate warning

define('PRODUCTS_ATTRIBUTES_EDITING','EDITANDO'); // title
define('PRODUCTS_ATTRIBUTES_DELETE','EXCLUINDO'); // title
define('PRODUCTS_ATTRIBUTES_ADDING','ADICIONADO NOVOS ATRIBUTOS'); // title
define('TEXT_DOWNLOADS_DISABLED','Valores de Op&ccedil;&otilde;es: Downloads est&atilde;o desabilitados');

define('TABLE_TEXT_MAX_DAYS_SHORT', 'Dias:');
define('TABLE_TEXT_MAX_COUNT_SHORT', 'M&aacute;x:');

 define('TABLE_HEADING_OPTION_SORT_ORDER','Ordem de Amostragem');
 define('TABLE_HEADING_OPTION_VALUE_SORT_ORDER','Ordem de Amostragem');
 define('TEXT_SORT',' Ordem: ');

 define('TABLE_HEADING_OPT_WEIGHT_PREFIX','Prefixo');
 define('TABLE_HEADING_OPT_WEIGHT','Peso');
 define('TABLE_HEADING_OPT_SORT_ORDER','Ordem de Amostragem');
 define('TABLE_HEADING_OPT_DEFAULT','Padr&atilde;o');

 define('TABLE_HEADING_YES','Sim');
 define('TABLE_HEADING_NO','N&atilde;o');

 define('TABLE_HEADING_OPT_TYPE', 'Tipo de Op&ccedil;&atilde;o'); //CLR 031203 add option type column
 define('TABLE_HEADING_OPTION_VALUE_SIZE','Tamanho');
 define('TABLE_HEADING_OPTION_VALUE_MAX','M&aacute;x');
 define('TABLE_HEADING_OPTION_VALUE_ROWS','Linhas');
 define('TABLE_HEADING_OPTION_VALUE_COMMENTS','Coment&aacute;rios');

 define('TEXT_OPTION_VALUE_COMMENTS','Coment&aacute;rios: ');
 define('TEXT_OPTION_VALUE_ROWS', 'Linhas: ');
 define('TEXT_OPTION_VALUE_SIZE','Mostrar Tamanho: ');
 define('TEXT_OPTION_VALUE_MAX','Tamanho M&aacute;ximo: ');

 define('TEXT_ATTRIBUTES_IMAGE','Imagens dos Atributos:');
 define('TEXT_ATTRIBUTES_IMAGE_DIR','Diret&oacute;rio de Imagens dos Atributos:');

 define('TEXT_ATTRIBUTES_FLAGS','Atributo<br />Flags:');
 define('TEXT_ATTRIBUTES_DISPLAY_ONLY', 'Usado Somente<br />Para Visualiza&ccedil;&atilde;o Somente:');
 define('TEXT_ATTRIBUTES_IS_FREE', 'O Atributo &eacute; Gr&aacute;tis<br />Quando o Produto &eacute; Gr&aacute;tis:');
 define('TEXT_ATTRIBUTES_DEFAULT', 'Atributo Padr&atilde;o<br />para os Selecionados:');
 define('TEXT_ATTRIBUTE_IS_DISCOUNTED', 'Aplicar os Mesmos Descontosbr />Usados pelo Produto:');
 define('TEXT_ATTRIBUTE_PRICE_BASE_INCLUDED','Incluir no Pre&ccedil;o Base<br />Quando Taxado pelo Atributos');

 define('TEXT_PRODUCT_OPTIONS_INFO','<strong>Valores de Op&ccedil;&otilde;es: Editar Nomes das Op&ccedil;&otilde;es do Produto para configura&ccedil;&otilde;es adicionais</strong>');

// updates
define('ERROR_PRODUCTS_OPTIONS_VALUES', 'ATEN&Ccedil;&Atilde;O: Nenhum Produto Encontrado ... Nada foi Atualizado');

define('TEXT_SELECT_PRODUCT', ' Selecionar um Produto');
define('TEXT_SELECT_CATEGORY', ' Selecionar uma Categoria');
define('TEXT_SELECT_OPTION', 'Selecionar um Nome de Op&ccedil;&atilde;o');

// add
define('TEXT_OPTION_VALUE_ADD_ALL', '<br /><strong>Adicionar TODOS os Valores de Op&ccedil;&otilde;es para TODOS os produtos com o Nome de Op&ccedil;&atilde;o</strong>');
define('TEXT_INFO_OPTION_VALUE_ADD_ALL', 'Atualizar TODOS os produtos existentes que tem pelo menos UM Valor de Op&ccedil;&atilde;o em um Nome de Op&ccedil;&atilde;o');
define('SUCCESS_PRODUCTS_OPTIONS_VALUES', 'Atualizado com Sucesso as Op&ccedil;&otilde;es ');

define('TEXT_OPTION_VALUE_ADD_PRODUCT', '<br /><strong>Adicionar TODOS os Valores de Op&ccedil;&otilde;es para UM produto com o Nome de Op&ccedil;&atilde;o</strong>');
define('TEXT_INFO_OPTION_VALUE_ADD_PRODUCT', 'Atualizar UM produto que tem pelo menos UM Valor de Op&ccedil;&atilde;o e Adicionar Todas as Outras Op&ccedil;&otilde;es de Valor em um Nome de Op&ccedil;&atilde;o');

define('TEXT_OPTION_VALUE_ADD_CATEGORY', '<br /><strong>Adicionar TODOS os Valores de Op&ccedil;&otilde;es de UMA Categoria de produtos no Nome de Op&ccedil;&atilde;o</strong>');
define('TEXT_INFO_OPTION_VALUE_ADD_CATEGORY', 'Atualizar UMA Categoria de produtos, quando o produto tiver pelo menos UM Valor de Op&ccedil;&atilde;o e Adicionar Todos os Valores de Op&ccedil;&atilde;o no Nome de Op&ccedil;&atilde;o');

define('TEXT_COMMENT_OPTION_VALUE_ADD_ALL', '<strong>NOTA:</strong> A ordem de amostragem ser&aacute; configurada para a Ordem Padr&atilde;o do Valor de Op&ccedil;&atilde;o para estes produtos');

// delete
define('TEXT_OPTION_VALUE_DELETE_ALL', '<br /><strong>Excluir TODOS os Valores de Op&ccedil;&atilde;o para TODOS os produtos deste Nome de Op&ccedil;&atilde;o</strong>');
define('TEXT_INFO_OPTION_VALUE_DELETE_ALL', 'Atualizar TODOS os produtos existentes que possuem pelo menos UM Valor de Op&ccedil;&atilde;o e Excluir TODOS os Valores de Op&ccedil;&atilde;o em um Nome de Op&ccedil;&atilde;o');

define('TEXT_OPTION_VALUE_DELETE_PRODUCT', '<br /><strong>Excluir TODOS os Valores de Op&ccedil;&atilde;o para UM produto do Nome de Op&ccedil;&atilde;o</strong>');
define('TEXT_INFO_OPTION_VALUE_DELETE_PRODUCT', 'Atualizar UM produto que tenha pelo menos UM Valor de Op&ccedil;&atilde;o e Excluir TODOS os Valores de Op&ccedil;&atilde;o em um Nome de Op&ccedil;&atilde;o');

define('TEXT_OPTION_VALUE_DELETE_CATEGORY', '<br /><strong>Excluir TODOS os Valores de Op&ccedil;&atilde;o para UMA Categoria de produtos do Nome de Op&ccedil;&atilde;o</strong>');
define('TEXT_INFO_OPTION_VALUE_DELETE_CATEGORY', 'Atualizar UMA Categoria de produtos, quando o produto possuir pelo menos UM Valor de Op&ccedil;&atilde;o e Excluir TODOS os Valores de Op&ccedil;&atilde;o em um Nome de Op&ccedil;&atilde;o');

define('TEXT_COMMENT_OPTION_VALUE_DELETE_ALL', '<strong>NOTA:</strong> Todos os Nomes de Op&ccedil;&atilde;o ser&atilde;o exclu&iacute;dos para o(s) produto(s) selecionado(s). Isto n&atilde;o ir&aacute; excluir as configura&ccedil;&otilde;es de Valor de Op&ccedil;&atilde;o.');

define('TEXT_OPTION_VALUE_COPY_ALL', '<strong>Copiar TODOS Valores de Op&ccedil;&atilde;o para outro Nome de Op&ccedil;&atilde;o</strong>');
define('TEXT_INFO_OPTION_VALUE_COPY_ALL', 'Todos os Valores de Op&ccedil;&atilde;o ser&atilde;o copiados de um Nome de Op&ccedil;&atilde;o para outro Nome de Op&ccedil;&atilde;o');
define('TEXT_SELECT_OPTION_FROM', 'Copiar do Nome de Op&ccedil;&atilde;o: ');
define('TEXT_SELECT_OPTION_TO', 'Copiar Todos os Valores de Op&ccedil;&atilde;o para o Nome de Op&ccedil;&atilde;o: ');
define('SUCCESS_OPTION_VALUES_COPIED', 'Copiado com sucesso! ');
define('ERROR_OPTION_VALUES_COPIED', 'Erro - N&atilde;o &eacute; poss&iacute;vel copiar os Valores de Op&ccedil;&atilde;o para o mesmo Nome de Op&ccedil;&atilde;o! ');
define('ERROR_OPTION_VALUES_NONE', 'Erro - Copiar do Nome de Op&ccedil;&atilde;o possui 0 Valores Definidos. Nada foi copiado! ');
define('TEXT_WARNING_BACKUP', 'Aten&ccedil;&atilde;o: Sempre fa&ccedil;a backups do seu banco de dados antes de mudan&ccedil;as globais');

define('TEXT_OPTION_ATTRIBUTE_IMAGES_PER_ROW', 'Imagens de Atributos por Linha: ');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE', 'Estilo do Atributo Radio/Checkbox: ');
define('TEXT_OPTION_ATTIBUTE_MAX_LENGTH', '<strong>NOTA: Linhas, Tamanho de Amostragem e Tamanho M&aacute;ximo s&atilde;o para Atributos de Texto Somente:</strong><br />');
define('TEXT_OPTION_IMAGE_STYLE', '<strong>Estilos de Imagem:</strong>');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_0', '0= Imagens Depois do Nome de Op&ccedil;&atilde;o');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_1', '1= Elemento, Imagem e Valor da Op&ccedil;&atilde;o');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_2', '2= Elemento, Imagem e Nome de Op&ccedil;&atilde;o Abaixo');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_3', '3= Nome de Op&ccedil;&atilde;o Abaixo do Elemento e Imagem');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_4', '4= Elemento Abaixo da Imagem e Nome de Op&ccedil;&atilde;o');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_5', '5= Elemento Acima da Imagem e Nome de Op&ccedil;&atilde;o');
?>