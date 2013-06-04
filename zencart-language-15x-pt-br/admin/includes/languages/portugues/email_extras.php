<?php
/**
 * @package admin
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: email_extras.php 18698 2011-05-04 14:50:06Z wilt $
 */

// office use only
 define('OFFICE_FROM','De:');
 define('OFFICE_EMAIL','E-mail:');

 define('OFFICE_SENT_TO','Enviado Para:');
 define('OFFICE_EMAIL_TO','E-mail:');
 define('OFFICE_USE','Somente Uso do Escrit&oacute;rio:');
 define('OFFICE_LOGIN_NAME','Nome de Login:');
 define('OFFICE_LOGIN_EMAIL','E-mail de Login:');
 define('OFFICE_LOGIN_PHONE','<strong>Telefone:</strong>');
 define('OFFICE_IP_ADDRESS','Endere&ccedil;o IP:');
 define('OFFICE_HOST_ADDRESS','Endere&ccedil;o do Host:');
 define('OFFICE_DATE_TIME','Data e Hora:');

// email disclaimer
 define('EMAIL_DISCLAIMER', 'Este endere&ccedil;o de e-mail foi dado a n&oacute;s por voc&ecirc; ou um de nossos clientes. Se voc&ecirc; achar que o recebimento deste e-mail &eacute; um erro, por favor envie um e-mail para %s');
 define('EMAIL_SPAM_DISCLAIMER','Este e-mail &eacute; enviado de acordo com as leis de SPAM dos EUA em efeito no em 01/01/2004. Solicita&ccedil;&otilde;es de remo&ccedil;&atilde;o podem ser enviados para este endere&ccedil;o e ser&atilde;o honradas e respeitadas.');
 define('EMAIL_FOOTER_COPYRIGHT','Copyright (c) ' . date('Y') . ' <a href="http://www.zen-cart.com" target="_blank">Zen Cart</a>. Powered by <a href="http://www.zen-cart.com" target="_blank">Zen Cart</a>');
 define('SEND_EXTRA_GV_ADMIN_EMAILS_TO_SUBJECT','[VALE PRESENTES ENVIADOS]');
 define('SEND_EXTRA_DISCOUNT_COUPON_ADMIN_EMAILS_TO_SUBJECT','[CUPONS DE DESCONTO]');
 define('SEND_EXTRA_ORDERS_STATUS_ADMIN_EMAILS_TO_SUBJECT','[ESTADO DAS VENDAS]');
 define('TEXT_UNSUBSCRIBE', "\n\nPara se desinscrever de futuras newsletter e malas direta promocionais, simplesmente clique no seguinte link: \n");

// for whos_online when gethost is off
 define('OFFICE_IP_TO_HOST_ADDRESS', 'Desabilitado');

define('TEXT_EMAIL_SUBJECT_ADMIN_USER_ADDED', 'Admin Alert: New admin user added.');
define('TEXT_EMAIL_MESSAGE_ADMIN_USER_ADDED', 'Administrative alert: A new admin user (%s) has been ADDED to your store by %s.' . "\n\n" . 'If you or an authorized administrator did not initiate this change, it is advised that you verify your site security immediately.');
define('TEXT_EMAIL_SUBJECT_ADMIN_USER_DELETED', 'Admin Alert: An admin user has been deleted.');
define('TEXT_EMAIL_MESSAGE_ADMIN_USER_DELETED', 'Administrative alert: An admin user (%s) has been DELETED from your store by %s.' . "\n\n" . 'If you or an authorized administrator did not initiate this change, it is advised that you verify your site security immediately.');
define('TEXT_EMAIL_SUBJECT_ADMIN_USER_CHANGED', 'Admin Alert: Admin user details have been changed.');
define('TEXT_EMAIL_ALERT_ADM_EMAIL_CHANGED', 'Admin alert: Admin user (%s) email address has been changed from (%s) to (%s) by (%s)');
define('TEXT_EMAIL_ALERT_ADM_NAME_CHANGED', 'Admin alert: Admin user (%s) username has been changed from (%s) to (%s) by (%s)');
define('TEXT_EMAIL_ALERT_ADM_PROFILE_CHANGED', 'Admin alert: Admin user (%s) security profile has been changed from (%s) to (%s) by (%s)');