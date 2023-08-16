<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\ShoppingCart;
use Illuminate\Http\Request;
use App\Models\InShoppingCart;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ShoppingCartController extends Controller
{

    public function index()
    {

        $shopping_cart_id = \Session::get('shopping_cart_id');
        $shopping_cart = ShoppingCart::findOrCreateBySessionID(
            $shopping_cart_id
        );

        // $categories = $shopping_cart->categories()->get();

        $total = $shopping_cart->total();

        // DB::getQueryLog();

        // $categories = CompetingParticipant::where('user', 'Admin')->category();
        // dd(DB::getQueryLog());

        // DB::getQueryLog();
        // $categories = Category::select('categories')
        //     ->join('competing_participants', 'competing_participants.category_id', 'categories.id')
        //     ->where('competing_participants.user', Auth::user()->name);
        // dd($categories);

        // $categories = Category::with('participants')->where('participants.user', Auth::user()->name)->get();


        // DB::getQueryLog();
        // $categories = Participant::find(1)->categories()->orderBy('id')->get();
        // dd(DB::getQueryLog());

        // $categories = Category::select('categories')
        //     ->join('competing_participants', 'competing_participants.category_id', 'categories.id')
        //     ->where('competing_participants.user', Auth::user()->name);

        // $categories =  Category::all();(

        $count = Category::has('competing_participants')->count();

        $categories = Category::has('competing_participants')->get();

        $total = Category::select('categories')
            ->join('competing_participants', 'competing_participants.category_id', 'categories.id')
            ->where('competing_participants.user', Auth::user()->name)
            ->sum('categories.cost');


        // $categories = $shopping_cart->categories()->get();

        // $total = $shopping_cart->total();

        return view('shopping-cart.index', ['categories' => $categories, 'total' => $total]);
    }

    public function create()
    {
        $inShoppingCart = new InShoppingCart();
        return view('in-shopping-cart.create', compact('inShoppingCart'));
    }


    public function store(Request $request)
    {
        request()->validate(InShoppingCart::$rules);

        $inShoppingCart = InShoppingCart::create($request->all());

        return redirect()->route('in-shopping-carts.index')
            ->with('success', 'InShoppingCart created successfully.');
    }


    public function show($id)
    {
        $inShoppingCart = InShoppingCart::find($id);

        return view('in-shopping-cart.show', compact('inShoppingCart'));
    }


    public function edit($id)
    {
        $inShoppingCart = InShoppingCart::find($id);

        return view('in-shopping-cart.edit', compact('inShoppingCart'));
    }


    public function update(Request $request, InShoppingCart $inShoppingCart)
    {
        request()->validate(InShoppingCart::$rules);

        $inShoppingCart->update($request->all());

        return redirect()->route('in-shopping-carts.index')
            ->with('success', 'InShoppingCart updated successfully');
    }


    public function destroy($id)
    {
        $inShoppingCart = InShoppingCart::find($id)->delete();

        return redirect()->route('in-shopping-carts.index')
            ->with('success', 'InShoppingCart deleted successfully');
    }
}
