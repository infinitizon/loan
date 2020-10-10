<?php

include './AdminTicketClass.php';

  $initDBObj = new AdminTicketClass();
    $conn = $initDBObj->conn;

if (isset($_POST['ticket_id']) && isset($_POST['user_id']) && isset($_SESSION['hlbank_admin_user'])) {
   
    $ticket_id = $_POST['ticket_id'];
    $user_id = $_POST['user_id'];

    if ($conn->query("UPDATE `support_ticket` SET `is_open` = '1' WHERE user_id = '$user_id' AND id = '$ticket_id'")) {
        echo "success";
    }
} else {
 
    echo "inedx.php";
}
