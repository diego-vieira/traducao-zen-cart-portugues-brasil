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
//  $Id: options_name_manager.php 2181 2005-10-20 18:37:16Z ajeh $
//

define('HEADING_TITLE_OPT', 'Opções de Produto');
define('HEADING_TITLE_VAL', 'Valores da Opção');
define('HEADING_TITLE_ATRIB', 'Atributos dos Produtos');

define('TABLE_HEADING_ID', 'ID');
define('TABLE_HEADING_PRODUCT', 'Nome do Produto');
define('TABLE_HEADING_OPT_NAME', 'Nome da Opção');
define('TABLE_HEADING_OPT_VALUE', 'Valor da Opção');
define('TABLE_HEADING_OPT_PRICE', 'Preço');
define('TABLE_HEADING_OPT_PRICE_PREFIX', 'Prefixo');
define('TABLE_HEADING_ACTION', 'Ação');
define('TABLE_HEADING_DOWNLOAD', 'Produtos Baixáveis (Download):');
define('TABLE_TEXT_FILENAME', 'Nome do arquivo:');
define('TABLE_TEXT_MAX_DAYS', 'Dias de expiração:');
define('TABLE_TEXT_MAX_COUNT', 'Número máximo de downloads:');

define('TEXT_WARNING_OF_DELETE', 'Esta opção possui produtos e valores linkados a ela - não é seguro excluí-la.');
define('TEXT_OK_TO_DELETE', 'Esta opção possui produtos linkados a ela - não é seguro excluí-la.<br />Atenção: Todos os Valores de Opções serão deletados para este Nome de Opção.');
define('TEXT_OPTION_ID', 'ID da Opção');
define('TEXT_OPTION_NAME', 'Nome da Opção');
define('TABLE_HEADING_OPT_DISCOUNTED','Descontado');

define('ATTRIBUTE_WARNING_DUPLICATE','Atributo Duplicado - Atributo não adicionado'); // attributes duplicate warning
define('ATTRIBUTE_WARNING_DUPLICATE_UPDATE','Atributado Duplicado Existente - Atributao não alterado'); // attributes duplicate warning
define('ATTRIBUTE_WARNING_INVALID_MATCH','Atributo da Opção e Valor da Opção NÃO são iguais - Atributo não adicionado'); // miss matched option and options value
define('ATTRIBUTE_WARNING_INVALID_MATCH_UPDATE','Atributo da Opção e Valor da Opção NÃO são iguais - Atributo não foi alterado'); // miss matched option and options value
define('ATTRIBUTE_POSSIBLE_OPTIONS_NAME_WARNING_DUPLICATE','Possível Duplicidade de Nome de Opções Adicionado'); // Options Name Duplicate warning
define('ATTRIBUTE_POSSIBLE_OPTIONS_VALUE_WARNING_DUPLICATE','Possível Duplicidade de Valor de Opções Adicionado'); // Options Value Duplicate warning

define('PRODUCTS_ATTRIBUTES_EDITING','EDITANDO'); // title
define('PRODUCTS_ATTRIBUTES_DELETE','EXCLUINDO'); // title
define('PRODUCTS_ATTRIBUTES_ADDING','ADICIONADO NOVOS ATRIBUTOS'); // title
define('TEXT_DOWNLOADS_DISABLED','Valores de Opções: Downloads estão desabilitados');

