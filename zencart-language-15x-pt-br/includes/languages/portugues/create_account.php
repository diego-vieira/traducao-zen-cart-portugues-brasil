<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2010 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: create_account.php 15405 2010-02-03 06:29:33Z drbyte $
 */

define('NAVBAR_TITLE', 'Criar uma conta');

define('HEADING_TITLE', 'Informa&ccedil;&otilde;es da minha conta');

define('TEXT_ORIGIN_LOGIN', '<strong class="note">OBS:</strong> Se voc&ecirc; j&aacute; &eacute; nosso cliente, dirija-se at&eacute; a p&aacute;gina de <a href="%s">Login</a>.');




// greeting salutation
define('EMAIL_SUBJECT', 'Bem vindo(a) ao ' . STORE_NAME);
define('EMAIL_GREET_MR', 'Sr. %s,' . "\n\n");
define('EMAIL_GREET_MS', 'Sra. %s,' . "\n\n");
define('EMAIL_GREET_NONE', 'Ol&aacute; %s' . "\n\n");

// First line of the greeting
define('EMAIL_WELCOME', 'Seja Bem vindo(a) ao <strong>' . STORE_NAME . '</strong>.');
define('EMAIL_SEPARATOR', '--------------------');
define('EMAIL_COUPON_INCENTIVE_HEADER', 'Parab&eacute;ns! Para tornar agrad&aacute;vel sua pr&oacute;xima visita a nossa loja, abaixo mostramos detalhes de um Cupom Desconto exclusivo pra voc&ecirc;!' . "\n\n");
// your Discount Coupon Description will be inserted before this next define
define('EMAIL_COUPON_REDEEM', 'Para usar o cupom de desconto, entre com o ' . TEXT_GV_REDEEM . ' durante a finaliza&ccedil;&atilde;o da compra, o seu c&oacute;digo &eacute;: <strong>%s</strong>' . "\n\n");
define('TEXT_COUPON_HELP_DATE', '<p>The coupon is valid between %s and %s</p>');

define('EMAIL_GV_INCENTIVE_HEADER', 'Apenas por hoje, n&oacute;s lhe enviamos um ' . TEXT_GV_NAME . ' para %s!' . "\n");
define('EMAIL_GV_REDEEM', 'O ' . TEXT_GV_NAME . ' ' . TEXT_GV_REDEEM . ' &eacute;: %s ' . "\n\n" . 'Voc&ecirc; deve digit&aacute;-lo ' . TEXT_GV_REDEEM . ' no momento da finaliza&ccedil;&atilde;o da compra, ap&oacute;s selecionar seus produtos na loja. ');
define('EMAIL_GV_LINK', ' Ou, voc&ecirc; pode ativ&aacute;-lo atrv&eacute;s do link: ' . "\n");
// GV link will automatically be included before this line

define('EMAIL_GV_LINK_OTHER','Uma vez adicionado ' . TEXT_GV_NAME . ' a sua conta, voc&ecirc; poder&aacute; us&aacute;-lo ' . TEXT_GV_NAME . ' para voc&ecirc; mesmo, ou envi&aacute;-lo para um amigo!' . "\n\n");

define('EMAIL_TEXT', 'Com a sua conta voc&ecirc; pode ter acesso a <strong>v&aacute;rios servi&ccedil;os</strong> que n&oacute;s oferecemos a voc&ecirc;. Alguns desses servi&ccedil;os incluem:' . "\n\n" . '<li><strong>Carrinho Permanente</strong> - Os produtos colocados no carrinho permanecem la at&eacute; que sejam removidos ou a compra seja finalizada.' . "\n\n" . '<li><strong>Cat&aacute;logo de endere&ccedil;os</strong> - N&oacute;s podemos entregar seus produtos para outro endere&ccedil;o que n&atilde;o seja o seu! Isto &eacute; perfeito para enviar presentes de anivers&aacute;rio direto ao aniversariante.' . "\n\n" . '<li><strong>Hist&oacute;rico de pedidos</strong> - Ver o hist&oacute;rico das compras efetuadas em nossa loja.' . "\n\n" . '<li><strong>Coment&aacute;rio dos produtos</strong> - Troque opini&otilde;es dos produtos com outros clientes da loja.' . "\n\n");
define('EMAIL_CONTACT', 'Se tiver alguma d&uacute;vida quanto ao uso dos nossos servi&ccedil;os online, por favor entre em contato com o gerente da nossa loja atrav&eacute;s do email <a href="mailto:' . STORE_OWNER_EMAIL_ADDRESS . '">'. STORE_OWNER_EMAIL_ADDRESS ." </a>\n\n");
define('EMAIL_GV_CLOSURE','Atenciosamente,' . "\n\n" . STORE_OWNER . "\nGerente\n\n". '<a href="' . HTTP_SERVER . DIR_WS_CATALOG . '">'.HTTP_SERVER . DIR_WS_CATALOG ."</a>\n\n");

// email disclaimer - this disclaimer is separate from all other email disclaimers
define('EMAIL_DISCLAIMER_NEW_CUSTOMER', 'Este endere&ccedil;o de email foi fornecido atrav&eacute;s do cadastro em nossa loja virtual. Se voc&ecirc; n&atilde;o se cadastrou, ou recebeu este email por engano, por favor, entre em contato conosco através do email: %s ');
