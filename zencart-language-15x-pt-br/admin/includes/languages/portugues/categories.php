<?php
/**
 * @package admin
 * @copyright Copyright 2003-2009 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: categories.php 14139 2009-08-10 13:46:02Z wilt $
 */

define('HEADING_TITLE', 'Categorias / Produtos');
define('HEADING_TITLE_GOTO', 'Ir Para:');

define('TABLE_HEADING_ID', 'ID');
define('TABLE_HEADING_CATEGORIES_PRODUCTS', 'Categorias / Produtos');
define('TABLE_HEADING_CATEGORIES_SORT_ORDER', 'Ordem');

define('TABLE_HEADING_PRICE','Pre&ccedil;o/Especial/Promo&ccedil;&atilde;o');
define('TABLE_HEADING_QUANTITY','Quantidade');

define('TABLE_HEADING_ACTION', 'A&ccedil;&atilde;o');
define('TABLE_HEADING_STATUS', 'Estado');

define('TEXT_CATEGORIES', 'Categorias:');
define('TEXT_SUBCATEGORIES', 'SubCategorias:');
define('TEXT_PRODUCTS', 'Produtos:');
define('TEXT_PRODUCTS_PRICE_INFO', 'Pre&ccedil;o:');
define('TEXT_PRODUCTS_TAX_CLASS', 'Classe de Imposto:');
define('TEXT_PRODUCTS_AVERAGE_RATING', 'Avalia&ccedil;&atilde;o M&eacute;dia:');
define('TEXT_PRODUCTS_QUANTITY_INFO', 'Quantidade:');
define('TEXT_DATE_ADDED', 'Adicionado em:');
define('TEXT_DATE_AVAILABLE', 'Data de Disponibilidade:');
define('TEXT_LAST_MODIFIED', '&Uacute;ltima Modifica&ccedil;&atilde;o:');
define('TEXT_IMAGE_NONEXISTENT', 'IMAGEM INEXISTENTE');
define('TEXT_NO_CHILD_CATEGORIES_OR_PRODUCTS', 'Por favor, insira uma nova cateogira ou produto neste n&iacute;vel.');
define('TEXT_PRODUCT_MORE_INFORMATION', 'Para maiores informa&ccedil;&otilde;es, por favor, visite a <a href="http://%s" target="blank">p&aacute;gina destes produtos</a>.');
define('TEXT_PRODUCT_DATE_ADDED', 'Este produto foi adicionado ao nosso cadastro em %s.');
define('TEXT_PRODUCT_DATE_AVAILABLE', 'Este produto estar&aacute; dispon&iacute;vel em %s.');

define('TEXT_EDIT_INTRO', 'Por favor, fa&ccedil;a os ajustes necess&aacute;rios');
define('TEXT_EDIT_CATEGORIES_ID', 'ID da Categoria:');
define('TEXT_EDIT_CATEGORIES_NAME', 'Nome da Categoria:');
define('TEXT_EDIT_CATEGORIES_IMAGE', 'Imagem da Categoria:');
define('TEXT_EDIT_SORT_ORDER', 'Ordem de Amostragem:');

define('TEXT_INFO_COPY_TO_INTRO', 'Por favor, escolha uma nova categoria para a qual voc&ecirc; gostaria de copiar este produto');
define('TEXT_INFO_CURRENT_CATEGORIES', 'Categorias Atuais: ');

define('TEXT_INFO_HEADING_NEW_CATEGORY', 'Nova Categoria');
define('TEXT_INFO_HEADING_EDIT_CATEGORY', 'Editar Categoria');
define('TEXT_INFO_HEADING_DELETE_CATEGORY', 'Excluir Categoria');
define('TEXT_INFO_HEADING_MOVE_CATEGORY', 'Mover Categoria');
define('TEXT_INFO_HEADING_DELETE_PRODUCT', 'Excluir Produto');
define('TEXT_INFO_HEADING_MOVE_PRODUCT', 'Mover Produto');
define('TEXT_INFO_HEADING_COPY_TO', 'Copiar Para');

