<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Competition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\CategoriesCompetition;


class CategoriesCompetitionController extends Controller
{
    //--------------------------- Listamos las Competencias --------------------
    public function index()
    {
        $competitions = Competition::paginate();

        return view('categories-competition.index', compact('competitions'))
            ->with('i', (request()->input('page', 1) - 1) * $competitions->perPage());
    }

    //-----------------------------------------------------------------------------

    public function edit($id)
    {

        $registro = Category::whereDoesntHave('categories_competitions')
            ->first();

        if (!$registro == null) {


            $categories = Category::whereDoesntHave('categories_competitions')
                ->paginate();

            $competition_id = $id;

            return view('categories-competition.edit', compact('categories', 'competition_id'))
                ->with('i', (request()->input('page', 1) - 1) * $categories->perPage());
        } else {

            return redirect()->route('categories-competition.index')
                ->with('success', 'No hay categorias para asignar');
        }
    }

    //-----------------------------------------------------------------------------
    public function create()
    {
        $categoriesCompetition = new CategoriesCompetition();
        return view('categories-competition.create', compact('categoriesCompetition'));
    }

    //-----------------------------------------------------------------------------
    public function store(Request $request)
    {
        // dd($request);
        //request()->validate(CategoriesCompetition::$rules);

        // $categoriesCompetition = CategoriesCompetition::create($request->all());

        foreach ($request->category as $key => $name) {

            $insert = [

                'category_id' => $request->category[$key],
                'competition_id' => $request->competition,
            ];

            DB::table('categories_competitions')->insert($insert);
        }

        return redirect()
            ->back()
            ->with('success', 'Categorias asignadas satisfactoriamente.');
        // return redirect()
        // ->action('CategoriesCompetitionController@categories-competition.edit',   $competition_id)
        // ->with('success', 'Se agrego la categoría de manera satisfacctoria.');
    }
    //
    public function show($id)
    {
        // $Competition = Competition::find($id);

        // $categories = Category::join('competition_id', '=', $Competition)->get();

        // DB::enableQueryLog();

        // $categories = Competition::find($id)->categories()->where('id', )->get();
        $categories = Competition::find($id)->categories()->get();

        // dd(DB::getQueryLog());
        // $category = Category::find(1)->entradas()->where('articulo_id', '1')->get();  

        return view('categories-competition.show', compact('categories'));
    }
    //
    public function update(Request $request, CategoriesCompetition $categoriesCompetition)
    {
        request()->validate(CategoriesCompetition::$rules);

        $categoriesCompetition->update($request->all());

        return redirect()->route('categories-competitions.index')
            ->with('success', 'CategoriesCompetition updated successfully');
    }
}
