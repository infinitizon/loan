<?php



/*
  Check if a session user id exist or not. If not set redirect
  to login page. If the user session id exist and there's found
  $_GET['logout'] in the query string logout the user
 */

function checkUser() {
    // if the session id is not set, redirect to login page
    if (!isset($_SESSION['hlbank_user'])) {
        header('Location: ' . WEB_ROOT . 'home.php');
        exit;
    }

   
}

?>