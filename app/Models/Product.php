<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['id','name_product', 'merk', 'price', 'stock'];

   public function order ()
   {
    return $this->hasMany(Order::class);
   }
  
}
