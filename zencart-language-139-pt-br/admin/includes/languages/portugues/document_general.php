<?php
/**
 * @package admin
 * @copyright Copyright 2003-2010 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: document_general.php 15883 2010-04-11 16:41:26Z wilt $
 */

define('HEADING_TITLE', 'Categorias / Produtos');
define('HEADING_TITLE_GOTO', 'Go To:');

define('TABLE_HEADING_ID', 'ID');
define('TABLE_HEADING_CATEGORIES_PRODUCTS', 'Categorias / Produtos');
define('TABLE_HEADING_CATEGORIES_SORT_ORDER', 'Sort');

define('TABLE_HEADING_PRICE','Price/Special/Sale');
define('TABLE_HEADING_QUANTITY','Quantity');

define('TABLE_HEADING_ACTION', 'Ação');
define('TABLE_HEADING_STATUS', 'Estado');

define('TEXT_CATEGORIES', 'Categorias:');
define('TEXT_SUBCATEGORIES', 'SubCategorias:');
define('TEXT_PRODUCTS', 'Produtos:');
define('TEXT_PRODUCTS_PRICE_INFO', 'Price:');
define('TEXT_PRODUCTS_TAX_CLASS', 'Tax Class:');
define('TEXT_PRODUCTS_AVERAGE_RATING', 'Average Rating:');
define('TEXT_PRODUCTS_QUANTITY_INFO', 'Quantity:');
define('TEXT_DATE_ADDED', 'Adicionado em:');
define('TEXT_DATE_AVAILABLE', 'Date Available:');
define('TEXT_LAST_MODIFIED', 'Modificado em:');
define('TEXT_IMAGE_NONEXISTENT', 'Sem Imagem');
define('TEXT_NO_CHILD_CATEGORIES_OR_PRODUCTS', 'Please insert a new category or product in this level.');
define('TEXT_PRODUCT_MORE_INFORMATION', 'For more information, please visit this products <a href="http://%s" target="blank">webpage</a>.');
define('TEXT_PRODUCT_DATE_ADDED', 'This product was added to our catalog on %s.');
define('TEXT_PRODUCT_DATE_AVAILABLE', 'This product will be in stock on %s.');

define('TEXT_EDIT_INTRO', 'Por favor, faça os ajustes necessários');
define('TEXT_EDIT_CATEGORIES_ID', 'Categoria ID:');
define('TEXT_EDIT_CATEGORIES_NAME', 'Categoria Name:');
define('TEXT_EDIT_CATEGORIES_IMAGE', 'Categoria Image:');
define('TEXT_EDIT_SORT_ORDER', 'Sort Order:');

define('TEXT_INFO_COPY_TO_INTRO', 'Please choose a new category you wish to copy this product to');
define('TEXT_INFO_CURRENT_CATEGORIES', 'Current Categorias: ');

define('TEXT_INFO_HEADING_NEW_CATEGORY', 'Novo Categoria');
define('TEXT_INFO_HEADING_EDIT_CATEGORY', 'Editar Categoria');
define('TEXT_INFO_HEADING_DELETE_CATEGORY', 'Excluir Categoria');
define('TEXT_INFO_HEADING_MOVE_CATEGORY', 'Mover Categoria');
define('TEXT_INFO_HEADING_DELETE_PRODUCT', 'Excluir Produto');
define('TEXT_INFO_HEADING_MOVE_PRODUCT', 'Mover Produto');
define('TEXT_INFO_HEADING_COPY_TO', 'Copy To');

define('TEXT_DELETE_CATEGORY_INTRO', 'Tem certeza que deseja excluir this category?');
define('TEXT_DELETE_PRODUCT_INTRO', 'Tem certeza que deseja permanently delete this product?<br /><br /><strong>Atenção:</strong> On Linked Produtos<br />1 Make sure the Master Categoria has been changed if you are deleting the Produto from the Master Categoria<br />2 Check the checkbox for the Categoria to Delete the Produto from');

define('TEXT_DELETE_WARNING_CHILDS', '<b>ATENÇÃO:</b> There are %s (child-)Categorias still linked to this category!');
define('TEXT_DELETE_WARNING_PRODUCTS', '<b>ATENÇÃO:</b> There are %s products still linked to this category!');

