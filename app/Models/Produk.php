<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kategori;


class Produk extends Model
{
    protected $fillable = ['id','nama_produk', 'harga', 'stok', 'id_kategori'];
    

    use HasFactory;

    public function Kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }

    public function deleteImage(){
        if($this->cover && file_exists(public_path('images/produk'. $this->cover))){
            return unlink(public_path('images/produk'. $this->cover));
        }
    }
}
