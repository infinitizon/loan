<?php
if (!defined('WEB_ROOT')) {
	exit;
}

if (isset($_GET['accNo']) && $_GET['accNo'] > 0) {
	$acc_no = $_GET['accNo'];
} else {
	header('Location: index.php');
}

$sql = "SELECT * FROM tbl_transaction WHERE to_accno = $acc_no ORDER BY id DESC LIMIT 20";
$result = dbQuery($sql);

?> 

<div class="content-w"><div class="content-i"><div class="content-box">
<div class="element-wrapper compact pt-4">

  <!--START - Transactions Table-->
<div class="element-wrapper">
<h6 class="element-header">Account Statement</h6>
<div class="element-box-tp">
<div class="table-responsive">
<div class="form-desc">  View list of all credit/ debit / fund transfer transaction summary by this user </div>
 
<form action="processUser.php?action=addUser" method="post"  name="frmListUser" id="frmListUser">
<table class="table table-padded">
<thead>
<tr>
<th>Transaction Date</th>
<th>Refrence No#</th>
<th>>Description</th>
<th>Debit</th>
<th class="text-center">Credit</th>
<th>Status</th>

</tr></thead>

<tbody>
<?php
if(dbNumRows($result) > 0) {
while($row = dbFetchAssoc($result)) {
	extract($row);
	if ($i%2) {$class = 'row1';}
	else {$class = 'row2';}
	$i += 1;
?>
  <tr class="<?php echo $class; ?>"> 
<td class="nowrap"><span class="status-pill smaller green"></span><span><?php echo $date; ?></span></td>
<td class="text-center"><?php echo $tx_no; ?></td>
<td><?php echo $description; ?></td>
<td class="text-center"><?php echo $tx_type == "debit" ? "$&nbsp;" . number_format($amount, 2) : ""; ?></td>
<td class="text-center"><?php echo $tx_type == "credit" ? "$&nbsp;" . number_format($amount, 2) : ""; ?></td>
<td class="text-center"><?php echo $status; ?><td>

</tr>

<?php
} // end while

?>
   <tr> 
   <td colspan="5">&nbsp;</td>
  </tr>
  <tr> 
   <td colspan="5" align="right"></td>
  </tr>
<?php 
}//
else {
?> 
  <tr> 
   <td colspan="5">&nbsp;</td>
  </tr>
  <tr> 
   <td colspan="5" align="right">No Transaction / Fund transfer done.</td>
  </tr>
<?php 
}//else
?>
</tbody></table></div></div></div>