<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: english.php 19690 2011-10-04 16:41:45Z drbyte $
 */

// FOLLOWING WERE moved to meta_tags.php
//define('TITLE', 'Zen Cart!');
//define('SITE_TAGLINE', 'The Art of E-commerce');
//define('CUSTOM_KEYWORDS', 'ecommerce, open source, shop, online shopping');
// END: moved to meta_tags.php

 define('FOOTER_TEXT_BODY', 'Copyright &copy; ' . date('Y') . ' <a href="' . zen_href_link(FILENAME_DEFAULT) . '" target="_blank">' . STORE_NAME . '</a>. Desenvolvido por <a href="http://www.zen-cart.com" target="_blank">Zen Cart</a> - Traduzido por <a href="http://customscriptz.com" target="_blank">Custom Scriptz</a>');

// look in your $PATH_LOCALE/locale directory for available locales..
 @setlocale(LC_TIME, 'en_US');
 define('DATE_FORMAT_SHORT', '%d/%m/%Y'); // this is used for strftime()
 define('DATE_FORMAT_LONG', '%A, %d de %B de %Y'); // this is used for strftime()
 define('DATE_FORMAT', 'd/m/Y'); // this is used for date()
 define('DATE_TIME_FORMAT', DATE_FORMAT_SHORT . ' %H:%M:%S');

////
// Return date in raw format
// $date should be in format mm/dd/yyyy
// raw date is in format YYYYMMDD, or DDMMYYYY
 if (!function_exists('zen_date_raw')) {
  function zen_date_raw($date, $reverse = false) {
   if ($reverse) {
    return substr($date, 0, 2) . substr($date, 3, 2) . substr($date, 6, 4);
   } else {
    return substr($date, 6, 4) . substr($date, 3, 2) . substr($date, 0, 2);
   }
  }
 }

// if USE_DEFAULT_LANGUAGE_CURRENCY is true, use the following currency, instead of the applications default currency (used when changing language)
 define('LANGUAGE_CURRENCY', 'BRL');

// Global entries for the <html> tag
 define('HTML_PARAMS','dir="ltr" lang="pt-br"');

// charset for web pages and emails
 define('CHARSET', 'utf-8');

// footer text in includes/footer.php
 define('FOOTER_TEXT_REQUESTS_SINCE', 'visitas desde');

// Define the name of your Gift Certificate as Gift Voucher, Gift Certificate, Zen Cart Dollars, etc. here for use through out the shop
 define('TEXT_GV_NAME','Vale Presente');
 define('TEXT_GV_NAMES','Vales Presente');

// used for redeem code, redemption code, or redemption id
 define('TEXT_GV_REDEEM','C&oacute;digo do Cupom');

// used for redeem code sidebox
 define('BOX_HEADING_GV_REDEEM', TEXT_GV_NAME);
 define('BOX_GV_REDEEM_INFO', 'C&oacute;digo do Cupom: ');

// text for gender
 define('MALE', 'Sr.');
 define('FEMALE', 'Sra.');
 define('MALE_ADDRESS', 'Sr.');
 define('FEMALE_ADDRESS', 'Sra.');

// text for date of birth example
 define('DOB_FORMAT_STRING', 'dd/mm/aaaa');

//text for sidebox heading links
 define('BOX_HEADING_LINKS', '&nbsp;&nbsp;[mais]');

// categories box text in sideboxes/categories.php
 define('BOX_HEADING_CATEGORIES', 'Categorias');

// manufacturers box text in sideboxes/manufacturers.php
 define('BOX_HEADING_MANUFACTURERS', 'Fabricantes');

// whats_new box text in sideboxes/whats_new.php
 define('BOX_HEADING_WHATS_NEW', 'Novos Produtos');
 define('CATEGORIES_BOX_HEADING_WHATS_NEW', 'Novos Produtos...');

 define('BOX_HEADING_FEATURED_PRODUCTS', 'Destaques');
 define('CATEGORIES_BOX_HEADING_FEATURED_PRODUCTS', 'Produtos em Destaque...');
 define('TEXT_NO_FEATURED_PRODUCTS', 'Novos produtos em destaque ser&atilde;o adicionados em breve. Por favor volte mais tarde.');

 define('TEXT_NO_ALL_PRODUCTS', 'Mais produtos ser&atilde;o adicionados em breve. Por favor volte mais tarde.');
 define('CATEGORIES_BOX_HEADING_PRODUCTS_ALL', 'Todos os Produtos...');

// quick_find box text in sideboxes/quick_find.php
 define('BOX_HEADING_SEARCH', 'Pesquisar');
 define('BOX_SEARCH_ADVANCED_SEARCH', 'Pesquisa Avan&ccedil;ada');

// specials box text in sideboxes/specials.php
 define('BOX_HEADING_SPECIALS', 'Produtos em Oferta');
 define('CATEGORIES_BOX_HEADING_SPECIALS','Produtos em Oferta...');

// reviews box text in sideboxes/reviews.php
 define('BOX_HEADING_REVIEWS', 'Avalia&ccedil;&otilde;es');
 define('BOX_REVIEWS_WRITE_REVIEW', 'Avalie este produto');
 define('BOX_REVIEWS_NO_REVIEWS', 'Nenhuma avalia&ccedil;&atilde;o feita para esse produto.');
 define('BOX_REVIEWS_TEXT_OF_5_STARS', '%s de 5 Estrelas!');

// shopping_cart box text in sideboxes/shopping_cart.php
 define('BOX_HEADING_SHOPPING_CART', 'Carrinho de Compras');
 define('BOX_SHOPPING_CART_EMPTY', 'Seu carrinho est&aacute; vazio.');
 define('BOX_SHOPPING_CART_DIVIDER', '&nbsp;-&nbsp;');

// order_history box text in sideboxes/order_history.php
 define('BOX_HEADING_CUSTOMER_ORDERS', 'Compra R&aacute;pida');

// best_sellers box text in sideboxes/best_sellers.php
 define('BOX_HEADING_BESTSELLERS', 'Mais Vendidos');
 define('BOX_HEADING_BESTSELLERS_IN', 'Mais Vendidos em<br />&nbsp;&nbsp;');

// notifications box text in sideboxes/products_notifications.php
 define('BOX_HEADING_NOTIFICATIONS', 'Notifica&ccedil;&otilde;es');
 define('BOX_NOTIFICATIONS_NOTIFY', 'Notifique-me sobre atualiza&ccedil;&otilde;es sobre <strong>%s</strong>');
 define('BOX_NOTIFICATIONS_NOTIFY_REMOVE', 'N&atilde;o me notifique sobre atualiza&ccedil;&otilde;es sobre <strong>%s</strong>');

// manufacturer box text
 define('BOX_HEADING_MANUFACTURER_INFO', 'Informa&ccedil;&otilde;es do Fabricante');
 define('BOX_MANUFACTURER_INFO_HOMEPAGE', 'P&aacute;gina de %s');
 define('BOX_MANUFACTURER_INFO_OTHER_PRODUCTS', 'Outros produtos');

