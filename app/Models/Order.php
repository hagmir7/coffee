<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['creator_id', 'server_id', 'total', 'status', 'table_id'];


    public function details(){
        return $this->hasMany(OrderDetail::class, 'order_id');
    }


    public function getTotal(){
        $prices = $this->details->map(function ($item) {
            return $item->total;
        });
        return array_sum($prices->all());
    }

    public function server()
    {
        return $this->hasOne(User::class, 'id', 'server_id');
    } 

    public function manager()
    {
        return $this->hasOne(User::class, 'id', 'creator_id');
    } 
}
