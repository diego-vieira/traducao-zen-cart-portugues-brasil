<?php
/**
 * @package admin
 * @copyright Copyright 2003-2010 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: coupon_restrict.php 16174 2010-05-02 14:10:30Z drbyte $
 */

define('HEADING_TITLE', 'Restri&ccedil;&atilde;o de Produto/Categoria em Cupons');
define('HEADING_TITLE_CATEGORY', 'Restri&ccedil;&otilde;es de Categoria');
define('HEADING_TITLE_PRODUCT', 'Restri&ccedil;&otilde;es de Produto');

define('HEADER_COUPON_ID', 'ID do Cupom');
define('HEADER_COUPON_NAME', 'Nome do Cupom');
define('HEADER_CATEGORY_ID', 'ID da Categoria');
define('HEADER_CATEGORY_NAME', 'Nome da Categoria');
define('HEADER_PRODUCT_ID', 'ID do Produto');
define('HEADER_PRODUCT_NAME', 'Nome do Produto');
define('HEADER_RESTRICT_ALLOW', 'Permitir');
define('HEADER_RESTRICT_DENY', 'Negar');
define('HEADER_RESTRICT_REMOVE', 'Remover');
define('IMAGE_ALLOW', 'Permitir');
define('IMAGE_DENY', 'Negar');
define('IMAGE_REMOVE', 'Remover');
define('TEXT_ALL_CATEGORIES', 'Todas as Categorias');

define('MAX_DISPLAY_RESTRICT_ENTRIES', 20);
define('TEXT_ALL_PRODUCTS_ADD', 'Add All Category Products');
define('TEXT_ALL_PRODUCTS_REMOVE', 'Remove All Category Products');
define('TEXT_INFO_ADD_DENY_ALL', '<strong>For Add all Category Products, only Products not already set for restrictions will be added.<br />
          For Delete all Category Products, only Products that are specified Deny or Allow will be removed.</strong>');

define('TEXT_MANUFACTURER', 'Manufacturer: ');
define('TEXT_CATEGORY', 'Category: ');
define('ERROR_DISCOUNT_COUPON_DEFINED_CATEGORY', 'Category Not Completed');
define('ERROR_DISCOUNT_COUPON_DEFINED_PRODUCT', 'Product Not Completed');