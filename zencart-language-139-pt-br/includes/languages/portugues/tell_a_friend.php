<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: tell_a_friend.php 3159 2006-03-11 01:35:04Z drbyte $
 */

define('NAVBAR_TITLE', 'Recomende a um amigo');

define('HEADING_TITLE', 'Recomende a um amigo sobre \'%s\'');

define('FORM_TITLE_CUSTOMER_DETAILS', 'Seus detalhes');
define('FORM_TITLE_FRIEND_DETAILS', 'Detalhes do seu amigo');
define('FORM_TITLE_FRIEND_MESSAGE', 'Sua mensagem:');

define('FORM_FIELD_CUSTOMER_NAME', 'Seu nome:');
define('FORM_FIELD_CUSTOMER_EMAIL', 'Seu email:');
define('FORM_FIELD_FRIEND_NAME', 'Nome do seu amigo:');
define('FORM_FIELD_FRIEND_EMAIL', 'Email do seu amigo:');

define('EMAIL_SEPARATOR', '----------------------------------------------------------------------------------------');

define('TEXT_EMAIL_SUCCESSFUL_SENT', 'Seu email sobre <strong>%s</strong> foi enviado com sucesso <strong>%s</strong>.');

define('EMAIL_TEXT_HEADER','Importante!');

define('EMAIL_TEXT_SUBJECT', 'Seu amigo %s recomendou este excelente produto da %s');
define('EMAIL_TEXT_GREET', 'Olá %s!' . "\n\n");
define('EMAIL_TEXT_INTRO', 'Seu amigo, %s, acha que você pode estar interessado no %s da %s.');

define('EMAIL_TELL_A_FRIEND_MESSAGE','%s Enviou um comentário dizendo:');

define('EMAIL_TEXT_LINK', 'Para ver o produto, clique no link abaixo ou copie e cole o endereço no seu navegador:' . "\n\n" . '%s');
define('EMAIL_TEXT_SIGNATURE', 'Obrigado' . "\n\n" . '%s');

define('ERROR_TO_NAME', 'Erro: Informe o nome do seu amigo.');
define('ERROR_TO_ADDRESS', 'Erro: O email do seu amigo parece não ser um email válido. Por favor, tente novamente.');
define('ERROR_FROM_NAME', 'Erro: Informe seu nome.');
define('ERROR_FROM_ADDRESS', 'Erro: Seu email parece não ser um email válido. Por favor. tente novamente.');
?>