// languages box text in sideboxes/languages.php
 define('BOX_HEADING_LANGUAGES', 'Idiomas');

// currencies box text in sideboxes/currencies.php
 define('BOX_HEADING_CURRENCIES', 'Moedas');

// information box text in sideboxes/information.php
 define('BOX_HEADING_INFORMATION', 'Informa&ccedil;&atilde;o');
 define('BOX_INFORMATION_PRIVACY', 'Pol&iacute;tica de Privacidade');
 define('BOX_INFORMATION_CONDITIONS', 'Condi&ccedil;&otilde;es de Uso');
 define('BOX_INFORMATION_SHIPPING', 'Frete &amp; Devolu&ccedil;&otilde;es');
 define('BOX_INFORMATION_CONTACT', 'Fale Conosco');
 define('BOX_BBINDEX', 'F&oacute;rum');
 define('BOX_INFORMATION_UNSUBSCRIBE', 'Sair do Mailing');

 define('BOX_INFORMATION_SITE_MAP', 'Mapa do Site');

// information box text in sideboxes/more_information.php - were TUTORIAL_
 define('BOX_HEADING_MORE_INFORMATION', 'Mais informa&ccedil;&atilde;o');
 define('BOX_INFORMATION_PAGE_2', 'P&aacute;gina 2');
 define('BOX_INFORMATION_PAGE_3', 'P&aacute;gina 3');
 define('BOX_INFORMATION_PAGE_4', 'P&aacute;gina 4');

//New billing address text
 define('SET_AS_PRIMARY' , 'Marcar como Endere&ccedil;o Principal');
 define('NEW_ADDRESS_TITLE', 'Endere&ccedil;o de Cobran&ccedil;a');

