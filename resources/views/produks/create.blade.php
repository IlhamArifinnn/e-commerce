<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
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
                            <h1>Tambah Produk</h1>
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
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                    <form action="{{ route('produks.store') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="kode">Kode</label>
                                            <input type="text" class="form-control" id="kode" name="kode"
                                                value="{{ old('kode') }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="nama">Nama</label>
                                            <input type="text" class="form-control" id="nama" name="nama"
                                                value="{{ old('nama') }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="harga">Harga</label>
                                            <input type="number" class="form-control" id="harga" name="harga"
                                                value="{{ old('harga') }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="stok">Stok</label>
                                            <input type="number" class="form-control" id="stok" name="stok"
                                                value="{{ old('stok') }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="rating">Rating</label>
                                            <input type="number" class="form-control" id="rating" name="rating"
                                                min="1" max="5" value="{{ old('rating') }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="minimal">Minimal Stok</label>
                                            <input type="number" class="form-control" id="minimal" name="minimal"
                                                value="{{ old('minimal') }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="jenis_produk_id">Jenis Produk</label>
                                            <select class="form-control" id="jenis_produk_id" name="jenis_produk_id"
                                                required>
                                                @foreach ($jenisProduks as $jenisProduk)
                                                    <option value="{{ $jenisProduk->id }}">
                                                        {{ $jenisProduk->nama }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="deskripsi">Deskripsi</label>
                                            <textarea class="form-control" id="deskripsi" name="deskripsi" required>{{ old('deskripsi') }}</textarea>
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
