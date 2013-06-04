<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2010 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: english.php 15514 2010-02-18 07:27:05Z drbyte $
 */

// FOLLOWING WERE moved to meta_tags.php
//define('TITLE', 'Zen Cart!');
//define('SITE_TAGLINE', 'The Art of E-commerce');
//define('CUSTOM_KEYWORDS', 'ecommerce, open source, shop, online shopping');
// END: moved to meta_tags.php

  define('FOOTER_TEXT_BODY', 'Copyright &copy; ' . date('Y') . ' <a href="' . zen_href_link(FILENAME_DEFAULT) . '" target="_blank">' . STORE_NAME . '</a>. Desenvolvido por <a href="http://www.zen-cart.com" target="_blank">Zen Cart</a> - Traduzido por <a href="http://customscriptz.com" target="_blank">Custom Scriptz</a>');

// look in your $PATH_LOCALE/locale directory for available locales..
// on RedHat try 'en_US'
// on FreeBSD try 'en_US.ISO_8859-1'
// on Windows try 'en', or 'English'
  @setlocale(LC_TIME, 'en_US.ISO_8859-1');
  define('DATE_FORMAT_SHORT', '%d/%m/%Y');  // this is used for strftime()
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
  define('CHARSET', 'iso-8859-1');

// footer text in includes/footer.php
  define('FOOTER_TEXT_REQUESTS_SINCE', 'visitas desde');

// Define the name of your Gift Certificate as Gift Voucher, Gift Certificate, Zen Cart Dollars, etc. here for use through out the shop
  define('TEXT_GV_NAME','Vale Presente');
  define('TEXT_GV_NAMES','Vales Presente');

// used for redeem code, redemption code, or redemption id
  define('TEXT_GV_REDEEM','C�digo do Cupom');

// used for redeem code sidebox
  define('BOX_HEADING_GV_REDEEM', TEXT_GV_NAME);
  define('BOX_GV_REDEEM_INFO', 'C�digo do Cupom: ');

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
  define('TEXT_NO_FEATURED_PRODUCTS', 'Novos produtos em destaque ser�o adicionados em breve. Por favor volte mais tarde.');

  define('TEXT_NO_ALL_PRODUCTS', 'Mais produtos ser�o adicionados em breve. Por favor volte mais tarde.');
  define('CATEGORIES_BOX_HEADING_PRODUCTS_ALL', 'Todos os Produtos...');

// quick_find box text in sideboxes/quick_find.php
  define('BOX_HEADING_SEARCH', 'Pesquisar');
  define('BOX_SEARCH_ADVANCED_SEARCH', 'Pesquisa Avan�ada');

// specials box text in sideboxes/specials.php
  define('BOX_HEADING_SPECIALS', 'Produtos em Oferta');
  define('CATEGORIES_BOX_HEADING_SPECIALS','Produtos em Oferta...');

// reviews box text in sideboxes/reviews.php
  define('BOX_HEADING_REVIEWS', 'Avalia��es');
  define('BOX_REVIEWS_WRITE_REVIEW', 'Avalie este produto');
  define('BOX_REVIEWS_NO_REVIEWS', 'Nenhuma avalia��o feita para esse produto.');
  define('BOX_REVIEWS_TEXT_OF_5_STARS', '%s de 5 Estrelas!');

// shopping_cart box text in sideboxes/shopping_cart.php
  define('BOX_HEADING_SHOPPING_CART', 'Carrinho de Compras');
  define('BOX_SHOPPING_CART_EMPTY', 'Seu carrinho est� vazio.');
  define('BOX_SHOPPING_CART_DIVIDER', '&nbsp;-&nbsp;');

// order_history box text in sideboxes/order_history.php
  define('BOX_HEADING_CUSTOMER_ORDERS', 'Compra R�pida');

// best_sellers box text in sideboxes/best_sellers.php
  define('BOX_HEADING_BESTSELLERS', 'Mais Vendidos');
  define('BOX_HEADING_BESTSELLERS_IN', 'Mais Vendidos em<br />&nbsp;&nbsp;');

// notifications box text in sideboxes/products_notifications.php
  define('BOX_HEADING_NOTIFICATIONS', 'Notifica��es');
  define('BOX_NOTIFICATIONS_NOTIFY', 'Notifique-me sobre atualiza��es sobre <strong>%s</strong>');
  define('BOX_NOTIFICATIONS_NOTIFY_REMOVE', 'N�o me notifique sobre atualiza��es sobre <strong>%s</strong>');

// manufacturer box text
  define('BOX_HEADING_MANUFACTURER_INFO', 'Informa��es do Fabricante');
  define('BOX_MANUFACTURER_INFO_HOMEPAGE', 'P�gina de %s');
  define('BOX_MANUFACTURER_INFO_OTHER_PRODUCTS', 'Outros produtos');

// languages box text in sideboxes/languages.php
  define('BOX_HEADING_LANGUAGES', 'Idiomas');

// currencies box text in sideboxes/currencies.php
  define('BOX_HEADING_CURRENCIES', 'Moedas');

// information box text in sideboxes/information.php
  define('BOX_HEADING_INFORMATION', 'Informa��o');
  define('BOX_INFORMATION_PRIVACY', 'Pol�tica de Privacidade');
  define('BOX_INFORMATION_CONDITIONS', 'Condi��es de Uso');
  define('BOX_INFORMATION_SHIPPING', 'Frete &amp; Devolu��es');
  define('BOX_INFORMATION_CONTACT', 'Fale Conosco');
  define('BOX_BBINDEX', 'F�rum');
  define('BOX_INFORMATION_UNSUBSCRIBE', 'Sair do Mailing');

  define('BOX_INFORMATION_SITE_MAP', 'Mapa do Site');

