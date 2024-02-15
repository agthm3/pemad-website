<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'service_id',
        'client_request',
        'type_request',
        'status',
        'client_file',
        'receipt'
    ];


    public function service(){
        return $this->belongsTo(Service::class);
    }

}
