<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;

    /**
     * Atribut yang dapat ditetapkan secara massal
     * @var array<int, string>
     */
    protected $fillable = [
        'nama_buku',
        'penerbit',
        'deskripsi',
        'tahun_penerbit',
        'jumlah_halaman',
    ];
}
