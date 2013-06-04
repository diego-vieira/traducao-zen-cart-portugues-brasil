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
// $Id: password_forgotten.php 4820 2006-10-23 07:19:46Z drbyte $
//

define('HEADING_TITLE', 'Reenviar Senha');

define('TEXT_ADMIN_EMAIL', 'Endereço de E-mail de Administrador: ');

define('ERROR_WRONG_EMAIL', '<p>Você digitou um endereço de e-mail incorreto.</p>');
define('ERROR_WRONG_EMAIL_NULL', '<p>Vá embora.</p>');
define('SUCCESS_PASSWORD_SENT', '<p>Uma nova senha foi enviado para seu endereço de e-mail.</p>');

define('TEXT_EMAIL_SUBJECT', 'Sua Solicitação de Alteração de Senha');
define('TEXT_EMAIL_FROM', EMAIL_FROM);
define('TEXT_EMAIL_MESSAGE', 'Uma nova senha foi solicitada de ' . $_SERVER['REMOTE_ADDR']  . '.' . "\n\n" . 'Sua nova senha para \'' . STORE_NAME . '\' é:' . "\n\n" . '   %s' . "\n\nDepois que você fizer login usando esta nova senha, você pode mudá-la indo até o meu Ferramentas -> Configurações de Administrador.");

?>