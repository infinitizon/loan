<?php
include 'TicketClass.php';

$ticket = new TicketClass();
$ticket->getUser();
?>
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
        