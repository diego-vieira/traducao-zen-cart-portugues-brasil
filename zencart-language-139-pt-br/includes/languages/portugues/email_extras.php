<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2007 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: email_extras.php 7161 2007-10-02 10:58:34Z drbyte $
 */

// office use only
  define('OFFICE_FROM','<strong>De:</strong>');
  define('OFFICE_EMAIL','<strong>Email:</strong>');

  define('OFFICE_SENT_TO','<strong>Enviar para:</strong>');
  define('OFFICE_EMAIL_TO','<strong>Email:</strong>');

  define('OFFICE_USE','<strong>Apenas para uso da Loja:</strong>');
  define('OFFICE_LOGIN_NAME','<strong>Login:</strong>');
  define('OFFICE_LOGIN_EMAIL','<strong>Email:</strong>');
  define('OFFICE_LOGIN_PHONE','<strong>Telefone:</strong>');
  define('OFFICE_LOGIN_FAX','<strong>Celular:</strong>');
  define('OFFICE_IP_ADDRESS','<strong>Endere�o IP:</strong>');
  define('OFFICE_HOST_ADDRESS','<strong>Endere�o do Host:</strong>');
  define('OFFICE_DATE_TIME','<strong>Data e Hora:</strong>');
  if (!defined('OFFICE_IP_TO_HOST_ADDRESS')) define('OFFICE_IP_TO_HOST_ADDRESS', 'Desligado');

// email disclaimer
  define('EMAIL_DISCLAIMER', 'Este endere�o de email foi fornecido atrav�s do cadastro em nossa loja virtual. Se voc� n�o se cadastrou, ou recebeu este email por engano, por favor entre em contato conosco atrav�s do email: %s ');
  define('EMAIL_SPAM_DISCLAIMER','Isso n�o � considerado SPAM, pois voc� escolheu receber este e-mail. Pedidos de remo��o podem ser solicitados para este endere�o.');
  define('EMAIL_FOOTER_COPYRIGHT','Copyright (c) ' . date('Y') . ' <a href="http://www.zen-cart.com" target="_blank">Zen Cart</a>. Desenvolvido por <a href="http://www.zen-cart.com" target="_blank">Zen Cart</a>');
  define('TEXT_UNSUBSCRIBE', "\n\nTo unsubscribe from future newsletter and promotional mailings, simply click on the following link: \n");

// email advisory for all emails customer generate - tell-a-friend and GV send
  define('EMAIL_ADVISORY', '-----' . "\n" . '<strong>IMPORTANTE: </strong> Para sua seguran�a e para impedir o uso indevido de e-mails, todos os e-mail enviados atrav�s deste Web site s�o registrados e os seus �ndices gravados e dispon�veis ao propriet�rio da loja.  Se voc� recebeu esta menssagem  por engano, por favor envie um email para ' . STORE_OWNER_EMAIL_ADDRESS . "\n\n");

// email advisory included warning for all emails customer generate - tell-a-friend and GV send
  define('EMAIL_ADVISORY_INCLUDED_WARNING', '<strong>Esta mensagem � inclu�da em todos os emails emitidos por este local:</strong><br />');


// Admin additional email subjects
  define('SEND_EXTRA_CREATE_ACCOUNT_EMAILS_TO_SUBJECT','[CRIAR CONTA]');
  define('SEND_EXTRA_TELL_A_FRIEND_EMAILS_TO_SUBJECT','[INFORMAR A UM AMIGO]');
  define('SEND_EXTRA_GV_CUSTOMER_EMAILS_TO_SUBJECT','[CUPOM DE DESCONTO]');
  define('SEND_EXTRA_NEW_ORDERS_EMAILS_TO_SUBJECT','[NOVO PEDIDO]');
  define('SEND_EXTRA_CC_EMAILS_TO_SUBJECT','[PEDIDO EXTRA CC INFO] #');

// Low Stock Emails
  define('EMAIL_TEXT_SUBJECT_LOWSTOCK','AVISO: Estoque BAIXO');
  define('SEND_EXTRA_LOW_STOCK_EMAIL_TITLE','Relat�rio de Estoque Baixo: ');

// for when gethost is off
  define('OFFICE_IP_TO_HOST_ADDRESS', 'Desabilitado');
?>