<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk</title>
    @include('admin.links')
</head>

<body>
    <div class="wrapper">
        @include('admin.header')
        @include('admin.sidebar')

        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Detail Produk</h1>
                        </div>
                    </div>
                </div>
            </section>

            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="kode">Kode</label>
                                        <input type="text" class="form-control" id="kode"
                                            value="{{ $produk->kode }}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text" class="form-control" id="nama"
                                            value="{{ $produk->nama }}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="harga">Harga</label>
                                        <input type="number" class="form-control" id="harga"
                                            value="{{ $produk->harga }}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="stok">Stok</label>
                                        <input type="number" class="form-control" id="stok"
                                            value="{{ $produk->stok }}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="rating">Rating</label>
                                        <input type="number" class="form-control" id="rating"
                                            value="{{ $produk->rating }}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="minimal">Min Stok</label>
                                        <input type="number" class="form-control" id="minimal"
                                            value="{{ $produk->minimal }}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="jenis_produk_id">Jenis Produk</label>
                                        <input type="text" class="form-control" id="jenis_produk_id"
                                            value="{{ $produk->jenisProduk->nama }}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="deskripsi">Deskripsi</label>
                                        <textarea class="form-control" id="deskripsi" readonly>{{ $produk->deskripsi }}</textarea>
                                    </div>
                                    <a href="{{ route('produks.index') }}" class="btn btn-secondary">Kembali</a>
                                </div>
                                <div class="card-footer">
                                    Projek UAS - Aplikasi Web E-Commerce
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        @include('admin.footer')
    </div>
    @include('admin.scripts')
</body>

</html>
