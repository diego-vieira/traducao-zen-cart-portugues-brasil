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
//  $Id: products_price_manager.php 543 2004-11-13 19:19:29Z wilt $
//

define('HEADING_TITLE', 'Produtos Price Manager');
define('HEADING_TITLE_PRODUCT_SELECT','Please select a Categoria with Produtos to display the Pricing Information of ...');

define('TABLE_HEADING_PRODUCTS', 'Produtos');
define('TABLE_HEADING_PRODUCTS_MODEL','Modelo');
define('TABLE_HEADING_PRODUCTS_PRICE', 'Produtos Price/Special/Sale');
define('TABLE_HEADING_PRODUCTS_PERCENTAGE','Porcentagem');
define('TABLE_HEADING_AVAILABLE_DATE', 'Available');
define('TABLE_HEADING_EXPIRES_DATE','Expira');
define('TABLE_HEADING_STATUS', 'Status');
define('TABLE_HEADING_ACTION', 'Ação');

define('TEXT_PRODUCT_INFO', 'Produto Info:');
define('TEXT_PRODUCTS_PRICE_INFO', 'Produto Price Info:');
define('TEXT_PRODUCTS_MODEL','Modelo:');
define('TEXT_PRICE', 'Price');
define('TEXT_PRODUCT_AVAILABLE_DATE', 'Available Date:');
define('TEXT_PRODUCTS_STATUS', 'Produtos Status:');
define('TEXT_PRODUCT_AVAILABLE', 'In Stock');
define('TEXT_PRODUCT_NOT_AVAILABLE', 'Out of Stock');

define('TEXT_PRODUCT_INFO_NONE', 'Please select a Product from above ...');
  define('TEXT_PRODUCT_IS_FREE','Product is Free:');
  define('TEXT_PRODUCTS_IS_FREE_EDIT','<br />*Product marked FREE');
  define('TEXT_PRODUCT_IS_CALL','Call for Price:');
  define('TEXT_PRODUCTS_IS_CALL_EDIT','<br />*Product marked CALL FOR PRICE');
  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES','Priced by Attributes:');
  define('TEXT_PRODUCT_IS_PRICED_BY_ATTRIBUTE','Yes');
  define('TEXT_PRODUCT_NOT_PRICED_BY_ATTRIBUTE','No');
  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES_EDIT','<br />*Display price will include lowest group attributes prices plus price');
  define('TEXT_PRODUCTS_MIXED','Qty Min/Unit Mix:');
  define('TEXT_PRODUCTS_MIXED_DISCOUNT_QUANTITY', 'Discount Qty Applies to Mixed Attributes');

  define('TEXT_PRODUCTS_QUANTITY_MIN_RETAIL','Qty Min:');
  define('TEXT_PRODUCTS_QUANTITY_UNITS_RETAIL','Qty Units:');
  define('TEXT_PRODUCTS_QUANTITY_MAX_RETAIL','Qty Max:');
  define('TEXT_PRODUCTS_QUANTITY_MAX_RETAIL_EDIT','0= Unlimited<br />1= No Qty Box/Max Value');

define('TEXT_FEATURED_PRODUCT_INFO', 'Featured Produto Info:');
define('TEXT_FEATURED_PRODUCT', 'Produto:');
define('TEXT_FEATURED_EXPIRES_DATE', 'Expira em:');
define('TEXT_FEATURED_AVAILABLE_DATE', 'Available Date:');
define('TEXT_FEATURED_PRODUCTS_STATUS', 'Featured Status:');
define('TEXT_FEATURED_PRODUCT_AVAILABLE', 'Active');
define('TEXT_FEATURED_PRODUCT_NOT_AVAILABLE', 'Inactive');
define('TEXT_FEATURED_DISABLED', '<strong>NOTA: Featured Produto Info is currently disabled, expired or not yet active</strong>');

define('TEXT_SPECIALS_PRODUCT', 'Produto:');
define('TEXT_SPECIALS_SPECIAL_PRICE', 'Preço Especial:');
define('TEXT_SPECIALS_EXPIRES_DATE', 'Expira em:');
define('TEXT_SPECIALS_AVAILABLE_DATE', 'Available Date:');
define('TEXT_SPECIALS_PRICE_TIP', '<b>Specials Notes:</b><ul><li>You can enter a percentage to deduct in the Specials Price field, for example: <b>20%</b></li><li>If you enter a new price, the decimal separator must be a \'.\' (decimal-point), example: <b>49.99</b></li><li>Leave the expiry date empty for no expiration</li></ul>');
define('TEXT_SPECIALS_PRODUCT_INFO', 'Preço Especial Info:');
define('TEXT_SPECIALS_PRODUCTS_STATUS', 'Specials Status:');
define('TEXT_SPECIALS_PRODUCT_AVAILABLE', 'Active');
define('TEXT_SPECIALS_PRODUCT_NOT_AVAILABLE', 'Inactive');
define('TEXT_SPECIALS_NO_GIFTS','No Specials on GV');
define('TEXT_SPECIAL_DISABLED', '<strong>NOTA: Special Produto Info is currently disabled, expired or not yet active</strong>');

