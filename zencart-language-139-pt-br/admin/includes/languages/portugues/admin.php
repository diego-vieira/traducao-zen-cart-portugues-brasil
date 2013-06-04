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
//  $Id: admin.php 1105 2005-04-04 22:05:35Z birdbrain $
//

define('HEADING_TITLE', 'Configuraчѕes de Administrador');

define('TABLE_HEADING_ADMINS_NAME', 'Nome do Administrador');
define('TABLE_HEADING_ADMINS_ID', 'ID');
define('TABLE_HEADING_ADMINS_EMAIL', 'E-mail');
define('TABLE_HEADING_ACTION', 'Aчуo');

define('TEXT_HEADING_NEW_ADMIN', 'Novo');
define('TEXT_HEADING_EDIT_ADMIN', 'Editar');
define('TEXT_HEADING_DELETE_ADMIN', 'Excluir');
define('TEXT_HEADING_RESET_PASSWORD', 'Alterar Senha');

define('TEXT_ADMINS', 'Administradores:');
define('TEXT_ADMINS_EMAIL', 'E-mail:');

define('TEXT_NEW_INTRO', 'Por favor, preencha abaixo com os dados do novo administrador');
define('TEXT_EDIT_INTRO', 'Por favor, faчa os ajustes necessсrios');

define('TEXT_ADMINS_NAME', 'Nome do Administrador:');
define('TEXT_ADMINS_PASSWORD', 'Senha:');
define('TEXT_ADMINS_CONFIRM_PASSWORD', 'Confirmar Senha:');

define('TEXT_DELETE_INTRO', 'Tem certeza que deseja excluir este administrador?');
define('TEXT_DELETE_IMAGE', 'Excluir Imagem do Administrador?');


define('ENTRY_PASSWORD_NEW_ERROR', 'Sua nova Senha precisa conter pelo menos ' . ENTRY_PASSWORD_MIN_LENGTH . ' caracteres.');
define('ENTRY_PASSWORD_NEW_ERROR_NOT_MATCHING', 'A Confirmaчуo da Senha precisa ser igual a sua Nova Senha.');

define('TEXT_ADMINS_LEVEL','Nэvel do Administrador para este login:');
define('TEXT_ADMIN_LEVEL_INSTRUCTIONS','Configurando o Nэvel do Administrador para 1 irс Permitir que este login sobrescreva a Demonstraчуo do Admin Ativo. Somente o nэvel 1 poderс mudar o login do administrador e senha quando a Demonstraчуo do Admin estiver ativa.');
define('TEXT_ADMIN_DEMO','A Demonstraчуo do Admin possui opчѕes de mudanчa de uma Administraчуo totalmente funcional para uma administraчуo semi-funcional, menos destrutiva para quando vocъ quiser configurar uma versуo de demonstraчуo. Somente os Logins de Administrador configurado para 1 poderс mudar esta configuraчуo e eles poderуo sobrescrever o nэvel de permissуo para um uso completo da administraчуo quando a Demonstraчуo da Administraчуo estiver ativa.<br />Tenha certeza de configurar um login de demonstraчуo e o nэvel deste login para 0 antes de ativar esta configuraчуo');
define('TEXT_DEMO_STATUS','A Demonstraчуo da Administraчуo estс atualmente:');
define('TEXT_DEMO_OFF','Desligada');
define('TEXT_DEMO_ON','Ligada');
?>