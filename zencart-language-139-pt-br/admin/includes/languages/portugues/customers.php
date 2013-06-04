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
define('TABLE_HEADING_LASTNAME', 'Último Nome');
define('TABLE_HEADING_ACCOUNT_CREATED', 'Conta Criada');
define('TABLE_HEADING_LOGIN', 'Último Login');
define('TABLE_HEADING_ACTION', 'Ação');
define('TABLE_HEADING_PRICING_GROUP', 'Grupo de Preços');
define('TABLE_HEADING_AUTHORIZATION_APPROVAL', 'Autorizado');
define('TABLE_HEADING_GV_AMOUNT', 'Saldo de Vale-Presente');

define('TEXT_DATE_ACCOUNT_CREATED', 'Conta Criada:');
define('TEXT_DATE_ACCOUNT_LAST_MODIFIED', 'Última Modificação:');
define('TEXT_INFO_DATE_LAST_LOGON', 'Último Login:');
define('TEXT_INFO_NUMBER_OF_LOGONS', 'Número de Logins:');
define('TEXT_INFO_COUNTRY', 'País:');
define('TEXT_INFO_NUMBER_OF_REVIEWS', 'Número de Avaliações:');
define('TEXT_DELETE_INTRO', 'Tem certeza que deseja excluir este cliente?');
define('TEXT_DELETE_REVIEWS', 'Excluir %s atualização(ões)');
define('TEXT_INFO_HEADING_DELETE_CUSTOMER', 'Excluir Cliente');
define('TYPE_BELOW', 'Digite abaixo');
define('PLEASE_SELECT', 'Selecione Um');
define('TEXT_INFO_NUMBER_OF_ORDERS', 'Número de Compras:');
define('TEXT_INFO_LAST_ORDER','Última Compra:');
define('TEXT_INFO_ORDERS_TOTAL', 'Total:');
define('CUSTOMERS_REFERRAL', 'Referência de Clientes<br />1º Cupom de Desconto');
define('TEXT_INFO_GV_AMOUNT', 'Saldo de Vale-Presente');

define('ENTRY_NONE', 'Nenhum');

define('TABLE_HEADING_COMPANY','Empresa');

define('CUSTOMERS_AUTHORIZATION', 'Estado de Autorização de Clientes');
define('CUSTOMERS_AUTHORIZATION_0', 'Aprovado');
define('CUSTOMERS_AUTHORIZATION_1', 'Aprovação Pendente - Precisa ser Autorizado para Navegar');
define('CUSTOMERS_AUTHORIZATION_2', 'Aprovação Pendente - Pode Navegar sem Preços');
define('CUSTOMERS_AUTHORIZATION_3', 'Aprovação Pendente - Pode Navegar com preços, mas não pode comprar');
define('CUSTOMERS_AUTHORIZATION_4', 'Banido - Não Pode logar ou comprar');
define('ERROR_CUSTOMER_APPROVAL_CORRECTION1', 'Atenção: Sua loja está configurada para Aprovação sem Navegação. O cliente foi configurado para Aprovação Pendente - Não Pode Navegar');
define('ERROR_CUSTOMER_APPROVAL_CORRECTION2', 'Atenção: Sua loga está configurada para Aprovação com Navegação sem preços. O cliente foi configurado para Aprovação Pendente - Navegar Sem Preços');

define('EMAIL_CUSTOMER_STATUS_CHANGE_MESSAGE', 'Seu estado de cliente foi atualizado. Obrigado por comprar conosco.');
define('EMAIL_CUSTOMER_STATUS_CHANGE_SUBJECT', 'Estado de Cliente Atualizado');

define('ADDRESS_BOOK_TITLE', 'Entradas do Catálogo de Endereços');
define('PRIMARY_ADDRESS', '(endereço primário)');
define('TEXT_MAXIMUM_ENTRIES', '<span class="coming"><strong>NOTA:</strong></span> São permitidos um máximo de %s entradas no catálogo de endereços.');
define('TEXT_INFO_ADDRESS_BOOK_COUNT', ' | 1 de  ');
?>