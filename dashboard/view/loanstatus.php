
<div class="layout-content">

<div class="container-fluid flex-grow-1 container-p-y">
<h4 class="font-weight-bold py-3 mb-0">Loan Status</h4>
<div class="text-muted small mt-0 mb-4 d-block breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
<li class="breadcrumb-item">Loan Data</li>
<li class="breadcrumb-item active">Loan Details</li>
</ol>
</div>
<div class="media align-items-center py-3 mb-4">
<div class="media-body ml-4">
<h4 class="font-weight-bold mb-2">Username</h4>
<a href="javascript:void(0)" class="btn btn-info btn-sm">Amount Requested: £<?php echo $_SESSION['hlbank_user']['lamount'] ?></a>&nbsp;
<a href="javascript:void(0)" class="btn btn-primary btn-sm"><?php echo $_SESSION['hlbank_user']['loanstat'] ?></a>
</div>
</div>
<div class="nav-tabs-top nav-responsive-sm">

<div class="tab-content">

<div class="tab-pane fade show active" id="item-overview">
<div class="row no-gutters row-bordered">
<div class="d-flex col-md-6 col-lg align-items-center">

</div>



</div>
<div class="card-body">
<h6 class="small font-weight-semibold mb-4">Basic Loan Info</h6>
<div class="table-responsive">
<table class="table product-item-table">
<tbody>
 <tr>
<td>Loan Requested:</td>
<td>
<strong>£<?php echo $_SESSION['hlbank_user']['lamount'] ?></strong>
</td>
</tr>
<tr>
<td>Loan Duration:</td>
<td><?php echo $_SESSION['hlbank_user']['repayment'] ?></td>
</tr>
<tr>
<td>Loan Category:</td>
<td>123</td>
</tr>
<tr>
<td>Loan Purpose:</td>
<td><?php echo $_SESSION['hlbank_user']['purpose'] ?></td>
</tr>
<tr>
<td>Credit Status:</td>
<td>
<span class="badge badge-success"><?php echo $_SESSION['hlbank_user']['creditstatus'] ?></span>
</td>
</tr>

<tr>
<td>Tax ID:</td>
<td>
<span class="badge badge-success"><?php echo $_SESSION['hlbank_user']['taxid'] ?></span>
</td>
</tr>

<tr>
<td>NIN:</td>
<td>
<span class="badge badge-success"><?php echo $_SESSION['hlbank_user']['ssn'] ?></span>
</td>
</tr>

</tbody>
</table>
</div>
</div>


</div>
</div>
</div>
</div></div>