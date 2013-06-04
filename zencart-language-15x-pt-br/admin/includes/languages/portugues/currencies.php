<?php
/**
 * @package admin
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: currencies.php 18931 2011-06-13 15:22:34Z drbyte $
 */

define('HEADING_TITLE', 'Moedas');

define('TABLE_HEADING_CURRENCY_NAME', 'Moeda');
define('TABLE_HEADING_CURRENCY_CODES', 'C&oacute;digo');
define('TABLE_HEADING_CURRENCY_VALUE', 'Valor');
define('TABLE_HEADING_ACTION', 'A&ccedil;&atilde;o');

define('TEXT_INFO_EDIT_INTRO', 'Por favor, fa&ccedil;a os ajustes necess&aacute;rios');
define('TEXT_INFO_CURRENCY_TITLE', 'Titulo:');
define('TEXT_INFO_CURRENCY_CODE', 'C&oacute;digo:');
define('TEXT_INFO_CURRENCY_SYMBOL_LEFT', 'S&iacute;mbolo &agrave; Esquerda:');
define('TEXT_INFO_CURRENCY_SYMBOL_RIGHT', 'S&iacute;mbolo &agrave; Direita:');
define('TEXT_INFO_CURRENCY_DECIMAL_POINT', 'Separador Decimal:');
define('TEXT_INFO_CURRENCY_THOUSANDS_POINT', 'Separador Milhar:');
define('TEXT_INFO_CURRENCY_DECIMAL_PLACES', 'D&iacute;gitos Decimais:');
define('TEXT_INFO_CURRENCY_LAST_UPDATED', '&Uacute;ltima Atualiza&ccedil;&atilde;o:');
define('TEXT_INFO_CURRENCY_VALUE', 'Valor:');
define('TEXT_INFO_CURRENCY_EXAMPLE', 'Sa&iacute;da de Exemplo:');
define('TEXT_INFO_INSERT_INTRO', 'Por favor, digite os dados da nova moeda');
define('TEXT_INFO_DELETE_INTRO', 'Tem certeza que deseja excluir esta moeda?');
define('TEXT_INFO_HEADING_NEW_CURRENCY', 'Nova Moeda');
define('TEXT_INFO_HEADING_EDIT_CURRENCY', 'Editar Moeda');
define('TEXT_INFO_HEADING_DELETE_CURRENCY', 'Excluir Moeda');
define('TEXT_INFO_SET_AS_DEFAULT', TEXT_SET_DEFAULT . ' (requer atualiza&ccedil;&atilde;o manual dos valores monet&aacute;rios)');
define('TEXT_INFO_CURRENCY_UPDATED', 'A taxa de convers&atilde;o para %s (%s) foi atualizado com sucesso via %s.');

define('ERROR_REMOVE_DEFAULT_CURRENCY', 'Erro: A moeda padr&atilde;o n&atilde;o pode ser removida. Por favor, selecione outra moeda como padr&atilde;o e tente novamente.');
define('ERROR_CURRENCY_INVALID', 'Erro: A taxa de convers&atilde;o para %s (%s) n&atilde;o foi atualizado via %s. Este &eacute; um c&oacute;digo de moeda v&aacute;lido?');
define('WARNING_PRIMARY_SERVER_FAILED', 'Aten&ccedil;&atilde;o: O servidor de taxa de convers&atilde;o prim&aacute;rio (%s) falhou para %s (%s) - tentando servidor de convers&atilde;o secund&aacute;rio.');
define('ERROR_INVALID_CURRENCY_ENTRY', 'ERROR: The information you submitted was incomplete, and has not been saved. You must specify a currency code and a name.');