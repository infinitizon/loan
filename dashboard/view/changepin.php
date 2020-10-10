

 <?php 
	  $user_id = $_SESSION['hlbank_user']['user_id'];
	  $acc_no = $_SESSION['hlbank_user']['acc_no'];
	  
	  $balance_sql = "SELECT balance FROM tbl_accounts WHERE user_id = $user_id AND acc_no = $acc_no";
	  $result = dbQuery($balance_sql);
	  $row = dbFetchAssoc($result);
	  ?><div class="layout-content">
<div class="container-fluid flex-grow-1 container-p-y">
<h4 class="font-weight-bold py-3 mb-0"> Account Settings</h4>
<div class="text-muted small mt-0 mb-4 d-block breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
<li class="breadcrumb-item">Security</li>
<li class="breadcrumb-item active">Pin Change</li>
</ol>
</div>
		<div class="col-xl-6 col-lg-6">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title">Change Account Pin</h4>
				</div>
				<div class="card-content">
					<div class="card-body">
<form id="formValidate" action="<?php echo WEB_ROOT; ?>view/process.php?action=changepin" method="post">

<input type="hidden" name="id" value="<?php echo $_SESSION['hlbank_user']['user_id'];?>" />

<div class="col-sm-6">
<div class="form-group">
<label for="">New  Pin</label>
<input class="form-control" data-minlength="4" name="pin"  placeholder="New Pin" required="required" type="text">
 
<div class="help-block form-text text-muted form-control-feedback">Minimum of 4 characters</div></div></div>

<div class="col-sm-6">
<div class="form-group">
<label for="">Confirm  Pin</label>
<input class="form-control" data-minlength="4" name="cpin" placeholder="Confirm Pin" required="required" type="text">

<div class="help-block form-text text-muted form-control-feedback">Minimum of 4 characters</div></div></div>


</div>

</div>
<div class="form-buttons-w">

<button class="btn btn-primary" type="submit" name="submitButton"> Change PIN Number</button></div>
</form>
</div></div></div></div>
</div></div></div></div></div>
</div>