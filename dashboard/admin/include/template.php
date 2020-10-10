<?php
if (!defined('WEB_ROOT')) {
	exit;
}

$self = WEB_ROOT . 'admin/index.php';
?>
<!DOCTYPE html>
<html lang="en" class="loading">
  

<head>
    <!-- Start of Async Drift Code -->
<!DOCTYPE html><html>

<head><title>Admin</title><meta charset="utf-8">
<meta content="ie=edge" http-equiv="x-ua-compatible">
<meta content="Online banking" name="keywords">
<meta content="Universal Renaissance Bank" name="author">
<meta content="Online Banking, Motgage, Loan , Secure Banking" name="description">
<meta content="width=device-width, initial-scale=1" name="viewport">
<link href="<?php echo WEB_ROOT; ?>admin/favicon.ico" rel="shortcut icon">
<link href="<?php echo WEB_ROOT; ?>admin/apple-touch-icon.png" rel="apple-touch-icon">
<link href="<?php echo WEB_ROOT; ?>admin/fast.fonts.net/cssapi/487b73f1-c2d1-43db-8526-db577e4c822b.css" rel="stylesheet" type="text/css">
<link href="<?php echo WEB_ROOT; ?>admin/bower_components/select2/dist/css/select2.min.css" rel="stylesheet">
<link href="<?php echo WEB_ROOT; ?>admin/bower_components/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
<link href="<?php echo WEB_ROOT; ?>admin/bower_components/dropzone/dist/dropzone.css" rel="stylesheet">
<link href="<?php echo WEB_ROOT; ?>admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
<link href="<?php echo WEB_ROOT; ?>admin/bower_components/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
<link href="<?php echo WEB_ROOT; ?>admin/bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css" rel="stylesheet">
<link href="<?php echo WEB_ROOT; ?>admin/bower_components/slick-carousel/slick/slick.css" rel="stylesheet">
<link href="<?php echo WEB_ROOT; ?>admin/css/maince5a.css?version=4.4.1" rel="stylesheet">
<script language="JavaScript" type="text/javascript" src="<?php echo WEB_ROOT;?>library/common.js"></script>

<?php
$n = count($script);
for ($i = 0; $i < $n; $i++) {
	if ($script[$i] != '') {
		echo '<script language="JavaScript" type="text/javascript" src="' . WEB_ROOT. 'admin/library/' . $script[$i]. '"></script>';
	}
}
?>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

</head>

<body class="menu-position-side menu-side-left full-screen">
<div class="all-wrapper solid-bg-all">

<?php include('menu.php'); ?>

<?php require_once $content; ?>
<?php include('footer.php'); ?>