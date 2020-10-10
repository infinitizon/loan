<?php
session_start();
?>

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
    <h4 class="card-header py-4">
                        <h1>Hello <?php echo $_SESSION['ticket_user']['fname']; ?>,</h4>  
                        </div>
                     <div class="card-body">
                            <?php if (isset($_SESSION['ticket_success'])): ?>
                                <?php echo $_SESSION['ticket_success']; ?>
                                <a href="index.php">Go back</a>
                                <?php unset($_SESSION['ticket_success']);?>
                                <?php exit(); ?>
                            <?php endif; ?>
                        </p>
                 

<div class="if6_tabnav section">
</div>
</div>
</div>

</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


