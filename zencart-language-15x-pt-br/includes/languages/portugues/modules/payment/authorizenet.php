<?php
/**
 * Traduzido por Custom Scriptz - http://customscriptz.com
 * Revisado por Diego Vieira (diego@customscriptz.com) & Loreta Labarca (store@digiscrappersbrasil.com.br)
 */

/**
 * @package languageDefines
 */

 define('MODULE_PAYMENT_AUTHORIZENET_TEXT_ADMIN_TITLE', 'Authorize.net SIM');
 define('MODULE_PAYMENT_AUTHORIZENET_TEXT_CATALOG_TITLE', 'Cart&atilde;o de cr&eacute;dito'); // Payment option title as displayed to the customer


if (MODULE_PAYMENT_AUTHORIZENET_STATUS == 'True') {
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_DESCRIPTION', '<a target="_blank" href="https://account.authorize.net/">Authorize.net Merchant Login</a>' . (MODULE_PAYMENT_AUTHORIZENET_TESTMODE != 'Production' ? '<br /><br />Testing Info:<br /><b>Automatic Approval Credit Card Numbers:</b><br />Visa#: 4007000000027<br />MC#: 5424000000000015<br />Discover#: 6011000000000012<br />AMEX#: 370000000000002<br /><br /><b>Note:</b> These credit card numbers will return a decline in live mode, and an approval in test mode. Any future date can be used for the expiration date and any 3 or 4 (AMEX) digit number can be used for the CVV Code.<br /><br /><b>Automatic Decline Credit Card Number:</b><br /><br />Card #: 4222222222222<br /><br />This card number can be used to receive decline notices for testing purposes.<br /><br />' : ''));
 } else { 
 define('MODULE_PAYMENT_AUTHORIZENET_TEXT_DESCRIPTION', '<a target="_blank" href="http://reseller.authorize.net/application.asp?id=131345">Click Here to Sign Up for an Account</a><br /><br /><a target="_blank" href="https://account.authorize.net/">Click to Login to the Authorize.net Merchant Area</a><br /><br /><strong>Requirements:</strong><br /><hr />*<strong>Authorize.net Account</strong> (see link above to signup)<br />*<strong>Authorize.net username and transaction key</strong> available from your Merchant Area');
 }


 define('MODULE_PAYMENT_AUTHORIZENET_TEXT_DESCRIPTION', 'Informa&ccedil;&atilde;o de teste do Cart&atilde;o de cr&eacute;dito:<br /><br />CC#: 4111111111111111<br />Expira&ccedil;&atilde;o: qualquer');
 define('MODULE_PAYMENT_AUTHORIZENET_TEXT_TYPE', 'Tipo:');
 define('MODULE_PAYMENT_AUTHORIZENET_TEXT_CREDIT_CARD_OWNER', 'Propriet&aacute;rio do Cart&atilde;o de Cr&eacute;dito:');
 define('MODULE_PAYMENT_AUTHORIZENET_TEXT_CREDIT_CARD_NUMBER', 'N&uacute;mero do Cart&atilde;o de Cr&eacute;dito:');
 define('MODULE_PAYMENT_AUTHORIZENET_TEXT_CREDIT_CARD_EXPIRES', 'Data de validade do Cart&atilde;o de Cr&eacute;dito:');
 define('MODULE_PAYMENT_AUTHORIZENET_TEXT_CVV', 'CVV Number:');
 define('MODULE_PAYMENT_AUTHORIZENET_TEXT_POPUP_CVV_LINK', 'What\'s this?');
 define('MODULE_PAYMENT_AUTHORIZENET_TEXT_JS_CC_OWNER', '* O nome do propriet&aacute;rio do cart&atilde;o de cr&eacute;dito deve conter no m&iacute;nimo ' . CC_OWNER_MIN_LENGTH . ' caracteres.\n');
 define('MODULE_PAYMENT_AUTHORIZENET_TEXT_JS_CC_NUMBER', '* O n&uacute;mero do cart&atilde;o de cr&eacute;dito deve ter no m&iacute;nimo ' . CC_NUMBER_MIN_LENGTH . ' caracteres.\n');
 define('MODULE_PAYMENT_AUTHORIZENET_TEXT_JS_CC_CVV', '* The 3 or 4 digit CVV number must be entered from the back of the credit card.\n');
 define('MODULE_PAYMENT_AUTHORIZENET_TEXT_ERROR_MESSAGE', 'Ocorreu um erro no processo do seu cart&atilde;o de cr&eacute;dito. Por favor tente denovo.');
 define('MODULE_PAYMENT_AUTHORIZENET_TEXT_DECLINED_MESSAGE', 'Seu cart&atilde;o de cr&eacute;dito n&atilde;o foi aceito. Por favor tente outro cart&atilde;o ou entre em contato com sua operadora de Cart&atilde;o de Cr&eacute;dito ou seu Banco para mais informa&ccedil;&otilde;es.');
 define('MODULE_PAYMENT_AUTHORIZENET_TEXT_ERROR', 'Erro no Cart&atilde;o de Cr&eacute;dito!');
?>