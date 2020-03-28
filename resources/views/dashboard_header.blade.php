<!DOCTYPE html>
<html lang="en" data-ng-app="app">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Personal Finance System</title>

    <!-- Custom fonts for this template-->
    <link href="/dashboard/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/dashboard/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/plugins/datatables/DataTables-1.10.20/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="/plugins/datatables/DataTables-1.10.20/css/dataTables.bootstrap4.css"/>

    <!-- Angular JS -->
    {{--<script src="/plugins/angularjs/1_5_0/angular.js"></script>
    <script src="/plugins/angularjs/1_5_0/angular-route.js"></script>
    <script src="/js/angular_ui_controller.js"></script>--}}


    <script src="/dashboard/vendor/jquery/jquery.min.js"></script>
    <script src="/dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/dashboard/vendor/jquery-easing/jquery.easing.min.js"></script>

    <script type="text/javascript" src="/plugins/datatables/DataTables-1.10.20/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="/plugins/datatables/DataTables-1.10.20/js/dataTables.bootstrap4.js"></script>
</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">
    <!-- SIDE BAR MENU -->
@include('dashboard_side_menu')
<!-- END SIDE BAR MENU -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
        @include('dashboard_top_bar')
        <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">
