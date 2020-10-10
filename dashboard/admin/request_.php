<?php
require_once '../library/config.php';
require_once './library/functions.php';

checkAdmin();

$content = '../tickets/manage/request_.php';

$pageTitle = 'Request Ticket';
$script = array();

require_once 'include/template.php';
?>