<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Admin</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    @vite(['resources/admin/plugins/fontawesome-free/css/all.min.css', 'resources/admin/css/adminlte.min.css', 'resources/admin/css/admin.css'])
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <x-includes.top-navbar />

        <!-- Main Sidebar Container -->
        <x-includes.sidebar />

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Page Heading -->
            @if (isset($header))
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            {{ $header }}
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>
            @endif


            {{ $slot }}
        </div>
        <!-- /.content-wrapper -->

        <x-includes.control-sidebar />

        <x-includes.footer />
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    @vite(['resources/admin/plugins/jquery/jquery.min.js', 'resources/admin/plugins/bootstrap/js/bootstrap.bundle.min.js', 'resources/admin/js/adminlte.js', 'resources/admin/plugins/chart.js/Chart.min.js', 'resources/admin/js/pages/dashboard3.js'])

</body>

</html>
