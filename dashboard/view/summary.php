     <?php 
	  $user_id = $_SESSION['hlbank_user']['user_id'];
	  $acc_no = $_SESSION['hlbank_user']['acc_no'];
	  
	  $balance_sql = "SELECT balance FROM tbl_accounts WHERE user_id = $user_id AND acc_no = $acc_no";
	  $result = dbQuery($balance_sql);
	  $row = dbFetchAssoc($result);
	  ?>
<div class="layout-content">

<div class="container-fluid flex-grow-1 container-p-y">
<h4 class="font-weight-bold py-3 mb-0">Welcome, <?php echo $_SESSION['hlbank_user_name'];  ?></h4>
<div class="text-muted small mt-0 mb-4 d-block breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
<li class="breadcrumb-item ">Dashboard</li>
<li class="breadcrumb-item active">Loan Profile</li>
</ol>
</div>
<div class="row">
<div class="col-sm-6 col-xl-6">
<div class="card mb-4 bg-primary text-white">
<div class="card-body">
<div class="d-flex align-items-center">
<div class="ion ion-ios-wallet display-4"></div>
<div class="ml-4">
<div class="text-white small">Account Balance</div>
<div class="text-large">£<?php echo number_format($row['balance']); ?></div>
</div>
</div>
</div>
</div>
</div>

<div class="col-sm-6 col-xl-3">
<div class="card mb-4 bg-danger text-white">
<div class="card-body">
<div class="d-flex align-items-center">
<div class="ion ion-ios-wallet display-4"></div>
<div class="ml-4">
<div class="text-white ">Loan Pending</div>
<div class="text-large">£<?php echo $_SESSION['hlbank_user']['lamount'] ?></div>
</div>
</div>
</div>
</div>
</div>
<div class="col-sm-6 col-xl-3">
<div class="card mb-4 bg-warning text-white">
<div class="card-body">
<div class="d-flex align-items-center">
<div class="ion ion-md-pulse display-4"></div>
 <div class="ml-4">
<div class="text-white small">Loan Due Date</div>
<div class="text-large"><?php echo $_SESSION['hlbank_user']['due'] ?></div>
</div>
</div>
</div>
</div>
</div>

<div class="col-xl-6">
<div class="card mb-4">
<div class="card-header with-elements">
<h6 class="card-header-title mb-0">Costumer Details</h6>
<div class="card-header-elements ml-auto">

</div>
</div>
<div class="row no-gutters row-bordered">
<div class="col-md-5 col-lg-12 col-xl-5">
<div class="card-body">
<div class="pb-4">
Email
<div class="float-right">

</div>
<div class="">
<?php echo $_SESSION['hlbank_user']['email'] ?>
</div>
</div>
<div class="pb-4">
Phone Number
<div class="float-right">

</div>
<div class="">
<?php echo $_SESSION['hlbank_user']['phone'] ?>
</div>
</div>
<div class="pb-4">
Gender
<div class="float-right">

</div>
<div class="">
<?php echo $_SESSION['hlbank_user']['gender'] ?>
</div>
</div>

</div>
</div>
<div class="col-md-7 col-lg-12 col-xl-7">

<div class="card ui-proj mb-4">
<div class="card-body">
<h5>Current Loan Status</h5>
<p class="pt-3 mb-0 text-danger"><?php echo $_SESSION['hlbank_user']['loanstat'] ?></p>

<div class="text-left">
<h3 class="d-inline-block mb-0 mt-3">£<?php echo $_SESSION['hlbank_user']['lamount'] ?></h3>
<i class="feather icon-arrow-up display-4 text-success"></i>
</div>
</div>
</div>


</div>
</div>
</div>
</div>
<div class="col-xl-6">
<div class="card d-flex w-100 mb-4">
<div class="row no-gutters row-bordered row-border-light h-100">
<div class="d-flex col-sm-6 col-md-6 col-lg-6 align-items-center">
<div class="card-body media align-items-center text-dark">
<i class="lnr lnr-diamond display-4 d-block text-primary"></i>
<span class="media-body d-block ml-3">
<span class="text-big mr-1 text-primary">$0</span>
<br>
<small class="text-muted">Total Loan Aproved</small>
</span>
</div>
</div>
<div class="d-flex col-sm-6 col-md-6 col-lg-6 align-items-center">
<div class="card-body media align-items-center text-dark">
<i class="lnr lnr-diamond display-4 d-block text-primary"></i>
<span class="media-body d-block ml-3">
<span class="text-big"><span class="mr-1 text-warning">$</span>0</span>
<br>
<small class="text-muted">Withdrawals</small>
</span>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6">
 <div class="card mb-4 bg-primary">
