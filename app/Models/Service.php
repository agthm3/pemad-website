<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable= [
        'image',
        'title',
        'description',
        'price'
    ];

    public function typerequest(){
        return $this->hasMany(Typerequest::class);
    }
}
