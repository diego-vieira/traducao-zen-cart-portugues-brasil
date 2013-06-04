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

define('HEADING_TITLE', 'Configura��es de Administrador');

define('TABLE_HEADING_ADMINS_NAME', 'Nome do Administrador');
define('TABLE_HEADING_ADMINS_ID', 'ID');
define('TABLE_HEADING_ADMINS_EMAIL', 'E-mail');
define('TABLE_HEADING_ACTION', 'A��o');

define('TEXT_HEADING_NEW_ADMIN', 'Novo');
define('TEXT_HEADING_EDIT_ADMIN', 'Editar');
define('TEXT_HEADING_DELETE_ADMIN', 'Excluir');
define('TEXT_HEADING_RESET_PASSWORD', 'Alterar Senha');

define('TEXT_ADMINS', 'Administradores:');
define('TEXT_ADMINS_EMAIL', 'E-mail:');

define('TEXT_NEW_INTRO', 'Por favor, preencha abaixo com os dados do novo administrador');
define('TEXT_EDIT_INTRO', 'Por favor, fa�a os ajustes necess�rios');

define('TEXT_ADMINS_NAME', 'Nome do Administrador:');
define('TEXT_ADMINS_PASSWORD', 'Senha:');
define('TEXT_ADMINS_CONFIRM_PASSWORD', 'Confirmar Senha:');

define('TEXT_DELETE_INTRO', 'Tem certeza que deseja excluir este administrador?');
define('TEXT_DELETE_IMAGE', 'Excluir Imagem do Administrador?');


define('ENTRY_PASSWORD_NEW_ERROR', 'Sua nova Senha precisa conter pelo menos ' . ENTRY_PASSWORD_MIN_LENGTH . ' caracteres.');
define('ENTRY_PASSWORD_NEW_ERROR_NOT_MATCHING', 'A Confirma��o da Senha precisa ser igual a sua Nova Senha.');

define('TEXT_ADMINS_LEVEL','N�vel do Administrador para este login:');
define('TEXT_ADMIN_LEVEL_INSTRUCTIONS','Configurando o N�vel do Administrador para 1 ir� Permitir que este login sobrescreva a Demonstra��o do Admin Ativo. Somente o n�vel 1 poder� mudar o login do administrador e senha quando a Demonstra��o do Admin estiver ativa.');
define('TEXT_ADMIN_DEMO','A Demonstra��o do Admin possui op��es de mudan�a de uma Administra��o totalmente funcional para uma administra��o semi-funcional, menos destrutiva para quando voc� quiser configurar uma vers�o de demonstra��o. Somente os Logins de Administrador configurado para 1 poder� mudar esta configura��o e eles poder�o sobrescrever o n�vel de permiss�o para um uso completo da administra��o quando a Demonstra��o da Administra��o estiver ativa.<br />Tenha certeza de configurar um login de demonstra��o e o n�vel deste login para 0 antes de ativar esta configura��o');
define('TEXT_DEMO_STATUS','A Demonstra��o da Administra��o est� atualmente:');
define('TEXT_DEMO_OFF','Desligada');
define('TEXT_DEMO_ON','Ligada');
?>