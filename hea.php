<?php
require_once 'functions.php';
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

<!-- <link rel='stylesheet' href='styles.css'> -->
<link rel="stylesheet" href="css/OverlayScrollbars.min.css">
<link rel="stylesheet" href="css/all.min.css">
<link rel="stylesheet" href="css/icheck-bootstrap.min.css">
<link rel="stylesheet" href="css/adminlte.min.css">
<link rel="stylesheet" href="css/dataTables.bootstrap4.css">
<link rel="stylesheet" href="css/robust.css">
<link rel="stylesheet" href="css/custom_dt_html5.css">
<script src="dist/js/swal.js"></script>
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
        

        <script src="dist/js/bundle.js"></script>
        <script src='javascript.js'></script>
<script src='jquery-2.2.4.min.js'></script>
<script src='jquery.mobile-1.4.5.min.js'></script>
</body>
</html>
<?php
}
?>