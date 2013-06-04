<?php
/**
 * @package admin
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: newsletters.php 4385 2006-09-04 04:10:48Z drbyte $
 */

define('HEADING_TITLE', 'Gerenciador de Newsletter e Notificações de Produtos');

define('TABLE_HEADING_NEWSLETTERS', 'Newsletters');
define('TABLE_HEADING_SIZE', 'Tamanho');
define('TABLE_HEADING_MODULE', 'Módulo');
define('TABLE_HEADING_SENT', 'Enviado');
define('TABLE_HEADING_STATUS', 'Estado');
define('TABLE_HEADING_ACTION', 'Ação');

define('TEXT_NEWSLETTER_MODULE', 'Módulo:');
define('TEXT_NEWSLETTER_TITLE', 'Assunto:');
define('TEXT_NEWSLETTER_CONTENT', 'Conteúdo<br />Somente-Texto:');
define('TEXT_NEWSLETTER_CONTENT_HTML', 'Conteúdo<br />HTML:');

define('TEXT_NEWSLETTER_DATE_ADDED', 'Adicionado em:');
define('TEXT_NEWSLETTER_DATE_SENT', 'Enviado Em:');

define('TEXT_INFO_DELETE_INTRO', 'Tem certeza que deseja excluir esta newsletter?');

define('TEXT_PLEASE_WAIT', 'Por favor, aguarde... enviando e-mails...<br /><br />Por favor, não interrompa este processo!');
define('TEXT_FINISHED_SENDING_EMAILS', 'Terminado o envio de e-mails!');

define('TEXT_AFTER_EMAIL_INSTRUCTIONS','%s e-mails processados. (Cada caixa de seleção indica 1 destinatário. Coloque o mouse em cima da caixa de seleção para ver o endereço de e-mail.)<br /><br />Observe sua caixa de entrada de e-mail ('.EMAIL_FROM.') por:<UL><LI>a) mensagens que retornaram do destinatário</LI><LI>b) endereços de e-mail que não existem</LI><LI>c) solicitações de remoção.</LI></UL>Remoções podem ser processadas editando os dados do Cliente no menu Clientes.');

define('ERROR_NEWSLETTER_TITLE', 'Erro: Título da Newsletter obrigatório');
define('ERROR_NEWSLETTER_MODULE', 'Erro:  Módulo da Newsletter obrigatório');
define('ERROR_PLEASE_SELECT_AUDIENCE','Erro: Por favor, selecione quem receberá esta newsletter');
?>