<?php
// session_start();
require_once 'header.php';
require_once 'functions.php';
    $userstr = 'Welcome Guest';
        if (isset($_SESSION['user']))
            {
                $user= $_SESSION['user'];
                $loggedin = TRUE;
                $userstr = "Logged in as: $user";
            }
        else $loggedin = FALSE;
?>
