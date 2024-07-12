<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk - Index</title>
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
                            <h1>Produk</h1>
                        </div>
                    </div>
                </div>
            </section>

            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Daftar Produk</h3>
                                    <div class="card-tools">
                                        <a href="{{ route('produks.create') }}" class="btn btn-success">Tambah
                                            Produk</a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Kode</th>
                                                <th>Nama</th>
                                                <th>Harga</th>
                                                <th>Stok</th>
                                                <th>Rating</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($produks as $produk)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $produk->kode }}</td>
                                                    <td>{{ $produk->nama }}</td>
                                                    <td>{{ $produk->harga }}</td>
                                                    <td>{{ $produk->stok }}</td>
                                                    <td>{{ $produk->rating }}</td>
                                                    <td>
                                                        <a href="{{ route('produks.show', $produk) }}"
                                                            class="btn btn-info"><i class="bi bi-eye"></i></a>
                                                        <a href="{{ route('produks.edit', $produk) }}"
                                                            class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                                                        <form action="{{ route('produks.destroy', $produk) }}"
                                                            method="POST" style="display:inline;"
                                                            onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger"><i class="bi bi-trash3"></i></button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
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
