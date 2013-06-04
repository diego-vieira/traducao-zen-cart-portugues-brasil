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
define('ICON_METATAGS_OFF', 'Meta Tags Não Definidas');
define('TEXT_LEGEND_META_TAGS', 'Meta Tags Definida:');
define('TEXT_INFO_META_TAGS_USAGE', '<strong>NOTA:</strong> The Site/Tagline is your defined definition for your site in the meta_tags.php file.');

// Global entries for the <html> tag
define('HTML_PARAMS','dir="ltr" lang="pt-br"');

// charset for web pages and emails
define('CHARSET', 'iso-8859-1');

// header text in includes/header.php
define('HEADER_TITLE_TOP', 'Administração');
define('HEADER_TITLE_SUPPORT_SITE', 'Site de Suporte');
define('HEADER_TITLE_ONLINE_CATALOG', 'Loja');
define('HEADER_TITLE_VERSION', 'Versão');
define('HEADER_TITLE_LOGOFF', 'Sair');
//define('HEADER_TITLE_ADMINISTRATION', 'Administration');

// Define the name of your Gift Certificate as Gift Voucher, Gift Certificate, Zen Cart Dollars, etc. here for use through out the shop
  define('TEXT_GV_NAME','Vale Presente');
  define('TEXT_GV_NAMES','Vales Presente');
  define('TEXT_DISCOUNT_COUPON', 'Cupom de Desconto');

// used for redeem code, redemption code, or redemption id
  define('TEXT_GV_REDEEM','Código do Cupom');

// text for gender
define('MALE', 'Masculino');
define('FEMALE', 'Feminino');

// text for date of birth example
define('DOB_FORMAT_STRING', 'dd/mm/yyyy');

// configuration box text in includes/boxes/configuration.php
define('BOX_HEADING_CONFIGURATION', 'Configuração');
define('BOX_CONFIGURATION_MYSTORE', 'Minha Loja');
define('BOX_CONFIGURATION_LOGGING', 'Log');
define('BOX_CONFIGURATION_CACHE', 'Cache');

// modules box text in includes/boxes/modules.php
define('BOX_HEADING_MODULES', 'Módulos');
define('BOX_MODULES_PAYMENT', 'Pagamento');
define('BOX_MODULES_SHIPPING', 'Frete');
define('BOX_MODULES_ORDER_TOTAL', 'Total da Venda');
define('BOX_MODULES_PRODUCT_TYPES', 'Tipos de Produto');

// Categorias box text in includes/boxes/catalog.php
define('BOX_HEADING_CATALOG', 'Loja');
define('BOX_CATALOG_CATEGORIES_PRODUCTS', 'Categorias/Produtos');
define('BOX_CATALOG_PRODUCT_TYPES', 'Tipos de Produto');
define('BOX_CATALOG_CATEGORIES_OPTIONS_NAME_MANAGER', 'Gerenciador de Nome de Opção');
define('BOX_CATALOG_CATEGORIES_OPTIONS_VALUES_MANAGER', 'Gerenciador de Valor de Opção');
define('BOX_CATALOG_MANUFACTURERS', 'Fabricantes');
define('BOX_CATALOG_REVIEWS', 'Avaliações');
define('BOX_CATALOG_SPECIALS', 'Especiais');
define('BOX_CATALOG_PRODUCTS_EXPECTED', 'Produtos Futuros');
define('BOX_CATALOG_SALEMAKER', 'Criador de Promoções');
define('BOX_CATALOG_PRODUCTS_PRICE_MANAGER', 'Gerenciador de Preços de Produto');

// customers box text in includes/boxes/customers.php
define('BOX_HEADING_CUSTOMERS', 'Clientes');
define('BOX_CUSTOMERS_CUSTOMERS', 'Clientes');
define('BOX_CUSTOMERS_ORDERS', 'Vendas');
define('BOX_CUSTOMERS_GROUP_PRICING', 'Grupo de Preços');
define('BOX_CUSTOMERS_PAYPAL', 'PayPal IPN');

// taxes box text in includes/boxes/taxes.php
define('BOX_HEADING_LOCATION_AND_TAXES', 'Locais / Impostos');
define('BOX_TAXES_COUNTRIES', 'Países');
define('BOX_TAXES_ZONES', 'Zonas');
define('BOX_TAXES_GEO_ZONES', 'Definições de Zonas');
define('BOX_TAXES_TAX_CLASSES', 'Tipos de Impostos');
define('BOX_TAXES_TAX_RATES', 'Taxas de Imposto');

// reports box text in includes/boxes/reports.php
define('BOX_HEADING_REPORTS', 'Relatórios');
define('BOX_REPORTS_PRODUCTS_VIEWED', 'Produtos Vistos');
define('BOX_REPORTS_PRODUCTS_PURCHASED', 'Produtos Mais Vendidos');
define('BOX_REPORTS_ORDERS_TOTAL', 'Valor Total de Compras por Cliente');
define('BOX_REPORTS_PRODUCTS_LOWSTOCK', 'Produtos com Estoque Baixo');
define('BOX_REPORTS_CUSTOMERS_REFERRALS', 'Referências de Clientes');

