<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Registration Page</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    @vite(['resources/admin/plugins/fontawesome-free/css/all.min.css', 'resources/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css', 'resources/admin/css/adminlte.min.css'])

</head>

<body class="hold-transition register-page">
    <div class="register-box">
        <div class="register-logo">
            <a href="../../index2.html"><b>Admin</b>LTE</a>
        </div>

        <div class="card">
            {{ $slot }}
        </div><!-- /.card -->
    </div>
    <!-- /.register-box -->

    <!-- jQuery -->
    @vite(['resources/admin/plugins/jquery/jquery.min.js', 'resources/admin/plugins/bootstrap/js/bootstrap.bundle.min.js', 'resources/admin/js/adminlte.min.js'])
</body>

</html>
