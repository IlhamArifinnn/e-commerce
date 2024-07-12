<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Projek UAS ECommerce</title>

    @include('admin.links')

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <!-- Site wrapper -->
    <div class="wrapper">

        @include('admin.header')

        @include('admin.sidebar')


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Profil </h1>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <!-- Default box -->
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Profile </h3>
                                </div>
                                <div class="card-body">
                                    <div class="container">
                                        <h4 class="text-center mt-4">Selamat Datang Di Website Sederhana
                                            E-Commerce<br />Projek
                                            UAS
                                            Web
                                            2 - Kelompok</h4>
                                        <div class="row justify-content-center mt-5">
                                            <div class="col-md-5">
                                                <div class="card">
                                                    <h5 class="card-title text-center mt-3">Informasi Pengguna</h5>
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                @auth
                                                                    <ul class="list-group list-group-flush">
                                                                        <li class="list-group-item"><strong>Nama :</strong>
                                                                            {{ Auth::user()->name }}</li>
                                                                        <li class="list-group-item"><strong>Email :</strong>
                                                                            {{ Auth::user()->email }}</li>
                                                                        <li class="list-group-item"><strong>Role
                                                                                :</strong> {{ Auth::user()->role }}</li>
                                                                    </ul>
                                                                @endauth
                                                                @guest
                                                                    <li>
                                                                        <strong colspan="3">Anda belum masuk.</strong>
                                                                    </li>
                                                                @endguest
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    Projek UAS - Aplikasi Web Sederhana E-Commerce
                                </div>
                                <!-- /.card-footer-->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                </div>

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->


        @include('admin.footer')
    </div>
    <!-- ./wrapper -->
    @include('admin.scripts')
</body>

</html>
