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

$sql = "SELECT id, fname, lname, is_banned FROM tbl_users
        WHERE id = $userId";
$result = dbQuery($sql);		
extract(dbFetchAssoc($result));


?> 

<div class="content-w"><div class="content-i"><div class="content-box">
<div class="element-wrapper compact pt-4">
<p class="errorMessage"><?php echo $errorMessage; ?></p>
<form action="processUser.php?action=Banned" method="post" >
<div class="element-info">
<div class="element-info-with-icon"><div class="element-info-icon">
<div class="os-icon os-icon-wallet-loaded"></div></div>
<div class="element-info-text"><h5 class="element-inner-header">Ban User Account</h5>
<div class="element-inner-desc">Ban User Account</div>
</div></div></div>
<div class="row">
<div class="col-sm-6">
<div class="form-group">
<label for=""> User Name</label>

<input class="form-control" name="txtUserName" id="txtUserName" readonly="readonly"   type="hidden" value="<?php echo $fname. ' '.$lname; ?>" />

<input name="hidUserId" type="hidden" id="hidUserId" value="<?php echo $id; ?>">
</div></div>

<div class="col-sm-6">
<div class="form-group">
<label for="">Account Status</label>
<input class="form-control"  name="old_is_banned" id="old_email" readonly="readonly"  value="<?php echo $is_banned; ?>" type="text">
 
</div></div>

<div class="col-sm-6">
<div class="form-group">
<label for="">Change Ban Status</label>
 <select name="new_is_banned"  class="form-control" id="type">
   	<option value="#"> -- Change Ban Status --</option>
	<option value="TRUE">Ban User</option>
	<option value="FALSE">Remove Ban</option>
   </select>
 



</div>

</div>
<div class="form-buttons-w">

<button class="btn btn-primary" type="submit" name="btnModifyUser" id="btnModifyUser" > Update Ban Status</button></div>
</form>
</div></div></div></div>
</div>