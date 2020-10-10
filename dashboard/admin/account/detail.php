<?php
if (!defined('WEB_ROOT')) {
	exit;
}

if (isset($_GET['accId']) && $_GET['accId'] > 0) {
	$accId = $_GET['accId'];
} else {
	header('Location: index.php');
}

$sql = "SELECT u.id, u.fname, u.lname,u.loanstat,u.due, u.dob,u.gender, u.is_active, u.email, u.phone, u.pics,
		a.acc_no, a.type, a.balance,
		ad.address, ad.city, ad.state, ad.zipcode,ad.marital,ad.occupation,ad.company,ad.monthlyincome,ad.purpose,ad.loancategory,ad.lamount,ad.repayment,ad.homeowner,ad.creditstatus,ad.taxid,ad.ssn,ad.loandate,ad.country,ad.empduration,ad.emplphone
        FROM tbl_users u, tbl_accounts a, tbl_address ad
		WHERE u.id = a.user_id AND ad.user_id = u.id
		AND a.id = $accId";
		
$result = mysql_query($sql) or die('Cannot get product. ' . mysql_error());
$row = mysql_fetch_assoc($result);
extract($row);

?>


<div class="content-w"><div class="content-i"><div class="content-box">
<div class="element-wrapper compact pt-4">
<h1 align="center" id="mainHead">User Details</h1>

<form name=f1 action="process.php?action=transaction" enctype="multipart/form-data" method="post" id="frmTransaction">
<h5>Account Holder Name:  <?php echo strtoupper( $fname. ' '. $lname); ?>&nbsp;</h5>
<h5>Gender: <?php echo $gender; ?></h5>
<h5>Date Of Birth: <?php echo $dob; ?></h5>
<h5>Marital Status: <?php echo $marital; ?></h5>
<h5>Occupation: <?php echo $occupation; ?></h5>
<h5>Company:<?php echo $company; ?> </h5>
<h5>Employer Phone: <?php echo $emplphone; ?></h5>
<h5>Employer Duration: <?php echo $empduration; ?> </h5>
<h5>Monthly Income:£<?php echo $monthlyincome; ?></h5>
<h5>Home Owner: <?php echo $homeowner; ?></h5>

   <h5>Email:&nbsp;<a href="mailto: <?php echo $email; ?>"><?php echo $email; ?></a>
   &nbsp;[&nbsp;<a href="<?php echo WEB_ROOT; ?>admin/user/?view=email&userId=<?php echo $id; ?>">Edit Email</a>&nbsp;]</h5>
   <h5>	Phone:&nbsp;<?php echo $phone; ?> &nbsp;[&nbsp;<a href="<?php echo WEB_ROOT; ?>admin/user/?view=phone&userId=<?php echo $id; ?>">Edit phone</a>&nbsp;]</h5>
   
   <h5>Address: <?php echo $address; ?>,<?php echo $city; ?>,<?php echo $state; ?>,<?php echo $zipcode; ?>,<?php echo $country; ?>.</h5>
   <hr>
   <h5>Account Number: <?php echo $acc_no; ?></h5>

   	<input type="hidden" name="user_id" value="<?php echo $id; ?>" />
	<input type="hidden" name="acc_no" value="<?php echo $acc_no; ?>" />
   <h5>Account Balance: £&nbsp; <?php echo $balance; ?></h5>
   <h5>Transaction History:<a href="<?php echo WEB_ROOT; ?>admin/account/?view=statement&accNo=<?php echo $acc_no; ?>">View Transaction History</a></h5>
   <hr>
   <h1 align="center" id="mainHead">Loan Details</h1>

<h5>Amount Requested: £&nbsp; <?php echo $lamount; ?> - <?php echo $loandate; ?></h5>
 <h5>	Loan Status:&nbsp;<?php echo $loanstatus; ?> &nbsp;[&nbsp;<a href="<?php echo WEB_ROOT; ?>admin/user/?view=Loanstatus&userId=<?php echo $id; ?>">Change Loan Status</a>&nbsp;]</h5>
 <h5>Loan Category: <?php echo $loancategory; ?></h5>
<h5>Loan Duration: <?php echo $repayment; ?></h5>
<h5>Loan Purpose: <?php echo $purpose; ?></h5>
<h5>Credit Status: <?php echo $creditstatus; ?></h5>
<h5>Tax Id:  <?php echo $taxid; ?></h5>
<h5>NIN:  <?php echo $ssn; ?></h5>
 <table width="100%" border="0" align="center" cellpadding="5" cellspacing="1" class="entryTable">
  <tr> 
  
  

   	
   	
