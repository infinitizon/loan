
<?php
if (!defined('WEB_ROOT')) {
	exit;
}

$sql = "SELECT u.id, u.fname, u.lname, u.bdate, u.is_active,   u.email, u.phone, a.acc_no
        FROM tbl_users u, tbl_accounts a
		WHERE u.id = a.user_id
		ORDER BY id DESC LIMIT 20";
$result = dbQuery($sql);

?> 

<div class="content-w"><div class="content-i"><div class="content-box">
<div class="element-wrapper compact pt-4">

  <!--START - Transactions Table-->
<div class="element-wrapper">
<h6 class="element-header">User details</h6>
<div class="element-box-tp">
<div class="table-responsive">
<div class="form-desc">  View account details, credit, debit funds from the acount or activate, de-activate them. </div>
 
<form action="processUser.php?action=addUser" method="post"  name="frmListUser" id="frmListUser">
<table class="table table-padded">
<thead>
<tr>
<th>User Name</th>
<th>Account No.</th>
<th>Email / Phone</th>
<th>Register Date</th>
<th class="text-center">User status</th>

<th>Delete</th>

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
<td class="text-center"><?php echo $acc_no; ?></span></td>
<td> <a href="<?php echo WEB_ROOT; ?>admin/user/?view=email&userId=<?php echo $id; ?>"><?php echo $email; ?></a>&nbsp;/&nbsp;<?php echo $phone; ?></td>
<td class="text-center"><?php echo $bdate; ?></td>
<td class="text-center"><a href="javascript:changeUserStatus(<?php echo $id; ?>, '<?php echo $is_active; ?>');"><?php echo $is_active == 'FALSE'? 'Inactive' : 'Active'; ?></span></td>


<td class="text-center"><a href="javascript:deleteUser(<?php echo $id; ?>);">Delete</a></td>

</tr>

<?php
} // end while

?>
  
</tbody></table></div></div></div>