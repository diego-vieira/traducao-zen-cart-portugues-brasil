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
//  $Id: currencies.php 1105 2005-04-04 22:05:35Z birdbrain $
//

define('HEADING_TITLE', 'Moedas');

define('TABLE_HEADING_CURRENCY_NAME', 'Moeda');
define('TABLE_HEADING_CURRENCY_CODES', 'C�digo');
define('TABLE_HEADING_CURRENCY_VALUE', 'Valor');
define('TABLE_HEADING_ACTION', 'A��o');

define('TEXT_INFO_EDIT_INTRO', 'Por favor, fa�a os ajustes necess�rios');
define('TEXT_INFO_CURRENCY_TITLE', 'Titulo:');
define('TEXT_INFO_CURRENCY_CODE', 'C�digo:');
define('TEXT_INFO_CURRENCY_SYMBOL_LEFT', 'S�mbolo � Esquerda:');
define('TEXT_INFO_CURRENCY_SYMBOL_RIGHT', 'S�mbolo � Direita:');
define('TEXT_INFO_CURRENCY_DECIMAL_POINT', 'Separador Decimal:');
define('TEXT_INFO_CURRENCY_THOUSANDS_POINT', 'Separador Milhar:');
define('TEXT_INFO_CURRENCY_DECIMAL_PLACES', 'D�gitos Decimais:');
define('TEXT_INFO_CURRENCY_LAST_UPDATED', '�ltima Atualiza��o:');
define('TEXT_INFO_CURRENCY_VALUE', 'Valor:');
define('TEXT_INFO_CURRENCY_EXAMPLE', 'Sa�da de Exemplo:');
define('TEXT_INFO_INSERT_INTRO', 'Por favor, digite os dados da nova moeda');
define('TEXT_INFO_DELETE_INTRO', 'Tem certeza que deseja excluir esta moeda?');
define('TEXT_INFO_HEADING_NEW_CURRENCY', 'Nova Moeda');
define('TEXT_INFO_HEADING_EDIT_CURRENCY', 'Editar Moeda');
define('TEXT_INFO_HEADING_DELETE_CURRENCY', 'Excluir Moeda');
define('TEXT_INFO_SET_AS_DEFAULT', TEXT_SET_DEFAULT . ' (requer atualiza��o manual dos valores monet�rios)');
define('TEXT_INFO_CURRENCY_UPDATED', 'A taxa de convers�o para %s (%s) foi atualizado com sucesso via %s.');

define('ERROR_REMOVE_DEFAULT_CURRENCY', 'Erro: A moeda padr�o n�o pode ser removida. Por favor, selecione outra moeda como padr�o e tente novamente.');
define('ERROR_CURRENCY_INVALID', 'Erro: A taxa de convers�o para %s (%s) n�o foi atualizado via %s. Este � um c�digo de moeda v�lido?');
define('WARNING_PRIMARY_SERVER_FAILED', 'Aten��o: O servidor de taxa de convers�o prim�rio (%s) falhou para %s (%s) - tentando servidor de convers�o secund�rio.');
?>