<?php
    session_start();

    if($_SESSION['status'] != 'logins'){
        header("Location:logs/login.php");
    }

    include 'config/config.php';
    include 'page/page.php';

    $idP = $_SESSION['idPopulasaun'];
    $sql = mfa(mq("SELECT * FROM tb_populasaun WHERE id_populasaun='$idP'"));
    $nrnP = $sql['nrn_populasaun'];
 ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Ililai</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Link Datatabels -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <style type="text/css">
        *{
            font-family: Times New Roman;
        }

        table {
            font-size: 13px;
        }
    </style>

</head>

<body id="page-top">