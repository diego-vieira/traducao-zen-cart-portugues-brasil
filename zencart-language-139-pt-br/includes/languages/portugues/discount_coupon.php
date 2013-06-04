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
define('TEXT_COUPON_FAILED', '<span class="alert important">%s</span> Este não parece ser um código de ativação válido. Por favor, tente novamente.');

define('HEADING_COUPON_HELP', 'Ajuda do Cupom de Desconto');
define('TEXT_CLOSE_WINDOW', 'Fechar Janela [x]');
define('TEXT_COUPON_HELP_HEADER', '<p class="bold">O código de ativação do Cupom de Desconto que você digitou é para ');
define('TEXT_COUPON_HELP_NAME', '\'%s\'. </p>');
define('TEXT_COUPON_HELP_FIXED', '');
define('TEXT_COUPON_HELP_MINORDER', '');
define('TEXT_COUPON_HELP_FREESHIP', '');
define('TEXT_COUPON_HELP_DESC', '<p><span class="bold">Desconto oferecido:</span> %s</p><p class="smallText">Algumas limitações podem ser aplicadas. Por favor veja abaixo mais detalhes.</p>');
define('TEXT_COUPON_HELP_DATE', '<p>O cupom é válido entre %s e %s</p>');
define('TEXT_COUPON_HELP_RESTRICT', '<p class="biggerText bold">Restrições do Cupom de Desconto</p>');
define('TEXT_COUPON_HELP_CATEGORIES', '<p class="bold">Restriçoes de Categoria:</p>');
define('TEXT_COUPON_HELP_PRODUCTS', '<p class="bold">Restrições de Produto:</p>');
define('TEXT_ALLOW', 'Válido');
define('TEXT_DENY', 'Inválido');
define('TEXT_NO_CAT_RESTRICTIONS', '<p><br>Este cupom é válido para todas as categorias.</p>');
define('TEXT_NO_PROD_RESTRICTIONS', '<p>Este cupom é válido para todos os produtos.</p>');
define('TEXT_CAT_ALLOWED', ' (Válido para esta categoria)');
define('TEXT_CAT_DENIED', ' (Não é válido para esta categoria)');
define('TEXT_PROD_ALLOWED', ' (Válido para este produto)');
define('TEXT_PROD_DENIED', ' (Não é válido para este produto)');
// gift certificates cannot be purchased with Discount Coupons
define('TEXT_COUPON_GV_RESTRICTION','<p class="smallText">O Cupom de Desconto não pode ser aplicado para esta compra ' . TEXT_GV_NAMES . '. Limitado a 1 cupom por pedido.</p>');

define('TEXT_DISCOUNT_COUPON_ID_INFO', 'Veja o Cupom de Desconto ... ');
define('TEXT_DISCOUNT_COUPON_ID', 'Seu código: ');

define('TEXT_COUPON_GV_RESTRICTION_ZONES', 'Restrições para o endereço de cobrança.');
?>