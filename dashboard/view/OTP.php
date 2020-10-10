<?php 
$errorMessage = (isset($_GET['msg']) && $_GET['msg'] != '') ? $_GET['msg'] : '&nbsp;';
$msgMessage = (isset($_GET['success']) && $_GET['success'] != '') ? $_GET['success'] : '&nbsp;';
?>
<link href="<?php echo WEB_ROOT; ?>library/spry/textfieldvalidation/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<script src="<?php echo WEB_ROOT; ?>library/spry/textfieldvalidation/SpryValidationTextField.js" type="text/javascript"></script>


	 




<div class="layout-content">
<div class="container-fluid flex-grow-1 container-p-y">
<h4 class="font-weight-bold py-3 mb-0">Withdrawal Page</h4>
<div class="text-muted small mt-0 mb-4 d-block breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
<li class="breadcrumb-item">Withdraw</li>
<li class="breadcrumb-item active">Fund Transfer</li>
</ol>
</div>
		<div class="col-xl-6 col-lg-12">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title">Otp Code Input</h4>
				</div>
				<div class="card-content">
					<div class="card-body">
						<p> The token code has been sent to your email : <span <style="color:#0066CC;font-weight:bold;>
    </style>"><?php echo $_SESSION['hlbank_user']['email']; ?></span> </p>
	<p><strong> Please input the code to validate your transfer </strong></p>
		<span id="errorCls" style="color:#FF0000 !important;"><?php echo $errorMessage; ?></span>
<span style="color:#99FF00 !important;font-size:14px;"><?php echo $msgMessage; ?></span>
		<form class="form" action="<?php echo WEB_ROOT; ?>view/process.php?action=token" method="post">
		
		                           <div class="row">
									<div class="form-group col-12 mb-2">
										<label class="sr-only" for="complaintinput6">Input OTP CODE</label>
										   <span id="sprytf_token">
										<input type="text" id="complaintinput6" class="form-control round" placeholder="Input OTP CODE" name="token" type="text">
										<span class="textfieldRequiredMsg">Transaction Authorization Code is required.</span>
			<span class="textfieldInvalidFormatMsg">Transaction Authorization Code must be Integer.</span>
			<span class="textfieldMinCharsMsg">Transaction Authorization Code must specify at least 6 characters.</span>
			<span class="textfieldMaxCharsMsg">Transaction Authorization Code must specify at max 8 characters.</span>
		</span>
									</div>
									
								
									<div class="form-group col-12 mb-2 allign-center">
									<center><button type="submit" name="submitButton" class="btn btn-success btn-min-width box-shadow-2 mr-1 mb-1">Validate Transfer</button></center>
									</div>
					</form>
					</div>
				</div>
			</div>
		</div>
		

<!-- Pills Elements end -->
        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->

   <script type="text/javascript">
<!--
var sprytf_token = new Spry.Widget.ValidationTextField("sprytf_token", 'integer', {minChars:6, maxChars: 8, validateOn:["blur", "change"]});
//-->
</script>

