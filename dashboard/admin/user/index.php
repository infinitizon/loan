<?php
require_once '../../library/config.php';
require_once '../library/functions.php';

$_SESSION['login_return_url'] = $_SERVER['REQUEST_URI'];
checkAdmin();

$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';

switch ($view) {
	
	case 'email' :
		$content 	= 'ModifyEmail.php';		
		$pageTitle 	= 'Edit Email';
	break;
	
		case 'loanstatus' :
		$content 	= 'loan-change.php';		
		$pageTitle 	= 'Change Loan Status';
	break;
	
	
		case 'loandue' :
		$content 	= 'due-change.php';		
		$pageTitle 	= 'Change loan due date';
	break;
	
		case 'Modified' :
		$content 	= 'banmodified.php';		
		$pageTitle 	= 'Ban User';
	break;

	case 'password' :
		$content 	= 'changePass.php';		
		$pageTitle 	= 'Modify User Password';
	break;
	
	
	case 'pin' :
		$content 	= 'changePin.php';		
		$pageTitle 	= 'Modify User Pin';
	break;
	
	case 'phone' :
		$content 	= 'Modifyphone.php';		
		$pageTitle 	= 'Edit phone';
	break;


	default :
		$content 	= 'list.php';		
		$pageTitle 	= 'View Users';
	break;
}

$script    = array('user.js');

require_once '../include/template.php';
?>
