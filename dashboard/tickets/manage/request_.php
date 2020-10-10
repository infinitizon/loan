<?php include 'header.php'; ?>

<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">

        <?php if (isset($_GET['ticket_id']) && isset($_GET['reply_id'])): ?>


            <?php if ($ticket->reply_ticket__('user_id', 'ticket_id','reply_id', 'user', 'msg', 'attachments') != ""): ?>

              <script>
                    window.location.href = "ticket_success.php";
                </script>

            <?php endif; ?>



            <form method="post" action="" enctype="multipart/form-data" role="form">
                <input type="hidden" name="ticket_id" value="<?php echo $_GET['ticket_id']; ?>">
                <input type="hidden" name="reply_id" value="<?php echo $_GET['reply_id']; ?>">
                <input type="hidden" name="user_id" value="<?php echo $_GET['user_id']; ?>">
                <input type="hidden" name="user" value="Admin">

                <div class="form-group">
                    <label for="inputMessage" style="font-weight: bold;">Still have question?</label>
                    <textarea name="msg" class="form-control" style="min-height: 300px;" maxlength="500"><?php
                        if (isset($_POST['msg'])) {
                            echo $_POST['msg'];
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
        <?php endif; ?>
    </div>
    <div class="col-md-1"></div>
</div>

<?php include 'footer.php'; ?>