// javascript messages
 define('JS_ERROR', 'Ocorreram erros durante o processamento do seu formulário.\n\nPor favor, faça as correções necessárias:\n\n');

 define('JS_REVIEW_TEXT', '* Por favor, adicione mais palavras à sua avaliação. A avaliação deve ter no mínimo ' . REVIEW_TEXT_MIN_LENGTH . ' caracteres.');
 define('JS_REVIEW_RATING', '* Você precisa avaliar o produto para poder comentar.');

 define('JS_ERROR_NO_PAYMENT_MODULE_SELECTED', '* Por favor, selecione uma forma de pagamento para seu pedido.');

 define('JS_ERROR_SUBMITTED', 'Este formulário já foi enviado. Por favor, clique em OK e espere este processo ser completado.');

 define('ERROR_NO_PAYMENT_MODULE_SELECTED', 'Por favor, selecione uma forma de pagamento o para seu pedido.');
 define('ERROR_CONDITIONS_NOT_ACCEPTED', 'Por favor, confirme que voc&ecirc; leu os Termos e Condi&ccedil;&otilde;es de uso marcando a caixa abaixo.');
 define('ERROR_PRIVACY_STATEMENT_NOT_ACCEPTED', 'Por favor, confirme que voc&ecirc; leu a nossa Pol&iacute;tica de Privacidade marcando a caixa abaixo.');

 define('CATEGORY_COMPANY', 'Detalhes da Empresa');
 define('CATEGORY_PERSONAL', 'Seus Detalhes Pessoais');
 define('CATEGORY_ADDRESS', 'Seu Endere&ccedil;o');
 define('CATEGORY_CONTACT', 'Sua Informa&ccedil;&atilde;o de Contato');
 define('CATEGORY_OPTIONS', 'Op&ccedil;&otilde;es');
 define('CATEGORY_PASSWORD', 'Sua Senha');
 define('CATEGORY_LOGIN', 'Entrar');
 define('PULL_DOWN_DEFAULT', 'Por favor, escolha seu Pa&iacute;s');
 define('PLEASE_SELECT', 'Por favor, selecione...');
 define('TYPE_BELOW', 'Digite uma escolha abaixo...');

 define('ENTRY_COMPANY', 'Nome da Empresa:');
 define('ENTRY_COMPANY_ERROR', 'Por favor, digite o nome da empresa.');
 define('ENTRY_COMPANY_TEXT', '');
 define('ENTRY_GENDER', 'Sauda&ccedil;&atilde;o:');
 define('ENTRY_GENDER_ERROR', 'Por favor, escolha uma sauda&ccedil;&atilde;o.');
 define('ENTRY_GENDER_TEXT', '*');
 define('ENTRY_FIRST_NAME', 'Primeiro Nome:');
 define('ENTRY_FIRST_NAME_ERROR', 'Seu primeiro nome est&aacute; correto? Nosso sistema requer um n&uacute;mero m&iacute;nimo de ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' caracteres. Por favor, tente novamente.');
 define('ENTRY_FIRST_NAME_TEXT', '*');
 define('ENTRY_LAST_NAME', 'Sobrenome:');
 define('ENTRY_LAST_NAME_ERROR', 'Seu &uacute;ltimo nome est&aacute; correto? Nosso sistema requer um n&uacute;mero m&iacute;nimo de ' . ENTRY_LAST_NAME_MIN_LENGTH . ' caracteres. Por favor, tente novamente.');
 define('ENTRY_LAST_NAME_TEXT', '*');
 define('ENTRY_DATE_OF_BIRTH', 'Data de Nascimento:');
 define('ENTRY_DATE_OF_BIRTH_ERROR', 'Sua data de nascimento est&aacute; correta? Nosso sistema requer que a data esteja no seguinte formato: DD/MM/AAAA (ex. 21/05/1970)');
 define('ENTRY_DATE_OF_BIRTH_TEXT', '* (ex. 21/05/1970)');
 define('ENTRY_EMAIL_ADDRESS', 'Endere&ccedil;o de E-mail:');
 define('ENTRY_EMAIL_ADDRESS_ERROR', 'Seu endere&ccedil;o de e-mail est&aacute; correto? Ele deve conter no m&iacute;nimo ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' caracteres. Por favor, tente novamente.');
 define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', 'Desculpe, nosso sistema n&atilde;o conseguiu entender seu endere&ccedil;o de e-mail. Por favor, tente novamente.');
 define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', 'J&aacute; existe um cadastro com esse e-mail em nosso sistema - por favor, tente logar-se com este e-mail. Se voc&ecirc; n&atilde;o quiser usar este e-mail voc&ecirc; pode corrig&iacute;-lo indo at&eacute; a &aacute;rea Minha Conta.');
 define('ENTRY_EMAIL_ADDRESS_TEXT', '*');
 define('ENTRY_NICK', 'Apelido do F&oacute;rum:');
 define('ENTRY_NICK_TEXT', '*'); // note to display beside nickname input field
 define('ENTRY_NICK_DUPLICATE_ERROR', 'Este apelido j&aacute; esta em uso. Por favor, tente outro.');
 define('ENTRY_NICK_LENGTH_ERROR', 'Seu apelido deve conter no m&iacute;nimo ' . ENTRY_NICK_MIN_LENGTH . ' caracteres. Por favor tente novamente.');
 define('ENTRY_STREET_ADDRESS', 'Logradouro:');
 define('ENTRY_STREET_ADDRESS_ERROR', 'Seu logradouro deve conter no m&iacute;nimo ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' caracteres.');
 define('ENTRY_STREET_ADDRESS_TEXT', '*');
 define('ENTRY_SUBURB', 'Bairro:');
 define('ENTRY_SUBURB_ERROR', '');
 define('ENTRY_SUBURB_TEXT', '');
 define('ENTRY_POST_CODE', 'CEP:');
 define('ENTRY_POST_CODE_ERROR', 'Seu CEP deve ter no m&iacute;nimo ' . ENTRY_POSTCODE_MIN_LENGTH . ' caracteres.');
 define('ENTRY_POST_CODE_TEXT', '*');
 define('ENTRY_CITY', 'Cidade:');
 define('ENTRY_CUSTOMERS_REFERRAL', 'C&oacute;digo de Refer&ecirc;ncia:');

 define('ENTRY_CITY_ERROR', 'Sua cidade deve conter no m&iacute;nimo ' . ENTRY_CITY_MIN_LENGTH . ' caracteres.');
 define('ENTRY_CITY_TEXT', '*');
 define('ENTRY_STATE', 'Estado:');
 define('ENTRY_STATE_ERROR', 'Seu estado deve conter no m&iacute;nimo ' . ENTRY_STATE_MIN_LENGTH . ' characters.');
 define('ENTRY_STATE_ERROR_SELECT', 'Por favor, selecione um estado do menu de Estados.');
 define('ENTRY_STATE_TEXT', '*');
 define('JS_STATE_SELECT', '-- Por favor, escolha --');
 define('ENTRY_COUNTRY', 'Pa&iacute;s:');
 define('ENTRY_COUNTRY_ERROR', 'Voc&ecirc; deve selecionar um Pa&iacute;s.');
 define('ENTRY_COUNTRY_TEXT', '*');
 define('ENTRY_TELEPHONE_NUMBER', 'Telefone:');
 define('ENTRY_TELEPHONE_NUMBER_ERROR', 'Seu n&uacute;mero de telefone deve conter no m&iacute;nimo ' . ENTRY_TELEPHONE_MIN_LENGTH . ' caracteres.');
 define('ENTRY_TELEPHONE_NUMBER_TEXT', '*');
 define('ENTRY_FAX_NUMBER', 'Celular:');
 define('ENTRY_FAX_NUMBER_ERROR', '');
 define('ENTRY_FAX_NUMBER_TEXT', '');
 define('ENTRY_NEWSLETTER', 'Desejo e-mails com novidades do ' . STORE_NAME);
 define('ENTRY_NEWSLETTER_TEXT', '');
 define('ENTRY_NEWSLETTER_YES', 'Inscrito');
 define('ENTRY_NEWSLETTER_NO', 'N&atilde;o Inscrito');
 define('ENTRY_NEWSLETTER_ERROR', '');
 define('ENTRY_PASSWORD', 'Senha:');
 define('ENTRY_PASSWORD_ERROR', 'Sua senha deve conter no m&iacute;nimo ' . ENTRY_PASSWORD_MIN_LENGTH . ' caracteres.');
 define('ENTRY_PASSWORD_ERROR_NOT_MATCHING', 'A confirma&ccedil;&atilde;o de senha n&atilde;o &eacute; a mesma da senha.');
 define('ENTRY_PASSWORD_TEXT', '* (no m&iacute;nimo ' . ENTRY_PASSWORD_MIN_LENGTH . ' caracteres)');
 define('ENTRY_PASSWORD_CONFIRMATION', 'Confirma&ccedil;&atilde;o de Senha:');
 define('ENTRY_PASSWORD_CONFIRMATION_TEXT', '*');
 define('ENTRY_PASSWORD_CURRENT', 'Senha Atual:');
 define('ENTRY_PASSWORD_CURRENT_TEXT', '*');
 define('ENTRY_PASSWORD_CURRENT_ERROR', 'Sua senha deve conter no m&iacute;nimo ' . ENTRY_PASSWORD_MIN_LENGTH . ' caracteres.');
 define('ENTRY_PASSWORD_NEW', 'Nova Senha:');
 define('ENTRY_PASSWORD_NEW_TEXT', '*');
 define('ENTRY_PASSWORD_NEW_ERROR', 'Sua nova senha deve conter no m&iacute;nimo ' . ENTRY_PASSWORD_MIN_LENGTH . ' caracteres.');
 define('ENTRY_PASSWORD_NEW_ERROR_NOT_MATCHING', 'A confirma&ccedil;&atilde;o de senha n&atilde;o &eacute; a mesma da sua nova senha.');
 define('PASSWORD_HIDDEN', '--OCULTO--');

 define('FORM_REQUIRED_INFORMATION', '* Preenchimento obrigat&oacute;rio');
 define('ENTRY_REQUIRED_SYMBOL', '*');

 // constants for use in zen_prev_next_display function
 define('TEXT_RESULT_PAGE', '');
 define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', 'Mostrando <strong>%d</strong> a <strong>%d</strong> (de <strong>%d</strong> produtos)');
 define('TEXT_DISPLAY_NUMBER_OF_ORDERS', 'Mostrando <strong>%d</strong> a <strong>%d</strong> (de <strong>%d</strong> pedidos)');
 define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', 'Mostrando <strong>%d</strong> a <strong>%d</strong> (de <strong>%d</strong> coment&aacute;rios)');
 define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_NEW', 'Mostrando <strong>%d</strong> a <strong>%d</strong> (de <strong>%d</strong> novos produtos)');
 define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', 'Mostrando <strong>%d</strong> a <strong>%d</strong> (de <strong>%d</strong> produtos em oferta)');
 define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_FEATURED_PRODUCTS', 'Mostrando <strong>%d</strong> a <strong>%d</strong> (de <strong>%d</strong> produtos em destaque)');
 define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_ALL', 'Mostrando <strong>%d</strong> a <strong>%d</strong> (de <strong>%d</strong> produtos)');

 define('PREVNEXT_TITLE_FIRST_PAGE', 'Primeira P&aacute;gina');
 define('PREVNEXT_TITLE_PREVIOUS_PAGE', 'P&aacute;gina Anterior');
 define('PREVNEXT_TITLE_NEXT_PAGE', 'Pr&oacute;xima P&aacute;gina');
 define('PREVNEXT_TITLE_LAST_PAGE', '&Uacute;ltima P&aacute;gina');
 define('PREVNEXT_TITLE_PAGE_NO', 'P&aacute;gina %d');
 define('PREVNEXT_TITLE_PREV_SET_OF_NO_PAGE', 'Conjunto Anterior de %d P&aacute;ginas');
 define('PREVNEXT_TITLE_NEXT_SET_OF_NO_PAGE', 'Pr&oacute;ximo Conjunto de %d P&aacute;ginas');
 define('PREVNEXT_BUTTON_FIRST', '&lt;&lt;PRIMEIRA');
 define('PREVNEXT_BUTTON_PREV', '[&lt;&lt;&nbsp;Anterior]');
 define('PREVNEXT_BUTTON_NEXT', '[Pr&oacute;xima&nbsp;&gt;&gt;]');
 define('PREVNEXT_BUTTON_LAST', '&Uacute;LTIMA&gt;&gt;');

 define('TEXT_BASE_PRICE','Come&ccedil;ando em: ');

 define('TEXT_CLICK_TO_ENLARGE', 'ampliar imagem');

 define('TEXT_SORT_PRODUCTS', 'Ordenar produtos ');
 define('TEXT_DESCENDINGLY', 'decrescente');
 define('TEXT_ASCENDINGLY', 'crescente');
 define('TEXT_BY', ' por ');

 define('TEXT_REVIEW_BY', 'por %s');
 define('TEXT_REVIEW_WORD_COUNT', '%s palavras');
 define('TEXT_REVIEW_RATING', 'Avalia&ccedil;&atilde;o: %s [%s]');
 define('TEXT_REVIEW_DATE_ADDED', 'Adicionado em: %s');
 define('TEXT_NO_REVIEWS', 'N&atilde;o existem avalia&ccedil;&otilde;es para este produto.');

 define('TEXT_NO_NEW_PRODUCTS', 'Mais produtos ser&atilde;o adicionados em breve. Por favor, volte mais tarde.');

 define('TEXT_UNKNOWN_TAX_RATE', 'Impostos');

 define('TEXT_REQUIRED', '<span class="errorText">Obrigat&oacute;rio</span>');

 define('WARNING_INSTALL_DIRECTORY_EXISTS', 'Aten&ccedil;&atilde;o: O diret&oacute;rio de instala&ccedil;&atilde;o existe em: ' . $warn_path . '/zc_install. Por favor, remova este diret&oacute;rio por quest&otilde;es de seguran&ccedil;a.');
 define('WARNING_CONFIG_FILE_WRITEABLE', 'Aten&ccedil;&atilde;o: Eu consigo escrever no arquivo de configura&ccedil;&atilde;o: ' . $warn_path . '/includes/configure.php. Isto &eacute; um risco de seguran&ccedil;a em potencial - por favor, configure as permiss&otilde;es de usu&aacute;rio neste arquivo (normalmente somente leitura, CHMOD 644 ou 444). Voc&ecirc; talvez precise usar seu painel de controle de hospedagem/gerenciador de arquivos para mudar as permiss&otilde;es efetivamente. Contate sua empresa de hospedagem para assist&ecirc;ncia. <a href="http://tutorials.zen-cart.com/index.php?article=90" target="_blank">Veja este FAQ</a>');
 define('ERROR_FILE_NOT_REMOVEABLE', 'Erro: N&atilde;o foi poss&iacute;vel remover o arquivo especificado. Voc&ecirc; talvez tenha que usar seu programa FTP para remover o arquivo, devido a limita&ccedil;&otilde;es nas permiss&otilde;es do servidor.');
 define('WARNING_SESSION_AUTO_START', 'Aten&ccedil;&atilde;o: session.auto_start est&aacute; habilitado - por favor, desabilite esta fun&ccedil;&atilde;o do PHP no php.ini e reinicie seu servidor web.');
 define('WARNING_DOWNLOAD_DIRECTORY_NON_EXISTENT', 'Aten&ccedil;&atilde;o: O diret&oacute;rio de downloads para produtos baix&aacute;veis n&atilde;o existe: ' . DIR_FS_DOWNLOAD . '. Produtos baix&aacute;veis n&atilde;o ir&atilde;o funcionar at&eacute; que este diret&oacute;rio seja v&aacute;lido.');
 define('WARNING_SQL_CACHE_DIRECTORY_NON_EXISTENT', 'Aten&ccedil;&atilde;o: O diret&oacute;rio de cache de SQL n&atilde;o existe: ' . DIR_FS_SQL_CACHE . '. Cache de SQL n&atilde;o ir&aacute; funcion&aacute;r at&eacute; que este diret&oacute;rio seja criado.');
 define('WARNING_SQL_CACHE_DIRECTORY_NOT_WRITEABLE', 'Aten&ccedil;&atilde;o: Eu n&atilde;o consegui escrever no diret&oacute;rio de cache de SQL: ' . DIR_FS_SQL_CACHE . '. SQL cache n&atilde;o ir&aacute; funciona que voc&ecirc; configure as permiss&otilde;es deste diret&oacute;rio corretamente.');
 define('WARNING_DATABASE_VERSION_OUT_OF_DATE', 'Seu banco de dados parece precisar de atualiza&ccedil;&atilde;o para um n&iacute;vel maior. Acesse Painel de Administra&ccedil;&atilde;o -> Ferramentas -> Informa&ccedil;&atilde;o do Servidor para verificar os n&iacute;veis de patch.');
 define('WARNING_COULD_NOT_LOCATE_LANG_FILE', 'Aten&ccedil;&atilde;o: N&atilde;o foi poss&iacute;vel localizar o arquivo de idioma: ');

 define('TEXT_CCVAL_ERROR_INVALID_DATE', 'A data de expira&ccedil;&atilde;o do cart&atilde;o de cr&eacute;dito &eacute; inv&aacute;lida. Por favor, verifique a data e tente novamente.');
 define('TEXT_CCVAL_ERROR_INVALID_NUMBER', 'O n&uacute;mero do cart&atilde;o de cr&eacute;dito &eacute; inv&aacute;lido. Por favor, verifique e tente novamente.');
 define('TEXT_CCVAL_ERROR_UNKNOWN_CARD', 'O cart&atilde;o de cr&eacute;dito com os primeiros quatro n&uacute;meros come&ccedil;ando com %s n&atilde;o foi digitado corretamente, ou n&oacute;s n&atilde;o aceitamos este tipo de cart&atilde;o. Por favor, tente novamente mais tarde ou use outro cart&atilde;o de cr&eacute;dito.');

 define('BOX_INFORMATION_DISCOUNT_COUPONS', 'Cupom de Desconto');
 define('BOX_INFORMATION_GV', 'Perguntas Frequentes sobre Vale Presente');
 define('VOUCHER_BALANCE', 'Saldo de ' . TEXT_GV_NAME . ' ');
 define('BOX_HEADING_GIFT_VOUCHER', 'Conta de ' . TEXT_GV_NAME . ' ');
 define('GV_FAQ', 'Perguntas Frequentes sobre Vale Presente');
 define('ERROR_REDEEMED_AMOUNT', 'Parab&eacute;ns, voc&ecirc; resgatou o valor de ');
 define('ERROR_NO_REDEEM_CODE', 'Voc&ecirc; n&atilde;o informou um ' . TEXT_GV_REDEEM . '.');
 define('ERROR_NO_INVALID_REDEEM_GV', 'C&oacute;digo de Cupom de Resgate Inv&aacute;lido');
 define('TABLE_HEADING_CREDIT', 'Cr&eacute;ditos Dispon&iacute;veis');
 define('GV_HAS_VOUCHERA', 'Voc&ecirc; tem fundo na sua conta de ' . TEXT_GV_NAME . '. Se voc&ecirc; quiser <br />
              voc&ecirc; pode enviar estes cr&eacute;ditos por <a class="pageResults" href="');

 define('GV_HAS_VOUCHERB', '"><strong>e-mail</strong></a> para algu&eacute;m');
 define('ENTRY_AMOUNT_CHECK_ERROR', 'Voc&ecirc; n&atilde;o tem cr&eacute;ditos suficientes para enviar esta quantia.');
 define('BOX_SEND_TO_FRIEND', 'Enviar ' . TEXT_GV_NAME . ' ');

 define('VOUCHER_REDEEMED', TEXT_GV_NAME . ' Resgatado');
 define('CART_COUPON', 'Cupom :');
 define('CART_COUPON_INFO', 'mais informa&ccedil;&otilde;es');
 define('TEXT_SEND_OR_SPEND','Voc&ecirc; tem fundo dispon&iacute;vel na sua conta de ' . TEXT_GV_NAME . '. Voc&ecirc; pode gast&aacute;-lo ou envi&aacute;-lo para algu&eacute;m. Para enviar a algu&eacute;m clique no bot&atilde;o abaixo.');
 define('TEXT_BALANCE_IS', 'Seu saldo de ' . TEXT_GV_NAME . ' &eacute;: ');
 define('TEXT_AVAILABLE_BALANCE', 'Sua Conta de ' . TEXT_GV_NAME);

// payment method is GV/Discount
 define('PAYMENT_METHOD_GV', 'Vale-Presente/Cupom');
 define('PAYMENT_MODULE_GV', 'VP/CD');

 define('TABLE_HEADING_CREDIT_PAYMENT', 'Cr&eacute;ditos Dispon&iacute;veis');

 define('TEXT_INVALID_REDEEM_COUPON', 'C&oacute;digo de Cupom Inv&aacute;lido');
 define('TEXT_INVALID_REDEEM_COUPON_MINIMUM', 'Voc&ecirc; precisa gastar pelo menos %s para resgatar a quantia deste cupom');
 define('TEXT_INVALID_STARTDATE_COUPON', 'Este cupom ainda n&atilde;o est&aacute; dispon&iacute;vel');
 define('TEXT_INVALID_FINISDATE_COUPON', 'Este cupom expirou');
 define('TEXT_INVALID_USES_COUPON', 'Este cupom pode ser usado apenas ');
 define('TIMES', ' vezes.');
 define('TIME', ' vez.');
 define('TEXT_INVALID_USES_USER_COUPON', 'Voc&ecirc; usou o c&oacute;digo do cupom: %s o n&uacute;mero m&aacute;ximo de vezes permitido por cliente. ');
 define('REDEEMED_COUPON', 'um cupom valendo ');
 define('REDEEMED_MIN_ORDER', 'em pedidos acima de ');
 define('REDEEMED_RESTRICTIONS', ' [As restri&ccedil;&otilde;es aplicam-se &agrave; Produtos-Categoria]');
 define('TEXT_ERROR', 'Um erro ocorreu');
 define('TEXT_INVALID_COUPON_PRODUCT', 'Este cupom n&atilde;o &eacute; v&aacute;lido para nenhum produto atualmente em seu carrinho.');
 define('TEXT_VALID_COUPON', 'Parab&eacute;ns, voc&ecirc; resgatou o Cupom de Desconto');
 define('TEXT_REMOVE_REDEEM_COUPON_ZONE', 'O c&oacute;digo do cupom que voc&ecirc; digitou n&atilde;o &eacute; v&aacute;lido para o endere&ccedil;o que voc&ecirc; selecionou.');

// more info in place of buy now
 define('MORE_INFO_TEXT','... mais informa&ccedil;&otilde;es');

// IP Address
 define('TEXT_YOUR_IP_ADDRESS','Seu endere&ccedil;o IP &eacute;: ');

//Generic Address Heading
 define('HEADING_ADDRESS_INFORMATION','Informa&ccedil;&otilde;es do Endere&ccedil;o');

// cart contents
 define('PRODUCTS_ORDER_QTY_TEXT_IN_CART','Quantidade no Carrinho: ');
 define('PRODUCTS_ORDER_QTY_TEXT','Adicionar ao Carrinho: ');

// success messages for added to cart when display cart is off
// set to blank for no messages
// for all pages except where multiple add to cart is used:
 define('SUCCESS_ADDED_TO_CART_PRODUCT', 'Produto adicionado com sucesso ao carrinho...');
// only for where multiple add to cart is used:
 define('SUCCESS_ADDED_TO_CART_PRODUCTS', 'Produto(s) adicionado(s) com sucesso ao carrinho...');

 define('TEXT_PRODUCT_WEIGHT_UNIT','kgs');

// Shipping
 define('TEXT_SHIPPING_WEIGHT','kgs');
 define('TEXT_SHIPPING_BOXES', 'Caixas');

// Discount Savings
 define('PRODUCT_PRICE_DISCOUNT_PREFIX','Poupe:&nbsp;');
 define('PRODUCT_PRICE_DISCOUNT_PERCENTAGE','% de desconto');
 define('PRODUCT_PRICE_DISCOUNT_AMOUNT','&nbsp; de desconto');

// Sale Maker Sale Price
 define('PRODUCT_PRICE_SALE','Promo&ccedil;&atilde;o:&nbsp;');

//universal symbols
  define('TEXT_NUMBER_SYMBOL', '# ');

// banner_box
 define('BOX_HEADING_BANNER_BOX','Patrocinadores');
 define('TEXT_BANNER_BOX','Por favor, Visite Nossos Patrocinadores...');

// banner box 2
 define('BOX_HEADING_BANNER_BOX2','Voc&ecirc; j&aacute; viu...');
 define('TEXT_BANNER_BOX2','D&ecirc; uma olhada nisto hoje!');

// banner_box - all
 define('BOX_HEADING_BANNER_BOX_ALL','Patrocinadores');
 define('TEXT_BANNER_BOX_ALL','Por favor, Visite Nossos Patrocinadores...');

// boxes defines
 define('PULL_DOWN_ALL','Por favor, Selecione');
 define('PULL_DOWN_MANUFACTURERS','- Limpar -');
// shipping estimator
 define('PULL_DOWN_SHIPPING_ESTIMATOR_SELECT', 'Por favor, Selecione');

// general Sort By
 define('TEXT_INFO_SORT_BY','Ordenar por: ');

// close window image popups
 define('TEXT_CLOSE_WINDOW',' - Clique na imagem para Fechar');
// close popups
 define('TEXT_CURRENT_CLOSE_WINDOW','[ Fechar Janela ]');

// iii 031104 added: File upload error strings
 define('ERROR_FILETYPE_NOT_ALLOWED', 'Erro: Tipo de arquivo n&atilde;o permitido.');
 define('WARNING_NO_FILE_UPLOADED', 'Aten&ccedil;&atilde;o: nenhum arquivo enviado.');
 define('SUCCESS_FILE_SAVED_SUCCESSFULLY', 'Sucesso: arquivo enviado com sucesso.');
 define('ERROR_FILE_NOT_SAVED', 'Erro: O arquivo n&atilde;o foi enviado.');
 define('ERROR_DESTINATION_NOT_WRITEABLE', 'Erro: o destino n&atilde;o pode ser escrito.');
 define('ERROR_DESTINATION_DOES_NOT_EXIST', 'Erro: o destino n&atilde;o existe.');
 define('ERROR_FILE_TOO_BIG', 'Aten&ccedil;&atilde;o: O arquivo &eacute; muito grande para ser enviado!<br />O pedido pode ser feito, mas contate o administrador do site para auxili&aacute;-lo com o envio');
// End iii added

 define('TEXT_BEFORE_DOWN_FOR_MAINTENANCE', 'AVISO: Este site est&aacute; com manuten&ccedil;&atilde;o prevista para: ');
 define('TEXT_ADMIN_DOWN_FOR_MAINTENANCE', 'AVISO: Este site est&aacute; temporariamente fora do ar para Manuten&ccedil;&atilde;o');

 define('PRODUCTS_PRICE_IS_FREE_TEXT','&Eacute; Gr&aacute;tis!');
 define('PRODUCTS_PRICE_IS_CALL_FOR_PRICE_TEXT','Ligue para saber o Pre&ccedil;o');
 define('TEXT_CALL_FOR_PRICE','Ligue para saber o pre&ccedil;o');

 define('TEXT_INVALID_SELECTION',' Voc&ecirc; fez uma Escolha Inv&aacute;lida: ');
 define('TEXT_ERROR_OPTION_FOR',' Ao Optar por: ');
 define('TEXT_INVALID_USER_INPUT', 'Inser&ccedil;&atilde;o do Usu&aacute;rio Requerida<br />');

// product_listing
 define('PRODUCTS_QUANTITY_MIN_TEXT_LISTING','M&iacute;n:');
 define('PRODUCTS_QUANTITY_UNIT_TEXT_LISTING','Unidades:');
 define('PRODUCTS_QUANTITY_IN_CART_LISTING','No carrinho:');
 define('PRODUCTS_QUANTITY_ADD_ADDITIONAL_LISTING','Adicionar Adicional:');

 define('PRODUCTS_QUANTITY_MAX_TEXT_LISTING','Max:');

 define('TEXT_PRODUCTS_MIX_OFF','*Mix Desligado');
 define('TEXT_PRODUCTS_MIX_ON','*Mix Ligado');

 define('TEXT_PRODUCTS_MIX_OFF_SHOPPING_CART','<br />*Voc&ecirc; n&atilde;o pode misturar as op&ccedil;&otilde;es neste item para conseguir a quantidade m&iacute;nima necess&aacute;ria<br />');
 define('TEXT_PRODUCTS_MIX_ON_SHOPPING_CART','*Mistura de Op&ccedil;&otilde;es de Valores Ligada<br />');

 define('ERROR_MAXIMUM_QTY','A quantidade adicionada ao seu carrinho foi ajustada para a quantidade m&aacute;xima permitida. Veja este item: ');
 define('ERROR_CORRECTIONS_HEADING','Por favor, corrija o seguinte: <br />');
 define('ERROR_QUANTITY_ADJUSTED', 'A quantidade adicionada ao seu carrinho foi ajustada. O item que voc&ecirc; deseja n&atilde;o est&aacute; dispon&iacute;vel para quantidades fracionadas. A quantidade do item: ');
 define('ERROR_QUANTITY_CHANGED_FROM', ', foi alterado de: ');
 define('ERROR_QUANTITY_CHANGED_TO', ' para ');

// Downloads Controller
 define('DOWNLOADS_CONTROLLER_ON_HOLD_MSG','NOTA: Os downloads n&atilde;o estar&atilde;o dispon&iacute;ve&iacute;s at&eacute; que o pagamento seja confirmado');
 define('TEXT_FILESIZE_BYTES', ' bytes');
 define('TEXT_FILESIZE_MEGS', ' MB');

// shopping cart errors
 define('ERROR_PRODUCT','O item: ');
 define('ERROR_PRODUCT_STATUS_SHOPPING_CART','<br />Desculpe, mas este produto foi removido da nossa lista de produtos neste momento.<br />Este produto tamb&eacute;m foi removido do seu carrinho de compras.');
 define('ERROR_PRODUCT_ATTRIBUTES','<br />The item: ');
 define('ERROR_PRODUCT_STATUS_SHOPPING_CART_ATTRIBUTES','<br />We are sorry but selected options have changed for this product and have been removed from our inventory at this time.<br />This item has been removed from your shopping cart.');
 define('ERROR_PRODUCT_QUANTITY_MIN',' ... Erro de Quantidade M&iacute;nima - ');
 define('ERROR_PRODUCT_QUANTITY_UNITS',' ... Erro de Quantidade de Unidades - ');
 define('ERROR_PRODUCT_OPTION_SELECTION','<br /> ... O Valor da Op&ccedil;&atilde;o Selecionada &eacute; Inv&aacute;lida ');
 define('ERROR_PRODUCT_QUANTITY_ORDERED','<br /> O total do seu pedido &eacute;: ');
 define('ERROR_PRODUCT_QUANTITY_MAX',' ... Erro na Quantidade M&aacute;xima - ');
 define('ERROR_PRODUCT_QUANTITY_MIN_SHOPPING_CART',' ... Erro de Quantidade M&iacute;nima - ');
 define('ERROR_PRODUCT_QUANTITY_UNITS_SHOPPING_CART',' ... Erro de Quantidade de Unidades - ');
 define('ERROR_PRODUCT_QUANTITY_MAX_SHOPPING_CART',' ... Erro na Quantidade M&aacute;xima - ');

 define('WARNING_SHOPPING_CART_COMBINED', 'NOT&Iacute;CIA: Para sua conveni&ecirc;ncia, seu carrinho de compras foi combinado com seu carrinho de compras da sua &uacute;ltima visita. Por favor, revise seu carrinho de compras antes de pagar.');

// error on checkout when $_SESSION['customers_id' does not exist in customers table
 define('ERROR_CUSTOMERS_ID_INVALID', 'A informa&ccedil;&atilde;o do cliente n&atilde;o p&ocirc;de ser validada!<br />Por favor, fa&ccedil;a login ou crie uma nova conta...');

 define('TABLE_HEADING_FEATURED_PRODUCTS','Produtos em Destaque');

 define('TABLE_HEADING_NEW_PRODUCTS', 'Novos Produtos de %s');
 define('TABLE_HEADING_UPCOMING_PRODUCTS', 'Produtos Futuros');
 define('TABLE_HEADING_DATE_EXPECTED', 'Esperado para');
 define('TABLE_HEADING_SPECIALS_INDEX', 'Ofertas do M&ecirc;s de %s');

 define('CAPTION_UPCOMING_PRODUCTS','Estes itens estar&atilde;o em estoque em breve');
 define('SUMMARY_TABLE_UPCOMING_PRODUCTS','A tabela cont&eacute;m uma lista de produtos que estar&atilde;o em estoque em breve e as datas que os itens s&atilde;o esperados');

// meta tags special defines
 define('META_TAG_PRODUCTS_PRICE_IS_FREE_TEXT','&Eacute; Gr&aacute;tis!');

// customer login
 define('TEXT_SHOWCASE_ONLY','Fale Conosco');
// set for login for prices
 define('TEXT_LOGIN_FOR_PRICE_PRICE','Pre&ccedil;o Indispon&iacute;vel');
 define('TEXT_LOGIN_FOR_PRICE_BUTTON_REPLACE','Entrar para ver pre&ccedil;o');
// set for show room only
 define('TEXT_LOGIN_FOR_PRICE_PRICE_SHOWROOM', ''); // blank for prices or enter your own text
 define('TEXT_LOGIN_FOR_PRICE_BUTTON_REPLACE_SHOWROOM','Vitrine Apenas');

// authorization pending
 define('TEXT_AUTHORIZATION_PENDING_PRICE', 'Pre&ccedil;o Indispon&iacute;vel');
 define('TEXT_AUTHORIZATION_PENDING_BUTTON_REPLACE', 'APROVA&Ccedil;&Atilde;O PENDENTE');
 define('TEXT_LOGIN_TO_SHOP_BUTTON_REPLACE','&Eacute; preciso entrar para Comprar');

// text pricing
 define('TEXT_CHARGES_WORD','Valor Calculado:');
 define('TEXT_PER_WORD','<br />Pre&ccedil;o por palavra: ');
 define('TEXT_WORDS_FREE',' Palavra(s) gr&aacute;tis ');
 define('TEXT_CHARGES_LETTERS','Valor Calculado:');
 define('TEXT_PER_LETTER','<br />Pre&ccedil;o por letra: ');
 define('TEXT_LETTERS_FREE',' Letra(s) gr&aacute;tis ');
 define('TEXT_ONETIME_CHARGES','*tarifas &uacute;nicas = ');
 define('TEXT_ONETIME_CHARGES_EMAIL',"\t" . '*tarifas &uacute;nicas = ');
 define('TEXT_ATTRIBUTES_QTY_PRICES_HELP', 'Desconto por Quantidade');
 define('TABLE_ATTRIBUTES_QTY_PRICE_QTY','QTD');
 define('TABLE_ATTRIBUTES_QTY_PRICE_PRICE','PRE&Ccedil;O');
 define('TEXT_ATTRIBUTES_QTY_PRICES_ONETIME_HELP', 'Tarifas &Uacute;nicas por Op&ccedil;&atilde;o de Quantidade de Descontos');

// textarea attribute input fields
 define('TEXT_MAXIMUM_CHARACTERS_ALLOWED',' caracteres m&aacute;ximos permitido');
 define('TEXT_REMAINING','restando');

// Shipping Estimator
 define('CART_SHIPPING_OPTIONS', 'Estimar Valor de Frete');
 define('CART_SHIPPING_OPTIONS_LOGIN', 'Por favor, <a href="' . zen_href_link(FILENAME_LOGIN, '', 'SSL') . '"><u>Entre</u></a> para exibir seus valores pessoais de custo de frete.');
 define('CART_SHIPPING_METHOD_TEXT', 'Formas de Entrega Dispon&iacute;veis');
 define('CART_SHIPPING_METHOD_RATES', 'Taxas');
 define('CART_SHIPPING_METHOD_TO','Enviar para: ');
 define('CART_SHIPPING_METHOD_TO_NOLOGIN', 'Enviar para: <a href="' . zen_href_link(FILENAME_LOGIN, '', 'SSL') . '"><span class="pseudolink">Entrar</span></a>');
 define('CART_SHIPPING_METHOD_FREE_TEXT','Frete Gr&aacute;tis');
 define('CART_SHIPPING_METHOD_ALL_DOWNLOADS','- Downloads');
 define('CART_SHIPPING_METHOD_RECALCULATE','Recalcular');
 define('CART_SHIPPING_METHOD_ZIP_REQUIRED','true');
 define('CART_SHIPPING_METHOD_ADDRESS','Endere&ccedil;o:');
 define('CART_OT','Custo Total Estimado:');
 define('CART_OT_SHOW','true'); // set to false if you don't want order totals
 define('CART_ITEMS','&Iacute;tens no Carrinho: ');
 define('CART_SELECT','Selecionar');
 define('ERROR_CART_UPDATE', '<strong>Por favor, atualize seu pedido.</strong>');
 define('IMAGE_BUTTON_UPDATE_CART', 'Atualizar');
 define('EMPTY_CART_TEXT_NO_QUOTE', 'Oops! Sua sess&atilde;o foi encerrada... Por favor, atualize seu carrinho de compras para uma estimativa do Valor de Frete...');
 define('CART_SHIPPING_QUOTE_CRITERIA', 'A estimativa do valor de frete s&atilde;o baseadas na informa&ccedil;&otilde;es do endere&ccedil;o que voc&ecirc; selecionou:');

// multiple product add to cart
 define('TEXT_PRODUCT_LISTING_MULTIPLE_ADD_TO_CART', 'Adicionar: ');
 define('TEXT_PRODUCT_ALL_LISTING_MULTIPLE_ADD_TO_CART', 'Adicionar: ');
 define('TEXT_PRODUCT_FEATURED_LISTING_MULTIPLE_ADD_TO_CART', 'Adicionar: ');
 define('TEXT_PRODUCT_NEW_LISTING_MULTIPLE_ADD_TO_CART', 'Adicionar: ');
 //moved SUBMIT_BUTTON_ADD_PRODUCTS_TO_CART to button_names.php as BUTTON_ADD_PRODUCTS_TO_CART_ALT

// discount qty table
 define('TEXT_HEADER_DISCOUNT_PRICES_PERCENTAGE', 'Desconto no Pre&ccedil;o por Quantidade');
 define('TEXT_HEADER_DISCOUNT_PRICES_ACTUAL_PRICE', 'Novo Pre&ccedil;o por Desconto na Quantidade');
 define('TEXT_HEADER_DISCOUNT_PRICES_AMOUNT_OFF', 'Desconto no Pre&ccedil;o por Quantidade');
 define('TEXT_FOOTER_DISCOUNT_QUANTITIES', '* Os descontos podem variar com base nas opc&otilde;es acima');
 define('TEXT_HEADER_DISCOUNTS_OFF', 'Desconto por Quantidade Indispon&iacute;vel...');

// sort order titles for dropdowns
 define('PULL_DOWN_ALL_RESET','- LIMPAR - ');
 define('TEXT_INFO_SORT_BY_PRODUCTS_NAME', 'Nome do Produto - crescente');
 define('TEXT_INFO_SORT_BY_PRODUCTS_NAME_DESC', 'Nome do Produto - decrescente');
 define('TEXT_INFO_SORT_BY_PRODUCTS_PRICE', 'Pre&ccedil;o - Menor para o Maior');
 define('TEXT_INFO_SORT_BY_PRODUCTS_PRICE_DESC', 'Pre&ccedil;o - Maior para o Menor');
 define('TEXT_INFO_SORT_BY_PRODUCTS_MODEL', 'Modelo');
 define('TEXT_INFO_SORT_BY_PRODUCTS_DATE_DESC', 'Data de Adi&ccedil;&atilde;o - Novo para Antigo');
 define('TEXT_INFO_SORT_BY_PRODUCTS_DATE', 'Data de Adi&ccedil;&atilde;o - Antigo para Novo');
 define('TEXT_INFO_SORT_BY_PRODUCTS_SORT_ORDER', 'Exibi&ccedil;&atilde;o Padr&atilde;o');

// downloads module defines
 define('TABLE_HEADING_DOWNLOAD_DATE', 'O Link Expira em');
 define('TABLE_HEADING_DOWNLOAD_COUNT', 'Restante');
 define('HEADING_DOWNLOAD', 'Para fazer download dos seus arquivos clique no bot&atilde;o download e escolha "Salvar para o Disco" do menu popup.');
 define('TABLE_HEADING_DOWNLOAD_FILENAME','Nome do Arquivo');
 define('TABLE_HEADING_PRODUCT_NAME','Nome do &Iacute;tem');
 define('TABLE_HEADING_BYTE_SIZE','Tamanho do Arquivo');
 define('TEXT_DOWNLOADS_UNLIMITED', 'Ilimitado');
 define('TEXT_DOWNLOADS_UNLIMITED_COUNT', '--- *** ---');

// misc
 define('COLON_SPACER', ':&nbsp;&nbsp;');

// table headings for cart display and upcoming products
 define('TABLE_HEADING_QUANTITY', 'Qtd.');
 define('TABLE_HEADING_PRODUCTS', 'Nome do &Iacute;tem');
 define('TABLE_HEADING_TOTAL', 'Total');

// create account - login shared
 define('TABLE_HEADING_PRIVACY_CONDITIONS', 'Pol&iacute;tica de Privacidade');
 define('TEXT_PRIVACY_CONDITIONS_DESCRIPTION', 'Por favor, confirme que voc&ecirc; concorda com nossa pol&iacute;tica de privacidade marcando a caixa a seguir. A nossa pol&iacute;tica de privacidade pode ser lida <a href="' . zen_href_link(FILENAME_PRIVACY, '', 'SSL') . '"><span class="pseudolink">aqui</span></a>.');
 define('TEXT_PRIVACY_CONDITIONS_CONFIRM', 'Eu li e estou de acordo com a pol&iacute;tica de privacidade.');
 define('TABLE_HEADING_ADDRESS_DETAILS', 'Detalhes do Endere&ccedil;o');
 define('TABLE_HEADING_PHONE_FAX_DETAILS', 'Datalhes de Contato Adicional');
 define('TABLE_HEADING_DATE_OF_BIRTH', 'Verifique sua Idade');
 define('TABLE_HEADING_LOGIN_DETAILS', 'Detalhes de Login');
 define('TABLE_HEADING_REFERRAL_DETAILS', 'Como nos Conheceu?');

 define('ENTRY_EMAIL_PREFERENCE','Detalhes de Mailing e Email');
 define('ENTRY_EMAIL_HTML_DISPLAY','HTML');
 define('ENTRY_EMAIL_TEXT_DISPLAY','Texto');
 define('EMAIL_SEND_FAILED','ERRO: Falha ao enviar e-mail para: "%s" <%s> com o assunto: "%s"');

 define('DB_ERROR_NOT_CONNECTED', 'Erro - N&atilde;o foi poss&iacute;vel conectar ao Banco de dados');

 // EZ-PAGES Alerts
 define('TEXT_EZPAGES_STATUS_HEADER_ADMIN', 'AVISO: EZ-PAGES HEADER - Ligado somente para IP de Administradores');
 define('TEXT_EZPAGES_STATUS_FOOTER_ADMIN', 'AVISO: EZ-PAGES FOOTER - Ligado somente para IP de Administradores');
 define('TEXT_EZPAGES_STATUS_SIDEBOX_ADMIN', 'AVISO: EZ-PAGES SIDEBOX - Ligado somente para IP de Administradores');

// extra product listing sorter
 define('TEXT_PRODUCTS_LISTING_ALPHA_SORTER', '');
 define('TEXT_PRODUCTS_LISTING_ALPHA_SORTER_NAMES', '&Iacute;tens come&ccedil;ando com...');
 define('TEXT_PRODUCTS_LISTING_ALPHA_SORTER_NAMES_RESET', '-- Limpar --');

///////////////////////////////////////////////////////////
// include email extras
  if (file_exists(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/' . FILENAME_EMAIL_EXTRAS)) {
    $template_dir_select = $template_dir . '/';
  } else {
    $template_dir_select = '';
  }
  require_once(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select . FILENAME_EMAIL_EXTRAS);

// include template specific header defines
  if (file_exists(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/' . FILENAME_HEADER)) {
    $template_dir_select = $template_dir . '/';
  } else {
    $template_dir_select = '';
  }
  require_once(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select . FILENAME_HEADER);

// include template specific button name defines
  if (file_exists(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/' . FILENAME_BUTTON_NAMES)) {
    $template_dir_select = $template_dir . '/';
  } else {
    $template_dir_select = '';
  }
  require_once(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select . FILENAME_BUTTON_NAMES);

// include template specific icon name defines
  if (file_exists(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/' . FILENAME_ICON_NAMES)) {
    $template_dir_select = $template_dir . '/';
  } else {
    $template_dir_select = '';
  }
  require_once(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select . FILENAME_ICON_NAMES);

// include template specific other image name defines
  if (file_exists(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/' . FILENAME_OTHER_IMAGES_NAMES)) {
    $template_dir_select = $template_dir . '/';
  } else {
    $template_dir_select = '';
  }
  require_once(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select . FILENAME_OTHER_IMAGES_NAMES);

// credit cards
  if (file_exists(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/' . FILENAME_CREDIT_CARDS)) {
    $template_dir_select = $template_dir . '/';
  } else {
    $template_dir_select = '';
  }
  require_once(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select. FILENAME_CREDIT_CARDS);

// include template specific whos_online sidebox defines
  if (file_exists(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/' . FILENAME_WHOS_ONLINE . '.php')) {
    $template_dir_select = $template_dir . '/';
  } else {
    $template_dir_select = '';
  }
  require_once(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select . FILENAME_WHOS_ONLINE . '.php');

// include template specific meta tags defines
  if (file_exists(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/meta_tags.php')) {
    $template_dir_select = $template_dir . '/';
  } else {
    $template_dir_select = '';
  }
  require_once(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select . 'meta_tags.php');

// END OF EXTERNAL LANGUAGE LINKS