define('TEXT_INFO_DATE_ADDED', 'Adicionado em:');
define('TEXT_INFO_LAST_MODIFIED', 'Modificado em:');
define('TEXT_INFO_NEW_PRICE', 'Novo Price:');
define('TEXT_INFO_ORIGINAL_PRICE', 'Original Price:');
define('TEXT_INFO_PERCENTAGE', 'Porcentagem:');
define('TEXT_INFO_AVAILABLE_DATE', 'Available On:');
define('TEXT_INFO_EXPIRES_DATE', 'Expira At:');
define('TEXT_INFO_STATUS_CHANGE', 'Status Change:');
define('TEXT_IMAGE_NONEXISTENT', 'Sem Imagem');

define('TEXT_INFO_HEADING_DELETE_FEATURED', 'Excluir Featured');
define('TEXT_INFO_DELETE_INTRO', 'Tem certeza que deseja excluir the featured product?');

  define('TEXT_ATTRIBUTES_INSERT_INFO', '<strong>Define the Attribute Settings then press Insert to apply</strong>');
  define('TEXT_PRICED_BY_ATTRIBUTES', 'Priced by Attributes');
  define('TEXT_PRODUCTS_PRICE', 'Products Price: ');
  define('TEXT_SPECIAL_PRICE', 'Special Price: ');
  define('TEXT_SALE_PRICE', 'Sale Price: ');
  define('TEXT_FREE', 'FREE');
  define('TEXT_CALL_FOR_PRICE', 'Call for Price');

define('TEXT_ADD_ADDITIONAL_DISCOUNT', 'Add ' . DISCOUNT_QTY_ADD . ' Blank Qty Discounts:');
define('TEXT_BLANKS_INFO','All 0 Quantity Discounts will be removed when Updated');
define('TEXT_INFO_NO_DISCOUNTS', 'No Quantity Discounts have been defined');
define('TEXT_PRODUCTS_DISCOUNT_QTY_TITLE', 'Discount Levels');
define('TEXT_PRODUCTS_DISCOUNT','Discount');
define('TEXT_PRODUCTS_DISCOUNT_QTY','Minimum Qty');
define('TEXT_PRODUCTS_DISCOUNT_PRICE','Discount Value');
define('TEXT_PRODUCTS_DISCOUNT_TYPE','Type');

define('TEXT_PRODUCTS_DISCOUNT_PRICE_EACH','Calculate Price:');
define('TEXT_PRODUCTS_DISCOUNT_PRICE_EXTENDED','Extended Price:');
define('TEXT_PRODUCTS_DISCOUNT_PRICE_EACH_TAX','Calculate<br />Price: &nbsp; Taxed:');
define('TEXT_PRODUCTS_DISCOUNT_PRICE_EXTENDED_TAX','Extended<br />Price: &nbsp; Taxed:');

define('TEXT_EACH','ea.');
define('TEXT_EXTENDED','total');

define('TEXT_DISCOUNT_TYPE_INFO', 'Produto Discount Info');
define('TEXT_DISCOUNT_TYPE','Discount Type:');
define('TEXT_DISCOUNT_TYPE_FROM', 'Discount Priced from:');

define('DISCOUNT_TYPE_DROPDOWN_0','None');
define('DISCOUNT_TYPE_DROPDOWN_1','Porcentagem');
define('DISCOUNT_TYPE_DROPDOWN_2','Actual Price');
define('DISCOUNT_TYPE_DROPDOWN_3','Amount off');

define('DISCOUNT_TYPE_FROM_DROPDOWN_0','Price');
define('DISCOUNT_TYPE_FROM_DROPDOWN_1','Special');

define('TEXT_UPDATE_COMMIT','Atualizar and Commit all changes from current screen display');

define('TEXT_PRODUCTS_TAX_CLASS', 'Tax Class:');

define('TEXT_INFO_MASTER_CATEGORIES_ID_WARNING', '<strong>Atenção:</strong> The Produto Master Categoria ID# %s does not match Current Categoria ID# %s and Produto is Not Linked!');
define('TEXT_INFO_MASTER_CATEGORIES_CURRENT', ' Current Categoria ID# %s matches the Master Categoria ID# %s');
define('TEXT_INFO_MASTER_CATEGORIES_ID_UPDATE_TO_CURRENT', 'Atualizar Master Categorias ID# %s to match Current Categoria ID# %s');

define('PRODUCT_WARNING_UPDATE', 'Please make any changes then press Atualizar to save');
define('PRODUCT_UPDATE_SUCCESS', 'Successful Atualizar of Produto Changes!');
define('PRODUCT_WARNING_UPDATE_CANCEL', 'Changes were Cancelled and not saved ...');
define('TEXT_INFO_EDIT_CAUTION', '<strong>Click to begin Editando ...</strong>');
define('TEXT_INFO_PREVIEW_ONLY', 'Preview Only ... Current Price Status ... Preview Only');
define('TEXT_INFO_UPDATE_REMINDER', '<strong>Edit Produto Information then Atualizar to save</strong>');
?>