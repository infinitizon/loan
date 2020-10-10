<?php
if (!defined('WEB_ROOT')) {
	exit;
}

if (isset($_GET['accId']) && $_GET['accId'] > 0) {
	$accId = $_GET['accId'];
} else {
	header('Location: index.php');
}

$sql = "SELECT u.id, u.fname, u.lname, u.pwd, u.dob, u.is_active, u.email,u.gender, u.phone, u.pics,
		a.acc_no,a.pin, a.type, a.balance,
		ad.address, ad.city, ad.state,ad.country,ad.lamount, u.due, u.loanstat, ad.zipcode
        FROM tbl_users u, tbl_accounts a, tbl_address ad
		WHERE u.id = a.user_id AND ad.user_id = u.id
		AND a.id = $accId";
		
$result = mysql_query($sql) or die('Cannot get product. ' . mysql_error());
$row = mysql_fetch_assoc($result);
extract($row);
$atype = "";
if($type == "Checking Account"){$atype = "Checking Account";}
else if($type == "Saving Account") {$atype = "Saving Account";}
else if($type == "Fixed Deposit Account") {$atype = "Fixed Deposit Account";}
?>



<div class="content-i">
<div class="content-box">
<div class="row pt-4">
<div class="col-sm-12">
<!--START - Grid of tablo statistics-->
<div class="element-wrapper">

<h6 class="element-header">Account Settings for user ( <?php echo strtoupper( $fname. ' '. $lname); ?> )</h6>
<div class="element-content">
<div class="tablo-with-chart">
<div class="row">

<div class="tablos">
<div class="row mb-xl-3 mb-xxl-3">
<div class="col-sm-4">
<a class="element-box el-tablo centered trend-in-corner padded bold-label" href="<?php echo WEB_ROOT; ?>admin/user/?view=pin&userId=<?php echo $id; ?>">
<div class="value"><?php echo $pin; ?></div><div class="label">Account Pin</div><br>
<button class="btn btn-danger"><i class="fas fa-home"></i><span>Update Pin</span></button>
</a></div>


<div class="col-sm-4">
<a class="element-box el-tablo centered trend-in-corner padded bold-label" href="<?php echo WEB_ROOT; ?>admin/user/?view=password&userId=<?php echo $id; ?>">
<div class="value">Change Account Password</div><div class="label">Account Password</div>
<br>
<button class="btn btn-danger"><i class="fas fa-home"></i><span>Update  Account Password</span></button></a></div>



<div class="col-sm-4">
<a class="element-box el-tablo centered trend-in-corner padded bold-label" href="<?php echo WEB_ROOT; ?>admin/user/?view=loandue&userId=<?php echo $id; ?>">
<div class="value"><?php echo $due; ?></div><div class="label">Loan Due
</div>
<br>
<button class="btn btn-danger"><i class="fas fa-calneder"></i><span>Update Due Date</span></button></a></div>

<div class="col-sm-4">
<a class="element-box el-tablo centered trend-in-corner padded bold-label" href="<?php echo WEB_ROOT; ?>admin/user/?view=loanstatus&userId=<?php echo $id; ?>">
<div class="value"><?php echo $loanstat; ?></div><div class="label">Loan Status
</div>
<br>
<button class="btn btn-danger"><i class="fas fa-home"></i><span>Update Uncomfirmed Balance</span></button></a></div>


<div class="col-sm-4">
<a class="element-box el-tablo centered trend-in-corner padded bold-label" href="<?php echo WEB_ROOT; ?>admin/user/?view=phone&userId=<?php echo $id; ?>">
<div class="value"><?php echo $phone; ?></div><div class="label">Phone Number</div>
<br>
<button class="btn btn-danger"><i class="fas fa-home"></i><span>Update Phone </span></button></a></div>


<div class="col-sm-4">
<a class="element-box el-tablo centered trend-in-corner padded bold-label" href="<?php echo WEB_ROOT; ?>admin/user/?view=email&userId=<?php echo $id; ?>">
<div class="label"><strong><?php echo $email; ?></strong></div><div class="label">Email Address</div>
<br>
<button class="btn btn-danger"><i class="fas fa-home"></i><span>Update Email</span></button></a></div>

</div>

</div></div>
 
 
 
 
 </div></div></div></div>