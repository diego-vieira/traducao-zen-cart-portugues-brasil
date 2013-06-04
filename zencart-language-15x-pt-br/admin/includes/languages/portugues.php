<?php
/**
 * @package admin
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: english.php 19537 2011-09-20 17:14:44Z drbyte $
 */
if (!defined('IS_ADMIN_FLAG'))
{
 die('Illegal Access');
}

// added defines for header alt and text
define('HEADER_ALT_TEXT', 'Admin Powered by Zen Cart :: The Art of E-Commerce');
define('HEADER_LOGO_WIDTH', '200px');
define('HEADER_LOGO_HEIGHT', '70px');
define('HEADER_LOGO_IMAGE', 'logo.gif');

// look in your $PATH_LOCALE/locale directory for available locales..
setlocale(LC_TIME, 'en_US');
define('DATE_FORMAT_SHORT', '%d/%m/%Y'); // this is used for strftime()
define('DATE_FORMAT_LONG', '%A, %d de %B de %Y'); // this is used for strftime()
define('DATE_FORMAT', 'd/m/Y'); // this is used for date()
define('PHP_DATE_TIME_FORMAT', 'd/m/Y H:i:s'); // this is used for date()
define('DATE_TIME_FORMAT', DATE_FORMAT_SHORT . ' %H:%M:%S');
define('DATE_FORMAT_SPIFFYCAL', 'dd/MM/yyyy'); //Use only 'dd', 'MM' and 'yyyy' here in any order

////
// Return date in raw format
// $date should be in format mm/dd/yyyy
// raw date is in format YYYYMMDD, or DDMMYYYY
function zen_date_raw($date, $reverse = false) {
 if ($reverse) {
  return substr($date, 0, 2) . substr($date, 3, 2) . substr($date, 6, 4);
 } else {
  return substr($date, 6, 4) . substr($date, 3, 2) . substr($date, 0, 2);
 }
}

// removed for meta tags
// page title
//define('TITLE', 'Zen Cart');

