<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    use HasFactory;

    protected $fillable = ["status"];

    public function categoriesSize()
    {
        return $this->categories->count();
    }

    public function total()
    {
        return $this->categories()->sum('cost');
    }

    public static function findOrCreateBySessionID($shopping_cart_id)
    {
        if ($shopping_cart_id) {
            // Buscar el carrito de Compras por ID
            return ShoppingCart::findBySession($shopping_cart_id);
        } else {
            // Crear carrito de compras
            return ShoppingCart::createWithoutSession();
        }
    }

    public static function findBySession($shopping_cart_id)
    {
        return ShoppingCart::find($shopping_cart_id);
    }

    public static function createWithoutSession()
    {
        return ShoppingCart::create(['status' => 'incompleted']);
    }

    // -------------------------   Relaciones --------------------
    public function inShoppingCarts()
    {
        return $this->HasMany('App\Models\inShoppingCart');
    }

    public function categories()
    {
        return $this->belongsToMany('App\Models\Category', 'in_shopping_carts');
    }
}
