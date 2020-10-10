 <?php 
	$funds_data = $_SESSION['funds_data'];
	extract($funds_data);
	$acc_type = "";
	if($toption == "DT") { $acc_type = "Internal Transfer";}
    if	($toption == "LT") { $acc_type = "Local Transfer";}
	else {$acc_type = "International Transfer";}
?>

 <?php 
	  $user_id = $_SESSION['hlbank_user']['user_id'];
	  $acc_no = $_SESSION['hlbank_user']['acc_no'];
	  
	  $balance_sql = "SELECT balance FROM tbl_accounts WHERE user_id = $user_id AND acc_no = $acc_no";
	  $result = dbQuery($balance_sql);
	  $row = dbFetchAssoc($result);
	  ?>
	  <div class="container-fluid flex-grow-1 container-p-y">
<h4 class="font-weight-bold py-3 mb-0">Transfer Confirmation</h4>
<div class="text-muted small mt-0 mb-4 d-block breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
<li class="breadcrumb-item">Withdraw</li>
<li class="breadcrumb-item active">Fund Transfer</li>
</ol>
</div></div>
    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
		<section class="flexbox-container">
    <div class="col-12 d-flex align-items-center justify-content-center">
        <div class="col-md-6 col-12 box-shadow-2 p-0">
            <div class="card border-grey border-lighten-3 px-2 py-2 m-0">
                <div class="card-header border-0 pb-0">
                    <div class="card-title text-center">
                        <img src="checkmark.gif" height="60" width="60" alt="Transfer Receipt">
                    </div>
                    <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2"><span>Transfer Confirmation.</span><div align="right">
<a class="btn btn-primary btn-sm" href="#" onclick="HTMLtoPDF()"><i class="fas fa-file-pdf " ></i><span>&nbsp;Download PDF</span></a>
</div></h6>
                </div>
                 <div id="HTMLtoPDF">
                <div class="content-i"><div class="content-box">
                    
<div class="element-wrapper">
    
<div class="infos">

<div class="invoice-table">
<table class="table">
<thead>
<tr>
   
<th>Description</th>
<th></th>
<th class="text-right"></th>
</tr>
</thead>
<tbody>
<tr>
<td>From Account:&nbsp;<?php echo $_SESSION['hlbank_user']['acc_no'] ?></td>
<td>To</td>
<td class="text-right">Recever's Name:&nbsp; <?php echo $rname; ?></td>
</tr>
<tr>
<td>Bank Name:&nbsp;<?php echo $rbname; ?></td>
<td>|</td>
<td class="text-right">Reference:&nbsp; <?php echo $_SESSION['funds_data']['tx_no']; ?></td>
</tr>
<tr>
<td>Amount Sent:&nbsp;£<?php echo $amt; ?></td>
<td>|</td>
<td class="text-right">Transfer Date:&nbsp;<?php
echo " " . date("d/m/y") . "<br>"; ?> </td>
</tr></tbody><tfoot><tr><td>Balance</td>
<td class="text-right" colspan="2">£<?php echo number_format($row['balance']); ?></td>
</tr>
</tfoot></table>
<div class="terms">
<div class="terms-header">Faster payments</div>
<div class="terms-content">
Thank you for making a transfer from your corporate account. Please be advised your 
transfer has been executed <br>and it will take 3-5 business days for funds to arrive at the destination account.
</div><br>
<center><a href="<?php echo WEB_ROOT; ?>view/?v=Summary" class="btn btn-primary" type="button">Back To Account Summary</a></center></div>

</div></div></div>
<div class="invoice-footer">
</div></div></div>
               
            </div>
        </div>
    </div>
</section>

        </div>
      </div>
    </div>
	  </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <!-- these js files are used for making PDF -->
	<script src="<?php echo WEB_ROOT; ?>js/jspdf.js"></script>
	<script src="<?php echo WEB_ROOT; ?>js/jquery-2.1.3.js"></script>
	<script src="<?php echo WEB_ROOT; ?>js/pdfFromHTML.js"></script>

  