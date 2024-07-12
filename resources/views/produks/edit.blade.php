<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>
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
                            <h1>Edit Produk</h1>
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
                                    <form action="{{ route('produks.update', $produk->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <label for="kode">Kode</label>
                                            <input type="text" class="form-control" id="kode" name="kode"
                                                value="{{ $produk->kode }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="nama">Nama</label>
                                            <input type="text" class="form-control" id="nama" name="nama"
                                                value="{{ $produk->nama }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="harga">Harga</label>
                                            <input type="number" class="form-control" id="harga" name="harga"
                                                value="{{ $produk->harga }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="stok">Stok</label>
                                            <input type="number" class="form-control" id="stok" name="stok"
                                                value="{{ $produk->stok }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="rating">Rating</label>
                                            <input type="number" class="form-control" id="rating" name="rating"
                                                value="{{ $produk->rating }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="minimal">Min Stok</label>
                                            <input type="number" class="form-control" id="minimal" name="minimal"
                                                value="{{ $produk->minimal }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="jenis_produk_id">Jenis Produk</label>
                                            <select class="form-control" id="jenis_produk_id" name="jenis_produk_id"
                                                required>
                                                @foreach ($jenisProduks as $jenisProduk)
                                                    <option value="{{ $jenisProduk->id }}"
                                                        {{ $jenisProduk->id == $produk->jenis_produk_id ? 'selected' : '' }}>
                                                        {{ $jenisProduk->nama }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="deskripsi">Deskripsi</label>
                                            <textarea class="form-control" id="deskripsi" name="deskripsi" required>{{ $produk->deskripsi }}</textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </form>
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
