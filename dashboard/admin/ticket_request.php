<?php
require_once '../library/config.php';
require_once './library/functions.php';

checkAdmin();

$content = '../tickets/manage/request.php';

$pageTitle = 'Ticket Request';
$script = array();

require_once 'include/template.php';
?>