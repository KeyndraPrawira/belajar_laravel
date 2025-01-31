<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    protected $fillable = ['id','nama'];
    

    use HasFactory;
//relasi ke table telepon
    public function telepon()
    {
        return $this->hasOne(telepon::class);
    }
}
