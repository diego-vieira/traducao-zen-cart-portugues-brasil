<?php
/**
 * @package admin
 * @copyright Copyright 2003-2007 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: customers.php 6352 2007-05-20 21:05:01Z drbyte $
 */

define('HEADING_TITLE', 'Clientes');

define('TABLE_HEADING_ID', 'ID#');
define('TABLE_HEADING_FIRSTNAME', 'Primeiro Nome');
define('TABLE_HEADING_LASTNAME', '�ltimo Nome');
define('TABLE_HEADING_ACCOUNT_CREATED', 'Conta Criada');
define('TABLE_HEADING_LOGIN', '�ltimo Login');
define('TABLE_HEADING_ACTION', 'A��o');
define('TABLE_HEADING_PRICING_GROUP', 'Grupo de Pre�os');
define('TABLE_HEADING_AUTHORIZATION_APPROVAL', 'Autorizado');
define('TABLE_HEADING_GV_AMOUNT', 'Saldo de Vale-Presente');

define('TEXT_DATE_ACCOUNT_CREATED', 'Conta Criada:');
define('TEXT_DATE_ACCOUNT_LAST_MODIFIED', '�ltima Modifica��o:');
define('TEXT_INFO_DATE_LAST_LOGON', '�ltimo Login:');
define('TEXT_INFO_NUMBER_OF_LOGONS', 'N�mero de Logins:');
define('TEXT_INFO_COUNTRY', 'Pa�s:');
define('TEXT_INFO_NUMBER_OF_REVIEWS', 'N�mero de Avalia��es:');
define('TEXT_DELETE_INTRO', 'Tem certeza que deseja excluir este cliente?');
define('TEXT_DELETE_REVIEWS', 'Excluir %s atualiza��o(�es)');
define('TEXT_INFO_HEADING_DELETE_CUSTOMER', 'Excluir Cliente');
define('TYPE_BELOW', 'Digite abaixo');
define('PLEASE_SELECT', 'Selecione Um');
define('TEXT_INFO_NUMBER_OF_ORDERS', 'N�mero de Compras:');
define('TEXT_INFO_LAST_ORDER','�ltima Compra:');
define('TEXT_INFO_ORDERS_TOTAL', 'Total:');
define('CUSTOMERS_REFERRAL', 'Refer�ncia de Clientes<br />1� Cupom de Desconto');
define('TEXT_INFO_GV_AMOUNT', 'Saldo de Vale-Presente');

define('ENTRY_NONE', 'Nenhum');

define('TABLE_HEADING_COMPANY','Empresa');

define('CUSTOMERS_AUTHORIZATION', 'Estado de Autoriza��o de Clientes');
define('CUSTOMERS_AUTHORIZATION_0', 'Aprovado');
define('CUSTOMERS_AUTHORIZATION_1', 'Aprova��o Pendente - Precisa ser Autorizado para Navegar');
define('CUSTOMERS_AUTHORIZATION_2', 'Aprova��o Pendente - Pode Navegar sem Pre�os');
define('CUSTOMERS_AUTHORIZATION_3', 'Aprova��o Pendente - Pode Navegar com pre�os, mas n�o pode comprar');
define('CUSTOMERS_AUTHORIZATION_4', 'Banido - N�o Pode logar ou comprar');
define('ERROR_CUSTOMER_APPROVAL_CORRECTION1', 'Aten��o: Sua loja est� configurada para Aprova��o sem Navega��o. O cliente foi configurado para Aprova��o Pendente - N�o Pode Navegar');
define('ERROR_CUSTOMER_APPROVAL_CORRECTION2', 'Aten��o: Sua loga est� configurada para Aprova��o com Navega��o sem pre�os. O cliente foi configurado para Aprova��o Pendente - Navegar Sem Pre�os');

define('EMAIL_CUSTOMER_STATUS_CHANGE_MESSAGE', 'Seu estado de cliente foi atualizado. Obrigado por comprar conosco.');
define('EMAIL_CUSTOMER_STATUS_CHANGE_SUBJECT', 'Estado de Cliente Atualizado');

define('ADDRESS_BOOK_TITLE', 'Entradas do Cat�logo de Endere�os');
define('PRIMARY_ADDRESS', '(endere�o prim�rio)');
define('TEXT_MAXIMUM_ENTRIES', '<span class="coming"><strong>NOTA:</strong></span> S�o permitidos um m�ximo de %s entradas no cat�logo de endere�os.');
define('TEXT_INFO_ADDRESS_BOOK_COUNT', ' | 1 de  ');
?>