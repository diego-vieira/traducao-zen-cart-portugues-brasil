<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2009 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: login.php 14280 2009-08-29 01:33:18Z drbyte $
 */

define('NAVBAR_TITLE', 'Entrar');
define('HEADING_TITLE', 'Por favor, fa&ccedil;a login ou cadastre-se abaixo');

define('HEADING_NEW_CUSTOMER', 'Efetuar Cadastro');
define('HEADING_NEW_CUSTOMER_SPLIT', 'Novos clientes');

define('TEXT_NEW_CUSTOMER_INTRODUCTION', 'Para realizar seus pedidos no <strong>' . STORE_NAME . '</strong>, voc&ecirc; precisa ter um cadastro conosco. &Eacute; r&aacute;pido e <strong>gratuito</strong>!');
define('TEXT_NEW_CUSTOMER_INTRODUCTION_SPLIT', 'Possui uma conta Paypal? Quer pagar com mais rapidez que um Cart&atilde;o de Cr&eacute;dito? Use o bot&atilde;o da PayPal abaixo para utilizar a op&ccedil;&atilde;o de Finaliza&ccedil;&atilde;o de Compra Expressa.');
define('TEXT_NEW_CUSTOMER_POST_INTRODUCTION_DIVIDER', '<span class="larger">Ou</span><br />');
define('TEXT_NEW_CUSTOMER_POST_INTRODUCTION_SPLIT', 'Crie um cadastro de cliente na <strong>' . STORE_NAME . '</strong> o qual lhe permitir&aacute; realizar as compras mais r&aacute;pido, acompanhar o status de seus pedidos atuais, vizualizar os pedidos anteriores e desfrutar de todos os benef&iacute;cios de ser um(a) cliente cadastrado(a)');

define('HEADING_RETURNING_CUSTOMER', 'Cliente Existente');
define('HEADING_RETURNING_CUSTOMER_SPLIT', 'Cliente cadastrado');

define('TEXT_RETURNING_CUSTOMER_SPLIT', 'Para continuar, favor fazer Login em sua conta na <strong>' . STORE_NAME . '</strong>.');

define('TEXT_PASSWORD_FORGOTTEN', 'Esqueceu sua senha?');

define('TEXT_LOGIN_ERROR', 'Erro: Email ou senha inv&aacute;lidos.');
define('TEXT_VISITORS_CART', '<strong>Aten&ccedil;&atilde;o:</strong> O conte&uacute;do do seu &quot;Carrinho de Visitante&quot; ser&aacute; transferido para seu &quot;Carrinho de Cliente&quot; assim que fizer o login. <a href="javascript:session_win();">[Mais informa&ccedil;&otilde;es]</a>');

define('TABLE_HEADING_PRIVACY_CONDITIONS', '<span class="privacyconditions">Privacy Statement</span>');
define('TEXT_PRIVACY_CONDITIONS_DESCRIPTION', '<span class="privacydescription">Por favor, confirme que voc&ecirc; est&aacute; ciente e concorda com a nossa pol&iacute;tica de privacidade. A nossa pol&iacute;tica de privacidade pode ser lida</span> <a href="' . zen_href_link(FILENAME_PRIVACY, '', 'SSL') . '"><span class="pseudolink">aqui</span></a>.');
define('TEXT_PRIVACY_CONDITIONS_CONFIRM', '<span class="privacyagree">Eu li e aceito os temos da Pol&iacute;tica de Privacidade.</span>');

define('ERROR_SECURITY_ERROR', 'There was a security error when trying to login.');

define('TEXT_LOGIN_BANNED', 'Erro: Accesso Negado.');
