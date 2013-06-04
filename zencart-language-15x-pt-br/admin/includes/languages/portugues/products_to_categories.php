<?php
/**
 * @package admin
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: products_to_categories.php 18698 2011-05-04 14:50:06Z wilt $
 */

define('HEADING_TITLE','Produtos to Multiple Categorias Link Manager ...');
define('HEADING_TITLE2','Categorias / Produtos');

define('TEXT_INFO_PRODUCTS_TO_CATEGORIES_AVAILABLE', 'Categorias with Produtos that are Available for Linking ...');

define('TABLE_HEADING_PRODUCTS_ID', 'Prod ID');
define('TABLE_HEADING_PRODUCT', 'Produto Name');
define('TABLE_HEADING_MODEL', 'Modelo');
define('TABLE_HEADING_ACTION', 'A&ccedil;&atilde;o');

define('TEXT_INFO_HEADING_EDIT_PRODUCTS_TO_CATEGORIES', 'EDITING PRODUCT TO CATEGORIES INFORMATION');
define('TEXT_PRODUCTS_ID', 'Product ID# ');
define('TEXT_PRODUCTS_NAME', 'Product: ');
define('TEXT_PRODUCTS_MODEL', 'Model: ');
define('TEXT_PRODUCTS_PRICE', 'Price: ');
define('BUTTON_UPDATE_CATEGORY_LINKS', 'Atualizar Categoria Links');
define('BUTTON_NEW_PRODUCTS_TO_CATEGORIES', 'Select Produto to Link');
define('TEXT_SET_PRODUCTS_TO_CATEGORIES_LINKS', 'Set Produto to Categorias Links for: ');
define('TEXT_INFO_LINKED_TO_COUNT', '&nbsp;&nbsp;Current Number of Linked Categorias: ');

define('TEXT_INFO_PRODUCTS_TO_CATEGORIES_LINKER_INTRO',
'The Produtos to Categorias Linker is designed to quickly link the current Produto to one or to many Categorias.<br />You may also Link all of the Produtos in a Categoria to another Categoria or Remove Linked Produtos from a Categoria that are in another Categoria. (See below for additional instructions)');

define('TEXT_INFO_PRODUCTS_TO_CATEGORIES_LINKER',
'For pricing purposes, each Produto requires a Master Categoria, regardless of how many Categorias it may be linked. This can be set via the Master Categoria Dropdown.<br />
The Produto is currently linked to the Categoria or Categorias that are checked above. To add a new Categoria or Categorias simply check the checkbox next to the Categoria name. To remove an existing linked Categoria or Categorias, simply uncheck the checkbox next to the Categoria name.<br />
When you have checked all of the Categorias that you want this Produto to be linked to, press the ' . BUTTON_UPDATE_CATEGORY_LINKS . '<br />'
);

define('HEADER_CATEGORIES_GLOBAL_CHANGES', 'Global Categoria Link Changes and Master Categoria ID Reset');

define('TEXT_SET_MASTER_CATEGORIES_ID', '<strong>WARNING:</strong> You must set the MASTER CATEGORIES ID before changing Linked Categories');

// copy category to category linked
define('TEXT_INFO_COPY_ALL_PRODUCTS_TO_CATEGORY_LINKED', '<strong>Copy ALL Produtos in a Categoria as LINKED Produtos to another Categoria ...</strong><br />Example: Using 8 and 22 would Link ALL Produtos in Categoria 8 to Categoria 22');
define('TEXT_INFO_COPY_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', 'Select All Produtos in Categoria: ');
define('TEXT_INFO_COPY_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', 'Link to Categoria: ');
define('BUTTON_COPY_CATEGORY_LINKED', 'Copy Produtos as Linked ');

define('WARNING_PRODUCTS_LINK_TO_CATEGORY_REMOVED', 'ATEN&Ccedil;&Atilde;O: Produto has been reset and is no longer part of this Categoria ...');
define('WARNING_COPY_LINKED', 'ATEN&Ccedil;&Atilde;O: ');
define('WARNING_COPY_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', 'Invalid Categoria to link Produtos From: ');
define('WARNING_COPY_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', 'Invalid Categoria to link Produtos To: ');
define('WARNING_NO_CATEGORIES_ID', 'Aten&ccedil;&atilde;o: no Categorias were selected ... no changes were made');
define('SUCCESS_COPY_LINKED', 'Successful update of Produtos as Linked ... ');
define('SUCCESS_COPY_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', 'Valid Categoria to link Produtos From: ');
define('SUCCESS_COPY_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', 'Valid Categoria to link Produtos To: ');
define('WARNING_COPY_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED_MISSING', 'WARNING: Copy completed to Invalid Category to Link: ');

