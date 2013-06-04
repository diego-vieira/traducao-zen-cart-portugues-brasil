<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2009 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: checkout_success.php 14198 2009-08-18 22:32:11Z drbyte $
 */

define('NAVBAR_TITLE_1', 'Finalizar compra');
define('NAVBAR_TITLE_2', 'Sucesso - Obrigado');

define('HEADING_TITLE', 'Obrigado! Agradecemos sua preferência!');

define('TEXT_SUCCESS', '');
define('TEXT_NOTIFY_PRODUCTS', 'Notifique-me sobre atualizações destes produtos');
define('TEXT_SEE_ORDERS', 'Você pode ver seu histórico de pedidos através da página <a href="' . zen_href_link(FILENAME_ACCOUNT, '', 'SSL') . '">Minha Conta</a> e clique em "Ver pedidos".');
define('TEXT_CONTACT_STORE_OWNER', 'Qualquer dúvida, sugestão ou reclamação, por favor, entrar em contato com <a href="' . zen_href_link(FILENAME_CONTACT_US) . '">Atendimento ao Cliente</a>.');
define('TEXT_THANKS_FOR_SHOPPING', 'Obrigado por comprar online conosco!');

define('TABLE_HEADING_COMMENTS', '');

define('FOOTER_DOWNLOAD', 'Você também pode fazer download mais tarde em \'%s\'');

define('TEXT_YOUR_ORDER_NUMBER', '<strong>O número do seu pedido é:</strong> ');

define('TEXT_CHECKOUT_LOGOFF_GUEST', 'ATENÇÃO: Para completar seu pedido, uma conta temporária foi criada. Você pode fechá-la clicando em SAIR. Clicando em SAIR você também garante que a próxima pessoa a usar este computador não verá sua compras. Se você quiser continuar comnprando fique a vontade! Você pode SAIR a qualquer hora utilizando o botão SAIR no topo da página a qualquer momento.');
define('TEXT_CHECKOUT_LOGOFF_CUSTOMER', 'Obrigado por sua compra. Clique em SAIR para garantir que a próxima pessoa a usar este computador não verá suas compras.');
