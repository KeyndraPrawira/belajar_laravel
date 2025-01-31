<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $fillable=['id', 'jumlah', 'tanggal_transaksi', 'id_buku', 'id_pembeli'];
    use HasFactory;

    public function pembeli()
    {
        return $this->belongsTo(pembeli::class, 'id_pembeli');
    }
    public function buku()
    {
        return $this->belongsTo(buku::class, 'id_buku');
    }
}