define('TEXT_DELETE_CATEGORY_INTRO', 'Tem certeza que deseja excluir esta categoria?');
define('TEXT_DELETE_CATEGORY_INTRO_LINKED_PRODUCTS', '<strong>Aten&ccedil;&atilde;o:</strong> Produtos linkados nas quais as ID das Categorias Mestre s&atilde;o deletadas n&atilde;o ter&atilde;o o pre&ccedil;o correto. Voc&ecirc; dever&aacute; primeiro ter certeza que excluindo uma categoria que possuem produtos linkados, tenham sua Categoria Mestre alterada para outra antes de excluir a categoria');
define('TEXT_DELETE_PRODUCT_INTRO', 'Tem certeza que deseja excluir este produto?');

define('TEXT_DELETE_WARNING_CHILDS', '<b>ATEN&Ccedil;&Atilde;O:</b> Existem %s Categorias(-filho) ainda linkadas nesta categoria!');
define('TEXT_DELETE_WARNING_PRODUCTS', '<b>ATEN&Ccedil;&Atilde;O:</b> Existem %s Produtos ainda linkados neste categoria!');

define('TEXT_MOVE_PRODUCTS_INTRO', 'Por favor, selecione a categoria na qual voc&ecirc; gostaria que o produto <b>%s</b> residisse');
define('TEXT_MOVE_CATEGORIES_INTRO', 'Por favor, selecione a categoria na qual voc&ecirc; gostaria que a categoria <b>%s</b> residisse');
define('TEXT_MOVE', 'Mover <b>%s</b> para:');

define('TEXT_NEW_CATEGORY_INTRO', 'Por favor, preencha as informa&ccedil;&otilde;es abaixo para a nova categoria');
define('TEXT_CATEGORIES_NAME', 'Nome da Categoria:');
define('TEXT_CATEGORIES_IMAGE', 'Imagem da Categoria:');
define('TEXT_SORT_ORDER', 'Ordem de Amostragem:');

define('TEXT_PRODUCTS_STATUS', 'Estado do Produtos:');
define('TEXT_PRODUCTS_VIRTUAL', 'Produto &eacute; Virtual:');
define('TEXT_PRODUCTS_IS_ALWAYS_FREE_SHIPPING', 'Sempre &Eacute; Frete Gr&aacute;tis:');
define('TEXT_PRODUCTS_QTY_BOX_STATUS', 'Mostrar Caixa de Quantidade de Produtos:');
define('TEXT_PRODUCTS_DATE_AVAILABLE', 'Data de Disponibilidade:');
define('TEXT_PRODUCT_AVAILABLE', 'Em Estoque');
define('TEXT_PRODUCT_NOT_AVAILABLE', 'Sem Estoque');
define('TEXT_PRODUCT_IS_VIRTUAL', 'Sim, Pular Endere&ccedil;o de Entrega');
define('TEXT_PRODUCT_NOT_VIRTUAL', 'N&atilde;o, Endere&ccedil;o de Entrega Obrigat&oacute;rio');
define('TEXT_PRODUCT_IS_ALWAYS_FREE_SHIPPING', 'Sim, Sempre &Eacute; Frete Gr&aacute;tis');
define('TEXT_PRODUCT_NOT_ALWAYS_FREE_SHIPPING', 'N&atilde;o, Regras Normais de Frete');

define('TEXT_PRODUCTS_QTY_BOX_STATUS_ON', 'Sim, Mostrar Caixa de Quantidade');
define('TEXT_PRODUCTS_QTY_BOX_STATUS_OFF', 'N&atilde;o, N&atilde;o Mostrar Caixa de Quantidade');

