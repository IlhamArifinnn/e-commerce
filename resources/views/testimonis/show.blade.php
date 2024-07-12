<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Testimoni - Show</title>

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
                            <h1>Detail Testimoni</h1>
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
                                    <h3 class="card-title">Detail Testimoni</h3>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="id">ID</label>
                                        <input type="text" class="form-control" id="id"
                                            value="{{ $testimoni->id }}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="tanggal">Tanggal</label>
                                        <input type="date" class="form-control" id="tanggal"
                                            value="{{ $testimoni->tanggal }}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="nama_tokoh">Nama Tokoh</label>
                                        <input type="text" class="form-control" id="nama_tokoh"
                                            value="{{ $testimoni->nama_tokoh }}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="komentar">Komentar</label>
                                        <textarea class="form-control" id="komentar" readonly>{{ $testimoni->komentar }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="rating">Rating</label>
                                        <input type="text" class="form-control" id="rating"
                                            value="{{ $testimoni->rating }}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="produk_id">Produk</label>
                                        <input type="text" class="form-control" id="produk_id"
                                            value="{{ $testimoni->produk->nama }}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="kategori_tokoh_id">Kategori Tokoh</label>
                                        <input type="text" class="form-control" id="kategori_tokoh_id"
                                            value="{{ $testimoni->kategoriTokoh->nama }}" readonly>
                                    </div>
                                    <a href="{{ route('testimonis.index') }}" class="btn btn-primary">Kembali</a>
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
