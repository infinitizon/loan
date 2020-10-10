<?php include 'header.php'; ?>


<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
        <h2>Reply</h2>
        <hr>

        <?php if (isset($_GET['id'])): ?>
            <?php $result = $ticket->getTicketMsg($_GET['id']); ?>
            <?php while ($row = $result->fetch_assoc()): ?>

                <p class="text-right"> <a href="#" onclick="mask_resolved(<?php echo $_GET['id'];?>, <?php echo $_GET['user_id'];?>)" style="font-weight: bold; border: 1px solid #2980b3; padding: 10px; color: #2980b3;">Mark As resolved</a></p>

                <h4><?php echo $row['subject']; ?></h4>
                <p>
                    <?php echo $row['msg']; ?>
                </p>
                <div>
                    <?php if ($row['attachs'] != ""): ?>
                        <strong>Attachments</strong><br>
                        <?php $files = explode(",", $row['attachs']); ?>
                        <?php foreach ($files as $file): ?>
                            <a href="../TicketAttachments/<?php echo $file; ?>" target="__blank"><img src="../TicketAttachments/<?php echo $file; ?>" style="width: 70px; height: auto;border: 1px solid #000;margin: 5px;"></a>
                        <?php endforeach; ?>
                    <?php endif; ?>


                </div><hr>

                <div style="margin-left: 6%;">
                    <?php if ($ticket->getRepyTicketMsg($row['id']) != FALSE): ?>

                        <?php $repy_query = $ticket->getRepyTicketMsg($row['id']); ?>
                        <?php while ($reply_data = $repy_query->fetch_assoc()): ?>



                            <?php if ($reply_data['user'] == 'Admin'): ?>
                                <div style="margin-left: -3%;">
                                    <strong class="badge badge-secondary" style="background: #47a4f7;">#Reply by Support team / <?php echo $reply_data['date_time'] ?></strong>
                                    <p>
                                        <?php echo $reply_data['message']; ?>   

                                    </p>


                                    <div>
                                        <?php if ($reply_data['attachs'] != ""): ?>
                                            <strong>Attachments</strong><br>
                                            <?php $files = explode(",", $reply_data['attachs']); ?>
                                            <?php foreach ($files as $file): ?>
                                                <a href="../TicketAttachments/<?php echo $file; ?>" target="__blank"><img src="../TicketAttachments/<?php echo $file; ?>" style="width: 70px; height: auto;border: 1px solid #000;margin: 5px;"></a>
                                            <?php endforeach; ?>
                                        <?php endif; ?>


                                    </div><hr>
                                </div>

                            <?php else: ?>

                                <strong class="badge badge-secondary">#Question / <?php echo $reply_data['date_time'] ?></strong>
                                <p>
                                    <?php echo $reply_data['message']; ?>
                                    <a href="request_.php?ticket_id=<?php echo $row['id']; ?>&reply_id=<?php echo $reply_data['id']; ?>&user_id=<?php echo $reply_data['user_id']; ?>">Reply</a>
                                </p>


                                <div>
                                    <?php if ($reply_data['attachs'] != ""): ?>
                                        <strong>Attachments</strong><br>
                                        <?php $files = explode(",", $reply_data['attachs']); ?>
                                        <?php foreach ($files as $file): ?>
                                            <a href="../TicketAttachments/<?php echo $file; ?>" target="__blank"><img src="../TicketAttachments/<?php echo $file; ?>" style="width: 70px; height: auto;border: 1px solid #000;margin: 5px;"></a>
                                        <?php endforeach; ?>
                                    <?php endif; ?>


                                </div>

                                <?php if ($ticket->final_solution($reply_data['id']) != FALSE): ?>

                                    <?php $__query = $ticket->final_solution($reply_data['id']); ?>
                                    <?php while ($__data = $__query->fetch_assoc()): ?>

                                        <div style="margin-left: 3%;">
                                            <strong class="badge badge-secondary" style="background: #47a4f7;">#Reply by Support team / <?php echo $__data['date_time'] ?></strong>
                                            <p>
                                                <?php echo $__data['message']; ?>
                                            </p>


                                            <div>
                                                <?php if ($__data['attachs'] != ""): ?>
                                                    <strong>Attachments</strong><br>
                                                    <?php $files = explode(",", $__data['attachs']); ?>
                                                    <?php foreach ($files as $file): ?>
                                                        <a href="../TicketAttachments/<?php echo $file; ?>" target="__blank"><img src="../TicketAttachments/<?php echo $file; ?>" style="width: 70px; height: auto;border: 1px solid #000;margin: 5px;"></a>
                                                    <?php endforeach; ?>
                                                <?php endif; ?>


                                            </div><hr>
                                        </div>


                                    <?php endwhile; ?>
                                <?php endif; ?>



                            <?php endif; ?>


                        <?php endwhile; ?>


                    <?php endif; ?>
                </div>


                <?php if ($ticket->reply_ticket('user_id', 'ticket_id', 'user', 'msg', 'attachments') != ""): ?>

                    <script>
                        window.location.href = window.location.href;
                    </script>

                <?php endif; ?>



                <form method="post" action="" enctype="multipart/form-data" role="form">
                    <input type="hidden" name="user_id" value="<?php echo $_GET['user_id']; ?>">
                    <input type="hidden" name="user" value="Admin">
                    <input type="hidden" name="ticket_id" value="<?php echo $_GET['id']; ?>">

                    <div class="form-group">
                        <label for="inputMessage" style="font-weight: bold;">Still have question?</label>
                        <textarea name="msg" class="form-control" style="min-height: 300px;" maxlength="500"><?php
                            if (isset($_POST['msg'])) {
                                echo $_POST['msg'];
                            }

                            if ($row['is_open'] == 1) {
                                echo "Ticket number #" . $row['id'] . " has been closed if you still have questions create another ticket.";
                            }
                            ?></textarea>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-12">
                            <label for="inputAttachments">Attachments(Optional)</label>
                        </div>
                        <div class="col-sm-9">
                            <input type="file" name="attachments[]" id="inputAttachments" class="form-control" multiple="multiple">
                            <div id="fileUploadsContainer"></div>
                        </div>

                        <div class="col-xs-12 ticket-attachments-message text-muted">
                            Allowed File Extensions: .jpg, .gif, .jpeg, .png
                        </div>
                    </div>

                    <p class="text-center">
                        <input type="submit" id="openTicketSubmit" value="Submit" class="btn btn-primary">
                    </p>
                </form>
            <?php endwhile; ?>

        <?php endif ?>




    </div>
    <div class="col-md-1"></div>
</div>



<?php include 'footer.php'; ?>