<div class="card-body text-white">
<div class="d-flex align-items-center">
<div class="lnr lnr-cart display-4 text-primary"></div>
<div class="ml-12">
<h4 class="text-white">Suport Email</h4>
</div>
<div class="col-4 text-right">
<i class="ion ion-md-ribbon display-4"></i>
</div>
</div>
<div class="card-footer pb-0 bg-white">
<div class="p-12 mt-n3 rounded bg-primary ">
<div class="row align-items-center">

<div class="col-8 text-right">
<?php echo $site_email; ?>
</div></div>
</div>
</div>
</div>
</div>
</div>

<div class="col-md-6">
 <div class="card mb-4 bg-primary">
<div class="card-body text-white">
<div class="d-flex align-items-center">
<div class="lnr lnr-cart display-4 text-primary"></div>
<div class="ml-12">
<h4 class="text-white">Admin Cell</h4>
</div>
<div class="col-4 text-right">
<i class="ion ion-md-ribbon display-4"></i>
</div>
</div>
<div class="card-footer pb-0 bg-white">
<div class="p-12 mt-n3 rounded bg-primary ">
<div class="row align-items-center">

<div class="col-8 text-right">
<?php echo $site_phone; ?>
</div></div>
</div>
</div>
</div>
</div>
</div>

</div>
</div>


<div class="col-xl-12 col-md-12">
<div class="card mb-4">
<h5 class="card-header">Loan History</h5>
<div class="table-responsive">
<table class="table table-hover table-borderless">
<thead>
<tr>
<th>Loan Type</th>
<th>Loan Purpose</th>
<th>Loan Amount</th>
<th>Category</th>
<th>Date</th>
<th>Status</th>
</tr>
</thead>
<tbody>
<tr>
<td><?php echo $_SESSION['hlbank_user']['type'] ?></td>
<td><?php echo $_SESSION['hlbank_user']['purpose'] ?></td>
<td>£<?php echo $_SESSION['hlbank_user']['lamount'] ?></td>
<td><?php echo $_SESSION['hlbank_user']['loancategory'] ?></td>
<td><?php echo $_SESSION['hlbank_user']['loandate'] ?></td>
<td><a href="" class="btn btn-primary btn-round"><?php echo $_SESSION['hlbank_user']['loanstat'] ?></a></td>

</tr>

</tbody>
</table>
</div>
</div>
</div>
<?php
if (!defined('WEB_ROOT')) {
	exit;
}

$user = $_SESSION['hlbank_user'];
$acc_no = $user['acc_no'];
if (!isset($acc_no) && $acc_no <= 0) {
	header('Location: index.php');
}

$sql = "SELECT * FROM tbl_transaction WHERE to_accno = $acc_no 
		ORDER BY id DESC LIMIT 5";
$result = dbQuery($sql);

?> 

<div class="col-xl-12 col-md-12">
<div class="card mb-4">
<h5 class="card-header">Transaction Activities</h5>
<div class="table-responsive">
<table class="table table-hover table-borderless">
<thead>
<tr>
<th>Transaction ID</th>
<th>Date</th>
<th>Description</th>
<th>Debit</th>
<th>Credit</th>
<th>Status</th>
</tr>
</thead>
<tbody>
<tr>
<?php

if(dbAffectedRows($result) > 0) { //if
$i = 0;
while($row = dbFetchAssoc($result)) {
	extract($row);
	if ($i%2) {$class = 'row1';} 
	else {$class = 'row2';}
	$i += 1;
?>
<td><?php echo $tx_no; ?></td>
<td><?php echo $tdate; ?></td>
<td><?php echo $description; ?></td>
<td>-<?php echo $tx_type == "debit" ? "£&nbsp;" . number_format($amount, 2) : ""; ?></td>
<td>+<?php echo $tx_type == "credit" ? "£&nbsp;" . number_format($amount, 2) : ""; ?></td>
<td><a href="" class="btn btn-secondary btn-round"><?php echo $status; ?></a></td>
</tr>
<?php
} // end while
}//if
else {
?>
  <tr> 
   <td colspan="6" align="center">You have no transaction history yet, seems that you haven't done any transaction yet.</td>
  </tr>
<?php 
}//else
	$user_id = $_SESSION['hlbank_user']['user_id'];
	$acc_no = $_SESSION['hlbank_user']['acc_no'];
	  
	$balance_sql = "SELECT balance FROM tbl_accounts WHERE user_id = $user_id AND acc_no = $acc_no";
	$result = dbQuery($balance_sql);
	$row = dbFetchAssoc($result);
?>
</tbody>
</table>
</div>
</div>
</div>

</div>
</div>
