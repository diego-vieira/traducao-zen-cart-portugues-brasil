<?php
/**
 * @package admin
 * @copyright Copyright 2003-2010 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: product.php 15883 2010-04-11 16:41:26Z wilt $
 */

define('HEADING_TITLE', 'Categorias / Produtos');
define('HEADING_TITLE_GOTO', 'Ir Para:');

define('TABLE_HEADING_ID', 'ID');
define('TABLE_HEADING_CATEGORIES_PRODUCTS', 'Categorias / Produtos');
define('TABLE_HEADING_CATEGORIES_SORT_ORDER', 'Ordem');

define('TABLE_HEADING_PRICE','Pre�o/Especial/Promo��o');
define('TABLE_HEADING_QUANTITY','Quantidade');

define('TABLE_HEADING_ACTION', 'A��o');
define('TABLE_HEADING_STATUS', 'Estado');

define('TEXT_CATEGORIES', 'Categorias:');
define('TEXT_SUBCATEGORIES', 'SubCategorias:');
define('TEXT_PRODUCTS', 'Produtos:');
define('TEXT_PRODUCTS_PRICE_INFO', 'Pre�o:');
define('TEXT_PRODUCTS_TAX_CLASS', 'Classe de Imposto:');
define('TEXT_PRODUCTS_AVERAGE_RATING', 'Avalia��o M�dia:');
define('TEXT_PRODUCTS_QUANTITY_INFO', 'Quantidade:');
define('TEXT_DATE_ADDED', 'Adicionado em:');
define('TEXT_DATE_AVAILABLE', 'Data de Disponibilidade:');
define('TEXT_LAST_MODIFIED', '�ltima Modifica��o:');
define('TEXT_IMAGE_NONEXISTENT', 'IMAGEM INEXISTENTE');
define('TEXT_NO_CHILD_CATEGORIES_OR_PRODUCTS', 'Por favor, insira uma nova cateogira ou produto neste n�vel.');
define('TEXT_PRODUCT_MORE_INFORMATION', 'Para maiores informa��es, por favor, visite a <a href="http://%s" target="blank">p�gina destes produtos</a>.');
define('TEXT_PRODUCT_DATE_ADDED', 'Este produto foi adicionado ao nosso cadastro em %s.');
define('TEXT_PRODUCT_DATE_AVAILABLE', 'Este produto estar� dispon�vel em %s.');

define('TEXT_EDIT_INTRO', 'Por favor, fa�a os ajustes necess�rios');
define('TEXT_EDIT_CATEGORIES_ID', 'ID da Categoria:');
define('TEXT_EDIT_CATEGORIES_NAME', 'Nome da Categoria:');
define('TEXT_EDIT_CATEGORIES_IMAGE', 'Imagem da Categoria:');
define('TEXT_EDIT_SORT_ORDER', 'Ordem de Amostragem:');

define('TEXT_INFO_COPY_TO_INTRO', 'Por favor, escolha uma nova categoria para a qual voc� gostaria de copiar este produto');
define('TEXT_INFO_CURRENT_CATEGORIES', 'Categorias Atuais: ');

define('TEXT_INFO_HEADING_NEW_CATEGORY', 'Nova Categoria');
define('TEXT_INFO_HEADING_EDIT_CATEGORY', 'Editar Categoria');
define('TEXT_INFO_HEADING_DELETE_CATEGORY', 'Excluir Categoria');
define('TEXT_INFO_HEADING_MOVE_CATEGORY', 'Mover Categoria');
define('TEXT_INFO_HEADING_DELETE_PRODUCT', 'Excluir Produto');
define('TEXT_INFO_HEADING_MOVE_PRODUCT', 'Mover Produto');
define('TEXT_INFO_HEADING_COPY_TO', 'Copiar Para');

define('TEXT_DELETE_CATEGORY_INTRO', 'Tem certeza que deseja excluir esta categoria?');
define('TEXT_DELETE_PRODUCT_INTRO', 'Tem certeza que deseja permanentemente excluir este produto?<br /><br /><strong>Aten��o:</strong> Em Produtos Linkados<br />1. Tenha certeza que a Categoria Mestre foi alterada se voc� estiver deletando o Produto da Categoria Mestre<br />2. Marque a caixa para deletar o produto da Categoria desejada');

define('TEXT_DELETE_WARNING_CHILDS', '<b>ATEN��O:</b> Existem %s Categorias(-filho) ainda linkadas nesta categoria!');
define('TEXT_DELETE_WARNING_PRODUCTS', '<b>ATEN��O:</b> Existem %s Produtos ainda linkados neste categoria!');

define('TEXT_MOVE_PRODUCTS_INTRO', 'Por favor, selecione a categoria na qual voc� gostaria que o produto <b>%s</b> residisse');
define('TEXT_MOVE_CATEGORIES_INTRO', 'Por favor, selecione a categoria na qual voc� gostaria que a categoria <b>%s</b> residisse');
define('TEXT_MOVE', 'Mover <b>%s</b> para:');

