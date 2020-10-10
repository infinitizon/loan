<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <div class="jumbotron" style="margin-top: 15%;">
                        <h1>Hello <?php echo $_SESSION['ticket_user']['fname']; ?>,</h1>    
                        <p>
                            <?php if (isset($_SESSION['ticket_success'])): ?>
                                <?php echo $_SESSION['ticket_success']; ?>
                                <a href="index.php">Go back</a>
                                <?php unset($_SESSION['ticket_success']);?>
                                <?php exit(); ?>
                            <?php endif; ?>
                        </p>
                    </div>
                </div>
                <div class="col-sm-3"></div>
            </div>
        </div>
    </body>
</html>
