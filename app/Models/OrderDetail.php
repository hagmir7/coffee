<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;


    protected $fillable = ['order_id', 'porduct_id', 'totla', 'quantity'];

    public function order(){
        return $this->belongsTo(Order::class, 'order_id');
    }

    public function product(){
        return $this->hasOne(Product::class, 'id', 'product_id');
    }

    protected static function booted()
    {
        static::created(function ($model) {
            $model->total = floatval($model->quantity) * floatval($model->product->price);
        });

        static::updated(function ($model) {
            $model->total = floatval($model->quantity) * floatval($model->product->price);
        });
    }
}
