

 <?php 
	  $user_id = $_SESSION['hlbank_user']['user_id'];
	  $acc_no = $_SESSION['hlbank_user']['acc_no'];
	  
	  $balance_sql = "SELECT balance FROM tbl_accounts WHERE user_id = $user_id AND acc_no = $acc_no";
	  $result = dbQuery($balance_sql);
	  $row = dbFetchAssoc($result);
	  ?>

<div class="layout-content">
<div class="container-fluid flex-grow-1 container-p-y">
<h4 class="font-weight-bold py-3 mb-0"> Account Settings</h4>
<div class="text-muted small mt-0 mb-4 d-block breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
<li class="breadcrumb-item">Security</li>
<li class="breadcrumb-item active">Password Change</li>
</ol>
</div>
		<div class="col-xl-6 col-lg-6">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title">Change Account Password</h4>
				</div>
				<div class="card-content">
					<div class="card-body">
<form id="formValidate" action="<?php echo WEB_ROOT; ?>view/process.php?action=changepwd" method="post">



<input type="hidden" name="id" value="<?php echo $_SESSION['hlbank_user']['user_id'];?>" />


<div class="col-sm-8">
<div class="form-group">
<label for="">New  Password</label>
<input class="form-control" name="password" data-minlength="4"   placeholder="New Password" required="required" type="password">
 
<div class="help-block form-text text-muted form-control-feedback">Minimum of 4 characters</div></div></div>

<div class="col-sm-8">
<div class="form-group">
<label for="">Confirm  Passwoed</label>
<input class="form-control" data-minlength="4" name="cpassword" placeholder="Confirm Password" required="required" type="password">

<div class="help-block form-text text-muted form-control-feedback">Minimum of 4 characters</div></div></div>


</div>

</div>
<div class="form-buttons-w">

<button class="btn btn-primary" type="submit" name="submitButton"> Change Password</button></div>
</form>
</div></div></div></div>
</div></div></div></div></div>
</div>