<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InShoppingCart extends Model
{
    use HasFactory;


    static $rules = [
        'category_id' => 'required',
        'shopping_cart_id' => 'required',
    ];


    protected $fillable = [
        'category_id',
        'shopping_cart_id'
    ];
}
