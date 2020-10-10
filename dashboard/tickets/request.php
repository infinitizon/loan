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
<div class="card mb-12">
    <?php if (isset($_GET['id'])): ?>
            <?php $result = $ticket->getTicketMsg($_GET['id']); ?>
            <?php while ($row = $result->fetch_assoc()): ?>
<h5 class="card-header">Subject: <?php echo $row['subject']; ?></h5>

                <p>
                  Content:  <?php echo $row['msg']; ?>
                </p>
                <div>
                    <?php if ($row['attachs'] != ""): ?>
                        <strong>Attachments</strong><br>
                        <?php $files = explode(",", $row['attachs']); ?>
                        <?php foreach ($files as $file): ?>
                            <a href="TicketAttachments/<?php echo $file; ?>" target="__blank"><img src="TicketAttachments/<?php echo $file; ?>" style="width: 70px; height: auto;border: 1px solid #000;margin: 5px;"></a>
                        <?php endforeach; ?>
                    <?php endif; ?>


                </div><hr>

                <div style="margin-left: 50%;">
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
                                                <a href="TicketAttachments/<?php echo $file; ?>" target="__blank"><img src="TicketAttachments/<?php echo $file; ?>" style="width: 70px; height: auto;border: 1px solid #000;margin: 5px;"></a>
                                            <?php endforeach; ?>
                                        <?php endif; ?>


                                    </div><hr>
                                </div>

                            <?php else: ?>

                                <strong class="badge badge-secondary">#Replied on / <?php echo $reply_data['date_time'] ?></strong>
                                <p>
                                    <?php echo $reply_data['message']; ?>
                                </p>


                                <div>
                                    <?php if ($reply_data['attachs'] != ""): ?>
                                        <strong>Attachments</strong><br>
                                        <?php $files = explode(",", $reply_data['attachs']); ?>
                                        <?php foreach ($files as $file): ?>
                                            <a href="TicketAttachments/<?php echo $file; ?>" target="__blank"><img src="TicketAttachments/<?php echo $file; ?>" style="width: 70px; height: auto;border: 1px solid #000;margin: 5px;"></a>
                                        <?php endforeach; ?>
                                    <?php endif; ?>


                                </div>

                                <?php if ($ticket->final_solution($reply_data['id']) != FALSE): ?>

                                    <?php $__query = $ticket->final_solution($reply_data['id']); ?>
                                    <?php while ($__data = $__query->fetch_assoc()): ?>

                                        <div style="margin-left: 25%;">
                                            <strong class="badge badge-secondary" style="background: #47a4f7;">#Reply by Support team / <?php echo $__data['date_time'] ?></strong>
                                            <p>
                                                <?php echo $__data['message']; ?>
                                            </p>


                                            <div>
                                                <?php if ($__data['attachs'] != ""): ?>
                                                    <strong>Attachments</strong><br>
                                                    <?php $files = explode(",", $__data['attachs']); ?>
                                                    <?php foreach ($files as $file): ?>
                                                        <a href="TicketAttachments/<?php echo $file; ?>" target="__blank"><img src="TicketAttachments/<?php echo $file; ?>" style="width: 70px; height: auto;border: 1px solid #000;margin: 5px;"></a>
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
                    <input type="hidden" name="user_id" value="<?php echo $_SESSION['ticket_user']['id']; ?>">
                    <input type="hidden" name="user" value="<?php echo $_SESSION['ticket_user']['fname']; ?>">
                    <input type="hidden" name="ticket_id" value="<?php echo $_GET['id']; ?>">

                <div class="bline">
		<label for="athXnjGTNeMVHJVK">Reply<em>*</em>:</label>
                        <textarea  class="form-control"  placeholder="Write Your Message Here"style="min-height: 100px;" maxlength="500" wrap="soft" class="ixl" style="height: 80px;"<?php
                        if ($row['is_open'] == 1) {
                            echo "disabled";
                        }
                        ?> name="msg"  style="min-height: 300px;" maxlength="500"><?php
                            if (isset($_POST['msg'])) {
                                echo $_POST['msg'];
                            }

                            if ($row['is_open'] == 1) {
                                echo "Ticket number #" . $row['id'] . " has been closed if you still have questions create another ticket.";
                            }
                            ?></textarea>
                    <div class="blineunder textarea-count"><div class="ixl">You have <span>1730</span> characters available.</div></div>
		<br class="bterm"></div>

                    <div class="bline">
				<div class="label">Upload file (optional):</div>
                        <div class="col-sm-9">
                            <input type="file" name="attachments[]" id="inputAttachments" class="ixl followed-by-icon" multiple="multiple">
                            <div id="fileUploadsContainer"></div>
                        </div>

                        <div class="col-xs-12 ticket-attachments-message text-muted">
                            Allowed File Extensions: .jpg, .gif, .jpeg, .png
                        </div>
                    </div>

<div class="text-right mt-4">
<button type="submit" id="openTicketSubmit" class="btn btn-primary ml-2"><i class="ion ion-ios-paper-plane"></i>&nbsp; Send</button>


</div>

 
                  
                </form>
            <?php endwhile; ?>

        <?php endif ?>



	

	
</div>

</div>
</div>
</div>





    