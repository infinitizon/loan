<?php
include 'AdminTicketClass.php';

$ticket = new AdminTicketClass();
$ticket->getUser();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css?ver=0.18">
        <style>


            .error{
                background: #ff000063;
                padding: 10px;
                color: #fff;
                font-weight: bold;
            }

            .navbar-expand-lg .navbar-nav .nav-link {
                padding-right: .5rem;
                padding-left: .5rem;
                color: #584b4b;
                font-weight: 500;
            }
            
            .clickable-row{
                cursor: pointer;
            }
        </style>
    </head>
    <body>




        <div class="container-fluid">


            <!-- Navigation -->
            <nav class="navbar navbar-expand-lg  static-top">
                <div class="container">
                    <a class="navbar-brand" href="#">
                        <img src="" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars" style="font-size:24px"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.php">Open Ticket
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Tickets 
                                    <span style="font-weight: bold;background: #f9efef;border-radius: 50%;padding: 5px">
                                        <i class="fa fa-circle-o" aria-hidden="true"></i>
                                        <?php echo $ticket->tickets(); ?>
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Closed

                                    <span style="font-weight: bold;background: #f9efef;border-radius: 10px;padding: 5px">

                                        <?php echo $ticket->closed(); ?>
                                    </span>
                                </a>
                            </li>

                        </ul>

                    </div>

                </div>
            </nav>