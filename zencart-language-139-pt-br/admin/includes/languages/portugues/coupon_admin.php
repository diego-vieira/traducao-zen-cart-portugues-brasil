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
//  $Id: coupon_admin.php 5758 2007-02-08 01:39:34Z ajeh $
//

define('TOP_BAR_TITLE', 'Estat�sticas');
define('HEADING_TITLE', 'Cupons de Desconto');
define('HEADING_TITLE_STATUS', 'Estado: ');
define('TEXT_CUSTOMER', 'Cliente:');
define('TEXT_COUPON', 'Nome do Cupom:');
define('TEXT_COUPON_ALL', 'Todos os Cupons');
define('TEXT_COUPON_ACTIVE', 'Cupons Ativos');
define('TEXT_COUPON_INACTIVE', 'Cupons Inativos');
define('TEXT_SUBJECT', 'Assunto:');
define('TEXT_UNLIMITED', 'Ilimitado');
define('TEXT_FROM', 'De:');
define('TEXT_FREE_SHIPPING', 'Frete Gr�tis');
define('TEXT_MESSAGE', 'Mensagem:');
define('TEXT_RICH_TEXT_MESSAGE','Mensagem em HTML:');
define('TEXT_SELECT_CUSTOMER', 'Selecionar Cliente');
define('TEXT_ALL_CUSTOMERS', 'Todos os Clientes');
define('TEXT_NEWSLETTER_CUSTOMERS', 'Todos os Clientes Inscritos na Newsletter');
define('TEXT_CONFIRM_DELETE', 'Tem certeza que deseja excluir este Cupom?');
define('TEXT_SEE_RESTRICT', 'Restri��es se Aplicam');

define('TEXT_COUPON_ANNOUNCE','N�s gostariamos de lhe oferecer este Cupom de Desconto');

define('TEXT_TO_REDEEM', 'Voc� pode resgatar este cupom durante o fechamento da compra. Apenas digite o c�digo na caixa fornecida, e clique no bot�o resgatar.');
define('TEXT_IN_CASE', ' se voc� tiver qualquer problema. ');
define('TEXT_VOUCHER_IS', 'O c�digo do cupom � ');
define('TEXT_REMEMBER', 'N�o perca o c�digo do cupom, tenha certeza de manter o c�digo em seguran�a e somente voc� poder� se beneficiar desta oferta especial.');
define('TEXT_VISIT', 'Visite-nos em %s');
define('TEXT_ENTER_CODE', ' e digite o c�digo ');
define('TEXT_COUPON_HELP_DATE', '<p><p>O cupom � v�lido de %s � %s</p></p>');
define('HTML_COUPON_HELP_DATE', '<p><p>O cupom � v�lido de %s � %s</p></p>');

define('TABLE_HEADING_ACTION', 'A��o');

define('CUSTOMER_ID', 'ID do Cliente');
define('CUSTOMER_NAME', 'Nome do Cliente');
define('REDEEM_DATE', 'Data de Resgate');
define('IP_ADDRESS', 'Endere�o IP');

define('TEXT_REDEMPTIONS', 'Resgates');
define('TEXT_REDEMPTIONS_TOTAL', 'No Total');
define('TEXT_REDEMPTIONS_CUSTOMER', 'Para Este Cliente');
define('TEXT_NO_FREE_SHIPPING', 'N�o � Frete Gr�tis');

define('NOTICE_EMAIL_SENT_TO', 'Not�cia: E-mail enviado para: %s');
define('ERROR_NO_CUSTOMER_SELECTED', 'Erro: Nenhum cliente foi selecionado.');
define('ERROR_NO_SUBJECT', 'Erro: Nenhum assunto foi digitado.');