define('TEXT_MOVE_PRODUCTS_INTRO', 'Please select which category you wish <b>%s</b> to reside in');
define('TEXT_MOVE_CATEGORIES_INTRO', 'Please select which category you wish <b>%s</b> to reside in');
define('TEXT_MOVE', 'Mover <b>%s</b> to:');

define('TEXT_NEW_CATEGORY_INTRO', 'Please fill out the following information for the new category');
define('TEXT_CATEGORIES_NAME', 'Categoria Name:');
define('TEXT_CATEGORIES_IMAGE', 'Categoria Image:');
define('TEXT_SORT_ORDER', 'Sort Order:');

define('TEXT_DOCUMENT_STATUS', 'Document Estado:');
define('TEXT_PRODUCTS_VIRTUAL', 'Produto is Virtual:');
define('TEXT_PRODUCTS_IS_ALWAYS_FREE_SHIPPING', 'Always Free Shipping:');
define('TEXT_PRODUCTS_QTY_BOX_STATUS', 'Produtos Quantity Box Shows:');
define('TEXT_DOCUMENT_DATE_AVAILABLE', 'Date Available:');
define('TEXT_DOCUMENT_AVAILABLE', 'Available');
define('TEXT_DOCUMENT_NOT_AVAILABLE', 'Unavailable');
define('TEXT_PRODUCT_IS_VIRTUAL', 'Yes, Skip Shipping Address');
define('TEXT_PRODUCT_NOT_VIRTUAL', 'No, Shipping Address Required');
define('TEXT_PRODUCT_IS_ALWAYS_FREE_SHIPPING', 'Yes, Always Free Shipping');
define('TEXT_PRODUCT_NOT_ALWAYS_FREE_SHIPPING', 'No, Normal Shipping Rules');
define('TEXT_PRODUCT_SPECIAL_ALWAYS_FREE_SHIPPING', 'Special, Produto/Download Combo Requires a Shipping Address');
define('TEXT_PRODUCTS_SORT_ORDER', 'Sort Order:');

define('TEXT_PRODUCTS_QTY_BOX_STATUS_ON', 'Yes, Show Quantity Box');
define('TEXT_PRODUCTS_QTY_BOX_STATUS_OFF', 'No, Do not show Quantity Box');

define('TEXT_DOCUMENT_NAME', 'Document Name:');
define('TEXT_DOCUMENT_DETAILS', 'Document Contents:');
define('TEXT_DOCUMENT_IMAGE', 'Document Image:');
define('TEXT_DOCUMENT_IMAGE_DIR', 'Upload to directory:');
define('TEXT_DOCUMENT_URL', 'Document URL:');
define('TEXT_DOCUMENT_URL_WITHOUT_HTTP', '<small>(without http://)</small>');

define('EMPTY_CATEGORY', 'Empty Categoria');

define('TEXT_HOW_TO_COPY', 'Copy Method:');
define('TEXT_COPY_AS_LINK', 'Link product');
define('TEXT_COPY_AS_DUPLICATE', 'Duplicate product');