// information box text in sideboxes/more_information.php - were TUTORIAL_
  define('BOX_HEADING_MORE_INFORMATION', 'Mais informa��o');
  define('BOX_INFORMATION_PAGE_2', 'P�gina 2');
  define('BOX_INFORMATION_PAGE_3', 'P�gina 3');
  define('BOX_INFORMATION_PAGE_4', 'P�gina 4');

// tell a friend box text in sideboxes/tell_a_friend.php
  define('BOX_HEADING_TELL_A_FRIEND', 'Envie para um Amigo');
  define('BOX_TELL_A_FRIEND_TEXT', 'Diga a algu�m o que voc� achou sobre este produto.');

// wishlist box text in includes/boxes/wishlist.php
  define('BOX_HEADING_CUSTOMER_WISHLIST', 'Minha lista de Desejos');
  define('BOX_WISHLIST_EMPTY', 'Voc� n�o tem produtos na sua Lista de Desejos');
  define('IMAGE_BUTTON_ADD_WISHLIST', 'Adicionar � Lista de Desejos');
  define('TEXT_WISHLIST_COUNT', 'Existem atualmente %s �tens na sua Lista de Desejos.');
  define('TEXT_DISPLAY_NUMBER_OF_WISHLIST', 'Mostrando <strong>%d</strong> a <strong>%d</strong> (de <strong>%d</strong> �tens da sua lista de desejos)');

//New billing address text
  define('SET_AS_PRIMARY' , 'Marcar como Endere�o Principal');
  define('NEW_ADDRESS_TITLE', 'Endere�o de Cobran�a');

