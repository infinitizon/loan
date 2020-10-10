<?php include 'header.php'; ?>

<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
        <h2>Tickets</h2>
        
        
        <?php $result = $ticket->getOpen();?>
        <?php if($result != NULL): ?>
      
      
    
     
        <table class="table">
            <thead>
                <tr>
                    <th>User</th>
                    <th>Subject</th>
                    <th>Status</th>
                    <th>Last Updated</th>
                </tr>
            </thead>
            <?php while ($row = $result->fetch_assoc()): ?>

                <tbody>
                    <tr class='clickable-row' data-href='ticket_request.php?id=<?php echo $row['id']?>&user_id=<?php echo $row['user_id']?>'>
                        <td><?php echo $row['fname'] ?>
                            <?php echo $row['lname'] ?>
                        </td>
                        <td>
                            <?php echo $row['subject'] ?>
                        </td>
                        <td>
                            <?php if ($row['is_open'] == 0): ?>
                                <span style="border: 2px solid #ccc; border-radius: 3px; background-color: #fff;"> Open</span>
                            <?php else:?>
                                  <span style="border: 2px solid #9bb6e6; border-radius: 3px; background-color: #c5d2e8; color: #fff; font-weight: bold;"> Resolved</span>
                        <?php endif; ?>

                        </td>
                        <td>
                            <?php echo $row['created'] ?>
                        </td>
                    </tr>


                </tbody>

            <?php endwhile; ?>
        </table>

         <?php else:?>
        <hr>
        <h5>Data is not available!</h5>
        <?php endif;?>

    </div>
    <div class="col-md-1"></div>
</div>



<?php include 'footer.php'; ?>