</td>
   
  </tr>
  
 
  
 <hr> 
   <h3 align="center" id="mainHead"> Fund Account</h3>

 
   <td width="150" class="label">Transaction Type</td>
   <td colspan="2" class="content">
   <select name="type" id="type">
   	<option value="#"> -- select transaction type --</option>
	<option value="credit">Credit Fund</option>
	<option value="debit">Debit Fund</option>
   </select>
   </td>
  </tr>
  
  <tr> 
   <td width="150" class="label">Amount</td>
   <td colspan="2" class="content"><input type="text" name="amt" id="amt" size="10" /> </td>
  </tr>
  
  <tr> 
   <td width="150" class="label">Date of Transfer</td>
   <td colspan="2" class="content"><input type="text" name="dot" id="dot" size="20" />&nbsp; (Format: mm/dd/yyyy)</td>
  </tr>
  
  <tr> 
   <td width="150" class="label">Transfer Description</td>
   <td colspan="2" class="content"><textarea name="desc" id="desc" cols="35" rows="2"></textarea></td>
  </tr>
  
 </table>
 <p align="center"> 
  &nbsp;&nbsp;
  <input name="btnBack" type="button" id="btnBack" value=" Back " onClick="window.history.back();" >
  &nbsp;&nbsp;



  
<input name="btnTxType" type="button" class="btn btn-primary" id="btnTxType" value='Proceed Transaction ' onclick="this.form.target='_blank';return true;"> 



 </p>
</form>
<script language="javascript">
$(document).ready(function(){
	
	var format = function(num){
		var str = num.toString().replace("$", ""), parts = false, output = [], i = 1, formatted = null;
		if(str.indexOf(".") > 0) {
			parts = str.split(".");
			str = parts[0];
		}
		str = str.split("").reverse();
		for(var j = 0, len = str.length; j < len; j++) {
			if(str[j] != ",") {
				output.push(str[j]);
				if(i%3 == 0 && j < (len - 1)) {
					output.push(",");
				}
				i++;
			}
		}
		formatted = output.reverse().join("");
		return("$" + formatted + ((parts) ? "." + parts[1].substr(0, 2) : ""));
	};
	
	var isDate = function(txtDate) {
		var currVal = txtDate;
		if(currVal == '') return false;	
		var rxDatePattern = /^(\d{1,2})(\/|-)(\d{1,2})(\/|-)(\d{4})$/; //Declare Regex
		var dtArray = currVal.match(rxDatePattern); // is format OK?
		if (dtArray == null) return false;
		//Checks for mm/dd/yyyy format.
		dtMonth = dtArray[1];
		dtDay= dtArray[3];
		dtYear = dtArray[5];        
	
		if (dtMonth < 1 || dtMonth > 12) return false;
		else if (dtDay < 1 || dtDay> 31) return false;
		else if ((dtMonth==4 || dtMonth==6 || dtMonth==9 || dtMonth==11) && dtDay ==31) 
			return false;
		else if (dtMonth == 2) 
		{
			var isleap = (dtYear % 4 == 0 && (dtYear % 100 != 0 || dtYear % 400 == 0));
			if (dtDay> 29 || (dtDay ==29 && !isleap)) return false;
		}
		return true;
	};
	
	$('#amt').keyup(function(e){
		$(this).val(format($(this).val()));
	});
	
	$('#btnTxType').click(function() {
		var ttype = $("#type").val();
		if(ttype == '#') {
			alert('Select Transaction Type');
			$("#type").focus();
			return false;
		}
		var amt = $("#amt").val();
		if(amt == '') {
			alert('Please insert transaction amount.');
			$("#amt").focus();
			return;
		}
		/*
		if($.isNaN(amt)) {
			alert('Invalid amount. Please insert amount as integer.');
			$("#amt").focus();
			return;
		}
		*/
		
		var dot = $("#dot").val();
		if(dot == '') {
			alert('Please insert Date of Transaction.');
			$("#dot").focus();
			return;
		}
		if(!isDate(dot)) {
			alert('Invalid Date.');
			$("#dot").focus();
			return;
		}
		var desc = $("#desc").val();
		if(desc == '') {
			alert('Please insert transaction description.');
			$("#desc").focus();
			return;
		}
		$('#frmTransaction').submit();
	});

});//ready

</script>
