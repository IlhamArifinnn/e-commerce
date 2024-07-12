<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $fillable = ['kode', 'nama', 'harga', 'stok', 'rating', 'minimal', 'jenis_produk_id', 'deskripsi'];

    public function jenisProduk()
    {
        return $this->belongsTo(JenisProduk::class);
    }

    public function testimonis()
    {
        return $this->hasMany(Testimoni::class);
    }
}
