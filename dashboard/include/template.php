<?php
if (!defined('WEB_ROOT')) {
	exit;
}

$self = WEB_ROOT . 'admin/index.php';
?>
<!DOCTYPE html>
<html lang="en" class="default-style layout-fixed layout-navbar-fixed">
<head>
<title><?php echo $pageTitle; ?></title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta name="description" content="Empire is one of the unique admin template built on top of Bootstrap 4 framework. It is easy to customize, flexible code styles, well tested, modern & responsive are the topmost key factors of Empire Dashboard Template" />
<meta name="keywords" content="bootstrap admin template, dashboard template, backend panel, bootstrap 4, backend template, dashboard template, saas admin, CRM dashboard, eCommerce dashboard">
<meta name="author" content="" />
<link rel="icon" type="image/x-icon" href="assets/img/favicon.ico">

<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

<link rel="stylesheet" href="<?php echo WEB_ROOT; ?>assets/libs/bootstrap-select/bootstrap-select.css">
<link rel="stylesheet" href="<?php echo WEB_ROOT; ?>assets/libs/bootstrap-multiselect/bootstrap-multiselect.css">
<link rel="stylesheet" href="<?php echo WEB_ROOT; ?>assets/libs/select2/select2.css">

<link rel="stylesheet" href="<?php echo WEB_ROOT; ?>assets/css/pages/messages.css">
<link rel="stylesheet" href="<?php echo WEB_ROOT; ?>assets/fonts/fontawesome.css">
<link rel="stylesheet" href="<?php echo WEB_ROOT; ?>assets/fonts/ionicons.css">
<link rel="stylesheet" href="<?php echo WEB_ROOT; ?>assets/fonts/linearicons.css">
<link rel="stylesheet" href="<?php echo WEB_ROOT; ?>assets/fonts/open-iconic.css">
<link rel="stylesheet" href="<?php echo WEB_ROOT; ?>assets/fonts/pe-icon-7-stroke.css">
<link rel="stylesheet" href="<?php echo WEB_ROOT; ?>assets/fonts/feather.css">

<link rel="stylesheet" href="<?php echo WEB_ROOT; ?>assets/css/bootstrap-material.css">
<link rel="stylesheet" href="<?php echo WEB_ROOT; ?>assets/css/shreerang-material.css">
<link rel="stylesheet" href="<?php echo WEB_ROOT; ?>assets/css/uikit.css">

<link rel="stylesheet" href="<?php echo WEB_ROOT; ?>assets/libs/perfect-scrollbar/perfect-scrollbar.css">
<link rel="stylesheet" href="<?php echo WEB_ROOT; ?>assets/libs/flot/flot.css">
<link rel="stylesheet" href="<?php echo WEB_ROOT; ?>assets/libs/ladda/ladda.css">
</head>
<body>

<div class="page-loader">
<div class="bg-primary"></div>
</div>


<div class="layout-wrapper layout-2">
<div class="layout-inner">

<div id="layout-sidenav" class="layout-sidenav sidenav sidenav-vertical bg-white logo-dark">

<div class="app-brand demo">
<span class="app-brand-logo demo">
<img src="<?php echo WEB_ROOT; ?>assets/img/logo.png" alt="Brand Logo" class="img-fluid">
</span>

<a href="javascript:" class="layout-sidenav-toggle sidenav-link text-large ml-auto">
<i class="ion ion-md-menu align-middle"></i>
</a>
</div>

<?php include('menu.php'); ?>

<?php require_once $content; ?>
<?php include('footer.php'); ?>