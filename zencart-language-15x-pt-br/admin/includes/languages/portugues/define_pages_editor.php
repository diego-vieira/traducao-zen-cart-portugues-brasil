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
// $Id: define_pages_editor.php 1969 2005-09-13 06:57:21Z drbyte $
//

define('HEADING_TITLE', 'Editor de P&aacute;ginas Definidas para: ');
define('NAVBAR_TITLE', 'Editor de P&aacute;ginas Definidas');

define('TEXT_INFO_EDIT_PAGE', 'Selecione uma p&aacute;gina para editar:');

define('TEXT_INFO_MAIN_PAGE', 'P&aacute;gina Principal');

define('TEXT_INFO_SHIPPINGINFO', 'Frete e Reembolso');
define('TEXT_INFO_PRIVACY', 'Privacidade');
define('TEXT_INFO_CONDITIONS', 'Condi&ccedil;&otilde;es de Uso');
define('TEXT_INFO_CONTACT_US', 'Fale Conosco');
define('TEXT_INFO_CHECKOUT_SUCCESS', 'Sucesso na Compra');

define('TEXT_INFO_PAGE_2', 'P&aacute;gina 2');
define('TEXT_INFO_PAGE_3', 'P&aacute;gina 3');
define('TEXT_INFO_PAGE_4', 'P&aacute;gina 4');

define('TEXT_FILE_DOES_NOT_EXIST', 'O arquivo n&atilde;o existe: %s');

define('ERROR_FILE_NOT_WRITEABLE', 'Erro: Eu n&atilde;o pude escrever neste arquivo. Por favor, configure as permiss&otilde;es para: %s');

define('TEXT_INFO_SELECT_FILE', 'Selecione um arquivo para editar ...');
define('TEXT_INFO_EDITING', 'Editando arquivo:');

define('TEXT_INFO_CAUTION','Nota: voc&ecirc; deve sempre editar os arquivos localizados no seu diret&oacute;rio do seu tema atual., Exemplo: /languages/' . $_SESSION['language'] . '/html_includes/' . $template_dir . '<br />Tenha certeza que backups tenham sido feitos antes de mudar estes arquivos.');
?>