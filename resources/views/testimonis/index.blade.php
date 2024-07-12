<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Testimoni - Index</title>

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
                            <h1>Testimoni</h1>
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
                                    <h3 class="card-title">Daftar Testimoni</h3>
                                    <div class="card-tools">
                                        <a href="{{ route('testimonis.create') }}" class="btn btn-success">Tambah
                                            Testimoni</a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Tanggal</th>
                                                <th>Nama Tokoh</th>
                                                <th>Komentar</th>
                                                <th>Rating</th>
                                                <th>Produk</th>
                                                <th>Kategori Tokoh</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($testimonis as $testimoni)
                                                <tr>
                                                    <td>{{ $testimoni->id }}</td>
                                                    <td>{{ $testimoni->tanggal }}</td>
                                                    <td>{{ $testimoni->nama_tokoh }}</td>
                                                    <td>{{ $testimoni->komentar }}</td>
                                                    <td>{{ $testimoni->rating }}</td>
                                                    <td>{{ $testimoni->produk->nama }}</td>
                                                    <td>{{ $testimoni->kategoriTokoh->nama }}</td>
                                                    <td>
                                                        <a href="{{ route('testimonis.show', $testimoni) }}"
                                                            class="btn btn-info">Lihat</a>
                                                        <a href="{{ route('testimonis.edit', $testimoni) }}"
                                                            class="btn btn-warning">Edit</a>
                                                        <form action="{{ route('testimonis.destroy', $testimoni) }}"
                                                            method="POST" style="display:inline;"
                                                            onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    Projek UAS - Aplikasi Web E-Commerce
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
