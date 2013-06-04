<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2010 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: create_account.php 15405 2010-02-03 06:29:33Z drbyte $
 */

define('NAVBAR_TITLE', 'Criar uma conta');

define('HEADING_TITLE', 'Informa��es da minha conta');

define('TEXT_ORIGIN_LOGIN', '<strong class="note">OBS:</strong> Se voc� j� � nosso cliente, dirija-se at� a p�gina de <a href="%s">Login</a>.');




// greeting salutation
define('EMAIL_SUBJECT', 'Bem vindo(a) ao ' . STORE_NAME);
define('EMAIL_GREET_MR', 'Sr. %s,' . "\n\n");
define('EMAIL_GREET_MS', 'Sra. %s,' . "\n\n");
define('EMAIL_GREET_NONE', 'Ol� %s' . "\n\n");

// First line of the greeting
define('EMAIL_WELCOME', 'Seja Bem vindo(a) ao <strong>' . STORE_NAME . '</strong>.');
define('EMAIL_SEPARATOR', '--------------------');
define('EMAIL_COUPON_INCENTIVE_HEADER', 'Parab�ns! Para tornar agrad�vel sua pr�xima visita a nossa loja, abaixo mostramos detalhes de um Cupom Desconto exclusivo pra voc�!' . "\n\n");
// your Discount Coupon Description will be inserted before this next define
define('EMAIL_COUPON_REDEEM', 'Para usar o cupom de desconto, entre com o ' . TEXT_GV_REDEEM . ' durante a finaliza��o da compra, o seu c�digo �:  <strong>%s</strong>' . "\n\n");
define('TEXT_COUPON_HELP_DATE', '<p>The coupon is valid between %s and %s</p>');

define('EMAIL_GV_INCENTIVE_HEADER', 'Apenas por hoje, n�s lhe enviamos um ' . TEXT_GV_NAME . ' para %s!' . "\n");
define('EMAIL_GV_REDEEM', 'O ' . TEXT_GV_NAME . ' ' . TEXT_GV_REDEEM . ' �: %s ' . "\n\n" . 'Voc� deve digit�-lo ' . TEXT_GV_REDEEM . ' no momento da finaliza��o da compra, ap�s selecionar seus produtos na loja. ');
define('EMAIL_GV_LINK', ' Ou, voc� pode ativ�-lo atrv�s do link: ' . "\n");
// GV link will automatically be included before this line

define('EMAIL_GV_LINK_OTHER','Uma vez adicionado ' . TEXT_GV_NAME . ' a sua conta, voc� poder� us�-lo ' . TEXT_GV_NAME . ' para voc� mesmo, ou envi�-lo para um amigo!' . "\n\n");

define('EMAIL_TEXT', 'Com a sua conta voc� pode ter acesso a <strong>v�rios servi�os</strong> que n�s oferecemos a voc�. Alguns desses servi�os incluem:' . "\n\n" . '<li><strong>Carrinho Permanente</strong> - Os produtos colocados no carrinho permanecem la at� que sejam removidos ou a compra seja finalizada.' . "\n\n" . '<li><strong>Cat�logo de endere�os</strong> - N�s podemos entregar seus produtos para outro endere�o que n�o seja o seu! Isto � perfeito para enviar presentes de anivers�rio direto ao aniversariante.' . "\n\n" . '<li><strong>Hist�rico de pedidos</strong> - Ver o hist�rico das compras efetuadas em nossa loja.' . "\n\n" . '<li><strong>Coment�rio dos produtos</strong> - Troque opini�es dos produtos com outros clientes da loja.' . "\n\n");
define('EMAIL_CONTACT', 'Se tiver alguma d�vida quanto ao uso dos nossos servi�os online, por favor entre em contato com o gerente da nossa loja atrav�s do email <a href="mailto:' . STORE_OWNER_EMAIL_ADDRESS . '">'. STORE_OWNER_EMAIL_ADDRESS ." </a>\n\n");
define('EMAIL_GV_CLOSURE','Atenciosamente,' . "\n\n" . STORE_OWNER . "\nGerente\n\n". '<a href="' . HTTP_SERVER . DIR_WS_CATALOG . '">'.HTTP_SERVER . DIR_WS_CATALOG ."</a>\n\n");

// email disclaimer - this disclaimer is separate from all other email disclaimers
define('EMAIL_DISCLAIMER_NEW_CUSTOMER', 'Este endere�o de email foi fornecido atrav�s do cadastro em nossa loja virtual. Se voc� n�o se cadastrou, ou recebeu este email por engano, por favor, entre em contato conosco atrav�s do email: %s ');
