<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2007 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: product_info.php 6371 2007-05-25 19:55:59Z ajeh $
 */

define('TEXT_PRODUCT_NOT_FOUND', 'Desculpe. O produto não foi encontrado.');
define('TEXT_CURRENT_REVIEWS', 'Comentários atuais:');
define('TEXT_MORE_INFORMATION', 'Para maiores informações, por favor, visite a <a href="%s" target="_blank">página do produto</a>.');
define('TEXT_DATE_ADDED', 'Este produto foi adicionado ao nosso catálogo em %s.');
define('TEXT_DATE_AVAILABLE', 'Este produto estará em estoque a partir de %s.');
define('TEXT_ALSO_PURCHASED_PRODUCTS', 'Clientes que compraram este produto também compraram...');
define('TEXT_PRODUCT_OPTIONS', 'Por favor, escolha: ');
define('TEXT_PRODUCT_MANUFACTURER', 'Fabricado por: ');
define('TEXT_PRODUCT_WEIGHT', 'Peso: ');
define('TEXT_PRODUCT_QUANTITY', ' Unidades no estoque');
define('TEXT_PRODUCT_MODEL', 'Modelo: ');



// previous next product
define('PREV_NEXT_PRODUCT', 'Produto ');
define('PREV_NEXT_FROM', ' de ');
define('IMAGE_BUTTON_PREVIOUS','Ítem anterior');
define('IMAGE_BUTTON_NEXT','Próximo ítem');
define('IMAGE_BUTTON_RETURN_TO_PRODUCT_LIST','Voltar para a lista de produtos');

// missing products
//define('TABLE_HEADING_NEW_PRODUCTS', 'New Products For %s');
//define('TABLE_HEADING_UPCOMING_PRODUCTS', 'Upcoming Products');
//define('TABLE_HEADING_DATE_EXPECTED', 'Date Expected');

define('TEXT_ATTRIBUTES_PRICE_WAS',' [era: ');
define('TEXT_ATTRIBUTE_IS_FREE',' agora é: Grátis]');
define('TEXT_ONETIME_CHARGE_SYMBOL', ' *');
define('TEXT_ONETIME_CHARGE_DESCRIPTION', ' Um momento. Aplicando as alterações');
define('TEXT_ATTRIBUTES_QTY_PRICE_HELP_LINK','Quantidade de desconto disponível');
define('ATTRIBUTES_QTY_PRICE_SYMBOL', zen_image(DIR_WS_TEMPLATE_ICONS . 'icon_status_green.gif', TEXT_ATTRIBUTES_QTY_PRICE_HELP_LINK, 10, 10) . '&nbsp;');

define('ATTRIBUTES_PRICE_DELIMITER_PREFIX', ' ( ');
define('ATTRIBUTES_PRICE_DELIMITER_SUFFIX', ' )');
define('ATTRIBUTES_WEIGHT_DELIMITER_PREFIX', ' (');
define('ATTRIBUTES_WEIGHT_DELIMITER_SUFFIX', ') ');

?>