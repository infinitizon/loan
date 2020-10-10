<?php
session_start();
require '../../library/mail.php';
require_once '../library/functions.php';
isUser();
$cid = (int) $_POST['id'];

$sql = "DELETE FROM `tbl_transaction` WHERE to_accno = $acc_no ORDER BY id DESC LIMIT 20";
if(dbQuery($sql)){
    echo "success";
}