// tools text in includes/boxes/tools.php
define('BOX_HEADING_TOOLS', 'Ferramentas');
define('BOX_TOOLS_ADMIN', 'Configurações de Administradores');
define('BOX_TOOLS_TEMPLATE_SELECT', 'Seleção de Tema');
define('BOX_TOOLS_BACKUP', 'Backup do Banco de Dados');
define('BOX_TOOLS_BANNER_MANAGER', 'Gerenciador de Banner');
define('BOX_TOOLS_CACHE', 'Controle de Cache');
define('BOX_TOOLS_DEFINE_LANGUAGE', 'Definir Idiomas');
define('BOX_TOOLS_FILE_MANAGER', 'Gerenciador de Arquivo');
define('BOX_TOOLS_MAIL', 'Enviar E-mail');
define('BOX_TOOLS_NEWSLETTER_MANAGER', 'Gerenciador de Notificações de Produtos e Newsletter');
define('BOX_TOOLS_SERVER_INFO', 'Informações de Versão/Servidor');
define('BOX_TOOLS_WHOS_ONLINE', 'Quem está Online');
define('BOX_TOOLS_STORE_MANAGER', 'Gerenciador da Loja');
define('BOX_TOOLS_DEVELOPERS_TOOL_KIT', 'Caixa de Ferramentas de Desenvolvedores');
define('BOX_TOOLS_SQLPATCH','Instalar Patches SQL');
define('BOX_TOOLS_EZPAGES','Páginas EZ');

define('BOX_HEADING_EXTRAS', 'Extras');

// define pages editor files
define('BOX_TOOLS_DEFINE_PAGES_EDITOR','Editor de Páginas Definidas');
define('BOX_TOOLS_DEFINE_MAIN_PAGE', 'Página Principal');
define('BOX_TOOLS_DEFINE_CONTACT_US','Fale Conosco');
define('BOX_TOOLS_DEFINE_PRIVACY','Privacidade');
define('BOX_TOOLS_DEFINE_SHIPPINGINFO','Frete e Devoluções');
define('BOX_TOOLS_DEFINE_CONDITIONS','Condições de Uso');
define('BOX_TOOLS_DEFINE_CHECKOUT_SUCCESS','Pagamento Efetuado com Sucesso');
define('BOX_TOOLS_DEFINE_PAGE_2','Página 2');
define('BOX_TOOLS_DEFINE_PAGE_3','Página 3');
define('BOX_TOOLS_DEFINE_PAGE_4','Página 4');


// localizaion box text in includes/boxes/localization.php
define('BOX_HEADING_LOCALIZATION', 'Localização');
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
define('JS_ERROR', 'Alguns erros ocorreram durante o processamento do seu formulário!\nPor favor, faça as correções necessárias:\n\n');

define('JS_OPTIONS_VALUE_PRICE', '* O novo atributo do produto precisa de um preço\n');
define('JS_OPTIONS_VALUE_PRICE_PREFIX', '* O novo atributo do produto precisa de um prefixo no preço\n');

define('JS_PRODUCTS_NAME', '* O novo produto precisa de um nome\n');
define('JS_PRODUCTS_DESCRIPTION', '* O novo produto precisa de uma descrição\n');
define('JS_PRODUCTS_PRICE', '* O novo produto precisa de um preço\n');
define('JS_PRODUCTS_WEIGHT', '* O novo produto precisa de um peso\n');
define('JS_PRODUCTS_QUANTITY', '* O novo produto precisa de uma quantidade\n');
define('JS_PRODUCTS_MODEL', '* O novo produto precisa de um modelo\n');
define('JS_PRODUCTS_IMAGE', '* O novo produto precisa de uma imagem\n');

define('JS_SPECIALS_PRODUCTS_PRICE', '* Um novo preço para este produto precisa ser configurado\n');

