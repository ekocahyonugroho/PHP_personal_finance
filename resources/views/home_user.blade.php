<!DOCTYPE html>
<html lang="en" data-ng-app="app">

<head>

@include('dashboard_header')

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
            <div class="container-fluid" data-ng-view></div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Your Website 2019</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

@include('dashboard_footer')

</body>

</html>
