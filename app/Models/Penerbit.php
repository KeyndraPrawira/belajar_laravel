<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penerbit extends Model
{
    protected $fillable=['id_penerbit', 'nama_penerbit'];
    use HasFactory;

    public function buku()
    {
        return $this->hasMany(buku::class);
    }
    use HasFactory;
}
