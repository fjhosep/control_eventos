<?php

namespace App\Providers;

use App\Models\ShoppingCart;
use Illuminate\Support\ServiceProvider;

class ShoppingCartProvider extends ServiceProvider
{

    public function register()
    {
        //
    }

    public function boot()
    {
        view()->composer("*", function ($view) {
            $shopping_cart_id = \Session::get('shopping_cart_id');
            $shopping_cart = ShoppingCart::findOrCreateBySessionID($shopping_cart_id);
            \Session::put('shopping_cart_id', $shopping_cart->id);
            // $view->with("shopping_cart", $shopping_cart);
            $view->with("categoryCount", $shopping_cart->categoriesSize());
        });
    }
}