define('TEXT_PRODUCTS_MANUFACTURER', 'Fabricante do Produto:');
define('TEXT_PRODUCTS_NAME', 'Nome do Produto:');
define('TEXT_PRODUCTS_DESCRIPTION', 'Descri&ccedil;&atilde;o do Produto:');
define('TEXT_PRODUCTS_QUANTITY', 'Quantidade do Produto:');
define('TEXT_PRODUCTS_MODEL', 'Modelo do Produto:');
define('TEXT_PRODUCTS_IMAGE', 'Imagem do Produto:');
define('TEXT_PRODUCTS_IMAGE_DIR', 'Diret&oacute;rio de Envio:');
define('TEXT_PRODUCTS_URL', 'URL do Produto:');
define('TEXT_PRODUCTS_URL_WITHOUT_HTTP', '<small>(sem http://)</small>');
define('TEXT_PRODUCTS_PRICE_NET', 'Pre&ccedil;o do Produto (L&iacute;quido):');
define('TEXT_PRODUCTS_PRICE_GROSS', 'Pre&ccedil;o do Produto (Bruto):');
define('TEXT_PRODUCTS_WEIGHT', 'Peso do Produto:');

define('EMPTY_CATEGORY', 'Categoria Vazia');

define('TEXT_HOW_TO_COPY', 'M&eacute;todo de C&oacute;pia:');
define('TEXT_COPY_AS_LINK', 'Linkar Produto');
define('TEXT_COPY_AS_DUPLICATE', 'Duplicar Produto');

define('TEXT_RESTRICT_PRODUCT_TYPE', 'Restringir para o Tipo de Produto');
define('TEXT_CATEGORY_HAS_RESTRICTIONS', 'Esta Categoria foi restringinda a ter somente este Tipos de Produto');
define('ERROR_CANNOT_ADD_PRODUCT_TYPE','O tipo de produto especificado n&atilde;o pode ser adicionado nesta categoria. Por favor, verifique as restri&ccedil;&atilde;o desta categoria.');

