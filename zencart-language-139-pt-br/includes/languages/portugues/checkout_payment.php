<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: checkout_payment.php 4087 2006-08-07 04:46:08Z drbyte $
 */

define('NAVBAR_TITLE_1', 'Finaliza��o da compra - Etapa 1');
define('NAVBAR_TITLE_2', 'Forma de Pagamento - Etapa 2');

define('HEADING_TITLE', 'Etapa 2 de 3 - Informa��o de pagamento');

define('TABLE_HEADING_BILLING_ADDRESS', 'Endere�o de cobran�a');
define('TEXT_SELECTED_BILLING_DESTINATION', 'O endere�o de cobran�a � mostrado ao lado. Voc� pode mud�-lo clicando em <em>Alterar Endere�o.</em>');
define('TITLE_BILLING_ADDRESS', 'Endere�o de cobran�a:');

define('TABLE_HEADING_PAYMENT_METHOD', 'Forma de Pagamento');
define('TEXT_SELECT_PAYMENT_METHOD', 'Por favor, selecione a forma de pagamento desejada.');
define('TITLE_PLEASE_SELECT', 'Por favor selecione');
define('TEXT_ENTER_PAYMENT_INFORMATION', '');
define('TABLE_HEADING_COMMENTS', 'Instru��es especiais ou coment�rios sobre o pedido');

define('TITLE_NO_PAYMENT_OPTIONS_AVAILABLE', 'N�o dispon�vel no momento');
define('TEXT_NO_PAYMENT_OPTIONS_AVAILABLE','<span class="alert">Desculpe, n�s n�o aceitamos pagamento da sua regi�o no momento.</span><br />Por favor contate nos para um pagamento alternativo.');

define('TITLE_CONTINUE_CHECKOUT_PROCEDURE', '<strong>Continuar para a etapa 3</strong>');
define('TEXT_CONTINUE_CHECKOUT_PROCEDURE', '- Confirmar os dados do pedido.');

define('TABLE_HEADING_CONDITIONS', '<span class="termsconditions">Termos e Condi��es</span>');
define('TEXT_CONDITIONS_DESCRIPTION', '<span class="termsdescription">Por favor, aceite os termos e condi��es do site para continuar a compra. Os termos e condi��es podem ser lidos <a href="' . zen_href_link(FILENAME_CONDITIONS, '', 'SSL') . '"><u>AQUI</u></a>.');
define('TEXT_CONDITIONS_CONFIRM', '<span class="termsiagree">Eu li e aceito os termos e condi��es para este pedido.</span>');

define('TEXT_CHECKOUT_AMOUNT_DUE', 'Total: ');
define('TEXT_YOUR_TOTAL','Seu total');
?>