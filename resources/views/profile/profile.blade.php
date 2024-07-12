<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Projek 1 - Puskesmas</title>

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
                            <h1>Dashboard E-Commerce</h1>
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
                                    <h3 class="card-title">Profil</h3>
                                </div>
                                <div class="card-body">
                                    <table class="table table-striped">
                                        @auth
                                            <tr>
                                                <th>Nama</th>
                                                <td>{{ Auth::user()->name }}</td>
                                            </tr>
                                            <tr>
                                                <th>Email</th>
                                                <td>{{ Auth::user()->email }}</td>
                                            </tr>
                                            <tr>
                                                <th>Role</th>
                                                <td>{{ Auth::user()->role }}</td>
                                            </tr>
                                        @endauth
                                        @guest
                                            <tr>
                                                <td colspan="3">Anda belum masuk.</td>
                                            </tr>
                                        @endguest
                                    </table>
                                </div>
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
