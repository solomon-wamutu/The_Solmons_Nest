<?php
session_start();
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
<?php
// require_once 'functions.php';
       $sel = "SELECT * FROM `systemsetting`";
        $stmt = $connection->prepare($sel);
        $stmt->execute();
        $res = $stmt->get_result();
while ($sys= $res->fetch_object()) {
    ?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title><?php echo $sys->sysname; ?> - <?php echo $sys->systag; ?></title>
    <link rel='stylesheet' href='jquery.mobile-1.4.5.min.css'>
    <link rel="icon" type="image/png" sizes="16x16" href="img/<?php echo $sys->logo; ?>">

<link rel="stylesheet" href="css/robust.css">
<link rel="stylesheet" href="css/logs.css">

<style>
    #robin {
position:relative;
border:0px;
margin-left:-6px;
margin-right:0px;
top:17px;
-moz-box-shadow :0px 0px 0px;
-webkit-box-shadow:0px 0px 0px;
box-shadow:0px 0px 0px;
width: 39px;
}
</style>
<!-- <title>Solomon's Nest: $userstr</title> -->
</head>
<body>
    <!-- <?php
        // if ($loggedin)
        // {
        ?> -->

        <nav class="navbar navbar-lg navbar-expand-lg navbar-transparant navbar-dark navbar-absolute w-100">
            <div class="container">
                <a class="navbar-brand" href="index.php"><?php echo $sys->sysname; ?></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav ml-auto">
                        <!-- <li class="nav-item active">
                            <a class="nav-link" target="_blank" href="admin/pages_index.php">Admin Portal</a> -->
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" target="_" href="index.php">Home</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" target="_blank" href="signup.php">Sign up</a>
                        </li>
                    </ul>
                    <!-- <button class="btn btn-danger" href="login.php">Log in</button> -->
                    <?php require_once("login.php"); ?>
                    <button class="btn btn-danger" onclick = "document.getElementById('scaleUp').style.display='block'" style="width:auto;">Login</button>

                </div>
            </div>
        </nav>

        <div class="intro py-5 py-lg-9 position-relative text-white">
            <div class="bg-overlay-gray">
                <img src="img/tn.png" class="img-fluid img-cover"/>
            </div>
            <div class="intro-content py-6 text-center">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12 col-sm-10 col-md-8 col-lg-6 mx-auto text-center">
                            <h1 class="my-3 display-4 d-none d-lg-inline-block"><?php echo "Welcome to"." " .$sys->sysname; ?></h1>
                            <p class="lead mb-3">
                                <?php echo $sys->systag; ?>
                            </p>
                            <br>
                            <a class="btn btn-success btn-lg mr-lg-2 my-1" target="_blank" href="head.php" role="button">Get started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        
        <!-- <?php 
        // include("part/footer.php"); ?> -->
        <?php
        }
        ?>
 
<!-- <div class='center'>
        <a data-role='button' data-inline='true' data-icon='home'
        data-transition='slide' href='index.php'>Home</a>
        <a data-role='button' data-inline='true' data-icon='plus'
        data-transition="slide" href='signup.php'>Sign Up</a>
        <a data-role='button' data-inline='true' data-icon='check'
        data-transition="slide" href='login.php'>Log In</a>
        </div>
        <p class='info'>(You must be logged in to use this app)</p> -->