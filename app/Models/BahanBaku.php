<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BahanBaku extends Model
{
    // Menambahkan kolom yang dapat diisi secara massal
    protected $fillable = ['nama_bahan', 'stok', 'kategori_id'];

    // Jika ada relasi, tambahkan di sini
    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
}