// Produtos and Attribute Copy Options
 define('TEXT_COPY_ATTRIBUTES_ONLY','Usando somente para Produtos Duplicados...');
 define('TEXT_COPY_ATTRIBUTES','Copiar Atributos do Produto na Duplica&ccedil;&atilde;o?');
 define('TEXT_COPY_ATTRIBUTES_YES','Sim');
 define('TEXT_COPY_ATTRIBUTES_NO','N&atilde;o');

 define('TEXT_INFO_CURRENT_PRODUCT', 'Produto Atual: ');
 define('TABLE_HEADING_MODEL', 'Modelo');

 define('TEXT_INFO_HEADING_ATTRIBUTE_FEATURES','Mudan&ccedil;as de Atributo para os Produtos ID# ');
 define('TEXT_INFO_ATTRIBUTES_FEATURES_DELETE','Excluir <strong>TODOS</strong> os Atributos do Produto:<br />');
 define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO','Copiar Atributos para outro Produto ou para uma Categoria inteira de:<br />');

 define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_PRODUCT','Copiar Atributos para outro <strong>produto</strong> de:<br />');
 define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_CATEGORY','Copiar Atributos para outra <strong>categoria</strong> de:<br />');

 define('TEXT_COPY_ATTRIBUTES_CONDITIONS','<strong>Como os atributos de produtos existentes devem ser tratados?</strong>');
 define('TEXT_COPY_ATTRIBUTES_DELETE','<strong>Excluir</strong> primeiro, ent&atilde;o copiar novos atributos');
 define('TEXT_COPY_ATTRIBUTES_UPDATE','<strong>Atualizar</strong> com novas configura&ccedil;&otilde;es/pre&ccedil;os, ent&atilde;o adicionar os novos');
 define('TEXT_COPY_ATTRIBUTES_IGNORE','<strong>Ignorar</strong> e somente adicionar novos atributos');

 define('SUCCESS_ATTRIBUTES_DELETED','Atributos exclu&iacute;dos com sucesso');
 define('SUCCESS_ATTRIBUTES_UPDATE','Atributos atualizados com sucesso');

 define('ICON_ATTRIBUTES','Op&ccedil;&otilde;es de Atributos');

 define('TEXT_CATEGORIES_IMAGE_DIR','Diret&oacute;rio de Envio:');
 define('TEXT_CATEGORIES_IMAGE_MANUAL', '<strong>Ou, selecione um arquivo de imagem existente no servidor, nome do arquivo:</strong>');

 define('TEXT_VIRTUAL_PREVIEW','Aten&ccedil;&atilde;o: Este produto est&aacute; marcado como - Frete Gr&aacute;tis e Pular Endere&ccedil;o de Entrega');
 define('TEXT_VIRTUAL_EDIT','Aten&ccedil;&atilde;o: Este produto est&aacute; marcado como - Frete Gr&aacute;tis e Pular Endre&ccedil;o de Entrega');
 define('TEXT_FREE_SHIPPING_PREVIEW','Aten&ccedil;&atilde;o: Este produto est&aacute; marcado como - Frete Gr&aacute;tis, Endere&ccedil;o de Entrega Obrigat&oacute;rio');
 define('TEXT_FREE_SHIPPING_EDIT','Aten&ccedil;&atilde;o: Sim fa&ccedil;a o produto - Frete Gr&aacute;tis, Endere&ccedil;o de Entrega Obrigat&oacute;rio');

 define('TEXT_PRODUCTS_QTY_BOX_STATUS_PREVIEW','Aten&ccedil;&atilde;o: N&atilde;o mostrar Caixa de Quantidade, Quantidade Padr&atilde;o 1');
 define('TEXT_PRODUCTS_QTY_BOX_STATUS_EDIT','Aten&ccedil;&atilde;o: N&atilde;o mostrar Caixa de Quantidade, Quantidade Padr&atilde;o 1');

 define('TEXT_PRODUCT_OPTIONS', '<strong>Por favor, escolha:</strong>');
 define('TEXT_PRODUCTS_ATTRIBUTES_INFO','Op&ccedil;&otilde;es de Atributos Para:');
 define('TEXT_PRODUCT_ATTRIBUTES_DOWNLOADS','Downloads: ');

 define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES','Pre&ccedil;o do Produto por Atributos:');
 define('TEXT_PRODUCT_IS_PRICED_BY_ATTRIBUTE','Sim');
 define('TEXT_PRODUCT_NOT_PRICED_BY_ATTRIBUTE','N&atilde;o');
 define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES_PREVIEW','*O pre&ccedil;o de amostragem incluir&aacute; os atributos do grupo mais baixo mais o pre&ccedil;o');
 define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES_EDIT','*O pre&ccedil;o de amostragem incluir&aacute; os atributos do grupo mais baixo mais o pre&ccedil;o');

 define('TEXT_PRODUCTS_QUANTITY_MIN_RETAIL','Quantidade M&iacute;nima do Produto:');
 define('TEXT_PRODUCTS_QUANTITY_UNITS_RETAIL','Quantidade do Produto:');
 define('TEXT_PRODUCTS_QUANTITY_MAX_RETAIL','Quantidade M&aacute;xima Produto:');

 define('TEXT_PRODUCTS_QUANTITY_MAX_RETAIL_EDIT','0 = Ilimitado, 1 = Nenhuma Caixa de Quantidade ou M&aacute;ximo de #');

 define('TEXT_PRODUCTS_MIXED','Quantidade M&iacute;nima do Produto:');

 define('PRODUCTS_PRICE_IS_FREE_TEXT', 'Produto &eacute; Gr&aacute;tis');
 define('TEXT_PRODUCT_IS_FREE','Produto &eacute; Gr&aacute;tis:');
 define('TEXT_PRODUCTS_IS_FREE_PREVIEW','*Produto est&aacute; marcado como GR&Aacute;TIS');
 define('TEXT_PRODUCTS_IS_FREE_EDIT','*Produto est&aacute; marcado como GR&Aacute;TIS');

 define('TEXT_PRODUCT_IS_CALL','Produto est&aacute; marcado como Sob Consulta:');
 define('TEXT_PRODUCTS_IS_CALL_PREVIEW','*Produto est&aacute; marcado como Sob Consulta');
 define('TEXT_PRODUCTS_IS_CALL_EDIT','*Produto est&aacute; marcado como Sob Consulta');

 define('TEXT_ATTRIBUTE_COPY_SKIPPING','<strong>Pulando Novo Atributo </strong>');
 define('TEXT_ATTRIBUTE_COPY_INSERTING','<strong>Inserindo Novo Atributo de </strong>');
 define('TEXT_ATTRIBUTE_COPY_UPDATING','<strong>Atualizando do Atributo </strong>');

 define('TEXT_SHIPPING_INFO',
 '<strong>Produtos Virtuais</strong> n&atilde;o s&atilde;o cobrados frete e n&atilde;o requerem um endere&ccedil;o de entrega. Produtos como Servi&ccedil;os, ' . TEXT_GV_NAMES . ', etc.<br />' .
 '<strong>Frete Sempre Gr&aacute;tis</strong> n&atilde;o s&atilde;o cobrados frete, mas requerem um endere&ccedil;o de entrega<br />' .
 '<strong>Downloads</strong> s&atilde;o normalmente Produtos Virtuais - Nenhuma das duas op&ccedil;&otilde;es precisam ser marcadas<br />'
 );

 define('TEXT_ANY_TYPE', 'Qualquer Tipo');
 define('TABLE_HEADING_PRODUCT_TYPES', 'Tipo de Produto(s)');

