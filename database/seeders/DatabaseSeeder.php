<?php

namespace Database\Seeders;

use App\Models\JenisProduk;
use App\Models\KategoriTokoh;
use App\Models\Produk;
use App\Models\Testimoni;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Buat akun admin
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345678'),
            'role' => 'admin',
        ]);
        User::create([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'password' => bcrypt('user1234'),
            'role' => 'user',
        ]);

        KategoriTokoh::create([
            'nama' => 'Pria',
        ]);
        KategoriTokoh::create([
            'nama' => 'Wanita',
        ]);
        KategoriTokoh::create([
            'nama' => 'Anak-Anak',
        ]);

        JenisProduk::create([
            'nama' => 'Baju'
        ]);
        JenisProduk::create([
            'nama' => 'Celana'
        ]);
        JenisProduk::create([
            'nama' => 'Sepatu'
        ]);

        Produk::create([
            'kode' => 'ABC',
            'nama' => 'Uniqlo',
            'harga' => '250000',
            'stok' => '50',
            'rating' => '5',
            'minimal' => '1',
            'jenis_produk_id' => '1',
            'deskripsi' => 'UNIQLO kemeja katun modal kerah terbuka lengan pendek pria original',
        ]);

        Testimoni::create([
            'tanggal' => date('Y-m-d H:i:s'),
            'nama_tokoh' => 'Agus',
            'komentar' => 'Bahan baju tebal, adem dan nyaman',
            'rating' => '5',
            'produk_id' => '1',
            'kategori_tokoh_id' => '1',
        ]);
    }
}
