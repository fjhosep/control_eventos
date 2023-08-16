<?php

namespace App\Http\Controllers;


use App\Models\Competition;



class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    //------------------------------------------------------------------------------------------

    public function index()
    {
        $competitions = Competition::All();
        return view('home', compact('competitions'));
    }

    //------------------------------------------------------------------------------------------

    public function show($id)
    {
        $categories = Competition::find($id)->categories()->paginate();

        // DB::getQueryLog();
        // $categories = Category::whereDoesntHave('competing_participants')
        //     ->paginate();
        // dd(DB::getQueryLog());
        // $categories = Competition::find($id)->categories();

        $competition = $id;
        return view('principal.category', compact('categories', 'competition'))
            ->with('i', (request()->input('page', 1) - 1) * $categories->perPage());
    }

    // ---------------------------------------------------------------------------------
    public function wizard($id)
    {
        // DB::enableQueryLog();
        // $categories = Competition::find($id)->categories()->paginate();
        // $categories = Competition::find($id)->categories();
        // dd(DB::getQueryLog());
        $competition = $id;
        return view('principal.wizard', compact('competition'));
    }

    //------------------------------------------------------------------------------------

    public function registro()
    {
        $competitions = Competition::paginate();;
        return view('principal.registro', compact('competitions'))
            ->with('i', (request()->input('page', 1) - 1) * $competitions->perPage());;
    }
}
