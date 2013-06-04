<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2009 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * $Id: discount_coupon.php 14712 2009-10-28 22:05:08Z ajeh $
 */

define('NAVBAR_TITLE', 'Cupom de Desconto');
define('HEADING_TITLE', 'Cupom de Desconto');

define('TEXT_INFORMATION', '');
define('TEXT_COUPON_FAILED', '<span class="alert important">%s</span> Este n�o parece ser um c�digo de ativa��o v�lido. Por favor, tente novamente.');

define('HEADING_COUPON_HELP', 'Ajuda do Cupom de Desconto');
define('TEXT_CLOSE_WINDOW', 'Fechar Janela [x]');
define('TEXT_COUPON_HELP_HEADER', '<p class="bold">O c�digo de ativa��o do Cupom de Desconto que voc� digitou � para ');
define('TEXT_COUPON_HELP_NAME', '\'%s\'. </p>');
define('TEXT_COUPON_HELP_FIXED', '');
define('TEXT_COUPON_HELP_MINORDER', '');
define('TEXT_COUPON_HELP_FREESHIP', '');
define('TEXT_COUPON_HELP_DESC', '<p><span class="bold">Desconto oferecido:</span> %s</p><p class="smallText">Algumas limita��es podem ser aplicadas. Por favor veja abaixo mais detalhes.</p>');
define('TEXT_COUPON_HELP_DATE', '<p>O cupom � v�lido entre %s e %s</p>');
define('TEXT_COUPON_HELP_RESTRICT', '<p class="biggerText bold">Restri��es do Cupom de Desconto</p>');
define('TEXT_COUPON_HELP_CATEGORIES', '<p class="bold">Restri�oes de Categoria:</p>');
define('TEXT_COUPON_HELP_PRODUCTS', '<p class="bold">Restri��es de Produto:</p>');
define('TEXT_ALLOW', 'V�lido');
define('TEXT_DENY', 'Inv�lido');
define('TEXT_NO_CAT_RESTRICTIONS', '<p><br>Este cupom � v�lido para todas as categorias.</p>');
define('TEXT_NO_PROD_RESTRICTIONS', '<p>Este cupom � v�lido para todos os produtos.</p>');
define('TEXT_CAT_ALLOWED', ' (V�lido para esta categoria)');
define('TEXT_CAT_DENIED', ' (N�o � v�lido para esta categoria)');
define('TEXT_PROD_ALLOWED', ' (V�lido para este produto)');
define('TEXT_PROD_DENIED', ' (N�o � v�lido para este produto)');
// gift certificates cannot be purchased with Discount Coupons
define('TEXT_COUPON_GV_RESTRICTION','<p class="smallText">O Cupom de Desconto n�o pode ser aplicado para esta compra ' . TEXT_GV_NAMES . '. Limitado a 1 cupom por pedido.</p>');

define('TEXT_DISCOUNT_COUPON_ID_INFO', 'Veja o Cupom de Desconto ... ');
define('TEXT_DISCOUNT_COUPON_ID', 'Seu c�digo: ');

define('TEXT_COUPON_GV_RESTRICTION_ZONES', 'Restri��es para o endere�o de cobran�a.');
?>