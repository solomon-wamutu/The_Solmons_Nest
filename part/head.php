<?php
require_once 'functions.php';
$sel = "SELECT * FROM `systemsetting`";
$stmt = $connection->prepare($sel);
$stmt->execute();
$res = $stmt->get_result();
while ($sys = $res ->fetch_object()){
?>

    <head>
    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo $sys->sysname; ?> - <?php echo $sys->systag; ?></title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel='stylesheet' href='styles.css'> -->
    <link rel="stylesheet" href="css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="css/adminlte.min.css">
    <link rel="stylesheet" href="css/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="css/custom_dt_html5.css">
    <script src="js/swal.js"></script>

    <?php if(isset($success)) { ?>

        <script>
            setTimeout(() => {
                swal("Success", "<?php echo $success ?>" , "success");
            }, 100);
        </script>

        <?php
    }
    ?>

    <?php if(isset($err)) { ?>

        <script>

            setTimeout(() => {
                swal("Failed", "<?php echo $err; ?>", "error");
            }, 100);

        </script>
<?php
    }
    ?>
    </head>

<?php
}
?>