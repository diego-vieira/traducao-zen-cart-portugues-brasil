<?php
/**
 * @package admin
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: newsletters.php 4385 2006-09-04 04:10:48Z drbyte $
 */

define('HEADING_TITLE', 'Gerenciador de Newsletter e Notifica&ccedil;&otilde;es de Produtos');

define('TABLE_HEADING_NEWSLETTERS', 'Newsletters');
define('TABLE_HEADING_SIZE', 'Tamanho');
define('TABLE_HEADING_MODULE', 'M&oacute;dulo');
define('TABLE_HEADING_SENT', 'Enviado');
define('TABLE_HEADING_STATUS', 'Estado');
define('TABLE_HEADING_ACTION', 'A&ccedil;&atilde;o');

define('TEXT_NEWSLETTER_MODULE', 'M&oacute;dulo:');
define('TEXT_NEWSLETTER_TITLE', 'Assunto:');
define('TEXT_NEWSLETTER_CONTENT', 'Conte&uacute;do<br />Somente-Texto:');
define('TEXT_NEWSLETTER_CONTENT_HTML', 'Conte&uacute;do<br />HTML:');

define('TEXT_NEWSLETTER_DATE_ADDED', 'Adicionado em:');
define('TEXT_NEWSLETTER_DATE_SENT', 'Enviado Em:');

define('TEXT_INFO_DELETE_INTRO', 'Tem certeza que deseja excluir esta newsletter?');

define('TEXT_PLEASE_WAIT', 'Por favor, aguarde... enviando e-mails...<br /><br />Por favor, n&atilde;o interrompa este processo!');
define('TEXT_FINISHED_SENDING_EMAILS', 'Terminado o envio de e-mails!');

define('TEXT_AFTER_EMAIL_INSTRUCTIONS','%s e-mails processados. (Cada caixa de sele&ccedil;&atilde;o indica 1 destinat&aacute;rio. Coloque o mouse em cima da caixa de sele&ccedil;&atilde;o para ver o endere&ccedil;o de e-mail.)<br /><br />Observe sua caixa de entrada de e-mail ('.EMAIL_FROM.') por:<UL><LI>a) mensagens que retornaram do destinat&aacute;rio</LI><LI>b) endere&ccedil;os de e-mail que n&atilde;o existem</LI><LI>c) solicita&ccedil;&otilde;es de remo&ccedil;&atilde;o.</LI></UL>Remo&ccedil;&otilde;es podem ser processadas editando os dados do Cliente no menu Clientes.');

define('ERROR_NEWSLETTER_TITLE', 'Erro: T&iacute;tulo da Newsletter obrigat&oacute;rio');
define('ERROR_NEWSLETTER_MODULE', 'Erro: M&oacute;dulo da Newsletter obrigat&oacute;rio');
define('ERROR_PLEASE_SELECT_AUDIENCE','Erro: Por favor, selecione quem receber&aacute; esta newsletter');
?>