<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table='product';
    protected $fillable=[
        'p_id',
        'p_name',
        'p_label',
        'o_price',
        'a_price',

    ];
}

