<?php
/**
 * @package admin
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: whos_online.php 18698 2011-05-04 14:50:06Z wilt $
 */

define('HEADING_TITLE', 'Quem Est&aacute; Online');
define('TABLE_HEADING_ONLINE', 'Online');
define('TABLE_HEADING_CUSTOMER_ID', 'ID');
define('TABLE_HEADING_FULL_NAME', 'Nome Completo');
define('TABLE_HEADING_IP_ADDRESS', 'Endere&ccedil;o IP');
define('TABLE_HEADING_SESSION_ID', 'Sess&atilde;o');
define('TABLE_HEADING_ENTRY_TIME', 'Hora de Entrada');
define('TABLE_HEADING_LAST_CLICK', 'Hora do &Uacute;ltimo Clique');
define('TIME_PASSED_LAST_CLICKED', '<strong>Hora Desde o &Uacute;ltimo Clique:</strong> ');
define('TABLE_HEADING_LAST_PAGE_URL', '&Uacute;ltima URL Vista');
define('TABLE_HEADING_ACTION', 'A&ccedil;&atilde;o');
define('TABLE_HEADING_SHOPPING_CART', 'Carrinho de Compras do Usu&aacute;rio');
define('TEXT_SHOPPING_CART_SUBTOTAL', 'Sub-total');
define('TEXT_NUMBER_OF_CUSTOMERS', 'Atualmente existem %s clientes online');

 define('WHOS_ONLINE_REFRESH_LIST_TEXT', 'ATUALIZAR LISTA');
 define('WHOS_ONLINE_LEGEND_TEXT','Legenda:');
 define('WHOS_ONLINE_ACTIVE_TEXT','Carrinho ativo');
 define('WHOS_ONLINE_INACTIVE_TEXT','Carrinho inativo');
 define('WHOS_ONLINE_ACTIVE_NO_CART_TEXT','Ativo sem carrinho');
 define('WHOS_ONLINE_INACTIVE_NO_CART_TEXT','Inativo sem carrinho');
 define('WHOS_ONLINE_INACTIVE_LAST_CLICK_TEXT','Inativo &Uacute;ltimo Clique >=');
 define('WHOS_ONLINE_INACTIVE_ARRIVAL_TEXT','Inativo desde a chegada >');
 define('WHOS_ONLINE_REMOVED_TEXT','ser&aacute; removido');

define('TEXT_SESSION_ID', '<strong>Session ID:</strong> ');
define('TEXT_HOST', '<strong>Host:</strong> ');
define('TEXT_USER_AGENT', '<strong>User Agent:</strong> ');
define('TEXT_EMPTY_CART', '<strong>Empty Cart</strong>');
define('TEXT_WHOS_ONLINE_FILTER_SPIDERS', 'Exclude Spiders?');
define('TEXT_WHOS_ONLINE_FILTER_ADMINS', 'Exclude Admin IP Addresses?');

define('WHOIS_TIMER_REMOVE', 1200); // seconds when removed from whos_online table - 1200 default = 20 minutes
define('WHOIS_TIMER_INACTIVE', 180); // seconds when considered inactive - 180 default = 3 minutes
define('WHOIS_TIMER_DEAD', 540); // seconds when considered dead - 540 default = 9 minutes
define('WHOIS_SHOW_HOST', '1'); // show Last Clicked time and host name - 1 default
define('WHOIS_REPEAT_LEGEND_BOTTOM', '12'); // show legend on bottom when more than how many entries - 12 default
define('OFFICE_IP_TO_HOST_ADDRESS', 'OFF');

define('TEXT_WHOS_ONLINE_TIMER_UPDATING', 'Updating ');
define('TEXT_WHOS_ONLINE_TIMER_EVERY', 'every %s seconds.&nbsp;&nbsp;');
define('TEXT_WHOS_ONLINE_TIMER_DISABLED', 'Manually');
define('TEXT_WHOS_ONLINE_TIMER_FREQ0', 'OFF');
define('TEXT_WHOS_ONLINE_TIMER_FREQ1', '5 sec');
define('TEXT_WHOS_ONLINE_TIMER_FREQ2', '15 sec');
define('TEXT_WHOS_ONLINE_TIMER_FREQ3', '30 sec');
define('TEXT_WHOS_ONLINE_TIMER_FREQ4', '1 min');
