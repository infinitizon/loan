
<div class="layout-content">

<div class="container-fluid flex-grow-1 container-p-y">
<h4 class="font-weight-bold py-3 mb-0">Users Profile</h4>
<div class="text-muted small mt-0 mb-4 d-block breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
<li class="breadcrumb-item">Users</li>
<li class="breadcrumb-item active">Users Profile</li>
</ol>
</div>

<div class="card mb-4">
<div class="card-body">
<div class="row">

<div class="col">
<h4 class="font-weight-bold mb-4"><?php echo $_SESSION['hlbank_user_name'];  ?></h4>


</div>
</div>
</div>
</div>

<div class="row">
<div class="col">

<div class="card mb-4">
<div class="card-body">
<div class="row mb-2">
<div class="col-md-3 text-muted">Phone:</div>
<div class="col-md-9">
<?php echo $_SESSION['hlbank_user']['phone'] ?>
</div>
</div>
<div class="row mb-2">
<div class="col-md-3 text-muted">Email:</div>
<div class="col-md-9">
<a href="" class="text-dark"><?php echo $_SESSION['hlbank_user']['address'] ?></a>
</div>
</div>
<div class="row mb-2">
<div class="col-md-3 text-muted">Gender:</div>
<div class="col-md-9">
<a href="" class="text-dark"><?php echo $_SESSION['hlbank_user']['gender'] ?></a>
</div>
</div>

<div class="row mb-2">
<div class="col-md-3 text-muted">Date Of Birth:</div>
<div class="col-md-9">
<a href="" class="text-dark"><?php echo $_SESSION['hlbank_user']['dob'] ?></a>
</div>
</div>

<h6 class="my-3">Address</h6>
<div class="row mb-2">
<div class="col-md-3 text-muted">Address:</div>
<div class="col-md-9">
<?php echo $_SESSION['hlbank_user']['address'] ?>
</div>
</div>

<div class="row mb-2">
<div class="col-md-3 text-muted">City:</div>
<div class="col-md-9">
<?php echo $_SESSION['hlbank_user']['city'] ?>
</div>
</div>

<div class="row mb-2">
<div class="col-md-3 text-muted">Zip:</div>
<div class="col-md-9">
<?php echo $_SESSION['hlbank_user']['zipcode'] ?>
</div>
</div>

<div class="row mb-2">
<div class="col-md-3 text-muted">Country:</div>
<div class="col-md-9">
<?php echo $_SESSION['hlbank_user']['country'] ?>
</div>
</div>



<div class="row mb-2">
<div class="col-md-3 text-muted"></div>

</div>
<div class="row">
<div class="col-md-3 text-muted"></div>

</div>
</div>

</div>






</div>
<div class="col-xl-4">

<div class="card mb-4">
<div class="card-body">
<a href="" class="btn btn-primary btn-round">Loan Profile</a> &nbsp;
<a href="" class="btn icon-btn btn-default md-btn-flat btn-round">
</a>
</div>
<hr class="border-light m-0">
<div class="card-body">
<p class="mb-2"> Monthly Salary: <?php echo $_SESSION['hlbank_user']['monthlyincome'] ?> </p>
<p class="mb-2">
Occupation: <?php echo $_SESSION['hlbank_user']['occupation'] ?>  </p>
<p class="mb-0">

<a href="javascript:void(0)" class="text-dark">Marital Status: <?php echo $_SESSION['hlbank_user']['marital'] ?> </a>
</p>
</div>
<hr class="border-light m-0">
<div class="card-body">
<a href="" class="d-block text-dark mb-2">
Credit Status: <?php echo $_SESSION['hlbank_user']['creditstatus'] ?>
</a>
<a href="" class="d-block text-dark mb-2">
 Tax ID:  <?php echo $_SESSION['hlbank_user']['taxid'] ?>
</a>
<a " class="d-block text-dark mb-0">
SSN: <?php echo $_SESSION['hlbank_user']['taxid'] ?>
</a>
</div>
</div>







</div>
</div>
</div>
