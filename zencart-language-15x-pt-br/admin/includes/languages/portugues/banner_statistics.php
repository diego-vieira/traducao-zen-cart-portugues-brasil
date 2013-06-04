<?php
//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                    |
// +----------------------------------------------------------------------+
// | Copyright (c) 2003 The zen-cart developers              |
// |                                   |
// | http://www.zen-cart.com/index.php                  |
// |                                   |
// | Portions Copyright (c) 2003 osCommerce                |
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the GPL license,    |
// | that is bundled with this package in the file LICENSE, and is    |
// | available through the world-wide-web at the following url:      |
// | http://www.zen-cart.com/license/2_0.txt.               |
// | If you did not receive a copy of the zen-cart license and are unable |
// | to obtain it through the world-wide-web, please send a note to    |
// | license@zen-cart.com so we can mail you a copy immediately.     |
// +----------------------------------------------------------------------+
// $Id: banner_statistics.php 1105 2005-04-04 22:05:35Z birdbrain $
//

define('HEADING_TITLE', 'Estat&iacute;sticas de Banner');

define('TABLE_HEADING_SOURCE', 'Fonte');
define('TABLE_HEADING_VIEWS', 'Visualiza&ccedil;&otilde;es');
define('TABLE_HEADING_CLICKS', 'Cliques');

define('TEXT_BANNERS_DATA', 'D<br />a<br />d<br />o<br />s');
define('TEXT_BANNERS_DAILY_STATISTICS', '%s Estat&iacute;sticas Di&aacute;rios Para %s %s');
define('TEXT_BANNERS_MONTHLY_STATISTICS', '%s Estatisticas Mensais Para %s');
define('TEXT_BANNERS_YEARLY_STATISTICS', '%s Estat&iacute;sticas Anuais');

define('STATISTICS_TYPE_DAILY', 'Di&aacute;ria');
define('STATISTICS_TYPE_MONTHLY', 'Mensal');
define('STATISTICS_TYPE_YEARLY', 'Anual');

define('TITLE_TYPE', 'Tipo:');
define('TITLE_YEAR', 'Ano:');
define('TITLE_MONTH', 'M&ecirc;s:');

define('ERROR_GRAPHS_DIRECTORY_DOES_NOT_EXIST', 'Erro: O diret&oacute;rio de gr&aacute;ficos n&atilde;o existe. Por favor, crie o diret&oacute;rio de gr&aacute;ficos. Exemplo: <strong>' . DIR_WS_ADMIN . 'images/graphs</strong>');
define('ERROR_GRAPHS_DIRECTORY_NOT_WRITEABLE', 'Erro: O diret&oacute;rio de gr&aacute;ficos n&atilde;o &eacute; grav&aacute;vel. Ele est&aacute; localizado em: <strong>' . DIR_WS_ADMIN . 'images/graphs</strong>');
?>