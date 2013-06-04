<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2010 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: create_account.php 15405 2010-02-03 06:29:33Z drbyte $
 */

define('NAVBAR_TITLE', 'Criar uma conta');

define('HEADING_TITLE', 'Informações da minha conta');

define('TEXT_ORIGIN_LOGIN', '<strong class="note">OBS:</strong> Se você já é nosso cliente, dirija-se até a página de <a href="%s">Login</a>.');




// greeting salutation
define('EMAIL_SUBJECT', 'Bem vindo(a) ao ' . STORE_NAME);
define('EMAIL_GREET_MR', 'Sr. %s,' . "\n\n");
define('EMAIL_GREET_MS', 'Sra. %s,' . "\n\n");
define('EMAIL_GREET_NONE', 'Olá %s' . "\n\n");

// First line of the greeting
define('EMAIL_WELCOME', 'Seja Bem vindo(a) ao <strong>' . STORE_NAME . '</strong>.');
define('EMAIL_SEPARATOR', '--------------------');
define('EMAIL_COUPON_INCENTIVE_HEADER', 'Parabéns! Para tornar agradável sua próxima visita a nossa loja, abaixo mostramos detalhes de um Cupom Desconto exclusivo pra você!' . "\n\n");
// your Discount Coupon Description will be inserted before this next define
define('EMAIL_COUPON_REDEEM', 'Para usar o cupom de desconto, entre com o ' . TEXT_GV_REDEEM . ' durante a finalização da compra, o seu código é:  <strong>%s</strong>' . "\n\n");
define('TEXT_COUPON_HELP_DATE', '<p>The coupon is valid between %s and %s</p>');

define('EMAIL_GV_INCENTIVE_HEADER', 'Apenas por hoje, nós lhe enviamos um ' . TEXT_GV_NAME . ' para %s!' . "\n");
define('EMAIL_GV_REDEEM', 'O ' . TEXT_GV_NAME . ' ' . TEXT_GV_REDEEM . ' é: %s ' . "\n\n" . 'Você deve digitá-lo ' . TEXT_GV_REDEEM . ' no momento da finalização da compra, após selecionar seus produtos na loja. ');
define('EMAIL_GV_LINK', ' Ou, você pode ativá-lo atrvés do link: ' . "\n");
// GV link will automatically be included before this line

define('EMAIL_GV_LINK_OTHER','Uma vez adicionado ' . TEXT_GV_NAME . ' a sua conta, você poderá usá-lo ' . TEXT_GV_NAME . ' para você mesmo, ou enviá-lo para um amigo!' . "\n\n");

define('EMAIL_TEXT', 'Com a sua conta você pode ter acesso a <strong>vários serviços</strong> que nós oferecemos a você. Alguns desses serviços incluem:' . "\n\n" . '<li><strong>Carrinho Permanente</strong> - Os produtos colocados no carrinho permanecem la até que sejam removidos ou a compra seja finalizada.' . "\n\n" . '<li><strong>Catálogo de endereços</strong> - Nós podemos entregar seus produtos para outro endereço que não seja o seu! Isto é perfeito para enviar presentes de aniversário direto ao aniversariante.' . "\n\n" . '<li><strong>Histórico de pedidos</strong> - Ver o histórico das compras efetuadas em nossa loja.' . "\n\n" . '<li><strong>Comentário dos produtos</strong> - Troque opiniões dos produtos com outros clientes da loja.' . "\n\n");
define('EMAIL_CONTACT', 'Se tiver alguma dúvida quanto ao uso dos nossos serviços online, por favor entre em contato com o gerente da nossa loja através do email <a href="mailto:' . STORE_OWNER_EMAIL_ADDRESS . '">'. STORE_OWNER_EMAIL_ADDRESS ." </a>\n\n");
define('EMAIL_GV_CLOSURE','Atenciosamente,' . "\n\n" . STORE_OWNER . "\nGerente\n\n". '<a href="' . HTTP_SERVER . DIR_WS_CATALOG . '">'.HTTP_SERVER . DIR_WS_CATALOG ."</a>\n\n");

// email disclaimer - this disclaimer is separate from all other email disclaimers
define('EMAIL_DISCLAIMER_NEW_CUSTOMER', 'Este endereço de email foi fornecido através do cadastro em nossa loja virtual. Se você não se cadastrou, ou recebeu este email por engano, por favor, entre em contato conosco através do email: %s ');
