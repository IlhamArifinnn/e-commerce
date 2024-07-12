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

                                    <form action="{{ route('testimonis.store') }}" method="POST">
                                        @csrf
                                        <!-- Form fields -->
                                        <div class="form-group">
                                            <label for="tanggal">Tanggal</label>
                                            <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ old('tanggal') }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="nama_tokoh">Nama Tokoh</label>
                                            <input type="text" class="form-control" id="nama_tokoh" name="nama_tokoh" value="{{ old('nama_tokoh') }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="komentar">Komentar</label>
                                            <textarea class="form-control" id="komentar" name="komentar" rows="3" required>{{ old('komentar') }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="rating">Rating</label>
                                            <input type="number" class="form-control" id="rating" name="rating" min="1" max="5" value="{{ old('rating') }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="produk_id">Produk</label>
                                            <select class="form-control" id="produk_id" name="produk_id" required>
                                                @foreach ($produks as $produk)
                                                    <option value="{{ $produk->id }}">{{ $produk->nama }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="kategori_tokoh_id">Kategori Tokoh</label>
                                            <select class="form-control" id="kategori_tokoh_id" name="kategori_tokoh_id" required>
                                                @foreach ($kategoriTokohs as $kategoriTokoh)
                                                    <option value="{{ $kategoriTokoh->id }}">{{ $kategoriTokoh->nama }}</option>
                                                @endforeach
                                            </select>
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
