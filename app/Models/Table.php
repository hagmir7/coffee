<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    use HasFactory;
    protected $fillable = [ 'server_id'];

    public function server(){
        return $this->belongsTo(User::class, 'server_id');
    }
}