// Produtos and Attribute Copy Options
  define('TEXT_COPY_ATTRIBUTES_ONLY','Only used for Duplicate Produtos ...');
  define('TEXT_COPY_ATTRIBUTES','Copy Produto Attributes to Duplicate?');
  define('TEXT_COPY_ATTRIBUTES_YES','Yes');
  define('TEXT_COPY_ATTRIBUTES_NO','No');

  define('TEXT_INFO_CURRENT_PRODUCT', 'Current Produto: ');
  define('TABLE_HEADING_MODEL', 'Modelo');

  define('TEXT_INFO_HEADING_ATTRIBUTE_FEATURES','Attributes Changes for Produtos ID# ');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_DELETE','Delete <strong>ALL</strong> Produto Attributes for:<br />');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO','Copy Attributes to another Produto or to an entire Categoria from:<br />');

  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_PRODUCT','Copy Attributes to another <strong>product</strong> from:<br />');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_CATEGORY','Copy Attributes to another <strong>category</strong> from:<br />');

  define('TEXT_COPY_ATTRIBUTES_CONDITIONS','<strong>How should existing product attributes should be handled?</strong>');
  define('TEXT_COPY_ATTRIBUTES_DELETE','<strong>Delete</strong> first, then copy new attributes');
  define('TEXT_COPY_ATTRIBUTES_UPDATE','<strong>Atualizar</strong> with new settings/prices, then add new ones');
  define('TEXT_COPY_ATTRIBUTES_IGNORE','<strong>Ignore</strong> and add only new attributes');

  define('SUCCESS_ATTRIBUTES_DELETED','Attributes successfully deleted');
  define('SUCCESS_ATTRIBUTES_UPDATE','Attributes successfully updated');

  define('ICON_ATTRIBUTES','Attribute Features');

  define('TEXT_CATEGORIES_IMAGE_DIR','Upload to directory:');

  define('TEXT_PRODUCTS_QTY_BOX_STATUS_PREVIEW','Atenção: Does not show Quantity Box, Default to Qty 1');
  define('TEXT_PRODUCTS_QTY_BOX_STATUS_EDIT','Atenção: Does not show Quantity Box, Default to Qty 1');

  define('TEXT_PRODUCT_OPTIONS', '<strong>Please Choose:</strong>');
  define('TEXT_PRODUCTS_ATTRIBUTES_INFO','Attribute Features For:');
  define('TEXT_PRODUCT_ATTRIBUTES_DOWNLOADS','Downloads: ');

  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES','Produto Priced by Attributes:');
  define('TEXT_PRODUCT_IS_PRICED_BY_ATTRIBUTE','Yes');
  define('TEXT_PRODUCT_NOT_PRICED_BY_ATTRIBUTE','No');
  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES_PREVIEW','*Display price will include lowest group attributes prices plus price');
  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES_EDIT','*Display price will include lowest group attributes prices plus price');

  define('TEXT_PRODUCTS_QUANTITY_MIN_RETAIL','Produto Qty Minimum:');
  define('TEXT_PRODUCTS_QUANTITY_UNITS_RETAIL','Produto Qty Units:');
  define('TEXT_PRODUCTS_QUANTITY_MAX_RETAIL','Produto Qty Maximum:');

  define('TEXT_PRODUCTS_QUANTITY_MAX_RETAIL_EDIT','0 = Unlimited, 1 = No Qty Boxes');

  define('TEXT_PRODUCTS_MIXED','Produto Qty Min/Unit Mix:');

  define('PRODUCTS_PRICE_IS_FREE_TEXT', 'Produto is Free');
  define('TEXT_PRODUCT_IS_FREE','Produto is Free:');
  define('TEXT_PRODUCTS_IS_FREE_PREVIEW','*Produto is marked as FREE');
  define('TEXT_PRODUCTS_IS_FREE_EDIT','*Produto is marked as FREE');

  define('TEXT_PRODUCT_IS_CALL','Produto is Call for Price:');
  define('TEXT_PRODUCTS_IS_CALL_PREVIEW','*Produto is marked as CALL FOR PRICE');
  define('TEXT_PRODUCTS_IS_CALL_EDIT','*Produto is marked as CALL FOR PRICE');

  define('TEXT_ATTRIBUTE_COPY_SKIPPING','<strong>Skipping Novo Attribute </strong>');
  define('TEXT_ATTRIBUTE_COPY_INSERTING','<strong>Inserting Novo Attribute from </strong>');
  define('TEXT_ATTRIBUTE_COPY_UPDATING','<strong>Updating from Attribute </strong>');

// meta tags
  define('TEXT_META_TAG_TITLE_INCLUDES','<strong>Mark What the Document\'s Meta Tag Title Should Include:</strong>');
  define('TEXT_PRODUCTS_METATAGS_PRODUCTS_NAME_STATUS','<strong>Document Name:</strong>');
  define('TEXT_PRODUCTS_METATAGS_TITLE_STATUS','<strong>Title:</strong>');
  define('TEXT_PRODUCTS_METATAGS_MODEL_STATUS','<strong>Modelo:</strong>');
  define('TEXT_PRODUCTS_METATAGS_PRICE_STATUS','<strong>Price:</strong>');
  define('TEXT_PRODUCTS_METATAGS_TITLE_TAGLINE_STATUS','<strong>Title/Tagline:</strong>');
  define('TEXT_META_TAGS_TITLE','<strong>Meta Tag Title:</strong>');
  define('TEXT_META_TAGS_KEYWORDS','<strong>Meta Tag Keywords:</strong>');
  define('TEXT_META_TAGS_DESCRIPTION','<strong>Meta Tag Descrição:</strong>');
  define('TEXT_META_EXCLUDED', '<span class="alert">EXCLUDED</span>');
