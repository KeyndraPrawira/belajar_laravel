<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;

class Costumer extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'name_costumer', 'gender', 'contact'];

    public function order()
    {
        return $this->hasMany(Order::class);
    }
}
