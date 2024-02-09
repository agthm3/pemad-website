<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;


    public function orderpending(){
        return $this->hasOne(Orderpending::class);

    }
    
}
