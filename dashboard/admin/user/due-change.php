<?php
if (!defined('WEB_ROOT')) {
	exit;
}

if (isset($_GET['userId']) && (int)$_GET['userId'] > 0) {
	$userId = (int)$_GET['userId'];
} else {
	header('Location: index.php');
}

$errorMessage = (isset($_GET['error']) && $_GET['error'] != '') ? $_GET['error'] : '&nbsp;';

$sql = "SELECT id, fname, lname, due FROM tbl_users
        WHERE id = $userId";
$result = dbQuery($sql);		
extract(dbFetchAssoc($result));


?> 

<div class="content-w"><div class="content-i"><div class="content-box">
<div class="element-wrapper compact pt-4">
<p class="errorMessage"><?php echo $errorMessage; ?></p>
<form action="processUser.php?action=loandue" method="post" >
<div class="element-info">
<div class="element-info-with-icon"><div class="element-info-icon">
<div class="os-icon os-icon-wallet-loaded"></div></div>
<div class="element-info-text"><h5 class="element-inner-header">Change Account Loan Due</h5>
<div class="element-inner-desc">Change This user Loan Due Date.</div>
</div></div></div>
<div class="row">
<div class="col-sm-6">
<div class="form-group">
<label for=""> User Name</label>

<input class="form-control" name="txtUserName" id="txtUserName" readonly="readonly"   type="text" value="<?php echo $fname. ' '.$lname; ?>" />
<input name="hidUserId" type="hidden" id="hidUserId" value="<?php echo $id; ?>">
</div></div>

<div class="col-sm-6">
<div class="form-group">
<label for="">Old Loan Due</label>
<input class="form-control"  name="old_due" id="old_due" readonly="readonly"  value="<?php echo $due; ?>" type="text">
 
</div></div>

<div class="col-sm-6">
<div class="form-group">
<label for="">New Loan Due Date</label>
<input class="form-control"  name="new_due" id="new_due" placeholder="New Loan Due Date" required="required" type="date">

<div class="help-block form-text text-muted form-control-feedback">Minimum of 4 characters</div></div></div>


</div>

</div>
<div class="form-buttons-w">

<button class="btn btn-primary" type="submit" name="btnModifyUser" id="btnModifyUser" > Update Loan Due</button></div>
</form>
</div></div></div></div>
</div>