<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['creator_id', 'server_id', 'total', 'status'];


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

    public function server()
    {
        return $this->hasOne(User::class, 'id', 'server_id');
    } 

    public function manager()
    {
        return $this->hasOne(User::class, 'id', 'creator_id');
    } 
}