define('JS_GENDER', '* O item \'Gênero\' precisa ser escolhido.\n');
define('JS_FIRST_NAME', '* O campo \'Primeiro Nome\' precisa ter pelo menos ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' caracteres.\n');
define('JS_LAST_NAME', '* O campo \'Último Nome\' precisa ter pelo menos ' . ENTRY_LAST_NAME_MIN_LENGTH . ' caracteres.\n');
define('JS_DOB', '* O campo \'Data de Aniversário\' precisa ser no formato: xx/xx/xxxx (dia/mês/ano).\n');
define('JS_EMAIL_ADDRESS', '* O campo \'E-Mail\' precisa ter pelo menos ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' caracteres.\n');
define('JS_ADDRESS', '* O campo \'Endereço\' precisa ter pelo menos ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' caracteres.\n');
define('JS_POST_CODE', '* O campo \'CEP\' precisa ter pelo menos ' . ENTRY_POSTCODE_MIN_LENGTH . ' caracteres.\n');
define('JS_CITY', '* O campo \'Cidade\' precisa ter pelo menos ' . ENTRY_CITY_MIN_LENGTH . ' caracteres.\n');
define('JS_STATE', '* O item \'Estado\' precisa ser selecionado.\n');
define('JS_STATE_SELECT', '-- Selecione --');
define('JS_ZONE', '* O item \'Estado\' precisa ser escolhido de uma lista para este país.');
define('JS_COUNTRY', '* Um \'País\' precisa ser escolhido.\n');
define('JS_TELEPHONE', '* O campo \'Telefone\' precisa ter pelo menos ' . ENTRY_TELEPHONE_MIN_LENGTH . ' caracteres.\n');
define('JS_PASSWORD', '* Os campos \'Senha\' e \'Confirmação\' precisam ser iguais e ter pelo menos ' . ENTRY_PASSWORD_MIN_LENGTH . ' caracteres.\n');

define('JS_ORDER_DOES_NOT_EXIST', 'A Venda Número %s não existe!');

define('CATEGORY_PERSONAL', 'Pessoal');
define('CATEGORY_ADDRESS', 'Endereço');
define('CATEGORY_CONTACT', 'Contato');
define('CATEGORY_COMPANY', 'Empresa');
define('CATEGORY_OPTIONS', 'Opções');

define('ENTRY_GENDER', 'Gênero:');
define('ENTRY_GENDER_ERROR', '&nbsp;<span class="errorText">obrigatório</span>');
define('ENTRY_FIRST_NAME', 'Primeiro Nome:');
define('ENTRY_FIRST_NAME_ERROR', '&nbsp;<span class="errorText">mínimo ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' caracteres</span>');
define('ENTRY_LAST_NAME', 'Último Nome:');
define('ENTRY_LAST_NAME_ERROR', '&nbsp;<span class="errorText">mínimo ' . ENTRY_LAST_NAME_MIN_LENGTH . ' caracteres</span>');
define('ENTRY_DATE_OF_BIRTH', 'Data de Aniversário:');
define('ENTRY_DATE_OF_BIRTH_ERROR', '&nbsp;<span class="errorText">(ex. 21/05/1970)</span>');
define('ENTRY_EMAIL_ADDRESS', 'E-Mail:');
define('ENTRY_EMAIL_ADDRESS_ERROR', '&nbsp;<span class="errorText">mínimo ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' caracteres</span>');
define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', '&nbsp;<span class="errorText">The email address doesn\'t appear to be valid!</span>');
define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', '&nbsp;<span class="errorText">This email address already exists!</span>');
define('ENTRY_COMPANY', 'Nome da Empresa:');
define('ENTRY_COMPANY_ERROR', '');
define('ENTRY_PRICING_GROUP', 'Grupo de Desconto de Preço');
define('ENTRY_STREET_ADDRESS', 'Endereço (Rua, Av., etc):');
define('ENTRY_STREET_ADDRESS_ERROR', '&nbsp;<span class="errorText">mínimo ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' caracteres</span>');
define('ENTRY_SUBURB', 'Bairro:');
define('ENTRY_SUBURB_ERROR', '');
define('ENTRY_POST_CODE', 'CEP:');
define('ENTRY_POST_CODE_ERROR', '&nbsp;<span class="errorText">mínimo ' . ENTRY_POSTCODE_MIN_LENGTH . ' caracteres</span>');
define('ENTRY_CITY', 'Cidade:');
define('ENTRY_CITY_ERROR', '&nbsp;<span class="errorText">mínimo ' . ENTRY_CITY_MIN_LENGTH . ' caracteres</span>');
define('ENTRY_STATE', 'Estado:');
define('ENTRY_STATE_ERROR', '&nbsp;<span class="errorText">obrigatório</span>');
define('ENTRY_COUNTRY', 'País:');
define('ENTRY_COUNTRY_ERROR', '');
define('ENTRY_TELEPHONE_NUMBER', 'Telefone:');
define('ENTRY_TELEPHONE_NUMBER_ERROR', '&nbsp;<span class="errorText">mínimo ' . ENTRY_TELEPHONE_MIN_LENGTH . ' caracteres</span>');
define('ENTRY_FAX_NUMBER', 'Fax:');
define('ENTRY_FAX_NUMBER_ERROR', '');
define('ENTRY_NEWSLETTER', 'Newsletter:');
define('ENTRY_NEWSLETTER_YES', 'Inscrito');
define('ENTRY_NEWSLETTER_NO', 'Não Inscrito');
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
define('IMAGE_ICON_STATUS_RED_EZPAGES', 'Erro -- muitos tipos de conteúdo/URL digitado');
define('IMAGE_ICON_STATUS_RED_ERROR', 'Erro');
define('IMAGE_ICON_INFO', 'Informação');
define('IMAGE_INSERT', 'Inserir');
define('IMAGE_LOCK', 'Trancar');
define('IMAGE_MODULE_INSTALL', 'Instalar Módulo');
define('IMAGE_MODULE_REMOVE', 'Remover Módulo');
define('IMAGE_MOVE', 'Mover');
define('IMAGE_NEW_BANNER', 'Novo Banner');
define('IMAGE_NEW_CATEGORY', 'Nova Categoria');
define('IMAGE_NEW_COUNTRY', 'Novo País');
define('IMAGE_NEW_CURRENCY', 'Nova Moeda');
define('IMAGE_NEW_FILE', 'Novo Arquivo');
define('IMAGE_NEW_FOLDER', 'Nova Pasta');
define('IMAGE_NEW_LANGUAGE', 'Novo Idioma');
define('IMAGE_NEW_NEWSLETTER', 'Nova Newsletter');
define('IMAGE_NEW_PRODUCT', 'Novo Produto');
define('IMAGE_NEW_SALE', 'Nova Promoção');
define('IMAGE_NEW_TAX_CLASS', 'Nova Classe de Imposto');
define('IMAGE_NEW_TAX_RATE', 'Nova Taxa de Imposto');
define('IMAGE_NEW_TAX_ZONE', 'Nova Zona de Imposto');
define('IMAGE_NEW_ZONE', 'Nova Zona');
define('IMAGE_OPTION_NAMES', 'Gerenciardo de Nomes de Opções');
define('IMAGE_OPTION_VALUES', 'Gerenciador de Valores de Opções');
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
define('IMAGE_PRODUCTS_PRICE_MANAGER', 'Gerenciador de Preços de Produtos');
define('IMAGE_UPDATE_PRICE_CHANGES', 'Atualizar Mudanças nos Preços');
define('IMAGE_ADD_BLANK_DISCOUNTS','Adicionar ' . DISCOUNT_QTY_ADD . ' Descontos em Branco');
define('IMAGE_CHECK_VERSION', 'Verificar Atualização do Zen Cart');
define('IMAGE_PRODUCTS_TO_CATEGORIES', 'Gerenciador de Links de Múltiplas Categorias');

define('IMAGE_ICON_STATUS_ON', 'Estado - Habilitado');
define('IMAGE_ICON_STATUS_OFF', 'Estado - Desabilitado');
define('IMAGE_ICON_LINKED', 'Produto está Linkado');

define('IMAGE_REMOVE_SPECIAL','Remover Infomração de Preço Especial');
define('IMAGE_REMOVE_FEATURED','Remover Informação de Produto em Destaque');
define('IMAGE_INSTALL_SPECIAL', 'Adicionar Informação de Preço Especial');
define('IMAGE_INSTALL_FEATURED', 'Adicionar Informação de Produto em Destaque');

define('ICON_PRODUCTS_PRICE_MANAGER','Gerenciador de Preços de Produtos');
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
define('ICON_PREVIOUS_LEVEL', 'Nível Anterior');
define('ICON_PREVIEW', 'Prever');
define('ICON_RESET', 'Resetar');
define('ICON_STATISTICS', 'Estatísticas');
define('ICON_SUCCESS', 'Successo');
define('ICON_TICK', 'Verdadeiro');
//define('ICON_UNLOCKED', 'Unlocked');
define('ICON_WARNING', 'Atenção');

// constants for use in zen_prev_next_display function
define('TEXT_RESULT_PAGE', 'Página %s de %d');
define('TEXT_DISPLAY_NUMBER_OF_ADMINS', 'Mostrando de <b>%d</b> à <b>%d</b> (de <b>%d</b> administradores)');
define('TEXT_DISPLAY_NUMBER_OF_BANNERS', 'Mostrando de <b>%d</b> à <b>%d</b> (de <b>%d</b> banners)');
define('TEXT_DISPLAY_NUMBER_OF_CATEGORIES', 'Mostrando de <b>%d</b> à <b>%d</b> (de <b>%d</b> categorias)');
define('TEXT_DISPLAY_NUMBER_OF_COUNTRIES', 'Mostrando de <b>%d</b> à <b>%d</b> (de <b>%d</b> países)');
define('TEXT_DISPLAY_NUMBER_OF_CUSTOMERS', 'Mostrando de <b>%d</b> à <b>%d</b> (de <b>%d</b> clientes)');
define('TEXT_DISPLAY_NUMBER_OF_CURRENCIES', 'Mostrando de <b>%d</b> à <b>%d</b> (de <b>%d</b> moedas)');
define('TEXT_DISPLAY_NUMBER_OF_FEATURED', 'Mostrando de <b>%d</b> à <b>%d</b> (de <b>%d</b> produtos em destaque)');
define('TEXT_DISPLAY_NUMBER_OF_LANGUAGES', 'Mostrando de <b>%d</b> à <b>%d</b> (de <b>%d</b> idiomas)');
define('TEXT_DISPLAY_NUMBER_OF_MANUFACTURERS', 'Mostrando de <b>%d</b> à <b>%d</b> (de <b>%d</b> fabricantes)');
define('TEXT_DISPLAY_NUMBER_OF_NEWSLETTERS', 'Mostrando de <b>%d</b> à <b>%d</b> (de <b>%d</b> newsletters)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS', 'Mostrando de <b>%d</b> à <b>%d</b> (de <b>%d</b> vendas)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS_STATUS', 'Mostrando de <b>%d</b> à <b>%d</b> (de <b>%d</b> estado de vendas)');
define('TEXT_DISPLAY_NUMBER_OF_PRICING_GROUPS', 'Mostrando de <b>%d</b> à <b>%d</b> (de <b>%d</b> grupos de preço)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', 'Mostrando de <b>%d</b> à <b>%d</b> (de <b>%d</b> produtos)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCT_TYPES', 'Mostrando de <b>%d</b> à <b>%d</b> (de <b>%d</b> tipos de produto)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_EXPECTED', 'Mostrando de <b>%d</b> à <b>%d</b> (de <b>%d</b> produtos futuros)');
define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', 'Mostrando de <b>%d</b> à <b>%d</b> (de <b>%d</b> avaliações de produto)');
define('TEXT_DISPLAY_NUMBER_OF_SALES', 'Mostrando de <b>%d</b> à <b>%d</b> (de <b>%d</b> promoções)');
define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', 'Mostrando de <b>%d</b> à <b>%d</b> (de <b>%d</b> produtos em especial)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_CLASSES', 'Mostrando de <b>%d</b> à <b>%d</b> (de <b>%d</b> classes de imposto)');
define('TEXT_DISPLAY_NUMBER_OF_TEMPLATES', 'Mostrando de <b>%d</b> à <b>%d</b> (de <b>%d</b> associações de modelos)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_ZONES', 'Mostrando de <b>%d</b> à <b>%d</b> (de <b>%d</b> zona de imposto)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_RATES', 'Mostrando de <b>%d</b> à <b>%d</b> (de <b>%d</b> taxa de imposto)');
define('TEXT_DISPLAY_NUMBER_OF_ZONES', 'Mostrando de <b>%d</b> à <b>%d</b> (de <b>%d</b> zonas)');

define('PREVNEXT_BUTTON_PREV', '&lt;&lt;');
define('PREVNEXT_BUTTON_NEXT', '&gt;&gt;');


define('TEXT_DEFAULT', 'padrão');
define('TEXT_SET_DEFAULT', 'Definir como padrão');
define('TEXT_FIELD_REQUIRED', '&nbsp;<span class="fieldRequired">* Obrigatório</span>');

define('ERROR_NO_DEFAULT_CURRENCY_DEFINED', 'Erro: Não existe nenhuma moeda padrão configurada. Por favor, configure indo até: Administração -> Ferramentas -> Localização -> Moedas');

define('TEXT_CACHE_CATEGORIES', 'Caixa de Categorias');
define('TEXT_CACHE_MANUFACTURERS', 'Caixa de Fabricantes');
define('TEXT_CACHE_ALSO_PURCHASED', 'Módulo Também Comprado');

define('TEXT_NONE', '--nenhum--');
define('TEXT_TOP', 'Topo');

define('ERROR_DESTINATION_DOES_NOT_EXIST', 'Erro: O destino não existe %s');
define('ERROR_DESTINATION_NOT_WRITEABLE', 'Erro: O destino não pôde ser escrito %s');
define('ERROR_FILE_NOT_SAVED', 'Erro: O arquivo enviado não foi salvo.');
define('ERROR_FILETYPE_NOT_PermitirED', 'Erro: O tipo de arquivo enviado não é Permitido  %s');
define('SUCCESS_FILE_SAVED_SUCCESSFULLY', 'Successo: Arquivo salvo com sucesso em %s');
define('WARNING_NO_FILE_UPLOADED', 'Atenção: Nenhum arquivo foi enviado.');
define('WARNING_FILE_UPLOADS_DISABLED', 'Atenção: O envio de arquivos está desativado no arquivo de configuração php.ini.');
define('ERROR_ADMIN_SECURITY_WARNING', 'Atenção: Seu Login de Administrador não está seguro. Você está usando os dados de login padrão: Admin admin ou você não removeu ou mudou: demo demoonly<br />O(s) login(s) deve(m) ser mudado(s) assim que possível por questões de segurança.<br />Acesse Ferramentas -> Configurações de Administradores e mude ajuste o(s) login(s).<br />Para mais informações de Segurança, por favor acesse o diretório /docs da sua loja');
define('WARNING_DATABASE_VERSION_OUT_OF_DATE','Seu banco de dados parece precisar de uma atualização. Veja maiores informações em Ferramentas -> Informação do Servidor.');
define('WARN_DATABASE_VERSION_PROBLEM','true'); //set to false to turn off warnings about database version mismatches
define('WARNING_ADMIN_DOWN_FOR_MAINTENANCE', '<strong>ATENÇÃO:</strong> O site está atualmente Desligado para Manutenção...<br />NOTA: Você não pode testar a maioria dos módulos de Pagamento e Frete no modo Manutenção');
define('WARNING_BACKUP_CFG_FILES_TO_DELETE', 'ATENÇÃO: Estes arquivos devem ser excluídos para evitar vulnerabilidades de segurança: ');
define('WARNING_INSTALL_DIRECTORY_EXISTS', 'Atenção: O diretório de instalação ainda existe em: ' . DIR_FS_CATALOG . 'zc_install. Por favor, remova este diretório por questões de segurança.');
define('WARNING_CONFIG_FILE_WRITEABLE', 'Atenção: As permissões para o seu arquivo de configuração: %sincludes/configure.php estão incorretas. Isto é um risco de segurança - por favor, configure as permissões de usuário para este arquivo para Somente Leitura ou CHMOD 444.  <a href="http://tutorials.zen-cart.com/index.php?article=90" target="_blank">Veja esta Nota</a>');
define('WARNING_COULD_NOT_LOCATE_LANG_FILE', 'ATENÇÃO: Não foi possível localizar o arquivo de idioma: ');
define('ERROR_MODULE_REMOVAL_PROHIBITED', 'ERRO: Remoção do módulo não permitida: ');

define('_JANUARY', 'Janeiro');
define('_FEBRUARY', 'Fevereiro');
define('_MARCH', 'Março');
define('_APRIL', 'Abril');
define('_MAY', 'Maio');
define('_JUNE', 'Junho');
define('_JULY', 'Julho');
define('_AUGUST', 'Agosto');
define('_SEPTEMBER', 'Setembro');
define('_OCTOBER', 'Outubro');
define('_NOVEMBER', 'Novembro');
define('_DECEMBER', 'Dezembro');

define('TEXT_DISPLAY_NUMBER_OF_GIFT_VOUCHERS', 'Mostrando de <b>%d</b> à <b>%d</b> (de <b>%d</b> vale presentes)');
define('TEXT_DISPLAY_NUMBER_OF_COUPONS', 'Mostrando de <b>%d</b> à <b>%d</b> (de <b>%d</b> cupons)');

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
define('NOT_INSTALLED_TEXT','Não Instalado');

// Produto Options Values Sort Order - option_values.php
  define('BOX_CATALOG_PRODUCT_OPTIONS_VALUES','Ordenador de Valores de Opções ');

  define('TEXT_UPDATE_SORT_ORDERS_OPTIONS','<strong>Atualizar Ordem de Amostragem do Atributo pelo Valor de Opção Padrão</strong> ');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_UPDATES','<strong>Atualizar a Ordem de Amostragem dos Atributos de Todos os Produtos</strong><br />para que fiquem igual a Ordem de Amostragem das Opções de Valores:<br />');

// Produto Options Name Sort Order - option_values.php
  define('BOX_CATALOG_PRODUCT_OPTIONS_NAME','Ordenador dos Nomes de Opção');

// Attributes only
  define('BOX_CATALOG_CATEGORIES_ATTRIBUTES_CONTROLLER','Controlador de Atributos');

// generic model
  define('TEXT_MODEL','Modelo:');

// column controller
  define('BOX_TOOLS_LAYOUT_CONTROLLER','Controlador das Caixas de Layout');

// check GV release queue and alert store owner
  define('SHOW_GV_QUEUE',true);
  define('TEXT_SHOW_GV_QUEUE','%s aguardando aprovação ');
  define('IMAGE_GIFT_QUEUE', 'Fila de ' . TEXT_GV_NAME);
  define('IMAGE_ORDER','Venda');

  define('BOX_TOOLS_EMAIL_WELCOME','E-mail de Boas Vindas');

  define('IMAGE_DISPLAY','Mostrar');
  define('IMAGE_UPDATE_SORT','Atualizar Ordem de Amostragem');
  define('IMAGE_EDIT_PRODUCT','Editar Produto');
  define('IMAGE_EDIT_ATTRIBUTES','Editar Atributos');
  define('TEXT_NEW_PRODUCT', 'Produto na Categoria: &quot;%s&quot;');
  define('IMAGE_OPTIONS_VALUES','Nomes de Opção de Valores de Opção');
  define('TEXT_PRODUCTS_PRICE_MANAGER','GERENCIADOR DE PREÇOS');
  define('TEXT_PRODUCT_EDIT','EDITAR PRODUTO');
  define('TEXT_ATTRIBUTE_EDIT','EDITAR ATRIBUTOS');
  define('TEXT_PRODUCT_DETAILS','VER DETALHES');

// sale maker
  define('DEDUCTION_TYPE_DROPDOWN_0', 'Quantia a Deduzir');
  define('DEDUCTION_TYPE_DROPDOWN_1', 'Porcentagem');
  define('DEDUCTION_TYPE_DROPDOWN_2', 'Novo Preço');

// Min and Units
  define('PRODUCTS_QUANTITY_MIN_TEXT_LISTING','Mín:');
  define('PRODUCTS_QUANTITY_UNIT_TEXT_LISTING','Unidades:');
  define('PRODUCTS_QUANTITY_IN_CART_LISTING','No Carrinho:');
  define('PRODUCTS_QUANTITY_ADD_ADDITIONAL_LISTING','Adicionar Adicional:');

  define('TEXT_PRODUCTS_MIX_OFF','*Nenhuma Opção Mixada');
  define('TEXT_PRODUCTS_MIX_ON','*Com Opção Mixada');

// search filters
  define('TEXT_INFO_SEARCH_DETAIL_FILTER','Filtro de Pesquisa: ');
  define('HEADING_TITLE_SEARCH_DETAIL','Pesquisar: ');
  define('HEADING_TITLE_SEARCH_DETAIL_REPORTS', 'Pesquisar por Produto(s) - Limitado por vírgulas');
  define('HEADING_TITLE_SEARCH_DETAIL_REPORTS_NAME_MODEL', 'Pesquisar por Nome/Modelo dos Produtos');

  define('PREV_NEXT_PRODUCT', 'Produtos: ');
  define('TEXT_CATEGORIES_STATUS_INFO_OFF', '<span class="alert">*A Categoria está Desabilitada</span>');
  define('TEXT_PRODUCTS_STATUS_INFO_OFF', '<span class="alert">*O Produto está Desabilitado</span>');

// admin demo
  define('ADMIN_DEMO_ACTIVE','Demonstração da Administração está atualmente Ativa. Algumas configuração serão desabilitadas');
  define('ADMIN_DEMO_ACTIVE_EXCLUSION','Demonstração da Administração está atualmente Ativa. Algumas configuração serão desabilitadas - <strong>NOTA: Ignorado para Certos Administradores</strong>');
  define('ERROR_ADMIN_DEMO','Demonstração da Administração está atualmente Ativa... a(s) opção(ões) que você está tentando executar foi(ram) desativada(s)');

// Version Check notices
  define('TEXT_VERSION_CHECK_NEW_VER','Nova Versão Disponível v');
  define('TEXT_VERSION_CHECK_NEW_PATCH','Novo PATCH Disponível: v');
  define('TEXT_VERSION_CHECK_PATCH','patch');
  define('TEXT_VERSION_CHECK_DOWNLOAD','Faça o Download Aqui');
  define('TEXT_VERSION_CHECK_CURRENT','Sua versão do Zen Cart&trade; parece ser a atual.');

// downloads manager
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_DOWNLOADS_MANAGER', 'Mostrando de <b>%d</b> à <b>%d</b> (de <b>%d</b> downloads)');
define('BOX_CATALOG_CATEGORIES_ATTRIBUTES_DOWNLOADS_MANAGER', 'Gerenciador de Downloads');

define('BOX_CATALOG_FEATURED','Produtos em Destaque');

define('ERROR_NOTHING_SELECTED', 'Nada foi selecionado... Nenhuma alteração foi feita');
define('TEXT_STATUS_WARNING','<strong>NOTA:</strong> o estado será ativado/desativado quando as datas forem definidas');

define('TEXT_LEGEND_LINKED', 'Produto Linkado');
define('TEXT_MASTER_CATEGORIES_ID','Categoria Mestre do Produto:');
define('TEXT_LEGEND', 'LEGENDA: ');
define('TEXT_LEGEND_STATUS_OFF', 'Estado DESLIGADO ');
define('TEXT_LEGEND_STATUS_ON', 'Estado LIGADO ');

define('TEXT_INFO_MASTER_CATEGORIES_ID', '<strong>NOTA: A Categoria Mestre é usada para propósitos de preço quando a<br />categoria do produto influencia nos preços de produtos linkados, exemplo: Promoções</strong>');
define('TEXT_YES', 'Sim');
define('TEXT_NO', 'Não');

// shipping error messages
define('ERROR_SHIPPING_CONFIGURATION', '<strong>Erros na Configuração de Frete!</strong>');
define('ERROR_SHIPPING_ORIGIN_ZIP', '<strong>Atenção:</strong> O CEP da Loja não está definido. Veja Configuração -> Frete/Empacotamento para configurá-lo.');
define('ERROR_ORDER_WEIGHT_ZERO_STATUS', '<strong>Atenção:</strong> Peso 0 está configurado para Frete Grátis e o Módulo de Frete Grátis não está habilitado');
define('ERROR_USPS_STATUS', '<strong>Atenção:</strong> O Módulo de Frete USPS está sem o nome de usuário ou está configurado como TESTE (TEST) ao invés de PRODUÇÃO (PRODUCTION) e não irá funcionar.<br />Se você não puder receber Cotações de Frete USPS, contacte a USPS para ativar as Ferramentas Web na sua conta no site de produção deles. 1-800-344-7779 ou icustomercare@usps.com');

define('ERROR_SHIPPING_MODULES_NOT_DEFINED', 'NOTA: Você não possui módulos de frete ativo. Por favor, acesse Módulos -> Frete para configurar.');
define('ERROR_PAYMENT_MODULES_NOT_DEFINED', 'NOTA: Você não possui módulos de pagamento ativo. Por favor, acesse Módulos -> Pagamento para configurar.');

// text pricing
define('TEXT_CHARGES_WORD','Preço Calculado:');
define('TEXT_PER_WORD','<br />Preço por palavra: ');
define('TEXT_WORDS_FREE',' Palvra(s) gr;atis ');
define('TEXT_CHARGES_LETTERS','Preço Calculado:');
define('TEXT_PER_LETTER','<br />Preço por folha: ');
define('TEXT_LETTERS_FREE',' Folha(s) grátis ');
define('TEXT_ONETIME_CHARGES','*pagamento único = ');
define('TEXT_ONETIME_CHARGES_EMAIL',"\t" . '*pagamento único = ');
define('TEXT_ATTRIBUTES_QTY_PRICES_HELP', 'Opção de Quantidades de Desconto');
define('TABLE_ATTRIBUTES_QTY_PRICE_QTY','QTD');
define('TABLE_ATTRIBUTES_QTY_PRICE_PRICE','PREÇO');
define('TEXT_ATTRIBUTES_QTY_PRICES_ONETIME_HELP', 'Opção de Quantidade de Descontos de Pagamento Único');
define('TEXT_CATEGORIES_PRODUCTS', 'Selecione uma Categoria com Produtos... Ou navegue entre os Produtos');
define('TEXT_PRODUCT_TO_VIEW', 'Selecione um Produto para Ver e Pressione Mostrar...');

define('TEXT_INFO_SET_MASTER_CATEGORIES_ID', 'ID da Categoria Mestre Inválida');
define('TEXT_INFO_ID', ' ID# ');
define('TEXT_INFO_SET_MASTER_CATEGORIES_ID_WARNING', '<strong>ATENÇÃO:</strong> Este produto está linkado a múltiplas Categorias, mas nenhuma Categoria Mestre foi configurada!');

define('PRODUCTS_PRICE_IS_CALL_FOR_PRICE_TEXT', 'O Produto é Sob Consulta');
define('PRODUCTS_PRICE_IS_FREE_TEXT','O Produto é Grátis');

define('TEXT_PRODUCT_WEIGHT_UNIT','kgs');

// min, max, units
define('PRODUCTS_QUANTITY_MAX_TEXT_LISTING', 'Máx:');

// Discount Savings
  define('PRODUCT_PRICE_DISCOUNT_PREFIX','Economize:&nbsp;');
  define('PRODUCT_PRICE_DISCOUNT_PERCENTAGE','% de desconto');
  define('PRODUCT_PRICE_DISCOUNT_AMOUNT','&nbsp;de desconto');
// Sale Maker Sale Price
  define('PRODUCT_PRICE_SALE','Promoção:&nbsp;');

// Rich Text / HTML resources
define('TEXT_HTML_EDITOR_NOT_DEFINED','Você não possui um editor HTML definido ou seu JavaScript está desabilitado, você pode digitar HTML puro manualmente aqui.');
define('TEXT_WARNING_HTML_DISABLED','<span class="main">Nota: Você está usando um e-mail de somente TEXTO. Se você desejar enviar HTML você precisa habilitar a opção "usar HTML MIME" nas opções de E-mail em Configuração -> Opções de E-mail</span>');
define('TEXT_WARNING_CANT_DISPLAY_HTML','<span class="main">Nota: Você está usando um e-mail de somente TEXTO. Se você desejar enviar HTML você precisa habilitar a opção "usar HTML MIME" nas opções de E-mail em Configuração -> Opções de E-mail</span>');
define('TEXT_EMAIL_CLIENT_CANT_DISPLAY_HTML','Você está vendo este texto porque nós enviamos pra você um e-mail em formato HTML, mas seu cliente de e-mail não pode mostrar mensagens em formato HTML.');
define('ENTRY_EMAIL_PREFERENCE','Preferências de Formato de E-mail:');
define('ENTRY_EMAIL_FORMAT_COMMENTS','Escolhendo "nenhum" ou "sem opção" desabilita TODO e-mail, incluindo detalhes de vendas');
define('ENTRY_EMAIL_HTML_DISPLAY','HTML');
define('ENTRY_EMAIL_TEXT_DISPLAY','Somente TEXTO');
define('ENTRY_EMAIL_NONE_DISPLAY','Nunca');
define('ENTRY_EMAIL_OPTOUT_DISPLAY','Não Optou por Newsletters');
define('ENTRY_NOTHING_TO_SEND','Você não digitou nenhum conteúdo para sua mensagem');
 define('EMAIL_SEND_FAILED','ERRO: Falha ao enviaro e-mail para: "%s" <%s> com assunto: "%s"');

  define('EDITOR_NONE', 'Texto Simples');
  define('TEXT_EDITOR_INFO', 'Editor de Texto');
  define('ERROR_EDITORS_FOLDER_NOT_FOUND', 'Você tem um editor HTML selecionado em \'Minha Loja\', mas o diretoório \'/editors/\' não pode ser localizado. Por favor, desabilite sua seleção ou mova seus arquivos de editor para o diretório \''.DIR_WS_CATALOG.'editors/\'');
  define('TEXT_CATEGORIES_PRODUCTS_SORT_ORDER_INFO', 'Ordem de Amostragem de Categorias/Produto: ');
  define('TEXT_SORT_PRODUCTS_SORT_ORDER_PRODUCTS_NAME', 'Ordem de Amostragem de Produtos, Nome do Produto');
  define('TEXT_SORT_PRODUCTS_NAME', 'Nome do Produto');
  define('TEXT_SORT_PRODUCTS_MODEL', 'Modelo do Produto');
  define('TEXT_SORT_PRODUCTS_QUANTITY', 'Qtd+ de Produtos, Nome do Produto');
  define('TEXT_SORT_PRODUCTS_QUANTITY_DESC', 'Qtd de Produtos-, Nome do Produto');
  define('TEXT_SORT_PRODUCTS_PRICE', 'Preço dos Produtos+, Nome do Produto');
  define('TEXT_SORT_PRODUCTS_PRICE_DESC', 'Preço dos Produtos-, Nome do Produto');
  define('TEXT_SORT_CATEGORIES_SORT_ORDER_PRODUCTS_NAME', 'Ordem de Amostragem da Categoria, Nome da Categoria');
  define('TEXT_SORT_CATEGORIES_NAME', 'Nome da Categoria');



  define('TABLE_HEADING_YES','Sim');
  define('TABLE_HEADING_NO','Não');
  define('TEXT_PRODUCTS_IMAGE_MANUAL', '<br /><strong>Ou, selecione uma imagem existente no servidor, nome do arquivo:</strong>');
  define('TEXT_IMAGES_OVERWRITE', '<br /><strong>Substituir Imagem No Servidor?</strong>');
  define('TEXT_IMAGE_OVERWRITE_WARNING','ATENÇÃO: NOME DO ARQUIVO foi atualizado, mas não foi sub was updated but not overwritten ');
  define('TEXT_IMAGES_DELETE', '<strong>Delete Image?</strong> NOTA: Removes Image from Produto, Image is NOT removed from server:');
  define('TEXT_IMAGE_CURRENT', 'Image Name: ');

  define('ERROR_DEFINE_OPTION_NAMES', 'Atenção: No Option Names have been defined');
  define('ERROR_DEFINE_OPTION_VALUES', 'Atenção: No Option Values have been defined');
  define('ERROR_DEFINE_PRODUCTS', 'Atenção: No Produtos have been defined');
  define('ERROR_DEFINE_PRODUCTS_MASTER_CATEGORIES_ID', 'Atenção: No Master Categorias ID has been set for this Produto');

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
  define('TEXT_EZPAGES_STATUS_HEADER_ADMIN', 'ATENÇÃO: EZ-PAGES HEADER - On for Admin IP Only');
  define('TEXT_EZPAGES_STATUS_FOOTER_ADMIN', 'ATENÇÃO: EZ-PAGES FOOTER - On for Admin IP Only');
  define('TEXT_EZPAGES_STATUS_SIDEBOX_ADMIN', 'ATENÇÃO: EZ-PAGES SIDEBOX - On for Admin IP Only');

// moved from product types
// warnings on Virtual and Always Free Shipping
  define('TEXT_VIRTUAL_PREVIEW','Atenção: This product is marked - Free Shipping and Skips Shipping Address<br />No shipping will be requested when all products in the order are Virtual Produtos');
  define('TEXT_VIRTUAL_EDIT','Atenção: This product is marked - Free Shipping and Skips Shipping Address<br />No shipping will be requested when all products in the order are Virtual Produtos');
  define('TEXT_FREE_SHIPPING_PREVIEW','Atenção: This product is marked - Free Shipping, Shipping Address Required<br />Free Shipping Module is required when all products in the order are Always Free Shipping Produtos');
  define('TEXT_FREE_SHIPPING_EDIT','Atenção: Yes makes the product - Free Shipping, Shipping Address Required<br />Free Shipping Module is required when all products in the order are Always Free Shipping Produtos');

// admin activity log warnings
  define('WARNING_ADMIN_ACTIVITY_LOG_DATE', 'ATENÇÃO: The Admin Activity Log table has records over 2 months old and should be cleaned ... ');
  define('WARNING_ADMIN_ACTIVITY_LOG_RECORDS', 'ATENÇÃO: The Admin Activity Log table has over 50,000 records and should be cleaned ... ');
  define('RESET_ADMIN_ACTIVITY_LOG', 'Go to Store Manager to Reset the Admin Activity Log');

  define('CATEGORY_HAS_SUBCATEGORIES', 'NOTA: Categoria has SubCategorias<br />Produtos cannot be added');

  define('WARNING_WELCOME_DISCOUNT_COUPON_EXPIRES_IN', 'ATENÇÃO! Welcome Email Discount Coupon expires in %s days');

///////////////////////////////////////////////////////////
// include additional files:
  require(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . FILENAME_EMAIL_EXTRAS);
  include(zen_get_file_directory(DIR_FS_CATALOG_LANGUAGES . $_SESSION['language'] . '/', FILENAME_OTHER_IMAGES_NAMES, 'false'));


