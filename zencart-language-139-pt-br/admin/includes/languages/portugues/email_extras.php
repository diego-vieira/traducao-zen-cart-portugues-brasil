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
// $Id: email_extras.php 5454 2006-12-29 20:10:17Z drbyte $
//

// office use only
  define('OFFICE_FROM','De:');
  define('OFFICE_EMAIL','E-mail:');

  define('OFFICE_SENT_TO','Enviado Para:');
  define('OFFICE_EMAIL_TO','E-mail:');
  define('OFFICE_USE','Somente Uso do Escritório:');
  define('OFFICE_LOGIN_NAME','Nome de Login:');
  define('OFFICE_LOGIN_EMAIL','E-mail de Login:');
  define('OFFICE_LOGIN_PHONE','<strong>Telefone:</strong>');
  define('OFFICE_IP_ADDRESS','Endereço IP:');
  define('OFFICE_HOST_ADDRESS','Endereço do Host:');
  define('OFFICE_DATE_TIME','Data e Hora:');

// email disclaimer
  define('EMAIL_DISCLAIMER', 'Este endereço de e-mail foi dado a nós por você ou um de nossos clientes. Se você achar que o recebimento deste e-mail é um erro, por favor envie um e-mail para %s');
  define('EMAIL_SPAM_DISCLAIMER','Este e-mail é enviado de acordo com as leis de SPAM dos EUA em efeito no em 01/01/2004. Solicitações de remoção podem ser enviados para este endereço e serão honradas e respeitadas.');
  define('EMAIL_FOOTER_COPYRIGHT','Copyright (c) ' . date('Y') . ' <a href="http://www.zen-cart.com" target="_blank">Zen Cart</a>. Powered by <a href="http://www.zen-cart.com" target="_blank">Zen Cart</a>');
  define('SEND_EXTRA_GV_ADMIN_EMAILS_TO_SUBJECT','[VALE PRESENTES ENVIADOS]');
  define('SEND_EXTRA_DISCOUNT_COUPON_ADMIN_EMAILS_TO_SUBJECT','[CUPONS DE DESCONTO]');
  define('SEND_EXTRA_ORDERS_STATUS_ADMIN_EMAILS_TO_SUBJECT','[ESTADO DAS VENDAS]');
  define('TEXT_UNSUBSCRIBE', "\n\nPara se desinscrever de futuras newsletter e malas direta promocionais, simplesmente clique no seguinte link: \n");

// for whos_online when gethost is off
  define('OFFICE_IP_TO_HOST_ADDRESS', 'Desabilitado');
?>