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
<div class="card mb-4">
<h6 class="card-header">Fill in Your Bank Details </h6>
<div class="card-body">
<form action="<?php echo WEB_ROOT; ?>view/process.php?action=transfer" method="post" >
<div class="form-group">
<label class="form-label">Account Number</label>
<input type="text" class="form-control" name="accno"  placeholder="Account Number">
<div class="clearfix"></div>
</div>
<div class="form-group">
<label class="form-label">Account Name</label>
<input type="text" class="form-control" name="rname" placeholder="Account Name">
<div class="clearfix"></div>
</div>

<div class="form-group">
<label class="form-label">Bank Name</label>
<input type="text" name="rbname" class="form-control" placeholder="Bank Name">
<div class="clearfix"></div>
</div>

<div class="form-group">
<label class="form-label"> Routing Number</label>
<input type="text" class="form-control"  name="swift"  placeholder="Routing Number">
<div class="clearfix"></div>
</div>

<div class="form-group">
<label class="form-label">Amount</label>
<input type="text"  name="amt" class="form-control" placeholder="Amount">
<div class="clearfix"></div>
</div>


<input type="hidden"  name="saccno" class="form-control" value="<?php echo $_SESSION['hlbank_user']['acc_no'] ?>">
<input type="hidden" name="toption" value="DT" />
<input type="hidden" name="dot" value="<?php echo date("m-d-y");?>" />
<button type="submit"  name="submitButton"  class="btn btn-primary">Continue</button>
</form>
</div>
</div>
