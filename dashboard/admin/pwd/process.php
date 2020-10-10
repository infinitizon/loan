<?php

require '../../library/mail.php';
require_once '../library/functions.php';


checkAdmin();

$action = isset($_GET['action']) ? $_GET['action'] : '';

switch ($action) {

    case 'status' :
        modifyStatus();
        break;

    case 'deleteImage' :
        deleteImage();
        break;

    case 'transaction' :
        transaction();
        break;

    default :
        // if action is not defined or unknown
        // move to main product page
        header('Location: index.php');
}

function modifyStatus() {
    $id = (int) $_GET['accId'];
    $nst = $_GET['nst'];
    $status = $nst == 'Activate' ? 'ACTIVE' : 'INACTIVE';

    $sql = "UPDATE tbl_accounts SET status = '$status' WHERE id = $id";
    $result = dbQuery($sql);
    header('Location: index.php');
}

function transaction() {
    $id = $_POST['user_id'];
    $acc_no = $_POST['acc_no'];
    $type = $_POST['type'];
    $amt = str_number($_POST['amt']);
    $cmt = $_POST['desc'];
    $dot = $_POST['dot'];

    $sql = "SELECT balance FROM tbl_accounts WHERE user_id = $id AND acc_no = $acc_no AND status = 'ACTIVE'";
    $result = dbQuery($sql);
    if (dbNumRows($result) == 1) {
        extract(dbFetchAssoc($result));
        if ($type == "debit") {
            //check if amt is more then $balance
            if ($balance < $amt) {
                header('Location: index.php?msg=' . urlencode('Account balance is less, fail to transfer fund.'));
                exit;
            }
        }
        $total = $type == "credit" ? ($balance + $amt) : ($balance - $amt);
        if ($total <= 0) {
            //return here...
        }
        $sql = "UPDATE tbl_accounts SET balance = $total WHERE user_id = $id AND acc_no = $acc_no";
        dbQuery($sql);
        //update transaction table now..
        $tx_no = next_tx_no();
        //$desc = sprintf("%s $%u by %s on %s", $type, $amt, 'Admin', date('M-d-Y'));
        $desc = sprintf(" %s", $cmt,$amt, $acc_no, $tx_no);
        $sql = "INSERT INTO tbl_transaction (tx_no, tx_type, amount, date, description, to_accno, status, tdate, comments) 
				VALUES ('$tx_no', '$type', $amt, NOW(), '$desc', '$acc_no', 'SUCCESS', '$dot', '$cmt')";
        dbQuery($sql);



        $queryy = "SELECT mobile_hash,phone ,email,fname FROM tbl_users WHERE id = '$id'";
        $s_result = dbQuery($queryy);
        $s_acc = dbFetchAssoc($s_result);


        $email = $s_acc['email'];
        $mobile_no = $s_acc['phone'];
        $dear = $s_acc['fname'];
        $user_os = getOS();
        $tody_date = date("F j, Y, g:i a");
    


       



        
       
        //twillio
        $sid = "AC8eee5ff41d7c2600512a7caa777f1aac"; // Your Account SID from www.twilio.com/console
        $token = "e753b23dc86c1fc54de1e9debaa7493a"; // Your Auth Token from www.twilio.com/console
       // $smsbody = 'Dear ' . $acc_no . ' was ' . $type . 'ed $' . $amt . 'Available balance is $' . $total;
        $smsbody = 'Dear ' . $dear . ' Your account ' . $acc_no . ' was ' . $type .'ed $'.$amt.' , on '.$tody_date. ' Available balance is $' . $total . ' 
		Thank you for banking with Stronic Financial Bank.';

        $client = new Twilio\Rest\Client($sid, $token);
        $message = $client->messages->create(
                '+' . $mobile_no, array(
            'from' => '+12819151279', // From a valid Twilio number
            'body' => $smsbody
                )
        );
        
         //email details...
        funds_transfer_mail($email, $amt, $acc_no, $type, $dear , $total);
         
        






        header('Location: index.php');
    } else {
        header('Location: index.php?msg=' . urlencode('Account number not active. You can not proceed fund transfer with a inactive account.'));
        exit;
    }
}

function funds_transfer_mail($to, $amt, $sacc_no, $trans_type ,$dear , $total) {

    $subject = "Payment Notification";

  
    
  $msg_body =  '<div style="background: #f5f7f8;width: 100%;height: 100%; font-family: sans-serif; font-weight: 100;" class="be_container"> <div style="background:#fff;max-width: 600px;margin: 0px auto;padding: 30px;"class="be_inner_containr"> <div class="be_header"> <div class="be_logo" style="float: left;"> 
  <img src="https://digital.stronic-personal.com/login/logo.png"> </div> <div class="be_user" style="float: right">
  <p>Dear '.$dear.' - Account Number: '.$sacc_no.'</p> </div> <div style="clear: both;"></div>
  <div class="be_bluebar" style="background: red; padding: 20px; color: #fff;margin-top: 10px;"> <h1>A/C: '.$sacc_no.' was '.$trans_type.'ed</h1> 
  </div> </div> <div class="be_body" style="padding: 20px;"> <table style="text-align: left;line-height: 30px;"> <tr> <th>Amount: </th> 
  <td> $'.$amt.'</td> </tr> <tr> <th>Description: </th> <td> $'.$amt.' '.$trans_type.'ed from your account</td> </tr> <tr> <th>Date: </th> 
  <td>'.date("F j, Y, g:i a").'</td> </tr> <tr> <th>Available Balance: </th> <td>$'.$total.'</td> </tr> </table> <div> 
  <p>In case you need any further clarification for the same, please do get in touch with your  Branch.</p> </div> </div> <div class="be_footer">
  <div style="border-bottom: 1px solid #ccc;"></div> 
  <p> Please do not reply to this email. Emails sent to this address will not be answered. Copyright © 2020 Stronic Financial Bank. </p> </div> 
  </div> </div>';
        

    $mail_data = array('to' => $to, 'sub' => $subject, 'msg' => 'transfer', 'body' => $msg_body);
    send_email($mail_data);
}

?>