define('TEXT_NEW_CATEGORY_INTRO', 'Por favor, preencha as informa��es abaixo para a nova categoria');
define('TEXT_CATEGORIES_NAME', 'Nome da Categoria:');
define('TEXT_CATEGORIES_IMAGE', 'Imagem da Categoria:');
define('TEXT_SORT_ORDER', 'Ordem de Amostragem:');

define('TEXT_PRODUCTS_STATUS', 'Estado do Produtos:');
define('TEXT_PRODUCTS_VIRTUAL', 'Produto � Virtual:');
define('TEXT_PRODUCTS_IS_ALWAYS_FREE_SHIPPING', 'Sempre � Frete Gr�tis:');
define('TEXT_PRODUCTS_QTY_BOX_STATUS', 'Mostrar Caixa de Quantidade de Produtos:');
define('TEXT_PRODUCTS_DATE_AVAILABLE', 'Data de Disponibilidade:');
define('TEXT_PRODUCT_AVAILABLE', 'Em Estoque');
define('TEXT_PRODUCT_NOT_AVAILABLE', 'Sem Estoque');
define('TEXT_PRODUCT_IS_VIRTUAL', 'Sim, Pular Endere�o de Entrega');
define('TEXT_PRODUCT_NOT_VIRTUAL', 'N�o, Endere�o de Entrega Obrigat�rio');
define('TEXT_PRODUCT_IS_ALWAYS_FREE_SHIPPING', 'Sim, Sempre � Frete Gr�tis');
define('TEXT_PRODUCT_NOT_ALWAYS_FREE_SHIPPING', 'N�o, Regras Normais de Frete');
define('TEXT_PRODUCT_SPECIAL_ALWAYS_FREE_SHIPPING', 'Produto Especial, Produto/Download Requer um Endere�o de Entrega');
define('TEXT_PRODUCTS_SORT_ORDER', 'Ordem de Amostragem:');

define('TEXT_PRODUCTS_QTY_BOX_STATUS_ON', 'Sim, Mostrar Caixa de Quantidade');
define('TEXT_PRODUCTS_QTY_BOX_STATUS_OFF', 'N�o, N�o Mostrar Caixa de Quantidade');

define('TEXT_PRODUCTS_MANUFACTURER', 'Fabricante do Produto:');
define('TEXT_PRODUCTS_NAME', 'Nome do Produto:');
define('TEXT_PRODUCTS_DESCRIPTION', 'Descri��o do Produto:');
define('TEXT_PRODUCTS_QUANTITY', 'Quantidade do Produto:');
define('TEXT_PRODUCTS_MODEL', 'Modelo do Produto:');
define('TEXT_PRODUCTS_IMAGE', 'Imagem do Produto:');
define('TEXT_PRODUCTS_IMAGE_DIR', 'Diret�rio de Envio:');
define('TEXT_PRODUCTS_URL', 'URL do Produto:');
define('TEXT_PRODUCTS_URL_WITHOUT_HTTP', '<small>(sem http://)</small>');
define('TEXT_PRODUCTS_PRICE_NET', 'Pre�o do Produto (L�quido):');
define('TEXT_PRODUCTS_PRICE_GROSS', 'Pre�o do Produto (Bruto):');
define('TEXT_PRODUCTS_WEIGHT', 'Peso do Produto:');

define('EMPTY_CATEGORY', 'Categoria Vazia');

define('TEXT_HOW_TO_COPY', 'M�todo de C�pia:');
define('TEXT_COPY_AS_LINK', 'Linkar Produto');
define('TEXT_COPY_AS_DUPLICATE', 'Duplicar Produto');

// Produtos and Attribute Copy Options
  define('TEXT_COPY_ATTRIBUTES_ONLY','Usando somente para Produtos Duplicados...');
  define('TEXT_COPY_ATTRIBUTES','Copiar Atributos do Produto na Duplica��o?');
  define('TEXT_COPY_ATTRIBUTES_YES','Sim');
  define('TEXT_COPY_ATTRIBUTES_NO','N�o');

