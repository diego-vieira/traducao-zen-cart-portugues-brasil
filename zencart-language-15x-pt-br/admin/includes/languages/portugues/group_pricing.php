<?php
//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                    |
// +----------------------------------------------------------------------+
// | Copyright (c) 2004 The zen-cart developers              |
// |                                   |
// | http://www.zen-cart.com/index.php                  |
// |                                   |
// | Portions Copyright (c) 2003 osCommerce                 |
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the GPL license,    |
// | that is bundled with this package in the file LICENSE, and is    |
// | available through the world-wide-web at the following url:      |
// | http://www.zen-cart.com/license/2_0.txt.               |
// | If you did not receive a copy of the zen-cart license and are unable |
// | to obtain it through the world-wide-web, please send a note to    |
// | license@zen-cart.com so we can mail you a copy immediately.     |
// +----------------------------------------------------------------------+
// $Id: group_pricing.php 2770 2006-01-02 07:52:42Z drbyte $
//

define('HEADING_TITLE', 'Grupo de Pre&ccedil;os');

define('TABLE_HEADING_GROUP_ID', 'ID');
define('TABLE_HEADING_GROUP_NAME', 'Nome do Grupo');
define('TABLE_HEADING_GROUP_AMOUNT', '% de Desconto');
define('TABLE_HEADING_ACTION', 'A&ccedil;&atilde;o');

define('TEXT_HEADING_NEW_PRICING_GROUP', 'Novo Grupo de Pre&ccedil;o');
define('TEXT_HEADING_EDIT_PRICING_GROUP', 'Editar Grupo de Pre&ccedil;o');
define('TEXT_HEADING_DELETE_PRICING_GROUP', 'Excluir Grupo de Pre&ccedil;o');

define('TEXT_NEW_INTRO', 'Por favor, preencha a informa&ccedil;&atilde;o para o novo grupo');
define('TEXT_EDIT_INTRO', 'Por favor, fa&ccedil;a os ajustes necess&aacute;rios');
define('TEXT_DELETE_INTRO', 'Tem certeza que deseja excluir este grupo?');
define('TEXT_DELETE_PRICING_GROUP', 'Excluir Grupo de Pre&ccedil;o');
define('TEXT_DELETE_WARNING_GROUP_MEMBERS','<b>ATEN&Ccedil;&Atilde;O:</b> Existem %s clientes ainda ligados a esta categoria!');

define('TEXT_GROUP_PRICING_NAME', 'Nome do Grupo: ');
define('TEXT_GROUP_PRICING_AMOUNT', 'Porcentagem de Desconto: ');
define('TEXT_DATE_ADDED', 'Adicionado em:');
define('TEXT_LAST_MODIFIED', 'Data de Modifica&ccedil;&atilde;o:');
define('TEXT_CUSTOMERS', 'Clientes no Grupo:');

define('ERROR_GROUP_PRICING_CUSTOMERS_EXIST','ERRO: Ainda existem clientes neste grupo. Por favor, confirme que voc&ecirc; deseja remover todos os clientes do grupo e deletar o grupo.');
define('ERROR_MODULE_NOT_CONFIGURED','NOTA: Voc&ecirc; possui defini&ccedil;&otilde;es de grupo de pre&ccedil;os, mas voc&ecirc; n&atilde;o habilitou o m&oacute;dulo de grupo de pre&ccedil;os.<br />Por favor, acesse Painel de Administra&ccedil;&atilde;o -> M&oacute;dulos -> Total da Venda -> Desconto de Clientes (ot_group_pricing) e instale/configure o m&oacute;dulo.');

?>