// include template specific meta tags defines
 if (file_exists(DIR_FS_CATALOG_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/meta_tags.php')) {
  $template_dir_select = $template_dir . '/';
 } else {
  $template_dir_select = '';
 }
 require(DIR_FS_CATALOG_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select . 'meta_tags.php');

// meta tags
define('ICON_METATAGS_ON', 'Meta Tags Definidas');
define('ICON_METATAGS_OFF', 'Meta Tags N&atilde;o Definidas');
define('TEXT_LEGEND_META_TAGS', 'Meta Tags Definida:');
define('TEXT_INFO_META_TAGS_USAGE', '<strong>NOTA:</strong> The Site/Tagline is your defined definition for your site in the meta_tags.php file.');

// Global entries for the <html> tag
define('HTML_PARAMS','dir="ltr" lang="pt-br"');

// charset for web pages and emails
define('CHARSET', 'utf-8');

// header text in includes/header.php
define('HEADER_TITLE_TOP', 'Administra&ccedil;&atilde;o');
define('HEADER_TITLE_SUPPORT_SITE', 'Site de Suporte');
define('HEADER_TITLE_ONLINE_CATALOG', 'Loja');
define('HEADER_TITLE_VERSION', 'Vers&atilde;o');
define('HEADER_TITLE_ACCOUNT', 'Account');
define('HEADER_TITLE_LOGOFF', 'Sair');
//define('HEADER_TITLE_ADMINISTRATION', 'Administration');

// Define the name of your Gift Certificate as Gift Voucher, Gift Certificate, Zen Cart Dollars, etc. here for use through out the shop
 define('TEXT_GV_NAME','Vale Presente');
 define('TEXT_GV_NAMES','Vales Presente');
 define('TEXT_DISCOUNT_COUPON', 'Cupom de Desconto');

// used for redeem code, redemption code, or redemption id
 define('TEXT_GV_REDEEM','C&oacute;digo do Cupom');

// text for gender
define('MALE', 'Masculino');
define('FEMALE', 'Feminino');

// text for date of birth example
define('DOB_FORMAT_STRING', 'dd/mm/yyyy');

// configuration box text in includes/boxes/configuration.php
define('BOX_HEADING_CONFIGURATION', 'Configura&ccedil;&atilde;o');
define('BOX_CONFIGURATION_MY_STORE', 'Minha Loja');
define('BOX_CONFIGURATION_MINIMUM_VALUES', 'Minimum Values');
define('BOX_CONFIGURATION_MAXIMUM_VALUES', 'Maximum Values');
define('BOX_CONFIGURATION_IMAGES', 'Images');
define('BOX_CONFIGURATION_CUSTOMER_DETAILS', 'Customer Details');
define('BOX_CONFIGURATION_SHIPPING_PACKAGING', 'Shipping/Packaging');
define('BOX_CONFIGURATION_PRODUCT_LISTING', 'Product Listing');
define('BOX_CONFIGURATION_STOCK', 'Stock');
define('BOX_CONFIGURATION_LOGGING', 'Log');
define('BOX_CONFIGURATION_EMAIL_OPTIONS', 'E-Mail Options');
define('BOX_CONFIGURATION_ATTRIBUTE_OPTIONS', 'Attribute Settings');
define('BOX_CONFIGURATION_GZIP_COMPRESSION', 'GZip Compression');
define('BOX_CONFIGURATION_SESSIONS', 'Sessions');
define('BOX_CONFIGURATION_REGULATIONS', 'Regulations');
define('BOX_CONFIGURATION_GV_COUPONS', 'GV Coupons');
define('BOX_CONFIGURATION_CREDIT_CARDS', 'Credit Cards');
define('BOX_CONFIGURATION_PRODUCT_INFO', 'Product Info');
define('BOX_CONFIGURATION_LAYOUT_SETTINGS', 'Layout Settings');
define('BOX_CONFIGURATION_WEBSITE_MAINTENANCE', 'Website Maintenance');
define('BOX_CONFIGURATION_NEW_LISTING', 'New Listing');
define('BOX_CONFIGURATION_FEATURED_LISTING', 'Featured Listing');
define('BOX_CONFIGURATION_ALL_LISTING', 'All Listing');
define('BOX_CONFIGURATION_INDEX_LISTING', 'Index Listing');
define('BOX_CONFIGURATION_DEFINE_PAGE_STATUS', 'Define Page Status');
define('BOX_CONFIGURATION_EZPAGES_SETTINGS', 'EZ-Pages Settings');

// modules box text
define('BOX_HEADING_MODULES', 'M&oacute;dulos');
define('BOX_MODULES_PAYMENT', 'Pagamento');
define('BOX_MODULES_SHIPPING', 'Frete');
define('BOX_MODULES_ORDER_TOTAL', 'Total da Venda');
define('BOX_MODULES_PRODUCT_TYPES', 'Tipos de Produto');

// Categorias box text in includes/boxes/catalog.php
define('BOX_HEADING_CATALOG', 'Loja');
define('BOX_CATALOG_CATEGORIES_PRODUCTS', 'Categorias/Produtos');
define('BOX_CATALOG_PRODUCT_TYPES', 'Tipos de Produto');
define('BOX_CATALOG_CATEGORIES_OPTIONS_NAME_MANAGER', 'Gerenciador de Nome de Op&ccedil;&atilde;o');
define('BOX_CATALOG_CATEGORIES_OPTIONS_VALUES_MANAGER', 'Gerenciador de Valor de Op&ccedil;&atilde;o');
define('BOX_CATALOG_MANUFACTURERS', 'Fabricantes');
define('BOX_CATALOG_REVIEWS', 'Avalia&ccedil;&otilde;es');
define('BOX_CATALOG_SPECIALS', 'Especiais');
define('BOX_CATALOG_PRODUCTS_EXPECTED', 'Produtos Futuros');
define('BOX_CATALOG_SALEMAKER', 'Criador de Promo&ccedil;&otilde;es');
define('BOX_CATALOG_PRODUCTS_PRICE_MANAGER', 'Gerenciador de Pre&ccedil;os de Produto');
define('BOX_CATALOG_PRODUCT', 'Product');
define('BOX_CATALOG_PRODUCTS_TO_CATEGORIES', 'Products to Categories');

// customers box text in includes/boxes/customers.php
define('BOX_HEADING_CUSTOMERS', 'Clientes');
define('BOX_CUSTOMERS_CUSTOMERS', 'Clientes');
define('BOX_CUSTOMERS_ORDERS', 'Vendas');
define('BOX_CUSTOMERS_GROUP_PRICING', 'Grupo de Pre&ccedil;os');
define('BOX_CUSTOMERS_PAYPAL', 'PayPal IPN');
define('BOX_CUSTOMERS_INVOICE', 'Invoice');
define('BOX_CUSTOMERS_PACKING_SLIP', 'Packing Slip');

// taxes box text in includes/boxes/taxes.php
define('BOX_HEADING_LOCATION_AND_TAXES', 'Locais / Impostos');
define('BOX_TAXES_COUNTRIES', 'Pa&iacute;ses');
define('BOX_TAXES_ZONES', 'Zonas');
define('BOX_TAXES_GEO_ZONES', 'Defini&ccedil;&otilde;es de Zonas');
define('BOX_TAXES_TAX_CLASSES', 'Tipos de Impostos');
define('BOX_TAXES_TAX_RATES', 'Taxas de Imposto');

// reports box text in includes/boxes/reports.php
define('BOX_HEADING_REPORTS', 'Relat&oacute;rios');
define('BOX_REPORTS_PRODUCTS_VIEWED', 'Produtos Vistos');
define('BOX_REPORTS_PRODUCTS_PURCHASED', 'Produtos Mais Vendidos');
define('BOX_REPORTS_ORDERS_TOTAL', 'Valor Total de Compras por Cliente');
define('BOX_REPORTS_PRODUCTS_LOWSTOCK', 'Produtos com Estoque Baixo');
define('BOX_REPORTS_CUSTOMERS_REFERRALS', 'Refer&ecirc;ncias de Clientes');

// tools text
define('BOX_HEADING_TOOLS', 'Ferramentas');
define('BOX_TOOLS_TEMPLATE_SELECT', 'Sele&ccedil;&atilde;o de Tema');
define('BOX_TOOLS_BACKUP', 'Backup do Banco de Dados');
define('BOX_TOOLS_BANNER_MANAGER', 'Gerenciador de Banner');
define('BOX_TOOLS_CACHE', 'Controle de Cache');
define('BOX_TOOLS_DEFINE_LANGUAGE', 'Definir Idiomas');
define('BOX_TOOLS_FILE_MANAGER', 'Gerenciador de Arquivo');
define('BOX_TOOLS_MAIL', 'Enviar E-mail');
define('BOX_TOOLS_NEWSLETTER_MANAGER', 'Gerenciador de Notifica&ccedil;&otilde;es de Produtos e Newsletter');
define('BOX_TOOLS_SERVER_INFO', 'Informa&ccedil;&otilde;es de Vers&atilde;o/Servidor');
define('BOX_TOOLS_WHOS_ONLINE', 'Quem est&aacute; Online');
define('BOX_TOOLS_STORE_MANAGER', 'Gerenciador da Loja');
define('BOX_TOOLS_DEVELOPERS_TOOL_KIT', 'Caixa de Ferramentas de Desenvolvedores');
define('BOX_TOOLS_SQLPATCH','Instalar Patches SQL');
define('BOX_TOOLS_EZPAGES','P&aacute;ginas EZ');

define('BOX_HEADING_EXTRAS', 'Extras');

// define pages editor files
define('BOX_TOOLS_DEFINE_PAGES_EDITOR','Editor de P&aacute;ginas Definidas');
define('BOX_TOOLS_DEFINE_MAIN_PAGE', 'P&aacute;gina Principal');
define('BOX_TOOLS_DEFINE_CONTACT_US','Fale Conosco');
define('BOX_TOOLS_DEFINE_PRIVACY','Privacidade');
define('BOX_TOOLS_DEFINE_SHIPPINGINFO','Frete e Devolu&ccedil;&otilde;es');
define('BOX_TOOLS_DEFINE_CONDITIONS','Condi&ccedil;&otilde;es de Uso');
define('BOX_TOOLS_DEFINE_CHECKOUT_SUCCESS','Pagamento Efetuado com Sucesso');
define('BOX_TOOLS_DEFINE_PAGE_2','P&aacute;gina 2');
define('BOX_TOOLS_DEFINE_PAGE_3','P&aacute;gina 3');
define('BOX_TOOLS_DEFINE_PAGE_4','P&aacute;gina 4');

// localization box text
define('BOX_HEADING_LOCALIZATION', 'Localiza&ccedil;&atilde;o');
define('BOX_LOCALIZATION_CURRENCIES', 'Moedas');
define('BOX_LOCALIZATION_LANGUAGES', 'Idiomas');
define('BOX_LOCALIZATION_ORDERS_STATUS', 'Estado das Vendas');

// gift vouchers box text in includes/boxes/gv_admin.php
define('BOX_HEADING_GV_ADMIN', TEXT_GV_NAME . '/Cupons');
define('BOX_GV_ADMIN_QUEUE', 'Fila de ' . TEXT_GV_NAMES);
define('BOX_GV_ADMIN_MAIL', 'Enviar ' . TEXT_GV_NAME);
define('BOX_GV_ADMIN_SENT', TEXT_GV_NAMES . ' Enviado');
define('BOX_COUPON_ADMIN','Administrar Cupons');
define('BOX_COUPON_RESTRICT','Coupon Restrictions');

// admin access box text
define('BOX_HEADING_ADMIN_ACCESS', 'Admin Access Management');
define('BOX_ADMIN_ACCESS_USERS', 'Admin Users');
define('BOX_ADMIN_ACCESS_PROFILES', 'Admin Profiles');
define('BOX_ADMIN_ACCESS_PAGE_REGISTRATION', 'Admin Page Registration');
define('BOX_ADMIN_ACCESS_LOGS', 'Admin Activity Logs');

define('IMAGE_RELEASE', 'Resgatar ' . TEXT_GV_NAME);

// javascript messages
define('JS_ERROR', 'Alguns erros ocorreram durante o processamento do seu formul&aacute;rio!\nPor favor, fa&ccedil;a as corre&ccedil;&otilde;es necess&aacute;rias:\n\n');

define('JS_OPTIONS_VALUE_PRICE', '* O novo atributo do produto precisa de um pre&ccedil;o\n');
define('JS_OPTIONS_VALUE_PRICE_PREFIX', '* O novo atributo do produto precisa de um prefixo no pre&ccedil;o\n');

define('JS_PRODUCTS_NAME', '* O novo produto precisa de um nome\n');
define('JS_PRODUCTS_DESCRIPTION', '* O novo produto precisa de uma descri&ccedil;&atilde;o\n');
define('JS_PRODUCTS_PRICE', '* O novo produto precisa de um pre&ccedil;o\n');
define('JS_PRODUCTS_WEIGHT', '* O novo produto precisa de um peso\n');
define('JS_PRODUCTS_QUANTITY', '* O novo produto precisa de uma quantidade\n');
define('JS_PRODUCTS_MODEL', '* O novo produto precisa de um modelo\n');
define('JS_PRODUCTS_IMAGE', '* O novo produto precisa de uma imagem\n');

define('JS_SPECIALS_PRODUCTS_PRICE', '* Um novo pre&ccedil;o para este produto precisa ser configurado\n');

define('JS_GENDER', '* O item \'G&ecirc;nero\' precisa ser escolhido.\n');
define('JS_FIRST_NAME', '* O campo \'Primeiro Nome\' precisa ter pelo menos ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' caracteres.\n');
define('JS_LAST_NAME', '* O campo \'&Uacute;ltimo Nome\' precisa ter pelo menos ' . ENTRY_LAST_NAME_MIN_LENGTH . ' caracteres.\n');
define('JS_DOB', '* O campo \'Data de Anivers&aacute;rio\' precisa ser no formato: xx/xx/xxxx (dia/m&ecirc;s/ano).\n');
define('JS_EMAIL_ADDRESS', '* O campo \'E-Mail\' precisa ter pelo menos ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' caracteres.\n');
define('JS_ADDRESS', '* O campo \'Endere&ccedil;o\' precisa ter pelo menos ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' caracteres.\n');
define('JS_POST_CODE', '* O campo \'CEP\' precisa ter pelo menos ' . ENTRY_POSTCODE_MIN_LENGTH . ' caracteres.\n');
define('JS_CITY', '* O campo \'Cidade\' precisa ter pelo menos ' . ENTRY_CITY_MIN_LENGTH . ' caracteres.\n');
define('JS_STATE', '* O item \'Estado\' precisa ser selecionado.\n');
define('JS_STATE_SELECT', '-- Selecione --');
define('JS_ZONE', '* O item \'Estado\' precisa ser escolhido de uma lista para este pa&iacute;s.');
define('JS_COUNTRY', '* Um \'Pa&iacute;s\' precisa ser escolhido.\n');
define('JS_TELEPHONE', '* O campo \'Telefone\' precisa ter pelo menos ' . ENTRY_TELEPHONE_MIN_LENGTH . ' caracteres.\n');

define('JS_ORDER_DOES_NOT_EXIST', 'A Venda N&uacute;mero %s n&atilde;o existe!');

define('CATEGORY_PERSONAL', 'Pessoal');
define('CATEGORY_ADDRESS', 'Endere&ccedil;o');
define('CATEGORY_CONTACT', 'Contato');
define('CATEGORY_COMPANY', 'Empresa');
define('CATEGORY_OPTIONS', 'Op&ccedil;&otilde;es');

define('ENTRY_GENDER', 'G&ecirc;nero:');
define('ENTRY_GENDER_ERROR', '&nbsp;<span class="errorText">obrigat&oacute;rio</span>');
define('ENTRY_FIRST_NAME', 'Primeiro Nome:');
define('ENTRY_FIRST_NAME_ERROR', '&nbsp;<span class="errorText">m&iacute;nimo ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' caracteres</span>');
define('ENTRY_LAST_NAME', '&Uacute;ltimo Nome:');
define('ENTRY_LAST_NAME_ERROR', '&nbsp;<span class="errorText">m&iacute;nimo ' . ENTRY_LAST_NAME_MIN_LENGTH . ' caracteres</span>');
define('ENTRY_DATE_OF_BIRTH', 'Data de Anivers&aacute;rio:');
define('ENTRY_DATE_OF_BIRTH_ERROR', '&nbsp;<span class="errorText">(ex. 21/05/1970)</span>');
define('ENTRY_EMAIL_ADDRESS', 'E-Mail:');
define('ENTRY_EMAIL_ADDRESS_ERROR', '&nbsp;<span class="errorText">m&iacute;nimo ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' caracteres</span>');
define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', '&nbsp;<span class="errorText">The email address doesn\'t appear to be valid!</span>');
define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', '&nbsp;<span class="errorText">This email address already exists!</span>');
define('ENTRY_COMPANY', 'Nome da Empresa:');
define('ENTRY_COMPANY_ERROR', '');
define('ENTRY_PRICING_GROUP', 'Grupo de Desconto de Pre&ccedil;o');
define('ENTRY_STREET_ADDRESS', 'Endere&ccedil;o (Rua, Av., etc):');
define('ENTRY_STREET_ADDRESS_ERROR', '&nbsp;<span class="errorText">m&iacute;nimo ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' caracteres</span>');
define('ENTRY_SUBURB', 'Bairro:');
define('ENTRY_SUBURB_ERROR', '');
define('ENTRY_POST_CODE', 'CEP:');
define('ENTRY_POST_CODE_ERROR', '&nbsp;<span class="errorText">m&iacute;nimo ' . ENTRY_POSTCODE_MIN_LENGTH . ' caracteres</span>');
define('ENTRY_CITY', 'Cidade:');
define('ENTRY_CITY_ERROR', '&nbsp;<span class="errorText">m&iacute;nimo ' . ENTRY_CITY_MIN_LENGTH . ' caracteres</span>');
define('ENTRY_STATE', 'Estado:');
define('ENTRY_STATE_ERROR', '&nbsp;<span class="errorText">obrigat&oacute;rio</span>');
define('ENTRY_COUNTRY', 'Pa&iacute;s:');
define('ENTRY_COUNTRY_ERROR', '');
define('ENTRY_TELEPHONE_NUMBER', 'Telefone:');
define('ENTRY_TELEPHONE_NUMBER_ERROR', '&nbsp;<span class="errorText">m&iacute;nimo ' . ENTRY_TELEPHONE_MIN_LENGTH . ' caracteres</span>');
define('ENTRY_FAX_NUMBER', 'Fax:');
define('ENTRY_FAX_NUMBER_ERROR', '');
define('ENTRY_NEWSLETTER', 'Newsletter:');
define('ENTRY_NEWSLETTER_YES', 'Inscrito');
define('ENTRY_NEWSLETTER_NO', 'N&atilde;o Inscrito');
define('ENTRY_NEWSLETTER_ERROR', '');

define('ERROR_PASSWORDS_NOT_MATCHING', 'Password and confirmation must match');
define('ENTRY_PASSWORD_CHANGE_ERROR', '<strong>Sorry, your new password was rejected.</strong><br />');
define('ERROR_PASSWORD_RULES', 'Passwords must contain both letters and numbers, must be at least %s characters long, and must not be the same as the last 4 passwords used. Passwords expire every 90 days.');
define('ERROR_TOKEN_EXPIRED_PLEASE_RESUBMIT', 'ERROR: Sorry, there was an error processing your data. Please re-submit the information again.');

// images
//define('IMAGE_ANI_SEND_EMAIL', 'Sending E-Mail');
define('IMAGE_BACK', 'Voltar');
define('IMAGE_BACKUP', 'Backup');
define('IMAGE_CANCEL', 'Cancelar');
define('IMAGE_CONFIRM', 'Confirmar');
define('IMAGE_COPY', 'Copiar');
define('IMAGE_COPY_TO', 'Copiar Para');
define('IMAGE_DETAILS', 'Detalhes');
define('IMAGE_DELETE', 'Excluir');
define('IMAGE_EDIT', 'Editar');
define('IMAGE_EMAIL', 'E-mail');
define('IMAGE_GO', 'Go');
define('IMAGE_FILE_MANAGER', 'Gerenciador de Arquivo');
define('IMAGE_ICON_STATUS_GREEN', 'Ativo');
define('IMAGE_ICON_STATUS_GREEN_LIGHT', 'Marcar como Ativo');
define('IMAGE_ICON_STATUS_RED', 'Inativo');
define('IMAGE_ICON_STATUS_RED_LIGHT', 'Marcar como Inativo');
define('IMAGE_ICON_STATUS_RED_EZPAGES', 'Erro -- muitos tipos de conte&uacute;do/URL digitado');
define('IMAGE_ICON_STATUS_RED_ERROR', 'Erro');
define('IMAGE_ICON_INFO', 'Informa&ccedil;&atilde;o');
define('IMAGE_INSERT', 'Inserir');
define('IMAGE_LOCK', 'Trancar');
define('IMAGE_MODULE_INSTALL', 'Instalar M&oacute;dulo');
define('IMAGE_MODULE_REMOVE', 'Remover M&oacute;dulo');
define('IMAGE_MOVE', 'Mover');
define('IMAGE_NEW_BANNER', 'Novo Banner');
define('IMAGE_NEW_CATEGORY', 'Nova Categoria');
define('IMAGE_NEW_COUNTRY', 'Novo Pa&iacute;s');
define('IMAGE_NEW_CURRENCY', 'Nova Moeda');
define('IMAGE_NEW_FILE', 'Novo Arquivo');
define('IMAGE_NEW_FOLDER', 'Nova Pasta');
define('IMAGE_NEW_LANGUAGE', 'Novo Idioma');
define('IMAGE_NEW_NEWSLETTER', 'Nova Newsletter');
define('IMAGE_NEW_PRODUCT', 'Novo Produto');
define('IMAGE_NEW_SALE', 'Nova Promo&ccedil;&atilde;o');
define('IMAGE_NEW_TAX_CLASS', 'Nova Classe de Imposto');
define('IMAGE_NEW_TAX_RATE', 'Nova Taxa de Imposto');
define('IMAGE_NEW_TAX_ZONE', 'Nova Zona de Imposto');
define('IMAGE_NEW_ZONE', 'Nova Zona');
define('IMAGE_OPTION_NAMES', 'Gerenciardo de Nomes de Op&ccedil;&otilde;es');
define('IMAGE_OPTION_VALUES', 'Gerenciador de Valores de Op&ccedil;&otilde;es');
define('IMAGE_ORDERS', 'Vendas');
define('IMAGE_ORDERS_INVOICE', 'Recibo');
define('IMAGE_ORDERS_PACKINGSLIP', 'Empacotamento');
define('IMAGE_PERMISSIONS', 'Edit Permissions');
define('IMAGE_PREVIEW', 'Prever');
define('IMAGE_RESTORE', 'Restaurar');
define('IMAGE_RESET', 'Resetar');
define('IMAGE_SAVE', 'Salvar');
define('IMAGE_SEARCH', 'Pesquisar');
define('IMAGE_SELECT', 'Selecionar');
define('IMAGE_SEND', 'Enviar');
define('IMAGE_SEND_EMAIL', 'Enviar E-mail');
define('IMAGE_SUBMIT', 'Submit');
define('IMAGE_UNLOCK', 'Destrancar');
define('IMAGE_UPDATE', 'Atualizar');
define('IMAGE_UPDATE_CURRENCIES', 'Atualizar Taxa de Troca');
define('IMAGE_UPLOAD', 'Enviar');
define('IMAGE_TAX_RATES','Taxa de Imposto');
define('IMAGE_DEFINE_ZONES','Definir Zonas');
define('IMAGE_PRODUCTS_PRICE_MANAGER', 'Gerenciador de Pre&ccedil;os de Produtos');
define('IMAGE_UPDATE_PRICE_CHANGES', 'Atualizar Mudan&ccedil;as nos Pre&ccedil;os');
define('IMAGE_ADD_BLANK_DISCOUNTS','Adicionar ' . DISCOUNT_QTY_ADD . ' Descontos em Branco');
define('IMAGE_CHECK_VERSION', 'Verificar Atualiza&ccedil;&atilde;o do Zen Cart');
define('IMAGE_PRODUCTS_TO_CATEGORIES', 'Gerenciador de Links de M&uacute;ltiplas Categorias');

define('IMAGE_ICON_STATUS_ON', 'Estado - Habilitado');
define('IMAGE_ICON_STATUS_OFF', 'Estado - Desabilitado');
define('IMAGE_ICON_LINKED', 'Produto est&aacute; Linkado');

define('IMAGE_REMOVE_SPECIAL','Remover Infomra&ccedil;&atilde;o de Pre&ccedil;o Especial');
define('IMAGE_REMOVE_FEATURED','Remover Informa&ccedil;&atilde;o de Produto em Destaque');
define('IMAGE_INSTALL_SPECIAL', 'Adicionar Informa&ccedil;&atilde;o de Pre&ccedil;o Especial');
define('IMAGE_INSTALL_FEATURED', 'Adicionar Informa&ccedil;&atilde;o de Produto em Destaque');

define('ICON_PRODUCTS_PRICE_MANAGER','Gerenciador de Pre&ccedil;os de Produtos');
define('ICON_COPY_TO', 'Copiar para');
define('ICON_CROSS', 'Falso');
define('ICON_CURRENT_FOLDER', 'Pasta Atual');
define('ICON_DELETE', 'Excluir');
define('ICON_EDIT', 'Editar');
define('ICON_ERROR', 'Erro');
define('ICON_FILE', 'Arquivo');
define('ICON_FILE_DOWNLOAD', 'Download');
define('ICON_FOLDER', 'Pasta');
//define('ICON_LOCKED', 'Locked');
define('ICON_MOVE', 'Mover');
define('ICON_PERMISSIONS', 'Permissions');
define('ICON_PREVIOUS_LEVEL', 'N&iacute;vel Anterior');
define('ICON_PREVIEW', 'Prever');
define('ICON_RESET', 'Resetar');
define('ICON_STATISTICS', 'Estat&iacute;sticas');
define('ICON_SUCCESS', 'Successo');
define('ICON_TICK', 'Verdadeiro');
//define('ICON_UNLOCKED', 'Unlocked');
define('ICON_WARNING', 'Aten&ccedil;&atilde;o');

// constants for use in zen_prev_next_display function
define('TEXT_RESULT_PAGE', 'P&aacute;gina %s de %d');
define('TEXT_DISPLAY_NUMBER_OF_ADMINS', 'Mostrando de <b>%d</b> &agrave; <b>%d</b> (de <b>%d</b> administradores)');
define('TEXT_DISPLAY_NUMBER_OF_BANNERS', 'Mostrando de <b>%d</b> &agrave; <b>%d</b> (de <b>%d</b> banners)');
define('TEXT_DISPLAY_NUMBER_OF_CATEGORIES', 'Mostrando de <b>%d</b> &agrave; <b>%d</b> (de <b>%d</b> categorias)');
define('TEXT_DISPLAY_NUMBER_OF_COUNTRIES', 'Mostrando de <b>%d</b> &agrave; <b>%d</b> (de <b>%d</b> pa&iacute;ses)');
define('TEXT_DISPLAY_NUMBER_OF_CUSTOMERS', 'Mostrando de <b>%d</b> &agrave; <b>%d</b> (de <b>%d</b> clientes)');
define('TEXT_DISPLAY_NUMBER_OF_CURRENCIES', 'Mostrando de <b>%d</b> &agrave; <b>%d</b> (de <b>%d</b> moedas)');
define('TEXT_DISPLAY_NUMBER_OF_FEATURED', 'Mostrando de <b>%d</b> &agrave; <b>%d</b> (de <b>%d</b> produtos em destaque)');
define('TEXT_DISPLAY_NUMBER_OF_LANGUAGES', 'Mostrando de <b>%d</b> &agrave; <b>%d</b> (de <b>%d</b> idiomas)');
define('TEXT_DISPLAY_NUMBER_OF_MANUFACTURERS', 'Mostrando de <b>%d</b> &agrave; <b>%d</b> (de <b>%d</b> fabricantes)');
define('TEXT_DISPLAY_NUMBER_OF_NEWSLETTERS', 'Mostrando de <b>%d</b> &agrave; <b>%d</b> (de <b>%d</b> newsletters)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS', 'Mostrando de <b>%d</b> &agrave; <b>%d</b> (de <b>%d</b> vendas)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS_STATUS', 'Mostrando de <b>%d</b> &agrave; <b>%d</b> (de <b>%d</b> estado de vendas)');
define('TEXT_DISPLAY_NUMBER_OF_PRICING_GROUPS', 'Mostrando de <b>%d</b> &agrave; <b>%d</b> (de <b>%d</b> grupos de pre&ccedil;o)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', 'Mostrando de <b>%d</b> &agrave; <b>%d</b> (de <b>%d</b> produtos)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCT_TYPES', 'Mostrando de <b>%d</b> &agrave; <b>%d</b> (de <b>%d</b> tipos de produto)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_EXPECTED', 'Mostrando de <b>%d</b> &agrave; <b>%d</b> (de <b>%d</b> produtos futuros)');
define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', 'Mostrando de <b>%d</b> &agrave; <b>%d</b> (de <b>%d</b> avalia&ccedil;&otilde;es de produto)');
define('TEXT_DISPLAY_NUMBER_OF_SALES', 'Mostrando de <b>%d</b> &agrave; <b>%d</b> (de <b>%d</b> promo&ccedil;&otilde;es)');
define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', 'Mostrando de <b>%d</b> &agrave; <b>%d</b> (de <b>%d</b> produtos em especial)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_CLASSES', 'Mostrando de <b>%d</b> &agrave; <b>%d</b> (de <b>%d</b> classes de imposto)');
define('TEXT_DISPLAY_NUMBER_OF_TEMPLATES', 'Mostrando de <b>%d</b> &agrave; <b>%d</b> (de <b>%d</b> associa&ccedil;&otilde;es de modelos)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_ZONES', 'Mostrando de <b>%d</b> &agrave; <b>%d</b> (de <b>%d</b> zona de imposto)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_RATES', 'Mostrando de <b>%d</b> &agrave; <b>%d</b> (de <b>%d</b> taxa de imposto)');
define('TEXT_DISPLAY_NUMBER_OF_ZONES', 'Mostrando de <b>%d</b> &agrave; <b>%d</b> (de <b>%d</b> zonas)');

define('PREVNEXT_BUTTON_PREV', '&lt;&lt;');
define('PREVNEXT_BUTTON_NEXT', '&gt;&gt;');


define('TEXT_DEFAULT', 'padr&atilde;o');
define('TEXT_SET_DEFAULT', 'Definir como padr&atilde;o');
define('TEXT_FIELD_REQUIRED', '&nbsp;<span class="fieldRequired">* Obrigat&oacute;rio</span>');

define('ERROR_NO_DEFAULT_CURRENCY_DEFINED', 'Erro: N&atilde;o existe nenhuma moeda padr&atilde;o configurada. Por favor, configure indo at&eacute;: Administra&ccedil;&atilde;o -> Ferramentas -> Localiza&ccedil;&atilde;o -> Moedas');

define('TEXT_CACHE_CATEGORIES', 'Caixa de Categorias');
define('TEXT_CACHE_MANUFACTURERS', 'Caixa de Fabricantes');
define('TEXT_CACHE_ALSO_PURCHASED', 'M&oacute;dulo Tamb&eacute;m Comprado');

define('TEXT_NONE', '--nenhum--');
define('TEXT_TOP', 'Topo');

define('ERROR_DESTINATION_DOES_NOT_EXIST', 'Erro: O destino n&atilde;o existe %s');
define('ERROR_DESTINATION_NOT_WRITEABLE', 'Erro: O destino n&atilde;o p&ocirc;de ser escrito %s');
define('ERROR_FILE_NOT_SAVED', 'Erro: O arquivo enviado n&atilde;o foi salvo.');
define('ERROR_FILETYPE_NOT_PermitirED', 'Erro: O tipo de arquivo enviado n&atilde;o &eacute; Permitido %s');
define('SUCCESS_FILE_SAVED_SUCCESSFULLY', 'Successo: Arquivo salvo com sucesso em %s');
define('WARNING_NO_FILE_UPLOADED', 'Aten&ccedil;&atilde;o: Nenhum arquivo foi enviado.');
define('WARNING_FILE_UPLOADS_DISABLED', 'Aten&ccedil;&atilde;o: O envio de arquivos est&aacute; desativado no arquivo de configura&ccedil;&atilde;o php.ini.');
define('ERROR_ADMIN_SECURITY_WARNING', 'Aten&ccedil;&atilde;o: Seu Login de Administrador n&atilde;o est&aacute; seguro. Voc&ecirc; est&aacute; usando os dados de login padr&atilde;o: Admin admin ou voc&ecirc; n&atilde;o removeu ou mudou: demo demoonly<br />O(s) login(s) deve(m) ser mudado(s) assim que poss&iacute;vel por quest&otilde;es de seguran&ccedil;a.<br />Acesse Ferramentas -> Configura&ccedil;&otilde;es de Administradores e mude ajuste o(s) login(s).<br />Para mais informa&ccedil;&otilde;es de Seguran&ccedil;a, por favor acesse o diret&oacute;rio /docs da sua loja');
define('WARNING_DATABASE_VERSION_OUT_OF_DATE','Seu banco de dados parece precisar de uma atualiza&ccedil;&atilde;o. Veja maiores informa&ccedil;&otilde;es em Ferramentas -> Informa&ccedil;&atilde;o do Servidor.');
define('WARN_DATABASE_VERSION_PROBLEM','true'); //set to false to turn off warnings about database version mismatches
define('WARNING_ADMIN_DOWN_FOR_MAINTENANCE', '<strong>ATEN&Ccedil;&Atilde;O:</strong> O site est&aacute; atualmente Desligado para Manuten&ccedil;&atilde;o...<br />NOTA: Voc&ecirc; n&atilde;o pode testar a maioria dos m&oacute;dulos de Pagamento e Frete no modo Manuten&ccedil;&atilde;o');
define('WARNING_BACKUP_CFG_FILES_TO_DELETE', 'ATEN&Ccedil;&Atilde;O: Estes arquivos devem ser exclu&iacute;dos para evitar vulnerabilidades de seguran&ccedil;a: ');
define('WARNING_INSTALL_DIRECTORY_EXISTS', 'Aten&ccedil;&atilde;o: O diret&oacute;rio de instala&ccedil;&atilde;o ainda existe em: ' . DIR_FS_CATALOG . 'zc_install. Por favor, remova este diret&oacute;rio por quest&otilde;es de seguran&ccedil;a.');
define('WARNING_CONFIG_FILE_WRITEABLE', 'Aten&ccedil;&atilde;o: As permiss&otilde;es para o seu arquivo de configura&ccedil;&atilde;o: %sincludes/configure.php est&atilde;o incorretas. Isto &eacute; um risco de seguran&ccedil;a - por favor, configure as permiss&otilde;es de usu&aacute;rio para este arquivo para Somente Leitura ou CHMOD 444. <a href="http://tutorials.zen-cart.com/index.php?article=90" target="_blank">Veja esta Nota</a>');
define('WARNING_COULD_NOT_LOCATE_LANG_FILE', 'ATEN&Ccedil;&Atilde;O: N&atilde;o foi poss&iacute;vel localizar o arquivo de idioma: ');
define('ERROR_MODULE_REMOVAL_PROHIBITED', 'ERRO: Remo&ccedil;&atilde;o do m&oacute;dulo n&atilde;o permitida: ');
define('WARNING_REVIEW_ROGUE_ACTIVITY', 'ALERT: Please review for possible XSS activity:');

define('_JANUARY', 'Janeiro');
define('_FEBRUARY', 'Fevereiro');
define('_MARCH', 'Mar&ccedil;o');
define('_APRIL', 'Abril');
define('_MAY', 'Maio');
define('_JUNE', 'Junho');
define('_JULY', 'Julho');
define('_AUGUST', 'Agosto');
define('_SEPTEMBER', 'Setembro');
define('_OCTOBER', 'Outubro');
define('_NOVEMBER', 'Novembro');
define('_DECEMBER', 'Dezembro');

define('TEXT_DISPLAY_NUMBER_OF_GIFT_VOUCHERS', 'Mostrando de <b>%d</b> &agrave; <b>%d</b> (de <b>%d</b> vale presentes)');
define('TEXT_DISPLAY_NUMBER_OF_COUPONS', 'Mostrando de <b>%d</b> &agrave; <b>%d</b> (de <b>%d</b> cupons)');

define('TEXT_VALID_PRODUCTS_LIST', 'Lista de Produtos');
define('TEXT_VALID_PRODUCTS_ID', 'ID do Produto');
define('TEXT_VALID_PRODUCTS_NAME', 'Nome do Produto');
define('TEXT_VALID_PRODUCTS_MODEL', 'Modelo do Produto');

define('TEXT_VALID_CATEGORIES_LIST', 'Lista de Categorias');
define('TEXT_VALID_CATEGORIES_ID', 'ID da Categoria');
define('TEXT_VALID_CATEGORIES_NAME', 'Nome da Categoria');

define('DEFINE_LANGUAGE','Definir Idioma:');

define('BOX_ENTRY_COUNTER_DATE','Contador de Cliques Iniciado:');
define('BOX_ENTRY_COUNTER','Contador de Cliques:');

// not installed
define('NOT_INSTALLED_TEXT','N&atilde;o Instalado');

// Produto Options Values Sort Order - option_values.php
 define('BOX_CATALOG_PRODUCT_OPTIONS_VALUES','Ordenador de Valores de Op&ccedil;&otilde;es ');

 define('TEXT_UPDATE_SORT_ORDERS_OPTIONS','<strong>Atualizar Ordem de Amostragem do Atributo pelo Valor de Op&ccedil;&atilde;o Padr&atilde;o</strong> ');
 define('TEXT_INFO_ATTRIBUTES_FEATURES_UPDATES','<strong>Atualizar a Ordem de Amostragem dos Atributos de Todos os Produtos</strong><br />para que fiquem igual a Ordem de Amostragem das Op&ccedil;&otilde;es de Valores:<br />');

// Produto Options Name Sort Order - option_values.php
 define('BOX_CATALOG_PRODUCT_OPTIONS_NAME','Ordenador dos Nomes de Op&ccedil;&atilde;o');

// Attributes only
 define('BOX_CATALOG_CATEGORIES_ATTRIBUTES_CONTROLLER','Controlador de Atributos');

// generic model
 define('TEXT_MODEL','Modelo:');

// column controller
 define('BOX_TOOLS_LAYOUT_CONTROLLER','Controlador das Caixas de Layout');

// check GV release queue and alert store owner
 define('SHOW_GV_QUEUE',true);
 define('TEXT_SHOW_GV_QUEUE','%s aguardando aprova&ccedil;&atilde;o ');
 define('IMAGE_GIFT_QUEUE', 'Fila de ' . TEXT_GV_NAME);
 define('IMAGE_ORDER','Venda');

 define('BOX_TOOLS_EMAIL_WELCOME','E-mail de Boas Vindas');

 define('IMAGE_DISPLAY','Mostrar');
 define('IMAGE_UPDATE_SORT','Atualizar Ordem de Amostragem');
 define('IMAGE_EDIT_PRODUCT','Editar Produto');
 define('IMAGE_EDIT_ATTRIBUTES','Editar Atributos');
 define('TEXT_NEW_PRODUCT', 'Produto na Categoria: &quot;%s&quot;');
 define('IMAGE_OPTIONS_VALUES','Nomes de Op&ccedil;&atilde;o de Valores de Op&ccedil;&atilde;o');
 define('TEXT_PRODUCTS_PRICE_MANAGER','GERENCIADOR DE PRE&Ccedil;OS');
 define('TEXT_PRODUCT_EDIT','EDITAR PRODUTO');
 define('TEXT_ATTRIBUTE_EDIT','EDITAR ATRIBUTOS');
 define('TEXT_PRODUCT_DETAILS','VER DETALHES');

// sale maker
 define('DEDUCTION_TYPE_DROPDOWN_0', 'Quantia a Deduzir');
 define('DEDUCTION_TYPE_DROPDOWN_1', 'Porcentagem');
 define('DEDUCTION_TYPE_DROPDOWN_2', 'Novo Pre&ccedil;o');

// Min and Units
 define('PRODUCTS_QUANTITY_MIN_TEXT_LISTING','M&iacute;n:');
 define('PRODUCTS_QUANTITY_UNIT_TEXT_LISTING','Unidades:');
 define('PRODUCTS_QUANTITY_IN_CART_LISTING','No Carrinho:');
 define('PRODUCTS_QUANTITY_ADD_ADDITIONAL_LISTING','Adicionar Adicional:');

 define('TEXT_PRODUCTS_MIX_OFF','*Nenhuma Op&ccedil;&atilde;o Mixada');
 define('TEXT_PRODUCTS_MIX_ON','*Com Op&ccedil;&atilde;o Mixada');

// search filters
 define('TEXT_INFO_SEARCH_DETAIL_FILTER','Filtro de Pesquisa: ');
 define('HEADING_TITLE_SEARCH_DETAIL','Pesquisar: ');
 define('HEADING_TITLE_SEARCH_DETAIL_REPORTS', 'Pesquisar por Produto(s) - Limitado por v&iacute;rgulas');
 define('HEADING_TITLE_SEARCH_DETAIL_REPORTS_NAME_MODEL', 'Pesquisar por Nome/Modelo dos Produtos');

 define('PREV_NEXT_PRODUCT', 'Produtos: ');
 define('TEXT_CATEGORIES_STATUS_INFO_OFF', '<span class="alert">*A Categoria est&aacute; Desabilitada</span>');
 define('TEXT_PRODUCTS_STATUS_INFO_OFF', '<span class="alert">*O Produto est&aacute; Desabilitado</span>');

// admin demo
 define('ADMIN_DEMO_ACTIVE','Demonstra&ccedil;&atilde;o da Administra&ccedil;&atilde;o est&aacute; atualmente Ativa. Algumas configura&ccedil;&atilde;o ser&atilde;o desabilitadas');
 define('ADMIN_DEMO_ACTIVE_EXCLUSION','Demonstra&ccedil;&atilde;o da Administra&ccedil;&atilde;o est&aacute; atualmente Ativa. Algumas configura&ccedil;&atilde;o ser&atilde;o desabilitadas - <strong>NOTA: Ignorado para Certos Administradores</strong>');
 define('ERROR_ADMIN_DEMO','Demonstra&ccedil;&atilde;o da Administra&ccedil;&atilde;o est&aacute; atualmente Ativa... a(s) op&ccedil;&atilde;o(&otilde;es) que voc&ecirc; est&aacute; tentando executar foi(ram) desativada(s)');

// Version Check notices
 define('TEXT_VERSION_CHECK_NEW_VER','Nova Vers&atilde;o Dispon&iacute;vel v');
 define('TEXT_VERSION_CHECK_NEW_PATCH','Novo PATCH Dispon&iacute;vel: v');
 define('TEXT_VERSION_CHECK_PATCH','patch');
 define('TEXT_VERSION_CHECK_DOWNLOAD','Fa&ccedil;a o Download Aqui');
 define('TEXT_VERSION_CHECK_CURRENT','Sua vers&atilde;o do Zen Cart&trade; parece ser a atual.');

// downloads manager
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_DOWNLOADS_MANAGER', 'Mostrando de <b>%d</b> &agrave; <b>%d</b> (de <b>%d</b> downloads)');
define('BOX_CATALOG_CATEGORIES_ATTRIBUTES_DOWNLOADS_MANAGER', 'Gerenciador de Downloads');

define('BOX_CATALOG_FEATURED','Produtos em Destaque');

define('ERROR_NOTHING_SELECTED', 'Nada foi selecionado... Nenhuma altera&ccedil;&atilde;o foi feita');
define('TEXT_STATUS_WARNING','<strong>NOTA:</strong> o estado ser&aacute; ativado/desativado quando as datas forem definidas');

define('TEXT_LEGEND_LINKED', 'Produto Linkado');
define('TEXT_MASTER_CATEGORIES_ID','Categoria Mestre do Produto:');
define('TEXT_LEGEND', 'LEGENDA: ');
define('TEXT_LEGEND_STATUS_OFF', 'Estado DESLIGADO ');
define('TEXT_LEGEND_STATUS_ON', 'Estado LIGADO ');

define('TEXT_INFO_MASTER_CATEGORIES_ID', '<strong>NOTA: A Categoria Mestre &eacute; usada para prop&oacute;sitos de pre&ccedil;o quando a<br />categoria do produto influencia nos pre&ccedil;os de produtos linkados, exemplo: Promo&ccedil;&otilde;es</strong>');
define('TEXT_YES', 'Sim');
define('TEXT_NO', 'N&atilde;o');

// shipping error messages
define('ERROR_SHIPPING_CONFIGURATION', '<strong>Erros na Configura&ccedil;&atilde;o de Frete!</strong>');
define('ERROR_SHIPPING_ORIGIN_ZIP', '<strong>Aten&ccedil;&atilde;o:</strong> O CEP da Loja n&atilde;o est&aacute; definido. Veja Configura&ccedil;&atilde;o -> Frete/Empacotamento para configur&aacute;-lo.');
define('ERROR_ORDER_WEIGHT_ZERO_STATUS', '<strong>Aten&ccedil;&atilde;o:</strong> Peso 0 est&aacute; configurado para Frete Gr&aacute;tis e o M&oacute;dulo de Frete Gr&aacute;tis n&atilde;o est&aacute; habilitado');
define('ERROR_USPS_STATUS', '<strong>Aten&ccedil;&atilde;o:</strong> O M&oacute;dulo de Frete USPS est&aacute; sem o nome de usu&aacute;rio ou est&aacute; configurado como TESTE (TEST) ao inv&eacute;s de PRODU&Ccedil;&Atilde;O (PRODUCTION) e n&atilde;o ir&aacute; funcionar.<br />Se voc&ecirc; n&atilde;o puder receber Cota&ccedil;&otilde;es de Frete USPS, contacte a USPS para ativar as Ferramentas Web na sua conta no site de produ&ccedil;&atilde;o deles. 1-800-344-7779 ou icustomercare@usps.com');

define('ERROR_SHIPPING_MODULES_NOT_DEFINED', 'NOTA: Voc&ecirc; n&atilde;o possui m&oacute;dulos de frete ativo. Por favor, acesse M&oacute;dulos -> Frete para configurar.');
define('ERROR_PAYMENT_MODULES_NOT_DEFINED', 'NOTA: Voc&ecirc; n&atilde;o possui m&oacute;dulos de pagamento ativo. Por favor, acesse M&oacute;dulos -> Pagamento para configurar.');

// text pricing
define('TEXT_CHARGES_WORD','Pre&ccedil;o Calculado:');
define('TEXT_PER_WORD','<br />Pre&ccedil;o por palavra: ');
define('TEXT_WORDS_FREE',' Palvra(s) gr;atis ');
define('TEXT_CHARGES_LETTERS','Pre&ccedil;o Calculado:');
define('TEXT_PER_LETTER','<br />Pre&ccedil;o por folha: ');
define('TEXT_LETTERS_FREE',' Folha(s) gr&aacute;tis ');
define('TEXT_ONETIME_CHARGES','*pagamento &uacute;nico = ');
define('TEXT_ONETIME_CHARGES_EMAIL',"\t" . '*pagamento &uacute;nico = ');
define('TEXT_ATTRIBUTES_QTY_PRICES_HELP', 'Op&ccedil;&atilde;o de Quantidades de Desconto');
define('TABLE_ATTRIBUTES_QTY_PRICE_QTY','QTD');
define('TABLE_ATTRIBUTES_QTY_PRICE_PRICE','PRE&Ccedil;O');
define('TEXT_ATTRIBUTES_QTY_PRICES_ONETIME_HELP', 'Op&ccedil;&atilde;o de Quantidade de Descontos de Pagamento &Uacute;nico');
define('TEXT_CATEGORIES_PRODUCTS', 'Selecione uma Categoria com Produtos... Ou navegue entre os Produtos');
define('TEXT_PRODUCT_TO_VIEW', 'Selecione um Produto para Ver e Pressione Mostrar...');

define('TEXT_INFO_SET_MASTER_CATEGORIES_ID', 'ID da Categoria Mestre Inv&aacute;lida');
define('TEXT_INFO_ID', ' ID# ');
define('TEXT_INFO_SET_MASTER_CATEGORIES_ID_WARNING', '<strong>ATEN&Ccedil;&Atilde;O:</strong> Este produto est&aacute; linkado a m&uacute;ltiplas Categorias, mas nenhuma Categoria Mestre foi configurada!');

define('PRODUCTS_PRICE_IS_CALL_FOR_PRICE_TEXT', 'O Produto &eacute; Sob Consulta');
define('PRODUCTS_PRICE_IS_FREE_TEXT','O Produto &eacute; Gr&aacute;tis');

define('TEXT_PRODUCT_WEIGHT_UNIT','kgs');

// min, max, units
define('PRODUCTS_QUANTITY_MAX_TEXT_LISTING', 'M&aacute;x:');

// Discount Savings
 define('PRODUCT_PRICE_DISCOUNT_PREFIX','Economize:&nbsp;');
 define('PRODUCT_PRICE_DISCOUNT_PERCENTAGE','% de desconto');
 define('PRODUCT_PRICE_DISCOUNT_AMOUNT','&nbsp;de desconto');
// Sale Maker Sale Price
 define('PRODUCT_PRICE_SALE','Promo&ccedil;&atilde;o:&nbsp;');

// Rich Text / HTML resources
define('TEXT_HTML_EDITOR_NOT_DEFINED','Voc&ecirc; n&atilde;o possui um editor HTML definido ou seu JavaScript est&aacute; desabilitado, voc&ecirc; pode digitar HTML puro manualmente aqui.');
define('TEXT_WARNING_HTML_DISABLED','<span class="main">Nota: Voc&ecirc; est&aacute; usando um e-mail de somente TEXTO. Se voc&ecirc; desejar enviar HTML voc&ecirc; precisa habilitar a op&ccedil;&atilde;o "usar HTML MIME" nas op&ccedil;&otilde;es de E-mail em Configura&ccedil;&atilde;o -> Op&ccedil;&otilde;es de E-mail</span>');
define('TEXT_WARNING_CANT_DISPLAY_HTML','<span class="main">Nota: Voc&ecirc; est&aacute; usando um e-mail de somente TEXTO. Se voc&ecirc; desejar enviar HTML voc&ecirc; precisa habilitar a op&ccedil;&atilde;o "usar HTML MIME" nas op&ccedil;&otilde;es de E-mail em Configura&ccedil;&atilde;o -> Op&ccedil;&otilde;es de E-mail</span>');
define('TEXT_EMAIL_CLIENT_CANT_DISPLAY_HTML','Voc&ecirc; est&aacute; vendo este texto porque n&oacute;s enviamos pra voc&ecirc; um e-mail em formato HTML, mas seu cliente de e-mail n&atilde;o pode mostrar mensagens em formato HTML.');
define('ENTRY_EMAIL_PREFERENCE','Prefer&ecirc;ncias de Formato de E-mail:');
define('ENTRY_EMAIL_FORMAT_COMMENTS','Escolhendo "nenhum" ou "sem op&ccedil;&atilde;o" desabilita TODO e-mail, incluindo detalhes de vendas');
define('ENTRY_EMAIL_HTML_DISPLAY','HTML');
define('ENTRY_EMAIL_TEXT_DISPLAY','Somente TEXTO');
define('ENTRY_EMAIL_NONE_DISPLAY','Nunca');
define('ENTRY_EMAIL_OPTOUT_DISPLAY','N&atilde;o Optou por Newsletters');
define('ENTRY_NOTHING_TO_SEND','Voc&ecirc; n&atilde;o digitou nenhum conte&uacute;do para sua mensagem');
 define('EMAIL_SEND_FAILED','ERRO: Falha ao enviaro e-mail para: "%s" <%s> com assunto: "%s"');

 define('EDITOR_NONE', 'Texto Simples');
 define('TEXT_EDITOR_INFO', 'Editor de Texto');
 define('ERROR_EDITORS_FOLDER_NOT_FOUND', 'Voc&ecirc; tem um editor HTML selecionado em \'Minha Loja\', mas o direto&oacute;rio \'/editors/\' n&atilde;o pode ser localizado. Por favor, desabilite sua sele&ccedil;&atilde;o ou mova seus arquivos de editor para o diret&oacute;rio \''.DIR_WS_CATALOG.'editors/\'');
 define('TEXT_CATEGORIES_PRODUCTS_SORT_ORDER_INFO', 'Ordem de Amostragem de Categorias/Produto: ');
 define('TEXT_SORT_PRODUCTS_SORT_ORDER_PRODUCTS_NAME', 'Ordem de Amostragem de Produtos, Nome do Produto');
 define('TEXT_SORT_PRODUCTS_NAME', 'Nome do Produto');
 define('TEXT_SORT_PRODUCTS_MODEL', 'Modelo do Produto');
 define('TEXT_SORT_PRODUCTS_QUANTITY', 'Qtd+ de Produtos, Nome do Produto');
 define('TEXT_SORT_PRODUCTS_QUANTITY_DESC', 'Qtd de Produtos-, Nome do Produto');
 define('TEXT_SORT_PRODUCTS_PRICE', 'Pre&ccedil;o dos Produtos+, Nome do Produto');
 define('TEXT_SORT_PRODUCTS_PRICE_DESC', 'Pre&ccedil;o dos Produtos-, Nome do Produto');
 define('TEXT_SORT_CATEGORIES_SORT_ORDER_PRODUCTS_NAME', 'Ordem de Amostragem da Categoria, Nome da Categoria');
 define('TEXT_SORT_CATEGORIES_NAME', 'Nome da Categoria');



 define('TABLE_HEADING_YES','Sim');
 define('TABLE_HEADING_NO','N&atilde;o');
 define('TEXT_PRODUCTS_IMAGE_MANUAL', '<br /><strong>Ou, selecione uma imagem existente no servidor, nome do arquivo:</strong>');
 define('TEXT_IMAGES_OVERWRITE', '<br /><strong>Substituir Imagem No Servidor?</strong>');
 define('TEXT_IMAGE_OVERWRITE_WARNING','ATEN&Ccedil;&Atilde;O: NOME DO ARQUIVO foi atualizado, mas n&atilde;o foi sub was updated but not overwritten ');
 define('TEXT_IMAGES_DELETE', '<strong>Delete Image?</strong> NOTA: Removes Image from Produto, Image is NOT removed from server:');
 define('TEXT_IMAGE_CURRENT', 'Image Name: ');

 define('ERROR_DEFINE_OPTION_NAMES', 'Aten&ccedil;&atilde;o: No Option Names have been defined');
 define('ERROR_DEFINE_OPTION_VALUES', 'Aten&ccedil;&atilde;o: No Option Values have been defined');
 define('ERROR_DEFINE_PRODUCTS', 'Aten&ccedil;&atilde;o: No Produtos have been defined');
 define('ERROR_DEFINE_PRODUCTS_MASTER_CATEGORIES_ID', 'Aten&ccedil;&atilde;o: No Master Categorias ID has been set for this Produto');

 define('BUTTON_ADD_PRODUCT_TYPES_SUBCATEGORIES_ON','Add include SubCategorias');
 define('BUTTON_ADD_PRODUCT_TYPES_SUBCATEGORIES_OFF','Add without SubCategorias');

 define('BUTTON_PREVIOUS_ALT','Previous Produto');
 define('BUTTON_NEXT_ALT','Next Produto');

 define('BUTTON_PRODUCTS_TO_CATEGORIES', 'Multiple Categorias Link Manager');
 define('BUTTON_PRODUCTS_TO_CATEGORIES_ALT', 'Copy Produto to Multiple Categorias');

 define('TEXT_INFO_OPTION_NAMES_VALUES_COPIER_STATUS', 'All Global Copy, Add and Delete Features Status is currently DESLIGADO');
 define('TEXT_SHOW_OPTION_NAMES_VALUES_COPIER_ON', 'Display Global Features - LIGADO');
 define('TEXT_SHOW_OPTION_NAMES_VALUES_COPIER_OFF', 'Display Global Features - DESLIGADO');

// moved from Categorias and all product type language files
 define('ERROR_CANNOT_LINK_TO_SAME_CATEGORY', 'Erro: Can not link products in the same category.');
 define('ERROR_CATALOG_IMAGE_DIRECTORY_NOT_WRITEABLE', 'Erro: Catalog images directory is not writeable: ' . DIR_FS_CATALOG_IMAGES);
 define('ERROR_CATALOG_IMAGE_DIRECTORY_DOES_NOT_EXIST', 'Erro: Catalog images directory does not exist: ' . DIR_FS_CATALOG_IMAGES);
 define('ERROR_CANNOT_MOVE_CATEGORY_TO_PARENT', 'Erro: Categoria cannot be moved into child category.');
 define('ERROR_CANNOT_MOVE_PRODUCT_TO_CATEGORY_SELF', 'Erro: Cannot move product to the same category or into a category where it already exists.');
 define('ERROR_CATEGORY_HAS_PRODUCTS', 'Erro: Categoria has Produtos!<br /><br />While this can be done temporarily to build your Categorias ... Categorias hold either Produtos or Categorias but never both!');
 define('SUCCESS_CATEGORY_MOVED', 'Success! Categoria has successfully been moved ...');
 define('ERROR_CANNOT_MOVE_CATEGORY_TO_CATEGORY_SELF', 'Erro: Cannot move Categoria to the same Categoria! ID#');

// EZ-PAGES Alerts
 define('TEXT_EZPAGES_STATUS_HEADER_ADMIN', 'ATEN&Ccedil;&Atilde;O: EZ-PAGES HEADER - On for Admin IP Only');
 define('TEXT_EZPAGES_STATUS_FOOTER_ADMIN', 'ATEN&Ccedil;&Atilde;O: EZ-PAGES FOOTER - On for Admin IP Only');
 define('TEXT_EZPAGES_STATUS_SIDEBOX_ADMIN', 'ATEN&Ccedil;&Atilde;O: EZ-PAGES SIDEBOX - On for Admin IP Only');

// moved from product types
// warnings on Virtual and Always Free Shipping
 define('TEXT_VIRTUAL_PREVIEW','Aten&ccedil;&atilde;o: This product is marked - Free Shipping and Skips Shipping Address<br />No shipping will be requested when all products in the order are Virtual Produtos');
 define('TEXT_VIRTUAL_EDIT','Aten&ccedil;&atilde;o: This product is marked - Free Shipping and Skips Shipping Address<br />No shipping will be requested when all products in the order are Virtual Produtos');
 define('TEXT_FREE_SHIPPING_PREVIEW','Aten&ccedil;&atilde;o: This product is marked - Free Shipping, Shipping Address Required<br />Free Shipping Module is required when all products in the order are Always Free Shipping Produtos');
 define('TEXT_FREE_SHIPPING_EDIT','Aten&ccedil;&atilde;o: Yes makes the product - Free Shipping, Shipping Address Required<br />Free Shipping Module is required when all products in the order are Always Free Shipping Produtos');

// admin activity log warnings
 define('WARNING_ADMIN_ACTIVITY_LOG_DATE', 'ATEN&Ccedil;&Atilde;O: The Admin Activity Log table has records over 2 months old and should be cleaned ... ');
 define('WARNING_ADMIN_ACTIVITY_LOG_RECORDS', 'ATEN&Ccedil;&Atilde;O: The Admin Activity Log table has over 50,000 records and should be cleaned ... ');
 define('RESET_ADMIN_ACTIVITY_LOG', 'Go to Store Manager to Reset the Admin Activity Log');

 define('CATEGORY_HAS_SUBCATEGORIES', 'NOTA: Categoria has SubCategorias<br />Produtos cannot be added');

 define('WARNING_WELCOME_DISCOUNT_COUPON_EXPIRES_IN', 'ATEN&Ccedil;&Atilde;O! Welcome Email Discount Coupon expires in %s days');

define('WARNING_ADMIN_FOLDERNAME_VULNERABLE', 'CAUTION: <a href="http://tutorials.zen-cart.com/index.php?article=33" target="_blank">Your /admin/ foldername should be renamed to something less common</a>, to prevent unauthorized access.');
define('WARNING_EMAIL_SYSTEM_DISABLED', 'WARNING: The email subsystem is turned off. No emails will be sent until it is re-enabled in Admin->Configuration->Email Options.');
define('TEXT_CURRENT_VER_IS', 'Voc&ecirc; est&aacute; usando atualmente: ');
define('ERROR_NO_DATA_TO_SAVE', 'ERROR: The data you submitted was found to be empty. YOUR CHANGES HAVE *NOT* BEEN SAVED. You may have a problem with your browser or your internet connection.');
define('TEXT_HIDDEN', 'Hidden');
define('TEXT_VISIBLE', 'Visible');
define('TEXT_HIDE', 'Hide');
define('TEXT_EMAIL', 'Email');
define('TEXT_NOEMAIL', 'No Email');


///////////////////////////////////////////////////////////
// include additional files:
 require(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . FILENAME_EMAIL_EXTRAS);
 include(zen_get_file_directory(DIR_FS_CATALOG_LANGUAGES . $_SESSION['language'] . '/', FILENAME_OTHER_IMAGES_NAMES, 'false'));


