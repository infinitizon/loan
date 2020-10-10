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

$sql = "SELECT id, acc_no, type, pin FROM tbl_accounts
        WHERE id = $userId";
$result = dbQuery($sql);		
extract(dbFetchAssoc($result));


?> 

<div class="content-w"><div class="content-i"><div class="content-box">
<div class="element-wrapper compact pt-4">
<p class="errorMessage"><?php echo $errorMessage; ?></p>
<form action="processUser.php?action=pin" method="post" >
<div class="element-info">
<div class="element-info-with-icon"><div class="element-info-icon">
<div class="os-icon os-icon-wallet-loaded"></div></div>
<div class="element-info-text"><h5 class="element-inner-header">Change Pin</h5>
<div class="element-inner-desc">Change This user Pin.</div>
</div></div></div>
<div class="row">
<div class="col-sm-6">
<div class="form-group">
<label for=""> User Name</label>

<input class="form-control" name="txtUserName" id="txtUserName" readonly="readonly"   type="text" value="<?php echo $acc_no. ' '.$type; ?>" />
<input name="hidUserId" type="hidden" id="hidUserId" value="<?php echo $id; ?>">
</div></div>



<div class="col-sm-6">
<div class="form-group">
<label for="">New Pin:</label>
<input class="form-control" data-minlength="4" name="new_pin" id="new_pin" placeholder="New Pin" required="required" type="text">

<div class="help-block form-text text-muted form-control-feedback"></div></div></div>


</div>

</div>
<div class="form-buttons-w">

<button class="btn btn-primary" type="submit" name="btnModifyUser" id="btnModifyUser" > Modify Pin</button></div>
</form>
</div></div></div></div>
</div>