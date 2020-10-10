
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
		ORDER BY id DESC LIMIT 20";
$result = dbQuery($sql);

?> 
<div class="layout-content">
<div class="container-fluid flex-grow-1 container-p-y">
<h4 class="font-weight-bold py-3 mb-0">Recent Transactions</h4>
<div class="text-muted small mt-0 mb-4 d-block breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
<li class="breadcrumb-item">Transactions</li>
<li class="breadcrumb-item active">Transaction History</li>
</ol>
</div>

<div id="HTMLtoPDF">
<div align="right">
<a class="btn btn-primary btn-sm" href="#" onclick="HTMLtoPDF()"><i class="fas fa-file-pdf fa-2x" ></i><span>&nbsp;Download PDF</span></a>
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
</div>
<!-- these js files are used for making PDF -->
	<script src="<?php echo WEB_ROOT; ?>js/jspdf.js"></script>
	<script src="<?php echo WEB_ROOT; ?>js/jquery-2.1.3.js"></script>
	<script src="<?php echo WEB_ROOT; ?>js/pdfFromHTML.js"></script>