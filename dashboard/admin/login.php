<?php
require_once '../library/config.php';
require_once './library/functions.php';

$errorMessage = '&nbsp;';

if (isset($_POST['txtUserName'])) {
    $result = doLogin();

    if ($result != '') {
        $errorMessage = $result;
    }
}
?>
<!DOCTYPE html>
<html>
<head><title>Admin Dashboard </title>

<meta charset="utf-8">
<meta content="ie=edge" http-equiv="x-ua-compatible">
<meta content="template language" name="keywords">
<meta content="Tamerlan Soziev" name="author">
<meta content="Admin dashboard html template" name="description">
<meta content="width=device-width, initial-scale=1" name="viewport">
<link href="favicon.png" rel="shortcut icon">
<link href="apple-touch-icon.png" rel="apple-touch-icon">
<link href="fast.fonts.net/cssapi/487b73f1-c2d1-43db-8526-db577e4c822b.css" rel="stylesheet" type="text/css">
<link href="bower_components/select2/dist/css/select2.min.css" rel="stylesheet">
<link href="bower_components/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
<link href="bower_components/dropzone/dist/dropzone.css" rel="stylesheet">
<link href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
<link href="bower_components/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
<link href="bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css" rel="stylesheet">
<link href="bower_components/slick-carousel/slick/slick.css" rel="stylesheet">
<link href="css/maince5a.css?version=4.4.1" rel="stylesheet">
</head>

<body class="auth-wrapper">
<div class="all-wrapper menu-side with-pattern">
<div class="auth-box-w"><div class="logo-w">
<a href=""><img alt="" src="img/logo-big.png"></a>
</div>
<h4 class="auth-header">Admin Login<br><?php echo $errorMessage; ?> </h4>


<form method="post" name="frmLogin" id="frmLogin">

<div class="form-group"><label for="">Username</label>
<input class="form-control" name="txtUserName"  placeholder="Enter your username" type="text">
<div class="pre-icon os-icon os-icon-user-male-circle"></div>

</div><div class="form-group"><label for="">Password</label>

<input class="form-control" name="txtPassword"  placeholder="Enter your password" type="password">
<div class="pre-icon os-icon os-icon-fingerprint"></div></div>

<div class="buttons-w">
<input  class="btn btn-primary" name="btnLogin" type="submit" id="btnLogin" value="Log me in">

</div></form></div></div>
</body>
</html>
