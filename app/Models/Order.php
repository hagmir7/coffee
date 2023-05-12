<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['creator', 'server', 'total', 'status'];


    public function details(){
        return $this->hasMany(OrderDetail::class, 'order_id');
    }


    public function getTotal(){
        $total = 0;
        foreach($this->details as $item){
            $total += $item->total;
        }
        return $total;
    }
}
