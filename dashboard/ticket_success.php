<?php
require_once './library/config.php';
require_once './library/functions.php';



checkUser();
$content = 'tickets/ticket_success.php';
$pageTitle = 'Create Ticket';
$script = array();

require_once 'include/template.php';
?>