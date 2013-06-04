<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: index.php 6550 2007-07-05 03:54:54Z drbyte $
 */

define('TEXT_MAIN','Esta é a página padrão do portugês quando não tem nenhum Template selecionados. Ela está localizada em: <strong>/includes/languages/english/index.php</strong>');

// Showcase vs Store
if (STORE_STATUS == '0') {
  define('TEXT_GREETING_GUEST', 'Bem vindo(a) <span class="greetUser">Visitante!</span> Você gostaria de fazer <a href="%s">Login</a>?');
} else {
  define('TEXT_GREETING_GUEST', 'Bem vindo(a), aprecie nossos produtos.');
}

define('TEXT_GREETING_PERSONAL', 'Olá <span class="greetUser">%s</span>! Você gostaria de ver nossas <a href="%s">NOVIDADES</a>?');

define('TEXT_INFORMATION', 'Defina sua página INDEX e copie aqui.');

//moved to english
//define('TABLE_HEADING_FEATURED_PRODUCTS','Featured Products');

//define('TABLE_HEADING_NEW_PRODUCTS', 'New Products For %s');
//define('TABLE_HEADING_UPCOMING_PRODUCTS', 'Upcoming Products');
//define('TABLE_HEADING_DATE_EXPECTED', 'Date Expected');

if ( ($category_depth == 'products') || (zen_check_url_get_terms()) ) {
  // This section deals with product-listing page contents
  define('HEADING_TITLE', 'Produtos disponíveis');
  define('TABLE_HEADING_IMAGE', 'Imagem do produto');
  define('TABLE_HEADING_MODEL', 'Modelo');
  define('TABLE_HEADING_PRODUCTS', 'Nome do produto');
  define('TABLE_HEADING_MANUFACTURER', 'Fabricante');
  define('TABLE_HEADING_QUANTITY', 'Quantidade');
  define('TABLE_HEADING_PRICE', 'Preço');
  define('TABLE_HEADING_WEIGHT', 'Peso');
  define('TABLE_HEADING_BUY_NOW', 'Comprar agora');
  define('TEXT_NO_PRODUCTS', 'Não existe nenhum produto nesta categoria.');
  define('TEXT_NO_PRODUCTS2', 'Não existe nenhum produto deste fabricante.');
  define('TEXT_NUMBER_OF_PRODUCTS', 'Número de produtos: ');
  define('TEXT_SHOW', 'Ordenar por:');
  define('TEXT_BUY', 'Comprar 1 \'');
  define('TEXT_NOW', '\' agora');
  define('TEXT_ALL_CATEGORIES', 'Todas as categorias');
  define('TEXT_ALL_MANUFACTURERS', 'Todos os designers');
} elseif ($category_depth == 'top') {
  // This section deals with the "home" page at the top level with no options/products selected
  /*Replace this text with the headline you would like for your shop. For example: 'Welcome to My SHOP!'*/
  define('HEADING_TITLE', '');
} elseif ($category_depth == 'nested') {
  // This section deals with displaying a subcategory
  /*Replace this line with the headline you would like for your shop. For example: 'Welcome to My SHOP!'*/
  define('HEADING_TITLE', '');
}
?>