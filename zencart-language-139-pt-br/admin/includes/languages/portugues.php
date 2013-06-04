<?php
/**
 * @package admin
 * @copyright Copyright 2003-2010 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: english.php 15621 2010-03-06 10:01:29Z drbyte $
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
// on RedHat6.0 I used 'en_US'
// on FreeBSD 4.0 I use 'en_US.ISO_8859-1'
// this may not work under win32 environments..
setlocale(LC_TIME, 'en_US.ISO_8859-1');
define('DATE_FORMAT_SHORT', '%d/%m/%Y');  // this is used for strftime()
define('DATE_FORMAT_LONG', '%A, %d de %B de %Y'); // this is used for strftime()
define('DATE_FORMAT', 'd/m/Y'); // this is used for date()
define('PHP_DATE_TIME_FORMAT', 'd/m/Y H:i:s'); // this is used for date()
define('DATE_TIME_FORMAT', DATE_FORMAT_SHORT . ' %H:%M:%S');
define('DATE_FORMAT_SPIFFYCAL', 'dd/MM/yyyy');  //Use only 'dd', 'MM' and 'yyyy' here in any order

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
//die(DIR_FS_CATALOG_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select . 'meta_tags.php');

// meta tags
define('ICON_METATAGS_ON', 'Meta Tags Definidas');
define('ICON_METATAGS_OFF', 'Meta Tags N�o Definidas');
define('TEXT_LEGEND_META_TAGS', 'Meta Tags Definida:');
define('TEXT_INFO_META_TAGS_USAGE', '<strong>NOTA:</strong> The Site/Tagline is your defined definition for your site in the meta_tags.php file.');

// Global entries for the <html> tag
define('HTML_PARAMS','dir="ltr" lang="pt-br"');

// charset for web pages and emails
define('CHARSET', 'iso-8859-1');

// header text in includes/header.php
define('HEADER_TITLE_TOP', 'Administra��o');
define('HEADER_TITLE_SUPPORT_SITE', 'Site de Suporte');
define('HEADER_TITLE_ONLINE_CATALOG', 'Loja');
define('HEADER_TITLE_VERSION', 'Vers�o');
define('HEADER_TITLE_LOGOFF', 'Sair');
//define('HEADER_TITLE_ADMINISTRATION', 'Administration');

// Define the name of your Gift Certificate as Gift Voucher, Gift Certificate, Zen Cart Dollars, etc. here for use through out the shop
  define('TEXT_GV_NAME','Vale Presente');
  define('TEXT_GV_NAMES','Vales Presente');
  define('TEXT_DISCOUNT_COUPON', 'Cupom de Desconto');

// used for redeem code, redemption code, or redemption id
  define('TEXT_GV_REDEEM','C�digo do Cupom');

// text for gender
define('MALE', 'Masculino');
define('FEMALE', 'Feminino');

// text for date of birth example
define('DOB_FORMAT_STRING', 'dd/mm/yyyy');

// configuration box text in includes/boxes/configuration.php
define('BOX_HEADING_CONFIGURATION', 'Configura��o');
define('BOX_CONFIGURATION_MYSTORE', 'Minha Loja');
define('BOX_CONFIGURATION_LOGGING', 'Log');
define('BOX_CONFIGURATION_CACHE', 'Cache');

// modules box text in includes/boxes/modules.php
define('BOX_HEADING_MODULES', 'M�dulos');
define('BOX_MODULES_PAYMENT', 'Pagamento');
define('BOX_MODULES_SHIPPING', 'Frete');
define('BOX_MODULES_ORDER_TOTAL', 'Total da Venda');
define('BOX_MODULES_PRODUCT_TYPES', 'Tipos de Produto');

// Categorias box text in includes/boxes/catalog.php
define('BOX_HEADING_CATALOG', 'Loja');
define('BOX_CATALOG_CATEGORIES_PRODUCTS', 'Categorias/Produtos');
define('BOX_CATALOG_PRODUCT_TYPES', 'Tipos de Produto');
define('BOX_CATALOG_CATEGORIES_OPTIONS_NAME_MANAGER', 'Gerenciador de Nome de Op��o');
define('BOX_CATALOG_CATEGORIES_OPTIONS_VALUES_MANAGER', 'Gerenciador de Valor de Op��o');
define('BOX_CATALOG_MANUFACTURERS', 'Fabricantes');
define('BOX_CATALOG_REVIEWS', 'Avalia��es');
define('BOX_CATALOG_SPECIALS', 'Especiais');
define('BOX_CATALOG_PRODUCTS_EXPECTED', 'Produtos Futuros');
define('BOX_CATALOG_SALEMAKER', 'Criador de Promo��es');
define('BOX_CATALOG_PRODUCTS_PRICE_MANAGER', 'Gerenciador de Pre�os de Produto');

// customers box text in includes/boxes/customers.php
define('BOX_HEADING_CUSTOMERS', 'Clientes');
define('BOX_CUSTOMERS_CUSTOMERS', 'Clientes');
define('BOX_CUSTOMERS_ORDERS', 'Vendas');
define('BOX_CUSTOMERS_GROUP_PRICING', 'Grupo de Pre�os');
define('BOX_CUSTOMERS_PAYPAL', 'PayPal IPN');

// taxes box text in includes/boxes/taxes.php
define('BOX_HEADING_LOCATION_AND_TAXES', 'Locais / Impostos');
define('BOX_TAXES_COUNTRIES', 'Pa�ses');
define('BOX_TAXES_ZONES', 'Zonas');
define('BOX_TAXES_GEO_ZONES', 'Defini��es de Zonas');
define('BOX_TAXES_TAX_CLASSES', 'Tipos de Impostos');
define('BOX_TAXES_TAX_RATES', 'Taxas de Imposto');

// reports box text in includes/boxes/reports.php
define('BOX_HEADING_REPORTS', 'Relat�rios');
define('BOX_REPORTS_PRODUCTS_VIEWED', 'Produtos Vistos');
define('BOX_REPORTS_PRODUCTS_PURCHASED', 'Produtos Mais Vendidos');
define('BOX_REPORTS_ORDERS_TOTAL', 'Valor Total de Compras por Cliente');
define('BOX_REPORTS_PRODUCTS_LOWSTOCK', 'Produtos com Estoque Baixo');
define('BOX_REPORTS_CUSTOMERS_REFERRALS', 'Refer�ncias de Clientes');

// tools text in includes/boxes/tools.php
define('BOX_HEADING_TOOLS', 'Ferramentas');
define('BOX_TOOLS_ADMIN', 'Configura��es de Administradores');
define('BOX_TOOLS_TEMPLATE_SELECT', 'Sele��o de Tema');
define('BOX_TOOLS_BACKUP', 'Backup do Banco de Dados');
define('BOX_TOOLS_BANNER_MANAGER', 'Gerenciador de Banner');
define('BOX_TOOLS_CACHE', 'Controle de Cache');
define('BOX_TOOLS_DEFINE_LANGUAGE', 'Definir Idiomas');
define('BOX_TOOLS_FILE_MANAGER', 'Gerenciador de Arquivo');
define('BOX_TOOLS_MAIL', 'Enviar E-mail');
define('BOX_TOOLS_NEWSLETTER_MANAGER', 'Gerenciador de Notifica��es de Produtos e Newsletter');
define('BOX_TOOLS_SERVER_INFO', 'Informa��es de Vers�o/Servidor');
define('BOX_TOOLS_WHOS_ONLINE', 'Quem est� Online');
define('BOX_TOOLS_STORE_MANAGER', 'Gerenciador da Loja');
define('BOX_TOOLS_DEVELOPERS_TOOL_KIT', 'Caixa de Ferramentas de Desenvolvedores');
define('BOX_TOOLS_SQLPATCH','Instalar Patches SQL');
define('BOX_TOOLS_EZPAGES','P�ginas EZ');

define('BOX_HEADING_EXTRAS', 'Extras');

// define pages editor files
define('BOX_TOOLS_DEFINE_PAGES_EDITOR','Editor de P�ginas Definidas');
define('BOX_TOOLS_DEFINE_MAIN_PAGE', 'P�gina Principal');
define('BOX_TOOLS_DEFINE_CONTACT_US','Fale Conosco');
define('BOX_TOOLS_DEFINE_PRIVACY','Privacidade');
define('BOX_TOOLS_DEFINE_SHIPPINGINFO','Frete e Devolu��es');
define('BOX_TOOLS_DEFINE_CONDITIONS','Condi��es de Uso');
define('BOX_TOOLS_DEFINE_CHECKOUT_SUCCESS','Pagamento Efetuado com Sucesso');
define('BOX_TOOLS_DEFINE_PAGE_2','P�gina 2');
define('BOX_TOOLS_DEFINE_PAGE_3','P�gina 3');
define('BOX_TOOLS_DEFINE_PAGE_4','P�gina 4');


// localizaion box text in includes/boxes/localization.php
define('BOX_HEADING_LOCALIZATION', 'Localiza��o');
define('BOX_LOCALIZATION_CURRENCIES', 'Moedas');
define('BOX_LOCALIZATION_LANGUAGES', 'Idiomas');
define('BOX_LOCALIZATION_ORDERS_STATUS', 'Estado das Vendas');

// gift vouchers box text in includes/boxes/gv_admin.php
define('BOX_HEADING_GV_ADMIN', TEXT_GV_NAME . '/Cupons');
define('BOX_GV_ADMIN_QUEUE',  'Fila de ' . TEXT_GV_NAMES);
define('BOX_GV_ADMIN_MAIL', 'Enviar ' . TEXT_GV_NAME);
define('BOX_GV_ADMIN_SENT', TEXT_GV_NAMES . ' Enviado');
define('BOX_COUPON_ADMIN','Administrar Cupons');

define('IMAGE_RELEASE', 'Resgatar ' . TEXT_GV_NAME);

// javascript messages
define('JS_ERROR', 'Alguns erros ocorreram durante o processamento do seu formul�rio!\nPor favor, fa�a as corre��es necess�rias:\n\n');

define('JS_OPTIONS_VALUE_PRICE', '* O novo atributo do produto precisa de um pre�o\n');
define('JS_OPTIONS_VALUE_PRICE_PREFIX', '* O novo atributo do produto precisa de um prefixo no pre�o\n');

define('JS_PRODUCTS_NAME', '* O novo produto precisa de um nome\n');
define('JS_PRODUCTS_DESCRIPTION', '* O novo produto precisa de uma descri��o\n');
define('JS_PRODUCTS_PRICE', '* O novo produto precisa de um pre�o\n');
define('JS_PRODUCTS_WEIGHT', '* O novo produto precisa de um peso\n');
define('JS_PRODUCTS_QUANTITY', '* O novo produto precisa de uma quantidade\n');
define('JS_PRODUCTS_MODEL', '* O novo produto precisa de um modelo\n');
define('JS_PRODUCTS_IMAGE', '* O novo produto precisa de uma imagem\n');

define('JS_SPECIALS_PRODUCTS_PRICE', '* Um novo pre�o para este produto precisa ser configurado\n');

define('JS_GENDER', '* O item \'G�nero\' precisa ser escolhido.\n');
define('JS_FIRST_NAME', '* O campo \'Primeiro Nome\' precisa ter pelo menos ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' caracteres.\n');
define('JS_LAST_NAME', '* O campo \'�ltimo Nome\' precisa ter pelo menos ' . ENTRY_LAST_NAME_MIN_LENGTH . ' caracteres.\n');
define('JS_DOB', '* O campo \'Data de Anivers�rio\' precisa ser no formato: xx/xx/xxxx (dia/m�s/ano).\n');
define('JS_EMAIL_ADDRESS', '* O campo \'E-Mail\' precisa ter pelo menos ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' caracteres.\n');
define('JS_ADDRESS', '* O campo \'Endere�o\' precisa ter pelo menos ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' caracteres.\n');
define('JS_POST_CODE', '* O campo \'CEP\' precisa ter pelo menos ' . ENTRY_POSTCODE_MIN_LENGTH . ' caracteres.\n');
define('JS_CITY', '* O campo \'Cidade\' precisa ter pelo menos ' . ENTRY_CITY_MIN_LENGTH . ' caracteres.\n');
define('JS_STATE', '* O item \'Estado\' precisa ser selecionado.\n');
define('JS_STATE_SELECT', '-- Selecione --');
define('JS_ZONE', '* O item \'Estado\' precisa ser escolhido de uma lista para este pa�s.');
define('JS_COUNTRY', '* Um \'Pa�s\' precisa ser escolhido.\n');
define('JS_TELEPHONE', '* O campo \'Telefone\' precisa ter pelo menos ' . ENTRY_TELEPHONE_MIN_LENGTH . ' caracteres.\n');
define('JS_PASSWORD', '* Os campos \'Senha\' e \'Confirma��o\' precisam ser iguais e ter pelo menos ' . ENTRY_PASSWORD_MIN_LENGTH . ' caracteres.\n');

define('JS_ORDER_DOES_NOT_EXIST', 'A Venda N�mero %s n�o existe!');

define('CATEGORY_PERSONAL', 'Pessoal');
define('CATEGORY_ADDRESS', 'Endere�o');
define('CATEGORY_CONTACT', 'Contato');
define('CATEGORY_COMPANY', 'Empresa');
define('CATEGORY_OPTIONS', 'Op��es');

define('ENTRY_GENDER', 'G�nero:');
define('ENTRY_GENDER_ERROR', '&nbsp;<span class="errorText">obrigat�rio</span>');
define('ENTRY_FIRST_NAME', 'Primeiro Nome:');
define('ENTRY_FIRST_NAME_ERROR', '&nbsp;<span class="errorText">m�nimo ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' caracteres</span>');
define('ENTRY_LAST_NAME', '�ltimo Nome:');
define('ENTRY_LAST_NAME_ERROR', '&nbsp;<span class="errorText">m�nimo ' . ENTRY_LAST_NAME_MIN_LENGTH . ' caracteres</span>');
define('ENTRY_DATE_OF_BIRTH', 'Data de Anivers�rio:');
define('ENTRY_DATE_OF_BIRTH_ERROR', '&nbsp;<span class="errorText">(ex. 21/05/1970)</span>');
define('ENTRY_EMAIL_ADDRESS', 'E-Mail:');
define('ENTRY_EMAIL_ADDRESS_ERROR', '&nbsp;<span class="errorText">m�nimo ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' caracteres</span>');
define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', '&nbsp;<span class="errorText">The email address doesn\'t appear to be valid!</span>');
define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', '&nbsp;<span class="errorText">This email address already exists!</span>');
define('ENTRY_COMPANY', 'Nome da Empresa:');
define('ENTRY_COMPANY_ERROR', '');
define('ENTRY_PRICING_GROUP', 'Grupo de Desconto de Pre�o');
define('ENTRY_STREET_ADDRESS', 'Endere�o (Rua, Av., etc):');
define('ENTRY_STREET_ADDRESS_ERROR', '&nbsp;<span class="errorText">m�nimo ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' caracteres</span>');
define('ENTRY_SUBURB', 'Bairro:');
define('ENTRY_SUBURB_ERROR', '');
define('ENTRY_POST_CODE', 'CEP:');
define('ENTRY_POST_CODE_ERROR', '&nbsp;<span class="errorText">m�nimo ' . ENTRY_POSTCODE_MIN_LENGTH . ' caracteres</span>');
define('ENTRY_CITY', 'Cidade:');
define('ENTRY_CITY_ERROR', '&nbsp;<span class="errorText">m�nimo ' . ENTRY_CITY_MIN_LENGTH . ' caracteres</span>');
define('ENTRY_STATE', 'Estado:');
define('ENTRY_STATE_ERROR', '&nbsp;<span class="errorText">obrigat�rio</span>');
define('ENTRY_COUNTRY', 'Pa�s:');
define('ENTRY_COUNTRY_ERROR', '');
define('ENTRY_TELEPHONE_NUMBER', 'Telefone:');
define('ENTRY_TELEPHONE_NUMBER_ERROR', '&nbsp;<span class="errorText">m�nimo ' . ENTRY_TELEPHONE_MIN_LENGTH . ' caracteres</span>');
define('ENTRY_FAX_NUMBER', 'Fax:');
define('ENTRY_FAX_NUMBER_ERROR', '');
define('ENTRY_NEWSLETTER', 'Newsletter:');
define('ENTRY_NEWSLETTER_YES', 'Inscrito');
define('ENTRY_NEWSLETTER_NO', 'N�o Inscrito');
define('ENTRY_NEWSLETTER_ERROR', '');

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
define('IMAGE_FILE_MANAGER', 'Gerenciador de Arquivo');
define('IMAGE_ICON_STATUS_GREEN', 'Ativo');
define('IMAGE_ICON_STATUS_GREEN_LIGHT', 'Marcar como Ativo');
define('IMAGE_ICON_STATUS_RED', 'Inativo');
define('IMAGE_ICON_STATUS_RED_LIGHT', 'Marcar como Inativo');
define('IMAGE_ICON_STATUS_RED_EZPAGES', 'Erro -- muitos tipos de conte�do/URL digitado');
define('IMAGE_ICON_STATUS_RED_ERROR', 'Erro');
define('IMAGE_ICON_INFO', 'Informa��o');
define('IMAGE_INSERT', 'Inserir');
define('IMAGE_LOCK', 'Trancar');
define('IMAGE_MODULE_INSTALL', 'Instalar M�dulo');
define('IMAGE_MODULE_REMOVE', 'Remover M�dulo');
define('IMAGE_MOVE', 'Mover');
define('IMAGE_NEW_BANNER', 'Novo Banner');
define('IMAGE_NEW_CATEGORY', 'Nova Categoria');
define('IMAGE_NEW_COUNTRY', 'Novo Pa�s');
define('IMAGE_NEW_CURRENCY', 'Nova Moeda');
define('IMAGE_NEW_FILE', 'Novo Arquivo');
define('IMAGE_NEW_FOLDER', 'Nova Pasta');
define('IMAGE_NEW_LANGUAGE', 'Novo Idioma');
define('IMAGE_NEW_NEWSLETTER', 'Nova Newsletter');
define('IMAGE_NEW_PRODUCT', 'Novo Produto');
define('IMAGE_NEW_SALE', 'Nova Promo��o');
define('IMAGE_NEW_TAX_CLASS', 'Nova Classe de Imposto');
define('IMAGE_NEW_TAX_RATE', 'Nova Taxa de Imposto');
define('IMAGE_NEW_TAX_ZONE', 'Nova Zona de Imposto');
define('IMAGE_NEW_ZONE', 'Nova Zona');
define('IMAGE_OPTION_NAMES', 'Gerenciardo de Nomes de Op��es');
define('IMAGE_OPTION_VALUES', 'Gerenciador de Valores de Op��es');
define('IMAGE_ORDERS', 'Vendas');
define('IMAGE_ORDERS_INVOICE', 'Recibo');
define('IMAGE_ORDERS_PACKINGSLIP', 'Empacotamento');
define('IMAGE_PREVIEW', 'Prever');
define('IMAGE_RESTORE', 'Restaurar');
define('IMAGE_RESET', 'Resetar');
define('IMAGE_SAVE', 'Salvar');
define('IMAGE_SEARCH', 'Pesquisar');
define('IMAGE_SELECT', 'Selecionar');
define('IMAGE_SEND', 'Enviar');
define('IMAGE_SEND_EMAIL', 'Enviar E-mail');
define('IMAGE_UNLOCK', 'Destrancar');
define('IMAGE_UPDATE', 'Atualizar');
define('IMAGE_UPDATE_CURRENCIES', 'Atualizar Taxa de Troca');
define('IMAGE_UPLOAD', 'Enviar');
define('IMAGE_TAX_RATES','Taxa de Imposto');
define('IMAGE_DEFINE_ZONES','Definir Zonas');
define('IMAGE_PRODUCTS_PRICE_MANAGER', 'Gerenciador de Pre�os de Produtos');
define('IMAGE_UPDATE_PRICE_CHANGES', 'Atualizar Mudan�as nos Pre�os');
define('IMAGE_ADD_BLANK_DISCOUNTS','Adicionar ' . DISCOUNT_QTY_ADD . ' Descontos em Branco');
define('IMAGE_CHECK_VERSION', 'Verificar Atualiza��o do Zen Cart');
define('IMAGE_PRODUCTS_TO_CATEGORIES', 'Gerenciador de Links de M�ltiplas Categorias');

define('IMAGE_ICON_STATUS_ON', 'Estado - Habilitado');
define('IMAGE_ICON_STATUS_OFF', 'Estado - Desabilitado');
define('IMAGE_ICON_LINKED', 'Produto est� Linkado');

define('IMAGE_REMOVE_SPECIAL','Remover Infomra��o de Pre�o Especial');
define('IMAGE_REMOVE_FEATURED','Remover Informa��o de Produto em Destaque');
define('IMAGE_INSTALL_SPECIAL', 'Adicionar Informa��o de Pre�o Especial');
define('IMAGE_INSTALL_FEATURED', 'Adicionar Informa��o de Produto em Destaque');

define('ICON_PRODUCTS_PRICE_MANAGER','Gerenciador de Pre�os de Produtos');
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
define('ICON_PREVIOUS_LEVEL', 'N�vel Anterior');
define('ICON_PREVIEW', 'Prever');
define('ICON_RESET', 'Resetar');
define('ICON_STATISTICS', 'Estat�sticas');
define('ICON_SUCCESS', 'Successo');
define('ICON_TICK', 'Verdadeiro');
//define('ICON_UNLOCKED', 'Unlocked');
define('ICON_WARNING', 'Aten��o');

// constants for use in zen_prev_next_display function
define('TEXT_RESULT_PAGE', 'P�gina %s de %d');
define('TEXT_DISPLAY_NUMBER_OF_ADMINS', 'Mostrando de <b>%d</b> � <b>%d</b> (de <b>%d</b> administradores)');
define('TEXT_DISPLAY_NUMBER_OF_BANNERS', 'Mostrando de <b>%d</b> � <b>%d</b> (de <b>%d</b> banners)');
define('TEXT_DISPLAY_NUMBER_OF_CATEGORIES', 'Mostrando de <b>%d</b> � <b>%d</b> (de <b>%d</b> categorias)');
define('TEXT_DISPLAY_NUMBER_OF_COUNTRIES', 'Mostrando de <b>%d</b> � <b>%d</b> (de <b>%d</b> pa�ses)');
define('TEXT_DISPLAY_NUMBER_OF_CUSTOMERS', 'Mostrando de <b>%d</b> � <b>%d</b> (de <b>%d</b> clientes)');
define('TEXT_DISPLAY_NUMBER_OF_CURRENCIES', 'Mostrando de <b>%d</b> � <b>%d</b> (de <b>%d</b> moedas)');
define('TEXT_DISPLAY_NUMBER_OF_FEATURED', 'Mostrando de <b>%d</b> � <b>%d</b> (de <b>%d</b> produtos em destaque)');
define('TEXT_DISPLAY_NUMBER_OF_LANGUAGES', 'Mostrando de <b>%d</b> � <b>%d</b> (de <b>%d</b> idiomas)');
define('TEXT_DISPLAY_NUMBER_OF_MANUFACTURERS', 'Mostrando de <b>%d</b> � <b>%d</b> (de <b>%d</b> fabricantes)');
define('TEXT_DISPLAY_NUMBER_OF_NEWSLETTERS', 'Mostrando de <b>%d</b> � <b>%d</b> (de <b>%d</b> newsletters)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS', 'Mostrando de <b>%d</b> � <b>%d</b> (de <b>%d</b> vendas)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS_STATUS', 'Mostrando de <b>%d</b> � <b>%d</b> (de <b>%d</b> estado de vendas)');
define('TEXT_DISPLAY_NUMBER_OF_PRICING_GROUPS', 'Mostrando de <b>%d</b> � <b>%d</b> (de <b>%d</b> grupos de pre�o)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', 'Mostrando de <b>%d</b> � <b>%d</b> (de <b>%d</b> produtos)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCT_TYPES', 'Mostrando de <b>%d</b> � <b>%d</b> (de <b>%d</b> tipos de produto)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_EXPECTED', 'Mostrando de <b>%d</b> � <b>%d</b> (de <b>%d</b> produtos futuros)');
define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', 'Mostrando de <b>%d</b> � <b>%d</b> (de <b>%d</b> avalia��es de produto)');
define('TEXT_DISPLAY_NUMBER_OF_SALES', 'Mostrando de <b>%d</b> � <b>%d</b> (de <b>%d</b> promo��es)');
define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', 'Mostrando de <b>%d</b> � <b>%d</b> (de <b>%d</b> produtos em especial)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_CLASSES', 'Mostrando de <b>%d</b> � <b>%d</b> (de <b>%d</b> classes de imposto)');
define('TEXT_DISPLAY_NUMBER_OF_TEMPLATES', 'Mostrando de <b>%d</b> � <b>%d</b> (de <b>%d</b> associa��es de modelos)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_ZONES', 'Mostrando de <b>%d</b> � <b>%d</b> (de <b>%d</b> zona de imposto)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_RATES', 'Mostrando de <b>%d</b> � <b>%d</b> (de <b>%d</b> taxa de imposto)');
define('TEXT_DISPLAY_NUMBER_OF_ZONES', 'Mostrando de <b>%d</b> � <b>%d</b> (de <b>%d</b> zonas)');

define('PREVNEXT_BUTTON_PREV', '&lt;&lt;');
define('PREVNEXT_BUTTON_NEXT', '&gt;&gt;');


define('TEXT_DEFAULT', 'padr�o');
define('TEXT_SET_DEFAULT', 'Definir como padr�o');
define('TEXT_FIELD_REQUIRED', '&nbsp;<span class="fieldRequired">* Obrigat�rio</span>');

define('ERROR_NO_DEFAULT_CURRENCY_DEFINED', 'Erro: N�o existe nenhuma moeda padr�o configurada. Por favor, configure indo at�: Administra��o -> Ferramentas -> Localiza��o -> Moedas');

define('TEXT_CACHE_CATEGORIES', 'Caixa de Categorias');
define('TEXT_CACHE_MANUFACTURERS', 'Caixa de Fabricantes');
define('TEXT_CACHE_ALSO_PURCHASED', 'M�dulo Tamb�m Comprado');

define('TEXT_NONE', '--nenhum--');
define('TEXT_TOP', 'Topo');

define('ERROR_DESTINATION_DOES_NOT_EXIST', 'Erro: O destino n�o existe %s');
define('ERROR_DESTINATION_NOT_WRITEABLE', 'Erro: O destino n�o p�de ser escrito %s');
define('ERROR_FILE_NOT_SAVED', 'Erro: O arquivo enviado n�o foi salvo.');
define('ERROR_FILETYPE_NOT_PermitirED', 'Erro: O tipo de arquivo enviado n�o � Permitido  %s');
define('SUCCESS_FILE_SAVED_SUCCESSFULLY', 'Successo: Arquivo salvo com sucesso em %s');
define('WARNING_NO_FILE_UPLOADED', 'Aten��o: Nenhum arquivo foi enviado.');
define('WARNING_FILE_UPLOADS_DISABLED', 'Aten��o: O envio de arquivos est� desativado no arquivo de configura��o php.ini.');
define('ERROR_ADMIN_SECURITY_WARNING', 'Aten��o: Seu Login de Administrador n�o est� seguro. Voc� est� usando os dados de login padr�o: Admin admin ou voc� n�o removeu ou mudou: demo demoonly<br />O(s) login(s) deve(m) ser mudado(s) assim que poss�vel por quest�es de seguran�a.<br />Acesse Ferramentas -> Configura��es de Administradores e mude ajuste o(s) login(s).<br />Para mais informa��es de Seguran�a, por favor acesse o diret�rio /docs da sua loja');
define('WARNING_DATABASE_VERSION_OUT_OF_DATE','Seu banco de dados parece precisar de uma atualiza��o. Veja maiores informa��es em Ferramentas -> Informa��o do Servidor.');
define('WARN_DATABASE_VERSION_PROBLEM','true'); //set to false to turn off warnings about database version mismatches
define('WARNING_ADMIN_DOWN_FOR_MAINTENANCE', '<strong>ATEN��O:</strong> O site est� atualmente Desligado para Manuten��o...<br />NOTA: Voc� n�o pode testar a maioria dos m�dulos de Pagamento e Frete no modo Manuten��o');
define('WARNING_BACKUP_CFG_FILES_TO_DELETE', 'ATEN��O: Estes arquivos devem ser exclu�dos para evitar vulnerabilidades de seguran�a: ');
define('WARNING_INSTALL_DIRECTORY_EXISTS', 'Aten��o: O diret�rio de instala��o ainda existe em: ' . DIR_FS_CATALOG . 'zc_install. Por favor, remova este diret�rio por quest�es de seguran�a.');
define('WARNING_CONFIG_FILE_WRITEABLE', 'Aten��o: As permiss�es para o seu arquivo de configura��o: %sincludes/configure.php est�o incorretas. Isto � um risco de seguran�a - por favor, configure as permiss�es de usu�rio para este arquivo para Somente Leitura ou CHMOD 444.  <a href="http://tutorials.zen-cart.com/index.php?article=90" target="_blank">Veja esta Nota</a>');
define('WARNING_COULD_NOT_LOCATE_LANG_FILE', 'ATEN��O: N�o foi poss�vel localizar o arquivo de idioma: ');
define('ERROR_MODULE_REMOVAL_PROHIBITED', 'ERRO: Remo��o do m�dulo n�o permitida: ');

define('_JANUARY', 'Janeiro');
define('_FEBRUARY', 'Fevereiro');
define('_MARCH', 'Mar�o');
define('_APRIL', 'Abril');
define('_MAY', 'Maio');
define('_JUNE', 'Junho');
define('_JULY', 'Julho');
define('_AUGUST', 'Agosto');
define('_SEPTEMBER', 'Setembro');
define('_OCTOBER', 'Outubro');
define('_NOVEMBER', 'Novembro');
define('_DECEMBER', 'Dezembro');

define('TEXT_DISPLAY_NUMBER_OF_GIFT_VOUCHERS', 'Mostrando de <b>%d</b> � <b>%d</b> (de <b>%d</b> vale presentes)');
define('TEXT_DISPLAY_NUMBER_OF_COUPONS', 'Mostrando de <b>%d</b> � <b>%d</b> (de <b>%d</b> cupons)');

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
define('NOT_INSTALLED_TEXT','N�o Instalado');

// Produto Options Values Sort Order - option_values.php
  define('BOX_CATALOG_PRODUCT_OPTIONS_VALUES','Ordenador de Valores de Op��es ');

  define('TEXT_UPDATE_SORT_ORDERS_OPTIONS','<strong>Atualizar Ordem de Amostragem do Atributo pelo Valor de Op��o Padr�o</strong> ');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_UPDATES','<strong>Atualizar a Ordem de Amostragem dos Atributos de Todos os Produtos</strong><br />para que fiquem igual a Ordem de Amostragem das Op��es de Valores:<br />');

// Produto Options Name Sort Order - option_values.php
  define('BOX_CATALOG_PRODUCT_OPTIONS_NAME','Ordenador dos Nomes de Op��o');

// Attributes only
  define('BOX_CATALOG_CATEGORIES_ATTRIBUTES_CONTROLLER','Controlador de Atributos');

// generic model
  define('TEXT_MODEL','Modelo:');

// column controller
  define('BOX_TOOLS_LAYOUT_CONTROLLER','Controlador das Caixas de Layout');

// check GV release queue and alert store owner
  define('SHOW_GV_QUEUE',true);
  define('TEXT_SHOW_GV_QUEUE','%s aguardando aprova��o ');
  define('IMAGE_GIFT_QUEUE', 'Fila de ' . TEXT_GV_NAME);
  define('IMAGE_ORDER','Venda');

  define('BOX_TOOLS_EMAIL_WELCOME','E-mail de Boas Vindas');

  define('IMAGE_DISPLAY','Mostrar');
  define('IMAGE_UPDATE_SORT','Atualizar Ordem de Amostragem');
  define('IMAGE_EDIT_PRODUCT','Editar Produto');
  define('IMAGE_EDIT_ATTRIBUTES','Editar Atributos');
  define('TEXT_NEW_PRODUCT', 'Produto na Categoria: &quot;%s&quot;');
  define('IMAGE_OPTIONS_VALUES','Nomes de Op��o de Valores de Op��o');
  define('TEXT_PRODUCTS_PRICE_MANAGER','GERENCIADOR DE PRE�OS');
  define('TEXT_PRODUCT_EDIT','EDITAR PRODUTO');
  define('TEXT_ATTRIBUTE_EDIT','EDITAR ATRIBUTOS');
  define('TEXT_PRODUCT_DETAILS','VER DETALHES');

// sale maker
  define('DEDUCTION_TYPE_DROPDOWN_0', 'Quantia a Deduzir');
  define('DEDUCTION_TYPE_DROPDOWN_1', 'Porcentagem');
  define('DEDUCTION_TYPE_DROPDOWN_2', 'Novo Pre�o');

// Min and Units
  define('PRODUCTS_QUANTITY_MIN_TEXT_LISTING','M�n:');
  define('PRODUCTS_QUANTITY_UNIT_TEXT_LISTING','Unidades:');
  define('PRODUCTS_QUANTITY_IN_CART_LISTING','No Carrinho:');
  define('PRODUCTS_QUANTITY_ADD_ADDITIONAL_LISTING','Adicionar Adicional:');

  define('TEXT_PRODUCTS_MIX_OFF','*Nenhuma Op��o Mixada');
  define('TEXT_PRODUCTS_MIX_ON','*Com Op��o Mixada');

// search filters
  define('TEXT_INFO_SEARCH_DETAIL_FILTER','Filtro de Pesquisa: ');
  define('HEADING_TITLE_SEARCH_DETAIL','Pesquisar: ');
  define('HEADING_TITLE_SEARCH_DETAIL_REPORTS', 'Pesquisar por Produto(s) - Limitado por v�rgulas');
  define('HEADING_TITLE_SEARCH_DETAIL_REPORTS_NAME_MODEL', 'Pesquisar por Nome/Modelo dos Produtos');

  define('PREV_NEXT_PRODUCT', 'Produtos: ');
  define('TEXT_CATEGORIES_STATUS_INFO_OFF', '<span class="alert">*A Categoria est� Desabilitada</span>');
  define('TEXT_PRODUCTS_STATUS_INFO_OFF', '<span class="alert">*O Produto est� Desabilitado</span>');

// admin demo
  define('ADMIN_DEMO_ACTIVE','Demonstra��o da Administra��o est� atualmente Ativa. Algumas configura��o ser�o desabilitadas');
  define('ADMIN_DEMO_ACTIVE_EXCLUSION','Demonstra��o da Administra��o est� atualmente Ativa. Algumas configura��o ser�o desabilitadas - <strong>NOTA: Ignorado para Certos Administradores</strong>');
  define('ERROR_ADMIN_DEMO','Demonstra��o da Administra��o est� atualmente Ativa... a(s) op��o(�es) que voc� est� tentando executar foi(ram) desativada(s)');

// Version Check notices
  define('TEXT_VERSION_CHECK_NEW_VER','Nova Vers�o Dispon�vel v');
  define('TEXT_VERSION_CHECK_NEW_PATCH','Novo PATCH Dispon�vel: v');
  define('TEXT_VERSION_CHECK_PATCH','patch');
  define('TEXT_VERSION_CHECK_DOWNLOAD','Fa�a o Download Aqui');
  define('TEXT_VERSION_CHECK_CURRENT','Sua vers�o do Zen Cart&trade; parece ser a atual.');

// downloads manager
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_DOWNLOADS_MANAGER', 'Mostrando de <b>%d</b> � <b>%d</b> (de <b>%d</b> downloads)');
define('BOX_CATALOG_CATEGORIES_ATTRIBUTES_DOWNLOADS_MANAGER', 'Gerenciador de Downloads');

define('BOX_CATALOG_FEATURED','Produtos em Destaque');

define('ERROR_NOTHING_SELECTED', 'Nada foi selecionado... Nenhuma altera��o foi feita');
define('TEXT_STATUS_WARNING','<strong>NOTA:</strong> o estado ser� ativado/desativado quando as datas forem definidas');

define('TEXT_LEGEND_LINKED', 'Produto Linkado');
define('TEXT_MASTER_CATEGORIES_ID','Categoria Mestre do Produto:');
define('TEXT_LEGEND', 'LEGENDA: ');
define('TEXT_LEGEND_STATUS_OFF', 'Estado DESLIGADO ');
define('TEXT_LEGEND_STATUS_ON', 'Estado LIGADO ');

define('TEXT_INFO_MASTER_CATEGORIES_ID', '<strong>NOTA: A Categoria Mestre � usada para prop�sitos de pre�o quando a<br />categoria do produto influencia nos pre�os de produtos linkados, exemplo: Promo��es</strong>');
define('TEXT_YES', 'Sim');
define('TEXT_NO', 'N�o');

// shipping error messages
define('ERROR_SHIPPING_CONFIGURATION', '<strong>Erros na Configura��o de Frete!</strong>');
define('ERROR_SHIPPING_ORIGIN_ZIP', '<strong>Aten��o:</strong> O CEP da Loja n�o est� definido. Veja Configura��o -> Frete/Empacotamento para configur�-lo.');
define('ERROR_ORDER_WEIGHT_ZERO_STATUS', '<strong>Aten��o:</strong> Peso 0 est� configurado para Frete Gr�tis e o M�dulo de Frete Gr�tis n�o est� habilitado');
define('ERROR_USPS_STATUS', '<strong>Aten��o:</strong> O M�dulo de Frete USPS est� sem o nome de usu�rio ou est� configurado como TESTE (TEST) ao inv�s de PRODU��O (PRODUCTION) e n�o ir� funcionar.<br />Se voc� n�o puder receber Cota��es de Frete USPS, contacte a USPS para ativar as Ferramentas Web na sua conta no site de produ��o deles. 1-800-344-7779 ou icustomercare@usps.com');

define('ERROR_SHIPPING_MODULES_NOT_DEFINED', 'NOTA: Voc� n�o possui m�dulos de frete ativo. Por favor, acesse M�dulos -> Frete para configurar.');
define('ERROR_PAYMENT_MODULES_NOT_DEFINED', 'NOTA: Voc� n�o possui m�dulos de pagamento ativo. Por favor, acesse M�dulos -> Pagamento para configurar.');

// text pricing
define('TEXT_CHARGES_WORD','Pre�o Calculado:');
define('TEXT_PER_WORD','<br />Pre�o por palavra: ');
define('TEXT_WORDS_FREE',' Palvra(s) gr;atis ');
define('TEXT_CHARGES_LETTERS','Pre�o Calculado:');
define('TEXT_PER_LETTER','<br />Pre�o por folha: ');
define('TEXT_LETTERS_FREE',' Folha(s) gr�tis ');
define('TEXT_ONETIME_CHARGES','*pagamento �nico = ');
define('TEXT_ONETIME_CHARGES_EMAIL',"\t" . '*pagamento �nico = ');
define('TEXT_ATTRIBUTES_QTY_PRICES_HELP', 'Op��o de Quantidades de Desconto');
define('TABLE_ATTRIBUTES_QTY_PRICE_QTY','QTD');
define('TABLE_ATTRIBUTES_QTY_PRICE_PRICE','PRE�O');
define('TEXT_ATTRIBUTES_QTY_PRICES_ONETIME_HELP', 'Op��o de Quantidade de Descontos de Pagamento �nico');
define('TEXT_CATEGORIES_PRODUCTS', 'Selecione uma Categoria com Produtos... Ou navegue entre os Produtos');
define('TEXT_PRODUCT_TO_VIEW', 'Selecione um Produto para Ver e Pressione Mostrar...');

define('TEXT_INFO_SET_MASTER_CATEGORIES_ID', 'ID da Categoria Mestre Inv�lida');
define('TEXT_INFO_ID', ' ID# ');
define('TEXT_INFO_SET_MASTER_CATEGORIES_ID_WARNING', '<strong>ATEN��O:</strong> Este produto est� linkado a m�ltiplas Categorias, mas nenhuma Categoria Mestre foi configurada!');

define('PRODUCTS_PRICE_IS_CALL_FOR_PRICE_TEXT', 'O Produto � Sob Consulta');
define('PRODUCTS_PRICE_IS_FREE_TEXT','O Produto � Gr�tis');

define('TEXT_PRODUCT_WEIGHT_UNIT','kgs');

// min, max, units
define('PRODUCTS_QUANTITY_MAX_TEXT_LISTING', 'M�x:');

// Discount Savings
  define('PRODUCT_PRICE_DISCOUNT_PREFIX','Economize:&nbsp;');
  define('PRODUCT_PRICE_DISCOUNT_PERCENTAGE','% de desconto');
  define('PRODUCT_PRICE_DISCOUNT_AMOUNT','&nbsp;de desconto');
// Sale Maker Sale Price
  define('PRODUCT_PRICE_SALE','Promo��o:&nbsp;');

// Rich Text / HTML resources
define('TEXT_HTML_EDITOR_NOT_DEFINED','Voc� n�o possui um editor HTML definido ou seu JavaScript est� desabilitado, voc� pode digitar HTML puro manualmente aqui.');
define('TEXT_WARNING_HTML_DISABLED','<span class="main">Nota: Voc� est� usando um e-mail de somente TEXTO. Se voc� desejar enviar HTML voc� precisa habilitar a op��o "usar HTML MIME" nas op��es de E-mail em Configura��o -> Op��es de E-mail</span>');
define('TEXT_WARNING_CANT_DISPLAY_HTML','<span class="main">Nota: Voc� est� usando um e-mail de somente TEXTO. Se voc� desejar enviar HTML voc� precisa habilitar a op��o "usar HTML MIME" nas op��es de E-mail em Configura��o -> Op��es de E-mail</span>');
define('TEXT_EMAIL_CLIENT_CANT_DISPLAY_HTML','Voc� est� vendo este texto porque n�s enviamos pra voc� um e-mail em formato HTML, mas seu cliente de e-mail n�o pode mostrar mensagens em formato HTML.');
define('ENTRY_EMAIL_PREFERENCE','Prefer�ncias de Formato de E-mail:');
define('ENTRY_EMAIL_FORMAT_COMMENTS','Escolhendo "nenhum" ou "sem op��o" desabilita TODO e-mail, incluindo detalhes de vendas');
define('ENTRY_EMAIL_HTML_DISPLAY','HTML');
define('ENTRY_EMAIL_TEXT_DISPLAY','Somente TEXTO');
define('ENTRY_EMAIL_NONE_DISPLAY','Nunca');
define('ENTRY_EMAIL_OPTOUT_DISPLAY','N�o Optou por Newsletters');
define('ENTRY_NOTHING_TO_SEND','Voc� n�o digitou nenhum conte�do para sua mensagem');
 define('EMAIL_SEND_FAILED','ERRO: Falha ao enviaro e-mail para: "%s" <%s> com assunto: "%s"');

  define('EDITOR_NONE', 'Texto Simples');
  define('TEXT_EDITOR_INFO', 'Editor de Texto');
  define('ERROR_EDITORS_FOLDER_NOT_FOUND', 'Voc� tem um editor HTML selecionado em \'Minha Loja\', mas o direto�rio \'/editors/\' n�o pode ser localizado. Por favor, desabilite sua sele��o ou mova seus arquivos de editor para o diret�rio \''.DIR_WS_CATALOG.'editors/\'');
  define('TEXT_CATEGORIES_PRODUCTS_SORT_ORDER_INFO', 'Ordem de Amostragem de Categorias/Produto: ');
  define('TEXT_SORT_PRODUCTS_SORT_ORDER_PRODUCTS_NAME', 'Ordem de Amostragem de Produtos, Nome do Produto');
  define('TEXT_SORT_PRODUCTS_NAME', 'Nome do Produto');
  define('TEXT_SORT_PRODUCTS_MODEL', 'Modelo do Produto');
  define('TEXT_SORT_PRODUCTS_QUANTITY', 'Qtd+ de Produtos, Nome do Produto');
  define('TEXT_SORT_PRODUCTS_QUANTITY_DESC', 'Qtd de Produtos-, Nome do Produto');
  define('TEXT_SORT_PRODUCTS_PRICE', 'Pre�o dos Produtos+, Nome do Produto');
  define('TEXT_SORT_PRODUCTS_PRICE_DESC', 'Pre�o dos Produtos-, Nome do Produto');
  define('TEXT_SORT_CATEGORIES_SORT_ORDER_PRODUCTS_NAME', 'Ordem de Amostragem da Categoria, Nome da Categoria');
  define('TEXT_SORT_CATEGORIES_NAME', 'Nome da Categoria');



  define('TABLE_HEADING_YES','Sim');
  define('TABLE_HEADING_NO','N�o');
  define('TEXT_PRODUCTS_IMAGE_MANUAL', '<br /><strong>Ou, selecione uma imagem existente no servidor, nome do arquivo:</strong>');
  define('TEXT_IMAGES_OVERWRITE', '<br /><strong>Substituir Imagem No Servidor?</strong>');
  define('TEXT_IMAGE_OVERWRITE_WARNING','ATEN��O: NOME DO ARQUIVO foi atualizado, mas n�o foi sub was updated but not overwritten ');
  define('TEXT_IMAGES_DELETE', '<strong>Delete Image?</strong> NOTA: Removes Image from Produto, Image is NOT removed from server:');
  define('TEXT_IMAGE_CURRENT', 'Image Name: ');

  define('ERROR_DEFINE_OPTION_NAMES', 'Aten��o: No Option Names have been defined');
  define('ERROR_DEFINE_OPTION_VALUES', 'Aten��o: No Option Values have been defined');
  define('ERROR_DEFINE_PRODUCTS', 'Aten��o: No Produtos have been defined');
  define('ERROR_DEFINE_PRODUCTS_MASTER_CATEGORIES_ID', 'Aten��o: No Master Categorias ID has been set for this Produto');

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
  define('TEXT_EZPAGES_STATUS_HEADER_ADMIN', 'ATEN��O: EZ-PAGES HEADER - On for Admin IP Only');
  define('TEXT_EZPAGES_STATUS_FOOTER_ADMIN', 'ATEN��O: EZ-PAGES FOOTER - On for Admin IP Only');
  define('TEXT_EZPAGES_STATUS_SIDEBOX_ADMIN', 'ATEN��O: EZ-PAGES SIDEBOX - On for Admin IP Only');

// moved from product types
// warnings on Virtual and Always Free Shipping
  define('TEXT_VIRTUAL_PREVIEW','Aten��o: This product is marked - Free Shipping and Skips Shipping Address<br />No shipping will be requested when all products in the order are Virtual Produtos');
  define('TEXT_VIRTUAL_EDIT','Aten��o: This product is marked - Free Shipping and Skips Shipping Address<br />No shipping will be requested when all products in the order are Virtual Produtos');
  define('TEXT_FREE_SHIPPING_PREVIEW','Aten��o: This product is marked - Free Shipping, Shipping Address Required<br />Free Shipping Module is required when all products in the order are Always Free Shipping Produtos');
  define('TEXT_FREE_SHIPPING_EDIT','Aten��o: Yes makes the product - Free Shipping, Shipping Address Required<br />Free Shipping Module is required when all products in the order are Always Free Shipping Produtos');

// admin activity log warnings
  define('WARNING_ADMIN_ACTIVITY_LOG_DATE', 'ATEN��O: The Admin Activity Log table has records over 2 months old and should be cleaned ... ');
  define('WARNING_ADMIN_ACTIVITY_LOG_RECORDS', 'ATEN��O: The Admin Activity Log table has over 50,000 records and should be cleaned ... ');
  define('RESET_ADMIN_ACTIVITY_LOG', 'Go to Store Manager to Reset the Admin Activity Log');

  define('CATEGORY_HAS_SUBCATEGORIES', 'NOTA: Categoria has SubCategorias<br />Produtos cannot be added');

  define('WARNING_WELCOME_DISCOUNT_COUPON_EXPIRES_IN', 'ATEN��O! Welcome Email Discount Coupon expires in %s days');

///////////////////////////////////////////////////////////
// include additional files:
  require(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . FILENAME_EMAIL_EXTRAS);
  include(zen_get_file_directory(DIR_FS_CATALOG_LANGUAGES . $_SESSION['language'] . '/', FILENAME_OTHER_IMAGES_NAMES, 'false'));


