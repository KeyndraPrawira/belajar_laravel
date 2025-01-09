<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'nis', 'nama', 'jenis__kelamin', 'kelas'];
    public $timestamp = true;
}
