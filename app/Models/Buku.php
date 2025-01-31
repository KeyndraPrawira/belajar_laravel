<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $fillable =['id', 'nama_buku', 'harga', 'stok', 'image', 'id_penerbit', 'tanggal_terbit', 'id_genre' ];
    use HasFactory;

    public function penerbit()
    {
        return $this->belongsTo(penerbit::class, 'id_penerbit');
    }
    public function genre()
    {
        return $this->belongsTo(genre::class, 'id_genre');
    }
    public function transaksi()
    {
        return $this->hasMany(transaksi::class);
    }
    public function deleteImage(){
        if($this->image && file_exists(public_path('images/buku/'. $this->image))){
            return unlink(public_path('images/buku/'. $this->image));
        }
    }
}
