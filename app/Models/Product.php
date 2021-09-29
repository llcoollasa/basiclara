<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public $fillable = ['name', 'amount'];

    public function productDetails() {
        return $this->hasone(ProductDetail::class, "prod_id", "id");
    }

    public function orderDetail() {
        return $this->belongsTo(OrderDetail::class, "id", "prod_id");
    }
}
