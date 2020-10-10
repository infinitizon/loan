<?php include 'header.php'; ?>
<div class="layout-content">

<div class="container-fluid flex-grow-1 container-p-y">
<h4 class="font-weight-bold py-3 mb-0">Inbox</h4>
<div class="text-muted small mt-0 mb-4 d-block breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
<li class="breadcrumb-item">Email</li>
<li class="breadcrumb-item active">Inbox</li>
</ol>
</div>
<div class="row">

<div class="messages">
<a href="<?php echo WEB_ROOT; ?>ticket.php" class="btn btn-primary">Compose New Message</a>
<hr class="border-light my-4">

			</div>
			
			


<div class="col-xl-12 col-md-12">
<div class="card mb-4">
<h5 class="card-header">Inbox</h5>
<div class="table-responsive">
    <?php $result = $ticket->getOpen();?>
        <?php if($result != NULL): ?>
	
<table class="table table-hover table-borderless">
<thead>
<tr>

	<th class="">Subject </th>
			<th class="">Status</th>
			<th class=""> Last Updated</th>
			<th> Action</th>
		</tr>
		 </thead>
		 <?php while ($row = $result->fetch_assoc()): ?>
		  <tbody>
		 <tr class='clickable-row' data-href='ticket_request.php?id=<?php echo $row['id']?>'>
		
			<td><?php echo $row['subject'] ?></td>
                        
                        <td>
                            <?php if ($row['is_open'] == 0): ?>
                                <span style="border: 2px solid #1a76e8; border-radius: 3px; background-color: #1a76e8;"> Open</span>
                            <?php else:?>
                                  <span style="border: 2px solid #f70f17; border-radius: 3px; background-color: #f70f17; color: 
								  #fff; font-weight: bold;"> Resolved</span>
                        <?php endif; ?>

                        </td>
                        <td>
                            <?php echo $row['created'] ?>
                        </td>
                        
                        <td> <a href="ticket_request.php?id=<?php echo $row['id']?>" class="btn btn-primary btn-round">View Details </a></td>
                    </tr>
	</tbody>
	 <?php endwhile; ?>
        </table>

         <?php else:?>
        <hr>
        <h5>Data is not available!</h5>
        <?php endif;?>
		</table></div>



			</div>
		</div>
	</div>



 
</div>
</div>
</div>	
</div>

<div class="if6_tabnav section">
</div>
</div>
</div>

</section>
<div class="if6_outer if6_contactstage hide100" aria-hidden="false">


</div>
<script>
    jQuery(document).ready(function($) {
        $(".clickable-row").click(function() {
            window.location = $(this).data("href");
        });
    });
</script>
