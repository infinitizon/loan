<?php
if (!defined('WEB_ROOT')) {
	exit;
}

$errorMessage = (isset($_GET['msg']) && $_GET['msg'] != '') ? $_GET['msg'] : '&nbsp;';

$sql = "SELECT u.id, u.fname, u.lname, a.acc_no, a.balance, u.dob, a.type, a.id AS acc_id
        FROM tbl_users u, tbl_accounts a
		WHERE u.id = a.user_id
		ORDER BY id DESC LIMIT 20";
$result = dbQuery($sql);

?> 

<div class="content-w"><div class="content-i"><div class="content-box">
<div class="element-wrapper compact pt-4">

  <!--START - Transactions Table-->
<div class="element-wrapper">
<h6 class="element-header">Account Details List</h6>
<div class="element-box-tp">
<div class="table-responsive">
<div class="form-desc">  View account details, credit, debit funds from the acount or activate, de-activate them. </div>
 
<form action="processUser.php?action=addUser" method="post"  name="frmListUser" id="frmListUser">
<table class="table table-padded">
<thead>
<tr>
<th>User Name</th>
<th>Account No.</th>
<th>Balance</th>
<th>Account Type</th>
<th class="text-center">Transfer status</th>


</tr></thead>

<tbody>

<?php
while($row = dbFetchAssoc($result)) {
	extract($row);
	if ($i%2) {
		$class = 'row1';
	} else {
		$class = 'row2';
	}
	
	$i += 1;
	
	
?>
  <tr class="<?php echo $class; ?>"> 
<td class="nowrap"><span class="status-pill smaller green"></span><span><?php echo $fname .' '.$lname; ?></span></td>
<td class="text-center"><a href="<?php echo WEB_ROOT; ?>admin/pwd/?view=detail&accId=<?php echo $acc_id; ?>"><?php echo $acc_no; ?></a></span></td>
<td>$&nbsp;<?php echo $balance; ?></td>
<td class="text-center"><?php echo $type; ?></td>
<td class="text-center"><a href="javascript:changeAccStatus(<?php echo $acc_id; ?>, '<?php echo $status; ?>');">
   	<?php echo $status == 'INACTIVE'? 'Transfer Disabled' : 'Transfer Enabled'; ?>
</span></td>

</tr>

<?php
} // end while

?>
  
</tbody></table></div></div></div>