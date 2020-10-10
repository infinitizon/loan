<?php
require_once '../library/config.php';
require_once '../library/functions.php';

$_SESSION['hlbank_return_url'] = $_SERVER['REQUEST_URI'];
checkUser();

$view = (isset($_GET['v']) && $_GET['v'] != '') ? $_GET['v'] : '';

switch ($view) {
	case 'Account' :
		$content 	= 'AccountDetails.php';		
		$pageTitle 	= 'View Account Details';
		break;
		
		case 'Loan-status' :
		$content 	= 'loanstatus.php';		
		$pageTitle 	= 'Loan Status';
		break;
		
		
		case 'Inactive' :
		$content 	= 'inactive.php';		
		$pageTitle 	= 'Transfer Disabled';
		break;
		
		
			case 'Faq' :
		$content 	= 'faqs.php';		
		$pageTitle 	= 'Frequently Asked Questions';
		break;
		
			case 'Transfermsg' :
		$content 	= 'transmessage.php';		
		$pageTitle 	= 'Transfer Message';
		break;
		
		
		case 'Txl' :
		$content 	= 'tx.php';		
		$pageTitle 	= 'Transfer';
		break;
		
		case 'Sof' :
		$content 	= 'sof.php';		
		$pageTitle 	= 'Source of Fund';
		break;
		
		case 'Sfl' :
		$content 	= 'sf.php';		
		$pageTitle 	= 'Transfer';
		break;
		
		
			case 'Imf' :
		$content 	= 'imf.php';		
		$pageTitle 	= 'ImfCode';
		break;
		
			case 'Iml' :
		$content 	= 'im.php';		
		$pageTitle 	= 'Transfer';
		break;
		
			case 'Exchange' :
		$content 	= 'exchange.php';		
		$pageTitle 	= 'Currency Exchange Code';
		break;
		
			case 'Exl' :
		$content 	= 'ex.php';		
		$pageTitle 	= 'Transfer';
		break;
		
			case 'Upgrade' :
		$content 	= 'upgrade.php';		
		$pageTitle 	= 'Account Upgrade';
		break;
		
			case 'Upl' :
		$content 	= 'up.php';		
		$pageTitle 	= 'Transfer';
		break;
		
			case 'sucess' :
		$content 	= 'receipt.php';		
		$pageTitle 	= 'Successful Transfer';
		break;
		
		case 'AtmResquest' :
		$content 	= 'atmrequest.php';		
		$pageTitle 	= 'Atm Request';
		break;
		
		case 'Atms' :
		$content 	= 'atmsettings.php';		
		$pageTitle 	= 'Atm Settings';
		break;
		
		case 'Request' :
		$content 	= 'request.php';		
		$pageTitle 	= 'Cards Request';
		break;
		
		case 'Crv' :
		$content 	= 'received.php';		
		$pageTitle 	= ' Request Received';
		break;
		
		
		case 'LocalTransfer' :
		$content 	= 'localtransfer.php';		
		$pageTitle 	= 'Local Fund Transfer';
		break;
		
		case 'Internal' :
		$content 	= 'internaltransfer.php';		
		$pageTitle 	= 'Internal Fund Transfer';
		break;
		
		case 'CreditCard' :
		$content 	= 'creditcard.php';		
		$pageTitle 	= 'Credit Cards';
		break;
		
		case 'CRequest' :
		$content 	= 'ccrequest.php';		
		$pageTitle 	= 'Credit Card Request';
		break;
		
		case 'Loan-Request' :
		$content 	= 'loan.php';		
		$pageTitle 	= 'Loan Application';
		break;
		
		
		case 'Account' :
		$content 	= 'AccountDetails.php';		
		$pageTitle 	= 'View Account Details';
		break;
	
	case 'Home' :
		$content 	= 'summary.php';		
		$pageTitle 	= 'Account Dashboard';
		break;	

	case 'ChangePwd' :
		$content 	= 'changepwd.php';		
		$pageTitle 	= 'Change Password ';
		break;

	case 'ChangePin' :
		$content 	= 'changepin.php';		
		$pageTitle 	= 'Change account Pin Number';
		break;

	case 'Withdrawal' :
		$content 	= 'FundTransfers.php';		
		$pageTitle 	= 'Fund Transfers';
		break;
	
	case 'Statements' :
		$content 	= 'statement.php';		
		$pageTitle 	= 'Account Statement';
		break;
		
	case 'Token' :
		$content 	= 'OTP.php';		
		$pageTitle 	= 'Transaction Authorization Code';
		break;		

	case 'IntFund' :
		$content 	= 'main.php';
		$pageTitle 	= 'International Transaction';
		break;
		
	default :
		$content 	= 'summary.php';		
		$pageTitle 	= 'Account Dashboard';
		
	

		
}

$script    = array('category.js');

require_once '../include/template.php';
?>