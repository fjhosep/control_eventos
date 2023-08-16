<?php

namespace App\Http\Controllers;

use App\Models\Participant;
use App\Models\ShoppingCart;
use Illuminate\Http\Request;
use App\Models\InShoppingCart;
use Illuminate\Support\Facades\DB;
use App\Models\CompetingParticipant;
use Illuminate\Support\Facades\Auth;


class InShoppingCartController extends Controller
{

    public function store(Request $request)
    {

        $shopping_cart_id = \Session::get('shopping_cart_id');
        $shopping_cart = ShoppingCart::findOrCreateBySessionID($shopping_cart_id);

        // // DB::enableQueryLog();
        // $participants = Participant::select('participants.user', 'competing_participants.user')
        //     ->join('competing_participants', 'participants.user', 'competing_participants.user')
        //     ->where('competing_participants.category_id', 'category.id')->get();
        // // dd(DB::getQueryLog());

        $competition = CompetingParticipant::select('competing_participants.category_id')
            ->join('participants', 'participants.user', 'competing_participants.user')
            ->where('competing_participants.category_id', $request->category_id)
            ->exists();

        $participant = Participant::select('participants.id')
            ->where('participants.user', Auth::user()->name)
            ->first();


        // @if(Auth::check() && $product->user_id == Auth::user()->id)
        // @endif    
        // $response = InShoppingCart::Create([
        //     'shopping_cart_id' =>  $shopping_cart->id,
        //     'category_id' => $request->category_id,
        // ]);

        // CompetingParticipant::Create([
        //     'user' =>  Auth::user()->name,
        //     'category_id' => $request->category_id,
        // ]);

        if ($competition) {
            return back()
                ->with('success', 'Usted ya esta registrado en esta categoría');
        } else {

            $response = InShoppingCart::Create([
                'shopping_cart_id' =>  $shopping_cart->id,
                'category_id' => $request->category_id,
            ]);

            CompetingParticipant::Create([
                'participant_id' => $participant->id,
                'user' =>  Auth::user()->name,
                'category_id' => $request->category_id,
            ]);

            return redirect('/carrito')
                ->with('success', 'Usted se ha  registrado en esta categoría');
        }


        // if ($response) {
        //     return redirect('/carrito');
        // } else {
        //     return back();
        // }
    }


    public function destroy($id)
    {
        $inShoppingCart = InShoppingCart::find($id)->delete();

        return redirect()->route('in-shopping-carts.index')
            ->with('success', 'InShoppingCart deleted successfully');
    }
}
