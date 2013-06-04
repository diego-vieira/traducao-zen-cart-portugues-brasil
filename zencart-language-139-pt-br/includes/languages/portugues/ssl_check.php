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
// $Id: ssl_check.php 1969 2005-09-13 06:57:21Z drbyte $
//

define('NAVBAR_TITLE', 'Verificação de segurança');
define('HEADING_TITLE', 'Verificação de segurança');

define('TEXT_INFORMATION', 'Detectamos que seu Navegador gerou um ID da sessão SSL diferente do que estava sendo utilizado nas páginas seguras.');
define('TEXT_INFORMATION_2', 'Por razões de segurança, você precisará efetuar Login novamente para comtinuar suas compras.');
define('TEXT_INFORMATION_3','Alguns navegadores como o Konqueror 3.1, não geram automaticamente um ID de sessão SSL requerido por nosso sistema. Se você utiliza este navegador, recomendamos que troque o navegador para continuar as suas compras. Se você não possui outro navegador instalado em seu computador, você pode fazer o download de um navegador compatível como: <a href="http://www.microsoft.com/ie/" target="_blank">Microsoft Internet Explorer</a>, <a href="http://channels.netscape.com/ns/browsers/download_other.jsp" target="_blank">Netscape</a>, ou <a href="http://www.mozilla.org/releases/" target="_blank">Mozilla</a>.');
define('TEXT_INFORMATION_4','Essas medidas são tomadas para sua segurança. Desculpe o inconviniente.');
define('TEXT_INFORMATION_5','Por favor, entre em contato com o gerente da loja para esclarecer qualquer dúvida relacionada a estas medidas de segurança.');

define('BOX_INFORMATION_HEADING', 'Privacidade e Segurança');
define('BOX_INFORMATION', 'Nós validamos automaticamente o ID da sessão SSL gerado por seu navegador em todas as páginas seguras requisitadas neste servidor.<br /><br />Isto assegurta que é você mesmo quem está navegando neste site com sua conta.');
?>
