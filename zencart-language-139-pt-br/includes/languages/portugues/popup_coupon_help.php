<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2009 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: popup_coupon_help.php 14141 2009-08-10 19:34:47Z wilt $
 */

define('HEADING_COUPON_HELP', 'Ajuda do Cupom de Desconto');
define('TEXT_CLOSE_WINDOW', 'Fechar Janela [x]');
define('TEXT_COUPON_HELP_HEADER', 'Parabéns! Você ativou um cupom de desconto.');
define('TEXT_COUPON_HELP_NAME', '<br /><br />Código do cupom : %s');
define('TEXT_COUPON_HELP_FIXED', '<br /><br />Com este cupom você terá %s de desconto em seu pedido');
define('TEXT_COUPON_HELP_MINORDER', '<br /><br />Você precisa de um pedido mínimo de %s para usar esse cupom');
define('TEXT_COUPON_HELP_FREESHIP', '<br /><br />Com este cupom você terá frete grátis para seus pedidos');
define('TEXT_COUPON_HELP_DESC', '<br /><br />Descrição do cupom: %s');
define('TEXT_COUPON_HELP_DATE', '<br /><br />Este cupom é válido entre %s e %s');
define('TEXT_COUPON_HELP_RESTRICT', '<br /><br />Restrições de Produto ou Categoria');
define('TEXT_COUPON_HELP_CATEGORIES', 'Categoria');
define('TEXT_COUPON_HELP_PRODUCTS', 'Produto');
define('TEXT_ALLOW', 'Permitido');
define('TEXT_DENY', 'Não permitido');

define('TEXT_ALLOWED', ' (Permitido)');
define('TEXT_DENIED', ' (Não permitido)');

define('TEXT_NO_CAT_RESTRICTIONS', '<p>This coupon is valid for all categories.</p>');
define('TEXT_NO_PROD_RESTRICTIONS', '<p>This coupon is valid for all products.</p>');

// gift certificates cannot be purchased with Discount Coupons
define('TEXT_COUPON_GV_RESTRICTION','Cupons de desconto não podem ser utilizados para compra de ' . TEXT_GV_NAMES . '.');

define('TEXT_COUPON_GV_RESTRICTION_ZONES', 'Há restrições para endereço de cobrança.');
?>