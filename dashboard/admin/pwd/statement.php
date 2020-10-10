<?php
if (!defined('WEB_ROOT')) {
	exit;
}

if (isset($_GET['accNo']) && $_GET['accNo'] > 0) {
	$acc_no = $_GET['accNo'];
} else {
	header('Location: index.php');
}

$sql = "SELECT * FROM tbl_transaction WHERE to_accno = $acc_no ORDER BY id DESC LIMIT 20";
$result = dbQuery($sql);

?> 
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

        <script>


                                                function delete_me(id) {
                                                    if (ConfirmDelete() == true) {
                                                        //check_user_email_exists
                                                        var path = "delete-statement.php";
                                                        $.ajax({
                                                            type: "POST",
                                                            url: path,
                                                            data: {
                                                                id: id
                                                            },
                                                            success: function(res) {
                                                                //success delete
                                                                if(res == "success"){
                                                                      console.log(res);
                                                                    window.location.reload();
                                                                }
                                                              
                                                            }
                                                        });



                                                    }
                                                }


                                                function ConfirmDelete() {
                                                    var x = confirm("Are you sure you want to delete?");
                                                    if (x)
                                                        return true;
                                                    else
                                                        return false;
                                                }
        </script>

<div class="content-w"><div class="content-i"><div class="content-box">
<div class="element-wrapper compact pt-4">

  <!--START - Transactions Table-->
<div class="element-wrapper">
<h6 class="element-header">Account Statement</h6>
<div class="element-box-tp">
<div class="table-responsive">
<div class="form-desc">  View list of all credit/ debit / fund transfer transaction summary by this user </div>
 
<form action="processUser.php?action=addUser" method="post"  name="frmListUser" id="frmListUser">
<table class="table table-padded">
<thead>
<tr>
<th>Transaction Date</th>
<th>Refrence No#</th>
<th>Description</th>
<th>Debit</th>
<th>Credit</th>
<th>Status</th>
<th> Delete </th>

</tr></thead>

<tbody>
<?php
if(dbNumRows($result) > 0) {
while($row = dbFetchAssoc($result)) {
	extract($row);
	if ($i%2) {$class = 'row1';}
	else {$class = 'row2';}
	$i += 1;
?>
  <tr class="<?php echo $class; ?>"> 
<td class="nowrap"><span class="status-pill smaller green"></span><span><?php echo $date; ?></span></td>
<td class="text-center"><?php echo $tx_no; ?></td>
<td><?php echo $description; ?></td>
<td class="text-center"><?php echo $tx_type == "debit" ? "$&nbsp;" . number_format($amount, 2) : ""; ?></td>
<td class="text-center"><?php echo $tx_type == "credit" ? "$&nbsp;" . number_format($amount, 2) : ""; ?></td>
<td class="text-center"><?php echo $status; ?><td>
<td class="text-center"><a href="#" onclick="delete_me(<?php echo $acc_no; ?>)"> delete </a></td>

</tr>

<?php
} // end while

?>
   
<?php 
}//
else {
?> 

   <td colspan="5" align="right">No Transaction / Fund transfer done.</td>
  </tr>
<?php 
}//else
?>
</tbody></table></div></div></div>