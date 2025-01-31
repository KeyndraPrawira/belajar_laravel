<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Produk;

class Kategori extends Model
{
    use HasFactory;
    protected $fillable = ['id','nama_kategori'];

    public function produk()
    {
        return $this->hasMany(produk::class);
    }

    
}
