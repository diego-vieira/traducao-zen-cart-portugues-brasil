<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @copyright Originally Programmed By: Christopher Bradley (www.wizardsandwars.com) for OsCommerce
 * @copyright Modified by Jim Keebaugh for OsCommerce
 * @copyright Adapted for Zen Cart
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: unsubscribe.php 3159 2006-03-11 01:35:04Z drbyte $
 */

define('NAVBAR_TITLE', 'Deixar de receber Newsletter');
define('HEADING_TITLE', 'Deixar de receber nossa Newsletter');

define('UNSUBSCRIBE_TEXT_INFORMATION', '<br />N�s estamos tristes com sua sa�da de nossa Newsletter. Caso queira ler nossa Pol�tica de Privacidade clique <a href="' . zen_href_link(FILENAME_PRIVACY,'','NONSSL') . '"><u>aqui</u></a>.<br /><br />Em nossas Newsletters notificamos sobre novos produtos, redu��es de pre�os e not�cias sobre o site.<br /><br /> Se voc� n�o deseja receber nossa Newsletter, clique no bot�o abaixo.');
define('UNSUBSCRIBE_TEXT_NO_ADDRESS_GIVEN', '<br />N�s estamos tristes com sua sa�da de nossa Newsletter. Caso queira ler nossa Pol�tica de Privacidade clique <a href="' . zen_href_link(FILENAME_PRIVACY,'','NONSSL') . '"><u>aqui</u></a>.<br /><br />Em nossas Newsletters notificamos sobre novos produtos, redu��es de pre�os e not�cias sobre o site.<br /><br /> Se voc� n�o deseja receber nossa Newsletter, clique no bot�o abaixo. Em Minha Conta, na p�gina das prefer�ncias, voc� pode editar suas inscri��es.  Voc� deve efetuar o login primeiramente.');
define('UNSUBSCRIBE_DONE_TEXT_INFORMATION', '<br />Seu email foi removido com sucesso de nossa Newsletter. <br /><br />');
define('UNSUBSCRIBE_ERROR_INFORMATION', '<br />N�o encontramos seu e-mail em nossa base de dados. <br /><br />');
?>