define('TABLE_TEXT_MAX_DAYS_SHORT', 'Dias:');
define('TABLE_TEXT_MAX_COUNT_SHORT', 'Máx:');

  define('TABLE_HEADING_OPTION_SORT_ORDER','Ordem de Amostragem');
  define('TABLE_HEADING_OPTION_VALUE_SORT_ORDER','Ordem de Amostragem');
  define('TEXT_SORT',' Ordem: ');

  define('TABLE_HEADING_OPT_WEIGHT_PREFIX','Prefixo');
  define('TABLE_HEADING_OPT_WEIGHT','Peso');
  define('TABLE_HEADING_OPT_SORT_ORDER','Ordem de Amostragem');
  define('TABLE_HEADING_OPT_DEFAULT','Padrão');

  define('TABLE_HEADING_YES','Sim');
  define('TABLE_HEADING_NO','Não');

  define('TABLE_HEADING_OPT_TYPE', 'Tipo de Opção'); //CLR 031203 add option type column
  define('TABLE_HEADING_OPTION_VALUE_SIZE','Tamanho');
  define('TABLE_HEADING_OPTION_VALUE_MAX','Máx');
  define('TABLE_HEADING_OPTION_VALUE_ROWS','Linhas');
  define('TABLE_HEADING_OPTION_VALUE_COMMENTS','Comentários');

  define('TEXT_OPTION_VALUE_COMMENTS','Comentários: ');
  define('TEXT_OPTION_VALUE_ROWS', 'Linhas: ');
  define('TEXT_OPTION_VALUE_SIZE','Mostrar Tamanho: ');
  define('TEXT_OPTION_VALUE_MAX','Tamanho Máximo: ');

  define('TEXT_ATTRIBUTES_IMAGE','Imagens dos Atributos:');
  define('TEXT_ATTRIBUTES_IMAGE_DIR','Diretório de Imagens dos Atributos:');

  define('TEXT_ATTRIBUTES_FLAGS','Atributo<br />Flags:');
  define('TEXT_ATTRIBUTES_DISPLAY_ONLY', 'Usado Somente<br />Para Visualização Somente:');
  define('TEXT_ATTRIBUTES_IS_FREE', 'O Atributo é Grátis<br />Quando o Produto é Grátis:');
  define('TEXT_ATTRIBUTES_DEFAULT', 'Atributo Padrão<br />para os Selecionados:');
  define('TEXT_ATTRIBUTE_IS_DISCOUNTED', 'Aplicar os Mesmos Descontosbr />Usados pelo Produto:');
  define('TEXT_ATTRIBUTE_PRICE_BASE_INCLUDED','Incluir no Preço Base<br />Quando Taxado pelo Atributos');

  define('TEXT_PRODUCT_OPTIONS_INFO','<strong>Valores de Opções: Editar Nomes das Opções do Produto para configurações adicionais</strong>');

// updates
define('ERROR_PRODUCTS_OPTIONS_VALUES', 'ATENÇÃO: Nenhum Produto Encontrado ... Nada foi Atualizado');

define('TEXT_SELECT_PRODUCT', ' Selecionar um Produto');
define('TEXT_SELECT_CATEGORY', ' Selecionar uma Categoria');
define('TEXT_SELECT_OPTION', 'Selecionar um Nome de Opção');

// add
define('TEXT_OPTION_VALUE_ADD_ALL', '<br /><strong>Adicionar TODOS os Valores de Opções para TODOS os produtos com o Nome de Opção</strong>');
define('TEXT_INFO_OPTION_VALUE_ADD_ALL', 'Atualizar TODOS os produtos existentes que tem pelo menos UM Valor de Opção em um Nome de Opção');
define('SUCCESS_PRODUCTS_OPTIONS_VALUES', 'Atualizado com Sucesso as Opções ');

define('TEXT_OPTION_VALUE_ADD_PRODUCT', '<br /><strong>Adicionar TODOS os Valores de Opções para UM produto com o Nome de Opção</strong>');
define('TEXT_INFO_OPTION_VALUE_ADD_PRODUCT', 'Atualizar UM produto que tem pelo menos UM Valor de Opção e Adicionar Todas as Outras Opções de Valor em um Nome de Opção');

define('TEXT_OPTION_VALUE_ADD_CATEGORY', '<br /><strong>Adicionar TODOS os Valores de Opções de UMA Categoria de produtos no Nome de Opção</strong>');
define('TEXT_INFO_OPTION_VALUE_ADD_CATEGORY', 'Atualizar UMA Categoria de produtos, quando o produto tiver pelo menos UM Valor de Opção e Adicionar Todos os Valores de Opção no Nome de Opção');

