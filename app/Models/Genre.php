<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $fillable = ['id_genre', 'genre'];
    use HasFactory;
    public function buku()
    {
        return $this->hasMany(buku::class);
    }

}
