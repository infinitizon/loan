<?php
require_once '../../library/config.php';
require_once '../library/functions.php';

checkAdmin();

$action = isset($_GET['action']) ? $_GET['action'] : '';

switch ($action) {
	
	case 'add' :
		addUser();
		break;
		
	case 'status' :
		statusUser();
		break;
		
		case 'Banned' :
		modifyBanned();
		break;
		
	
	case 'email' :
		modifyEmail();
		break;

case 'loanstatus' :
		modifyLoanstatus();
		break;
		
		case 'loandue' :
		modifyLoandue();
		break;
		
case 'phone' :
		modifyphone();
		break;


case 'pin' :
		modifyPin();
		break;


case 'Tstatus' :
		modifyTransaction();
		break;
		
			case 'Tdate' :
		modifyTransactiondate();
		break;
		
	case 'delete' :
		deleteUser();
		break;    


       case 'password' :
		modifyPassword();
		break;    
		
		
	default :
	    // if action is not defined or unknown
		// move to main user page
		header('Location: index.php');
}


function addUser()
{
    $userName = $_POST['txtUserName'];
	$password = $_POST['txtPassword'];
	$admin = $_POST['txtSuperAdmin'];
	/*
	// the password must be at least 6 characters long and is 
	// a mix of alphabet & numbers
	if(strlen($password) < 6 || !preg_match('/[a-z]/i', $password) ||
	!preg_match('/[0-9]/', $password)) {
	  //bad password
	}
	*/	
	// check if the username is taken
	$sql = "SELECT name
	        FROM tbl_users
			WHERE name = '$userName'";
	$result = dbQuery($sql);
	
	if (dbNumRows($result) == 1) {
		header('Location: index.php?view=add&error=' . urlencode('Username already taken. Choose another one'));	
	} else {			
		$sql   = "INSERT INTO tbl_users (name, pwd, bdate, is_admin)
		          VALUES ('$userName', '$password', NOW(), '$admin')";
	
		dbQuery($sql);
		header('Location: index.php');	
	}
}

/*
	Modify a user
*/
function statusUser()
{
	$userId = (int)$_GET['userId'];	
	$nst 	= $_GET['nst'];
	
	$status = $nst == 'Activate' ? 'TRUE' : 'FALSE';
	$sql   = "UPDATE tbl_users 
	          SET is_active = '$status'
			  WHERE id = $userId";

	dbQuery($sql);
	header('Location: index.php');	

}



/*
	Modify a user
*/
function modifyphone()
{
	$userId 	= (int)$_POST['hidUserId'];	
	$new_phone 	= $_POST['new_phone'];
	
	$sql   = "UPDATE tbl_users 
	          SET phone = '$new_phone'
			  WHERE id = $userId";

	dbQuery($sql);
		header('Location: index.php?view=Allert');

}


/*
	Modify Notification
*/
function modifyLoanstatus()
{
	$userId 	= (int)$_POST['hidUserId'];	
	$new_loanstat	= $_POST['new_loanstat'];
	
	$sql   = "UPDATE tbl_users
	          SET loanstat = '$new_loanstat'
			  WHERE id = $userId";

	dbQuery($sql);
	header('Location: index.php?view=Allert');

}


/*
	Modify Incoming Balance
*/
function modifyLoandue()
{
	$userId 	= (int)$_POST['hidUserId'];	
	$new_due	= $_POST['new_due'];
	
	$sql   = "UPDATE tbl_users
	          SET due = '$new_due'
			  WHERE id = $userId";

	dbQuery($sql);
	header('Location: index.php?view=Allert');

}



/*
	Modify Transaction
*/
function modifyTransaction()
{
	$userId 	= (int)$_POST['hidUserId'];	
	$new_status 	= $_POST['new_status'];
	
	$sql   = "UPDATE tbl_transaction
	          SET status = '$new_status'
			  WHERE id = $userId";

	dbQuery($sql);
	header('Location: index.php?view=Allert');

}


/*
	Modify Password
*/
function modifyPassword()
{
	$userId 	= (int)$_POST['hidUserId'];	
	$new_pwd 	= $_POST['new_pwd'];
	
	$sql   = "UPDATE tbl_users
	          SET pwd = PASSWORD('$new_pwd')
			  WHERE id = $userId";

	dbQuery($sql);
	header('Location: index.php?view=Allert');

}


/*
	Modify Pin
*/
function modifyPin()
{
	$userId 	= (int)$_POST['hidUserId'];	
	$new_pin 	= (int) $_POST['new_pin'];
	
	$sql   = "UPDATE tbl_accounts
	          SET pin = '$new_pin'
			  WHERE id = $userId";

	dbQuery($sql);
	header('Location: index.php?view=Allert');

}



/*
	Modify Transaction
*/
function modifyTransactiondate()
{
	$userId 	= (int)$_POST['hidUserId'];	
	$new_tdate 	= $_POST['new_tdate'];
	
	$sql   = "UPDATE tbl_transaction
	          SET tdate = '$new_tdate'
			  WHERE id = $userId";

	dbQuery($sql);
	header('Location: index.php?view=Allert');

}



/*
	Modify a user
*/
function modifyEmail()
{
	$userId 	= (int)$_POST['hidUserId'];	
	$new_email 	= $_POST['new_email'];
	
	$sql   = "UPDATE tbl_users 
	          SET email = '$new_email'
			  WHERE id = $userId";

	dbQuery($sql);
		header('Location: index.php');

}



/*
	Modify a user
*/
function modifyBanned()
{
	$userId 	= (int)$_POST['hidUserId'];	
	$new_is_banned 	= $_POST['new_is_banned'];
	
	$sql   = "UPDATE tbl_users 
	          SET is_banned = '$new_is_banned'
			  WHERE id = $userId";

	dbQuery($sql);
	header('Location: index.php?v=Modified');
}









/*
	Remove a user
*/
function deleteUser()
{
	if (isset($_GET['userId']) && (int)$_GET['userId'] > 0) {
		$userId = (int)$_GET['userId'];
	} else {
		header('Location: index.php');
	}
		
	$sql = "DELETE FROM tbl_users WHERE id = $userId";
	dbQuery($sql);
	
	$sql = "DELETE FROM tbl_accounts WHERE user_id = $userId";
	dbQuery($sql);
	
	$sql = "DELETE FROM tbl_address WHERE user_id = $userId";
	dbQuery($sql);
	
	header('Location: index.php');
}



/*
	Remove a Transaction
*/
function deleteTransaction()
{
	if (isset($_GET['userId']) && (int)$_GET['userId'] > 0) {
		$userId = (int)$_GET['userId'];
	} else {
		header('Location: index.php');
	}
		
	$sql = "DELETE FROM tbl_users WHERE id = $userId";
	dbQuery($sql);
	
	$sql = "DELETE FROM tbl_accounts WHERE user_id = $userId";
	dbQuery($sql);
	
	$sql = "DELETE FROM tbl_transaction WHERE user_id = $userId";
	dbQuery($sql);
	
	header('Location: index.php');
}


?>

