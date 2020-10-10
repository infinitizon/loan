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

$sql = "SELECT id, fname, lname, pwd FROM tbl_users
        WHERE id = $userId";
$result = dbQuery($sql);		
extract(dbFetchAssoc($result));


?> 

<div class="content-w"><div class="content-i"><div class="content-box">
<div class="element-wrapper compact pt-4">
<p class="errorMessage"><?php echo $errorMessage; ?></p>
<form action="processUser.php?action=password" method="post" >
<div class="element-info">
<div class="element-info-with-icon"><div class="element-info-icon">
<div class="os-icon os-icon-wallet-loaded"></div></div>
<div class="element-info-text"><h5 class="element-inner-header">Change Account Email</h5>
<div class="element-inner-desc">Change This user Password.</div>
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
<label for="">New Password:</label>
<input class="form-control" data-minlength="4" name="new_pwd" id="new_pwd" placeholder="New Password" required="required" type="password">

<div class="help-block form-text text-muted form-control-feedback"></div></div></div>


</div>

</div>
<div class="form-buttons-w">

<button class="btn btn-primary" type="submit" name="btnModifyUser" id="btnModifyUser" > Modify Password</button></div>
</form>
</div></div></div></div>
</div>