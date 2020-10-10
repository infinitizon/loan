<?php
require_once '../library/config.php';
require_once './library/functions.php';

checkAdmin();

$content = '../tickets/manage/index.php';

$pageTitle = 'Manage Ticket';
$script = array();

require_once 'include/template.php';
?>