<?php include 'header.php'; ?>
<div class="layout-content">

<div class="container-fluid flex-grow-1 container-p-y">
<h4 class="font-weight-bold py-3 mb-0">Compose</h4>
<div class="text-muted small mt-0 mb-4 d-block breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
<li class="breadcrumb-item">Email</li>
<li class="breadcrumb-item active">Compose</li>
</ol>
</div>

<div class="row">
<div class="messages">
<a href="<?php echo WEB_ROOT; ?>ticket_open.php" class="btn btn-primary">Inbox</a>


</div>

<div class="col-6">
<div class="card">
<h4 class="card-header py-4">Compose New message</h4>
<div class="card-body">




<form  method="post" action="" enctype="multipart/form-data" >
 <?php $ticket->submit_ticket('user_id', 'subject', 'depart', 'urgency', 'msg', 'attachments'); ?>
            <?php if (isset($_SESSION['ticket_success'])): ?>
                <script>
                    window.location.href = "ticket_success.php";
                </script>
            <?php endif; ?>


		
		 <input type="hidden" name="user_id" value="<?php echo $_SESSION['ticket_user']['id']; ?>">
		 
		<input type="hidden" name="name"  value="<?php echo $_SESSION['ticket_user']['fname'] . ' ' . $_SESSION['ticket_user']['lname']; ?>">
		<input type="hidden" name="email"  value="<?php echo $_SESSION['ticket_user']['email']; ?>">
		
	<div class="form-group">
<label class="form-label">Subject<em>*</em>:</label>
		<input type="text" name="subject" id="inputSubject" value="<?php
                    if (isset($_POST['subject'])) {
                        echo $_POST['subject'];
                    }
                    ?>" class="form-control" maxlength="35">
	<div class="clearfix"></div>
</div>
		<div class="bline"><label for="CcbjGLakPQqJZFen">Department<em>*</em>:</label>
		   <select name="depart" id="inputDepartment" class="selectpicker" data-style="btn-primary">
		   <option value="Support Team" selected="selected">
                            Support Team
                        </option>

                    </select>

		<br class="bterm"></div>
		
		<div class="bline"><label for="CcbjGLakPQqJZFen">Priority<em>*</em>:</label>
		   <select name="urgency" id="inputPriority" class="selectpicker" data-style="btn-primary">
		   <option value="High">
                            High
                        </option>
                        <option value="Medium" selected="selected">
                            Medium
                        </option>
                        <option value="Low">
                            Low
                        </option>

                    </select>

		<br class="bterm"></div>
		
		<div class="bline"><label for="athXnjGTNeMVHJVK">Message<em>*</em>:</label>
		<textarea name="msg" class="form-control"  placeholder="Write Your Message Here"style="min-height: 100px;" maxlength="500"><?php
                    if (isset($_POST['msg'])) {
                        echo $_POST['msg'];
                    }
                    ?></textarea>
		
		<div class="blineunder textarea-count"><div class="ixl">You have <span>1730</span> characters available.</div></div>
		<br class="bterm"></div>
	
		
			<div class="bline">
				<div class="label">Upload file:</div>
				<input type="file" name="attachments[]" id="inputAttachments" class="ixl followed-by-icon">
				<div class="helptxt" title="Your files will be saved in PDF format. You can upload documents in doc, docx, 
				odt, rtf, txt, xls, xlsx, gif, png or pdf format."></div>
			<br class="bterm"></div>
		
		
		
		
		
<div class="buttonline">
<div class="bgroup1"><div>
<input type="submit"  id="openTicketSubmit" title="Send" 
value="Send" class="btn btn-primary "></div>

</div></div></div>

 
	
</div>


</div>
</div>



</div>
</div>

</div>
</div>

</div>
</div>

