<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ordercomplete extends Model
{
    use HasFactory;
    protected $fillable = [
        'file_complete',
        'rating',
        'user_id',
        'order_id',
        'note_translator'
    ];
    public function order(){
        return $this->belongsTo(Order::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