// javascript messages
  define('JS_ERROR', 'Ocorreram erros durante o processamento do seu formul�rio.\n\nPor favor, fa�a as corre��es necess�rias:\n\n');

  define('JS_REVIEW_TEXT', '* Por favor, adicione mais palavras � sua avalia��o. A avalia��o deve ter no m�nimo ' . REVIEW_TEXT_MIN_LENGTH . ' caracteres.');
  define('JS_REVIEW_RATING', '* Voc� precisa avaliar o produto para poder comentar.');

  define('JS_ERROR_NO_PAYMENT_MODULE_SELECTED', '* Por favor, selecione uma forma de pagamento para seu pedido.');

  define('JS_ERROR_SUBMITTED', 'Este formul�rio j� foi enviado. Por favor, clique em OK e espere este processo ser completado.');

  define('ERROR_NO_PAYMENT_MODULE_SELECTED', 'Por favor, selecione uma forma de pagamento o para seu pedido.');
  define('ERROR_CONDITIONS_NOT_ACCEPTED', 'Por favor, confirme que voc� leu os Termos e Condi��es de uso marcando a caixa abaixo.');
  define('ERROR_PRIVACY_STATEMENT_NOT_ACCEPTED', 'Por favor, confirme que voc� leu a nossa Pol�tica de Privacidade marcando a caixa abaixo.');

  define('CATEGORY_COMPANY', 'Detalhes da Empresa');
  define('CATEGORY_PERSONAL', 'Seus Detalhes Pessoais');
  define('CATEGORY_ADDRESS', 'Seu Endere�o');
  define('CATEGORY_CONTACT', 'Sua Informa��o de Contato');
  define('CATEGORY_OPTIONS', 'Op��es');
  define('CATEGORY_PASSWORD', 'Sua Senha');
  define('CATEGORY_LOGIN', 'Entrar');
  define('PULL_DOWN_DEFAULT', 'Por favor, escolha seu Pa�s');
  define('PLEASE_SELECT', 'Por favor, selecione...');
  define('TYPE_BELOW', 'Digite uma escolha abaixo...');

  define('ENTRY_COMPANY', 'Nome da Empresa:');
  define('ENTRY_COMPANY_ERROR', 'Por favor, digite o nome da empresa.');
  define('ENTRY_COMPANY_TEXT', '');
  define('ENTRY_GENDER', 'Sauda��o:');
  define('ENTRY_GENDER_ERROR', 'Por favor, escolha uma sauda��o.');
  define('ENTRY_GENDER_TEXT', '*');
  define('ENTRY_FIRST_NAME', 'Primeiro Nome:');
  define('ENTRY_FIRST_NAME_ERROR', 'Seu primeiro nome est� correto? Nosso sistema requer um n�mero m�nimo de ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' caracteres. Por favor, tente novamente.');
  define('ENTRY_FIRST_NAME_TEXT', '*');
  define('ENTRY_LAST_NAME', 'Sobrenome:');
  define('ENTRY_LAST_NAME_ERROR', 'Seu �ltimo nome est� correto? Nosso sistema requer um n�mero m�nimo de ' . ENTRY_LAST_NAME_MIN_LENGTH . ' caracteres. Por favor, tente novamente.');
  define('ENTRY_LAST_NAME_TEXT', '*');
  define('ENTRY_DATE_OF_BIRTH', 'Data de Nascimento:');
  define('ENTRY_DATE_OF_BIRTH_ERROR', 'Sua data de nascimento est� correta? Nosso sistema requer que a data esteja no seguinte formato: DD/MM/AAAA (ex. 21/05/1970)');
  define('ENTRY_DATE_OF_BIRTH_TEXT', '* (ex. 21/05/1970)');
  define('ENTRY_EMAIL_ADDRESS', 'Endere�o de E-mail:');
  define('ENTRY_EMAIL_ADDRESS_ERROR', 'Seu endere�o de e-mail est� correto? Ele deve conter no m�nimo ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' caracteres. Por favor, tente novamente.');
  define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', 'Desculpe, nosso sistema n�o conseguiu entender seu endere�o de e-mail. Por favor, tente novamente.');
  define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', 'J� existe um cadastro com esse e-mail em nosso sistema - por favor, tente logar-se com este e-mail. Se voc� n�o quiser usar este e-mail voc� pode corrig�-lo indo at� a �rea Minha Conta.');
  define('ENTRY_EMAIL_ADDRESS_TEXT', '*');
  define('ENTRY_NICK', 'Apelido do F�rum:');
  define('ENTRY_NICK_TEXT', '*'); // note to display beside nickname input field
  define('ENTRY_NICK_DUPLICATE_ERROR', 'Este apelido j� esta em uso. Por favor, tente outro.');
  define('ENTRY_NICK_LENGTH_ERROR', 'Seu apelido deve conter no m�nimo ' . ENTRY_NICK_MIN_LENGTH . ' caracteres. Por favor tente novamente.');
  define('ENTRY_STREET_ADDRESS', 'Logradouro:');
  define('ENTRY_STREET_ADDRESS_ERROR', 'Seu logradouro deve conter no m�nimo ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' caracteres.');
  define('ENTRY_STREET_ADDRESS_TEXT', '*');
  define('ENTRY_SUBURB', 'Bairro:');
  define('ENTRY_SUBURB_ERROR', '');
  define('ENTRY_SUBURB_TEXT', '');
  define('ENTRY_POST_CODE', 'CEP:');
  define('ENTRY_POST_CODE_ERROR', 'Seu CEP deve ter no m�nimo ' . ENTRY_POSTCODE_MIN_LENGTH . ' caracteres.');
  define('ENTRY_POST_CODE_TEXT', '*');
  define('ENTRY_CITY', 'Cidade:');
  define('ENTRY_CUSTOMERS_REFERRAL', 'C�digo de Refer�ncia:');

  define('ENTRY_CITY_ERROR', 'Sua cidade deve conter no m�nimo ' . ENTRY_CITY_MIN_LENGTH . ' caracteres.');
  define('ENTRY_CITY_TEXT', '*');
  define('ENTRY_STATE', 'Estado:');
  define('ENTRY_STATE_ERROR', 'Seu estado deve conter no m�nimo ' . ENTRY_STATE_MIN_LENGTH . ' characters.');
  define('ENTRY_STATE_ERROR_SELECT', 'Por favor, selecione um estado do menu de Estados.');
  define('ENTRY_STATE_TEXT', '*');
  define('JS_STATE_SELECT', '-- Por favor, escolha --');
  define('ENTRY_COUNTRY', 'Pa�s:');
  define('ENTRY_COUNTRY_ERROR', 'Voc� deve selecionar um Pa�s.');
  define('ENTRY_COUNTRY_TEXT', '*');
  define('ENTRY_TELEPHONE_NUMBER', 'Telefone:');
  define('ENTRY_TELEPHONE_NUMBER_ERROR', 'Seu n�mero de telefone deve conter no m�nimo ' . ENTRY_TELEPHONE_MIN_LENGTH . ' caracteres.');
  define('ENTRY_TELEPHONE_NUMBER_TEXT', '*');
  define('ENTRY_FAX_NUMBER', 'Celular:');
  define('ENTRY_FAX_NUMBER_ERROR', '');
  define('ENTRY_FAX_NUMBER_TEXT', '');
  define('ENTRY_NEWSLETTER', 'Desejo e-mails com novidades do ' . STORE_NAME);
  define('ENTRY_NEWSLETTER_TEXT', '');
  define('ENTRY_NEWSLETTER_YES', 'Inscrito');
  define('ENTRY_NEWSLETTER_NO', 'N�o Inscrito');
  define('ENTRY_NEWSLETTER_ERROR', '');
  define('ENTRY_PASSWORD', 'Senha:');
  define('ENTRY_PASSWORD_ERROR', 'Sua senha deve conter no m�nimo ' . ENTRY_PASSWORD_MIN_LENGTH . ' caracteres.');
  define('ENTRY_PASSWORD_ERROR_NOT_MATCHING', 'A confirma��o de senha n�o � a mesma da senha.');
  define('ENTRY_PASSWORD_TEXT', '* (no m�nimo ' . ENTRY_PASSWORD_MIN_LENGTH . ' caracteres)');
  define('ENTRY_PASSWORD_CONFIRMATION', 'Confirma��o de Senha:');
  define('ENTRY_PASSWORD_CONFIRMATION_TEXT', '*');
  define('ENTRY_PASSWORD_CURRENT', 'Senha Atual:');
  define('ENTRY_PASSWORD_CURRENT_TEXT', '*');
  define('ENTRY_PASSWORD_CURRENT_ERROR', 'Sua senha deve conter no m�nimo ' . ENTRY_PASSWORD_MIN_LENGTH . ' caracteres.');
  define('ENTRY_PASSWORD_NEW', 'Nova Senha:');
  define('ENTRY_PASSWORD_NEW_TEXT', '*');
  define('ENTRY_PASSWORD_NEW_ERROR', 'Sua nova senha deve conter no m�nimo ' . ENTRY_PASSWORD_MIN_LENGTH . ' caracteres.');
  define('ENTRY_PASSWORD_NEW_ERROR_NOT_MATCHING', 'A confirma��o de senha n�o � a mesma da sua nova senha.');
  define('PASSWORD_HIDDEN', '--OCULTO--');

  define('FORM_REQUIRED_INFORMATION', '* Preenchimento obrigat�rio');
  define('ENTRY_REQUIRED_SYMBOL', '*');

  // constants for use in zen_prev_next_display function
  define('TEXT_RESULT_PAGE', '');
  define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', 'Mostrando <strong>%d</strong> a <strong>%d</strong> (de <strong>%d</strong> produtos)');
  define('TEXT_DISPLAY_NUMBER_OF_ORDERS', 'Mostrando <strong>%d</strong> a <strong>%d</strong> (de <strong>%d</strong> pedidos)');
  define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', 'Mostrando <strong>%d</strong> a <strong>%d</strong> (de <strong>%d</strong> coment�rios)');
  define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_NEW', 'Mostrando <strong>%d</strong> a <strong>%d</strong> (de <strong>%d</strong> novos produtos)');
  define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', 'Mostrando <strong>%d</strong> a <strong>%d</strong> (de <strong>%d</strong> produtos em oferta)');
  define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_FEATURED_PRODUCTS', 'Mostrando <strong>%d</strong> a <strong>%d</strong> (de <strong>%d</strong> produtos em destaque)');
  define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_ALL', 'Mostrando <strong>%d</strong> a <strong>%d</strong> (de <strong>%d</strong> produtos)');

  define('PREVNEXT_TITLE_FIRST_PAGE', 'Primeira P�gina');
  define('PREVNEXT_TITLE_PREVIOUS_PAGE', 'P�gina Anterior');
  define('PREVNEXT_TITLE_NEXT_PAGE', 'Pr�xima P�gina');
  define('PREVNEXT_TITLE_LAST_PAGE', '�ltima P�gina');
  define('PREVNEXT_TITLE_PAGE_NO', 'P�gina %d');
  define('PREVNEXT_TITLE_PREV_SET_OF_NO_PAGE', 'Conjunto Anterior de %d P�ginas');
  define('PREVNEXT_TITLE_NEXT_SET_OF_NO_PAGE', 'Pr�ximo Conjunto de %d P�ginas');
  define('PREVNEXT_BUTTON_FIRST', '&lt;&lt;PRIMEIRA');
  define('PREVNEXT_BUTTON_PREV', '[&lt;&lt;&nbsp;Anterior]');
  define('PREVNEXT_BUTTON_NEXT', '[Pr�xima&nbsp;&gt;&gt;]');
  define('PREVNEXT_BUTTON_LAST', '�LTIMA&gt;&gt;');

  define('TEXT_BASE_PRICE','Come�ando em: ');

  define('TEXT_CLICK_TO_ENLARGE', 'ampliar imagem');

  define('TEXT_SORT_PRODUCTS', 'Ordenar produtos ');
  define('TEXT_DESCENDINGLY', 'decrescente');
  define('TEXT_ASCENDINGLY', 'crescente');
  define('TEXT_BY', ' por ');

  define('TEXT_REVIEW_BY', 'por %s');
  define('TEXT_REVIEW_WORD_COUNT', '%s palavras');
  define('TEXT_REVIEW_RATING', 'Avalia��o: %s [%s]');
  define('TEXT_REVIEW_DATE_ADDED', 'Adicionado em: %s');
  define('TEXT_NO_REVIEWS', 'N�o existem avalia��es para este produto.');

  define('TEXT_NO_NEW_PRODUCTS', 'Mais produtos ser�o adicionados em breve. Por favor, volte mais tarde.');

  define('TEXT_UNKNOWN_TAX_RATE', 'Impostos');

  define('TEXT_REQUIRED', '<span class="errorText">Obrigat�rio</span>');

  define('WARNING_INSTALL_DIRECTORY_EXISTS', 'Aten��o: O diret�rio de instala��o existe em: ' . $warn_path . '/zc_install. Por favor, remova este diret�rio por quest�es de seguran�a.');
  define('WARNING_CONFIG_FILE_WRITEABLE', 'Aten��o: Eu consigo escrever no arquivo de configura��o: ' . $warn_path . '/includes/configure.php. Isto � um risco de seguran�a em potencial - por favor, configure as permiss�es de usu�rio neste arquivo (normalmente somente leitura, CHMOD 644 ou 444). Voc� talvez precise usar seu painel de controle de hospedagem/gerenciador de arquivos para mudar as permiss�es efetivamente. Contate sua empresa de hospedagem para assist�ncia. <a href="http://tutorials.zen-cart.com/index.php?article=90" target="_blank">Veja este FAQ</a>');
  define('ERROR_FILE_NOT_REMOVEABLE', 'Erro: N�o foi poss�vel remover o arquivo especificado. Voc� talvez tenha que usar seu programa FTP para remover o arquivo, devido a limita��es nas permiss�es do servidor.');
  define('WARNING_SESSION_DIRECTORY_NON_EXISTENT', 'Aten��o: O diret�rio de sess�es n�o existe: ' . zen_session_save_path() . '. As sess�es n�o ir�o funcionar at� que este diret�rio seja criado.');
  define('WARNING_SESSION_DIRECTORY_NOT_WRITEABLE', 'Aten��o: N�o consegui gravar no diret�rio de sess�es: ' . zen_session_save_path() . '. As sess�es n�o ir�o funcionar at� que voc� corrija as permiss�es.');
  define('WARNING_SESSION_AUTO_START', 'Aten��o: session.auto_start est� habilitado - por favor, desabilite esta fun��o do PHP no php.ini e reinicie seu servidor web.');
  define('WARNING_DOWNLOAD_DIRECTORY_NON_EXISTENT', 'Aten��o: O diret�rio de downloads para produtos baix�veis n�o existe: ' . DIR_FS_DOWNLOAD . '. Produtos baix�veis n�o ir�o funcionar at� que este diret�rio seja v�lido.');
  define('WARNING_SQL_CACHE_DIRECTORY_NON_EXISTENT', 'Aten��o: O diret�rio de cache de SQL n�o existe: ' . DIR_FS_SQL_CACHE . '. Cache de SQL n�o ir� funcion�r at� que este diret�rio seja criado.');
  define('WARNING_SQL_CACHE_DIRECTORY_NOT_WRITEABLE', 'Aten��o: Eu n�o consegui escrever no diret�rio de cache de SQL: ' . DIR_FS_SQL_CACHE . '. SQL cache n�o ir� funciona que voc� configure as permiss�es deste diret�rio corretamente.');
  define('WARNING_DATABASE_VERSION_OUT_OF_DATE', 'Seu banco de dados parece precisar de atualiza��o para um n�vel maior. Acesse Painel de Administra��o -> Ferramentas -> Informa��o do Servidor para verificar os n�veis de patch.');
  define('WARNING_COULD_NOT_LOCATE_LANG_FILE', 'Aten��o: N�o foi poss�vel localizar o arquivo de idioma: ');

  define('TEXT_CCVAL_ERROR_INVALID_DATE', 'A data de expira��o do cart�o de cr�dito � inv�lida. Por favor, verifique a data e tente novamente.');
  define('TEXT_CCVAL_ERROR_INVALID_NUMBER', 'O n�mero do cart�o de cr�dito � inv�lido. Por favor, verifique e tente novamente.');
  define('TEXT_CCVAL_ERROR_UNKNOWN_CARD', 'O cart�o de cr�dito com os primeiros quatro n�meros come�ando com %s n�o foi digitado corretamente, ou n�s n�o aceitamos este tipo de cart�o. Por favor, tente novamente mais tarde ou use outro cart�o de cr�dito.');

  define('BOX_INFORMATION_DISCOUNT_COUPONS', 'Cupom de Desconto');
  define('BOX_INFORMATION_GV', 'Perguntas Frequentes sobre Vale Presente');
  define('VOUCHER_BALANCE', 'Saldo de ' . TEXT_GV_NAME . ' ');
  define('BOX_HEADING_GIFT_VOUCHER', 'Conta de ' . TEXT_GV_NAME . ' ');
  define('GV_FAQ', 'Perguntas Frequentes sobre Vale Presente');
  define('ERROR_REDEEMED_AMOUNT', 'Parab�ns, voc� resgatou o valor de ');
  define('ERROR_NO_REDEEM_CODE', 'Voc� n�o informou um ' . TEXT_GV_REDEEM . '.');
  define('ERROR_NO_INVALID_REDEEM_GV', 'C�digo de Cupom de Resgate Inv�lido');
  define('TABLE_HEADING_CREDIT', 'Cr�ditos Dispon�veis');
  define('GV_HAS_VOUCHERA', 'Voc� tem fundo na sua conta de ' . TEXT_GV_NAME . '. Se voc� quiser  <br />
                           voc� pode enviar estes cr�ditos por <a class="pageResults" href="');

  define('GV_HAS_VOUCHERB', '"><strong>e-mail</strong></a> para algu�m');
  define('ENTRY_AMOUNT_CHECK_ERROR', 'Voc� n�o tem cr�ditos suficientes para enviar esta quantia.');
  define('BOX_SEND_TO_FRIEND', 'Enviar ' . TEXT_GV_NAME . ' ');

  define('VOUCHER_REDEEMED',  TEXT_GV_NAME . ' Resgatado');
  define('CART_COUPON', 'Cupom :');
  define('CART_COUPON_INFO', 'mais informa��es');
  define('TEXT_SEND_OR_SPEND','Voc� tem fundo dispon�vel na sua conta de ' . TEXT_GV_NAME . '. Voc� pode gast�-lo ou envi�-lo para algu�m. Para enviar a algu�m clique no bot�o abaixo.');
  define('TEXT_BALANCE_IS', 'Seu saldo de ' . TEXT_GV_NAME . ' �: ');
  define('TEXT_AVAILABLE_BALANCE', 'Sua Conta de ' . TEXT_GV_NAME);

// payment method is GV/Discount
  define('PAYMENT_METHOD_GV', 'Vale-Presente/Cupom');
  define('PAYMENT_MODULE_GV', 'VP/CD');

  define('TABLE_HEADING_CREDIT_PAYMENT', 'Cr�ditos Dispon�veis');

  define('TEXT_INVALID_REDEEM_COUPON', 'C�digo de Cupom Inv�lido');
  define('TEXT_INVALID_REDEEM_COUPON_MINIMUM', 'Voc� precisa gastar pelo menos %s para resgatar a quantia deste cupom');
  define('TEXT_INVALID_STARTDATE_COUPON', 'Este cupom ainda n�o est� dispon�vel');
  define('TEXT_INVALID_FINISDATE_COUPON', 'Este cupom expirou');
  define('TEXT_INVALID_USES_COUPON', 'Este cupom pode ser usado apenas ');
  define('TIMES', ' vezes.');
  define('TIME', ' vez.');
  define('TEXT_INVALID_USES_USER_COUPON', 'Voc� usou o c�digo do cupom: %s o n�mero m�ximo de vezes permitido por cliente. ');
  define('REDEEMED_COUPON', 'um cupom valendo ');
  define('REDEEMED_MIN_ORDER', 'em pedidos acima de ');
  define('REDEEMED_RESTRICTIONS', ' [As restri��es aplicam-se � Produtos-Categoria]');
  define('TEXT_ERROR', 'Um erro ocorreu');
  define('TEXT_INVALID_COUPON_PRODUCT', 'Este cupom n�o � v�lido para nenhum produto atualmente em seu carrinho.');
  define('TEXT_VALID_COUPON', 'Parab�ns, voc� resgatou o Cupom de Desconto');
  define('TEXT_REMOVE_REDEEM_COUPON_ZONE', 'O c�digo do cupom que voc� digitou n�o � v�lido para o endere�o que voc� selecionou.');

// more info in place of buy now
  define('MORE_INFO_TEXT','... mais informa��es');

// IP Address
  define('TEXT_YOUR_IP_ADDRESS','Seu endere�o IP �: ');

//Generic Address Heading
  define('HEADING_ADDRESS_INFORMATION','Informa��es do Endere�o');

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
  define('PRODUCT_PRICE_SALE','Promo��o:&nbsp;');

//universal symbols
  define('TEXT_NUMBER_SYMBOL', '# ');

// banner_box
  define('BOX_HEADING_BANNER_BOX','Patrocinadores');
  define('TEXT_BANNER_BOX','Por favor, Visite Nossos Patrocinadores...');

// banner box 2
  define('BOX_HEADING_BANNER_BOX2','Voc� j� viu...');
  define('TEXT_BANNER_BOX2','D� uma olhada nisto hoje!');

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

// iii 031104 added:  File upload error strings
  define('ERROR_FILETYPE_NOT_ALLOWED', 'Erro: Tipo de arquivo n�o permitido.');
  define('WARNING_NO_FILE_UPLOADED', 'Aten��o: nenhum arquivo enviado.');
  define('SUCCESS_FILE_SAVED_SUCCESSFULLY', 'Sucesso:  arquivo enviado com sucesso.');
  define('ERROR_FILE_NOT_SAVED', 'Erro:  O arquivo n�o foi enviado.');
  define('ERROR_DESTINATION_NOT_WRITEABLE', 'Erro: o destino n�o pode ser escrito.');
  define('ERROR_DESTINATION_DOES_NOT_EXIST', 'Erro: o destino n�o existe.');
  define('ERROR_FILE_TOO_BIG', 'Aten��o: O arquivo � muito grande para ser enviado!<br />O pedido pode ser feito, mas contate o administrador do site para auxili�-lo com o envio');
// End iii added

  define('TEXT_BEFORE_DOWN_FOR_MAINTENANCE', 'AVISO: Este site est� com manuten��o prevista para: ');
  define('TEXT_ADMIN_DOWN_FOR_MAINTENANCE', 'AVISO: Este site est� temporariamente fora do ar para Manuten��o');

  define('PRODUCTS_PRICE_IS_FREE_TEXT','� Gr�tis!');
  define('PRODUCTS_PRICE_IS_CALL_FOR_PRICE_TEXT','Ligue para saber o Pre�o');
  define('TEXT_CALL_FOR_PRICE','Ligue para saber o pre�o');

  define('TEXT_INVALID_SELECTION',' Voc� fez uma Escolha Inv�lida: ');
  define('TEXT_ERROR_OPTION_FOR',' Ao Optar por: ');
  define('TEXT_INVALID_USER_INPUT', 'Inser��o do Usu�rio Requerida<br />');

// product_listing
  define('PRODUCTS_QUANTITY_MIN_TEXT_LISTING','M�n:');
  define('PRODUCTS_QUANTITY_UNIT_TEXT_LISTING','Unidades:');
  define('PRODUCTS_QUANTITY_IN_CART_LISTING','No carrinho:');
  define('PRODUCTS_QUANTITY_ADD_ADDITIONAL_LISTING','Adicionar Adicional:');

  define('PRODUCTS_QUANTITY_MAX_TEXT_LISTING','Max:');

  define('TEXT_PRODUCTS_MIX_OFF','*Mix Desligado');
  define('TEXT_PRODUCTS_MIX_ON','*Mix Ligado');

  define('TEXT_PRODUCTS_MIX_OFF_SHOPPING_CART','<br />*Voc� n�o pode misturar as op��es neste item para conseguir a quantidade m�nima necess�ria<br />');
  define('TEXT_PRODUCTS_MIX_ON_SHOPPING_CART','*Mistura de Op��es de Valores Ligada<br />');

  define('ERROR_MAXIMUM_QTY','A quantidade adicionada ao seu carrinho foi ajustada para a quantidade m�xima permitida. Veja este item: ');
  define('ERROR_CORRECTIONS_HEADING','Por favor, corrija o seguinte: <br />');
  define('ERROR_QUANTITY_ADJUSTED', 'A quantidade adicionada ao seu carrinho foi ajustada. O item que voc� deseja n�o est� dispon�vel para quantidades fracionadas. A quantidade do item: ');
  define('ERROR_QUANTITY_CHANGED_FROM', ', foi alterado de: ');
  define('ERROR_QUANTITY_CHANGED_TO', ' para ');

// Downloads Controller
  define('DOWNLOADS_CONTROLLER_ON_HOLD_MSG','NOTA: Os downloads n�o estar�o dispon�ve�s at� que o pagamento seja confirmado');
  define('TEXT_FILESIZE_BYTES', ' bytes');
  define('TEXT_FILESIZE_MEGS', ' MB');

// shopping cart errors
  define('ERROR_PRODUCT','O item: ');
  define('ERROR_PRODUCT_STATUS_SHOPPING_CART','<br />Desculpe, mas este produto foi removido da nossa lista de produtos neste momento.<br />Este produto tamb�m foi removido do seu carrinho de compras.');
  define('ERROR_PRODUCT_QUANTITY_MIN',' ... Erro de Quantidade M�nima - ');
  define('ERROR_PRODUCT_QUANTITY_UNITS',' ... Erro de Quantidade de Unidades - ');
  define('ERROR_PRODUCT_OPTION_SELECTION','<br /> ... O Valor da Op��o Selecionada � Inv�lida ');
  define('ERROR_PRODUCT_QUANTITY_ORDERED','<br /> O total do seu pedido �: ');
  define('ERROR_PRODUCT_QUANTITY_MAX',' ... Erro na Quantidade M�xima - ');
  define('ERROR_PRODUCT_QUANTITY_MIN_SHOPPING_CART',' ... Erro de Quantidade M�nima - ');
  define('ERROR_PRODUCT_QUANTITY_UNITS_SHOPPING_CART',' ... Erro de Quantidade de Unidades - ');
  define('ERROR_PRODUCT_QUANTITY_MAX_SHOPPING_CART',' ... Erro na Quantidade M�xima - ');

  define('WARNING_SHOPPING_CART_COMBINED', 'NOT�CIA: Para sua conveni�ncia, seu carrinho de compras foi combinado com seu carrinho de compras da sua �ltima visita. Por favor, revise seu carrinho de compras antes de pagar.');

// error on checkout when $_SESSION['customers_id' does not exist in customers table
  define('ERROR_CUSTOMERS_ID_INVALID', 'A informa��o do cliente n�o p�de ser validada!<br />Por favor, fa�a login ou crie uma nova conta...');

  define('TABLE_HEADING_FEATURED_PRODUCTS','Produtos em Destaque');

  define('TABLE_HEADING_NEW_PRODUCTS', 'Novos Produtos de %s');
  define('TABLE_HEADING_UPCOMING_PRODUCTS', 'Produtos Futuros');
  define('TABLE_HEADING_DATE_EXPECTED', 'Esperado para');
  define('TABLE_HEADING_SPECIALS_INDEX', 'Ofertas do M�s de %s');

  define('CAPTION_UPCOMING_PRODUCTS','Estes itens estar�o em estoque em breve');
  define('SUMMARY_TABLE_UPCOMING_PRODUCTS','A tabela cont�m uma lista de produtos que estar�o em estoque em breve e as datas que os itens s�o esperados');

// meta tags special defines
  define('META_TAG_PRODUCTS_PRICE_IS_FREE_TEXT','� Gr�tis!');

// customer login
  define('TEXT_SHOWCASE_ONLY','Fale Conosco');
// set for login for prices
  define('TEXT_LOGIN_FOR_PRICE_PRICE','Pre�o Indispon�vel');
  define('TEXT_LOGIN_FOR_PRICE_BUTTON_REPLACE','Entrar para ver pre�o');
// set for show room only
  define('TEXT_LOGIN_FOR_PRICE_PRICE_SHOWROOM', ''); // blank for prices or enter your own text
  define('TEXT_LOGIN_FOR_PRICE_BUTTON_REPLACE_SHOWROOM','Vitrine Apenas');

// authorization pending
  define('TEXT_AUTHORIZATION_PENDING_PRICE', 'Pre�o Indispon�vel');
  define('TEXT_AUTHORIZATION_PENDING_BUTTON_REPLACE', 'APROVA��O PENDENTE');
  define('TEXT_LOGIN_TO_SHOP_BUTTON_REPLACE','� preciso entrar para Comprar');

// text pricing
  define('TEXT_CHARGES_WORD','Valor Calculado:');
  define('TEXT_PER_WORD','<br />Pre�o por palavra: ');
  define('TEXT_WORDS_FREE',' Palavra(s) gr�tis ');
  define('TEXT_CHARGES_LETTERS','Valor Calculado:');
  define('TEXT_PER_LETTER','<br />Pre�o por letra: ');
  define('TEXT_LETTERS_FREE',' Letra(s) gr�tis ');
  define('TEXT_ONETIME_CHARGES','*tarifas �nicas = ');
  define('TEXT_ONETIME_CHARGES_EMAIL',"\t" . '*tarifas �nicas = ');
  define('TEXT_ATTRIBUTES_QTY_PRICES_HELP', 'Desconto por Quantidade');
  define('TABLE_ATTRIBUTES_QTY_PRICE_QTY','QTD');
  define('TABLE_ATTRIBUTES_QTY_PRICE_PRICE','PRE�O');
  define('TEXT_ATTRIBUTES_QTY_PRICES_ONETIME_HELP', 'Tarifas �nicas por Op��o de Quantidade de Descontos');

// textarea attribute input fields
  define('TEXT_MAXIMUM_CHARACTERS_ALLOWED',' caracteres m�ximos permitido');
  define('TEXT_REMAINING','restando');

// Shipping Estimator
  define('CART_SHIPPING_OPTIONS', 'Estimar Valor de Frete');
  define('CART_SHIPPING_OPTIONS_LOGIN', 'Por favor, <a href="' . zen_href_link(FILENAME_LOGIN, '', 'SSL') . '"><u>Entre</u></a> para exibir seus valores pessoais de custo de frete.');
  define('CART_SHIPPING_METHOD_TEXT', 'Formas de Entrega Dispon�veis');
  define('CART_SHIPPING_METHOD_RATES', 'Taxas');
  define('CART_SHIPPING_METHOD_TO','Enviar para: ');
  define('CART_SHIPPING_METHOD_TO_NOLOGIN', 'Enviar para: <a href="' . zen_href_link(FILENAME_LOGIN, '', 'SSL') . '"><span class="pseudolink">Entrar</span></a>');
  define('CART_SHIPPING_METHOD_FREE_TEXT','Frete Gr�tis');
  define('CART_SHIPPING_METHOD_ALL_DOWNLOADS','- Downloads');
  define('CART_SHIPPING_METHOD_RECALCULATE','Recalcular');
  define('CART_SHIPPING_METHOD_ZIP_REQUIRED','true');
  define('CART_SHIPPING_METHOD_ADDRESS','Endere�o:');
  define('CART_OT','Custo Total Estimado:');
  define('CART_OT_SHOW','true'); // set to false if you don't want order totals
  define('CART_ITEMS','�tens no Carrinho: ');
  define('CART_SELECT','Selecionar');
  define('ERROR_CART_UPDATE', '<strong>Por favor, atualize seu pedido.</strong>');
  define('IMAGE_BUTTON_UPDATE_CART', 'Atualizar');
  define('EMPTY_CART_TEXT_NO_QUOTE', 'Oops! Sua sess�o foi encerrada... Por favor, atualize seu carrinho de compras para uma estimativa do Valor de Frete...');
  define('CART_SHIPPING_QUOTE_CRITERIA', 'A estimativa do valor de frete s�o baseadas na informa��es do endere�o que voc� selecionou:');

// multiple product add to cart
  define('TEXT_PRODUCT_LISTING_MULTIPLE_ADD_TO_CART', 'Adicionar: ');
  define('TEXT_PRODUCT_ALL_LISTING_MULTIPLE_ADD_TO_CART', 'Adicionar: ');
  define('TEXT_PRODUCT_FEATURED_LISTING_MULTIPLE_ADD_TO_CART', 'Adicionar: ');
  define('TEXT_PRODUCT_NEW_LISTING_MULTIPLE_ADD_TO_CART', 'Adicionar: ');
  //moved SUBMIT_BUTTON_ADD_PRODUCTS_TO_CART to button_names.php as BUTTON_ADD_PRODUCTS_TO_CART_ALT

// discount qty table
  define('TEXT_HEADER_DISCOUNT_PRICES_PERCENTAGE', 'Desconto no Pre�o por Quantidade');
  define('TEXT_HEADER_DISCOUNT_PRICES_ACTUAL_PRICE', 'Novo Pre�o por Desconto na Quantidade');
  define('TEXT_HEADER_DISCOUNT_PRICES_AMOUNT_OFF', 'Desconto no Pre�o por Quantidade');
  define('TEXT_FOOTER_DISCOUNT_QUANTITIES', '* Os descontos podem variar com base nas opc�es acima');
  define('TEXT_HEADER_DISCOUNTS_OFF', 'Desconto por Quantidade Indispon�vel...');

// sort order titles for dropdowns
  define('PULL_DOWN_ALL_RESET','- LIMPAR - ');
  define('TEXT_INFO_SORT_BY_PRODUCTS_NAME', 'Nome do Produto - crescente');
  define('TEXT_INFO_SORT_BY_PRODUCTS_NAME_DESC', 'Nome do Produto - decrescente');
  define('TEXT_INFO_SORT_BY_PRODUCTS_PRICE', 'Pre�o - Menor para o Maior');
  define('TEXT_INFO_SORT_BY_PRODUCTS_PRICE_DESC', 'Pre�o - Maior para o Menor');
  define('TEXT_INFO_SORT_BY_PRODUCTS_MODEL', 'Modelo');
  define('TEXT_INFO_SORT_BY_PRODUCTS_DATE_DESC', 'Data de Adi��o - Novo para Antigo');
  define('TEXT_INFO_SORT_BY_PRODUCTS_DATE', 'Data de Adi��o - Antigo para Novo');
  define('TEXT_INFO_SORT_BY_PRODUCTS_SORT_ORDER', 'Exibi��o Padr�o');

// downloads module defines
  define('TABLE_HEADING_DOWNLOAD_DATE', 'O Link Expira em');
  define('TABLE_HEADING_DOWNLOAD_COUNT', 'Restante');
  define('HEADING_DOWNLOAD', 'Para fazer download dos seus arquivos clique no bot�o download e escolha "Salvar para o Disco" do menu popup.');
  define('TABLE_HEADING_DOWNLOAD_FILENAME','Nome do Arquivo');
  define('TABLE_HEADING_PRODUCT_NAME','Nome do �tem');
  define('TABLE_HEADING_BYTE_SIZE','Tamanho do Arquivo');
  define('TEXT_DOWNLOADS_UNLIMITED', 'Ilimitado');
  define('TEXT_DOWNLOADS_UNLIMITED_COUNT', '--- *** ---');

// misc
  define('COLON_SPACER', ':&nbsp;&nbsp;');

// table headings for cart display and upcoming products
  define('TABLE_HEADING_QUANTITY', 'Qtd.');
  define('TABLE_HEADING_PRODUCTS', 'Nome do �tem');
  define('TABLE_HEADING_TOTAL', 'Total');

// create account - login shared
  define('TABLE_HEADING_PRIVACY_CONDITIONS', 'Pol�tica de Privacidade');
  define('TEXT_PRIVACY_CONDITIONS_DESCRIPTION', 'Por favor, confirme que voc� concorda com nossa pol�tica de privacidade marcando a caixa a seguir. A nossa pol�tica de privacidade pode ser lida <a href="' . zen_href_link(FILENAME_PRIVACY, '', 'SSL') . '"><span class="pseudolink">aqui</span></a>.');
  define('TEXT_PRIVACY_CONDITIONS_CONFIRM', 'Eu li e estou de acordo com a pol�tica de privacidade.');
  define('TABLE_HEADING_ADDRESS_DETAILS', 'Detalhes do Endere�o');
  define('TABLE_HEADING_PHONE_FAX_DETAILS', 'Datalhes de Contato Adicional');
  define('TABLE_HEADING_DATE_OF_BIRTH', 'Verifique sua Idade');
  define('TABLE_HEADING_LOGIN_DETAILS', 'Detalhes de Login');
  define('TABLE_HEADING_REFERRAL_DETAILS', 'Como nos Conheceu?');

  define('ENTRY_EMAIL_PREFERENCE','Detalhes de Mailing e Email');
  define('ENTRY_EMAIL_HTML_DISPLAY','HTML');
  define('ENTRY_EMAIL_TEXT_DISPLAY','Texto');
  define('EMAIL_SEND_FAILED','ERRO: Falha ao enviar e-mail para: "%s" <%s> com o assunto: "%s"');

  define('DB_ERROR_NOT_CONNECTED', 'Erro - N�o foi poss�vel conectar ao Banco de dados');

  // EZ-PAGES Alerts
  define('TEXT_EZPAGES_STATUS_HEADER_ADMIN', 'AVISO: EZ-PAGES HEADER - Ligado somente para IP de Administradores');
  define('TEXT_EZPAGES_STATUS_FOOTER_ADMIN', 'AVISO: EZ-PAGES FOOTER - Ligado somente para IP de Administradores');
  define('TEXT_EZPAGES_STATUS_SIDEBOX_ADMIN', 'AVISO: EZ-PAGES SIDEBOX - Ligado somente para IP de Administradores');

// extra product listing sorter
  define('TEXT_PRODUCTS_LISTING_ALPHA_SORTER', '');
  define('TEXT_PRODUCTS_LISTING_ALPHA_SORTER_NAMES', '�tens come�ando com...');
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
