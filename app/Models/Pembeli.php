<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{
    protected $fillable=['id_pembeli', 'nama_pembeli', 'jenis_kelamin', 'telepon'];
    use HasFactory;

    public function transaksi()
    {
        return $this->hasMany(transaksi::class);
    }

}
