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
define('SUB_HEADING_TEXT', TEXT_GV_NAMES . ' S�o adquiridos como qualquer outro �tem de nossa loja. Voc� pode
  adquiri-los usando os m�todos de pagamento oferecidos pela loja.
  Uma vez comprado, o valor do ' . TEXT_GV_NAME . ' ser� adicionado � sua
   conta na loja. Se voc� tiver fundos em sua conta de ' . TEXT_GV_NAME . ', voc� ser�
  notificado no carrinho de compras, e tamb�m ter� um
  link para a p�gina onde voc� poder� enviar o ' . TEXT_GV_NAME . ' para algu�m via email.');
  break;
  case '2':
define('SUB_HEADING_TITLE','Como enviar ' . TEXT_GV_NAMES);
define('SUB_HEADING_TEXT','Para enviar um ' . TEXT_GV_NAME . ' voc� precisa ir para nossa p�gina de envio de ' . TEXT_GV_NAME . '. Voc� pode
  encontrar o link para esta p�gina na caixa de carrinho de compras na coluna do lado direito de cada p�gina.
  Quando voc� enviar um ' . TEXT_GV_NAME . ', voc� precisar� especificar o seguinte:
  O nome da pessoa para quem voc� est� eviando o ' . TEXT_GV_NAME . '.
  O Email da pessoa para a qual voc� quer enviar o ' . TEXT_GV_NAME . '.
  O montante total que voc� deseja enviar. (ATEN��O: voc� n�o precisa enviar toda a quantia ' . TEXT_GV_NAME . ' que voc� possui.)
  Uma pequena mensagem ser� enviada no email.
  Tenha certeza que voc� digitou todas as informa��es corretamente, embora
  tenha a oportunidade de mud�-las antes
  que seja enviado o email.');
  break;
  case '3':
  define('SUB_HEADING_TITLE','Comprando com ' . TEXT_GV_NAMES);
  define('SUB_HEADING_TEXT','Se voc� tiver fundos em sua conta de ' . TEXT_GV_NAME . ', voc� poder� utiliz�-los para
  comprar outros �tens em nossa loja. No momento da finaliza��o da compra, uma caixa extra aparecer�.
   Digite a quantia a ser utilizada do ' . TEXT_GV_NAME . '.
  Aten��o. Voc� precisar� selecionar uma outra forma de pagamento se
  n�o tiver fundos suficientes em sua conta do ' . TEXT_GV_NAME . ' para cobrir o valor excedente de sua compra.
  Se voc� tiver mais fundos em sua conta do ' . TEXT_GV_NAME . ' que o total da sua
  compra, o valor restante ficar� em sua conta de ' . TEXT_GV_NAME . ' para ser usado em compras futuras.');
  break;
  case '4':
  define('SUB_HEADING_TITLE','Ativando o ' . TEXT_GV_NAMES);
  define('SUB_HEADING_TEXT','Se voc� recebeu um ' . TEXT_GV_NAME . ' por email, ele conter� detalhes de quem lhe enviou
  o ' . TEXT_GV_NAME . ', bem como uma breve mensagem do remetente. O email
  tamb�m conter� o ' . TEXT_GV_REDEEM . ' do ' . TEXT_GV_NAME . '. � aconselh�vel imprimir
  este email para referencias futuras. Voc� pode ativar seu ' . TEXT_GV_NAME . ' de
  2 maneiras.<br /><br />
  1. Clicar no link contido no email.
  Isto ir� lev�-lo para a p�gina de Ativa��o do ' . TEXT_GV_NAME . '. Ser� necess�rio criar uma conta (se voc� ainda n�o possui uma)
  , antes que o ' . TEXT_GV_NAME . ' seja validado e colocado na sua conta de
   ' . TEXT_GV_NAME . ' e pronto para que voc� o utilize como quiser.<br /><br />
  2. Durante o processo de finaliza��o da compra, na mesma p�gina em que voc� seleciona a forma de pagamento
haver� uma caixa para que voc� digite o ' . TEXT_GV_REDEEM . '. Digite o ' . TEXT_GV_REDEEM . ' l�, e
clique no bot�o de ativa��o. O c�digo ser� verificado e o total
ser� adicionado a sua conta de ' . TEXT_GV_NAME . '. Voc� pode tamb�m usar o valor para comprar algum �tem da nossa loja');
  break;
  case '5':
  define('SUB_HEADING_TITLE','Quando ocorrem problemas.');
  define('SUB_HEADING_TEXT','Para qualquer assunto relacionado ao sistema de ' . TEXT_GV_NAME . ', por favor, entre em contato com o gerente da loja
  pelo email <a href="mailto:'. STORE_OWNER_EMAIL_ADDRESS . '">'. STORE_OWNER_EMAIL_ADDRESS . '</a> e forne�a o maior n�mero de informa��es
  poss�vel no email. ');
  break;
  default:
  define('SUB_HEADING_TITLE','');
  define('SUB_HEADING_TEXT','Por favor, escolha uma das quest�es acima.');

  }

  define('TEXT_GV_REDEEM_INFO', 'Entre com seu  ' . TEXT_GV_REDEEM . ' do ' . TEXT_GV_NAME . ': ');
  define('TEXT_GV_REDEEM_ID', '' . TEXT_GV_REDEEM .':' );
?>