// Produtos and Discount Copy Options
  define('TEXT_COPY_DISCOUNTS_ONLY','Somente usado para Duplicar Produtos com Descontos ...');
  define('TEXT_COPY_DISCOUNTS','Copiar Descontos do Produto?');
  define('TEXT_COPY_DISCOUNTS_YES','Sim');
  define('TEXT_COPY_DISCOUNTS_NO','N�o');

  define('TEXT_INFO_CURRENT_PRODUCT', 'Produto Atual: ');
  define('TABLE_HEADING_MODEL', 'Modelo');

  define('TEXT_INFO_HEADING_ATTRIBUTE_FEATURES','Mudan�as de Atributo para os Produtos ID# ');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_DELETE','Excluir <strong>TODOS</strong> os Atributos do Produto:<br />');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO','Copiar Atributos para outro Produto ou para uma Categoria inteira de:<br />');

  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_PRODUCT','Copiar Atributos para outro <strong>produto</strong> de:<br />');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_CATEGORY','Copiar Atributos para outra <strong>categoria</strong> de:<br />');

  define('TEXT_COPY_ATTRIBUTES_CONDITIONS','<strong>Como os atributos de produtos existentes devem ser tratados?</strong>');
  define('TEXT_COPY_ATTRIBUTES_DELETE','<strong>Excluir</strong> primeiro, ent�o copiar novos atributos');
  define('TEXT_COPY_ATTRIBUTES_UPDATE','<strong>Atualizar</strong> com novas configura��es/pre�os, ent�o adicionar os novos');
  define('TEXT_COPY_ATTRIBUTES_IGNORE','<strong>Ignorar</strong> e somente adicionar novos atributos');

  define('SUCCESS_ATTRIBUTES_DELETED','Atributos exclu�dos com sucesso');
  define('SUCCESS_ATTRIBUTES_UPDATE','Atributos atualizados com sucesso');

  define('ICON_ATTRIBUTES','Op��es de Atributos');

  define('TEXT_CATEGORIES_IMAGE_DIR','Diret�rio de Envio:');

  define('TEXT_PRODUCTS_QTY_BOX_STATUS_PREVIEW','Aten��o: N�o mostrar Caixa de Quantidade, Quantidade Padr�o 1');
  define('TEXT_PRODUCTS_QTY_BOX_STATUS_EDIT','Aten��o: N�o mostrar Caixa de Quantidade, Quantidade Padr�o 1');

  define('TEXT_PRODUCT_OPTIONS', '<strong>Por favor, escolha:</strong>');
  define('TEXT_PRODUCTS_ATTRIBUTES_INFO','Op��es de Atributos Para:');
  define('TEXT_PRODUCT_ATTRIBUTES_DOWNLOADS','Downloads: ');

  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES','Pre�o do Produto por Atributos:');
  define('TEXT_PRODUCT_IS_PRICED_BY_ATTRIBUTE','Sim');
  define('TEXT_PRODUCT_NOT_PRICED_BY_ATTRIBUTE','N�o');
  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES_PREVIEW','*O pre�o de amostragem incluir� os atributos do grupo mais baixo mais o pre�o');
  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES_EDIT','*O pre�o de amostragem incluir� os atributos do grupo mais baixo mais o pre�o');

  define('TEXT_PRODUCTS_QUANTITY_MIN_RETAIL','Quantidade M�nima do Produto:');
  define('TEXT_PRODUCTS_QUANTITY_UNITS_RETAIL','Quantidade do Produto:');
  define('TEXT_PRODUCTS_QUANTITY_MAX_RETAIL','Quantidade M�xima Produto:');

  define('TEXT_PRODUCTS_QUANTITY_MAX_RETAIL_EDIT','0 = Ilimitado, 1 = Nenhuma Caixa de Quantidade ou M�ximo de #');

  define('TEXT_PRODUCTS_MIXED','Quantidade M�nima do Produto:');

  define('PRODUCTS_PRICE_IS_FREE_TEXT', 'Produto � Gr�tis');
  define('TEXT_PRODUCT_IS_FREE','Produto � Gr�tis:');
  define('TEXT_PRODUCTS_IS_FREE_PREVIEW','*Produto est� marcado como GR�TIS');
  define('TEXT_PRODUCTS_IS_FREE_EDIT','*Produto est� marcado como GR�TIS');

  define('TEXT_PRODUCT_IS_CALL','Produto est� marcado como Sob Consulta:');
  define('TEXT_PRODUCTS_IS_CALL_PREVIEW','*Produto est� marcado como Sob Consulta');
  define('TEXT_PRODUCTS_IS_CALL_EDIT','*Produto est� marcado como Sob Consulta');

  define('TEXT_ATTRIBUTE_COPY_SKIPPING','<strong>Pulando Novo Atributo </strong>');
  define('TEXT_ATTRIBUTE_COPY_INSERTING','<strong>Inserindo Novo Atributo de </strong>');
  define('TEXT_ATTRIBUTE_COPY_UPDATING','<strong>Atualizando do Atributo </strong>');

// meta tags
  define('TEXT_META_TAG_TITLE_INCLUDES','<strong>Meta Tag de Qual Produto Dever� Ser Inclu�do:</strong>');
  define('TEXT_PRODUCTS_METATAGS_PRODUCTS_NAME_STATUS','<strong>Nome do Produto:</strong>');
  define('TEXT_PRODUCTS_METATAGS_TITLE_STATUS','<strong>T�tulo:</strong>');
  define('TEXT_PRODUCTS_METATAGS_MODEL_STATUS','<strong>Modelo:</strong>');
  define('TEXT_PRODUCTS_METATAGS_PRICE_STATUS','<strong>Pre�o:</strong>');
  define('TEXT_PRODUCTS_METATAGS_TITLE_TAGLINE_STATUS','<strong>T�tulo/Linha Tag:</strong>');
  define('TEXT_META_TAGS_TITLE','<strong>Meta Tag T�tulo:</strong>');
  define('TEXT_META_TAGS_KEYWORDS','<strong>Meta Tag Palavras Cahve:</strong>');
  define('TEXT_META_TAGS_DESCRIPTION','<strong>Meta Tag Descri��o:</strong>');
  define('TEXT_META_EXCLUDED', '<span class="alert">EXCLU�DO</span>');