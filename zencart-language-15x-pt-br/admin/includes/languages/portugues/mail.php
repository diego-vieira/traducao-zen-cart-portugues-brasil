<?php
/**
 * @package admin
 * @copyright Copyright 2003-2007 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: mail.php 7197 2007-10-06 20:35:52Z drbyte $
 */


define('HEADING_TITLE', 'Enviar E-mail para Clientes');

define('TEXT_CUSTOMER', 'Cliente:');
define('TEXT_SUBJECT', 'Assunto:');
define('TEXT_FROM', 'De:');
define('TEXT_MESSAGE', 'Mensagem em<br />formato Texto:');
define('TEXT_MESSAGE_HTML','Mensagem em<br />formato HTML:');
define('TEXT_SELECT_CUSTOMER', 'Selecionar Cliente');
define('TEXT_ALL_CUSTOMERS', 'Todos os Clientes');
define('TEXT_NEWSLETTER_CUSTOMERS', 'Todos os Inscritos na Newsletter');
define('TEXT_ATTACHMENTS_LIST','Anexo Selecionado: ');
define('TEXT_SELECT_ATTACHMENT','Anexo<br />no servidor: ');
define('TEXT_SELECT_ATTACHMENT_TO_UPLOAD','Anexo<br />para enviar<br />&amp; anexar: ');
define('TEXT_ATTACHMENTS_DIR','Pasta de envio: ');

define('NOTICE_EMAIL_SENT_TO', 'Not&iacute;cia: E-mail enviado para: %s');
define('NOTICE_EMAIL_FAILED_SEND', 'Not&iacute;cia: FALHA ao enviar E-mail para os seguintes destinat&aacute;rios: %s');
define('ERROR_NO_CUSTOMER_SELECTED', 'Erro: Nenhum cliente foi selecionado.');
define('ERROR_NO_SUBJECT', 'Erro: Nenhum assunto foi digitado.');
define('ERROR_ATTACHMENTS', 'Erro: Voc&ecirc; n&atilde;o pode selecionar tanto ENVIAR e ADICIONAR anexos separadamente. Por favor, escolha apenas um.');
?>