define('WARNING_COPY_FROM_IN_TO_LINKED', '<strong>ATEN&Ccedil;&Atilde;O: No changes made products are already linked ... </strong>');

// remove category to category linked
define('TEXT_INFO_REMOVE_ALL_PRODUCTS_TO_CATEGORY_LINKED', '<strong>Remove ALL Produtos in a Categoria that are LINKED Produtos to another Categoria ...</strong><br />Example: Using 8 and 22 would Unlink ALL Produtos in Categoria 8 from Categoria 22');
define('TEXT_INFO_REMOVE_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', 'Select All Produtos in Categoria: ');
define('TEXT_INFO_REMOVE_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', 'Remove from being Linked to Categoria: ');
define('BUTTON_REMOVE_CATEGORY_LINKED', 'Remove Produtos as Linked ');

define('WARNING_REMOVE_LINKED', 'ATEN&Ccedil;&Atilde;O: ');
define('WARNING_REMOVE_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', 'Invalid Categoria to remove link Produtos From: ');
define('WARNING_REMOVE_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', 'Invalid Categoria to remove link Produtos To: ');
define('SUCCESS_REMOVE_LINKED', 'Successful removal of Produtos as Linked ... ');
define('SUCCESS_REMOVE_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', 'Valid Categoria to remove linked Produtos From: ');
define('SUCCESS_REMOVE_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', 'Valid Categoria to remove linked Produtos To: ');

define('WARNING_REMOVE_FROM_IN_TO_LINKED', '<strong>ATEN&Ccedil;&Atilde;O: No changes made no products were linked ... </strong>');

define('WARNING_MASTER_CATEGORIES_ID_CONFLICT', '<strong>WARNING: MASTER CATEGORIES ID CONFLICT!! </strong>');
define('TEXT_INFO_MASTER_CATEGORIES_ID_CONFLICT', '<strong>Master Categories ID is: </strong>');
define('TEXT_INFO_MASTER_CATEGORIES_ID_PURPOSE', 'NOTE: Master Category is used for pricing purposes where the product category affects the pricing on linked products, example: Sales<br />');
define('WARNING_MASTER_CATEGORIES_ID_CONFLICT_FIX', 'To fix this problem, you have been redirected to the first product of conflict. Re-assign the Master Categories ID so that it is no longer the Products Master Category ID for the Category that you are trying to remove it from and try again. When all conflicts have been corrected, you will then be able to complete the removal that you requested.');
define('TEXT_MASTER_CATEGORIES_ID_CONFLICT_FROM', ' Conflicting From Category: ');
define('TEXT_MASTER_CATEGORIES_ID_CONFLICT_TO', ' Conflicting To Category: ');
define('SUCCESS_MASTER_CATEGORIES_ID', 'Successful update of Product to Categories Links ...');
define('WARNING_MASTER_CATEGORIES_ID', 'WARNING: No Master Category is set!');

define('TEXT_PRODUCTS_ID_INVALID', 'ATEN&Ccedil;&Atilde;O: INVALID PRODUCTS ID OR NO PRODUCT SELECT');
define('TEXT_PRODUCTS_ID_NOT_REQUIRED', 'Note: A Produto ID does not need to be set to use Link All Produtos from one Categoria to another Categoria.<br />However, setting a valid Produtos ID will display all the available Categorias and their ID numbers.');

// reset all products to new master_categories_id
// copy category to category linked
define('TEXT_INFO_RESET_ALL_PRODUCTS_TO_CATEGORY_MASTER', '<strong>Reset ALL Produtos in the selected Categoria to use the selected Categoria as the new Master Categorias ID ...</strong><br />Example: Resetting Categoria 22 would set ALL Produtos in Categoria 22 to use Categoria 22 as the Master Categoria ID');
define('TEXT_INFO_RESET_ALL_PRODUCTS_TO_CATEGORY_FROM_MASTER', 'Reset the Master Categorias ID for All Produtos in Categoria: ');
define('BUTTON_RESET_CATEGORY_MASTER', 'Reset Master Categorias ID');

define('WARNING_RESET_ALL_PRODUCTS_TO_CATEGORY_FROM_MASTER', 'ATEN&Ccedil;&Atilde;O: Invalid Categoria selected ...');
define('SUCCESS_RESET_ALL_PRODUCTS_TO_CATEGORY_FROM_MASTER', 'Successful update of all Produtos to new Master Categorias ID for Categoria: ');
