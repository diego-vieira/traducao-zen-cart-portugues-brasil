<?php
//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2003 The zen-cart developers                           |
// |                                                                      |
// | http://www.zen-cart.com/index.php                                    |
// |                                                                      |
// | Portions Copyright (c) 2003 osCommerce                               |
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the GPL license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available through the world-wide-web at the following url:           |
// | http://www.zen-cart.com/license/2_0.txt.                             |
// | If you did not receive a copy of the zen-cart license and are unable |
// | to obtain it through the world-wide-web, please send a note to       |
// | license@zen-cart.com so we can mail you a copy immediately.          |
// +----------------------------------------------------------------------+
// $Id: gv_faq.php 4155 2006-08-16 17:14:52Z ajeh $
//

define('NAVBAR_TITLE', TEXT_GV_NAME . ' FAQ');
define('HEADING_TITLE', TEXT_GV_NAME . ' FAQ');

define('TEXT_INFORMATION', '<a name="Top"></a>
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=1','NONSSL').'">Comprando ' . TEXT_GV_NAMES . '</a><br />
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=2','NONSSL').'">Como enviar ' . TEXT_GV_NAMES . '</a><br />
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=3','NONSSL').'">Comprando com ' . TEXT_GV_NAMES . '</a><br />
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=4','NONSSL').'">Ativando ' . TEXT_GV_NAMES . '</a><br />
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=5','NONSSL').'">Quando ocorrem problemas</a><br />
');
switch ($_GET['faq_item']) {
  case '1':
define('SUB_HEADING_TITLE','Comprando ' . TEXT_GV_NAMES);
define('SUB_HEADING_TEXT', TEXT_GV_NAMES . ' São adquiridos como qualquer outro ítem de nossa loja. Você pode
  adquiri-los usando os métodos de pagamento oferecidos pela loja.
  Uma vez comprado, o valor do ' . TEXT_GV_NAME . ' será adicionado à sua
   conta na loja. Se você tiver fundos em sua conta de ' . TEXT_GV_NAME . ', você será
  notificado no carrinho de compras, e também terá um
  link para a página onde você poderá enviar o ' . TEXT_GV_NAME . ' para alguém via email.');
  break;
  case '2':
define('SUB_HEADING_TITLE','Como enviar ' . TEXT_GV_NAMES);
define('SUB_HEADING_TEXT','Para enviar um ' . TEXT_GV_NAME . ' você precisa ir para nossa página de envio de ' . TEXT_GV_NAME . '. Você pode
  encontrar o link para esta página na caixa de carrinho de compras na coluna do lado direito de cada página.
  Quando você enviar um ' . TEXT_GV_NAME . ', você precisará especificar o seguinte:
  O nome da pessoa para quem você está eviando o ' . TEXT_GV_NAME . '.
  O Email da pessoa para a qual você quer enviar o ' . TEXT_GV_NAME . '.
  O montante total que você deseja enviar. (ATENÇÃO: você não precisa enviar toda a quantia ' . TEXT_GV_NAME . ' que você possui.)
  Uma pequena mensagem será enviada no email.
  Tenha certeza que você digitou todas as informações corretamente, embora
  tenha a oportunidade de mudá-las antes
  que seja enviado o email.');
  break;
  case '3':
  define('SUB_HEADING_TITLE','Comprando com ' . TEXT_GV_NAMES);
  define('SUB_HEADING_TEXT','Se você tiver fundos em sua conta de ' . TEXT_GV_NAME . ', você poderá utilizá-los para
  comprar outros ítens em nossa loja. No momento da finalização da compra, uma caixa extra aparecerá.
   Digite a quantia a ser utilizada do ' . TEXT_GV_NAME . '.
  Atenção. Você precisará selecionar uma outra forma de pagamento se
  não tiver fundos suficientes em sua conta do ' . TEXT_GV_NAME . ' para cobrir o valor excedente de sua compra.
  Se você tiver mais fundos em sua conta do ' . TEXT_GV_NAME . ' que o total da sua
  compra, o valor restante ficará em sua conta de ' . TEXT_GV_NAME . ' para ser usado em compras futuras.');
  break;
  case '4':
  define('SUB_HEADING_TITLE','Ativando o ' . TEXT_GV_NAMES);
  define('SUB_HEADING_TEXT','Se você recebeu um ' . TEXT_GV_NAME . ' por email, ele conterá detalhes de quem lhe enviou
  o ' . TEXT_GV_NAME . ', bem como uma breve mensagem do remetente. O email
  também conterá o ' . TEXT_GV_REDEEM . ' do ' . TEXT_GV_NAME . '. É aconselhável imprimir
  este email para referencias futuras. Você pode ativar seu ' . TEXT_GV_NAME . ' de
  2 maneiras.<br /><br />
  1. Clicar no link contido no email.
  Isto irá levá-lo para a página de Ativação do ' . TEXT_GV_NAME . '. Será necessário criar uma conta (se você ainda não possui uma)
  , antes que o ' . TEXT_GV_NAME . ' seja validado e colocado na sua conta de
   ' . TEXT_GV_NAME . ' e pronto para que você o utilize como quiser.<br /><br />
  2. Durante o processo de finalização da compra, na mesma página em que você seleciona a forma de pagamento
haverá uma caixa para que você digite o ' . TEXT_GV_REDEEM . '. Digite o ' . TEXT_GV_REDEEM . ' lá, e
clique no botão de ativação. O código será verificado e o total
será adicionado a sua conta de ' . TEXT_GV_NAME . '. Você pode também usar o valor para comprar algum ítem da nossa loja');
  break;
  case '5':
  define('SUB_HEADING_TITLE','Quando ocorrem problemas.');
  define('SUB_HEADING_TEXT','Para qualquer assunto relacionado ao sistema de ' . TEXT_GV_NAME . ', por favor, entre em contato com o gerente da loja
  pelo email <a href="mailto:'. STORE_OWNER_EMAIL_ADDRESS . '">'. STORE_OWNER_EMAIL_ADDRESS . '</a> e forneça o maior número de informações
  possível no email. ');
  break;
  default:
  define('SUB_HEADING_TITLE','');
  define('SUB_HEADING_TEXT','Por favor, escolha uma das questões acima.');

  }

  define('TEXT_GV_REDEEM_INFO', 'Entre com seu  ' . TEXT_GV_REDEEM . ' do ' . TEXT_GV_NAME . ': ');
  define('TEXT_GV_REDEEM_ID', '' . TEXT_GV_REDEEM .':' );
?>