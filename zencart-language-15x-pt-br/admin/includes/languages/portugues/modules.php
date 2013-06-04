<?php
/**
 * @package admin
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: modules.php 19287 2011-07-28 15:51:25Z drbyte $
 */

define('HEADING_TITLE_MODULES_PAYMENT', 'M&oacute;dulos de Forma de Pagamento');
define('HEADING_TITLE_MODULES_SHIPPING', 'M&oacute;dulos de Frete');
define('HEADING_TITLE_MODULES_ORDER_TOTAL', 'M&oacute;dulos de Total da Venda');
define('HEADING_TITLE_MODULES_PRODUCT_TYPES', 'M&oacute;dulos do Tipo de Produto');

define('TABLE_HEADING_MODULES', 'M&oacute;dulos');
define('TABLE_HEADING_SORT_ORDER', 'Ordem');
define('TABLE_HEADING_ORDERS_STATUS','Estado das Vendas');
define('TABLE_HEADING_ACTION', 'A&ccedil;&atilde;o');

define('TEXT_MODULE_DIRECTORY', 'Diret&oacute;rio de M&oacute;dulo:');
define('WARNING_MODULES_SORT_ORDER','ATEN&Ccedil;&Atilde;O: VOC&Ecirc; POSSUI ORDEM DE AMOSTRAGEM DUPLICADAS NO QUAL RESULTAR&Aacute; EM ERROS DE C&Aacute;LCULO<br />POR FAVOR, CORRIJA ESTES ERROS AGORA!');
define('ERROR_MODULE_FILE_NOT_FOUND', 'ERROR: module not loaded due to missing language file: ');
define('TEXT_EMAIL_SUBJECT_ADMIN_SETTINGS_CHANGED', 'ALERT: Your Admin settings have been changed in your online store.');
define('TEXT_EMAIL_MESSAGE_ADMIN_SETTINGS_CHANGED', 'This is an automated email from your Zen Cart store to alert you of a change that was just made to your administrative settings: ' . "\n\n" . 'NOTE: Admin settings have been CHANGED for the [%s] module, by your Zen Cart admin user %s.' . "\n\n" . 'If you did not initiate these changes, it is advisable that you verify the settings immediately.' . "\n\n" . 'If you are already aware of these changes, you can ignore this automated email.');
define('TEXT_EMAIL_MESSAGE_ADMIN_MODULE_INSTALLED', 'This is an automated email from your Zen Cart store to alert you of a change that was just made to your administrative settings: ' . "\n\n" . 'NOTE: Admin settings have been changed. The [%s] module has been INSTALLED by your Zen Cart admin user %s.' . "\n\n" . 'If you did not initiate these changes, it is advisable that you verify the settings immediately.' . "\n\n" . 'If you are already aware of these changes, you can ignore this automated email.');
define('TEXT_EMAIL_MESSAGE_ADMIN_MODULE_REMOVED', 'This is an automated email from your Zen Cart store to alert you of a change that was just made to your administrative settings: ' . "\n\n" . 'NOTE: Admin settings have been changed. The [%s] module has been REMOVED by your Zen Cart admin user %s.' . "\n\n" . 'If you did not initiate these changes, it is advisable that you verify the settings immediately.' . "\n\n" . 'If you are already aware of these changes, you can ignore this automated email.');
define('TEXT_DELETE_INTRO', 'Are you sure you want to remove this module?');
define('TEXT_WARNING_SSL_EDIT', 'ALERT: <a href="http://tutorials.zen-cart.com/index.php?article=14" target="_blank">For security reasons, Editing of this module is disabled until your Admin is configured for SSL</a>.');
define('TEXT_WARNING_SSL_INSTALL', 'ALERT: <a href="http://tutorials.zen-cart.com/index.php?article=14" target="_blank">For security reasons, Installation of this module is disabled until your Admin is configured for SSL</a>.');