define('TEXT_COMMENT_OPTION_VALUE_ADD_ALL', '<strong>NOTA:</strong> A ordem de amostragem será configurada para a Ordem Padrão do Valor de Opção para estes produtos');

// delete
define('TEXT_OPTION_VALUE_DELETE_ALL', '<br /><strong>Excluir TODOS os Valores de Opção para TODOS os produtos deste Nome de Opção</strong>');
define('TEXT_INFO_OPTION_VALUE_DELETE_ALL', 'Atualizar TODOS os produtos existentes que possuem pelo menos UM Valor de Opção e Excluir TODOS os Valores de Opção em um Nome de Opção');

define('TEXT_OPTION_VALUE_DELETE_PRODUCT', '<br /><strong>Excluir TODOS os Valores de Opção para UM produto do Nome de Opção</strong>');
define('TEXT_INFO_OPTION_VALUE_DELETE_PRODUCT', 'Atualizar UM produto que tenha pelo menos UM Valor de Opção e Excluir TODOS os Valores de Opção em um Nome de Opção');

define('TEXT_OPTION_VALUE_DELETE_CATEGORY', '<br /><strong>Excluir TODOS os Valores de Opção para UMA Categoria de produtos do Nome de Opção</strong>');
define('TEXT_INFO_OPTION_VALUE_DELETE_CATEGORY', 'Atualizar UMA Categoria de produtos, quando o produto possuir pelo menos UM Valor de Opção e Excluir TODOS os Valores de Opção em um Nome de Opção');

define('TEXT_COMMENT_OPTION_VALUE_DELETE_ALL', '<strong>NOTA:</strong> Todos os Nomes de Opção serão excluídos para o(s) produto(s) selecionado(s). Isto não irá excluir as configurações de Valor de Opção.');

define('TEXT_OPTION_VALUE_COPY_ALL', '<strong>Copiar TODOS Valores de Opção para outro Nome de Opção</strong>');
define('TEXT_INFO_OPTION_VALUE_COPY_ALL', 'Todos os Valores de Opção serão copiados de um Nome de Opção para outro Nome de Opção');
define('TEXT_SELECT_OPTION_FROM', 'Copiar do Nome de Opção: ');
define('TEXT_SELECT_OPTION_TO', 'Copiar Todos os Valores de Opção para o Nome de Opção: ');
define('SUCCESS_OPTION_VALUES_COPIED', 'Copiado com sucesso! ');
define('ERROR_OPTION_VALUES_COPIED', 'Erro - Não é possível copiar os Valores de Opção para o mesmo Nome de Opção! ');
define('ERROR_OPTION_VALUES_NONE', 'Erro - Copiar do Nome de Opção possui 0 Valores Definidos. Nada foi copiado! ');
define('TEXT_WARNING_BACKUP', 'Atenção: Sempre faça backups do seu banco de dados antes de mudanças globais');

define('TEXT_OPTION_ATTRIBUTE_IMAGES_PER_ROW', 'Imagens de Atributos por Linha: ');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE', 'Estilo do Atributo Radio/Checkbox: ');
define('TEXT_OPTION_ATTIBUTE_MAX_LENGTH', '<strong>NOTA: Linhas, Tamanho de Amostragem e Tamanho Máximo são para Atributos de Texto Somente:</strong><br />');
define('TEXT_OPTION_IMAGE_STYLE', '<strong>Estilos de Imagem:</strong>');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_0', '0= Imagens Depois do Nome de Opção');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_1', '1= Elemento, Imagem e Valor da Opção');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_2', '2= Elemento, Imagem e Nome de Opção Abaixo');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_3', '3= Nome de Opção Abaixo do Elemento e Imagem');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_4', '4= Elemento Abaixo da Imagem e Nome de Opção');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_5', '5= Elemento Acima da Imagem e Nome de Opção');
?>