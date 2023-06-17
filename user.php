<?php
session_start();
// require_once 'header.php';
require_once 'functions.php';
    $userstr = 'Welcome Guest';
        if (isset($_SESSION['user']))
            {
                $user= $_SESSION['user'];
            //     $loggedin = TRUE;
            //     $userstr = "Logged in as: $user";
            //     $result = queryMysql("SELECT * FROM profiles WHERE user='$user'");
            }
        else{
            $user = queryMysql("SELECT * FROM profiles WHERE user='$user'");
            $user = isset($_GET['user']) ? $_GET['user'] : "";
            $loggedin = FALSE;
            $user= $_GET['$user'];
            $user= $_SESSION['$user'];
            $loggedin = TRUE;
            $userstr = "Logged in as: $user";
            
        } 

       $sel = "SELECT * FROM `systemsetting`";
        $stmt = $connection->prepare($sel);
        $stmt->execute();
        $res = $stmt->get_result(); 

        $sel = "SELECT * FROM `friends`";
        $stmt = $connection->prepare($sel);
        $stmt->execute();
        $res = $stmt->get_result();

        
        // $user= $_SESSION['user'];
            
        
?>
