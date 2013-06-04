<?php
//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                    |
// +----------------------------------------------------------------------+
// | Copyright (c) 2003 The zen-cart developers              |
// |                                   |
// | http://www.zen-cart.com/index.php                  |
// |                                   |
// | Portions Copyright (c) 2003 osCommerce                |
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the GPL license,    |
// | that is bundled with this package in the file LICENSE, and is    |
// | available through the world-wide-web at the following url:      |
// | http://www.zen-cart.com/license/2_0.txt.               |
// | If you did not receive a copy of the zen-cart license and are unable |
// | to obtain it through the world-wide-web, please send a note to    |
// | license@zen-cart.com so we can mail you a copy immediately.     |
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
define('SUB_HEADING_TEXT', TEXT_GV_NAMES . ' S&atilde;o adquiridos como qualquer outro &iacute;tem de nossa loja. Voc&ecirc; pode
 adquiri-los usando os m&eacute;todos de pagamento oferecidos pela loja.
 Uma vez comprado, o valor do ' . TEXT_GV_NAME . ' ser&aacute; adicionado &agrave; sua
  conta na loja. Se voc&ecirc; tiver fundos em sua conta de ' . TEXT_GV_NAME . ', voc&ecirc; ser&aacute;
 notificado no carrinho de compras, e tamb&eacute;m ter&aacute; um
 link para a p&aacute;gina onde voc&ecirc; poder&aacute; enviar o ' . TEXT_GV_NAME . ' para algu&eacute;m via email.');
 break;
 case '2':
define('SUB_HEADING_TITLE','Como enviar ' . TEXT_GV_NAMES);
define('SUB_HEADING_TEXT','Para enviar um ' . TEXT_GV_NAME . ' voc&ecirc; precisa ir para nossa p&aacute;gina de envio de ' . TEXT_GV_NAME . '. Voc&ecirc; pode
 encontrar o link para esta p&aacute;gina na caixa de carrinho de compras na coluna do lado direito de cada p&aacute;gina.
 Quando voc&ecirc; enviar um ' . TEXT_GV_NAME . ', voc&ecirc; precisar&aacute; especificar o seguinte:
 O nome da pessoa para quem voc&ecirc; est&aacute; eviando o ' . TEXT_GV_NAME . '.
 O Email da pessoa para a qual voc&ecirc; quer enviar o ' . TEXT_GV_NAME . '.
 O montante total que voc&ecirc; deseja enviar. (ATEN&Ccedil;&Atilde;O: voc&ecirc; n&atilde;o precisa enviar toda a quantia ' . TEXT_GV_NAME . ' que voc&ecirc; possui.)
 Uma pequena mensagem ser&aacute; enviada no email.
 Tenha certeza que voc&ecirc; digitou todas as informa&ccedil;&otilde;es corretamente, embora
 tenha a oportunidade de mud&aacute;-las antes
 que seja enviado o email.');
 break;
 case '3':
 define('SUB_HEADING_TITLE','Comprando com ' . TEXT_GV_NAMES);
 define('SUB_HEADING_TEXT','Se voc&ecirc; tiver fundos em sua conta de ' . TEXT_GV_NAME . ', voc&ecirc; poder&aacute; utiliz&aacute;-los para
 comprar outros &iacute;tens em nossa loja. No momento da finaliza&ccedil;&atilde;o da compra, uma caixa extra aparecer&aacute;.
  Digite a quantia a ser utilizada do ' . TEXT_GV_NAME . '.
 Aten&ccedil;&atilde;o. Voc&ecirc; precisar&aacute; selecionar uma outra forma de pagamento se
 n&atilde;o tiver fundos suficientes em sua conta do ' . TEXT_GV_NAME . ' para cobrir o valor excedente de sua compra.
 Se voc&ecirc; tiver mais fundos em sua conta do ' . TEXT_GV_NAME . ' que o total da sua
 compra, o valor restante ficar&aacute; em sua conta de ' . TEXT_GV_NAME . ' para ser usado em compras futuras.');
 break;
 case '4':
 define('SUB_HEADING_TITLE','Ativando o ' . TEXT_GV_NAMES);
 define('SUB_HEADING_TEXT','Se voc&ecirc; recebeu um ' . TEXT_GV_NAME . ' por email, ele conter&aacute; detalhes de quem lhe enviou
 o ' . TEXT_GV_NAME . ', bem como uma breve mensagem do remetente. O email
 tamb&eacute;m conter&aacute; o ' . TEXT_GV_REDEEM . ' do ' . TEXT_GV_NAME . '. &Eacute; aconselh&aacute;vel imprimir
 este email para referencias futuras. Voc&ecirc; pode ativar seu ' . TEXT_GV_NAME . ' de
 2 maneiras.<br /><br />
 1. Clicar no link contido no email.
 Isto ir&aacute; lev&aacute;-lo para a p&aacute;gina de Ativa&ccedil;&atilde;o do ' . TEXT_GV_NAME . '. Ser&aacute; necess&aacute;rio criar uma conta (se voc&ecirc; ainda n&atilde;o possui uma)
 , antes que o ' . TEXT_GV_NAME . ' seja validado e colocado na sua conta de
  ' . TEXT_GV_NAME . ' e pronto para que voc&ecirc; o utilize como quiser.<br /><br />
 2. Durante o processo de finaliza&ccedil;&atilde;o da compra, na mesma p&aacute;gina em que voc&ecirc; seleciona a forma de pagamento
haver&aacute; uma caixa para que voc&ecirc; digite o ' . TEXT_GV_REDEEM . '. Digite o ' . TEXT_GV_REDEEM . ' l&aacute;, e
clique no bot&atilde;o de ativa&ccedil;&atilde;o. O c&oacute;digo ser&aacute; verificado e o total
ser&aacute; adicionado a sua conta de ' . TEXT_GV_NAME . '. Voc&ecirc; pode tamb&eacute;m usar o valor para comprar algum &iacute;tem da nossa loja');
 break;
 case '5':
 define('SUB_HEADING_TITLE','Quando ocorrem problemas.');
 define('SUB_HEADING_TEXT','Para qualquer assunto relacionado ao sistema de ' . TEXT_GV_NAME . ', por favor, entre em contato com o gerente da loja
 pelo email <a href="mailto:'. STORE_OWNER_EMAIL_ADDRESS . '">'. STORE_OWNER_EMAIL_ADDRESS . '</a> e forne&ccedil;a o maior n&uacute;mero de informa&ccedil;&otilde;es
 poss&iacute;vel no email. ');
 break;
 default:
 define('SUB_HEADING_TITLE','');
 define('SUB_HEADING_TEXT','Por favor, escolha uma das quest&otilde;es acima.');

 }

 define('TEXT_GV_REDEEM_INFO', 'Entre com seu ' . TEXT_GV_REDEEM . ' do ' . TEXT_GV_NAME . ': ');
 define('TEXT_GV_REDEEM_ID', '' . TEXT_GV_REDEEM .':' );
?>