define('COUPON_NAME', 'Nome do Cupom');
//define('COUPON_VALUE', 'Valor do Cupom');
define('COUPON_AMOUNT', 'Valor do Cupom');
define('COUPON_CODE', 'C�digo do Cupom');
define('COUPON_STARTDATE', 'Data de In�cio');
define('COUPON_FINISHDATE', 'Data de Fim');
define('COUPON_FREE_SHIP', 'Frete Gr�tis');
define('COUPON_DESC', 'Descri��o do Cupom<br />(O Cliente pode ver)');
define('COUPON_MIN_ORDER', 'Valor M�nimo da Compra');
define('COUPON_USES_COUPON', 'Usos por Cupom');
define('COUPON_USES_USER', 'Usos por Cliente');
define('COUPON_PRODUCTS', 'Lista de Produtos V�lidos');
define('COUPON_CATEGORIES', 'Lista de Categorias V�lidas');
define('VOUCHER_NUMBER_USED', 'N�mero de Usos');
define('DATE_CREATED', 'Data de Cria��o');
define('DATE_MODIFIED', 'Modificado em');
define('TEXT_HEADING_NEW_COUPON', 'Criar Novo Cupom');
define('TEXT_NEW_INTRO', 'Por favor, preencha as informa��es abaixo para o novo cupom.<br />');
define('COUPON_ZONE_RESTRICTION', 'Restringir Cupom � Zona');
define('TEXT_COUPON_ZONE_RESTRICTION', 'Restri��es de Zona s�o opcionais.');

define('ERROR_NO_COUPON_AMOUNT', 'Nenhum valor de cupom digitado');
define('ERROR_NO_COUPON_NAME', 'Nenhum nome de cupom digitado ');
define('ERROR_COUPON_EXISTS', 'Um cupom com este c�digo j� existe');


define('COUPON_NAME_HELP', 'Um nome curto para o cupom');
define('COUPON_AMOUNT_HELP', 'O valor do desconto para este cupom, pode ser fixo ou adicionado o s�mbolo % para ser um cupom de desconto por porcentagem.');
define('COUPON_CODE_HELP', 'Voc� pode digitar seu pr�prio c�digo aqui, ou deixar em branco para um ser gerado automaticamente.');
define('COUPON_STARTDATE_HELP', 'A data que o cupom estar� dispon�vel');
define('COUPON_FINISHDATE_HELP', 'A data que o cupom expirar�');
define('COUPON_FREE_SHIP_HELP', 'O cupom lhe fornecer� o frete gr�tis. Nota. Isto substitui o campo valor do cupom, mas respeita o valor m�nimo de compra.');
define('COUPON_DESC_HELP', 'Uma descri��o do cupom para o cliente');
define('COUPON_MIN_ORDER_HELP', 'O valor m�nimo da compra para que este cupom seja v�lido');
define('COUPON_USES_COUPON_HELP', 'N�mero m�ximo de vezes que este cupom pode ser usado, deixe em branco para que n�o tenha limite.');
define('COUPON_USES_USER_HELP', 'N�mero de vezes que um mesmo cliente pode usar este cupom, deixe em branco para sem limite.');
define('COUPON_PRODUCTS_HELP', 'Uma lista de id de produtos separados por v�rgula que este cupom ser� usado. Deixe em branco para sem restri��o.');
define('COUPON_CATEGORIES_HELP', 'Uma lista de cpaths (caminhos de categoria) que este cupom ser� usado. Deixe em branco para sem restri��o.');
define('COUPON_BUTTON_PREVIEW', 'Pr�-visualiza��o');
define('COUPON_BUTTON_CONFIRM', 'Confirmar');
define('COUPON_BUTTON_BACK', 'Voltar');

define('COUPON_ACTIVE', 'Estado');
define('COUPON_START_DATE', 'Come�a');
define('COUPON_EXPIRE_DATE', 'Expira');

define('ERROR_DISCOUNT_COUPON_WELCOME', 'O Cupom de Desconto N�O PODE ser desativado. Este cupom � o Cupom de Boas-Vindas.<br /><br />Altere o cupom de Boas-Vindas antes de tentar exclu�-lo. Veja em Administra��o -> Configura��o -> Cuppons de Desconto');
define('SUCCESS_COUPON_DISABLED', 'Sucesso! Cupom de Desconto Desativado...');
define('TEXT_COUPON_NEW', 'Digite o c�digo para o NOVO Cupom de Desconto:');
define('ERROR_DISCOUNT_COUPON_DUPLICATE', 'ATEN��O! Existens Cupons Duplicados... Copiado cupom cancelado para o C�digo: ');
define('TEXT_CONFIRM_COPY', 'Tem certeza que deseja Copiar este Cupom de Desconto como outro Cupom de Desconto?');
define('SUCCESS_COUPON_DUPLICATE', 'Sucesso! Cupom de Desconto Duplicado...<br /><br />Tenha certeza de verificar as Datas e o Nome do Cupom...');
?>