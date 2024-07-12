<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Testimoni - Create</title>

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
                            <h1>Tambah Testimoni</h1>
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
                                    <h3 class="card-title">Form Tambah Testimoni</h3>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('testimonis.store') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="tanggal">Tanggal</label>
                                            <input type="date" name="tanggal" class="form-control" id="tanggal"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <label for="nama_tokoh">Nama Tokoh</label>
                                            <input type="text" name="nama_tokoh" class="form-control" id="nama_tokoh"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <label for="komentar">Komentar</label>
                                            <textarea name="komentar" class="form-control" id="komentar" required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="rating">Rating</label>
                                            <input type="number" name="rating" class="form-control" id="rating"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <label for="produk_id">Produk</label>
                                            <select name="produk_id" class="form-control" id="produk_id" required>
                                                @foreach ($produks as $produk)
                                                    <option value="{{ $produk->id }}">{{ $produk->nama }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="kategori_tokoh_id">Kategori Tokoh</label>
                                            <select name="kategori_tokoh_id" class="form-control" id="kategori_tokoh_id"
                                                required>
                                                @foreach ($kategoriTokohs as $kategoriTokoh)
                                                    <option value="{{ $kategoriTokoh->id }}">{{ $kategoriTokoh->nama }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </form>
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
