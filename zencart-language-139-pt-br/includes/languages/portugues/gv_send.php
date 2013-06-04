<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: gv_send.php 3421 2006-04-12 04:16:14Z drbyte $
 */

define('HEADING_TITLE', 'Enviar ' . TEXT_GV_NAME);
define('HEADING_TITLE_CONFIRM_SEND', 'Confirmação de envio de ' . TEXT_GV_NAME );
define('HEADING_TITLE_COMPLETED', TEXT_GV_NAME . ' Enviado');
define('NAVBAR_TITLE', 'Enviar ' . TEXT_GV_NAME);
define('EMAIL_SUBJECT', 'Mensagem de ' . STORE_NAME);
define('HEADING_TEXT','Por favor, informe o Nome, Email e a Quantia do ' . TEXT_GV_NAME . ' que você gostaria de enviar. Para maiores informações, veja nossa sessão <a href="' . zen_href_link(FILENAME_GV_FAQ, '', 'NONSSL').'">' . GV_FAQ . '.</a>');
define('ENTRY_NAME', 'Nome do destinatário:');
define('ENTRY_EMAIL', 'Email do destinatário:');
define('ENTRY_MESSAGE', 'Sua mensagem:');
define('ENTRY_AMOUNT', 'Valor de envio:');
define('ERROR_ENTRY_TO_NAME_CHECK', 'Nome do destinátário não pode ficar em branco. Por favor preeencha o campo. ');
define('ERROR_ENTRY_AMOUNT_CHECK', 'A quantia do ' . TEXT_GV_NAME . ' parece não estar correta. Por favor, tente novamente.');
define('ERROR_ENTRY_EMAIL_ADDRESS_CHECK', 'Email incorreto. Por favor, tente novamente.');
define('MAIN_MESSAGE', 'Você está enviando um ' . TEXT_GV_NAME . ' de %s para %s,  para o email %s. Se estes detalhes não estiverem corretos, você pode editar sua mensagem clicando no botão <strong>editar</strong>.<br /><br />A mensagem que você está enviando é:<br /><br />');
define('SECONDARY_MESSAGE', 'Prezado(a) %s,<br /><br />' . 'Você está enviando um ' . TEXT_GV_NAME . ' de %s');
define('PERSONAL_MESSAGE', 'com a seguinte mensagem:');
define('TEXT_SUCCESS', 'Parabéns! Seu ' . TEXT_GV_NAME . ' foi enviado com sucesso.');
define('TEXT_SEND_ANOTHER', 'Você gostaria de enviar outro ' . TEXT_GV_NAME . '?');
define('TEXT_AVAILABLE_BALANCE',  'Conta de Vale-presente');

define('EMAIL_GV_TEXT_SUBJECT', 'Um presente de %s');
define('EMAIL_SEPARATOR', '----------------------------------------------------------------------------------------');
define('EMAIL_GV_TEXT_HEADER', 'Parabéns! Você recebeu um ' . TEXT_GV_NAME . ' de %s');
define('EMAIL_GV_FROM', 'Este ' . TEXT_GV_NAME . ' foi enviado a você por %s');
define('EMAIL_GV_MESSAGE', 'com uma mensagem dizendo: ');
define('EMAIL_GV_SEND_TO', 'Olá, %s');
define('EMAIL_GV_REDEEM', 'Para ativar este ' . TEXT_GV_NAME . ', clique no link abaixo. Caso tenha algum problema digite o ' . TEXT_GV_REDEEM . ' na hora que estiver finalizando uma compra em nossa loja.' . "\n\n" . TEXT_GV_REDEEM . ': %s');
define('EMAIL_GV_LINK', 'Para ativar clique aqui');
define('EMAIL_GV_VISIT', ' ou visite ');
define('EMAIL_GV_ENTER', ' e digite o ' . TEXT_GV_REDEEM . ' ');
define('EMAIL_GV_FIXED_FOOTER', 'Se tiver algum problema com o ' . TEXT_GV_REDEEM . ' do ' . TEXT_GV_NAME . ' envie um email para, ' . STORE_OWNER_EMAIL_ADDRESS . '.');

define('EMAIL_GV_SHOP_FOOTER', '');
?>