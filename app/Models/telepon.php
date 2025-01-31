<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class telepon extends Model
{
    use HasFactory;
    
    protected $fillable = ['id','nomor', 'id_pengguna'];
    

    use HasFactory;

    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class, 'id_pengguna');
    }
}
