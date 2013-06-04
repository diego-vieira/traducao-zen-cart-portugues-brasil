<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: password_forgotten.php 3086 2006-03-01 00:40:57Z drbyte $
 */

define('NAVBAR_TITLE_1', 'Login');
define('NAVBAR_TITLE_2', 'Esqueci minha senha');

define('HEADING_TITLE', 'Esqueci minha senha');

define('TEXT_MAIN', 'Informe seu e-mail para que possamos enviar-lhe seu senha.');

define('TEXT_NO_EMAIL_ADDRESS_FOUND', 'Erro: O email não está cadastrado. Verifique e tente novamente.');

define('EMAIL_PASSWORD_REMINDER_SUBJECT', STORE_NAME . ' - Nova Senha');
define('EMAIL_PASSWORD_REMINDER_BODY', 'Uma nova senha foi requisitada por ' . $_SERVER['REMOTE_ADDR']  . '.' . "\n\n" . 'Sua nova senha para acessar a área de clientes da \'' . STORE_NAME . '\' é:' . "\n\n" . '   %s' . "\n\nApós efetuar Login em nossa loja, você poderá alterar sua senha através da área 'Minha Conta'.");

define('SUCCESS_PASSWORD_SENT', 'Uma nova senha foi enviada para seu email.');
?>