// Categorias status
define('TEXT_INFO_HEADING_STATUS_CATEGORY', 'Mudar o Estado da Categoria para:');
define('TEXT_CATEGORIES_STATUS_INTRO', 'Mudar o Estado da Categoria para: ');
define('TEXT_CATEGORIES_STATUS_OFF', 'DESLIGADO');
define('TEXT_CATEGORIES_STATUS_ON', 'LIGADO');
define('TEXT_PRODUCTS_STATUS_INFO', 'Mudar o Estado de TODOS os Produtos para: ');
define('TEXT_PRODUCTS_STATUS_OFF', 'DESLIGADO');
define('TEXT_PRODUCTS_STATUS_ON', 'LIGADO');
define('TEXT_PRODUCTS_STATUS_NOCHANGE', 'N&atilde;o Alterar');
define('TEXT_CATEGORIES_STATUS_WARNING', '<strong>ATEN&Ccedil;&Atilde;O ...</strong><br />Nota: Desabilitando uma categoria ir&aacute; desabilitar todos os produtos nesta categoria. Produtos linkados localizados nesta categoria que s&atilde;o compartilhados em outras Categorias tamb&eacute;m ser&atilde;o desabilitados.');

define('TEXT_PRODUCTS_STATUS_ON_OF',' de ');
define('TEXT_PRODUCTS_STATUS_ACTIVE',' ativo ');

define('TEXT_CATEGORIES_DESCRIPTION', 'Descri&ccedil;&atilde;o da Categoria:');
define('PRODUCTS_PRICE_IS_CALL_FOR_PRICE_TEXT', 'Produto &eacute; Sob Consulta');

// Metatags
 define('TEXT_INFO_HEADING_EDIT_CATEGORY_META_TAGS', 'Defini&ccedil;&otilde;es de Meta Tags da Categoria');
 define('TEXT_EDIT_CATEGORIES_META_TAGS_INTRO', 'Definir Meta Tags Personalizadas');
 define('TEXT_EDIT_CATEGORIES_META_TAGS_TITLE', 'T&iacute;tulo:');
 define('TEXT_EDIT_CATEGORIES_META_TAGS_KEYWORDS', 'Palavras-Chave:');
 define('TEXT_EDIT_CATEGORIES_META_TAGS_DESCRIPTION', 'Descri&ccedil;&atilde;o:');

define('WARNING_PRODUCTS_IN_TOP_INFO', 'ATEN&Ccedil;&Atilde;O: Voc&ecirc; possui produtos na Categoria Topo. Isto ir&aacute; fazer com que os pre&ccedil;os n&atilde;o funcionem corretamente. Produtos encontrados: ');

