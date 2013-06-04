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
define('TABLE_HEADING_LASTNAME', '&Uacute;ltimo Nome');
define('TABLE_HEADING_ACCOUNT_CREATED', 'Conta Criada');
define('TABLE_HEADING_LOGIN', '&Uacute;ltimo Login');
define('TABLE_HEADING_ACTION', 'A&ccedil;&atilde;o');
define('TABLE_HEADING_PRICING_GROUP', 'Grupo de Pre&ccedil;os');
define('TABLE_HEADING_AUTHORIZATION_APPROVAL', 'Autorizado');
define('TABLE_HEADING_GV_AMOUNT', 'Saldo de Vale-Presente');

define('TEXT_DATE_ACCOUNT_CREATED', 'Conta Criada:');
define('TEXT_DATE_ACCOUNT_LAST_MODIFIED', '&Uacute;ltima Modifica&ccedil;&atilde;o:');
define('TEXT_INFO_DATE_LAST_LOGON', '&Uacute;ltimo Login:');
define('TEXT_INFO_NUMBER_OF_LOGONS', 'N&uacute;mero de Logins:');
define('TEXT_INFO_COUNTRY', 'Pa&iacute;s:');
define('TEXT_INFO_NUMBER_OF_REVIEWS', 'N&uacute;mero de Avalia&ccedil;&otilde;es:');
define('TEXT_DELETE_INTRO', 'Tem certeza que deseja excluir este cliente?');
define('TEXT_DELETE_REVIEWS', 'Excluir %s atualiza&ccedil;&atilde;o(&otilde;es)');
define('TEXT_INFO_HEADING_DELETE_CUSTOMER', 'Excluir Cliente');
define('TYPE_BELOW', 'Digite abaixo');
define('PLEASE_SELECT', 'Selecione Um');
define('TEXT_INFO_NUMBER_OF_ORDERS', 'N&uacute;mero de Compras:');
define('TEXT_INFO_LAST_ORDER','&Uacute;ltima Compra:');
define('TEXT_INFO_ORDERS_TOTAL', 'Total:');
define('CUSTOMERS_REFERRAL', 'Refer&ecirc;ncia de Clientes<br />1&ordm; Cupom de Desconto');
define('TEXT_INFO_GV_AMOUNT', 'Saldo de Vale-Presente');

define('ENTRY_NONE', 'Nenhum');

define('TABLE_HEADING_COMPANY','Empresa');

define('CUSTOMERS_AUTHORIZATION', 'Estado de Autoriza&ccedil;&atilde;o de Clientes');
define('CUSTOMERS_AUTHORIZATION_0', 'Aprovado');
define('CUSTOMERS_AUTHORIZATION_1', 'Aprova&ccedil;&atilde;o Pendente - Precisa ser Autorizado para Navegar');
define('CUSTOMERS_AUTHORIZATION_2', 'Aprova&ccedil;&atilde;o Pendente - Pode Navegar sem Pre&ccedil;os');
define('CUSTOMERS_AUTHORIZATION_3', 'Aprova&ccedil;&atilde;o Pendente - Pode Navegar com pre&ccedil;os, mas n&atilde;o pode comprar');
define('CUSTOMERS_AUTHORIZATION_4', 'Banido - N&atilde;o Pode logar ou comprar');
define('ERROR_CUSTOMER_APPROVAL_CORRECTION1', 'Aten&ccedil;&atilde;o: Sua loja est&aacute; configurada para Aprova&ccedil;&atilde;o sem Navega&ccedil;&atilde;o. O cliente foi configurado para Aprova&ccedil;&atilde;o Pendente - N&atilde;o Pode Navegar');
define('ERROR_CUSTOMER_APPROVAL_CORRECTION2', 'Aten&ccedil;&atilde;o: Sua loga est&aacute; configurada para Aprova&ccedil;&atilde;o com Navega&ccedil;&atilde;o sem pre&ccedil;os. O cliente foi configurado para Aprova&ccedil;&atilde;o Pendente - Navegar Sem Pre&ccedil;os');

define('EMAIL_CUSTOMER_STATUS_CHANGE_MESSAGE', 'Seu estado de cliente foi atualizado. Obrigado por comprar conosco.');
define('EMAIL_CUSTOMER_STATUS_CHANGE_SUBJECT', 'Estado de Cliente Atualizado');

define('ADDRESS_BOOK_TITLE', 'Entradas do Cat&aacute;logo de Endere&ccedil;os');
define('PRIMARY_ADDRESS', '(endere&ccedil;o prim&aacute;rio)');
define('TEXT_MAXIMUM_ENTRIES', '<span class="coming"><strong>NOTA:</strong></span> S&atilde;o permitidos um m&aacute;ximo de %s entradas no cat&aacute;logo de endere&ccedil;os.');
define('TEXT_INFO_ADDRESS_BOOK_COUNT', ' | 1 de ');
?>